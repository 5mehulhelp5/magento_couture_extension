<?php
namespace CoutureSearch\SearchAPI\Model\Queue;

use Psr\Log\LoggerInterface;
use CoutureSearch\SearchAPI\Model\SyncHistoryFactory;
use CoutureSearch\SearchAPI\Model\ResourceModel\SyncHistory as SyncHistoryResource;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory;
use Magento\Catalog\Model\Product\Attribute\Source\Status as ProductStatus;
use Magento\Catalog\Model\Product\Visibility as ProductVisibility;
use Magento\Framework\HTTP\Client\Curl;
use Magento\Framework\Serialize\Serializer\Json;
use CoutureSearch\SearchAPI\Helper\Data as CoutureHelper; 

class Consumer
{

    const BATCH_SIZE = 100;
    const TOTAL_LIMIT = 100000000;

    /** @var LoggerInterface */
    protected $logger;
    /** @var SyncHistoryFactory */
    protected $syncHistoryFactory;
    /** @var SyncHistoryResource */
    protected $syncHistoryResource;
    /** @var ProductCollectionFactory */
    protected $productCollectionFactory;
    /** @var ProductVisibility */
    protected $productVisibility;
    /** @var Curl */
    protected $curl;
    /** @var Json */
    protected $json;
    protected $coutureHelper; 

    public function __construct(
        LoggerInterface $logger,
        SyncHistoryFactory $syncHistoryFactory,
        SyncHistoryResource $syncHistoryResource,
        ProductCollectionFactory $productCollectionFactory,
        ProductVisibility $productVisibility,
        Curl $curl,
        Json $json,
        CoutureHelper $coutureHelper
    ) {
        $this->logger = $logger;
        $this->syncHistoryFactory = $syncHistoryFactory;
        $this->syncHistoryResource = $syncHistoryResource;
        $this->productCollectionFactory = $productCollectionFactory;
        $this->productVisibility = $productVisibility;
        $this->curl = $curl;
        $this->json = $json;
        $this->coutureHelper = $coutureHelper;
    }


    /**
    * Finds and cancels all other jobs that are still in the 'Queued' state.
    * @param int $currentJobId The ID of the job that is about to start.
    */
    private function cancelOutdatedJobs(int $currentJobId)
    {
        $collection = $this->syncHistoryFactory->create()->getCollection();
        $collection->addFieldToFilter('status', ['eq' => 'Queued']);
        $collection->addFieldToFilter('entity_id', ['neq' => $currentJobId]); // Exclude the current job

        foreach ($collection as $outdatedJob) {
            $outdatedJob->setStatus('Cancelled');
            $outdatedJob->setMessage('Cancelled because a newer sync request was started.');
            $this->syncHistoryResource->save($outdatedJob);
            $this->logger->info('Cancelled outdated sync request ID: ' . $outdatedJob->getId());
        }
    }

    public function process($syncHistoryId)
    {
        $this->logger->info('--- Starting catalogue sync for history ID: ' . $syncHistoryId);
        $syncHistory = $this->syncHistoryFactory->create();
        $this->syncHistoryResource->load($syncHistory, $syncHistoryId);

        if (!$syncHistory->getId()) {
            $this->logger->error('Sync history record not found for ID: ' . $syncHistoryId);
            return;
        }

        // --- FIX #1: IMMEDIATE CANCELLATION CHECK ---
        // Check the status right away. If it's already cancelled, stop immediately.
        if ($syncHistory->getStatus() === 'Cancelled') {
            $this->logger->info('Sync for history ID ' . $syncHistoryId . ' was already cancelled. Discarding job.');
            return; // Stop processing
        }

        try {
            // Cancel any older "Queued" jobs
            $this->cancelOutdatedJobs($syncHistoryId);

            $syncHistory->setStatus('Processing');
            $syncHistory->setMessage('Sync started. Preparing to export products.');
            $this->syncHistoryResource->save($syncHistory);

            $collection = $this->productCollectionFactory->create();
            $collection->addAttributeToSelect('*')
                ->addAttributeToFilter('status', ProductStatus::STATUS_ENABLED)
                ->setVisibility($this->productVisibility->getVisibleInSiteIds())
                ->setPageSize(self::BATCH_SIZE);

            // 2. Get the actual size of the collection
            $totalProductsInStore = $collection->getSize();

            // 3. Determine the real number of products to sync
            $productsToSync = min($totalProductsInStore, self::TOTAL_LIMIT);

            // 4. Calculate the correct number of pages based on the real count
            $totalPages = ceil($productsToSync / self::BATCH_SIZE);
            
            $this->logger->info('Total products to sync: ' . $productsToSync . ' in ' . $totalPages . ' batches.');

            $syncSucceeded = true; // Flag to track overall success
            
            for ($currentPage = 1; $currentPage <= $totalPages; $currentPage++) {
                // --- CORRECTED CANCELLATION CHECK ---
                // Create a fresh model instance to guarantee a clean read from the database.
                $currentStatusModel = $this->syncHistoryFactory->create();
                $this->syncHistoryResource->load($currentStatusModel, $syncHistoryId);
                
                $this->logger->info('Status: '. $currentStatusModel->getStatus());

                if ($currentStatusModel->getStatus() === 'Cancelled') {
                    $this->logger->info('Sync for history ID ' . $syncHistoryId . ' was cancelled by user. Stopping process.');
                    // Update the original model's status as well so the final check works
                    $syncHistory->setStatus('Cancelled');
                    $syncSucceeded = false; // Mark as not successful
                    break; // Exit the loop
                }
                // --- END CANCELLATION CHECK ---

                $collection->setCurPage($currentPage);
                $this->logger->info('Processing batch ' . $currentPage . ' of ' . $totalPages);

                $payload = [];
                foreach ($collection as $product) {
                    $payload[] = $product->getData();
                }

                if (empty($payload)) {
                    $this->logger->warning('Batch ' . $currentPage . ' was empty. Skipping.');
                    continue;
                }

                if (!$this->sendBatchToApi(['payload' => $payload, 'page' => $currentPage])) {
                    $syncSucceeded = false; // Mark as failed
                    $syncHistory->setStatus('Failed');
                    $syncHistory->setMessage('API request failed on batch ' . $currentPage . '. Check logs for details.');
                    $this->syncHistoryResource->save($syncHistory);
                    break; // Stop processing further batches
                }

                $collection->clear();
            }

            // Final status update: only set to Success if it wasn't cancelled
            if ($syncSucceeded && $syncHistory->getStatus() !== 'Cancelled') {
                $syncHistory->setStatus('Success');
                $syncHistory->setMessage('Catalogue sync completed successfully.');
                $this->syncHistoryResource->save($syncHistory);
                $this->logger->info('--- Catalogue sync finished successfully for history ID: ' . $syncHistoryId);
            }

        } catch (\Exception $e) {
            $this->logger->error('Error during catalogue sync: ' . $e->getMessage());
            $this->syncHistoryResource->load($syncHistory, $syncHistoryId);
            // Only update if it wasn't cancelled
            if ($syncHistory->getStatus() !== 'Cancelled') {
                $syncHistory->setStatus('Failed');
                $syncHistory->setMessage('Error: ' . $e->getMessage());
                $this->syncHistoryResource->save($syncHistory);
            }
        }
    }

    private function sendBatchToApi(array $payload): bool
    {
        try {
            $apiUrl = $this->coutureHelper->getSyncEndpointUrl();
            if (empty($apiUrl)) {
                throw new LocalizedException(__('Sync API Endpoint URL is not configured.'));
            }

            $apiKey = $this->coutureHelper->getUniversalApiKey();
            $storeIdentifier = $this->coutureHelper->getStoreIdentifier();

            $this->curl->addHeader("Content-Type", "application/json");
            $this->curl->addHeader("X-Api-Key", $apiKey ?? '');
            $this->curl->addHeader("X-Store-Identifier", $storeIdentifier);

            $this->curl->post($apiUrl, $this->json->serialize($payload));

            $statusCode = $this->curl->getStatus();
            if ($statusCode >= 300) {
                $responseBody = $this->curl->getBody();
                $this->logger->error('API Error: Received HTTP status ' . $statusCode);
                $this->logger->error('API Response Body: ' . $responseBody);
                return false; // Indicate failure
            }

            $this->logger->info('API Response: ' . $this->curl->getBody());
            return true; // Indicate success

        } catch (\Exception $e) {
            $this->logger->error('Exception in sendBatchToApi: ' . $e->getMessage());
            return false; // Indicate failure
        }
    }
}

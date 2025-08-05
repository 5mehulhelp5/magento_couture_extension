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

class Consumer
{
    const BATCH_SIZE = 100;
    const TOTAL_LIMIT = 10000;
    const API_ENDPOINT = 'http://host.docker.internal:8000/api/catalogue-sync'; // Use docker internal host

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

    public function __construct(
        LoggerInterface $logger,
        SyncHistoryFactory $syncHistoryFactory,
        SyncHistoryResource $syncHistoryResource,
        ProductCollectionFactory $productCollectionFactory,
        ProductVisibility $productVisibility,
        Curl $curl,
        Json $json
    ) {
        $this->logger = $logger;
        $this->syncHistoryFactory = $syncHistoryFactory;
        $this->syncHistoryResource = $syncHistoryResource;
        $this->productCollectionFactory = $productCollectionFactory;
        $this->productVisibility = $productVisibility;
        $this->curl = $curl;
        $this->json = $json;
    }

    /**
     * Process the message from the queue
     *
     * @param int $syncHistoryId
     * @return void
     */
    public function process($syncHistoryId)
    {
        $this->logger->info('--- Starting catalogue sync for history ID: ' . $syncHistoryId);
        $syncHistory = $this->syncHistoryFactory->create();
        $this->syncHistoryResource->load($syncHistory, $syncHistoryId);

        if (!$syncHistory->getId()) {
            $this->logger->error('Sync history record not found for ID: ' . $syncHistoryId);
            return;
        }

        try {
            // 1. Update status to "Processing"
            $syncHistory->setStatus('Processing');
            $syncHistory->setMessage('Sync started. Preparing to export products.');
            $this->syncHistoryResource->save($syncHistory);

            // 2. Prepare the product collection
            $collection = $this->productCollectionFactory->create();
            $collection->addAttributeToSelect('*')
                ->addAttributeToFilter('status', ProductStatus::STATUS_ENABLED)
                ->setVisibility($this->productVisibility->getVisibleInSiteIds())
                ->setPageSize(self::BATCH_SIZE)
                ->setCurPage(1); // Start with page 1

            // Apply the total limit for this example
            $collection->getSelect()->limit(self::TOTAL_LIMIT);
            $totalPages = ceil(self::TOTAL_LIMIT / self::BATCH_SIZE);

            $this->logger->info('Total products to sync: ' . self::TOTAL_LIMIT . ' in ' . $totalPages . ' batches.');

            // 3. Loop through pages and send batches
            for ($currentPage = 1; $currentPage <= $totalPages; $currentPage++) {
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

                // Send the batch to your API
                $this->sendBatchToApi(['payload' => $payload, 'page' => $currentPage]);
                // sleep(5);
                $collection->clear();
            }

            // 4. Update status to "Success"
            $syncHistory->setStatus('Success');
            $syncHistory->setMessage('Catalogue sync completed successfully.');
            $this->syncHistoryResource->save($syncHistory);
            $this->logger->info('--- Catalogue sync finished successfully for history ID: ' . $syncHistoryId);

        } catch (\Exception $e) {
            $this->logger->error('Error during catalogue sync: ' . $e->getMessage());
            // 5. Update status to "Failed"
            $syncHistory->setStatus('Failed');
            $syncHistory->setMessage('Error: ' . $e->getMessage());
            $this->syncHistoryResource->save($syncHistory);
        }
    }

    /**
     * Sends a batch of product data to the external API
     * @param array $payload
     */
    private function sendBatchToApi(array $payload)
    {
        $this->curl->addHeader("Content-Type", "application/json");
        $this->curl->post(self::API_ENDPOINT, $this->json->serialize($payload));

        $this->logger->info('API Response: ' . $this->curl->getBody());
    }
}

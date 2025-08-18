<?php
namespace CoutureSearch\SearchAPI\Model\Queue;

use Psr\Log\LoggerInterface;
use CoutureSearch\SearchAPI\Model\SyncHistoryFactory;
use CoutureSearch\SearchAPI\Model\ResourceModel\SyncHistory as SyncHistoryResource;
use Magento\Sales\Model\ResourceModel\Order\CollectionFactory as OrderCollectionFactory;
use Magento\Framework\HTTP\Client\Curl;
use Magento\Framework\Serialize\Serializer\Json;
use CoutureSearch\SearchAPI\Helper\Data as CoutureHelper;

class OrderConsumer extends AbstractConsumer
{
    const BATCH_SIZE = 50;

    protected $orderCollectionFactory;
    protected $curl;
    protected $json;
    protected $coutureHelper;

    public function __construct(
        LoggerInterface $logger,
        SyncHistoryFactory $syncHistoryFactory,
        SyncHistoryResource $syncHistoryResource,
        OrderCollectionFactory $orderCollectionFactory,
        Curl $curl,
        Json $json,
        CoutureHelper $coutureHelper
    ) {
        $this->orderCollectionFactory = $orderCollectionFactory;
        $this->curl = $curl;
        $this->json = $json;
        $this->coutureHelper = $coutureHelper;
        parent::__construct($logger, $syncHistoryFactory, $syncHistoryResource);
    }

    protected function getRequestIdPrefix(): string
    {
        return 'MANUAL-ORDER-'; // Matches the prefix in the Start.php controller
    }

    public function executeSync(\CoutureSearch\SearchAPI\Model\SyncHistory $syncHistory): void
    {
        $collection = $this->orderCollectionFactory->create()->setPageSize(self::BATCH_SIZE);
        $totalPages = $collection->getLastPageNumber();
        $this->logger->info('Total orders to sync: ' . $collection->getSize() . ' in ' . $totalPages . ' batches.');

        $syncSucceeded = true;

        for ($currentPage = 1; $currentPage <= $totalPages; $currentPage++) {
            $currentStatusModel = $this->syncHistoryFactory->create();
            $this->syncHistoryResource->load($currentStatusModel, $syncHistory->getId());
            if ($currentStatusModel->getStatus() === 'Cancelled') {
                $this->logger->info('Order sync for history ID ' . $syncHistory->getId() . ' was cancelled by user. Stopping process.');
                $syncHistory->setStatus('Cancelled');
                $syncSucceeded = false;
                break;
            }

            $collection->setCurPage($currentPage);
            $this->logger->info('Processing order batch ' . $currentPage . ' of ' . $totalPages);

            $orderHistoryPayload = [];
            foreach ($collection as $order) {
                $orderItems = [];
                foreach ($order->getAllVisibleItems() as $item) {
                    $orderItems[] = $item->getData();
                }
                $orderData = $order->getData();
                $orderData['items'] = $orderItems;
                $orderHistoryPayload[] = $orderData;
            }

            if (empty($orderHistoryPayload)) {
                continue;
            }

            if (!$this->sendBatchToApi(['order_history' => $orderHistoryPayload, 'page' => $currentPage])) {
                $syncSucceeded = false;
                $syncHistory->setStatus('Failed');
                $syncHistory->setMessage('API request failed on order batch ' . $currentPage . '. Check logs for details.');
                $this->syncHistoryResource->save($syncHistory);
                break;
            }

            $collection->clear();
        }

        if ($syncSucceeded && $syncHistory->getStatus() !== 'Cancelled') {
            $syncHistory->setStatus('Success');
            $syncHistory->setMessage('Order history sync completed successfully.');
            $this->syncHistoryResource->save($syncHistory);
            $this->logger->info('--- Order sync finished successfully for history ID: ' . $syncHistory->getId());
        }
    }

    private function sendBatchToApi(array $payload): bool
    {
        try {
            $apiUrl = $this->coutureHelper->getSyncEndpointUrl();
            if (empty($apiUrl)) {
                throw new \Exception('Sync API Endpoint URL is not configured.');
            }

            $apiKey = $this->coutureHelper->getUniversalApiKey();
            $storeIdentifier = $this->coutureHelper->getStoreIdentifier();

            $this->curl->addHeader("Content-Type", "application/json");
            $this->curl->addHeader("X-Api-Key", $apiKey ?? '');
            $this->curl->addHeader("X-Store-Identifier", $storeIdentifier);

            $this->curl->post($apiUrl, $this->json->serialize($payload));

            $statusCode = $this->curl->getStatus();
            if ($statusCode >= 300) {
                $this->logger->error('API Error: Received HTTP status ' . $statusCode);
                return false;
            }

            return true;
        } catch (\Exception $e) {
            $this->logger->error('Exception in sendBatchToApi: ' . $e->getMessage());
            return false;
        }
    }
}

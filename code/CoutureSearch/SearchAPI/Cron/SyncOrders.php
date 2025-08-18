<?php
declare(strict_types=1);

namespace CoutureSearch\SearchAPI\Cron;

use Psr\Log\LoggerInterface;
use CoutureSearch\SearchAPI\Model\SyncHistoryFactory;
use CoutureSearch\SearchAPI\Model\ResourceModel\SyncHistory\CollectionFactory;
use Magento\Framework\MessageQueue\PublisherInterface;

class SyncOrders
{
    const TOPIC_NAME = 'couture.order.sync';

    protected $logger;
    protected $syncHistoryFactory;
    protected $collectionFactory;
    protected $publisher;

    public function __construct(
        LoggerInterface $logger,
        SyncHistoryFactory $syncHistoryFactory,
        CollectionFactory $collectionFactory,
        PublisherInterface $publisher
    ) {
        $this->logger = $logger;
        $this->syncHistoryFactory = $syncHistoryFactory;
        $this->collectionFactory = $collectionFactory;
        $this->publisher = $publisher;
    }

    public function execute()
    {
        $this->logger->info('--- Cron Job: couture_order_sync_cron started ---');

        $activeSyncCollection = $this->collectionFactory->create();
        $activeSyncCollection->addFieldToFilter(
            'status',
            ['in' => ['Queued', 'Processing']]
        )->addFieldToFilter(
            'request_id',
            ['like' => 'ORDER-SYNC-%'] // Only check for other order syncs
        );

        if ($activeSyncCollection->getSize() > 0) {
            $this->logger->info('An active order sync is already in progress. Cron job will not queue a new one.');
            return;
        }

        try {
            $syncHistory = $this->syncHistoryFactory->create();
            $syncHistory->setData([
                'request_id' => uniqid('ORDER-SYNC-'),
                'status' => 'Queued',
                'message' => 'Order sync request has been added to the queue by the automated cron job.'
            ]);
            $syncHistory->save();

            $this->publisher->publish(self::TOPIC_NAME, $syncHistory->getId());
            $this->logger->info('Successfully queued new order sync request ID: ' . $syncHistory->getId());

        } catch (\Exception $e) {
            $this->logger->error('Cron Job Error: Failed to queue order sync request. ' . $e->getMessage());
        }

        $this->logger->info('--- Cron Job: couture_order_sync_cron finished ---');
    }
}

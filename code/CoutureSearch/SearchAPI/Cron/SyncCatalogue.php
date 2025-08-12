<?php
declare(strict_types=1);

namespace CoutureSearch\SearchAPI\Cron;

use Psr\Log\LoggerInterface;
use CoutureSearch\SearchAPI\Model\SyncHistoryFactory;
use CoutureSearch\SearchAPI\Model\ResourceModel\SyncHistory\CollectionFactory;
use Magento\Framework\MessageQueue\PublisherInterface;

class SyncCatalogue
{
    const TOPIC_NAME = 'couture.catalogue.sync';

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

    /**
     * This method is executed by the Magento cron scheduler.
     */
    public function execute()
    {
        $this->logger->info('--- Cron Job: couture_catalogue_sync_cron started ---');

        // 1. Check if a sync is already queued or processing to prevent duplicates
        $activeSyncCollection = $this->collectionFactory->create();
        $activeSyncCollection->addFieldToFilter(
            'status',
            ['in' => ['Queued', 'Processing']]
        );

        if ($activeSyncCollection->getSize() > 0) {
            $this->logger->info('An active sync is already in progress. Cron job will not queue a new one.');
            return;
        }

        // 2. If no active sync, create a new record and publish to the queue
        try {
            $syncHistory = $this->syncHistoryFactory->create();
            $syncHistory->setData([
                'request_id' => uniqid('CRON-SYNC-'),
                'status' => 'Queued',
                'message' => 'Sync request has been added to the queue by the automated cron job.'
            ]);
            $syncHistory->save();

            $this->publisher->publish(self::TOPIC_NAME, $syncHistory->getId());
            $this->logger->info('Successfully queued new sync request ID: ' . $syncHistory->getId());

        } catch (\Exception $e) {
            $this->logger->error('Cron Job Error: Failed to queue sync request. ' . $e->getMessage());
        }

        $this->logger->info('--- Cron Job: couture_catalogue_sync_cron finished ---');
    }
}

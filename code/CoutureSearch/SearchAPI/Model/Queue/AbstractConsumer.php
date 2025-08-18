<?php
namespace CoutureSearch\SearchAPI\Model\Queue;

use Psr\Log\LoggerInterface;
use CoutureSearch\SearchAPI\Model\SyncHistoryFactory;
use CoutureSearch\SearchAPI\Model\ResourceModel\SyncHistory as SyncHistoryResource;

abstract class AbstractConsumer
{
    protected $logger;
    protected $syncHistoryFactory;
    protected $syncHistoryResource;

    /**
     * Child classes must define their unique request ID prefix.
     * e.g., 'MANUAL-CATALOG-' or 'MANUAL-ORDER-'
     * @return string
     */
    abstract protected function getRequestIdPrefix(): string;

    /**
     * This is where the child class will implement its specific sync logic.
     * @param \CoutureSearch\SearchAPI\Model\SyncHistory $syncHistory
     */
    abstract protected function executeSync(\CoutureSearch\SearchAPI\Model\SyncHistory $syncHistory): void;

    public function __construct(
        LoggerInterface $logger,
        SyncHistoryFactory $syncHistoryFactory,
        SyncHistoryResource $syncHistoryResource
    ) {
        $this->logger = $logger;
        $this->syncHistoryFactory = $syncHistoryFactory;
        $this->syncHistoryResource = $syncHistoryResource;
    }

    public function process($syncHistoryId)
    {
        $this->logger->info('--- Starting sync for history ID: ' . $syncHistoryId);
        $syncHistory = $this->syncHistoryFactory->create();
        $this->syncHistoryResource->load($syncHistory, $syncHistoryId);

        if (!$syncHistory->getId()) {
            $this->logger->error('Sync history record not found for ID: ' . $syncHistoryId);
            return;
        }

        if ($syncHistory->getStatus() === 'Cancelled') {
            $this->logger->info('Sync for history ID ' . $syncHistoryId . ' was already cancelled. Discarding job.');
            return;
        }

        try {
            $this->cancelOutdatedJobs($syncHistoryId);

            $syncHistory->setStatus('Processing');
            $syncHistory->setMessage('Sync started.');
            $this->syncHistoryResource->save($syncHistory);

            // Call the specific implementation from the child class
            $this->executeSync($syncHistory);

        } catch (\Exception $e) {
            $this->logger->error('Error during sync for ID ' . $syncHistoryId . ': ' . $e->getMessage());
            $this->syncHistoryResource->load($syncHistory, $syncHistoryId);
            if ($syncHistory->getStatus() !== 'Cancelled') {
                $syncHistory->setStatus('Failed');
                $syncHistory->setMessage('Error: ' . $e->getMessage());
                $this->syncHistoryResource->save($syncHistory);
            }
        }
    }

    private function cancelOutdatedJobs(int $currentJobId)
    {
        $collection = $this->syncHistoryFactory->create()->getCollection();
        $collection->addFieldToFilter('status', ['eq' => 'Queued']);
        $collection->addFieldToFilter('entity_id', ['neq' => $currentJobId]);
        // THIS IS THE KEY FIX: Only cancel jobs of the same type
        $collection->addFieldToFilter('request_id', ['like' => $this->getRequestIdPrefix() . '%']);

        foreach ($collection as $outdatedJob) {
            $outdatedJob->setStatus('Cancelled');
            $outdatedJob->setMessage('Cancelled because a newer sync of the same type was started.');
            $this->syncHistoryResource->save($outdatedJob);
            $this->logger->info('Cancelled outdated sync request ID: ' . $outdatedJob->getId());
        }
    }
}

<?php
namespace CoutureSearch\SearchAPI\Controller\Adminhtml\Sync;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use CoutureSearch\SearchAPI\Model\SyncHistoryFactory;
use CoutureSearch\SearchAPI\Model\ResourceModel\SyncHistory\CollectionFactory;
use Magento\Framework\MessageQueue\PublisherInterface;
use Magento\Framework\Exception\LocalizedException;

class Start extends Action
{
    const TOPIC_NAME = 'couture.catalogue.sync';

    /** @var JsonFactory */
    protected $resultJsonFactory;
    /** @var SyncHistoryFactory */
    protected $syncHistoryFactory;
    /** @var CollectionFactory */
    protected $collectionFactory;
    /** @var PublisherInterface */
    protected $publisher;

    public function __construct(
        Context $context,
        JsonFactory $jsonFactory,
        SyncHistoryFactory $syncHistoryFactory,
        CollectionFactory $collectionFactory, // Added dependency
        PublisherInterface $publisher
    ) {
        $this->resultJsonFactory = $jsonFactory;
        $this->syncHistoryFactory = $syncHistoryFactory;
        $this->collectionFactory = $collectionFactory; // Added dependency
        $this->publisher = $publisher;
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->resultJsonFactory->create();

        // --- START: VALIDATION LOGIC ---
        // Check if a sync is already in progress
        $activeSyncCollection = $this->collectionFactory->create();
        $activeSyncCollection->addFieldToFilter(
            'status',
            ['in' => ['Queued', 'Processing']]
        );

        if ($activeSyncCollection->getSize() > 0) {
            // If an active sync is found, return an error message.
            return $result->setData([
                'error' => true,
                'message' => __('A catalogue sync is already in progress. Please wait for it to complete before starting a new one.')
            ]);
        }
        // --- END: VALIDATION LOGIC ---

        try {
            // Create a new record in our history table
            $syncHistory = $this->syncHistoryFactory->create();
            $syncHistory->setData([
                'request_id' => uniqid('SYNC-'),
                'status' => 'Queued',
                'message' => 'Sync request has been added to the queue.'
            ]);
            $syncHistory->save();

            // Publish the ID of the new record to the message queue
            $this->publisher->publish(self::TOPIC_NAME, $syncHistory->getId());

            return $result->setData(['message' => 'Sync request successfully queued. Check status with Refresh.']);
        } catch (LocalizedException $e) {
            return $result->setData(['error' => true, 'message' => $e->getMessage()]);
        } catch (\Exception $e) {
            return $result->setData(['error' => true, 'message' => 'An unexpected error occurred while queueing the sync.']);
        }
    }
}

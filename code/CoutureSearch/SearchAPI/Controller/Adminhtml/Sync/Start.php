<?php
namespace CoutureSearch\SearchAPI\Controller\Adminhtml\Sync;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use CoutureSearch\SearchAPI\Model\SyncHistoryFactory;
use Magento\Framework\MessageQueue\PublisherInterface;
use Magento\Framework\Exception\LocalizedException;

class Start extends Action
{
    const TOPIC_NAME = 'couture.catalogue.sync';

    /** @var JsonFactory */
    protected $resultJsonFactory;
    /** @var SyncHistoryFactory */
    protected $syncHistoryFactory;
    /** @var PublisherInterface */
    protected $publisher;

    public function __construct(
        Context $context,
        JsonFactory $jsonFactory,
        SyncHistoryFactory $syncHistoryFactory,
        PublisherInterface $publisher
    ) {
        $this->resultJsonFactory = $jsonFactory;
        $this->syncHistoryFactory = $syncHistoryFactory;
        $this->publisher = $publisher;
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->resultJsonFactory->create();
        try {
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

<?php
namespace CoutureSearch\SearchAPI\Controller\Adminhtml\Sync;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use CoutureSearch\SearchAPI\Model\SyncHistoryFactory;
use Magento\Framework\Exception\LocalizedException;

class Start extends Action
{
    /** @var JsonFactory */
    protected $resultJsonFactory;
    /** @var SyncHistoryFactory */
    protected $syncHistoryFactory;

    public function __construct(
        Context $context,
        JsonFactory $jsonFactory,
        SyncHistoryFactory $syncHistoryFactory
    ) {
        $this->resultJsonFactory = $jsonFactory;
        $this->syncHistoryFactory = $syncHistoryFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->resultJsonFactory->create();
        try {
            // Create a new record in our history table
            $syncHistory = $this->syncHistoryFactory->create();
            $syncHistory->setData([
                'request_id' => uniqid('SYNC-'),
                'status' => 'Queued',
                'message' => 'Sync request has been added to the queue.'
            ]);
            $syncHistory->save();

            // In the future, this is where you would publish a message to the queue.

            return $result->setData(['message' => 'Sync request successfully queued.']);
        } catch (LocalizedException $e) {
            return $result->setData(['error' => true, 'message' => $e->getMessage()]);
        } catch (\Exception $e) {
            return $result->setData(['error' => true, 'message' => 'An unexpected error occurred.']);
        }
    }
}

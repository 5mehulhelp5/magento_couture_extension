<?php
namespace CoutureSearch\SearchAPI\Controller\Adminhtml\Sync;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use CoutureSearch\SearchAPI\Model\SyncHistoryFactory;
use CoutureSearch\SearchAPI\Model\ResourceModel\SyncHistory as SyncHistoryResource;

class Cancel extends Action
{
    /** @var JsonFactory */
    protected $resultJsonFactory;
    /** @var SyncHistoryFactory */
    protected $syncHistoryFactory;
    /** @var SyncHistoryResource */
    protected $syncHistoryResource;

    public function __construct(
        Context $context,
        JsonFactory $jsonFactory,
        SyncHistoryFactory $syncHistoryFactory,
        SyncHistoryResource $syncHistoryResource
    ) {
        $this->resultJsonFactory = $jsonFactory;
        $this->syncHistoryFactory = $syncHistoryFactory;
        $this->syncHistoryResource = $syncHistoryResource;
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->resultJsonFactory->create();
        $syncId = $this->getRequest()->getParam('id');

        if (!$syncId) {
            return $result->setData(['error' => true, 'message' => 'Sync ID is required.']);
        }

        try {
            $syncHistory = $this->syncHistoryFactory->create();
            $this->syncHistoryResource->load($syncHistory, $syncId);

            if (!$syncHistory->getId()) {
                return $result->setData(['error' => true, 'message' => 'Sync request not found.']);
            }

            // Only allow cancellation if the job is queued or processing
            if (in_array($syncHistory->getStatus(), ['Queued', 'Processing'])) {
                $syncHistory->setStatus('Cancelled');
                $syncHistory->setMessage('Sync was cancelled by the user.');
                $this->syncHistoryResource->save($syncHistory);
                return $result->setData(['message' => 'Sync request has been cancelled.']);
            } else {
                return $result->setData(['error' => true, 'message' => 'This sync request cannot be cancelled as it is already completed or failed.']);
            }
        } catch (\Exception $e) {
            return $result->setData(['error' => true, 'message' => 'An error occurred: ' . $e->getMessage()]);
        }
    }
}

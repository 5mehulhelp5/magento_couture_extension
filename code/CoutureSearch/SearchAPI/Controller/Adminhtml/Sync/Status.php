<?php
namespace CoutureSearch\SearchAPI\Controller\Adminhtml\Sync;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use CoutureSearch\SearchAPI\Model\ResourceModel\SyncHistory\CollectionFactory;

class Status extends Action
{
    /** @var JsonFactory */
    protected $resultJsonFactory;
    /** @var CollectionFactory */
    protected $collectionFactory;

    public function __construct(
        Context $context,
        JsonFactory $jsonFactory,
        CollectionFactory $collectionFactory
    ) {
        $this->resultJsonFactory = $jsonFactory;
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $collection = $this->collectionFactory->create();
        // Get the 10 most recent requests
        $collection->setOrder('created_at', 'DESC')->setPageSize(10);

        $history = [];
        foreach ($collection as $item) {
            $history[] = $item->getData();
        }

        $result = $this->resultJsonFactory->create();
        return $result->setData(['history' => $history]);
    }
}

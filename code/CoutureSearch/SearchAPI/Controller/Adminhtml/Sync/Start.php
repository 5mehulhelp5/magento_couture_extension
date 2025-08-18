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
    // Define both topic names
    const CATALOGUE_TOPIC = 'couture.catalogue.sync';
    const ORDER_TOPIC = 'couture.order.sync';

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
        // Check if any sync is already in progress or queued
        $activeSyncCollection = $this->collectionFactory->create();
        $activeSyncCollection->addFieldToFilter(
            'status',
            ['in' => ['Queued', 'Processing']]
        );

        if ($activeSyncCollection->getSize() > 0) {
            // If an active sync is found, return an error message.
            return $result->setData([
                'error' => true,
                'message' => __('A sync is already in progress. Please wait for it to complete before starting a new one.')
            ]);
        }
        // --- END: VALIDATION LOGIC ---

        try {
            // --- 1. Queue the Catalogue Sync ---
            $catalogueSync = $this->syncHistoryFactory->create();
            $catalogueSync->setData([
                'request_id' => uniqid('MANUAL-CATALOG-'),
                'status' => 'Queued',
                'message' => 'Manual sync request added to the queue.'
            ]);
            $catalogueSync->save();
            $this->publisher->publish(self::CATALOGUE_TOPIC, $catalogueSync->getId());

            // --- 2. Queue the Order History Sync ---
            $orderSync = $this->syncHistoryFactory->create();
            $orderSync->setData([
                'request_id' => uniqid('MANUAL-ORDER-'),
                'status' => 'Queued',
                'message' => 'Manual sync request added to the queue.'
            ]);
            $orderSync->save();
            $this->publisher->publish(self::ORDER_TOPIC, $orderSync->getId());

            return $result->setData(['message' => 'Both Catalogue and Order History sync requests have been successfully queued.']);
        } catch (\Exception $e) {
            return $result->setData(['error' => true, 'message' => 'An error occurred: ' . $e->getMessage()]);
        }
    }
}

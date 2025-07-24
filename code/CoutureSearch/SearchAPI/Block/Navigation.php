<?php
namespace CoutureSearch\SearchAPI\Block;

use Magento\Catalog\Model\Layer\Resolver;
use Magento\Catalog\Model\Layer\FilterList;
use Magento\Catalog\Model\Layer\AvailabilityFlagInterface;
use Magento\Framework\View\Element\Template\Context;
use Psr\Log\LoggerInterface;

class Navigation extends \Magento\LayeredNavigation\Block\Navigation
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param Context $context
     * @param Resolver $layerResolver
     * @param FilterList $filterList
     * @param AvailabilityFlagInterface $visibilityFlag
     * @param LoggerInterface $logger // Corrected: Required parameter moved before optional
     * @param array $data // Corrected: Optional parameter moved after required
     */
    public function __construct(
        Context $context,
        Resolver $layerResolver,
        FilterList $filterList,
        AvailabilityFlagInterface $visibilityFlag,
        LoggerInterface $logger, // Corrected position
        array $data = [] // Corrected position
    ) {
        $this->logger = $logger; // Assign logger
        // Call the parent constructor with its expected arguments in their original order
        parent::__construct($context, $layerResolver, $filterList, $visibilityFlag, $data);
        $this->logger->info('CoutureSearch_SearchAPI: Custom Navigation Block constructor called.');
    }

    /**
     * Override canShowBlock to always return true for our custom page,
     * or apply custom logic appropriate for your "Top Results".
     *
     * @return bool
     */
    public function canShowBlock()
    {
        $currentFullActionName = $this->getRequest()->getFullActionName();
        $isTopResultsPage = $currentFullActionName === 'searchapi_index_topresults';

        $this->logger->info('CoutureSearch_SearchAPI: Custom Navigation Block: canShowBlock called. Current Full Action Name: ' . $currentFullActionName);

        if ($isTopResultsPage) {
            // --- START: CRUCIAL DEBUG LOGGING ---
            try {
                /** @var \Magento\Catalog\Model\ResourceModel\Product\Collection $layerCollection */
                $layerCollection = $this->getLayer()->getProductCollection();
                $collectionSize = $layerCollection->getSize();
                $sqlQuery = (string)$layerCollection->getSelect();
            } catch (\Exception $e) {
                $this->logger->error('CoutureSearch_SearchAPI: Error during debug logging: ' . $e->getMessage());
            }
            // --- END: CRUCIAL DEBUG LOGGING ---
            
            $filters = $this->getFilters();
            if (count($filters)) {
                $this->logger->info('CoutureSearch_SearchAPI: canShowBlock returning TRUE. Filters found: ' . count($filters));
                return true;
            } else {
                $this->logger->warning('CoutureSearch_SearchAPI: canShowBlock returning FALSE because no filters were generated from the layer.');
                return false;
            }
        }

        // Defer to parent for any other page
        return parent::canShowBlock();
    }

    /**
     * This method is used by _prepareLayout to apply filters.
     * For the custom search layer, this should happen automatically from your controller setting the collection.
     * We just want to ensure it is using the search collection.
     */
    protected function _prepareLayout()
    {
        $this->logger->info('CoutureSearch_SearchAPI: Custom Navigation Block: _prepareLayout called. Layer class: ' . get_class($this->_catalogLayer));
        // Call parent method, which applies filters via filterList->getFilters and filter->apply
        parent::_prepareLayout();
    }
}
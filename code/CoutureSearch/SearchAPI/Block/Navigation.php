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
        $this->logger->info('CoutureSearch_SearchAPI: Custom Navigation Block: canShowBlock called. Current Full Action Name: ' . $currentFullActionName);

        // Define a list of all controller actions that should show this block.
        $allowedActionNames = [
            'searchapi_index_topresults',   // Your original page
            'couturesearch_index_recommended' // Your new page
        ];

        // Check if the current page is one of our allowed pages.
        if (in_array($currentFullActionName, $allowedActionNames)) {
            $filters = $this->getFilters();
            if (count($filters)) {
                $this->logger->info('CoutureSearch_SearchAPI: canShowBlock returning TRUE for a custom page. Filters found: ' . count($filters));
                return true;
            } else {
                $this->logger->warning('CoutureSearch_SearchAPI: canShowBlock returning FALSE for a custom page because no filters were generated from the layer.');
                return false;
            }
        }

        // Defer to parent for any other page (e.g., standard category or search pages)
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
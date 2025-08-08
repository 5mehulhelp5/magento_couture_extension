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
     * @param LoggerInterface $logger
     * @param array $data
     */
    public function __construct(
        Context $context,
        Resolver $layerResolver,
        FilterList $filterList,
        AvailabilityFlagInterface $visibilityFlag,
        LoggerInterface $logger,
        array $data = []
    ) {
        $this->logger = $logger;
        parent::__construct($context, $layerResolver, $filterList, $visibilityFlag, $data);
        $this->logger->info('CoutureSearch_SearchAPI: Custom Navigation Block constructor called.');
    }

    /**
     * Override canShowBlock to work on all our custom result pages.
     *
     * @return bool
     */
    public function canShowBlock()
    {
        $currentFullActionName = $this->getRequest()->getFullActionName();
        $this->logger->info('CoutureSearch_SearchAPI: Custom Navigation Block: canShowBlock called. Current Full Action Name: ' . $currentFullActionName);

        $allowedActionNames = [
            'couturesearch_index_productssearch',
            'couturesearch_banner_view'
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

        // Defer to parent for any other page
        return parent::canShowBlock();
    }

    /**
     * @inheritdoc
     */
    protected function _prepareLayout()
    {
        $this->logger->info('CoutureSearch_SearchAPI: Custom Navigation Block: _prepareLayout called. Layer class: ' . get_class($this->_catalogLayer));
        parent::_prepareLayout();
    }
}

<?php
namespace CoutureSearch\SearchAPI\Block\Product;

use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Catalog\Block\Product\Context;
use Magento\Catalog\Block\Product\ListProduct as MagentoListProduct;
use Magento\Catalog\Model\Layer\Resolver;
use Magento\Catalog\Model\ResourceModel\Product\Collection;
use Magento\Framework\Data\Helper\PostHelper;
use Magento\Framework\Url\Helper\Data as UrlHelper;
use Psr\Log\LoggerInterface;

class ListProduct extends MagentoListProduct
{
    protected $logger;

    public function __construct(
        Context $context,
        PostHelper $postDataHelper,
        Resolver $layerResolver,
        CategoryRepositoryInterface $categoryRepository,
        UrlHelper $urlHelper,
        // Add your custom dependencies here
        LoggerInterface $logger,
        array $data = []
    ) {
        $this->logger = $logger;
        // The parent constructor signature in modern Magento is simpler.
        // We only pass the arguments it explicitly requires.
        parent::__construct(
            $context,
            $postDataHelper,
            $layerResolver,
            $categoryRepository,
            $urlHelper,
            $data
        );
    }

    /**
     * Override _getProductCollection to use the controller-provided collection.
     * The controller is responsible for setting the collection on the block.
     */
    protected function _getProductCollection()
    {
        if ($this->_productCollection === null) {
            // This will fetch the collection prepared by the Layer and our LayerPlugin
            $this->_productCollection = parent::_getProductCollection();
            // $this->logger->info('CoutureSearch_SearchAPI: TopResults ListProduct block initialized collection from layer.');
        }
        return $this->_productCollection;
    }

    /**
     * We keep this public setter for compatibility with the old controller logic if needed,
     * but the primary way the collection is now loaded is via the layer.
     *
     * @param Collection $collection
     * @return $this
     */
    public function setProductCollection(Collection $collection)
    {
        $this->_productCollection = $collection;
        $this->logger->info('CoutureSearch_SearchAPI: ListProduct: Collection was set directly.');
        return $this;
    }
}
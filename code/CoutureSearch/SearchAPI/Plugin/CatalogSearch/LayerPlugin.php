<?php
declare(strict_types=1);

namespace CoutureSearch\SearchAPI\Plugin\CatalogSearch;

use Magento\Framework\Registry;
use Magento\Catalog\Model\Layer\Search as SearchLayer;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;

class LayerPlugin
{
    /**
     * @var Registry
     */
    private $registry;

    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * @var \Magento\Catalog\Model\ResourceModel\Product\Collection|null
     */
    private $productCollection;

    public function __construct(
        Registry $registry,
        CollectionFactory $collectionFactory
    ) {
        $this->registry = $registry;
        $this->collectionFactory = $collectionFactory;
    }
    
    public function aroundGetProductCollection(SearchLayer $subject, callable $proceed)
    {
        // Check if our controller has registered the product IDs
        $productIds = $this->registry->registry('couture_search_api_product_ids');

        // If the IDs are not set, let the original method run.
        if ($productIds === null) {
            return $proceed();
        }

        // If we already built the collection for this request, return it.
        if ($this->productCollection) {
            return $this->productCollection;
        }

        // --- Build the definitive collection ---
        /** @var \Magento\Catalog\Model\ResourceModel\Product\Collection $collection */
        $collection = $this->collectionFactory->create();
        $collection->addAttributeToSelect('*');

        if (empty($productIds)) {
            $collection->addFieldToFilter('entity_id', ['in' => [0]]);
        } else {
            $collection->addFieldToFilter('entity_id', ['in' => $productIds]);
        }
        
        // Add all necessary data for standard layered navigation filters
        $collection->addStoreFilter()
                   ->addPriceData()
                   ->addFinalPrice()
                   ->addCategoryIds()
                   ->addAttributeToFilter('status', \Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED)
                   ->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH);

        $collection->getSelect()->distinct(true);

        $this->productCollection = $collection;

        return $this->productCollection;
    }
}
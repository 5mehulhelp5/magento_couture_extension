<?php
declare(strict_types=1);

namespace CoutureSearch\SearchAPI\Block\Product;

use Magento\Catalog\Block\Product\Context;
use Magento\Catalog\Block\Product\ListProduct;
use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Catalog\Model\Layer\Resolver;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Framework\Data\Helper\PostHelper;
use Magento\Framework\Url\Helper\Data as UrlHelper;
use Magento\Catalog\Model\Product\Visibility;
use Magento\Catalog\Model\Product\Attribute\Source\Status;
// New dependencies for the API call
use Magento\Framework\HTTP\Client\Curl;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Framework\Registry;
use CoutureSearch\SearchAPI\Helper\Data as CoutureHelper;

class SimilarProducts extends ListProduct
{
    protected $productCollectionFactory;
    protected $_productCollection;
    
    /**
     * @var Curl
     */
    protected $curlClient;

    /**
     * @var Json
     */
    protected $jsonSerializer;

    /**
     * @var Registry
     */
    protected $_coreRegistry;
    protected $coutureHelper; 

    public function __construct(
        Context $context,
        PostHelper $postDataHelper,
        Resolver $layerResolver,
        CategoryRepositoryInterface $categoryRepository,
        UrlHelper $urlHelper,
        CollectionFactory $productCollectionFactory,
        // Inject the new dependencies
        Curl $curlClient,
        Json $jsonSerializer,
        \CoutureSearch\SearchAPI\Helper\Data $coutureHelper,
        array $data = []
    ) {
        $this->productCollectionFactory = $productCollectionFactory;
        $this->curlClient = $curlClient;
        $this->jsonSerializer = $jsonSerializer;
        // The 'product' is in the core registry, which is part of the Context
        $this->_coreRegistry = $context->getRegistry(); 
        $this->coutureHelper = $coutureHelper;

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
     * Get the current product from the registry.
     *
     * @return \Magento\Catalog\Model\Product|null
     */
    public function getCurrentProduct()
    {
        return $this->_coreRegistry->registry('product');
    }

    protected function _getProductCollection()
    {
        if ($this->_productCollection === null) {
            $currentProduct = $this->getCurrentProduct();
            if (!$currentProduct) {
                // If we can't get the current product, return an empty collection
                return $this->productCollectionFactory->create();
            }

            $currentProductId = $currentProduct->getId();
            $baseUrl = $this->coutureHelper->getSimilarProductsApiUrl(); // Use the helper
            $allowedProductIds = [];

            try {
                if($baseUrl){
                    // Note: Changed localhost to host.docker.internal for Docker compatibility
                    $apiUrl = $baseUrl . '?product_id=' . $currentProductId;
                    $this->_logger->info('Calling Similar Products API: ' . $apiUrl);
                    
                    $this->curlClient->get($apiUrl);
                    $responseBody = $this->curlClient->getBody();
                    $responseData = $this->jsonSerializer->unserialize($responseBody);
                    
                    if (isset($responseData['product_ids']) && is_array($responseData['product_ids'])) {
                        $allowedProductIds = $responseData['product_ids'];
                    }
                }
            } catch (\Exception $e) {
                $this->_logger->error('Similar Products API Error: ' . $e->getMessage());
                // In case of an error, we'll have an empty collection, so the block won't render.
                $allowedProductIds = [];
            }

            $collection = $this->productCollectionFactory->create();
            $collection->addAttributeToSelect('*')
                ->addStoreFilter()
                ->addAttributeToFilter('status', Status::STATUS_ENABLED)
                ->setVisibility(Visibility::VISIBILITY_BOTH)
                ->addPriceData();

            if (!empty($allowedProductIds)) {
                $collection->addFieldToFilter('entity_id', ['in' => $allowedProductIds]);
            } else {
                // If no IDs are returned, ensure the collection is empty
                $collection->addFieldToFilter('entity_id', ['in' => [0]]);
            }

            $this->_productCollection = $collection;
        }
        return $this->_productCollection;
    }
}
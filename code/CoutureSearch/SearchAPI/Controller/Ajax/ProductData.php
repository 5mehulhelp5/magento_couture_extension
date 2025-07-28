<?php
namespace CoutureSearch\SearchAPI\Controller\Ajax;

use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Catalog\Helper\Image as ImageHelper;
use Magento\Framework\Pricing\Helper\Data as PriceHelper;
use Magento\Catalog\Model\Product\Attribute\Source\Status as ProductStatus;
use Magento\Catalog\Model\Product\Visibility as ProductVisibility;
use Magento\CatalogInventory\Helper\Stock as StockFilter;

class ProductData implements HttpPostActionInterface
{
    /**
     * @var RequestInterface
     */
    private $request;

    /**
     * @var JsonFactory
     */
    private $resultJsonFactory;

    /**
     * @var CollectionFactory
     */
    private $productCollectionFactory;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var ImageHelper
     */
    private $imageHelper;

    /**
     * @var PriceHelper
     */
    private $priceHelper;

    /**
     * @var ProductVisibility
     */
    private $productVisibility;

    /**
     * @var StockFilter
     */
    private $stockFilter;

    public function __construct(
        RequestInterface $request,
        JsonFactory $resultJsonFactory,
        CollectionFactory $productCollectionFactory,
        StoreManagerInterface $storeManager,
        ImageHelper $imageHelper,
        PriceHelper $priceHelper,
        ProductVisibility $productVisibility, // Added dependency
        StockFilter $stockFilter // Added dependency
    ) {
        $this->request = $request;
        $this->resultJsonFactory = $resultJsonFactory;
        $this->productCollectionFactory = $productCollectionFactory;
        $this->storeManager = $storeManager;
        $this->imageHelper = $imageHelper;
        $this->priceHelper = $priceHelper;
        $this->productVisibility = $productVisibility;
        $this->stockFilter = $stockFilter;
    }

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\Result\Json
     */
    public function execute()
    {
        $productIds = $this->request->getParam('product_ids', []);
        $productData = [];

        if (!empty($productIds) && is_array($productIds)) {
            $collection = $this->productCollectionFactory->create();
            $collection->addIdFilter($productIds);
            
            // --- CORRECTED FILTERS ---
            // 1. Add filter for enabled products
            $collection->addAttributeToFilter('status', ProductStatus::STATUS_ENABLED);

            // 2. Add filter for visible products (in catalog, search, or both)
            $collection->setVisibility($this->productVisibility->getVisibleInSiteIds());

            // 3. Add filter for in-stock products
            $this->stockFilter->addInStockFilterToCollection($collection);

            // Ensure we select the image attributes we need
            $collection->addAttributeToSelect(['name', 'price', 'small_image']);

            foreach ($collection as $product) {
                $imageUrl = $this->imageHelper->init($product, 'product_page_image_small')
                                              ->setImageFile($product->getSmallImage())
                                              ->resize(100)
                                              ->getUrl();

                $productData[] = [
                    'id' => $product->getId(),
                    'name' => $product->getName(),
                    'url' => $product->getProductUrl(),
                    'price' => $this->priceHelper->currency($product->getFinalPrice(), true, false),
                    'image' => $imageUrl,
                ];
            }
        }

        $result = $this->resultJsonFactory->create();
        return $result->setData($productData);
    }
}

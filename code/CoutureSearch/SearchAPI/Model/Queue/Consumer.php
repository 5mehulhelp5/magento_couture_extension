<?php
namespace CoutureSearch\SearchAPI\Model\Queue;

use Psr\Log\LoggerInterface;
use CoutureSearch\SearchAPI\Model\SyncHistoryFactory;
use CoutureSearch\SearchAPI\Model\ResourceModel\SyncHistory as SyncHistoryResource;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory;
use Magento\Catalog\Model\Product\Attribute\Source\Status as ProductStatus;
use Magento\Catalog\Model\Product\Visibility as ProductVisibility;
use Magento\Framework\HTTP\Client\Curl;
use Magento\Framework\Serialize\Serializer\Json;
use CoutureSearch\SearchAPI\Helper\Data as CoutureHelper;
use Magento\ConfigurableProduct\Model\Product\Type\Configurable as ConfigurableType;
use Magento\CatalogInventory\Api\StockRegistryInterface;
use Magento\Catalog\Api\CategoryRepositoryInterface;

class Consumer extends AbstractConsumer
{

    const BATCH_SIZE  = 100;
    const TOTAL_LIMIT = 100000000;

    protected $productCollectionFactory;
    protected $productVisibility;
    protected $curl;
    protected $json;
    protected $coutureHelper;
    protected $configurableType;
    protected $stockRegistry;
    protected $categoryRepository;

    public function __construct(
        LoggerInterface $logger,
        SyncHistoryFactory $syncHistoryFactory,
        SyncHistoryResource $syncHistoryResource,
        ProductCollectionFactory $productCollectionFactory,
        ProductVisibility $productVisibility,
        Curl $curl,
        Json $json,
        CoutureHelper $coutureHelper,
        ConfigurableType $configurableType,
        StockRegistryInterface $stockRegistry,
        CategoryRepositoryInterface $categoryRepository
    ) {
        $this->productCollectionFactory = $productCollectionFactory;
        $this->productVisibility = $productVisibility;
        $this->curl = $curl;
        $this->json = $json;
        $this->coutureHelper = $coutureHelper;
        $this->configurableType = $configurableType;
        $this->stockRegistry = $stockRegistry;
        $this->categoryRepository = $categoryRepository;
        parent::__construct($logger, $syncHistoryFactory, $syncHistoryResource);
    }

    protected function getRequestIdPrefix(): string
    {
        return 'MANUAL-CATALOG-'; // Matches the prefix in the Start.php controller
    }

    public function executeSync(\CoutureSearch\SearchAPI\Model\SyncHistory $syncHistory): void
    {
        $collection = $this->productCollectionFactory->create();
        $collection->addAttributeToSelect('*')
            ->addAttributeToFilter('status', ProductStatus::STATUS_ENABLED)
            ->setVisibility($this->productVisibility->getVisibleInSiteIds())
            ->setPageSize(self::BATCH_SIZE);

        $totalProductsInStore = $collection->getSize();
        $productsToSync = min($totalProductsInStore, self::TOTAL_LIMIT);
        $totalPages = ceil($productsToSync / self::BATCH_SIZE);

        $this->logger->info('Total products to sync: ' . $productsToSync . ' in ' . $totalPages . ' batches.');

        $syncSucceeded = true;

        for ($currentPage = 1; $currentPage <= $totalPages; $currentPage++) {
            $currentStatusModel = $this->syncHistoryFactory->create();
            $this->syncHistoryResource->load($currentStatusModel, $syncHistory->getId());
            if ($currentStatusModel->getStatus() === 'Cancelled') {
                $this->logger->info('Sync for history ID ' . $syncHistory->getId() . ' was cancelled by user. Stopping process.');
                $syncHistory->setStatus('Cancelled');
                $syncSucceeded = false;
                break;
            }

            $collection->setCurPage($currentPage);
            $this->logger->info('Processing batch ' . $currentPage . ' of ' . $totalPages);

            $payload = [];
            foreach ($collection as $product) {
                $payload[] = $this->buildProductPayload($product);
            }

            if (empty($payload)) {
                continue;
            }

            if (!$this->sendBatchToApi(['payload' => $payload, 'page' => $currentPage])) {
                $syncSucceeded = false;
                $syncHistory->setStatus('Failed');
                $syncHistory->setMessage('API request failed on batch ' . $currentPage . '. Check logs for details.');
                $this->syncHistoryResource->save($syncHistory);
                break;
            }

            $collection->clear();
        }

        if ($syncSucceeded && $syncHistory->getStatus() !== 'Cancelled') {
            $syncHistory->setStatus('Success');
            $syncHistory->setMessage('Catalogue sync completed successfully.');
            $this->syncHistoryResource->save($syncHistory);
            $this->logger->info('--- Catalogue sync finished successfully for history ID: ' . $syncHistory->getId());
        }
    }


    private function buildProductPayload(\Magento\Catalog\Model\Product $product): array
    {

        // 1. Start with the basic raw data
        $productData = $product->getData();

        // 2. Add calculated Final Price
        $productData['final_price'] = $product->getFinalPrice();

        // 3. Add Inventory Data
        $stockItem                = $this->stockRegistry->getStockItem($product->getId());
        $productData['inventory'] = [
            'qty'         => $stockItem->getQty(),
            'is_in_stock' => $stockItem->getIsInStock(),
        ];

        // 4. Add Category Data
        $categoryIds = $product->getCategoryIds();
        $categories  = [];
        foreach ($categoryIds as $categoryId) {
            try {
                $category     = $this->categoryRepository->get($categoryId);
                $categories[] = [
                    'id'   => $category->getId(),
                    'name' => $category->getName(),
                ];
            } catch (\Exception $e) {
                // Ignore categories that might not be found
            }
        }

        $productData['categories'] = $categories;

        // 5. Add Full Media Gallery
        $galleryImages = $product->getMediaGalleryImages();
        $mediaGallery  = [];
        if ($galleryImages) {
            foreach ($galleryImages as $image) {
                $mediaGallery[] = [
                    'url'      => $image->getUrl(),
                    'label'    => $image->getLabel(),
                    'position' => $image->getPosition(),
                    'types'    => $image->getTypes(),
                ];
            }
        }
        $productData['media_gallery'] = $mediaGallery;

        // 6. Add Product Relationships
        $productData['related_products']    = $product->getRelatedProductIds();
        $productData['upsell_products']     = $product->getUpSellProductIds();
        $productData['cross_sell_products'] = $product->getCrossSellProductIds();

        // 7. Add Configurable Product Options (if applicable)
        if ($product->getTypeId() == ConfigurableType::TYPE_CODE) {
            $childProducts       = $this->configurableType->getUsedProducts($product);
            $configurableOptions = [];
            foreach ($childProducts as $child) {
                $configurableOptions[] = [
                    'sku'        => $child->getSku(),
                    'qty'        => $this->stockRegistry->getStockItem($child->getId())->getQty(),
                    'attributes' => [
                        'color' => $child->getAttributeText('color'), // Example attribute
                        'size'  => $child->getAttributeText('size'),  // Example attribute
                    ],
                ];
            }
            $productData['configurable_options'] = $configurableOptions;
        }

        return $productData;
    }

    private function sendBatchToApi(array $payload): bool
    {
        try {
            $apiUrl = $this->coutureHelper->getSyncEndpointUrl();
            if (empty($apiUrl)) {
                throw new LocalizedException(__('Sync API Endpoint URL is not configured.'));
            }

            $apiKey          = $this->coutureHelper->getUniversalApiKey();
            $storeIdentifier = $this->coutureHelper->getStoreIdentifier();

            $this->curl->addHeader("Content-Type", "application/json");
            $this->curl->addHeader("X-Api-Key", $apiKey ?? '');
            $this->curl->addHeader("X-Store-Identifier", $storeIdentifier);

            $this->curl->post($apiUrl, $this->json->serialize($payload));

            $statusCode = $this->curl->getStatus();
            if ($statusCode >= 300) {
                $responseBody = $this->curl->getBody();
                $this->logger->error('API Error: Received HTTP status ' . $statusCode);
                $this->logger->error('API Response Body: ' . $responseBody);
                return false; // Indicate failure
            }

            $this->logger->info('API Response: ' . $this->curl->getBody());
            return true; // Indicate success

        } catch (\Exception $e) {
            $this->logger->error('Exception in sendBatchToApi: ' . $e->getMessage());
            return false; // Indicate failure
        }
    }
}

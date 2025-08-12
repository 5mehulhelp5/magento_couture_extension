<?php
declare(strict_types=1);

namespace CoutureSearch\SearchAPI\Block\Promo;

use Magento\Catalog\Block\Product\ListProduct;
use Magento\Catalog\Block\Product\Context;
use CoutureSearch\SearchAPI\Model\ResourceModel\RecoConfig\CollectionFactory as RecoConfigCollectionFactory;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\HTTP\Client\Curl;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory;
use Magento\Catalog\Model\Product\Attribute\Source\Status as ProductStatus;
use Magento\Catalog\Model\Product\Visibility as ProductVisibility;
use Magento\Framework\Data\Helper\PostHelper;
use Magento\Catalog\Model\Layer\Resolver;
use Magento\Catalog\Api\CategoryRepositoryInterface;

class DynamicCarousels extends ListProduct
{
    protected $recoConfigCollectionFactory;
    protected $scopeConfig;
    protected $curl;
    protected $json;
    protected $productCollectionFactory;
    protected $productVisibility;

    public function __construct(
        Context $context,
        PostHelper $postDataHelper,
        Resolver $layerResolver,
        CategoryRepositoryInterface $categoryRepository,
        \Magento\Framework\Url\Helper\Data $urlHelper,
        RecoConfigCollectionFactory $recoConfigCollectionFactory,
        ScopeConfigInterface $scopeConfig,
        Curl $curl,
        Json $json,
        ProductCollectionFactory $productCollectionFactory,
        ProductVisibility $productVisibility,
        array $data = []
    ) {
        $this->recoConfigCollectionFactory = $recoConfigCollectionFactory;
        $this->scopeConfig = $scopeConfig;
        $this->curl = $curl;
        $this->json = $json;
        $this->productCollectionFactory = $productCollectionFactory;
        $this->productVisibility = $productVisibility;
        
        parent::__construct(
            $context, $postDataHelper, $layerResolver, $categoryRepository, $urlHelper, $data
        );
    }

    

    /**
     * Gets all visible carousels and their corresponding product collections.
     *
     * @return array
     */
    public function getVisibleCarousels(): array
    {
        $visibleCarousels = [];
        $allRecos = $this->recoConfigCollectionFactory->create();
        $this->_logger->info('Found ' . count($allRecos) . ' potential carousels in the database.');

        foreach ($allRecos as $reco) {
            $recoCode = $reco->getRecoCode();
            $configPath = 'couture_dynamic_banners/settings/' . $recoCode . '_enabled';

            $this->_logger->info("Checking config for [{$recoCode}] at path [{$configPath}]");
            $isEnabled = $this->scopeConfig->isSetFlag($configPath, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
            $this->_logger->info("Is enabled? " . ($isEnabled ? 'Yes' : 'No'));

            if ($isEnabled) {
                $productIds = $this->fetchProductIdsForEndpoint($reco->getEndpoint());
                if (!empty($productIds)) {
                    $this->_logger->info("Found " . count($productIds) . " product IDs for [{$recoCode}]. Creating collection.");
                    $visibleCarousels[] = [
                        'title' => $reco->getRecoName(),
                        'caption' => $reco->getCaption(),
                        'product_collection' => $this->getProductCollectionByIds($productIds)
                    ];
                } else {
                    $this->_logger->warning("Carousel [{$recoCode}] is enabled, but no product IDs were returned from its endpoint.");
                }
            }
        }

        return $visibleCarousels;
    }
    private function fetchProductIdsForEndpoint(?string $endpointUrl): array
    {
        if (empty($endpointUrl)) {
            return [];
        }

        try {
            $this->_logger->info('Fetching product IDs from: ' . $endpointUrl);
            $this->curl->get($endpointUrl);
            $responseBody = $this->curl->getBody();
            $this->_logger->info('API Response: ' . $responseBody);
            $response = $this->json->unserialize($responseBody);
            return $response['product_ids'] ?? [];
        } catch (\Exception $e) {
            $this->_logger->error('Failed to fetch product IDs from endpoint: ' . $endpointUrl . ' | Error: ' . $e->getMessage());
            return [];
        }
    }
    private function getProductCollectionByIds(array $productIds)
    {
        $collection = $this->productCollectionFactory->create();
        $collection->addIdFilter($productIds);
        $collection->addAttributeToSelect('*');
        $collection->addAttributeToFilter('status', ProductStatus::STATUS_ENABLED);
        $collection->setVisibility($this->productVisibility->getVisibleInSiteIds());
        
        $collection->addPriceData();
        $collection->addStoreFilter();

        $this->_logger->info('Created product collection with ' . $collection->getSize() . ' visible products.');
        return $collection;
    }
}

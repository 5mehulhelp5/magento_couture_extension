<?php
namespace CoutureSearch\SearchAPI\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    // API required fields
    const XML_PATH_TOP_RESULTS_API      = 'couturesearch_api/endpoints/top_results_api_url';
    const XML_PATH_SIMILAR_PRODUCTS_API = 'couturesearch_api/endpoints/similar_products_api_url';
    const XML_PATH_SEARCH_API_URL       = 'couturesearch_api/endpoints/search_api_url';
    const XML_PATH_UNIVERSAL_API_KEY    = 'couturesearch_api/api_keys/api_key';

    // configuration files for banners
    const XML_PATH_ENABLE_TOP_TRENDING = 'couturesearch_recommendations_options/banners_configuration_options/top_trending_products';
    const XML_PATH_ENABLE_RECOMMENDED  = 'couturesearch_recommendations_options/banners_configuration_options/recommended_products';
    const XML_PATH_ENABLE_NEW_PRODUCTS = 'couturesearch_recommendations_options/banners_configuration_options/new_products';

    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function getTopResultsApiUrl(): ?string
    {
        return $this->scopeConfig->getValue(self::XML_PATH_TOP_RESULTS_API, ScopeInterface::SCOPE_STORE);
    }

    public function getSimilarProductsApiUrl(): ?string
    {
        return $this->scopeConfig->getValue(self::XML_PATH_SIMILAR_PRODUCTS_API, ScopeInterface::SCOPE_STORE);
    }

    public function getSearchApiUrl(): ?string
    {
        return $this->scopeConfig->getValue(self::XML_PATH_SEARCH_API_URL, ScopeInterface::SCOPE_STORE);
    }

    public function getUniversalApiKey(): ?string
    {
        return $this->scopeConfig->getValue(self::XML_PATH_UNIVERSAL_API_KEY, ScopeInterface::SCOPE_STORE);
    }

    // admin config -- to see if the flag (banner option) is enabled or not
    public function isSetFlag(string $xmlPath): bool
    {
        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get(\Psr\Log\LoggerInterface::class);

        // Get the raw value first
        $rawValue = $this->scopeConfig->getValue($xmlPath, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

        // Log both the path and the raw value found
        $logger->info('--- Config Debug ---');
        $logger->info('Path: ' . $xmlPath);
        $logger->info('Raw Value Found: ' . json_encode($rawValue)); // Use json_encode to see nulls

        $isSet = $this->scopeConfig->isSetFlag($xmlPath, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $logger->info('isSetFlag() Result: ' . ($isSet ? 'true' : 'false'));

        return $isSet;

    }
}

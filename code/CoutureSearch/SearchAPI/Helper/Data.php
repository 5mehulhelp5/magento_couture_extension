<?php
namespace CoutureSearch\SearchAPI\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    // API required fields
    const XML_PATH_SIMILAR_PRODUCTS_API = 'couturesearch_api/endpoints/similar_products_api_url';
    const XML_PATH_SEARCH_API_URL       = 'couturesearch_api/endpoints/search_api_url';
    const XML_PATH_UNIVERSAL_API_KEY    = 'couturesearch_api/api_keys/api_key';

    // configuration files for banners -- now became API
    const XML_PATH_RECO_CONFIG_URL = 'couture_dynamic_banners/api_settings/reco_config_endpoint_url';
    
    // catalogue sync constraints
    const XML_PATH_SYNC_ENDPOINT_URL = 'couture_catalogue_sync/api_settings/sync_endpoint_url';



    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function getSearchApiUrl(): ?string
    {
        return $this->scopeConfig->getValue(self::XML_PATH_SEARCH_API_URL, ScopeInterface::SCOPE_STORE);
    }

    public function  getSimilarProductsApiUrl(): ?string
    {
        return $this->scopeConfig->getValue(self::XML_PATH_SIMILAR_PRODUCTS_API, ScopeInterface::SCOPE_STORE);
    }

    public function getUniversalApiKey(): ?string
    {
        return $this->scopeConfig->getValue(self::XML_PATH_UNIVERSAL_API_KEY, ScopeInterface::SCOPE_STORE);
    }

    // sync configs
    public function getSyncEndpointUrl(): ?string
    {
        return $this->scopeConfig->getValue(self::XML_PATH_SYNC_ENDPOINT_URL, ScopeInterface::SCOPE_STORE);
    }

    // to get the recommendation options
    public function getRecoConfigEndpointUrl(): string
    {
        return $this->scopeConfig->getValue(self::XML_PATH_RECO_CONFIG_URL, ScopeInterface::SCOPE_STORE);
    }

    /**
     * Gets the store's Base URL to use as a unique identifier.
     * @return string
     */
    public function getStoreIdentifier(): string
    {
        return $this->scopeConfig->getValue('web/unsecure/base_url', ScopeInterface::SCOPE_STORE);
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

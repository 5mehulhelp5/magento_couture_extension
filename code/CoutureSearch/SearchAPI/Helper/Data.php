<?php
namespace CoutureSearch\SearchAPI\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const XML_PATH_TOP_RESULTS_API = 'couturesearch_api/endpoints/top_results_api_url';
    const XML_PATH_SIMILAR_PRODUCTS_API = 'couturesearch_api/endpoints/similar_products_api_url';
    const XML_PATH_SEARCH_API_URL = 'couturesearch_api/endpoints/search_api_url';
    const XML_PATH_UNIVERSAL_API_KEY = 'couturesearch_api/api_keys/api_key';

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
}
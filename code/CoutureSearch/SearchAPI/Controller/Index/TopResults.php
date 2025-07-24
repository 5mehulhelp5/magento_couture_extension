<?php
namespace CoutureSearch\SearchAPI\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Psr\Log\LoggerInterface;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory;
use Magento\Framework\Registry;
use Magento\Framework\HTTP\Client\Curl;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Catalog\Model\Layer\Resolver;
use Magento\Framework\App\ScopeResolverInterface;
use Magento\Catalog\Block\Product\ProductList\Toolbar;

class TopResults extends Action
{
    protected $resultPageFactory;
    protected $logger;
    protected $productCollectionFactory;
    protected $registry;
    protected $curlClient;
    protected $jsonSerializer;
    protected $layerResolver;
    protected $scopeResolver;
    protected $coutureHelper;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        LoggerInterface $logger,
        ProductCollectionFactory $productCollectionFactory,
        Registry $registry,
        Curl $curlClient,
        Json $jsonSerializer,
        Resolver $layerResolver,
        ScopeResolverInterface $scopeResolver,
        \CoutureSearch\SearchAPI\Helper\Data $coutureHelper
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->logger = $logger;
        $this->productCollectionFactory = $productCollectionFactory;
        $this->registry = $registry;
        $this->curlClient = $curlClient;
        $this->jsonSerializer = $jsonSerializer;
        $this->layerResolver = $layerResolver;
        $this->scopeResolver = $scopeResolver;
        $this->coutureHelper = $coutureHelper;
    }

    public function execute()
    {
        $this->logger->info('CoutureSearch_SearchAPI: [TopResults] Called /top-results page');

        try {
            // --- API Integration: Get IDs and register them for the plugin ---
            $apiUrl = $this->coutureHelper->getTopResultsApiUrl(); // Use the helper
            $this->logger->info('CoutureSearch_SearchAPI: [TopResults] API URL: ' . $apiUrl);
            $allowedProductIds = [];

            try {
                if($apiUrl){
                    $this->curlClient->get($apiUrl);
                    $responseData = $this->jsonSerializer->unserialize($this->curlClient->getBody());
                    
                    if (isset($responseData['product_ids']) && is_array($responseData['product_ids'])) {
                        $allowedProductIds = $responseData['product_ids'];
                    }
                }
            } catch (\Exception $e) {
                $this->logger->error('CoutureSearch_SearchAPI: [TopResults] API Error: ' . $e->getMessage());
                // Let the page be empty in case of an API error
                $allowedProductIds = [];
            }
            
            // Pass the IDs to our plugin via the registry
            $this->registry->register('couture_search_api_product_ids', $allowedProductIds);
            $this->logger->info('CoutureSearch_SearchAPI: [TopResults] Registered ' . count($allowedProductIds) . ' product IDs for the layer.');


            // --- CRUCIAL: Initialize the correct Layer ---
            // This ensures our plugin on the "Search" layer is activated.
            $this->layerResolver->create(Resolver::CATALOG_LAYER_SEARCH);
            

            // --- Page Rendering ---
            // By initializing the correct layer, the blocks will now automatically
            // get the correct, filtered collection provided by our plugin.
            $resultPage = $this->resultPageFactory->create();
            $resultPage->getConfig()->getTitle()->set(__('Top Results Products'));

        } catch (\Exception $e) {
            $this->logger->error('CoutureSearch_SearchAPI: [TopResults] Critical Error: ' . $e->getMessage());
            $this->logger->error($e->getTraceAsString());
            return $this->_forward('noRoute');
        }

        return $resultPage;
    }
}
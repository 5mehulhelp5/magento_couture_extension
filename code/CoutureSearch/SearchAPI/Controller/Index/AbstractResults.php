<?php
namespace CoutureSearch\SearchAPI\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Psr\Log\LoggerInterface;
use Magento\Framework\Registry;
use Magento\Framework\HTTP\Client\Curl;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Catalog\Model\Layer\Resolver;
use CoutureSearch\SearchAPI\Helper\Data as CoutureHelper;
use Magento\Framework\App\RequestInterface;

/**
 * Abstract controller for displaying products from an API endpoint.
 */
abstract class AbstractResults extends Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var Registry
     */
    protected $registry;

    /**
     * @var Curl
     */
    protected $curlClient;

    /**
     * @var Json
     */
    protected $jsonSerializer;

    /**
     * @var Resolver
     */
    protected $layerResolver;

    /**
     * @var CoutureHelper
     */
    protected $coutureHelper;
    protected $request;
    /**
     * Gets the specific API URL for the page.
     * Must be implemented by the child class.
     *
     * @return string
     */
    abstract protected function getApiUrl(): string;

    /**
     * Gets the page title.
     * Must be implemented by the child class.
     *
     * @return \Magento\Framework\Phrase
     */
    abstract protected function getPageTitle(): \Magento\Framework\Phrase;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param LoggerInterface $logger
     * @param Registry $registry
     * @param Curl $curlClient
     * @param Json $jsonSerializer
     * @param Resolver $layerResolver
     * @param CoutureHelper $coutureHelper
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        LoggerInterface $logger,
        Registry $registry,
        Curl $curlClient,
        Json $jsonSerializer,
        Resolver $layerResolver,
        CoutureHelper $coutureHelper,
        RequestInterface $request = null
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->logger = $logger;
        $this->registry = $registry;
        $this->curlClient = $curlClient;
        $this->jsonSerializer = $jsonSerializer;
        $this->layerResolver = $layerResolver;
        $this->coutureHelper = $coutureHelper;
        $this->request = $request ?: $context->getRequest();
    }

    /**
     * Main execution logic.
     * Fetches product IDs from the specified API, registers them,
     * and renders the product listing page.
     */
    public function execute()
    {
        // Get the specific API URL and Title from the child class
        $apiUrl = $this->getApiUrl();
        $pageTitle = $this->getPageTitle();
        $this->logger->info('CoutureSearch_SearchAPI: [AbstractResults] Called page with title: ' . $pageTitle);

        try {
            // --- API Integration ---
            $allowedProductIds = [];
            if (empty($apiUrl)) {
                $this->logger->warning('CoutureSearch_SearchAPI: [AbstractResults] API URL is empty. Cannot fetch products.');
            } else {
                try {

                    // 1. Check for a search query in the URL
                    $searchQuery = $this->request->getParam('q');
                    if ($searchQuery) {
                        // Append the query to the API endpoint
                        $apiUrl .= '?query=' . urlencode($searchQuery);
                    }

                    // 1. Get the universal API key from the helper.
                    $apiKey = $this->coutureHelper->getUniversalApiKey();
                    $storeIdentifier = $this->coutureHelper->getStoreIdentifier();

                    // 2. If the key exists, add it as a header.
                    //    Replace 'X-Api-Key' with the actual header name your API expects.
                    if (!empty($apiKey)) {
                        $this->logger->info('Found API Key: ' . $apiKey);
                        $this->curlClient->addHeader('X-Api-Key', $apiKey);
                        $this->curlClient->addHeader('X-Store-Identifier', $storeIdentifier);
                    }

                    // 3. Make the GET request.
                    $this->curlClient->get($apiUrl);
                    
                    $responseBody = $this->curlClient->getBody();
                    $responseData = $this->jsonSerializer->unserialize($responseBody);
                    
                    if (isset($responseData['product_ids']) && is_array($responseData['product_ids'])) {
                        $allowedProductIds = $responseData['product_ids'];
                    }
                } catch (\Exception $e) {
                    $this->logger->error('CoutureSearch_SearchAPI: [AbstractResults] API Error for URL ' . $apiUrl . ': ' . $e->getMessage());
                    // Let the page be empty in case of an API error
                    $allowedProductIds = [];
                }
            }
            
            // Pass the IDs to our plugin via the registry
            $this->registry->register('couture_search_api_product_ids', $allowedProductIds);
            $this->logger->info('CoutureSearch_SearchAPI: [AbstractResults] Registered ' . count($allowedProductIds) . ' product IDs for the layer.');

            // This ensures our plugin on the "CatalogSearch" layer is activated.
            // This is generic and works for any product listing.
            $this->layerResolver->create(Resolver::CATALOG_LAYER_SEARCH);

            // --- Page Rendering ---
            $resultPage = $this->resultPageFactory->create();
            $resultPage->getConfig()->getTitle()->set($pageTitle);

        } catch (\Exception $e) {
            $this->logger->error('CoutureSearch_SearchAPI: [AbstractResults] Critical Error: ' . $e->getMessage());
            $this->logger->error($e->getTraceAsString());
            return $this->_forward('noRoute');
        }

        return $resultPage;
    }
}

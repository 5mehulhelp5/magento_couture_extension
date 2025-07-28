<?php
namespace CoutureSearch\SearchAPI\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Psr\Log\LoggerInterface;
use Magento\Framework\Registry;
use Magento\Framework\HTTP\Client\Curl;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Catalog\Model\Layer\Resolver;
use CoutureSearch\SearchAPI\Helper\Data as CoutureHelper;

class ProductsSearch extends AbstractResults
{
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        LoggerInterface $logger,
        Registry $registry,
        Curl $curlClient,
        Json $jsonSerializer,
        Resolver $layerResolver,
        CoutureHelper $coutureHelper
    ) {
        // Pass all arguments to the parent constructor to ensure it's initialized correctly.
        parent::__construct(
            $context,
            $resultPageFactory,
            $logger,
            $registry,
            $curlClient,
            $jsonSerializer,
            $layerResolver,
            $coutureHelper
        );
    }

    /**
     * @inheritdoc
     */
    protected function getApiUrl(): string
    {
        // Use the helper to get the specific URL for Top Results
        return $this->coutureHelper->getSearchApiUrl();
    }

    /**
     * @inheritdoc
     */
    protected function getPageTitle(): \Magento\Framework\Phrase
    {
        return __('Search V2 Results by Couture');
    }
}

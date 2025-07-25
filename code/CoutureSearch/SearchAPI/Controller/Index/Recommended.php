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

class Recommended extends AbstractResults
{
    /**
     * Explicitly defining the constructor to ensure correct dependency injection.
     *
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
        CoutureHelper $coutureHelper
    ) {
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
        // For now, we are hardcoding the URL as requested.
        // Later, this can be replaced with the helper method.
        return 'http://host.docker.internal:8000/api/recommended-products';
    }

    /**
     * @inheritdoc
     */
    protected function getPageTitle(): \Magento\Framework\Phrase
    {
        return __('Recommended For You');
    }
}

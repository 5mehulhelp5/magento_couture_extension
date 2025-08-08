<?php
declare(strict_types=1);

namespace CoutureSearch\SearchAPI\Controller\Banner;

use CoutureSearch\SearchAPI\Controller\Index\AbstractResults;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Psr\Log\LoggerInterface;
use Magento\Framework\Registry;
use Magento\Framework\HTTP\Client\Curl;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Catalog\Model\Layer\Resolver;
use CoutureSearch\SearchAPI\Helper\Data as CoutureHelper;
use CoutureSearch\SearchAPI\Model\BannerConfigFactory;
use CoutureSearch\SearchAPI\Model\ResourceModel\BannerConfig as BannerConfigResource;

class View extends AbstractResults
{
    /**
     * @var BannerConfigFactory
     */
    protected $bannerConfigFactory;

    /**
     * @var BannerConfigResource
     */
    protected $bannerConfigResource;

    /**
     * @var \CoutureSearch\SearchAPI\Model\BannerConfig
     */
    private $currentBanner;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        LoggerInterface $logger,
        Registry $registry,
        Curl $curlClient,
        Json $jsonSerializer,
        Resolver $layerResolver,
        CoutureHelper $coutureHelper,
        BannerConfigFactory $bannerConfigFactory,
        BannerConfigResource $bannerConfigResource
    ) {
        $this->bannerConfigFactory = $bannerConfigFactory;
        $this->bannerConfigResource = $bannerConfigResource;
        parent::__construct(
            $context, $resultPageFactory, $logger, $registry, $curlClient,
            $jsonSerializer, $layerResolver, $coutureHelper
        );
    }

    /**
     * Gets the specific API URL for the banner page.
     * It loads the banner config from the DB based on the URL parameter.
     *
     * @return string
     */
    protected function getApiUrl(): string
    {
        $banner = $this->getCurrentBanner();
        if ($banner && $banner->getId()) {
            return $banner->getEndpoint();
        }
        return ''; // Return empty string if banner not found
    }

    /**
     * Gets the page title from the banner's name.
     *
     * @return \Magento\Framework\Phrase
     */
    protected function getPageTitle(): \Magento\Framework\Phrase
    {
        $banner = $this->getCurrentBanner();
        if ($banner && $banner->getId()) {
            return __($banner->getBannerName());
        }
        return __('Products');
    }

    /**
     * Helper method to load the current banner configuration from the database
     * based on the 'code' parameter in the URL.
     *
     * @return \CoutureSearch\SearchAPI\Model\BannerConfig
     */
    private function getCurrentBanner()
    {
        if ($this->currentBanner === null) {
            $bannerCode = $this->getRequest()->getParam('code');
            $this->currentBanner = $this->bannerConfigFactory->create();
            if ($bannerCode) {
                $this->bannerConfigResource->load($this->currentBanner, $bannerCode, 'banner_code');
            }
        }
        return $this->currentBanner;
    }
}

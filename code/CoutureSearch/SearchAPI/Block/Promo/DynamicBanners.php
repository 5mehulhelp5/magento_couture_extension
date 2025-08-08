<?php
declare(strict_types=1);

namespace CoutureSearch\SearchAPI\Block\Promo;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use CoutureSearch\SearchAPI\Model\ResourceModel\BannerConfig\CollectionFactory as BannerConfigCollectionFactory;
use Magento\Framework\App\Config\ScopeConfigInterface;

class DynamicBanners extends Template
{
    /**
     * @var BannerConfigCollectionFactory
     */
    protected $bannerConfigCollectionFactory;

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    public function __construct(
        Context $context,
        BannerConfigCollectionFactory $bannerConfigCollectionFactory,
        ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        $this->bannerConfigCollectionFactory = $bannerConfigCollectionFactory;
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function getVisibleBanners(): array
    {
        $visibleBanners = [];
        $allBanners = $this->bannerConfigCollectionFactory->create();

        foreach ($allBanners as $banner) {
            $bannerCode = $banner->getBannerCode();
            $configPath = 'couture_dynamic_banners/settings/' . $bannerCode . '_enabled';

            $isEnabled = $this->scopeConfig->isSetFlag(
                $configPath,
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE
            );

            if ($isEnabled) {
                $visibleBanners[] = [
                    'title' => $banner->getBannerName(),
                    'subtitle' => $banner->getCaption(),
                    'image_url' => $banner->getImgLink(),
                    'link_url' => $this->generateBannerUrl($banner->getBannerCode()),
                    'text_align_class' => 'text-align-' . $banner->getOrientation()
                ];
            }
        }

        return $visibleBanners;
    }

    /**
     * Generates the frontend URL for a banner, passing its code as a parameter.
     *
     * @param string $bannerCode
     * @return string
     */
    private function generateBannerUrl(string $bannerCode): string
    {
        // This creates a URL like: /couture/banner/view/code/new_products
        return $this->getUrl('couture/banner/view', ['code' => $bannerCode]);
    }
}

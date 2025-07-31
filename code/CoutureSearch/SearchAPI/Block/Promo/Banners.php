<?php
declare(strict_types=1);

namespace CoutureSearch\SearchAPI\Block\Promo;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use CoutureSearch\SearchAPI\ViewModel\HomepageBanners;
use CoutureSearch\SearchAPI\Helper\Data as CoutureHelper;

class Banners extends Template
{
    /**
     * @var HomepageBanners
     */
    protected $bannersViewModel;

    /**
     * @var CoutureHelper
     */
    protected $coutureHelper;

    public function __construct(
        Context $context,
        HomepageBanners $bannersViewModel,
        CoutureHelper $coutureHelper,
        array $data = []
    ) {
        $this->bannersViewModel = $bannersViewModel;
        $this->coutureHelper = $coutureHelper;
        parent::__construct($context, $data);
    }

    /**
     * Gets the full banner configuration and filters it down to only
     * the ones that are enabled in the admin panel.
     *
     * @return array
     */
    public function getVisibleBanners(): array
    {
        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get(\Psr\Log\LoggerInterface::class);
        // $logger->info('In getVisibleBanners()');

        $allBanners = $this->bannersViewModel->getBannersConfig();
        $visibleBanners = [];

        foreach ($allBanners as $bannerCode => $bannerData) {
            // $logger->info('getVisibleBanners() : ' . $bannerData['config_path']);
            
            // Check the 'config_path' against the admin setting
            if (isset($bannerData['config_path']) && $this->coutureHelper->isSetFlag($bannerData['config_path'])) {
                $logger->info('getVisibleBanners() : ' . $bannerCode);
                $visibleBanners[$bannerCode] = $bannerData;
            }
        }

        return $visibleBanners;
    }
}

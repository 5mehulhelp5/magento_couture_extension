<?php
declare(strict_types=1);

namespace CoutureSearch\SearchAPI\Plugin;

use Magento\Framework\View\LayoutInterface;
use Magento\Cms\Block\Page;
use Magento\Framework\App\RequestInterface;
use Psr\Log\LoggerInterface;

class AddHomepagePromo
{
    private static $blockCreated = false;
    protected $layout;
    protected $request;
    protected $logger;

    public function __construct(
        LayoutInterface $layout,
        RequestInterface $request,
        LoggerInterface $logger
    ) {
        $this->layout = $layout;
        $this->request = $request;
        $this->logger = $logger;
    }

    public function afterToHtml(Page $subject, string $result): string
    {
        if ($this->request->getFullActionName() !== 'cms_index_index' || self::$blockCreated) {
            return $result;
        }

        // Use our new, smart container block
        // $promoBlock = $this->layout->createBlock(
        //     \CoutureSearch\SearchAPI\Block\Promo\Banners::class, // <-- Use the new block class
        //     'couturesearch.recommendations.container.from.plugin'
        // )->setTemplate('CoutureSearch_SearchAPI::promo/recommendations.phtml');
        
        // self::$blockCreated = true;

        // return $result . $promoBlock->toHtml();


        

        // Create an instance of our new, smart container block
        $dynamicBannersBlock = $this->layout->createBlock(
            \CoutureSearch\SearchAPI\Block\Promo\DynamicBanners::class,
            'couturesearch.dynamic.banners.from.plugin'
        )->setTemplate('CoutureSearch_SearchAPI::promo/dynamic_banners.phtml');
        
        $dynamicBannersHtml = $dynamicBannersBlock->toHtml();
        // --- END: DYNAMIC BANNERS INJECTION ---

        self::$blockCreated = true;

        // Append the new dynamic banners HTML to the page content
        return $result . $dynamicBannersHtml;

    }
}

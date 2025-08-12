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

        $finalHtml = $result;

        // --- 1. Render the Dynamic Marketing Banners ---
        $dynamicBannersBlock = $this->layout->createBlock(
            \CoutureSearch\SearchAPI\Block\Promo\DynamicBanners::class,
            'couturesearch.dynamic.banners.from.plugin'
        )->setTemplate('CoutureSearch_SearchAPI::promo/dynamic_banners.phtml');
        
        $finalHtml .= $dynamicBannersBlock->toHtml();

        // --- 2. Render the new Dynamic Product Carousels ---
        $dynamicCarouselsBlock = $this->layout->createBlock(
            \CoutureSearch\SearchAPI\Block\Promo\DynamicCarousels::class, // <-- Use the new block class
            'couturesearch.dynamic.carousels.from.plugin'
        )->setTemplate('CoutureSearch_SearchAPI::promo/dynamic_carousels.phtml'); // <-- Use the new container template

        $finalHtml .= $dynamicCarouselsBlock->toHtml();
        
        self::$blockCreated = true;

        return $finalHtml;

    }
}

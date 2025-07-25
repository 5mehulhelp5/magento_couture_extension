<?php
declare(strict_types=1);

namespace CoutureSearch\SearchAPI\Plugin;

use Magento\Framework\View\LayoutInterface;
use Magento\Cms\Block\Page; // <--- Change this
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

    // Change the type hint from Footer to Page
    public function afterToHtml(Page $subject, string $result): string
    {
        $this->logger->info('--- Plugin Debug: afterToHtml triggered on Cms\Block\Page ---');

        if ($this->request->getFullActionName() !== 'cms_index_index' || self::$blockCreated) {
            return $result;
        }

        $promoBlock = $this->layout->createBlock(
            \Magento\Framework\View\Element\Template::class,
            'couturesearch.recommendations.container.from.plugin'
        )->setTemplate('CoutureSearch_SearchAPI::promo/recommendations.phtml');
        
        self::$blockCreated = true;

        // Use append instead of prepend to place it at the end of the main content
        return $result . $promoBlock->toHtml();
    }
}
<?php
namespace CoutureSearch\SearchAPI\Block\Banner;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use CoutureSearch\SearchAPI\Helper\Data as CoutureHelper;
use Psr\Log\LoggerInterface;

/**
 * Abstract Banner Block
 * Contains the generic logic to check if a banner is enabled in the admin config.
 */
abstract class AbstractBanner extends Template
{
    /**
     * @var CoutureHelper
     */
    protected $coutureHelper;

    /**
     * An abstract method that child classes must implement.
     * It should return the XML path to the specific "enable/disable" config setting.
     * e.g., 'banners_configuration_options/top_trending_products'
     *
     * @return string
     */
    abstract protected function getConfigPath(): string;

    /**
     * @param Context $context
     * @param CoutureHelper $coutureHelper
     * @param array $data
     */
    public function __construct(
        Context $context,
        CoutureHelper $coutureHelper,
        array $data = []
    ) {
        $this->coutureHelper = $coutureHelper;
        parent::__construct($context, $data);
    }

    /**
     * Checks if the banner is enabled in the configuration.
     *
     * @return bool
     */
    public function isBannerEnabled(): bool
    {

        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get(\Psr\Log\LoggerInterface::class);
        $logger->info('Banner options: '. $configPath);

        $configPath = $this->getConfigPath();
        return $this->coutureHelper->isSetFlag($configPath);
    }

    /**
     * Override the default _toHtml method.
     * If the banner is disabled in the config, this method returns an empty string,
     * effectively preventing the block from rendering.
     *
     * @return string
     */
    protected function _toHtml()
    {
        if (!$this->isBannerEnabled()) {
            return '';
        }
        return parent::_toHtml();
    }
}

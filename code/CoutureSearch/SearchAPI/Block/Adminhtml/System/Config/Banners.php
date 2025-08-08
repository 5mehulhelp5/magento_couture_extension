<?php
namespace CoutureSearch\SearchAPI\Block\Adminhtml\System\Config;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Data\Form\Element\AbstractElement;
use CoutureSearch\SearchAPI\Model\ResourceModel\BannerConfig\CollectionFactory;
use Psr\Log\LoggerInterface;

class Banners extends Field
{
    protected $_template = 'CoutureSearch_SearchAPI::system/config/banners.phtml';
    protected $collectionFactory;
    protected $logger;

    public function __construct(
        Context $context,
        CollectionFactory $collectionFactory,
        LoggerInterface $logger,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->logger = $logger;
        parent::__construct($context, $data);
    }

    public function render(AbstractElement $element)
    {
        // This is important for the backend model to work correctly
        $this->setElement($element);
        return parent::render($element);
    }

    protected function _getElementHtml(AbstractElement $element)
    {
        return $this->_toHtml();
    }

    public function getSyncConfigUrl()
    {
        return $this->getUrl('couture/banner/sync');
    }

    public function getAvailableBanners()
    {
        $collection = $this->collectionFactory->create()->setOrder('banner_name', 'ASC');
        // $this->logger->info('--- Banners UI Block: Found ' . $collection->getSize() . ' banners in the DB to render. ---');
        return $collection;
    }

    /**
     * Gets the current value for a specific banner.
     *
     * @param string $bannerCode
     * @return bool
     */
    public function getBannerValue(string $bannerCode): bool
    {
        // The backend model loads all values into an array. We just need to read from it.
        $values = $this->getElement()->getValue();
        $key = $bannerCode . '_enabled';
        
        // $this->logger->info("--- Banners UI Block: Getting value for {$key} ---");
        
        if (isset($values[$key])) {
            // $this->logger->info("Value found in loaded data: '{$values[$key]}'");
            return (bool)$values[$key];
        }

        $this->logger->warning("No value found for {$key} in loaded data. Defaulting to false.");
        return false;
    }
}

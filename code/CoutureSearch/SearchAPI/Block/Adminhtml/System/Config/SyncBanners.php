<?php
namespace CoutureSearch\SearchAPI\Block\Adminhtml\System\Config;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Data\Form\Element\AbstractElement;

class SyncBanners extends Field
{
    protected $_template = 'CoutureSearch_SearchAPI::system/config/sync_banners.phtml';

    public function render(AbstractElement $element)
    {
        $element->unsScope()->unsCanUseWebsiteValue()->unsCanUseDefaultValue();
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
}

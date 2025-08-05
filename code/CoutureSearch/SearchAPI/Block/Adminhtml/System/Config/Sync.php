<?php
namespace CoutureSearch\SearchAPI\Block\Adminhtml\System\Config;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Data\Form\Element\AbstractElement;

class Sync extends Field
{
    /**
     * @var string
     */
    protected $_template = 'CoutureSearch_SearchAPI::system/config/sync.phtml';

    public function __construct(Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function render(AbstractElement $element)
    {
        $element->unsScope()->unsCanUseWebsiteValue()->unsCanUseDefaultValue();
        return parent::render($element);
    }

    protected function _getElementHtml(AbstractElement $element)
    {
        return $this->_toHtml();
    }

    public function getAjaxUrl()
    {
        return $this->getUrl('couture/sync/start');
    }

    public function getRefreshUrl()
    {
        return $this->getUrl('couture/sync/status');
    }

    /**
     * Return AJAX URL for cancel button
     *
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->getUrl('couture/sync/cancel');
    }

    public function getButtonHtml()
    {
        $button = $this->getLayout()->createBlock(
            \Magento\Backend\Block\Widget\Button::class
        )->setData(
            [
                'id' => 'couture_sync_button',
                'label' => __('Sync Catalogue'),
                'onclick' => 'javascript:check(); return false;',
            ]
        );

        return $button->toHtml();
    }
}

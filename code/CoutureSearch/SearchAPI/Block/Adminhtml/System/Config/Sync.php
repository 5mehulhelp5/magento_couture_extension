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

    /**
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Remove scope label
     *
     * @param  AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element)
    {
        $element->unsScope()->unsCanUseWebsiteValue()->unsCanUseDefaultValue();
        return parent::render($element);
    }

    /**
     * Return element html
     *
     * @param  AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        return $this->_toHtml();
    }

    /**
     * Return AJAX URL for sync button
     *
     * @return string
     */
    public function getAjaxUrl()
    {
        return $this->getUrl('couture/sync/start');
    }

    /**
     * Return AJAX URL for refresh button
     *
     * @return string
     */
    public function getRefreshUrl()
    {
        return $this->getUrl('couture/sync/status');
    }

    /**
     * Generate button html
     *
     * @return string
     */
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

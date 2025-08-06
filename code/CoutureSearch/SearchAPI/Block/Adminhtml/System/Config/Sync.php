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

    /**
     * This is the key fix. We override the entire render method to generate
     * our own table row structure, completely bypassing the part of the
     * parent method that creates the problematic <td class="label">.
     *
     * @param  AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element)
    {
        // Get the HTML content from our custom template
        $html = $this->_getElementHtml($element);

        // Create a single table cell that spans the entire row.
        return '<tr id="row_' . $element->getHtmlId() . '"><td colspan="3">' . $html . '</td></tr>';
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
     * Return AJAX URL for cancel button
     *
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->getUrl('couture/sync/cancel');
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

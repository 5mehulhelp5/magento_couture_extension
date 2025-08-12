<?php
namespace CoutureSearch\SearchAPI\Block\Adminhtml\System\Config;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Data\Form\Element\AbstractElement;
use CoutureSearch\SearchAPI\Model\ResourceModel\RecoConfig\CollectionFactory;
use Psr\Log\LoggerInterface;

class Recos extends Field
{
    protected $_template = 'CoutureSearch_SearchAPI::system/config/recos.phtml';
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
        $this->setElement($element);
        return parent::render($element);
    }

    protected function _getElementHtml(AbstractElement $element)
    {
        return $this->_toHtml();
    }

    public function getAvailableRecos()
    {
        $collection = $this->collectionFactory->create()->setOrder('reco_name', 'ASC');
        $this->logger->info('--- Recos UI Block: Found ' . $collection->getSize() . ' recos in the DB to render. ---');
        return $collection;
    }

    public function getRecoValue(string $recoCode): bool
    {
        $values = $this->getElement()->getValue();
        $key = $recoCode . '_enabled';
        return isset($values[$key]) ? (bool)$values[$key] : false;
    }
}

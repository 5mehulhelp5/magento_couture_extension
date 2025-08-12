<?php
namespace CoutureSearch\SearchAPI\Model\Config\Backend;

use Magento\Framework\App\Config\Value;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Cache\TypeListInterface;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Data\Collection\AbstractDb;
use Psr\Log\LoggerInterface;
use Magento\Framework\App\Config\Storage\WriterInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Backend\Model\Session;

abstract class AbstractDynamicConfig extends Value
{
    protected $collectionFactory;
    protected $logger;
    protected $configWriter;
    protected $request;
    protected $session;

    /**
     * These abstract methods must be implemented by the child classes (Banners and Recos)
     * to provide their specific configuration paths and data keys.
     */
    abstract protected function getConfigSectionPath(): string;
    abstract protected function getFormDataPath(): string;
    abstract protected function getCodeField(): string;
    abstract protected function getDefaultEnabledField(): string;

    public function __construct(
        Context $context,
        Registry $registry,
        ScopeConfigInterface $config,
        TypeListInterface $cacheTypeList,
        LoggerInterface $logger,
        WriterInterface $configWriter,
        RequestInterface $request,
        Session $session,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        $this->logger = $logger;
        $this->configWriter = $configWriter;
        $this->request = $request;
        $this->session = $session;
        parent::__construct($context, $registry, $config, $cacheTypeList, $resource, $resourceCollection, $data);
    }

    protected function _afterLoad()
    {
        $this->logger->info('--- Abstract Backend Model: _afterLoad triggered for ' . get_class($this));
        $collection = $this->collectionFactory->create();
        $values = [];

        $scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT;
        $scopeId = 0;
        if ($this->request->getParam('website')) {
            $scope = 'websites';
            $scopeId = $this->request->getParam('website');
        } elseif ($this->request->getParam('store')) {
            $scope = 'stores';
            $scopeId = $this->request->getParam('store');
        }

        foreach ($collection as $item) {
            $itemCode = $item->getData($this->getCodeField());
            $configPath = $this->getConfigSectionPath() . '/' . $itemCode . '_enabled';
            
            $savedValue = $this->_config->getValue($configPath, $scope, $scopeId);

            if ($savedValue !== null) {
                $values[$itemCode . '_enabled'] = $savedValue;
            } else {
                $values[$itemCode . '_enabled'] = $item->getData($this->getDefaultEnabledField());
            }
        }
        
        $this->setValue($values);
    }

    public function beforeSave()
    {
        if ($this->session->getIsBannerSyncJustCompleted()) {
            $this->session->unsIsBannerSyncJustCompleted();
            $this->logger->info('--- Abstract Backend Model: Skipping beforeSave due to recent sync completion. ---');
            return $this;
        }

        $this->logger->info('--- Abstract Backend Model: beforeSave triggered for ' . get_class($this));
        $values = $this->getData($this->getFormDataPath());

        if (is_array($values)) {
            foreach ($values as $key => $value) {
                $configPath = $this->getConfigSectionPath() . '/' . $key;
                $this->logger->info("Saving config value. Path: {$configPath}, Value: {$value}");
                $this->configWriter->save(
                    $configPath,
                    $value,
                    $this->getScope(),
                    $this->getScopeId()
                );
            }
        }
        
        return $this;
    }
}

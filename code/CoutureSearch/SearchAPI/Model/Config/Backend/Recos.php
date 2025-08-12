<?php
namespace CoutureSearch\SearchAPI\Model\Config\Backend;

use Magento\Framework\App\Config\Value;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Cache\TypeListInterface;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Data\Collection\AbstractDb;
use CoutureSearch\SearchAPI\Model\ResourceModel\RecoConfig\CollectionFactory;
use Psr\Log\LoggerInterface;
use Magento\Framework\App\Config\Storage\WriterInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Backend\Model\Session;

class Recos extends Value
{
    protected $collectionFactory;
    protected $logger;
    protected $configWriter;
    protected $request;
    protected $session;

    public function __construct(
        Context $context,
        Registry $registry,
        ScopeConfigInterface $config,
        TypeListInterface $cacheTypeList,
        CollectionFactory $collectionFactory,
        LoggerInterface $logger,
        WriterInterface $configWriter,
        RequestInterface $request,
        Session $session,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->logger = $logger;
        $this->configWriter = $configWriter;
        $this->request = $request;
        $this->session = $session;
        parent::__construct($context, $registry, $config, $cacheTypeList, $resource, $resourceCollection, $data);
    }

    protected function _afterLoad()
    {
        $this->logger->info('--- Recos Backend Model: _afterLoad triggered ---');
        $recos = $this->collectionFactory->create();
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

        foreach ($recos as $reco) {
            $recoCode = $reco->getRecoCode();
            $configPath = 'couture_dynamic_banners/settings/' . $recoCode . '_enabled';

            $savedValue = $this->_config->getValue($configPath, $scope, $scopeId);

            if ($savedValue !== null) {
                $values[$recoCode . '_enabled'] = $savedValue;
                $this->logger->info("Found saved value for {$recoCode}: " . $savedValue);
            } else {
                $values[$recoCode . '_enabled'] = $reco->getIsEnabledDefault();
                $this->logger->info("No saved value for {$recoCode}, using default from API: " . $reco->getIsEnabledDefault());
            }
        }
        
        $this->setValue($values);
    }

    public function beforeSave()
    {
        // This check prevents the race condition after a sync
        if ($this->session->getIsBannerSyncJustCompleted()) {
            $this->session->unsIsBannerSyncJustCompleted();
            $this->logger->info('--- Recos Backend Model: Skipping beforeSave due to recent sync completion. ---');
            return $this;
        }

        $this->logger->info('--- Recos Backend Model: beforeSave triggered by user action. ---');
        
        $values = $this->getData('groups/settings/fields/reco_visibility/value');

        if (is_array($values)) {
            foreach ($values as $key => $value) {
                $configPath = 'couture_dynamic_banners/settings/' . $key;
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

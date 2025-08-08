<?php
namespace CoutureSearch\SearchAPI\Model\Config\Backend;

use Magento\Framework\App\Config\Value;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Cache\TypeListInterface;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Data\Collection\AbstractDb;
use CoutureSearch\SearchAPI\Model\ResourceModel\BannerConfig\CollectionFactory;
use Psr\Log\LoggerInterface;
use Magento\Framework\App\Config\Storage\WriterInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Backend\Model\Session;

class Banners extends Value
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

    /**
     * This method is called after the config data is loaded.
     * It sets the values for the form fields.
     */
    protected function _afterLoad()
    {
        $this->logger->info('--- Backend Model: _afterLoad triggered ---');
        $banners = $this->collectionFactory->create();
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

        foreach ($banners as $banner) {
            $bannerCode = $banner->getBannerCode();
            $configPath = 'couture_dynamic_banners/settings/' . $bannerCode . '_enabled';
            
            $savedValue = $this->_config->getValue($configPath, $scope, $scopeId);

            if ($savedValue !== null) {
                $values[$bannerCode . '_enabled'] = $savedValue;
                $this->logger->info("Found saved value for {$bannerCode}: " . $savedValue);
            } else {
                $values[$bannerCode . '_enabled'] = $banner->getIsEnabledDefault();
                $this->logger->info("No saved value for {$bannerCode}, using default: " . $banner->getIsEnabledDefault());
            }
        }
        
        $this->setValue($values);
    }

    /**
     * This is the key fix. This method is called before the config data is saved.
     * We manually save each of our dynamic fields.
     */
    public function beforeSave()
    {
        if ($this->session->getIsBannerSyncJustCompleted()) {
            // If it exists, clear it and skip the save process for this one page load.
            $this->session->unsIsBannerSyncJustCompleted();
            $this->logger->info('--- Backend Model: Skipping beforeSave due to recent sync completion. ---');
            return $this;
        }

        $this->logger->info('--- Backend Model: beforeSave triggered ---');
        // The field name from the template is 'groups[settings][fields][banner_visibility][value]'
        $values = $this->getData('groups/settings/fields/banner_visibility/value');

        if (is_array($values)) {
            foreach ($values as $key => $value) {
                $configPath = 'couture_dynamic_banners/settings/' . $key;
                $this->logger->info("Saving config value. Path: {$configPath}, Value: {$value}");
                
                // Use the config writer to save each value individually
                $this->configWriter->save(
                    $configPath,
                    $value,
                    $this->getScope(),
                    $this->getScopeId()
                );
            }
        }
        
        // We don't call the parent::beforeSave() because we are handling the save ourselves.
        return $this;
    }
}

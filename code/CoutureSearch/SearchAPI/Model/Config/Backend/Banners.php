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
use Magento\Framework\App\RequestInterface;

class Banners extends Value
{
    protected $collectionFactory;
    protected $logger;
    protected $request;

    public function __construct(
        Context $context,
        Registry $registry,
        ScopeConfigInterface $config,
        TypeListInterface $cacheTypeList,
        CollectionFactory $collectionFactory,
        LoggerInterface $logger,
        RequestInterface $request,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->logger = $logger;
        $this->request = $request;
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
     * The beforeSave method has been removed.
     * Magento's default save controller will handle saving the values from the
     * correctly named form fields we created in the banners.phtml template.
     * This prevents the race condition where our sync was being overwritten.
     */
}

<?php
namespace CoutureSearch\SearchAPI\Model\Config\Backend;

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

class Banners extends AbstractDynamicConfig
{
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
        parent::__construct($context, $registry, $config, $cacheTypeList, $logger, $configWriter, $request, $session, $resource, $resourceCollection, $data);
    }

    protected function getConfigSectionPath(): string
    {
        return 'couture_dynamic_banners/marketing_settings';
    }

    protected function getFormDataPath(): string
    {
        return 'groups/marketing_settings/fields/banner_visibility/value';
    }

    protected function getCodeField(): string
    {
        return 'banner_code';
    }

    protected function getDefaultEnabledField(): string
    {
        return 'is_enabled_default';
    }
}

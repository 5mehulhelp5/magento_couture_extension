<?php
// File: Model/ResourceModel/BannerConfig/Collection.php
namespace CoutureSearch\SearchAPI\Model\ResourceModel\BannerConfig;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'entity_id';

    protected function _construct()
    {
        $this->_init(
            \CoutureSearch\SearchAPI\Model\BannerConfig::class,
            \CoutureSearch\SearchAPI\Model\ResourceModel\BannerConfig::class
        );
    }
}

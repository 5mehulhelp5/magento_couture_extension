<?php
// File: Model/ResourceModel/BannerConfig.php
namespace CoutureSearch\SearchAPI\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class BannerConfig extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('couture_banner_configuration', 'entity_id');
    }
}
<?php
// File: Model/BannerConfig.php
namespace CoutureSearch\SearchAPI\Model;

use Magento\Framework\Model\AbstractModel;

class BannerConfig extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\CoutureSearch\SearchAPI\Model\ResourceModel\BannerConfig::class);
    }
}
<?php
namespace CoutureSearch\SearchAPI\Model;

use Magento\Framework\Model\AbstractModel;

class SyncHistory extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\CoutureSearch\SearchAPI\Model\ResourceModel\SyncHistory::class);
    }
}

<?php
namespace CoutureSearch\SearchAPI\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class SyncHistory extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('couture_sync_history', 'entity_id');
    }
}

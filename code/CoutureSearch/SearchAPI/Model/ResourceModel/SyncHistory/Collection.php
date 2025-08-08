<?php
namespace CoutureSearch\SearchAPI\Model\ResourceModel\SyncHistory;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'entity_id';

    protected function _construct()
    {
        $this->_init(
            \CoutureSearch\SearchAPI\Model\SyncHistory::class,
            \CoutureSearch\SearchAPI\Model\ResourceModel\SyncHistory::class
        );
    }
}

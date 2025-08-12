<?php
namespace CoutureSearch\SearchAPI\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class RecoConfig extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('couture_reco_configuration', 'entity_id');
    }
}
<?php

namespace IWD\B2B\Model\ResourceModel\AccessSection;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
                'IWD\B2B\Model\AccessSection',
                'IWD\B2B\Model\ResourceModel\AccessSection'
        );
    }
}

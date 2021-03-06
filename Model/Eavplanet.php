<?php
namespace VendorName\ModuleName\Model;

use Magento\Framework\Model\AbstractModel;
use VendorName\ModuleName\Model\ResourceModel\Eavplanet as EavplanetResource;

class Eavplanet extends AbstractModel
{
    const ENTITY = 'a_planet';
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(EavplanetResource::class);
    }
}

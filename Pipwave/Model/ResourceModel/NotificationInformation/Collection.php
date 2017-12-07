<?php
namespace Magento\Pipwave\Model\ResourceModel\NotificationInformation;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Magento\Pipwave\Model\NotificationInformation',
            'Magento\Pipwave\Model\ResourceModel\NotificationInformation'
            );
    }
}
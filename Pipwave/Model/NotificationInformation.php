<?php
namespace Magento\Pipwave\Model;

class NotificationInformation extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
    {
        //parent::_construct();
        $this->_init('Magento\Pipwave\Model\ResourceModel\NotificationInformation');
    }
}
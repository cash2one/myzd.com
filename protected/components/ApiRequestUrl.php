<?php

class ApiRequestUrl {

    public $hostInfoProd = 'http://crm560.mingyizd.com';
    private $admin_salesbooking_create = 'api/adminbooking';
    private $tasksalseorder = 'api/tasksalseorder';

    public function getHostInfo() {
        $hostInfo = strtolower(Yii::app()->request->hostInfo);
        if (strStartsWith($hostInfo, $this->hostInfoProd) === TRUE) {
            $this->hostInfoProd = $hostInfo . '/admin';
        }
    }

    public function getUrl($url) {
        $this->getHostInfo();
        return $this->hostInfoProd . '/' . $url;
    }

    public function getUrlAdminSalesBookingCreate() {
        return $this->getUrl($this->admin_salesbooking_create);
    }
    
    /**
     * crm客服通知提醒调用
     * @return string
     */
    public function getUrlOrderPaidedTaskCreate() {
        return $this->getUrl($this->tasksalseorder);
    }

}

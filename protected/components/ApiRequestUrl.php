<?php

class ApiRequestUrl {

//    public $hostInfoProd = 'http://crm.dev.mingyizd.com';
    //public $hostInfoProd = Yii::app()->params['crmUrl'];
    private $admin_salesbooking_create = 'api/adminbooking';
    private $tasksalseorder = 'api/tasksalseorder';

    public function getHostInfo() {
        $hostInfoProd = Yii::app()->params['crmUrl'];
        $hostInfo = strtolower(Yii::app()->request->hostInfo);
        if (strStartsWith($hostInfo, $hostInfoProd) === TRUE) {
            $hostInfoProd = $hostInfo . '/admin';
        }
    }

    public function getUrl($url) {
        $this->getHostInfo();
        return Yii::app()->params['crmUrl'] . '/' . $url;
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

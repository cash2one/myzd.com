<?php

class ApiViewBookingListV7 extends EApiViewService {

    private $user;
    private $pageIndex;
    private $pageSize;

    //初始化类的时候将参数注入
    public function __construct($user, $pageIndex = 1, $pageSize = Booking::BOOKING_PAGE_SIZE) {
        parent::__construct();
        $this->user = $user;
        $this->pageIndex = $pageIndex;
        $this->pageSize = $pageSize;
    }

    protected function loadData() {
        $this->loadBookings();
        $this->loadDataCount();
    }

    //返回的参数
    protected function createOutput() {
        if (is_null($this->output)) {
            $this->output = array(
                'status' => self::RESPONSE_OK,
                'errorCode' => 0,
                'errorMsg' => 'success',
                'results' => $this->results,
            );
        }
    }

    //加载booking的数据
    private function loadBookings() {
        $models = Booking::model()->getAllByUserIdOrMobile($this->user->getId(), $this->user->getMobile());
        $this->setBookings($models);
    }

    private function loadDataCount() {
        $count = Booking::model()->getCountByUserIdOrMobile($this->user->getId(), $this->user->getMobile());
        $this->results->dataCount = $count;
    }

    private function setBookings($models) {
        if (arrayNotEmpty($models)) {
            foreach ($models as $model) {
                $data = new stdClass();
                $data->id = $model->getId();
                $data->refNo = $model->getrefNo();
                $data->expertName = $model->getExpertNameBooked();
                $data->hpName = $model->gethospitalName();
                $data->hpDeptName = $model->gethpDeptName();
                $data->dateStart = $model->getDateStart();
                $data->dateEnd = $model->getDateEnd();
                $data->statusText = $model->getStatusText();
                $data->status = $model->bk_status;
                $data->actionUrl = Yii::app()->createAbsoluteUrl('/booking/userbooking/' . $data->id);
                $this->results->booking[] = $data;
            }
        } else {
            $this->results->booking = array();
        }
    }

}

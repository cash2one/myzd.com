<?php

class ApiViewUserBookingV7 extends EApiViewService {

    private $id;
    private $booking;

    public function __construct($id) {
        parent::__construct();
        $this->id = $id;
        $this->booking = null;
    }

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

    protected function loadData() {
        $this->loadBooking();
    }

    private function loadBooking() {
        $model = Booking::model()->getById($this->id);
        if (isset($model)) {
            $this->setBooking($model);
        }
        $this->results->booking = $this->booking;
    }

    private function setBooking(Booking $model) {
        $data = new stdClass();
        $data->id = $model->getId();
        $data->refNo = $model->getrefNo();
        $data->expertName = $model->getExpertNameBooked();
        $data->hpName = $model->gethospitalName();
        $data->hpDeptName = $model->gethpDeptName();
        $data->dateStart = $model->getDateStart('m月d日');
        $data->dateEnd = $model->getDateEnd('m月d日');
        $data->statusText = $model->getStatusText();
        $data->status = $model->bk_status;
        $data->diseaseName = $model->getDiseaseName();
        $data->diseaseDetail = $model->getDiseaseDetail();
        $dara->dateUpdate = $model->getDateUpdated();
        $this->booking = $data;
    }

}

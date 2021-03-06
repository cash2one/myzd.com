<?php

class ApiViewDoctorSearchV7 extends EApiViewService {

    private $searchInputs;      // Search inputs passed from request url.
    private $getCount = false;  // whether to count no. of Doctors satisfying the search conditions.
    private $pageSize = 12;
    private $doctorSearch;  // DoctorSearch model.
    private $doctors;
    private $doctorCount;     // count no. of Doctors.

    public function __construct($searchInputs) {
        parent::__construct();
        $this->searchInputs = $searchInputs;
        $this->getCount = isset($searchInputs['getcount']) && $searchInputs['getcount'] == 1 ? true : false;
        $this->searchInputs['pagesize'] = isset($searchInputs['pagesize']) && $searchInputs['pagesize'] > 0 ? $searchInputs['pagesize'] : $this->pageSize;
        $this->doctorSearch = new DoctorSearchV7($this->searchInputs);
        $this->doctorSearch->addSearchCondition("t.date_deleted is NULL");
    }

    protected function loadData() {
        // load Doctors.
        $this->loadDoctors();
        //if ($this->getCount) {
            $this->loadDoctorCount();
        //}
    }

    protected function createOutput() {
        if (is_null($this->output)) {
            $this->output = array(
                'status' => self::RESPONSE_OK,
                'errorCode' => 0,
                'errorMsg' => 'success',
                'dataNum' => $this->doctorCount,
                'results' => $this->doctors,
            );
        }
    }

    private function loadDoctors() {
        if (is_null($this->doctors)) {
            $models = $this->doctorSearch->search();
            if (arrayNotEmpty($models)) {
                $this->setDoctors($models);
            }
        }
    }

    private function setDoctors(array $models) {
        foreach ($models as $model) {
            $data = new stdClass();
            $data->id = $model->getId();
            $data->name = $model->getName();
            $data->mTitle = $model->getMedicalTitle();
            $data->aTitle = $model->getAcademicTitle();
            // $data->hospital = $model->getHospitalId();
            $data->hpName = $model->getHospitalName();
            $data->hpDeptId = $model->getHpDeptId();
            $data->cityId = $model->getCityId();
            $data->hpDeptName = $model->getHpDeptName();
            $data->desc = $model->getDescription();
            $data->imageUrl = $model->getAbsUrlAvatar();
            //    $data->actionUrl = Yii::app()->createAbsoluteUrl('/mobile/booking/create', array('did' => $data->id, 'header' => 0, 'footer' => 0));   // @used by app.
            $data->actionUrl = $data->actionUrl = Yii::app()->createAbsoluteUrl('/api/booking');    // @user by app.
            $data->isContracted = $model->getIsContracted();
            $data->ServiceId = BookingServiceConfig::BOOKING_SERVICE_REGULAR;
            if (arrayNotEmpty($model->getServiceJoin())) {
                $getServiceJoins = $model->getServiceJoin();
                foreach ($getServiceJoins as $value) {
                    if ($value->booking_service_id == BookingServiceConfig::BOOKING_SERVICE_FREE_LIINIC) {
                        $data->ServiceId = BookingServiceConfig::BOOKING_SERVICE_FREE_LIINIC;
                    }
                }
            }
            $data->isExpteam = $model->getIsExpteam();
            $this->doctors[] = $data;
        }
    }

    private function loadDoctorCount() {
        if (is_null($this->doctorCount)) {
            $count = $this->doctorSearch->count();
            $this->setCount($count);
        }
    }

    private function setCount($count) {
        $this->doctorCount = $count;
    }

}

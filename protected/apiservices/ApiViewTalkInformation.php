<?php

class ApiViewTalkInformation extends EApiViewService {

    const TYPE_DOCTOR = 'doctor';
    const TYPE_HOSPITAL = 'hospital';

    private $searchInputs;      // Search inputs passed from request url.
    private $doctorId;
    private $hospitalId;

    public function __construct($searchInputs) {
        parent::__construct();
        $this->searchInputs = $searchInputs;
        //判断itemparam并赋值，区别搜索医生或医院
        if (isset($this->searchInputs['itemparam']) && $this->searchInputs['itemparam'] == self::TYPE_DOCTOR) {
            $this->doctorId = $this->searchInputs['itemid'];
        } else if (isset($this->searchInputs['itemparam']) && $this->searchInputs['itemparam'] == self::TYPE_HOSPITAL) {
            $this->hospitalId = $this->searchInputs['itemid'];
        }
    }

    protected function loadData() {
        if (is_null($this->doctorId) === false) {
            $this->loadDoctor();
        } else if (is_null($this->hospitalId) === false){
            $this->loadHospital();
        }
    }

    private function loadDoctor() {
        if (is_null($this->doctorId) === false) {
            $model = Doctor::model()->getById($this->doctorId);
            if (isset($model)) {
                $this->setDoctor($model);
            }
        }
    }

    private function loadHospital() {
        if (is_null($this->hospitalId) === false) {
            $model = Hospital::model()->getById($this->hospitalId);
            if (isset($model)) {
                $this->setHospital($model);
            }
        }
    }

    protected function createOutput() {
        if (is_null($this->output)) {
            $this->output = array(
                'items' => $this->results
            );
        }
    }

    private function setDoctor($model) {
        $data = new stdClass();
        $data->id = $model->getId();
        $data->name = $model->getName();
        $data->imageurl = $model->getAbsUrlAvatar();
        $data->category = "医生";
        $data->custom1 = array('hpName' => $model->getHospitalName());
        $data->custom2 = array('hpDeptName' => $model->getHpDeptName());
        $data->custom3 = array('mTitle' => $model->getMedicalTitle());
        $data->custom4 = array('aTitle' => $model->getAcademicTitle());
        $data->custom5 = array('careerExp' => $model->getCareerExp());
        $data->custom6 = array('honour' => $model->honour);
        $data->custom7 = array('reasons' => $model->getReasons());
        $this->results = $data;
    }

    private function setHospital($model) {
        $data = new stdClass();
        $data->id = $model->getId();
        $data->name = $model->getName();
        $data->imageurl = $model->getAbsUrlAvatar();
        $data->category = "医院";
        $data->custom1 = array('type' => $model->getType());
        $data->custom2 = array('class' => $model->getClass());
        $data->custom3 = array('stateName' => $model->getStateName());
        $data->custom4 = array('cityName' => $model->getCityName());
        $data->custom5 = array('description' => $model->getDescription());
        $this->results = $data;
    }

}

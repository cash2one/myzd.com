<?php

class ApiViewTalkInformation extends EApiViewService {

    const TYPE_DOCTOR = 'doctor';
    const TYPE_HOSPITAL = 'hospital';

    private $searchInputs;      // Search inputs passed from request url.
    private $doctorId;
    private $hospitalId;
    private $url;

    public function __construct($searchInputs) {
        parent::__construct();
        $this->searchInputs = $searchInputs;
        //判断itemparam并赋值，区别搜索医生或医院
        if (isset($this->searchInputs['itemparam']) && $this->searchInputs['itemparam'] == self::TYPE_DOCTOR) {
            $this->doctorId = $this->searchInputs['itemid'];
            $this->url = Yii::app()->params['baseUrl'] . '/doctor/view/id/' . $this->doctorId;
        } else if (isset($this->searchInputs['itemparam']) && $this->searchInputs['itemparam'] == self::TYPE_HOSPITAL) {
            $this->hospitalId = $this->searchInputs['itemid'];
            $this->url = Yii::app()->params['baseUrl'] . '/hospital/view/id/' . $this->hospitalId;
        }
    }

    protected function loadData() {
        if (is_null($this->doctorId) === false) {
            $this->loadDoctor();
        } else if (is_null($this->hospitalId) === false) {
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
        $data->url = $this->url;
        $data->category = "医生";
        $data->custom1 = ['hpName', $model->getHospitalName()];
        $data->custom2 = ['hpDeptName', $model->getHpDeptName()];
        $data->custom3 = ['mTitle', $model->getMedicalTitle()];
        $data->custom4 = ['aTitle', $model->getAcademicTitle()];
        $data->custom5 = ['careerExp', $model->getCareerExp()];
        $honour = '';
        foreach ($model->honour as $value) {
            $honour .= $value . ',';
        }
        $docHonour = substr($honour, 0, strlen($honour) - 1);
        $data->custom6 = ['honour', $docHonour];
        $reasons = '';
        isset($model->reason_one) && $reasons .= $model->reason_one;
        isset($model->reason_two) && $reasons = $reasons . ',' . $model->reason_two;
        isset($model->reason_three) && $reasons = $reasons . ',' . $model->reason_three;
        isset($model->reason_four) && $reasons = $reasons . ',' . $model->reason_four;
        $data->custom7 = ['reasons', $reasons];
        $this->results = $data;
    }

    private function setHospital($model) {
        $data = new stdClass();
        $data->id = $model->getId();
        $data->name = $model->getName();
        $data->imageurl = $model->getAbsUrlAvatar();
        $data->url = $this->url;
        $data->category = "医院";
        $data->custom1 = ['type', $model->getType()];
        $data->custom2 = ['class', $model->getClass()];
        $data->custom3 = ['stateName', $model->getStateName()];
        $data->custom4 = ['cityName', $model->getCityName()];
        $data->custom5 = ['description', $model->getDescription()];
        $this->results = $data;
    }

}

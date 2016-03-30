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
        $data->custom1 = ['医院', $model->getHospitalName()];
        $data->custom2 = ['科室', $model->getHpDeptName()];
        $data->custom3 = ['临床职称', $model->getMedicalTitle()];
        $data->custom4 = ['学术职称', $model->getAcademicTitle()];
        $data->custom5 = ['执业经历', $model->getCareerExp()];
        $honour = '';
        foreach ($model->honour as $value) {
            $honour .= $value . ',';
        }
        $docHonour = substr($honour, 0, strlen($honour) - 1);
        $data->custom6 = ['荣誉', $docHonour];
        $reasons = '';
        isset($model->reason_one) && $reasons .= $model->reason_one;
        isset($model->reason_two) && $reasons = $reasons . ',' . $model->reason_two;
        isset($model->reason_three) && $reasons = $reasons . ',' . $model->reason_three;
        isset($model->reason_four) && $reasons = $reasons . ',' . $model->reason_four;
        $data->custom7 = ['推荐理由', $reasons];
        $this->results = $data;
    }

    private function setHospital($model) {
        $data = new stdClass();
        $data->id = $model->getId();
        $data->name = $model->getName();
        $data->imageurl = $model->getAbsUrlAvatar();
        $data->url = $this->url;
        $data->category = "医院";
        $data->custom1 = ['医院类型', $model->getType()];
        $data->custom2 = ['医院等级', $model->getClass()];
        $data->custom3 = ['省份或地区', $model->getStateName()];
        $data->custom4 = ['城市', $model->getCityName()];
        $data->custom5 = ['医院描述', $model->getDescription()];
        $this->results = $data;
    }

}

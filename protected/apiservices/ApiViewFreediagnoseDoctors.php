<?php

class ApiViewFreediagnoseDoctors extends EApiViewService {

    private $searchInputs;
    private $city;
    private $disease_category;
    private $pageSize = 100;
    private $page = 1;
    private $getCount = false;
    private $doctorCount;

    public function __construct($searchInputs) {
        parent::__construct();
        $this->searchInputs = $searchInputs;
        $this->getCount = isset($searchInputs['getcount']) && $searchInputs['getcount'] == 1 ? true : false;
        $this->city = isset($searchInputs['city']) && $searchInputs['city'] != '' ? $searchInputs['city'] : null;
        $this->disease_category = isset($searchInputs['disease_category']) && $searchInputs['disease_category'] > 0 ? $searchInputs['disease_category'] : null;
        $this->pageSize = isset($searchInputs['pagesize']) && $searchInputs['pagesize'] > 0 ? $searchInputs['pagesize'] : $this->pageSize;
        $this->page = isset($searchInputs['page']) && $searchInputs['page'] > 0 ? $searchInputs['page'] : $this->page;
    }

    protected function loadData() {
        $this->loadDoctors();
    }

    protected function createOutput() {
        if (is_null($this->output)) {
            $this->output = array(
                'status' => self::RESPONSE_OK,
                'errorCode' => 0,
                'errorMsg' => 'success',
                'dataNum' => $this->doctorCount,
                'results' => $this->results,
            );
        }
    }

    public function loadDoctors() {
        $doctorIds = include dirname(__FILE__) . '/../config/freediagnosedoctors.php';
        $criteria = new CDbCriteria();
        $criteria->addCondition('t.date_deleted is NULL');
        $criteria->addInCondition('t.id', $doctorIds);
        if (is_null($this->city) == false) {
            if ($this->city == 'other') {
                $criteria->addNotInCondition("t.city_id", array(1, 73, 200, 391, 255, 186)); //不包括的城市
            } else {
                $criteria->compare('t.city_id', $this->city);
            }
        }
        if (is_null($this->disease_category) == false) {
            $cateId = $this->disease_category;
            $criteria->join = 'left join disease_doctor_join b on t.id=b.doctor_id left join category_disease_join c on c.disease_id=b.disease_id left join disease_category d on d.sub_cat_id=c.sub_cat_id';
            $criteria->addCondition("d.cat_id=:cateId");
            $criteria->addCondition("d.app_version=:app");
            $criteria->params[":cateId"] = $cateId;
            $criteria->params[":app"] = 7;
            $criteria->distinct = true;
        }
        if ($this->getCount) {
            $this->loadDoctorCount($criteria);
        }
        $criteria->limit = $this->pageSize;
        $criteria->offset = (intval($this->page) - 1) * $this->pageSize;
        $models = Doctor::model()->findAll($criteria);

        if (arrayNotEmpty($models)) {
            $this->setDoctors($models);
        }
    }

    private function setDoctors($models) {
        $temp = array();
        foreach ($models as $model) {
            $data = new stdClass();
            $data->id = $model->getId();
            $data->name = $model->getName();
            $data->hpId = $model->getHospitalId();
            $data->hpName = $model->getHospitalName();
            $data->mTitle = $model->getMedicalTitle();
            $data->aTitle = $model->getAcademicTitle();
            $data->imageUrl = $model->getAbsUrlAvatar();
            $data->desc = $model->getDescription();
            $data->hpDeptId = $model->getHpDeptId();
            $data->hpDeptName = $model->getHpDeptName();
            $data->isContracted = $model->getIsContracted();
            $temp[] = $data;
        }
        $this->results = $temp;
    }

    private function loadDoctorCount($criteria) {
        $count = Doctor::model()->count($criteria);
        $this->setCount($count);
    }

    private function setCount($count) {
        $this->doctorCount = $count;
    }

}

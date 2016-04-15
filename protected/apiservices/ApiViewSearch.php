<?php

class ApiViewSearch extends EApiViewService {

    private $searchInputs;      // Search inputs passed from request url.
    private $getCount = false;  // whether to count no. of Doctors satisfying the search conditions.
    private $pageSize = 100;
    private $doctorSearch;  // DoctorSearch model.
    private $doctors;
    private $doctorCount;     // count no. of Doctors.
    private $diseases;
    private $diseaseCount;     // count no. of Diseases.
    private $diseaseCategory;
    private $diseaseCategoryCount;     // count no. of DiseaseCategory.
    private $hospital;
    private $hospitalCount;     // count no. of DiseaseCategory.

    public function __construct($searchInputs) {
        parent::__construct();
        $this->searchInputs = $searchInputs;
        $this->getCount = isset($searchInputs['getcount']) && $searchInputs['getcount'] == 1 ? true : false;
        $this->searchInputs['pagesize'] = isset($searchInputs['pagesize']) && $searchInputs['pagesize'] > 0 ? $searchInputs['pagesize'] : $this->pageSize;
        $this->doctorSearch = new DoctorSearchV7($this->searchInputs);
        $this->doctorSearch->addSearchCondition("t.date_deleted is NULL");
        $this->diseaseSearch = new DiseaseSearch($this->searchInputs);
        $this->diseaseSearch->addSearchCondition("t.date_deleted is NULL");
        $this->diseaseCategorySearch = new DiseaseCategorySearch($this->searchInputs);
        $this->diseaseCategorySearch->addSearchCondition("t.date_deleted is NULL");
        $this->hospitalSearch = new HospitalSearch($this->searchInputs);
        $this->hospitalSearch->addSearchCondition("t.date_deleted is NULL");
    }

    protected function loadData() {
        // load Doctors.
        $this->loadDoctors();
        $this->loadDiseases();
        $this->loadDiseaseCategory();
        $this->loadHospital();
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

    private function loadDoctors() {
        if (is_null($this->doctors)) {
            $models = $this->doctorSearch->search();
            if (arrayNotEmpty($models)) {
                $this->setDoctors($models);
            }
        }
    }

    private function loadDiseases() {
        if (is_null($this->diseases)) {
            $models = $this->diseaseSearch->search();
            if (arrayNotEmpty($models)) {
                $this->setDiseases($models);
            }
        }
    }

    private function loadDiseaseCategory() {
        if (is_null($this->diseaseCategory)) {
            $models = $this->diseaseCategorySearch->search();
            if (arrayNotEmpty($models)) {
                $this->setDiseaseCategory($models);
            }
        }
    }

    private function loadHospital() {
        if (is_null($this->hospital)) {
            $models = $this->hospitalSearch->search();
            if (arrayNotEmpty($models)) {
                $this->setHospital($models);
            }
        }
    }

    private function setDoctors(array $models) {
        foreach ($models as $model) {
            $data = new stdClass();
            $data->id = $model->getId();
            $data->name = $model->getName();
            $data->hpName = $model->getHospitalName();
            $data->hpDeptName = $model->getHpDeptName();
            $data->mTitle = $model->getMedicalTitle();
            $data->aTitle = $model->getAcademicTitle();
            $this->results->doctors[] = $data;
        }
    }

    private function setDiseases(array $models) {
        foreach ($models as $model) {
            $data = new stdClass();
            $data->id = $model->getId();
            $data->name = $model->getName();
            $this->results->diseases[] = $data;
        }
    }

    private function setDiseaseCategory(array $models) {
        foreach ($models as $model) {
            $data = new stdClass();
            $data->id = $model->getSubCategoryId();
            $data->name = $model->getSubCategoryName();
            $this->results->diseaseCategorys[] = $data;
        }
    }

    private function setHospital(array $models) {
        foreach ($models as $model) {
            $data = new stdClass();
            $data->id = $model->id;
            $data->name = $model->getName();
            $data->shortName = $model->getName(true);
            $this->results->hospitals[] = $data;
        }
    }

}

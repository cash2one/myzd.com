<?php

class ApiViewDoctorV7 extends EApiViewService {

    private $doctor_id;
    private $members;
    private $subCatId;
    private $doctors;

    public function __construct($id) {
        parent::__construct();
        $this->doctor_id = $id;
    }

    protected function loadData() {
        $this->loadDoctor();
        if(!is_array($this->doctor_id)){
        $this->loadRelatedDoctors();
        $this->loadDoctorArticle();
        }
    }

    protected function createOutput() {
        if (is_null($this->output)) {
            $this->output = array(
                'status' => self::RESPONSE_OK,
                'errorCode' => 0,
                "errorMsg" => "success",
                'results' => $this->results,
            );
        }
    }

    private function loadDoctor() {
        if(is_array($this->doctor_id)){
            $doctor = Doctor::model()->getAllByIds($this->doctor_id);
            //print_r($doctor);exit;
        }else{
            $doctor = Doctor::model()->getById($this->doctor_id);
        }
        $this->doctors=$doctor;
        $this->setDoctor();
        if (isset($this->members)) {
            $this->setMembers();
        }
    }

    private function setMembers() {
        array_shift($this->members);
        foreach ($this->members as $model) {
            $data = new stdClass();
            $data->id = $model->getId();
            $data->name = $model->getName();
            $data->hospitalId = $model->getHospitalId();
            $data->hospitalName = $model->getHospitalName();
            $data->mTitle = $model->getMedicalTitle();
            $data->aTitle = $model->getAcademicTitle();
            $data->imageUrl = $model->getAbsUrlAvatar();
            $data->hpDeptId = $model->getHpDeptId();
            $data->hpDeptName = $model->getHpDeptName();
            $data->isExpteam = $model->getIsExpteam();
            $data->description = $model->getDescription();
            $data->careerExp = $model->getCareerExp();
            $data->honour = $model->getHonourList();
            $this->results->members[] = $data;
        }
    }

    private function setDoctor() {
      if(count($this->doctors)>1){
          array_shift($this->doctors);
          foreach($this->doctors as $model){
            $data = new stdClass();
            $data->id = $model->getId();
            $data->name = $model->getName();
            $data->hospitalId = $model->getHospitalId();
            $data->hospitalName = $model->getHospitalName();
            $data->mTitle = $model->getMedicalTitle();
            $data->aTitle = $model->getAcademicTitle();
            $data->imageUrl = $model->getAbsUrlAvatar();
            $data->hpDeptId = $model->getHpDeptId();
            $data->hpDeptName = $model->getHpDeptName();
            $data->isExpteam = $model->getIsExpteam();
            $data->description = $model->getDescription();
            $data->careerExp = $model->getCareerExp();
            $data->honour = $model->getHonourList();
            $data->reasons = $model->getReasons();
            if ($data->isExpteam) {
                $this->members = ExpertTeam::model()->getById($model->getExpteamId())->getMembers();
            }
            $this->results->doctor[] = $data;
          }
      }else{
          $data = new stdClass();
          $data->id = $this->doctors->getId();
          $data->name = $this->doctors->getName();
          $data->hospitalId = $this->doctors->getHospitalId();
          $data->hospitalName = $this->doctors->getHospitalName();
          $data->mTitle = $this->doctors->getMedicalTitle();
          $data->aTitle = $this->doctors->getAcademicTitle();
          $data->imageUrl = $this->doctors->getAbsUrlAvatar();
          $data->hpDeptId = $this->doctors->getHpDeptId();
          $data->hpDeptName = $this->doctors->getHpDeptName();
          $data->isExpteam = $this->doctors->getIsExpteam();
          $data->description = $this->doctors->getDescription();
          $data->careerExp = $this->doctors->getCareerExp();
          $data->honour = $this->doctors->getHonourList();
          $data->reasons = $this->doctors->getReasons();
          if ($data->isExpteam) {
              $this->members = ExpertTeam::model()->getById($this->doctors->getExpteamId())->getMembers();
          }
          $this->results->doctor = $data;
      }
    }

    private function loadRelatedDoctors() {
        $diseaseDoctorJoin = DiseaseDoctorJoin::model()->getAllByDoctorId($this->doctor_id);
        if (arrayNotEmpty($diseaseDoctorJoin)) {
            $diseaseId = $diseaseDoctorJoin[0]->disease_id;
            $categoryDiseaseJoin = CategoryDiseaseJoin::model()->getById($diseaseId);
//            if (isset($categoryDiseaseJoin)) {
//                $this->subCatId = $categoryDiseaseJoin->getSubCatId();
//            }
            $this->setNavigation($this->subCatId);
            $doctors = Doctor::model()->getByDiseaseId($diseaseId, $this->doctor_id);
            if (isset($doctors)) {
                $this->setRelatedDoctors($doctors);
            }
        }
    }

    public function setRelatedDoctors($doctors) {
        foreach ($doctors as $doctor) {
            $data = new stdClass();
            $data->id = $doctor->getId();
            $data->name = $doctor->getName();
            $data->hospitalId = $doctor->getHospitalId();
            $data->hospitalName = $doctor->getHospitalName();
            $data->mTitle = $doctor->getMedicalTitle();
            $data->aTitle = $doctor->getAcademicTitle();
            $data->imageUrl = $doctor->getAbsUrlAvatar();
            $data->hpDeptId = $doctor->getHpDeptId();
            $data->hpDeptName = $doctor->getHpDeptName();
            $data->isExpteam = $doctor->getIsExpteam();

            $this->results->related[] = $data;
        }
    }

    public function setNavigation($subCatId) {
        $model = DiseaseCategory::model()->getBySubCatId($subCatId);
        $data = new stdClass();
        $data->cate_id = $model->getCategoryId();
        $data->cate_name = $model->getCategoryName();
        $data->sub_cate_id = $model->getSubCategoryId();
        $data->getSubCategoryName = $model->getSubCategoryName();
        $this->results->navigation = $data;
    }

    public function loadDoctorArticle() {
        $doctorArticles = DoctorArticle::model()->getAllByAttributes(array('doctor_id' => $this->doctor_id));
        if (isset($doctorArticles)) {
            $this->setDoctorArticle($doctorArticles);
        }
    }

    function setDoctorArticle($doctorArticles) {
        foreach ($doctorArticles as $article) {
            $data = new stdClass();
            $data->id = $article->id;
            $data->doctorId = $article->doctor_id;
            $data->fileName = $article->file_name;
            $data->title = $article->title;
            $data->type = $article->type;
            $this->results->article[] = $data;
        }
    }

}

<?php

class ApiViewDiseaseCategory extends EApiViewService {

    public function __construct() {
        parent::__construct();
    }

    protected function loadData() {
//        $this->loadCity();
        $this->loadDiseaseCategory();
        //查询医生city_id 城市
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

    public function loadCity($values = array()) {
        $cri = new CDbCriteria();
        $cri->addInCondition('id', $values);
        $res = RegionCity::model()->findAll($cri);
    }

    public function loadDiseaseCategory() {
        $disMgr = new DiseaseManager();
        // $models = $disMgr->loadDiseaseCategoryListV7();
        $disease = Yii::app()->request->getParam('disease');
        $models = $disMgr->loadHospitalList($disease);
        $navList = array();
        foreach ($models as $model) {
            $data = new stdClass();
            $data->id = $model->getCategoryId();

            $data->name = $model->getCategoryName();
            // sub group.
            $subGroup = new stdClass();
            $subGroup->id = $model->getSubCategoryId();
            $subGroup->name = $model->getSubCategoryName();

            if (isset($navList[$data->id])) {
                $navList[$data->id]->subCat[] = $subGroup;
            } else {
                $navList[$data->id] = $data;
                $navList[$data->id]->subCat[] = $subGroup;
            }
        }
        $this->setDiseaseCategory(array_values($navList));
    }

    private function setDiseaseCategory($data) {
        $this->results = $data;
    }

}

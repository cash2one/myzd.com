<?php

class DiseaseCategorySearch extends ESearchModel {

    public function __construct($searchInputs, $with = null) {
        parent::__construct($searchInputs, $with);
    }

    public function model() {
        $this->model = new DiseaseCategory();
    }

    public function getQueryFields() {
        return array('name');
    }

    public function addQueryConditions() {
        $this->criteria->addCondition('t.date_deleted is NULL');
        $this->criteria->addCondition('t.app_version = 7');

        if ($this->hasQueryParams()) {
            if (isset($this->queryParams['name'])) {
                $name = $this->queryParams['name'];
                $this->criteria->addSearchCondition('sub_cat_name', $name);
            }

        }
    }

}

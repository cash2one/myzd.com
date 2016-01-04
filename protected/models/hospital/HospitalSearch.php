<?php

class HospitalSearch extends ESearchModel {

    public function __construct($searchInputs, $with = null) {
        parent::__construct($searchInputs, $with);
    }

    public function model() {
        $this->model = new Hospital();
    }

    public function getQueryFields() {
        return array('disease', 'city', 'cate', 'is_show');
    }

    public function addQueryConditions() {
        $this->criteria->addCondition('t.date_deleted is NULL');

        //$criteria->order = 't.display_order ASC';        
        if ($this->hasQueryParams()) {
            // is_show
            if (isset($this->queryParams['is_show'])) {
                $isShow = $this->queryParams['is_show'];
                $this->criteria->compare('t.is_show', $isShow);
            }
            // City.
            if (isset($this->queryParams['city'])) {
                $cityId = $this->queryParams['city'];
                $this->criteria->compare("t.city_id", $cityId);
            }
            // Disease.
            if (isset($this->queryParams['disease'])) {
                $diseaseId = $this->queryParams['disease'];
                $this->criteria->join = 'left join disease_hospital_join dhj on (t.`id`=dhj.`hospital_id`)';
                $this->criteria->addCondition("dhj.disease_id=:diseaseId");
                $this->criteria->params[":diseaseId"] = $diseaseId;
                $this->criteria->distinct = true;
            }
            // Cate.
            if (isset($this->queryParams['cate'])) {
                $cateId = $this->queryParams['cate'];
                $this->criteria->join = 'left join disease_hospital_join b on t.id=b.hospital_id left join disease c on c.id=b.disease_id left join disease_category d on c.category_id=d.sub_cat_id';
                $this->criteria->addCondition("d.cat_id=:cateId");
                $this->criteria->params[":cateId"] = $cateId;
                $this->criteria->distinct = true;
            }
        }
    }

    /*
      public function search($querystring) {
      $this->parseQueryString($querystring);
      $this->buildQueryCriteria();

      return Hospital::model()->findAll($this->criteria);
      }
     */



    /*
      public function buildQueryCriteria() {

      $this->criteria = new CDbCriteria();
      $this->criteria->addCondition('t.date_deleted is NULL');

      //$criteria->order = 't.display_order ASC';
      if ($this->hasQueryParams()) {
      // is_show
      if (isset($this->queryParams['is_show'])) {
      $this->criteria->compare('t.is_show', $this->queryParams['is_show']);
      }
      // City.
      if (isset($this->queryParams['city'])) {
      $this->criteria->compare("t.city_id", $this->queryParams['city']);
      }
      // Disease.
      }
      $this->buildCriteriaQueryOptions();
      }
     */
    /*
      private function parseQueryString($querystring) {
      $this->queryParams = array();
      $queryFields = $this->getQueryFields();
      foreach ($queryFields as $field) {
      if (isset($querystring[$field])) {
      $this->queryParams[$field] = $querystring[$field];
      }
      }
      if (isset($querystring['order'])) {
      $this->queryOptions['order'] = 't.' . $querystring['order'];
      }
      if (isset($querystring['offset'])) {
      $this->queryOptions['offset'] = $querystring['offset'];
      }
      if (isset($querystring['limit'])) {
      $this->queryOptions['limit'] = $querystring['limit'];
      } else {
      $this->queryOptions['limit'] = $this->limit;
      }
      }
     * 
     */
    /*
      private function hasQueryParams() {
      return arrayNotEmpty($this->queryParams);
      }

      private function buildCriteriaQueryOptions() {
      if (isset($this->queryOptions['order'])) {
      $this->criteria->order = $this->queryOptions['order'];
      }
      if (isset($this->queryOptions['limit'])) {
      $this->criteria->limit = $this->queryOptions['limit'];
      }
      if (isset($this->queryOptions['offset'])) {
      $this->criteria->offset = $this->queryOptions['offset'];
      }
      }
     * 
     */
}

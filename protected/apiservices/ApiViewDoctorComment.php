<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApiViewDoctorComment
 *
 * @author shuming
 */
class ApiViewDoctorComment extends EApiViewService {

    private $doctorId;
    private $page;
    private $pagesize;
    private $commentMgr;
    private $comments;

    public function __construct($doctorId, $page, $pagesize) {
        parent::__construct();
        $this->doctorId = $doctorId;
        $this->page = $page;
        $this->pagesize = $pagesize;
        $this->commentMgr = new CommentManager();
        $this->comments = array();
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

    protected function loadData() {
        $this->loadCount();
        $this->loadComment();
    }

    public function loadCount() {
        $dataCount = $this->commentMgr->loadCountByDoctorId($this->doctorId);
        $this->results->dataCount = $dataCount;
    }

    private function loadComment() {
        $options = array('limit' => $this->pagesize, 'offset' => (($this->page - 1) * $this->pagesize), 'order' => 't.date_created DESC');
        $models = $this->commentMgr->loadCommentByDoctorId($this->doctorId, null, $options);
        if (arrayNotEmpty($models)) {
            $this->setComment($models);
        }
        $this->results->comments = $this->comments;
    }

    private function setComment($models) {
        foreach ($models as $model) {
            $data = new stdClass();
            $data->userName = $model->user_name;
            $data->effect = $model->effect;
            $data->doctorAttitude = $model->doctor_attitude;
            $data->commentText = $model->comment_text;
            $data->diseaseDetail = $model->disease_detail;
            $data->dateCreated = $model->getDateCreated();
            $this->comments[] = $data;
        }
    }

}

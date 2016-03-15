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
    private $commentMgr;
    private $comments;

    public function __construct($doctorId) {
        parent::__construct();
        $this->doctorId = $doctorId;
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
        $this->loadComment();
    }

    private function loadComment() {
        $models = $this->commentMgr->loadCommentByDoctorId($this->doctorId);
        if (arrayNotEmpty($models)) {
            $this->setComment($models);
        }
        $this->results->comments = $this->comments;
    }

    private function setComment($models) {
        foreach ($models as $model) {
            $data = new stdClass();
            $data->userName = $model->user_name;
            $data->service = $model->service;
            $data->postOperative = $model->post_operative;
            $data->commentText = $model->comment_text;
            $data->dateCreated = $model->getDateCreated();
            $this->comments[] = $data;
        }
    }

}

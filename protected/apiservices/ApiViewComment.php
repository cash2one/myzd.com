<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApiViewComment
 *
 * @author shuming
 */
class ApiViewComment extends EApiViewService {

    private $bookingId;
    private $commentMgr;
    private $comment;

    public function __construct($bookingId) {
        parent::__construct();
        $this->bookingId = $bookingId;
        $this->comment = null;
        $this->commentMgr = new CommentManager();
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
        $model = $this->commentMgr->LoadBookingComment($this->bookingId);
        if (isset($model)) {
            $this->setComment($model);
        }
        $this->results->comment = $this->comment;
    }

    private function setComment($model) {
        $data = new stdClass();
        $data->service = $model->service;
        $data->postOperative = $model->post_operative;
        $data->commentText = $model->comment_text;
        $data->detail = $model->detail;
        $data->dateCreated = $model->date_created;
        $this->comment = $data;
    }

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommentController
 *
 * @author shuming
 */
class CommentController extends WebsiteController {

    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array(),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'ajaxCreate', 'view'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    //填写评论的页面
    public function actionCreate($bookingId) {
        $form = new CommentForm();
        $apisvc = new ApiViewUserBookingV7($bookingId);
        $output = $apisvc->loadApiViewData();
        $this->render('create', array(
            'model' => $form,
            'data' => $output,
        ));
    }

    //异步提交评论
    public function actionAjaxCreate() {
        $output = array('status' => 'no');
        $user = $this->getCurrentUser();
        if (isset($_POST['CommentForm'])) {
            $values = $_POST['CommentForm'];
            $values['user_id'] = $user->getId();
            $values['user_name'] = $user->username;
            $commentMgr = new CommentManager();
            $output = $commentMgr->CreateComment($values);
        } else {
            $output['error'] = 'invalid request';
        }
        $this->renderJsonOutput($output);
    }

    //查看评论的页面
    public function actionView($bookingId) {
        $bookingApisvc = new ApiViewUserBookingV7($bookingId);
        $booking = $bookingApisvc->loadApiViewData();
        $commentApisvc = new ApiViewComment($bookingId);
        $comment = $commentApisvc->loadApiViewData();
        $this->render('view', array(
            'booking' => $booking,
            'comment' => $comment,
        ));
    }

}

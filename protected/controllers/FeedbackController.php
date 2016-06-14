<?php

class FeedbackController extends WebsiteController {

    private $model = null;  // Feedback

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('ajaxCreatFeedback'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('ajaxCreatFeedback'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }
    
    //ajax提交意见反馈
    public function actionAjaxCreatFeedback() {
        if (isset($_POST['feedback'])) {
            $values = $_POST['feedback'];
            //$values=array('user_id'=>1,'source'=>'web','contact_mobile'=>'13816439927','content'=>'test');
            $user = $this->getCurrentUser();
            $feedbackMgr = new FeedbackManager();
            $output = $feedbackMgr->saveFeedback($values,$user);
            $this->renderJsonOutput($output);
        }else{
            $output['status'] = 'no';
            $output['errorCode'] = 401;
            $output['errorMsg'] = "非法请求";
            $this->renderJsonOutput($output);
        }
    }
}
?>
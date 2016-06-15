<?php

class FeedbackManager {
    /**
     * 保存用户意见反馈
     * @param unknown $userId
     */
    public function saveFeedback($values,$user) {
        $model = new Feedback();
        if($values['user_id']=="") $values['user_id']=null;
        $valuse['user_host_ip'] = Yii::app()->request->userHostAddress;
        $model->setAttributes(array('user_id'=>$values['user_id'],'user_host_ip'=>$values['user_host_ip'],'source'=>$values['source'],'contact_mobile'=>$values['contact_mobile'],'content'=>$values['content']), true);
        if ($model->save()) {
           $output['status'] = 'ok';
           $output['errorCode'] = 0;
           $output['errorMsg'] = 'success';
           $output['results'] = array();
           return $output;
        }else{
           $output['status'] = 'no';
           $output['errorCode'] = 400;
           $output['errorMsg'] = $model->getFirstErrors();
           return $output;
        }
    }

}


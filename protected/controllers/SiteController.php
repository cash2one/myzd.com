<?php

class SiteController extends WebsiteController {

    public $menu;

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
                'maxLength' => 6,
                'offset' => 0,
                'testLimit' => 0,
                'height' => 34
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        $this->handleMobileBrowserRedirect();
        $this->checkVendor(AppLog::SITE_INDEX);

        $this->layout = 'layoutHome';
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/layoutHome.php'
        $this->show_header_navbar = false;
        $this->render("index", array(
        ));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {

        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest) {
                echo $error['message'];
            } else {
                $this->render('error', $error);
            }
        } else {
            $this->redirect(Yii::app()->getHomeUrl());
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContactus() {

        $model = new ContactForm;
        $this->performAjaxValidation($model);
        $accessAgent = '';
        if (isset($_GET['agent'])) {
            $accessAgent = $_GET['agent'];
        }

        $successMsg = '提交成功！我们会尽快联系您。';
        if (isset($_POST['ContactForm'])) {

            $model->attributes = $_POST['ContactForm'];
            $model->subject = '新的服务咨询';
            if ($model->validate()) {
                $contactus = new Contactus();
                $contactus->attributes = $model->attributes;

                $contactus->access_agent = $accessAgent;
                $contactus->user_ip = $this->getUserIp();
                $contactus->user_agent = Yii::app()->request->getUserAgent();

                if ($contactus->save() === false) {
                    $model->addErrors($contactus->getErrors());
                } else {
                    //send email to inform admin.                    
                    $emailMgr = new EmailManager();
                    $emailMgr->sendEmailContactUs($contactus);
                }
            }

            if ($this->isAjaxRequest()) {
                $output = array();
                if ($model->hasErrors()) {
                    $output['errors'] = $model->getErrors();
                } else {
                    $output['s'] = array($successMsg);
                }
                $this->renderJsonOutput($output);
            } else if ($model->hasErrors() === false) {
                Yii::app()->user->setFlash('contactus', $successMsg);
                $this->refresh();
            }
        }


        $this->render('contactus', array('model' => $model));
    }

    public function actionEnquiry() {
        $this->redirect(array('booking/create'));
        $form = new ContactEnquiryForm;
        $this->performAjaxValidation($form);
        $accessAgent = '';
        if (isset($_GET['agent'])) {
            $accessAgent = $_GET['agent'];
        }

        if (isset($_POST['ContactEnquiryForm'])) {

            $form->attributes = $_POST['ContactEnquiryForm'];
            $success = false;
            if ($form->validate()) {
                $model = new ContactEnquiry();
                $model->attributes = $form->attributes;

                $model->access_agent = $accessAgent;
                $model->user_ip = $this->getUserIp();
                $model->user_agent = Yii::app()->request->getUserAgent();
                if ($model->save()) {
                    $success = true;
                    //send email to inform admin.
                    $emailMgr = new EmailManager();
                    $emailMgr->sendEmailEnquiry($model);
                } else {
                    $form->addErrors($model->getErrors());
                }
            }

            if ($this->isAjaxRequest()) {
                if ($success) {
                    //do anything here
                    echo CJSON::encode(array(
                        'status' => 'true'
                    ));
                    Yii::app()->end();
                } else {
                    $error = CActiveForm::validate($form);
                    //var_dump($error);exit;
                    if ($error != '[]') {
                        echo $error;
                    }
                    Yii::app()->end();
                }
            } else {
                if ($success) {
                    $this->setFlashMessage('enquiry.success', '提交成功!');
                    $this->refresh();
                }
            }
        }

        $this->render('enquiry', array('model' => $form));
    }

    public function getPageMenu() {
        if ($this->menu === null) {
            $this->menu = array(
                'aboutus' => array('label' => '公司简介', 'url' => array('site/page', 'view' => 'aboutus')),
                'bigevents' => array('label' => '大事记', 'url' => array('site/page', 'view' => 'bigevents')),
                'honors' => array('label' => '企业荣誉', 'url' => array('site/page', 'view' => 'honors')),
                'news' => array('label' => '公司资讯', 'url' => array('site/page', 'view' => 'news')),
                'joinus' => array('label' => '加入我们', 'url' => array('site/page', 'view' => 'joinus')),
                    //'contactus' => array('label' => '联系我们', 'url' => array('site/contactus')),
                    //'enquiry' => array('label' => '我要预约', 'url' => array('site/enquiry')),
            );
        }
        return $this->menu;
    }

    //Load disease 
    public function loadOptionsDiseaseCategory() {
        $options = array();

        $criteria = new CDbCriteria();
        $criteria->with = array('diseases');
        $criteria->order = 't.display_order';

        //$models = DiseaseCategory::model()->getAll(array('diseases'));
        $models = DiseaseCategory::model()->findAll($criteria);
        if (emptyArray($models) === false) {
            foreach ($models as $model) {
                $key = $model->name;
                $options[$key] = array();
                $diseases = $model->getDiseases();
                if (emptyArray($diseases) === false) {
                    $count = 8;
                    $index = 0;
                    foreach ($diseases as $disease) {
                        if ($disease->show == 1) {
                            $options[$key][$disease->id] = $disease->getShortName();
                            $index++;
                        }
                    }
                    $options[$key]['category'] = $model->id;
                }
            }
        }
        return $options;
    }

    public function getCurrentPageLabel() {
        $menu = $this->getPageMenu();

        $currentView = Yii::app()->request->getParam('view');
        if ($this->action->id == 'contactus') {
            return $menu['contactus']['label'];
        } else if (isset($menu[$currentView])) {
            return $menu[$currentView]['label'];
        } else
            return '关于我们';
    }

    public function actionDownLoadFile($fileName) {
        $filename = iconv("utf-8", "gb2312", $fileName);
        // print_r($filename);exit;
        $file_sub_path = $_SERVER['DOCUMENT_ROOT'] . Yii::app()->theme->baseUrl . '/downloads/mygy/' . $filename;
        $file = fopen($file_sub_path, "rb");
        Header("Content-type:   application/octet-stream ");
        Header("Accept-Ranges:   bytes ");
        if ($filename == 'weituoshu.docx') {
            $filename = '委托书.docx';
        } else if ($filename == 'mygy_shenqing.docx') {
            $filename = '公益活动申请表.docx';
        } else if ($filename == 'tepin_shenqing.docx') {
            $filename = '特贫申请资助表.docx';
        }
        Header("Content-Disposition:   attachment;   filename= " . $filename);
        $contents = "";
        while (!feof($file)) {
            $contents .= fread($file, 8192);
        }
        echo $contents;
        fclose($file);
    }
    
    

}

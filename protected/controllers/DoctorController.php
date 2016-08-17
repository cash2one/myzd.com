<?php

class DoctorController extends WebsiteController {

    public $listId;
    public $diseaselist = null;
    public $disease = null;

    /**
     * @return array action filters
     */
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
                'actions' => array('register', 'view', 'search', 'top', 'doctorstaticcontent', 'scrollacceptbooking', 'findexpert','citybydoctor'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('loadAvatar'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionSearch() {

        $this->render('search');
    }

    public function actionTop() {
        $value=$_GET;
        if(!strstr($_SERVER['REQUEST_URI'],"-")){
            $flip = array_keys($value);
            $url="/doctor-top";
            $uriStr=$url."";
            foreach($flip as $k=>$v ){
                if($k<=count($value)){
                    $uriStr.="-".$v."-".$value[$v];
                }
            }
            $this->redirect($uriStr.".html");
        }
        $seoKey="";
        if(array_key_exists("city",$value)){
           $cityInfo=RegionCity::model()->getById($value['city']);
           $cityName=$cityInfo['name_cn'];
           $seoKey.=$cityName;
        }
        else{
            $seoKey.="全国";
        }
        if(array_key_exists("disease_sub_category",$value)){
           $diseaseCategoryInfo=DiseaseCategory::model()->getByAttributes(array("sub_cat_id"=>$value['disease_sub_category'],"app_version"=>7));
           $diseaseCategoryName=$diseaseCategoryInfo['sub_cat_name'];
           $seoKey.=$diseaseCategoryName;
        }
        if(array_key_exists("disease",$value)){
           $diseaseInfo=Disease::model()->getById($value['disease']);
           $diseaseName=$diseaseInfo['name'];
           $diseaseCategoryInfo=DiseaseCategory::model()->getById($diseaseInfo['category_id']);
           $diseaseCategoryName=$diseaseCategoryInfo['sub_cat_name'];
           $seoKey.=$diseaseCategoryName.$diseaseName;
        }
        $this->pageTitle=$seoKey."医生排行,哪个医生好,专家医生预约_名医主刀网";
        $this->htmlMetaKeywords="手术预约,找医生,网上预约医生";
        $this->htmlMetaDescription="名医主刀网为您提供".$seoKey."医生排行榜,手术预约,专家医生预约,哪个医生好等信息;帮助广大有手术需求的患者,在第一时间预约全国知名专家,安排入院手术。";
        $apiService = new ApiViewDoctorSearchV7($value);
        $output = $apiService->loadApiViewData();
        if(array_key_exists("disease_sub_category_param", $value)){
            $diseaseCategoryInfo=DiseaseCategory::model()->getByAttributes(array("sub_cat_id"=>$value['disease_sub_category_param'],"app_version"=>7));
            $diseaseCategoryId=$diseaseCategoryInfo['cat_id'];
        }else{
            $diseaseCategoryId="";
        }
        if(count($output->results)>0){
            $showPage=$this->page($value,$pagesize=24,$output->dataNum);
            $doctorNum=$output->dataNum;
        }else{
            $showPage=$this->page($value,$pagesize=24,0);
            $doctorNum=0;
        }
        $this->render('top',array('data'=>$output,'prames'=>$value,'page'=>$showPage['show'],'doctorNum'=>$doctorNum,'diseaseCategoryId'=>$diseaseCategoryId));
    }

    public function actionFindexpert() {
        $data=$this->actionDoctorStaticContent();
        $this->render('findexpert',array("data"=>$data));
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $apiService = new ApiViewDoctorV7($id);
        $output = $apiService->loadApiViewData();
        $this->pageTitle=$output->results->doctor->hospitalName.$output->results->doctor->name."医生预约,怎么样好不好,挂号时间_名医主刀网";
        $this->htmlMetaKeywords=$output->results->doctor->name."手术预约,".$output->results->doctor->name."医生预约,".$output->results->doctor->name."医生介绍";
        $this->htmlMetaDescription=mb_strlen($output->results->doctor->careerExp) > 120 ? mb_substr($output->results->doctor->careerExp, 0, 120, 'utf-8') : $output->results->doctor->careerExp;
        $referer=$_SERVER['HTTP_REFERER'];
        $this->render('view', array(
            'data' => $output,'referer' => $referer
        ));
    }

    public function actionRegister() {
        $form = new DoctorForm("register");
        $form->initModel();
        $this->performAjaxValidation($form);
        $this->registerDoctor($form);
        $this->render('register', array(
            'model' => $form
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Doctor;
        if (isset($_POST['Doctor'])) {
            $model->attributes = $_POST['Doctor'];
            if ($model->save()) 
                $this->redirect(array('view', 'id' => $model->id));
        }
        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $form = new DoctorForm();
        $form->initModel($model);
        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($form);

        if (isset($_POST['DoctorForm'])) {
            $form->attributes = $_POST['DoctorForm'];
            if (isset($_POST['DoctorForm']['disease_list']) === false) {
                $form->disease_list = null;
            }
            $doctorMgr = new DoctorManager();
            $doctorMgr->updateDoctor($form);
            if ($form->hasErrors() === false) {
                $this->redirect(array('view', 'id' => $model->getId()));
            }
        }
        $this->render('update', array(
            'model' => $form,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    public function actionLoadAvatar($uid = null) {
        $fileUrl = '';
        if ($uid === null || $uid == '') {
            $fileUrl = DoctorAvatar::getAbsDefaultAvatarUrl();
        } else {
            $avatar = DoctorAvatar::model()->getByUID($uid);

            if (isset($avatar)) {
                $fileUrl = $avatar->getAbsThumbnailUrl();
            } else {
                $fileUrl = DoctorAvatar::getAbsDefaultAvatarUrl();
            }
        }
        header('Location: ' . $fileUrl);
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Doctor the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Doctor::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Doctor $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'doctor-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function getListId() {
        if (is_array($this->listId) === false) {
            $this->listId = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25);
        }
        return $this->listId;
    }

    public function getDiseaseList() {
        if ($this->diseaselist == null) {
            $this->diseaselist = array('shen' => '肾脏', 'fei' => '肺部', 'weichang' => '胃肠', 'gandan' => '肝胆', 'xinxueguan' => '心血管', 'buyun' => '不孕不育', 'guke' => '骨科');
        }
        return $this->diseaselist;
    }

    public function getCurrentDiseaseLabel() {
        $list = $this->getDiseaseList();
        if (isset($list[$this->disease])) {
            return $list[$this->disease];
        }
    }

    public function loadDiseaseMenu() {
        $list = $this->getDiseaseList();
        $menu = array();
        foreach ($list as $key => $value) {
            $menuItem = array(
                'label' => $value,
                'key' => $key,
                'link' => $this->createUrl('doctor/search', array('d' => $key)),
                'active' => false
            );
            if ($key == $this->disease) {
                $menuItem['active'] = true;
            }
            $menu[] = $menuItem;
        }
        return $menu;
    }

    public function getDoctorListByDisease($disease = null) {
        if ($disease === null) {
            $disease = $this->disease;
        }
        $list;
        //$list = array('shen' => '肾脏', 'fei' => '肺部', 'weichang' => '胃肠', 'gandan' => '肝胆', 'xinxueguan' => '心血管', 'buyun' => '不孕不育');
        switch ($disease) {
            case 'shen': $list = array(20, 8, 9, 2);
                break;
            case 'fei': $list = array(23, 20, 7, 5, 3, 16, 15);
                break;
            case 'weichang':$list = array(23, 25, 24, 30, 33, 5, 15);
                break;
            case 'gandan':$list = array(24, 21, 19, 20, 15);
                break;
            case 'xinxueguan':$list = array(4, 11);
                break;
            case 'buyun':$list = array(12, 6);
                break;
            case 'guke':$list = array(17);
                break;
            default: $list = array();
                break;
        }
        return $list;
    }

    protected function registerDoctor(DoctorForm $form) {

        if (isset($_POST['DoctorForm'])) {
            $values = $_POST['DoctorForm'];
            $form->setAttributes($values);
            $form->hp_dept_name = $form->faculty;

            //$form->hospital_id = null;
            $doctorMgr = new DoctorManager();
            //if ($doctorMgr->createDoctor($form, false)) {   // do not check verify_code.
            if ($doctorMgr->createDoctor($form)) {
                // Send email to inform admin.
                $doctorId = $form->getId();
                $with = array('doctorCerts', 'doctorHospital', 'doctorHpDept', 'doctorCity');
                $idoctor = $doctorMgr->loadIDoctor($doctorId, $with);

                if (isset($idoctor)) {
                    $emailMgr = new EmailManager();
                    $emailMgr->sendEmailDoctorRegister($idoctor);
                }
                // store successful message id in session.
                $this->setFlashMessage("doctor.success", "恭喜您注册成功！");
                $this->refresh(true);     // terminate and refresh the current page.
            } else {
                
            }
        }
    }
    
    /**
     *  找医生页面静态内容（每周推荐）
     */
    public function actionDoctorStaticContent(){
       $timestamp = time();
       $cal_result= date("W", $timestamp) - date("W", strtotime(date("Y-m-01", $timestamp))) + 1;
       $weeksDoctorId=$this->weeksDoctorId($cal_result);
       $apisvc = new ApiViewDoctorV7($weeksDoctorId);
       $output = $apisvc->loadApiViewData();
       return $output;
       //$this->renderJsonOutput($output);
    }
    
    /**
     * 找医生页面最新预约单内容
     */
    public function actionScrollAcceptBooking(){
       $apisvc = new ApiViewScrollAcceptBooking();
       $output = $apisvc->loadApiViewData();
       $this->renderJsonOutput($output);
    }
    /**
     * 每周推荐医生配置
     */
    protected function weeksDoctorId($week){
        $list=array("1"=>array("233","359","369","473","3220","3184","3591","1286"),
                    "2"=>array("1389","361","1427","1769","2899","2907","2926","2927"),
                    "3"=>array("2987","3014","3026","3031","3032","3068","3070","3078"),
                    "4"=>array("3279","3290","3105","3106","3692","3140","3141","3143")
        );
        if($week>'4'){
            return $list["4"];
        }
        else{
            return $list[$week];
        }
    }
    
    /**
     * 最新预约单配置
     */
    protected  function newBookingList(){
        //return $list=array("","78","456","542","789");
    }
    
    /**
     * 获取有医生信息的城市列表
     */
    public function actionCityByDoctor(){
        $apisvc = new ApiViewCityByDoctor();
        $output = $apisvc->loadApiViewData();
        $this->renderJsonOutput($output);
    }
    
    
}

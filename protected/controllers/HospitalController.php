<?php

class HospitalController extends WebsiteController {
    
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
                'actions' => array('index', 'view', 'view2', 'top', 'search', 'department', 'Tophospital'),
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
    
    public function actionIndex($city = null) {
     
        $this->render("index");
    }

    public function actionView($id,$deptId=0) {
        //$ifaculty = $this->loadIFaculty($id);
        $value=$_GET;
        if(strstr($_SERVER['REQUEST_URI'],"?")){
            $flip = array_keys($value);
            $url="/hospital-view";
            $uriStr=$url."";
            foreach($flip as $k=>$v ){
                if($k<=count($value)){
                    $uriStr.="-".$v."-".$value[$v];
                }
            }
            $this->redirect($uriStr.".html");
        }
        $hospitalMgr = new HospitalManager();
        $with = array('hospitalCity', 'hospitalDepartments' => array('on' => 'hospitalDepartments.is_show=1'));
        $ihospital = $hospitalMgr->loadIHospitalById($id, $with);
        $departmentInfo=HospitalDepartment::model()->getById($deptId);
        if (is_null($ihospital) || is_null($departmentInfo)) {
            $this->throwPageNotFoundException();
            //header("HTTP/1.1 404 Not Found");
        }
        $departmentName=$departmentInfo['name'];
        $seoKey=$ihospital->name.$departmentName;
        $this->pageTitle=$seoKey."手术预约,床位预约,专家预约,哪个医生好_名医主刀网";
        $this->htmlMetaKeywords="手术预约,找医院,网上预约";
        $this->htmlMetaDescription=mb_strlen($ihospital->desc) > 120 ? mb_substr($ihospital->desc, 0, 120, 'utf-8') : $ihospital->desc;
        $this->render('view', array(
            'model' => $ihospital,
        ));
    }
    
    public function actionView2($id,$deptId=0) {
        //$ifaculty = $this->loadIFaculty($id);
        $value=$_GET;
        if(strstr($_SERVER['REQUEST_URI'],"?")){
            $flip = array_keys($value);
            $url="/hospital-view2";
            $uriStr=$url."";
            foreach($flip as $k=>$v ){
                if($k<=count($value)){
                    $uriStr.="-".$v."-".$value[$v];
                }
            }
            $this->redirect($uriStr.".html");
        }
        $hospitalMgr = new HospitalManager();
        $with = array('hospitalCity', 'hospitalDepartments' => array('on' => 'hospitalDepartments.is_show=1'));
        $ihospital = $hospitalMgr->loadIHospitalById($id, $with);
        if (is_null($ihospital)) {
            $this->throwPageNotFoundException();
        }
        $departmentInfo=HospitalDepartment::model()->getById($deptId);
        $departmentName=$departmentInfo['name'];
        $seoKey=$ihospital->name.$departmentName;
        $this->pageTitle=$seoKey."手术预约,床位预约,专家预约,哪个医生好_名医主刀网";
        $this->htmlMetaKeywords="手术预约,找医院,网上预约";
        $this->htmlMetaDescription=mb_strlen($ihospital->desc) > 120 ? mb_substr($ihospital->desc, 0, 120, 'utf-8') : $ihospital->desc;
        $this->render('view2', array(
            'model' => $ihospital,
        ));
    }

    //搜索，根据科室找医院
    public function actionSearch() {
        $this->render('search');
    }

    public function actionTop() {
        $value=$_GET;
        if(strstr($_SERVER['REQUEST_URI'],"?")){
            $flip = array_keys($value);
            $url="/hospital-top";
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
        $this->pageTitle=$seoKey."医院排行,哪家医院好,床位预约_名医主刀网";
        $this->htmlMetaKeywords="手术预约,找医院,床位预约";
        $this->htmlMetaDescription="名医主刀网为您提供".$seoKey."医院排行榜,医院大全,床位预约,哪家医院好等信息;帮助有手术需求的患者提供专业、高效、安全的手术医疗预约服务。";
        $this->render('top');
    }
    
    public function actionDepartment() {
        $this->checkVendor(AppLog::SITE_DEPT);
        $this->render('department');
    }
    
    public function actionTopHospital(){
        $values=$_GET;
        $topHospitalMgr = new TopHospitalManager();
        $output = $topHospitalMgr->loadAllTopHospital($values);
        $page=$output['page'];
        
        if(Yii::app()->request->getIsAjaxRequest()==false){
          unset($output['page']);
          $this->render('topHospital',array('list'=>$output,'page'=>$page));
        }else{
            $this->renderJsonOutput($output);
        }
    }

}

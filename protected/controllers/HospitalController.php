<?php

class HospitalController extends WebsiteController {

    public function actionIndex($city = null) {
     
        $this->render("index");
    }

    public function actionView($id,$deptId=0) {
        //$ifaculty = $this->loadIFaculty($id);
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
        $this->render('view', array(
            'model' => $ihospital,
        ));
    }
    
    public function actionView2($id,$deptId=0) {
        //$ifaculty = $this->loadIFaculty($id);
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
        $seoKey="";
        if(array_key_exists("city",$value)){
            $cityInfo=RegionCity::model()->getById($value['city']);
            $cityName=$cityInfo['name_cn'];
            $seoKey.=$cityName;
        }
        if(array_key_exists("disease_sub_category",$value)){
            $diseaseCategoryInfo=DiseaseCategory::model()->getById($value['disease_sub_category']);
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
        $topHospitalMgr = new TopHospitalManager();
        $output = $topHospitalMgr->loadAllTopHospital();
        $this->render('top');
        //print_r($output);
    }

}

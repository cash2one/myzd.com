<?php

class ExpertteamController extends WebsiteController {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    public function actionView($id) {
        $expteamMgr = new ExpertTeamManager();
        $imodel = $expteamMgr->loadIExpertTeamById($id);
        $this->pageTitle=$imodel->name."成员介绍,擅长哪些手术_名医主刀网";
        $this->htmlMetaKeywords="专家团队,手术团队";
        $this->htmlMetaDescription=mb_strlen($imodel->desc) > 120 ? mb_substr($imodel->desc, 0, 120, 'utf-8') : $imodel->desc;
        $this->render('view', array(
            'team'=>$imodel,          
        ));
    }
    /*
    public function actionView($code) {
        $exTeamMgr = new ExpertTeamManager();
        $team = $exTeamMgr->loadTeamByCode($code);
        $iteam = $exTeamMgr->convertToIExpertTeam($team);
        if (is_null($iteam)) {
            $this->throwPageNotFoundException();
        }
        $this->render('view', array(
            'team' => $iteam
        ));
    }
     * 
     */

    public function actionIndex() {
        $value=$_GET;
        $cityName="北京";
        if(array_key_exists("city",$value)){
        $cityInfo=RegionCity::model()->getById($value['city']);
        $cityName=$cityInfo['name_cn'];
        }
        $this->pageTitle=$cityName."顶尖外科专家领衔的专业手术治疗团队_名医主刀网";
        $this->htmlMetaKeywords="专家团队,手术团队";
        $this->htmlMetaDescription="集顶尖名医,权威医院,高效医疗,一流服务于一身的,国内顶尖外科专家领衔的专业手术治疗团队,为您提供最专业最权威的手术治疗,网上预约手术就看名医主刀网。";
        $this->render("index");
    }

}

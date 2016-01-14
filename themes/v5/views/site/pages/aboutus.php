<?php
$menu = $this->getPageMenu();
$this->pageTitle = '关于我们_公司简介_名医主刀';
$this->htmlMetaKeywords = '关于我们,名医主刀';
$this->htmlMetaDescription = '关于我们。【名医主刀】总部坐落于上海，现设北京、杭州、天津、广州、南京、成都等分部，业务范围覆盖全国。做手术就找名医主刀';
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/gongsijianjie.css");
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
?>
<style>
    #site-header{border-bottom:1px solid #ddd;}
    .page-content .heading-u{margin-bottom:0;}
    .page-content .panel{border-top:none;border-radius:0;}
    .page-content .panel-body{padding-top:30px;min-height: 400px;}    

</style>
<div class="container-fluid bg-gray h400">
</div>
<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="mt-60">
                <?php $this->renderPartial('pages/_menu'); ?> 
            </div>
        </div>
        <div class="container-fluid summary-one">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="pull-left"><div class="long-line"></div><div class="white-point"></div></div>
                            <div class="pull-left ml20"><div class="short-line"></div><div class="white-point ml19" ></div></div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="summary-text"><span class="bg-white mingyi-title">名医主刀</span><span class="color-white"> —— 国内最大的移动医疗手术平台，旨在为有手术需求的患者提供专业、高效、安全的手术医疗服务。帮助广大有手术需求的患者，在第一时间预约全国知名专家，安排入院手术。</span></div>	
                        </div>
                        <div class="col-sm-offset-1 col-sm-3">
                            <img class="mt105" src="<?php echo $urlResImage ?>aboutus/heart-01.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid summary-two">
            <div class="row">
                <div class="col-sm-offset-4 col-sm-2">
                    <img class="summary-two-img" src="<?php echo $urlResImage ?>aboutus/map-01.png">
                </div>
                <div class="col-sm-offset-1 col-sm-2">
                    <div class="summary-two-text"><span class="color-white summary-two-title">总</span><span class="color-white">部坐落于上海，现设北京、杭州、天津、广州、南京、成都等分部，业务范围覆盖全国。平台汇聚了国内外顶级名医资源和闲置床位资源，并利用互联网技术实现医患精准匹配，医疗资源优化配置，帮助患者解决<span>“好看病，看好病”</span>的切实需求。</span></div>	
                </div>
                <div class="col-sm-1">
                    <div class="pull-right mr30"><div class="second-long-line"></div><div class="pull-right two-white-point"></div></div>
                    <div class="pull-right"><div class="second-short-line"></div><div class="two-white-point2"></div></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid summary-three">
            <div class="row">
                <div class="col-sm-offset-4 col-sm-2">
                    <div class="summary-three-text">做手术就找名医主刀</span><img class="summary-three-img" src="<?php echo $urlResImage ?>aboutus/circle-01.png"></div>	
                </div>
                <div class="col-sm-4">
                    <img class="mt150" src="<?php echo $urlResImage ?>aboutus/logo-01.png">
                </div>	
            </div>
        </div>
    </div>
</div>

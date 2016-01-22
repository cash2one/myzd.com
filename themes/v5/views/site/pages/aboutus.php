<?php
$menu = $this->getPageMenu();
$this->pageTitle = '关于我们_公司简介_名医主刀';
$this->htmlMetaKeywords = '关于我们,名医主刀';
$this->htmlMetaDescription = '关于我们。【名医主刀】总部坐落于上海，现设北京、杭州、天津、广州、南京、成都等分部，业务范围覆盖全国。做手术就找名医主刀';
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/aboutus.css");
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
?>
<style>
    #site-header{border-bottom:1px solid #ddd;}
    .page-content .heading-u{margin-bottom:0;}
    .page-content .panel{border-top:none;border-radius:0;}
    .page-content .panel-body{padding-top:30px;min-height: 400px;}    

</style>
<div class="container-fluid aboutus-header h400">
    <img src="<?php echo $urlResImage; ?>aboutus/our-header.png"/>
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
                        <div class="col-sm-3">                          
                        </div>
                        <div class="col-sm-3">
                            <div class="summary-text"><span class="mingyi-title">名医主刀</span><span> ——国内最大的移动医疗手术平台，旨在为有手术需求的患者提供专业、高效、安全的手术医疗服务。帮助广大有手术需求的患者，在第一时间预约全国知名专家，安排入院手术。</span></div>	
                        </div>
                        <div class="col-sm-offset-1 col-sm-3">
                            <img class="" src="<?php echo $urlResImage ?>aboutus/heart-01.png">
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
                <div class="col-sm-2 col-sm-offset-1">
                    <div class="summary-two-text"><span class="summary-two-title">总 </span><span>部坐落于上海，现设北京、杭州、天津、广州、南京、成都等分部，业务范围覆盖全国。平台汇聚了国内外顶级名医资源和闲置床位资源，并利用互联网技术实现医患精准匹配，医疗资源优化配置，帮助患者解决<span>“好看病，看好病”</span>的切实需求。</span></div>	
                </div>        
            </div>
        </div>
         <div class="container-fluid summary-three">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-5">
                    <div class="mode-title">“多点执业”模式：</div>
                    <div class="clearfix"></div>
                    <div class="summary-three-text">名医主刀从成立之初一直积极响应国家多点执业政策，努力打造医师多点执业的落地平台。并利用互联网思维，优化医疗资源分配，让更多患者可以轻松享受北、上、广等一线城市名医专家资源。患者通过我们平台可精准对接到擅长相关疾病的专家，从而节省了在不同医院门诊排队的时间一定程度上缓解三甲医院门诊排队现象并减少患者乱投医而产生的费用。</div>  
                     <div class="mt30" ><div class="text-center ml-60"><img src="<?php echo $urlResImage ?>aboutus/1-01.png"></div></div>
                </div>     
            </div>
            
        </div>
        <div class="container-fluid summary-four">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-5">
                    <div class="mode-title pull-right">“分级诊疗”模式：</div>
                    <div class="clearfix"></div>
                    <div class="summary-three-text">名医主刀也在政府提倡的分级诊疗政策和医疗服务模式上进行了新的探索，实现了“互联网＋分级诊疗”模式的创新研究。基于基层首诊制度，遇到疑难病例可请会诊，无法解决的病人可以通过平台转诊。名医主刀与国内多家三甲医院、二甲医院、民营医院合作，基层首诊患者通过名医主刀平台可对接三甲医院医生，在有闲置床位资源的二甲医院或者民营医院进行手术治疗，缓解百姓看病难，看病贵的问题。缓解三甲医院门诊压力，提高基层医院医疗资源的有效利用。让患者不仅“好看病”更要“看好病”。  </div>  
                    <div class="mt30"> <div class="text-center ml-60"><img src="<?php echo $urlResImage ?>aboutus/2-01.png"></div></div>
                </div> 
            </div>

        </div>
    </div>
</div>

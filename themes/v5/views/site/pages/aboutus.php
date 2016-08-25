<?php
$menu = $this->getPageMenu();
$this->pageTitle = '关于我们_名医主刀网';
$this->htmlMetaKeywords = '名医主刀简介,名医主刀网';
$this->htmlMetaDescription = '名医主刀作为国内最大的移动医疗手术预约平台,旨在为有手术需求的患者提供专业、高效、安全的手术医疗预约服务,帮助广大有手术需求的患者,在第一时间预约全国知名专家,安排入院手术。';
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/pc/aboutus102.min.css");
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
?>
<div class="container-fluid aboutus-header h400">
    <img src="http://static.mingyizhudao.com/14625020116117"/>
</div>
<section id="aboutus">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="mt-60">
                    <?php $this->renderPartial('pages/_menu'); ?> 
                </div>
            </div>

            <div class="background-color-entirety">
                <div class="container">
                    <div class="aboutus-padding-70">
                        <div class="mt60 text-14-2em">
                            名医主刀是国内专业的移动医疗手术预约平台，响应国家分级诊疗及多点执业政策，利用互联网技术实现医患精准匹配，
                            医疗资源优化配置，旨在为有手术需求的患者提供专业、高效、安全的手术医疗预约服务。帮助有手术需求的患者，
                            在第一时间预约全国知名专家，安排入院手术。 
                        </div>
                        <div class="mt20 text-14-2em">
                            公司总部坐落于上海，现设北京、杭州、天津、广州、南京、济南、成都、延安等分部，业务范围覆盖全国。平台汇聚了国内外
                            优质名医资源和闲置床位资源，并利用互联网技术实现医患精准匹配，医疗资源优化配置，帮助患者解决<span class="text18 color-555">“好看病，看好病”</span>的切实需求。 
                        </div>
                        <div class="row mt50 mb100">
                            <div class="col-lg-4">
                                <div class="text-center"><img src="http://static.mingyizhudao.com/147203186194691"></div>
                                <div><div class="text-18-color text-center">优质资源</div>
                                    <div class="line-right"><div class="line-background "></div></div></div>
                                <div class="mt20 text-14-2em">
                                    平台汇聚了全球三万名以上三甲医院副主任级别及以上的医师，并与工程院院士等级别的专家团队、美国凯瑟琳癌症中心、梅奥诊所
                                    等世界著名医疗机构深度合作。
                                </div>
                                <div class="mt40 text-14-2em">
                                    签约医师涵盖不同的科室，能让更多患者通过这一平台精准对接到擅长相关疾病的专家，从而节省了
                                    在不同医院门诊排队的时间，并减少患者乱投医而产生的额外费用。
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-center"><img src="http://static.mingyizhudao.com/147203186181710"></div>
                                <div><div class="text-18-color text-center">优质服务</div>
                                    <div class="line-right"><div class="line-background "></div></div></div>
                                <div class="mt20 text-14-2em">
                                    名医主刀与国内多家三甲医院、二甲医院、民营医院合作，基层首诊患者通过名医主刀平台可对接三甲医院医生，在有闲置床位资源的
                                    二甲医院或者民营医院进行手术治疗，缓解三甲医院门诊压力，提高基层医院医疗资源的有效利用。
                                </div>
                                <div class="mt20 text-14-2em">
                                    通过名医主刀，患者不仅可以获得专家细致、专业的诊疗服务，还可以缩短治疗的等候时间。在名医主刀，经过对医疗资源的优化配置，
                                    预约手术时间可以缩短为一个星期，极大程度的避免了因为手术延迟而耽误病情。
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-center"><img src="http://static.mingyizhudao.com/147203186132271"></div>
                                <div><div class="text-18-color text-center">优质操作</div>
                                    <div class="line-right"><div class="line-background "></div></div></div>
                                <div class="mt20 text-14-2em">
                                    患者只需要通过名医主刀的服务平台上传自己的病历资料，名医主刀将邀请三甲医院的专家，对患者的病历进行线下会诊，给出具体的治疗方案。
                                </div>
                                <div class="mt40 text-14-2em">
                                    患者可以根据专家给出的治疗方案，在名医助手的安排下，进行后期的手术治疗。
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
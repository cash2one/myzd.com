<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/operation.min.css?v=" . time());
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/custom/zhitongche.js', CClientScript::POS_END);

$urlFindDoctor = $this->createUrl('doctor/top', array('disease_sub_category' => 1));
$urlFindHopital = $this->createUrl('hospital/department');
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlTerms = $this->createUrl('site/page', array('view' => 'help', 'page' => 'terms'));
$urlGetSmsVerifyCode = $this->createAbsoluteUrl('/auth/sendSmsVerifyCode');
$authActionType = AuthSmsVerify::ACTION_BOOKING;
$urlSubmitForm = $this->createUrl("booking/ajaxQuickbook");
$urlReturn = '';
$this->pageTitle = '手术直通车_各大名医手术在线预约_名医主刀';
$this->htmlMetaKeywords = '手术直通车';
$this->htmlMetaDescription = '手术直通车，是名医主刀为有手术需求的患者提供的一项快速、便捷、高效、安全的服务。旨在帮助广大有手术需求的患者，第一时间预约全国知名专家，安排入院手术。名医主刀';
?>
<div class="container-fluid" id="zhitongche">
    <div class="row">
        <div class="container-fluid" >
            <div class="row ztc-header">     
            </div>
        </div>
        <div class="container main-content">
            <div class="row">
                <div class="col-md-9">
                    <div class="heading"><span class="big-title">真实案例</span><span class="small-title">用仁爱之心</span><span class="small-title">解患者之难</span></div>
                    <div class="row">
                        <div class="col-md-4 mt15 ">
                            <div class="every-story">
                                <div><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146374348524210" /></div>
                                <div class="story-content">
                                    <div class="text14 mt10">疾病名称：脊柱粉碎性骨折脱位</div>
                                    <div class="introduce mt20">2015年12月25日上午为其联系到青大附院的骨科主任、山东省医学会骨科分会脊柱外科学组组长陈柏华。而这仅仅离求助信息发布仅2小时。陈教授雪夜驰援...</div>
                                    <div class="learn-more"><a target="_blank" href="<?php echo $this->createUrl("news/page", array("view" => 'firstaid')); ?>">查看详情></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt15">
                            <div class="every-story">
                                <div><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146374348541839" /></div>
                                <div class="story-content">
                                    <div class="text14 mt10">疾病名称：喉部鳞状细胞癌</div>
                                    <div class="introduce mt20">孟先生手术非常成功，这次郭院长给出的手术方案与孟先生当地医院给出的手术方案完全不同，避免了锯开下颌骨进行手术的高风险，让孟先生的女儿觉得无比欣慰和感激。...</div>
                                    <div class="learn-more"><a target="_blank" href="<?php echo $this->createUrl("news/page", array("view" => 'kangai')); ?>">查看详情></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt15">
                            <div class="every-story">
                                <div><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146374348551782" /></div>
                                <div class="story-content">
                                    <div class="text14 mt10">疾病名称：先天性心脏病</div>
                                    <div class="introduce mt20">韩阿姨尝试了许多方法去医院挂号，每天很早去医院排队，当韩阿姨挂上专家号之后被专家告知需要手术却没有床位的时候，韩阿姨和她家人又一次陷入失望，...</div>
                                    <div class="learn-more"><a target="_blank" href="<?php echo $this->createUrl("news/page", array("view" => 'hanayideganxiexin')); ?>">查看详情></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt15">
                            <div class="every-story">
                                <div><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146374348559378" /></div>
                                <div class="story-content">
                                    <div class="text14 mt10">疾病名称：甲状腺肿瘤</div>
                                    <div class="introduce mt20">
                                        <div>术后，我们的医疗客服去看望她，发现她康复特别快。冯女士拉着医疗客服的手说：</div> 
                                        <div>“如果她早一点联系名医主刀，在来北京看病的过程中，就不会耽搁这么多宝贵的...</div>
                                    </div>
                                    <div class="learn-more"><a target="_blank" href="<?php echo $this->createUrl("news/page", array("view" => 'jiazhuangxian')); ?>">查看详情></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt15">
                            <div class="every-story ">
                                <div><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146374348569164" /></div>
                                <div class="story-content">
                                    <div class="text14 mt10">疾病名称：甲状腺结节</div>
                                    <div class="introduce mt20">
                                        <div>和大部分患者一样，在来到名医主刀之前，患者李女士在看病的过程中并不顺利：被票贩子骗，被不明来历的“专家”骗，苦等床位不得等等。...</div>
                                    </div>
                                    <div class="learn-more"><a target="_blank" href="<?php echo $this->createUrl("news/page", array("view" => 'jiazhuanxianjiejie')); ?>">查看详情></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt15">
                            <div class="every-story">
                                <div><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146578926269576" /></div>
                                <div class="story-content">
                                    <div class="text14 mt10">疾病名称：外层渗出性视网膜病变</div>
                                    <div class="introduce mt20">
                                        <div>来自安徽的小伙子小马，确是一个大大的特例。21岁的年纪，却不幸患上Coats病（外层渗出性视网膜病变），双眼近视屈光不正，突遭这样的疾病，相信大多数人...</div>
                                    </div>
                                    <div class="learn-more"><a target="_blank" href="<?php echo $this->createUrl("news/page", array("view" => 'coats')); ?>">查看详情></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt15">
                            <div class="every-story">
                                <div><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146578926269576" /></div>
                                <div class="story-content">
                                    <div class="text14 mt10">疾病名称：腰椎间盘突出</div>
                                    <div class="introduce mt20">
                                        <div>曹先生的女儿了解到名医主刀平台上签约了全国各个科室的顶尖医生，抱着试一试的心态来到了名医主刀平台，经过了解，北京积水潭医院脊柱外科是全国有名的科室...</div>
                                    </div>
                                    <div class="learn-more"><a target="_blank" href="<?php echo $this->createUrl("news/page", array("view" => 'lumbardisc')); ?>">查看详情></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt15">
                            <div class="every-story">
                                <div><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146578926269576" /></div>
                                <div class="story-content">
                                    <div class="text14 mt10">疾病名称：左膝前交叉韧带断裂</div>        
                                    <div class="introduce mt20">
                                        <div>在刘翔主治医师陈世益教授的治疗下成功完成对小傅的手术治疗，整个手术过程进行接近4个小时，手术非常顺利。小傅的膝盖终于得到了专业的治疗，术后恢复也进行...</div>
                                    </div>
                                    <div class="learn-more"><a target="_blank" href="<?php echo $this->createUrl("news/page", array("view" => 'returnstadium')); ?>">查看详情></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt15">
                            <div class="every-story">
                                <div><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146578926269576" /></div>
                                <div class="story-content">
                                    <div class="text14 mt10">疾病名称：肝母细胞瘤</div>        
                                    <div class="introduce mt20">
                                        <div>在名医主刀和秦红主任的共同努力下，在山东大学齐鲁儿童医院为小圆圆进行了手术，在秦主任的妙手仁心下，手术非常成功。</div>
                                    </div>
                                    <div class="learn-more"><a target="_blank" href="<?php echo $this->createUrl("news/page", array("view" => 'returnstadium')); ?>">查看详情></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt15">
                            <div class="every-story">
                                <div><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/14678554756625 "/></div>
                                <div class="story-content">
                                    <div class="text14 mt10 ">疾病名称：右膝关节前脱位</div>
                                    <div class="introduce mt20">
                                        <div>卢宏章教授是以膝关节置换和运动损伤见长的北大第一医院主任医师，卢教授趁周六的业余休息时间，来到河北保定为胡先生面诊并手术，手术非常成功。...</div>
                                    </div>
                                    <div class="learn-more"><a target="_blank" href="<?php echo $this->createUrl("news/page", array("view" => 'zhizhu')); ?>">查看详情></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ztc-right-area">
                    <div><div class="heading">名医助手说</div></div>
                    <div class="introduction-right" style="line-height:1.8em;">
                        <div>在中国，一年里有很多的患者因等排队等床位延误病情。</div>
                        <div>当越来越多的患者通过我们“名医主刀”的平台来预约专家，我们深知我们责任的重大，因为这些患者都是急需要进行手术，并且多方寻医都没有进展。他们焦虑、无助，甚至在拨打我们400-6277-120电话时抱着最后一丝希望。</div>
                        <div>这些传递健康与爱的经历，让我们更加坚信“名医主刀”我们可以给患者带去更多的希望，不仅可以帮助患者尽快预约到专家，还能大大节省患者等待床位的时间，让患者得到最快的治疗。同时，还降低了患者家属的往返就医的车费和住宿费。</div>
                        <div>做手术就找名医主刀！</div>
                    </div>
                    <div class="mt15 text-center">
                        <a target="_blank" href="<?php echo $this->createUrl("site/page", array("view" => 'mygy')); ?>"><div class="ztc-mygy-img"></div></a>
                    </div>
                    <a href="<?php echo $urlFindDoctor; ?>" target="_black">
                        <div class="ztc-find-expert mt15">
                        </div>
                    </a>
                    <a href="<?php echo $urlFindHopital; ?>" target="_black">
                        <div class="ztc-find-hospital mt15">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
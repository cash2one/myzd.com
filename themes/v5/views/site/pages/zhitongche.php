<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/operation.css");
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/custom/zhitongche.js', CClientScript::POS_END);

$urlDoctorSearch = $this->createUrl('doctor/search', array('disease_category' => 1));
$urlHopitalSearch = $this->createUrl('hospital/search', array('disease_category' => 1));
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
<div class="container-fluid">
    <div class="row">
        <div class="container-fluid" >
            <div class="row ztc-header">     
            </div>
        </div>
        <div class="container">
            <div class="mt30 row">
                <div class="col-sm-8" >
                    <div class="ztc-bg-green" style="height:320px;border-color:#fff;"> 
                        <div class="row color-white" style="padding-top:80px;">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-4" style="margin-left:-20px;">“手术直通车”是名医主刀平台联合各大临床医疗专家，协助患者快捷手术的服务。名医主刀医疗助手将为患者整理资料、联系医生确认病情。</div>
                            <div class="col-sm-4"  style="margin-left:20px;">符合手术直通车要求的患者，医院医生助理将为患者预约好入院日期、排队留床，患者在约好的日期来医院、直接入院。避免反复奔波、长时间院外待床，减少不必要的花费。</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-right" style="padding-left:0;">
                    <img style="" src="<?php echo $urlResImage; ?>zhitongche/liucheng-01.png">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mt30 ztc-bg-green text-center" style="font-size:18px;padding:20px 0;color:#fff;">
                在中国，一年里有很多的患者因等排队等床位延误病情。
            </div>
        </div>
        <div class="container">
            <div class="row mt80">
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-6"><img src="<?php echo $urlResImage; ?>zhitongche/photo1.jpg"></div>
                        <div class="col-sm-6"><img src="<?php echo $urlResImage; ?>zhitongche/photo2.jpg"></div>
                    </div>
                </div>
                <div class="col-sm-5 color-gray-68" >
                    <div class="row">
                        <div class="col-sm-3"><span class="ztc-story-title">事故背景：</span></div>
                        <div class="col-sm-9">山东东营，高速上5环追尾</div>
                    </div>
                    <div class="row mt40">
                        <div class="col-sm-3"><span class="ztc-story-title">事故时间：</span></div>
                        <div class="col-sm-9">2015年11月24日</div>
                    </div>
                    <div class="row mt40">
                        <div class="col-sm-3"><span class="ztc-story-title">术前过程：</span></div>
                        <div class="col-sm-9">从东营区人民医院转入东营胜利油田中心<br/>医院，但医院无法完成该例手术。</div>
                    </div>
                    <div class="row  mt20">
                        <div class="col-sm-3"><span class="ztc-story-title">名医效率：</span></div>
                        <div class="col-sm-9">2015年12月25日上午为其联系到青大附院的骨科主任、山东省医学会骨科分会脊柱外科学组组长陈柏华。而这仅仅离求助信息发布仅2小时。陈教授雪夜驰援，妙手回春，患者转危为安。</div>
                    </div>                 
                    <div class="text-right ztc-detail-one"><a target="_blank" href="<?php echo $this->createUrl("news/page", array("view" => 'firstaid')); ?>">查看详情></a></div>
                </div>
            </div>
            <div class="ztc-divide-gray mt80"></div>
        </div>
        <div class="container">
            <div class="row mt80">
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-5 ztc-story-title ">接洽时间：2015年07月13日</div>
                        <div class="col-sm-7 ztc-story-title">疾病名称：舌部鳞状细胞癌</div>
                        <div class="col-sm-5 mt30 ztc-story-title">入院时间：2015年07月15日</div>
                        <div class="col-sm-7 mt30 ztc-story-title">主刀医生：郭传斌院长（北大口腔医院）</div>
                        <div class="col-sm-5 mt30 ztc-story-title">出院时间：2015年07月29日</div>
                        <div class="col-sm-7 mt30"></div>                                        
                    </div>
                    <div class="mt30 mr30 color-gray-68">我们接到孟先生女儿电话的时候，孟先生癌细胞已经恶化的非常严重了，随时会大规模扩散危急生命。孟先生的这次治疗，我们的帮助下，从预约到入院治疗只用了两天的时间，中间省去很多复杂的流程同时节约大量的宝贵时间。孟先生手术非常成功，这次郭院长给出的手术方案与孟先生当地医院给出的手术方案完全不同，避免了锯开下颌骨进行手术的高风险，让孟先生的女儿觉得无比欣慰和感激。</div>
                        <div class="text-right ztc-detail-two"><a target="_blank" href="<?php echo $this->createUrl("news/page", array("view" => 'kangai')); ?>">查看详情></a></div>
                </div>
                <div class="col-sm-5" style="padding:0;"><img style="margin-left:-15px;" src="<?php echo $urlResImage; ?>zhitongche/photo3.jpg"></div>
            </div>
        </div>
        <div class="container">
            <div class="mt80 ztc-bg-green" style="font-size:18px;color:#fff;padding:20px 30px;">
                当越来越多的患者通过我们“名医主刀”的平台来预约专家，我们深知我们责任的重大，因为这些患者都是急需要进行手术，并且多方寻医都没有进展。他们焦虑、无助，甚至在拨打我们400-119-7900电话时抱着最后一丝希望。
            </div>
        </div>
        <div class="container">
            <div class="row mt80">
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-6"><img src="<?php echo $urlResImage; ?>zhitongche/photo5.jpg"></div>
                        <div class="col-sm-6" style="padding:0"><img style="border:1px solid #c9c9ca;" src="<?php echo $urlResImage; ?>zhitongche/photo4.jpg"></div>
                    </div>
                </div>
                <div class="col-sm-5" style="padding-left:0">
                    <div class="row " style="margin-left:20px;" >
                        <div class="col-sm-6 ztc-story-title " style="padding:0;">接洽时间：2015年07月06日</div>
                        <div class="col-sm-6 ztc-story-title" style="padding-left:0;">疾病名称：舌部鳞状细胞癌</div>
                        <div class="col-sm-6 mt30 ztc-story-title" style="padding:0">入院时间：2015年07月09日</div>
                        <div class="col-sm-6 mt30 ztc-story-title" style="padding-left:0;">主刀医生：王霄芳主任医生<div class="text-right mr10">（北大安贞医院）</div></div>                                                            
                        <div style="padding-left:0;margin-top:150px;padding-right:15px;" class="color-gray-68">韩阿姨开始觉得看病自己到医院挂号最让人放心，自己来到医院找到医生才是最真实的，但是到北京看病没有认识的医生，又不知如何选择医院，病情又急需手术，这让韩阿姨和她的家人陷入了困境。韩阿姨尝试了许多方法去医院挂号，每天很早去医院排队，当韩阿姨挂上专家号之后被专家告知需要手术却没有床位的时候，韩阿姨和她家人又一次陷入失望，直到联系了“名医主刀”...</div>
                    <div class="text-right ztc-detail-three"><a target="_blank" href="<?php echo $this->createUrl("news/page", array("view" => 'hanayideganxiexin')); ?>">查看详情></a></div>
                    </div>                  
                    
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mt80 ztc-bg-green" style="color:#fff;font-size:18px;padding:20px 30px;">
                这些传递健康与爱的经历，让我们更加坚信“名医主刀”我们可以给患者带去更多的希望，不仅可以帮助患者尽快预约到专家，还能大大节省患者等待床位的时间，让患者得到最快的治疗。同事，还降低了患者家属的往返就医的车费和住宿费。
            </div>
        </div>
        <div class="container ">
            <div class="row mt80">
                <div class="col-sm-4">
                    <img src="<?php echo $urlResImage; ?>zhitongche/photo6.jpg">
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-5 ztc-story-title">接洽时间：2015年08月18日</div>
                        <div class="col-sm-7 ztc-story-title">疾病名称：甲状腺肿瘤</div>
                        <div class="col-sm-5 mt30 ztc-story-title">入院时间：2015年08月20日</div>
                        <div class="col-sm-7 mt30 ztc-story-title">主刀医生：刘跃武教授（北京协和医院）</div>                                      
                    </div>  
                    <div class="color-gray-68">
                    <div class="mt50">术后，我们的医疗客服去看望她，发现她康复特别快。</div>
                    <div>冯女士拉着医疗客服的手说：</div>
                    <div>“如果她早一点联系名医主刀，在来北京看病的过程中，就不会耽搁这么多宝贵的时间；不会住这么多天的旅馆花这么多的冤枉钱；也不用整夜排队，疲惫辛苦；更不会挂错号挂不到号。”</div>
                    <div class="text-right ztc-detail-four"><a href="<?php echo $this->createUrl('news/page', array('view' => 'jiazhuangxian')) ?>" target="_blank">查看详情></a></div>
                    </div>
                </div>
            </div>
        </div>     
        <div class="container">
            <div class="mt80">
                <div class="message-content">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="pb15 ztc-divide-gray mt20">
                                <div class="pull-left"><div class="story-img"><img src="<?php echo $urlResImage; ?>zhitongche/icon.png"><div class="color-green-5ebfb7 text-center">匿名用户</div></div></div>
                                <div class="appraise">
                                    <div><div class="">主刀专家：<strong>刘跃武</strong></div></div>
                                    <div class="mt5">确诊疾病：<span class="strong">甲状腺肿瘤</span></div>
                                    <div class="mt30 text14">服务效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                                    <div class="mt10 text14">手术效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>	
                                </div>
                                <div class="clearfix"></div>
                                <div class="message">名医主刀是非常专业、敬业的团队，在知道我病情后三天之内帮我联系到了医院很刘跃武主任。刘主任了解了我的病情后果断决定为我做手术治疗，期间详细的给我解释分析了病情，热情的帮我疏导情绪，我在精神和身体上都得到了很大的帮助，我非常感动。刘主任医术精湛，我的手术很成功，切口也小，缝合得很美观。感谢名医主刀和刘主任，幸运的与你们相遇是我人生这段旅程中不幸中的万幸，谢谢你们。</div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="ztc-divide-gray text-center mt40 pb20">
                                <span><img src="<?php echo $urlResImage; ?>zhitongche/appraise-01.png"></span>
                            </div>
                            <div class="pb15 ztc-divide-gray mt20">
                                <div class="pull-left"><div class="story-img"><img src="<?php echo $urlResImage; ?>zhitongche/icon.png"><div class="color-green-5ebfb7 text-center">匿名用户</div></div></div>
                                <div class="pb15 appraise">
                                    <div><div class="">主刀专家：<strong>王世军</strong></div></div>
                                    <div class="mt5">确诊疾病：<span class="strong">宫颈癌</span></div>
                                    <div class="mt30 text14">服务效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                                    <div class="mt10 text14">手术效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>	

                                </div>
                                <div class="clearfix"></div>
                                <div class="message">我妈妈患宫颈癌，本来准备在外地手术。但我不放心，后来通过平台找到王教授。王教授虽然话语不多，但是感到很朴实，很踏实。精湛的技术更是在病友中间广受好评。后来手术也是非常顺利，宫颈椎切手术后行子宫全切及相关清扫术。现正在康复中。<div>再次感谢王教授，您真是患者的福音。衷心祝愿王教授万事顺遂！幸福健康！</div></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="pb15 ztc-divide-gray mt20">
                                <div class="pull-left"><div class="story-img"><img src="<?php echo $urlResImage; ?>zhitongche/icon.png"><div class="color-green-5ebfb7 text-center">匿名用户</div></div></div>
                                <div class="appraise">
                                    <div><div class="">主刀专家：<strong>姜格宁</strong></div></div>
                                    <div class="mt5">确诊疾病：<span class="strong">肺癌</span></div>
                                    <div class="mt30 text14">服务效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                                    <div class="mt10 text14">手术效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="message">在上海工作，今年体检中发現右下肺有一小空洞结节，医生判断是肺癌。这就像晴天霹雳一样，我怎么都不愿意相信，后来通过平台推荐，前往姜主任处就诊，姜主任最后还是给出结论，说需要手术，并亲自主刀，一切按预定方案，手术后第六天出院回家。住院期间深深感受到：胸外科的手术量太多了，但有条不紊；那几天看到姜主任早上带队查病房，白天至深夜就是忙着开刀，我手术那天，看到姜主任凌晨1点半亲自将最后一台病人送到ICU室我旁边的观察床位，佩服他的精力与体力；这里的医生护士、护工态度都很好，感到温暖，姜主任管理水平高；姜主任的医疗水平就不说了，百度一下就知道。幸运的选择，期待着后续的跟踪检查医疗也能不负众望。</div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mt80 ztc-find-expert">
                <div class="row">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-5 ">
                        <img style="margin-top:20px;" src="<?php echo $urlResImage; ?>zhitongche/red-01.png">
                        <a class="ztc-find-expert-btn btn" href="<?php echo $urlDoctorSearch; ?>" target="_blank">找医生<span class="" style="margin-left:10px;margin-right:-10px;">></a>
                        <div class="text-center color-gray-68" style="margin-left:-60px;">
                            <div>名医主刀签约了三甲医院副主任医生级别以上的顶级专家，</div>
                            <div>他们在各自擅长领域均有丰富的手术经验。</div>
                            <div>让您快速找准医生，不耽误病情。</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mt80 ztc-find-hospital">
                <div class="row">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-6">
                        <img style="margin-top:20px;" src="<?php echo $urlResImage; ?>zhitongche/blue-01.png">
                        <a class="ztc-find-hospital-btn btn" href="<?php echo $urlHopitalSearch; ?>" target="_blank">找医院<span style="margin-left:10px;margin-right:-10px;">></span></a>
                        <div class="text-center color-gray-68" style="margin-left:-150px;">
                            <div>名医主刀为您精选出在综合及专科领域最强的医院，您只需预约目标医院的科室，</div>
                            <div>名医助手会尽快与您确认，并根据您的具体病情推荐该科室里最合适的主刀医生，</div>
                            <div>免除您搜寻和预约医生的烦恼。</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container mb50">
            <div class="text-center mt80">
                <div style="font-size:18px;color:#5db5b5;">一键预约，填写您的病情，名医为您推荐最适合您的专家。<a data-toggle="modal" data-target="#qucikbookingModal" class="btn ztc-booking-btn" style="color:#fff;letter-spacing:5px;background-color:#f8b62c;font-size:16px;height:60px;width:195px;border-radius: 6px;line-height:45px;text-align: center;">立即预约</a></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#btn-sendZhiTongCheSmsCode").click(function (e) {
            e.preventDefault();
            sendZhiTongCheSmsVerifyCode($(this));
        });
    });

    function sendZhiTongCheSmsVerifyCode(domBtn) {
        var domMobile = $(".booking-mobile");
        var mobile = domMobile.val();
        if (mobile.length === 0) {
            $("#booking_mobile-error").remove();
            $(".booking-mobile").after('<div id="booking_mobile-error" class="error">请输入手机号码</div>');
        } else if (domMobile.hasClass("error")) {
            // mobile input field as error, so do nothing.
        } else {
            buttonTimerStart(domBtn, 60000);
            $domForm = $("#quickbook-form");
            var actionUrl = $domForm.find("input[name='smsverify[actionUrl]']").val();
            var actionType = $domForm.find("input[name='smsverify[actionType]']").val();
            var formData = new FormData();
            formData.append("AuthSmsVerify[mobile]", mobile);
            formData.append("AuthSmsVerify[actionType]", actionType);
            $.ajax({
                type: 'post',
                url: actionUrl,
                data: formData,
                dataType: "json",
                processData: false,
                contentType: false,
                'success': function (data) {
                    if (data.status === true) {
                        //domForm[0].reset();
                    }
                    else {
                        console.log(data);
                    }
                },
                'error': function (data) {
                    console.log(data);
                },
                'complete': function () {
                }
            });
        }
    }
</script>
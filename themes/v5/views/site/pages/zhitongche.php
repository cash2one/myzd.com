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
                <div class="col-sm-offset-4 mt50">		
                    <div class="ml-50">
                        <div class="color-green ztc-title-lg">手术直通车</div>
                        <div class="ztc-title-text">“手术直通车”是名医主刀平台联合各大临床医疗专家，协助患者快捷手术的服务。名医主刀医疗助手将为患者整理资料、联系医生确认病情。符合手术直通车要求的患者，医院医生助理将为患者预约好入院日期、排队留床，患者在约好的日期来医院、直接入院。避免反复奔波、长时间院外待床，减少不必要的花费。</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class=""><img class="mt20 mb20 img-responsive" src="<?php echo $urlResImage; ?>zhitongche/liuCheng.png"></div>
            <div class="row">
                <div class="col-md-8 col-sm-12 pr0">
                    <div class="ztc-main-content">
                        <div class="row mb50">
                            <div class="col-sm-4">
                                <div class="ztc-content-img"><img src="<?php echo $urlResImage; ?>zhitongche/doctor.png"></div>
                                <div class="mt10 content-title">快速匹配名医</div>
                                <div>急需手术、约不到名医？</div>
                                <div>名医主刀为您快速匹配最佳主刀医生，并提供治疗方案。</div>
                            </div>
                            <div class="col-sm-4">
                                <div class="ztc-content-img"><img src="<?php echo $urlResImage; ?>zhitongche/seat.png"></div>
                                <div class="mt10 content-title">快速预约床位</div>
                                <div>床位紧张、排队耽误病情？</div>
                                <div>名医主刀为您快速安排闲置手术床位，让您手术不再难。</div>
                            </div>
                            <div class="col-sm-4">
                                <div class="ztc-content-img"><img src="<?php echo $urlResImage; ?>zhitongche/car.png"></div>
                                <div class="mt10 content-title">邀请专家会诊</div>
                                <div>病人行动不便，想在当地手术？</div>
                                <div>名医主刀为您邀请全国名医前来会诊，让您在当地也能享受到顶尖名医服务。</div>
                            </div>
                        </div>
                        <div class="row mt50">
                            <div class="col-md-7 line2-5em">名医主刀签约了三甲医院副主任医生级别以上的顶级专家，
                                他们在各自擅长领域均有丰富的手术经验。<br/>
                                让您快速找准医生，不耽误病情。</div>
                            <div class="col-md-3 col-sm-offset-1">
                                <a href="<?php echo $urlDoctorSearch; ?>" target="_blank">
                                    <div class="bg-yellow-f8b62c text-center color-white pt10 mt10 search-button">查看医生&nbsp;>
                                        <div>
                                            <img src="<?php echo $urlResImage; ?>zhitongche/icon-doctor.png">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt50">
                            <div class="col-md-7 line2-5em">名医主刀为您精选出在综合及专科领域最强的医院，
                                您只需预约目标医院的科室，名医助手会尽快与您确认，
                                并根据您的具体病情推荐该科室里最合适的主刀医生，
                                免除您搜寻和预约医生的烦恼。</div>
                            <div class="col-md-3 col-sm-offset-1">
                                <a href="<?php echo $urlHopitalSearch; ?>" target="_blank">
                                    <div class="bg-yellow-f8b62c text-center color-white pt10 mt10 search-button">查看医院&nbsp;><div class="mt5"><img src="<?php echo $urlResImage; ?>zhitongche/icon-hospital.png"></div></div>
                                </a>
                            </div>
                        </div>
                        <div class="color-red-e50044 ml-7 text12">*排名依照复旦版最新《中国最佳医院综合排行榜》和《中国医院最佳专科声誉排行榜》</div>
                    </div>

                    <div class="ztc-answers-content mt20">
                        <div class="divide-dashed-green">
                            <span class="answers-title">常见问题&nbsp;</span>
                            <div class="clearfix mt5"></div>
                        </div>
                        <div class="line-height34">
                            <div><strong>1.手术直通车为什么是收费服务？</strong></div>
                            <div>手术直通车需要名医主刀指派专业人员，一对一协助患者分析、整理资料并联系医生，协调医患双方并安排就诊时间，工作人员需要付出大量工作时间和精力。</div>
                            <div><strong>2.手术预约金包括哪些？</strong></div>
                            <div class="color-red-ff0000">手术预约金包括术前专家咨询费、第一次面诊费（如有需要，安排门诊）和手术相关安排费用。</div>
                            <div><strong>3.预约金与医院、医生有关吗？</strong></div>
                            <div>此预约金是名医主刀为了提供专业服务、保证服务质量而收取的，并非医院和医生收取的，医院和医生也不会在此服务中获得任何商业利益。</div>
                            <div class="color-red-ff0000"><strong>4.预约金是否退还？</strong></div>
                            <div><span class="color-red-ff0000">以下2种情况下退还一半预约金：</span><br/>①在所有专家诊断后都认为该患者不具备手术条件/手术风险过大/达不到病人期望而不接受手术时，退还一半预约金。<br/>
                                ②对于主刀医生确认需要手术后，若平台没有能在一周内安排到合适床位，退还一半预约金。
                                在与患者确认取消服务后的48小时内，将500元退还到患者支付预约金的账户里。<br/><span class="color-red-ff0000">以下这种情况将全额退款：</span><br/>平台无法对接到患者所指定的专家，而患者又不接受名医助手推荐的其他名医，则在与患者确认取消服务后的48小时内，将全部预约金退至患者支付的账户里。</div>
                            <div><strong>5.如果没有在48小时内得到平台回复，怎么办？</strong></div>
                            <div>名医助手收到预约单后，首先会在第一时间联系患者，确认就诊意向和提交的影像资料，然后开始联系专家，将会在48小时内给予医生的初步反馈。<span class="color-red-ff0000">如果没有能在48时内给予任何回复，您可以申请退款。</span></div>
                            <div><strong>6. 手术可以指定医生吗？</strong></div>
                            <div>名医助手会为每一个患者安排最合适的医生，患者无需指定手术医生。如果有指定需求，可以在预约单里填写或者助手电话回访时提出。</div>
                            <div><strong>7.是否一定可以预约到指定医生？</strong></div>
                            <div>名医助手会优先满足患者的指定需求，但因为医生时间安排等特殊性，不保证一定可以预约成功。在这种情况下， 名医主刀会根据患者疾病情况匹配三甲医院副主任级别以上的名医主刀就诊。</div>
                            <div><strong>8.手术保证治疗效果吗？</strong></div>
                            <div>因医疗行为的特殊性，患者病情差异巨大，任何人（包括医生、名医主刀）都不能绝对性地对治疗方案、疗效、医疗意外、住院天数做出承诺。</div>
                            <div><strong>9.患者是否能比别人更快入院？</strong></div>
                            <div>名医主刀会全力帮助需要手术的患者尽快入院，但所有患者也都需要遵守医院规则和安排，听从专家的具体安排。</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="text-center booking-header zhitongcheBookingBtn">
                        <a data-toggle="modal" data-target="#qucikbookingModal">
                            <div class="color-white booking-title"><img src="<?php echo $urlResImage; ?>general/booking.png"><span class="ml10">快速预约</span></div>
                        </a>
                    </div>
                    <!--                    <div class="booking-form">
                                            <div class="form-wrapper">
                                                <form enctype="multipart/form-data" data-url-return="<?php echo $urlReturn; ?>" id="zhitongche-form" action="<?php echo $urlSubmitForm; ?>" method="post">
                                                    <input type="hidden" value="<?php echo $urlGetSmsVerifyCode; ?>" name="smsverify[actionUrl]" id="smsverify_actionUrl">
                                                    <input type="hidden" value="<?php echo $authActionType; ?>" name="smsverify[actionType]" id="smsverify_actionType">
                                                    <div class="form-group">
                                                        <label for="" class="padright0 col-sm-3 col-md-3 control-label pr0 mt5">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名:</label>
                                                        <div class="col-sm-9 controls">
                                                            <input name="booking[contact_name]" placeholder="请填写患者的真实姓名" class="form-control" maxlength="50" id="booking_contact_name" type="text">                                </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="padright0 col-sm-3 col-md-3 control-label pr0 mt5">手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机:</label>
                                                        <div class="col-sm-9 controls">
                                                            <input name="booking[mobile]" placeholder="请输入手机号" class="form-control booking-mobile" maxlength="11" id="booking_mobile" type="text">                     
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="padright0 col-sm-3 col-md-3 control-label pr0 mt5">验证码:</label>
                                                        <div class="col-sm-9 controls">
                                                            <div class="input-group">
                                                                <input name="booking[verify_code]" placeholder="请输入验证码" class="form-control" maxlength="6" id="booking_verify_code" type="text">                                        
                                                                <div id="btn-sendZhiTongCheSmsCode" class="btn input-group-addon  btn-verifycode">获取验证码</div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="padright0 col-sm-3 col-md-3 control-label pr0 mt5">疾病诊断:</label>
                                                        <div class="col-sm-9 controls">            
                                                            <input name="booking[disease_name]" placeholder="请填写确诊疾病" class="form-control" maxlength="50" id="booking_disease_name" type="text">                
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="padright0 col-sm-3 control-label pr0 mt5">病情描述:</label>
                                                        <div class="col-sm-9 controls">   
                                                            <textarea name="booking[disease_detail]" placeholder="为了让专家对您的病情有更好的初判，请您尽量详细填写（至少10个字）。" class="form-control" maxlength="1000" rows="3" id="booking_disease_detail"></textarea>                              
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="padright0 col-sm-3 col-md-3 control-label pr0 mt5">就诊专家:</label>
                                                        <div class="col-sm-9 controls">
                                                            <input name="booking[doctor_name]" placeholder="可不填，名义助手会为您匹配" class="form-control" maxlength="50" id="booking_doctor_name" type="text">                                </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="padright0 col-sm-3 col-md-3 control-label pr0 mt5">就诊专家:</label>
                                                        <div class="col-sm-9 controls">
                                                            <input name="booking[hospital_name]" placeholder="可不填，名义助手会为您匹配" class="form-control" maxlength="50" id="booking_hospital_name" type="text">                                </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="form-group mt30">
                                                        <div class="col-sm-offset-1 col-sm-11 controls">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input name="booking[terms]" type="checkbox" checked="checked">我已同意《<a href="<?php echo $urlTerms; ?>" target="_blank">名医主刀在线用户协议</a>》
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-6 col-sm-offset-3">
                                                            <button id="btnZhiTongCheSubmit" type="button" class="btn btn-lg btn-yes btn-block" name="">提&nbsp;交</button>       
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>-->
                    <div class="mt20 story-content">
                        <div class="divide-dashed-green">
                            <span class="answers-title">患者故事&nbsp;</span>
                            <div class="clearfix mt5"></div>
                        </div>
                        <div class="mt30">
                            <div class="mt10 pull-left story-img"><img src="<?php echo $urlResImage; ?>zhitongche/photo-1.png"></div>
                            <div class="pt10 pl90">
                                <div class="story-content-title">韩阿姨的一封感谢...</div>
                                <div class="text12">韩阿姨家住河南，今年6月份和家人来北京看病。韩阿姨开始觉得看病自己到医院挂号最让人放...<a target="_blank" href="<?php echo $this->createUrl("news/page", array("view" => 'hanayideganxiexin')); ?>" class="color-red-ff0000">详情></a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="mt30">
                            <div class="mt10 pull-left story-img"><img src="<?php echo $urlResImage; ?>zhitongche/photo-2.png"></div>
                            <div class="pt10 pl90">
                                <div class="story-content-title">父亲两次抗癌,只为...</div>
                                <div class="text12">我们接到孟先生女儿电话的时候，孟先生癌细胞已经恶化的非常严重了，随时会大规模扩散危急...<a target="_blank" href="<?php echo $this->createUrl("news/page", array("view" => 'kangai')); ?>" class="color-red-ff0000">详情></a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="mt30">
                            <div class="mt10 pull-left story-img"><img src="<?php echo $urlResImage; ?>zhitongche/photo-3.png"></div>
                            <div class="pt10 pl90">
                                <div class="story-content-title">年轻妈妈的生命倒...</div>
                                <div class="text12">在大家准备和亲人团聚欢度十一长假的时候，有一个家庭却在承受亲人命悬一线的折磨。36岁...<a target="_blank" href="<?php echo $this->createUrl("news/page", array("view" => 'mamajixufeiyuan')); ?>" class="color-red-ff0000">详情></a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="mt20 message-content text12">
                        <div class="divide-dashed-green">
                            <span class="answers-title">患者留言&nbsp;</span>
                            <div class="clearfix mt5"></div>
                        </div>
                        <div class="pb20 divide-dashed68">
                            <div class="pull-left mt20"><div class="story-img"><img src="<?php echo $urlResImage; ?>zhitongche/photo-icon.png"><div class="color-green-5ebfb7">匿名用户</div></div></div>
                            <div class="pt20 appraise">
                                <div><div class="">主刀专家：<strong>刘跃武</strong></div></div>
                                <div class="mt5">确诊疾病：<span class="strong">甲状腺肿瘤</span></div>
                                <div class="mt10 text14">服务效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                                <div class="mt10 text14">手术效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>	
                            </div>
                            <div class="clearfix"></div>
                            <div class="mt20 message">名医主刀是非常专业、敬业的团队，在知道我病情后三天之内帮我联系到了医院很刘跃武主任。刘主任了解了我的病情后果断决定为我做手术治疗，期间详细的给我解释分析了病情，热情的帮我疏导情绪，我在精神和身体上都得到了很大的帮助，我非常感动。刘主任医术精湛，我的手术很成功，切口也小，缝合得很美观。感谢名医主刀和刘主任，幸运的与你们相遇是我人生这段旅程中不幸中的万幸，谢谢你们。</div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="pb20 divide-dashed68">
                            <div class="pull-left mt20"><div class="story-img"><img src="<?php echo $urlResImage; ?>zhitongche/photo-icon.png"><div class="color-green-5ebfb7">匿名用户</div></div></div>
                            <div class="pt20 appraise">
                                <div><div class="">主刀专家：<strong>王世军</strong></div></div>
                                <div class="mt5">确诊疾病：<span class="strong">宫颈癌</span></div>
                                <div class="mt10 text14">服务效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                                <div class="mt10 text14">手术效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>	

                            </div>
                            <div class="clearfix"></div>
                            <div class="mt20 message">我妈妈患宫颈癌，本来准备在外地手术。但我不放心，后来通过平台找到王教授。王教授虽然话语不多，但是感到很朴实，很踏实。精湛的技术更是在病友中间广受好评。后来手术也是非常顺利，宫颈椎切手术后行子宫全切及相关清扫术。现正在康复中。<div>再次感谢王教授，您真是患者的福音。衷心祝愿王教授万事顺遂！幸福健康！</div></div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="pb20 divide-dashed68">
                            <div class="pull-left mt20"><div class="story-img"><img src="<?php echo $urlResImage; ?>zhitongche/photo-icon.png"><div class="color-green-5ebfb7">匿名用户</div></div></div>
                            <div class="pt20 appraise">
                                <div><div class="">主刀专家：<strong>姜格宁</strong></div></div>
                                <div class="mt5">确诊疾病：<span class="strong">肺癌</span></div>
                                <div class="mt10 text14">服务效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                                <div class="mt10 text14">手术效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="mt20 message">在上海工作，今年体检中发現右下肺有一小空洞结节，医生判断是肺癌。这就像晴天霹雳一样，我怎么都不愿意相信，后来通过平台推荐，前往姜主任处就诊，姜主任最后还是给出结论，说需要手术，并亲自主刀，一切按预定方案，手术后第六天出院回家。住院期间深深感受到：胸外科的手术量太多了，但有条不紊；那几天看到姜主任早上带队查病房，白天至深夜就是忙着开刀，我手术那天，看到姜主任凌晨1点半亲自将最后一台病人送到ICU室我旁边的观察床位，佩服他的精力与体力；这里的医生护士、护工态度都很好，感到温暖，姜主任管理水平高；姜主任的医疗水平就不说了，百度一下就知道。幸运的选择，期待着后续的跟踪检查医疗也能不负众望。</div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="pb20">
                            <div class="pull-left mt20"><div class="story-img"><img src="<?php echo $urlResImage; ?>zhitongche/photo-icon.png"><div class="color-green-5ebfb7">匿名用户</div></div></div>
                            <div class="pt20 appraise">
                                <div><div class="">主刀专家：<strong>郑景浩</strong></div></div>
                                <div class="mt5">确诊疾病：<span class="strong">先天性心脏病</span></div>
                                <div class="mt10 text14">服务效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                                <div class="mt10 text14">手术效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="mt20 message">
                                <div>我是一名河南患者，今天我怀着感恩的心情感谢您医德高尚，医术精湛的好医生—心胸外科主任医师郑医生。</div>
                                <div>宝宝的出生给家里带来了很大的欢喜，可是欢喜之后是无尽的恐慌，因为刚出生不久的宝宝被查出有先天性心脏病，无情的病魔让我们每一位亲人都不能接受！</div>
                                <div>这是一个陌生而又恐怖的名字，它离我们那么遥远，我们一直都相信这是只有在电视剧里才会发生的事情，对病情的无知让我们失去方向，我们多希望有人告诉我们这是个误诊！后来在平台推荐下去了上海儿童医学中心，也就是您在的医院，是您郑医生专业的病情分析个医疗计划给我们吃了定心丸，事实证明了您的医术高明手术很成功，我家宝宝渐渐好起来了！</div>
                                <div>郑医生用无私的爱心和高尚的医德为我家宝宝解除疼苦，您的一言一行诠释着当代医生的职责操守和医道本色。</div>
                                <div>感谢您郑医生！</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
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
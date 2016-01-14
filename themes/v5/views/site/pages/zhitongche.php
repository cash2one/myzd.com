<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/operation.css");
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$this->pageTitle = '手术直通车_各大名医手术在线预约_名医主刀';
$this->htmlMetaKeywords = '手术直通车';
$this->htmlMetaDescription = '手术直通车，是名医主刀为有手术需求的患者提供的一项快速、便捷、高效、安全的服务。旨在帮助广大有手术需求的患者，第一时间预约全国知名专家，安排入院手术。名医主刀';
$urlLoadallEteamsByCity = $this->createUrl('api/expertteam'); // append city.id behind.
$urlExpertteamIndex = $this->createUrl('expertteam/index');
?>
<div class="container-fluid">
    <div class="row">
        <div class="container-fluid" >
            <div class="row ztc-header">
                <div class="col-sm-offset-4 mt50">		
                    <div class="color-green ztc-title-lg">手术直通车</div>
                    <div class="ztc-title-text">“手术直通车”是名医主刀平台联合各大临床医疗专家，协助患者快捷手术的服务。名医主刀医疗助手将为患者整理资料、联系医生确认病情。符合手术直通车要求的患者，医院医生助理将为患者预约好入院日期、排队留床，患者在约好的日期来医院、直接入院。避免反复奔波、长时间院外待床，减少不必要的花费。</div>
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
                                <div class="mt10 content-title">快速匹配名医</div>
                                <div>急需？</div>
                                <div>名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀</div>
                            </div>
                            <div class="col-sm-4">
                                <div class="ztc-content-img"><img src="<?php echo $urlResImage; ?>zhitongche/car.png"></div>
                                <div class="mt10 content-title">快速匹配名医</div>
                                <div>急需？</div>
                                <div>名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀</div>
                            </div>
                        </div>
                        <div class="row mt50">
                            <div class="col-md-7 line2-5em">名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀</div>
                            <div class="col-md-3"><div class="bg-green text-center color-white pt10 mt10 search-button">查看医生&nbsp;><div class="mt5"><img src="<?php echo $urlResImage; ?>zhitongche/icon-doctor.png"></div></div></div>
                        </div>
                        <div class="row mt50">
                            <div class="col-md-7 line2-5em">名医主刀名医主刀名医主刀名医主刀名医名医主刀名医主刀名医主刀名医主刀主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀</div>
                            <div class="col-md-3"><div class="bg-green text-center color-white pt10 mt10 search-button">查看医院&nbsp;><div class="mt5"><img src="<?php echo $urlResImage; ?>zhitongche/icon-hospital.png"></div></div></div>
                        </div>
                    </div>
                    <div class="ztc-answers-content mt20">
                        <div class="divide-dashed-green">
                            <span class="answers-title">常见问题&nbsp;|</span>
                            <span class="pull-right color-black pt5">查看更多&nbsp;></span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="mt10"><strong>1.手术直通车为什么是收费服务？</strong></div>
                        <div class="mt10 line-height2-5em">手术直通车需要名医主刀指派专业人员，一对一协助患者分析、整理资料并联系医生，协调医患双方并安排就诊时间，工作人员需要付出大量工作时间和精力。</div>
                        <div class="mt10"><strong>2.手术预约金包括哪些？</strong></div>
                        <div class="mt10 line-height2-5em color-red">手术预约金包括术前专家咨询费、第一次面诊费（如有需要，安排门诊）和手术相关安排费用。</div>
                        <div class="mt10"><strong>3.预约金与医院、医生有关吗？</strong></div>
                        <div class="mt10 line-height2-5em">此预约金是名医主刀为了提供专业服务、保证服务质量而收取的，并非医院和医生收取的，医院和医生也不会在此服务中获得任何商业利益。</div>
                        <div class="mt10 color-red"><strong>4.预约金是否退还？</strong></div>
                        <div class="mt10 line-height2-5em "><span class="color-red">以下2种情况下退还一半预约金：</span><br/>①在所有专家诊断后都认为该患者不具备手术条件/手术风险过大/达不到病人期望而不接受手术时，退还一半预约金。<br/>
                            ②对于主刀医生确认需要手术后，若平台没有能在一周内安排到合适床位，退还一半预约金。
                            在与患者确认取消服务后的48小时内，将500元退还到患者支付预约金的账户里。<br/><span class="color-red">以下这种情况将全额退款：</span><br/>平台无法对接到患者所指定的专家，而患者又不接受名医助手推荐的其他名医，则在与患者确认取消服务后的48小时内，将全部预约金退至患者支付的账户里。</div>
                        <div class="mt10"><strong>5.如果没有在48小时内得到平台回复，怎么办？</strong></div>
                        <div class="mt10 line-height2-5em">名医助手收到预约单后，首先会在第一时间联系患者，确认就诊意向和提交的影像资料，然后开始联系专家，将会在48小时内给予医生的初步反馈。<span class="color-red">如果没有能在48时内给予任何回复，您可以申请退款。</span></div>
                        <div class="mt10"><strong>6. 手术可以指定医生吗？</strong></div>
                        <div class="mt10 line-height2-5em">名医助手会为每一个患者安排最合适的医生，患者无需指定手术医生。如果有指定需求，可以在预约单里填写或者助手电话回访时提出。</div>
                        <div class="mt10"><strong>7.是否一定可以预约到指定医生？</strong></div>
                        <div class="mt10 line-height2-5em">名医助手会优先满足患者的指定需求，但因为医生时间安排等特殊性，不保证一定可以预约成功。在这种情况下， 名医主刀会根据患者疾病情况匹配三甲医院副主任级别以上的名医主刀就诊。</div>
                        <div class="mt10"><strong>8.手术保证治疗效果吗？</strong></div>
                        <div class="mt10 line-height2-5em">因医疗行为的特殊性，患者病情差异巨大，任何人（包括医生、名医主刀）都不能绝对性地对治疗方案、疗效、医疗意外、住院天数做出承诺。</div>
                        <div class="mt10"><strong>9.患者是否能比别人更快入院？</strong></div>
                        <div class="mt10 line-height2-5em mb20">名医主刀会全力帮助需要手术的患者尽快入院，但所有患者也都需要遵守医院规则和安排，听从专家的具体安排。</div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="text-center booking-header">
                        <div class="color-white booking-title">快速预约</div>
                    </div>
                    <div class="booking-form">
                        <form class="form-horizontal">
                            <div class="form-group mt10">
                                <label class="col-sm-3 control-label">姓名:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="请填写患者姓名">
                                </div>
                            </div>
                            <div class="form-group mt30">
                                <label class="col-sm-3 control-label">手机号码:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="123********">
                                </div>
                            </div>
                            <div class="form-group mt30">
                                <label class="col-sm-3 control-label">验证码:</label>
                                <div class="col-sm-6 pr0">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-sm-3 pl0"><button class="btn btn-verifycode pull-right" >获&nbsp;取</button><div class="clearfix"></div></div>
                            </div>
                            <div class="form-group mt30">
                                <label class="col-sm-3 control-label">确诊疾病:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="请填写确认疾病名称">
                                </div>
                            </div>
                            <div class="form-group mt30">
                                <label class="col-sm-3 control-label">疾病描述:</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="4" placeholder="为了让专家对您的病情有更好的初判，请您尽量详细填写（至少10个字）。"></textarea>
                                </div>
                            </div>
                            <div class="form-group mt30">
                                <label class="col-sm-3 control-label">就诊专家:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="可不填，名义助手会为您匹配">
                                </div>
                            </div>
                            <div class="form-group mt30">
                                <label class="col-sm-3 control-label">就诊医院:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="可不填，名义助手会为您匹配">
                                </div>
                            </div>
                            <div class="form-group mt50">
                                <div class="col-sm-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> 我已同意《名医主刀在线用户协议》
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button id="btnSubmit" type="button" class="btn btn-lg btn-yes btn-block w100" name="">提&nbsp;交</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="mt20 story-content">
                        <div class="divide-dashed-green">
                            <span class="story-title">患者故事</span>
                        </div>
                        <div class="mt30">
                            <div class="mt10 pull-left story-img"><img src="<?php echo $urlResImage; ?>zhitongche/photo-1.png"></div>
                            <div class="pt10 pl90">
                                <div class="story-content-title">韩阿姨的一封感谢...</div>
                                <div>韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨...<span class="color-red">详情></span></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="mt30">
                            <div class="mt10 pull-left story-img"><img src="<?php echo $urlResImage; ?>zhitongche/photo-1.png"></div>
                            <div class="pt10 pl90">
                                <div class="story-content-title">韩阿姨的一封感谢...</div>
                                <div>韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨...<span class="color-red">详情></span></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="mt30">
                            <div class="mt10 pull-left story-img"><img src="<?php echo $urlResImage; ?>zhitongche/photo-1.png"></div>
                            <div class="pt10 pl90">
                                <div class="story-content-title">韩阿姨的一封感谢...</div>
                                <div>韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨韩阿姨...<span class="color-red">详情></span></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="mt20 message-content">
                        <div class="divide-dashed-green">
                            <span class="message-title">患者留言&nbsp;|</span>
                        </div>
                        <div class="pb20 divide-dashed-green">
                            <div class="pull-left mt20"><div class="story-img"><img src="<?php echo $urlResImage; ?>zhitongche/photo-icon.png"><div class="color-green">匿名123</div></div></div>
                            <div class="pt20 appraise">
                                <div><div class="text-overflow">主刀专家：<strong>戴永明</strong>|确诊疾病：<strong>先...</strong></div></div>
                                <div class="mt10">服务效果：*</div>
                                <div class="mt10">手术效果：*</div>	
                            </div>
                            <div class="clearfix"></div>
                            <div class="mt20">感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢</div>
                            <div class="pull-right">2015年12月12日</div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="pb20 divide-dashed-green">
                            <div class="pull-left mt20"><div class="story-img"><img src="<?php echo $urlResImage; ?>zhitongche/photo-icon.png"><div class="color-green">匿名123</div></div></div>
                            <div class="pt20 appraise">
                                <div><div class="text-overflow">主刀专家：<strong>戴永明</strong>|确诊疾病：<strong>先...</strong></div></div>
                                <div class="mt10">服务效果：*</div>
                                <div class="mt10">手术效果：*</div>	

                            </div>
                            <div class="clearfix"></div>
                            <div class="mt20">感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢</div>
                            <div class="pull-right">2015年12月12日</div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="pb20">
                            <div class="pull-left mt20"><div class="story-img"><img src="<?php echo $urlResImage; ?>zhitongche/photo-icon.png"><div class="color-green">匿名123</div></div></div>
                            <div class="pt20 appraise">
                                <div><div class="text-overflow">主刀专家：<strong>戴永明</strong>|确诊疾病：<strong>先...</strong></div></div>
                                <div class="mt10">服务效果：<i class="fa fa-star" style="color:red;"></i><i class="fa fa-star" style="color:red;"></i><i class="fa fa-star" style="color:red;"></i><i class="fa fa-star" style="color:red;"></i><i class="fa fa-star" style="color:red;"></i></div>
                                <div class="mt10">手术效果：*</div>	

                            </div>
                            <div class="clearfix"></div>
                            <div class="mt20">感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢感谢</div>
                            <div class="pull-right">2015年12月12日</div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="color-green text-center mt20 mb20">加载更多</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        ajaxGetExperttteamByCity();
    });
    function ajaxGetExperttteamByCity() {
        var urlLoadEteam = "<?php echo $urlLoadallEteamsByCity; ?>";
        // show loading gif.
        $(".eteamlist .loading").show();
        $.ajax({
            url: urlLoadEteam,
            async: false,
            success: function (data) {
                $eteams = data.expertTeams;
                setE_list($eteams);
            },
            complete: function () {
                // hide loading gif.
                $(".eteamlist .loading").hide();
            }
        });

    }
    function setE_list($eteams) {
        var innerHtml = '';
        var count = 3;
        if ($eteams) {
            var eteamsCount = $eteams.length - 1;
            for (var i = eteamsCount; i > eteamsCount - count; i--) {
                var $eteam = $eteams[i];
                var aTitle = $eteam.teamLeader.aTitle == '无' ? '' : $eteam.teamLeader.aTitle;
                if ($eteam.id != 13) {
                    innerHtml = innerHtml +
                            '<div class="col-sm-6 col-md-4 rec-expert"><div class="expert"><a target="_blank" href="' +
                            $eteam.teamPageUrl + '"><div><img class="img100" src="' +
                            $eteam.teamLeader.imageUrl + '" alt=""/></div><div class="clearfix"><div class="expert-name inline-block pull-left">' +
                            $eteam.teamLeader.name + '</div><div class="expert-title inline-block pull-right">' +
                            $eteam.teamLeader.mTitle + '&nbsp;&nbsp;' +
                            aTitle
                            + '</div></div>' +
                            //'<div  class="expert-slogan"><span>' +$eteam.slogan + '</span></div>'+
                            '<div class="expert-hospital">' +
                            $eteam.teamLeader.hospital + '</div>' +
                            '<div class="bg-line"><div class="honor-header inline-block"></div></div>' +
                            '<div class="honor">' +
                            setDisTags($eteam.disTags) + '</div></div></a></div>';
                }

            }
        }
        $('.elist').html(innerHtml);
    }
    //setDisTags
    function setDisTags(disTags) {
        var disHtml = "";
        if (disTags !== null && disTags.length > 0) {
            var dislimit = disTags.length;//> 3 ? 3 : disTags.length;
            for (var i = 0; i < dislimit; i++) {
                var punctuation = i == dislimit - 1 ? '。' : '、';
                disHtml += disTags[i] + punctuation;
            }
        } else {
            disHtml += "暂无信息";
        }
        if (disHtml.length > 80) {
            disHtml = disHtml.substr(0, 80) + '...';
        }
        return disHtml;
    }
    //setHonor
    function setHonor($honors) {
        var $honorUl = "<ul>";
        if ($honors !== null && $honors.length > 0) {
            var $honorlimit = $honors.length > 3 ? 3 : $honors.length;
            for (var i = 0; i < $honorlimit; i++) {
                $honorUl += '<li data-toggle="tooltip" data-placement="bottom" title="' + $honors[i] + '">' + $honors[i] + '</li>';
            }
        } else {
            $honorUl += "<li>暂无荣誉介绍</li>";
        }
        $honorUl += "</ul>";
        return $honorUl;
    }
</script>
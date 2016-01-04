<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/operation.css");
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$this->pageTitle = '手术直通车_各大名医手术在线预约_名医主刀';
$this->htmlMetaKeywords = '手术直通车';
$this->htmlMetaDescription = '手术直通车，是名医主刀为有手术需求的患者提供的一项快速、便捷、高效、安全的服务。旨在帮助广大有手术需求的患者，第一时间预约全国知名专家，安排入院手术。名医主刀';
$urlLoadallEteamsByCity = $this->createUrl('api/expertteam'); // append city.id behind.
$urlExpertteamIndex = $this->createUrl('expertteam/index');
?>
<section id="body">
    <div class="container bg-gray pt50" >
        <div class="row">
            <div class="col-sm-1 border-line"></div>
            <div class="col-sm-7 col-md-5 title">
                <div class="title-padding"><div class="strong title-text-a">什么是<span class="title-text-b">手术直通车</span></div>
                    <div class="title-sm">做手术就找名医主刀</div></div>
            </div>
            <div class="col-sm-4 col-md-6 border-line"></div>
        </div>
        <div class="row pl50">
            <div class="col-sm-offset-1 col-sm-10 pl30">
                <p class="main-text">“手术直通车”是名医主刀平台联合各大临床医疗专家，协助患者快捷手术的服务。名医主刀医疗助手将为患者整理资料、联系医生确认病情。符合手术直通车要求的患者，医院医生助理将为患者预约好入院日期、排队留床，患者在约好的日期来医院、直接入院。避免反复奔波、长时间院外待床，减少不必要的花费。</p>

            </div>
        </div>
    </div>

    <div class="container bg-gray pt50" >
        <div class="row">
            <div class="col-sm-1 border-line"></div>
            <div class="col-sm-7 col-md-5 circuit-title">
                <div class="title-padding"><div class="strong title-text-a">服务<span class="title-text-b">流程</span></div>
                    <div class="title-sm">精准预约专家&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;高效直通手术</div></div>
            </div>
            <div class="col-sm-4 col-md-6 border-line"></div>
        </div>
        <div class="circuit-img"><img src="<?php echo $urlResImage ?>subject/bg－1234.png"></div>
        <div class="row circuit-detail">
            <div class="col-sm-3 pl40 circuit-text strong"><img class="ml-12" src="<?php echo $urlResImage ?>subject/bg-ink.png"> 用户通过网站、APP、微信公众号、邮箱或客服提交病历等资料。</div>
            <div class="col-sm-3 pl40 circuit-text strong"><img class="ml-12" src="<?php echo $urlResImage ?>subject/bg-ink.png"> 支付1000元手术预约金。</div>
            <div class="col-sm-3 pl40 circuit-text strong"><img class="ml-12" src="<?php echo $urlResImage ?>subject/bg-ink.png"> 患者会在48小时收到<div>由名医助手反馈的专家咨询意见，如有需要，一周内安排面诊。</div></div>
            <div class="col-sm-3 pl50 circuit-text strong"><img class="ml-12" src="<?php echo $urlResImage ?>subject/bg-ink.png"> 根据面诊情况，<div>在一周内安排住院床位。</div></div>
        </div>
    </div>

    <div class="container bg-gray pt50" >
        <div class="row">
            <div class="col-sm-1 border-line"></div>
            <div class="col-sm-7 col-md-5 advantage-title">
                <div class="title-padding"><div class="strong title-text-a">直通车的<span class="title-text-b">优势</span></div>
                    <div class="title-sm">名医随时有&nbsp;&nbsp;手术不再难</div></div>
            </div>
            <div class="col-sm-4 col-md-6 border-line"></div>
        </div>
        <div class="row">
            <div class="icon pl50 mt50 col-sm-5 col-sm-offset-1"><img src="<?php echo $urlResImage ?>subject/bg－icon.png"></div>
            <div class="col-sm-5 advantage-text mt50">
                <div class="strong">权威专家:</div>
                <div >国内权威顶尖专家一对一服务，不误诊，不拖延，确保看好病。</div>
                <div class="strong">高效便捷:</div>
                <div>省去床位等候时间，免去奔波代价，由名医主刀顾问高效沟通，检查完毕后48小时直通手术室。</div>
                <div class="strong">贴心服务:</div>
                <div >挂号、检查、咨询，一站式安排术后随访，节约时间，减少奔波劳苦。</div>
                <div class="strong">安全保障:</div>
                <div >顶级专家 权威三甲医院</div>
            </div>
        </div>
    </div>

    <div class="container bg-gray pt50" >
        <div class="row">
            <div class="col-sm-1 border-line"></div>
            <div class="col-sm-7 col-md-5 q-title">
                <div class="title-padding"><div class="strong title-text-a">常见的<span class="title-text-b">问题解答</span></div>
                    <div class="title-sm">自助出现的问题都整理在此，可供您在咨询前做参考</div></div>
            </div>
            <div class="col-sm-4 col-md-6 border-line"></div>
        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10 pl50">
                <div class="strong q-text-t">1.为什么选择名医主刀的手术直通车服务？</div>
                <div class="answer-text">名医主刀旨在根据患者提供的病情资料，最快匹配到最合适的医生（均为三甲医院副主任级别以上），大大缩短了等待专家会诊和等待床位的时间，让患者更便捷地好看病、看好病。</div>
                <div class="q-border-line pt10"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10 pl50">
                <div class="strong q-text mt10">2.手术直通车为什么是收费服务？</div>
                <div class="answer-text">手术直通车需要名医主刀指派专业人员，一对一协助患者分析、整理资料并联系医生，协调医患双方并安排就诊时间，工作人员需要付出大量工作时间和精力。</div>
                <div class="q-border-line pt10"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10 pl50">
                <div class="strong q-text mt10">3.手术预约金包括哪些？</div>
                <div class="answer-text bg-text-red">手术预约金包括术前专家咨询费、第一次面诊费（如有需要，安排门诊）和手术相关安排费用。</div>
                <div class="q-border-line pt10"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10 pl50">
                <div class="strong q-text mt10">4.手术预约金与医院、医生有关吗？</div>
                <div class="answer-text">此手术预约金是名医主刀为了提供专业服务、保证服务质量而收取的，并非医院和医生收取的，医院和医生也不会在此服务中获得任何商业利益。</div>
                <div class="q-border-line pt10"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10 pl50">
                <div class="strong q-text mt10 bg-text-red">5.手术预约金是否退还？</div>
                <div class="answer-text bg-text-red">以下2种情况下退还一半手术预约金：</div>
                <div class="answer-text">①在所有专家诊断后都认为该患者不具备手术条件/手术风险过大/达不到病人期望而不接受手术时，退还一半手术预约金。</div>
                <div class="answer-text">②对于主刀医生确认需要手术后，若平台没有能在一周内安排到合适床位，退还一半手术预约金。
                    在与患者确认取消服务后的48小时内，将500元退还到患者支付手术预约金的账户里。</div>
                <div class="answer-text bg-text-red">以下这种情况将全额退款：</div>
                <div class="answer-text">平台无法对接到患者所指定的专家，而患者又不接受名医助手推荐的其他名医，则在与患者确认取消服务后的48小时内，将全部手术预约金退至患者支付的账户里。</div>
                <div class="q-border-line pt10"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10 pl50">
                <div class="strong q-text mt10">6.如果没有在48小时内得到平台回复，怎么办？</div>
                <div class="answer-text">名医助手收到预约单后，首先会在第一时间联系患者，确认就诊意向和提交的影像资料，然后开始联系专家，将会在48小时内给予医生的初步反馈。<span class="bg-text-red">如果没有能在48时内给予任何回复，您可以申请退款。</span></div>
                <div class="q-border-line pt10"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10 pl50">
                <div class="strong q-text mt10">7.手术可以指定医生吗？</div>
                <div class="answer-text">名医助手会为每一个患者安排最合适的医生，患者无需指定手术医生。如果有指定需求，可以在预约单里填写或者助手电话回访时提出。</div>
                <div class="q-border-line pt10"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10 pl50">
                <div class="strong q-text mt10">8.是否一定可以预约到指定医生？</div>
                <div class="answer-text">名医助手会优先满足患者的指定需求，但因为医生时间安排等特殊性，名医主刀会根据患者疾病情况匹配三甲医院副主任级别以上的名医主刀就诊。</div>
                <div class="q-border-line pt10"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10 pl50">
                <div class="strong q-text mt10">9.手术保证治疗效果吗？</div>
                <div class="answer-text">因医疗行为的特殊性，患者病情差异巨大，任何人（包括医生、名医主刀）都不能绝对性地对治疗方案、疗效、医疗意外、住院天数做出承诺。 名医主刀会根据患者疾病情况匹配三甲医院副主任级别以上的名医主刀就诊。</div>
                <div class="q-border-line pt10"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10 pl50">
                <div class="strong q-text mt10">10.患者是否能比别人更快入院？</div>
                <div class="answer-text">名医主刀会全力帮助需要手术的患者尽快入院，但所有患者也都需要遵守医院规则和安排，听从专家的具体安排。 名医主刀会根据患者疾病情况匹配三甲医院副主任级别以上的名医主刀就诊。</div>
            </div>

        </div>

    </div>
    <div class="eteamlist container bg-gray pt50 pb40" >
        <div class="row">
            <div class="col-sm-1 border-line"></div>
            <div class="col-sm-7 col-md-5 team-title">
                <div class="title-padding"><div class="strong title-text-a">明星<span class="title-text-b">专家团队</span></div>
                    <div class="title-sm">国内顶尖外科专家，领衔的专业手术治疗团队</div></div>
            </div>
            <div class="col-sm-4 col-md-6 border-line"></div>
        </div>
        <div class="moreeteam text-right pt10">
            <a target="_blank" href="<?php echo $urlExpertteamIndex; ?>">更多专家团队>></a>
        </div>
        <div class="pt20">
            <div class="loading loading02"></div>
        </div>
        <div class="row elist">

        </div>
    </div>	
</section> 
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
                            +'</div></div>' +
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
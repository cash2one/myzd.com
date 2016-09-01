<?php
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/mygy100.min.js', CClientScript::POS_END);
$this->pageTitle = '名医公益联盟,公益手术申请_名医主刀网';
$this->htmlMetaKeywords = '公益联盟,公益手术,名医主刀网';
$this->htmlMetaDescription = '名医公益联盟是名医主刀倡导发起,并联合公益组织,医生共建的一种可持续公益模式,旨在让更多患者有机会接受更好的治疗。希望通过名医公益联盟,汇聚社会爱心力量,帮助贫困患者解决“好看病,看好病”的切实需求。';
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlDownloads = $this->createUrl('site/downLoadFile', array('fileName' => ''));
$urlVideo = Yii::app()->theme->baseUrl . "/videos/";
$urlCommonwealDoctors = $this->createUrl('api/commonwealdoctors');
$urlDoctorView = $this->createUrl('doctor/view');
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/mygy100.min.css");
$this->checkVendor(AppLog::SITE_MYGY);
$urlLoadFreediagnoseDoctors = $this->createUrl('api/freediagnosedoctors');
?>
<div class="container-fluid">
    <div class="row">
        <div class="mygy-header">
            <div class="text-center"><img src="http://static.mingyizhudao.com/146163981184576"></div>
        </div>
    </div>
</div>
<div class="container-fluid" id="mygy">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mt40">
                    <div class="vedio-area">
                        <video id="my-video" class="video-js vedio-content" src="http://static.mingyizhudao.com/pc/mygy.mp4"  data-setup="{}" type="video/mp4" controls></video>
                    </div>
                </div>
                <div class="col-md-5 mt40">
                    <div class="news">
                        <div>名医公益联盟是名医主刀倡导发起，并联合公益组织、医生共建的一种可持续公益模式，旨在让更多患者有机会接受更好的治疗。</div>
                        <div class="mt10">作为国内最大的移动医疗手术平台，名医主刀每天都能接触到大量需要手术的患者，其中不少患者家境贫寒难以全部承担手术服务费用。名医主刀一直将“仁爱”视为核心文化，希望通过名医公益联盟，汇聚社会爱心力量，帮助贫困患者解决“好看病，看好病”的切实需求。</div>
                        <div class="text-right learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'shapinghealth')); ?>" target="_blank">点击了解更多《名医公益手术捐赠暨名医公益宣言发布会》</a></div>
                    </div>
                </div>
            </div>
            <div class="text-center service-header mt40"><span class="short-line"></span><span class="content">服务流程</span><span class="short-line"></span></div>
            <div class="service-line"> 
            </div>
            <div class="text-center mt20 mb20 service-line-img"><img src="http://static.mingyizhudao.com/14671984566685"></div>

            <div class="mt40"><img src="http://static.mingyizhudao.com/146718242234110"><span class="mygy-small-title">免支付专家会诊费</span></div>
            <div class="row">
                <div class="col-sm-7">
                    <a href="<?php echo $this->createUrl('doctor/view', array('id' => '3251')) ?>" target="_blank">
                        <div class="recommend-expert">
                            <div><img class="recommend-icon" src="http://static.mingyizhudao.com/146718266929627"></div>
                            <div class="pb10 expert-info">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3 pr0"><div><img class="img100" src="http://dr.static.mingyizhudao.com/7A939D1B57DC9BD173D5E25ACF6A3AA1" alt="贾占奎" title="贾占奎"/></div></div>
                                    <div class="col-md-4 mt25 expertdesc">
                                        <div><strong>贾占奎</strong><span class="ml10">副主任医师</span><span class="ml10">副教授</span></div>
                                        <div class="color-green mt10">泌尿外科</div>
                                        <div class="mt10">郑州大学第一附属医院</div>
                                    </div>
                                </div>
                            </div>
                            <div class="recommend-content">
                                <div><strong>推荐理由</strong>：医学博士，郑州大学第一附属医院泌尿外科副主任医师。腔内手术（泌尿内窥镜）技术娴熟，对治疗前列腺肥大、膀胱肿瘤、尿道狭窄、肾结石、输尿管结石、膀胱结石等具有不开刀、痛苦小、恢复快、疗效确切等特点。贾医师对泌尿男科各种常见病和多发病的诊断与治疗具有较为丰富的临床经验，作为名医主刀的签约专家，贾医师积极投身公益事业，在名医主刀发起的名医公益联盟活动中捐赠多台爱心手术，为有需要的患者免费救治，希望将健康带给更多人。</div>
                                <div class="mt20"><strong>擅长手术</strong>：擅长前列腺汽化电切术、尿道狭窄冷切开术、经皮肾镜、输尿管镜（软镜）碎石取石术。尤其擅长后腹腔镜下肾上腺肿瘤摘除术（包括巨大肾上腺肿瘤）、肾(盂)癌根治性切除术（包括巨大腔静脉癌栓取出术）、肾周淋巴管剥脱术、肾盂输尿管成形术，腹腔镜下膀胱癌根治术、前列腺癌根治术等的微创治疗。</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-5">
                    <div class="information">
                        <div class="mt30 main-content">
                            所有公益项目的被资助者（点击<strong><a class="mygy-textdownload" href="<?php echo $urlDownloads; ?>mygy_shenqing.docx">下载名医公益申请表</a></strong>）均可以<strong class="color-e50011 text16">免支付专家会诊费</strong>。如家庭条件特别困难，可以再申请“名医公益援助金”（点击<strong><a class="mygy-textdownload" href="<?php echo $urlDownloads; ?>tepin_shenqing.docx">下载名医公益援助申请表</a></strong>），通过审核者可获得<strong class="text16 color-e50011">5000-10000元</strong>的援助金。如患者本人因病暂无能力自行申请，需指定委托人填写（点击<strong><a class="mygy-textdownload" href="<?php echo $urlDownloads; ?>weituoshu.docx">下载名医公益委托书</a></strong>）。
                        </div>
                        <div>  
                            <div class="number-tips text-center" style="margin-top:72px;">
                                <div class="text-right"><span class="text16">已捐赠手术的医生人数：</span><span class="text21 color-e50011 number">44位</span></div>
                                <div class="text-right"><span class="text16">已成功资助的患者人数：</span><span class="text21 color-e50011 number">68位</span></div>
                            </div>
                            <div class="text12 text-right mt5">截至2016.6.30</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="commonwealexpert mt30 clearfix">       
            </div>
            <div class="text-right mt5 learn-more-expert"><a href="<?php echo $this->createUrl('site/page', array('view' => 'mygyexpert')); ?>" target="_blank">查看更多专家&gt;&gt;</a></div>
            <div class="mt30"><img src="http://static.mingyizhudao.com/146718242194824"><span class="mygy-small-title">免费术前方案评估</span></div>
            <div class="mingyiyizhenexpert clearfix"></div>
            <div class="text-right mt5 learn-more-expert"><a href="<?php echo $this->createUrl('event/view', array('page' => 'mingyiyizhen')); ?>" target="_blank">查看更多专家&gt;&gt;</a></div>

            <div class="mt40"><img src="http://static.mingyizhudao.com/146718242150047"><span class="mygy-small-title">一万元人民币资助</span></div>
            <div class="bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="text-center mygy-support">
                            <div class="contentone"><span class="titleone">100万公益基金</span><span class="ml20 titletwo">100位手术患者</span></div>
                            <div class="contenttwo">名医主刀向手术费用困难的患者提供每人一万元人民币的专家手术资助</div>
                            <div>如情况更为特殊，名医主刀会额外增资</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mygy-applyone" style="">申请方式一：</div>
                        <div>直接拨打400-6277-120名医热线，告诉名医助手您的意向专家及资助需求。</div>
                        <div class="mygy-applytwo" class="mt30">申请方式二：</div>
                        <div class>直接在线预约平台上的专家，客服回访时提出资助需求。</div>
                        <div class="text-right mr20 mygy-apply-tip" style="">*名医助手将对您的病历和申请进行审核，请您提供真实信息</div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container pr0">
            <!--            <div class="mygy-cooperation">
                            <div class="text-center cooperation-header"><span class="short-line"></span><span class="vertical-line"></span><span class="content"><img src="http://static.mingyizhudao.com/14641698902646"></span><span class="vertical-line"></span><span class="short-line"></span></div>
                        </div>-->
            <div class="mt40"><img src="http://static.mingyizhudao.com/146718241986487"></div>
            <div class="mygy-cooperation-area mt10">
                <div class="text-center cooperation"><div class="cooperation-one"></div><div class="cooperation-name">爱永纯</div></div>
                <div class="text-center cooperation"><div class="cooperation-two"></div><div class="cooperation-name">柏惠维康</div></div>
                <div class="text-center cooperation"><div class="cooperation-three"></div><div class="cooperation-name">春晖博爱</div></div>
                <div class="text-center cooperation"><div class="cooperation-four"></div><div class="cooperation-name">复星基金会</div></div>
                <div class="text-center cooperation"><div class="cooperation-five"></div><div class="cooperation-name">和睦家医疗</div></div>
                <div class="text-center cooperation"><div class="cooperation-six"></div><div class="cooperation-name">暖阳基金</div></div>
                <div class="text-center cooperation"><div class="cooperation-seven"></div><div class="cooperation-name">上海德济医院</div></div>
                <div class="text-center cooperation last"><div class="cooperation-eight"></div><div class="cooperation-name">嫣然天使基金</div></div>
                <div class="text-center cooperation"><div class="cooperation-nine"></div><div class="cooperation-name">中国儿童少年基金会</div></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!--    <link href="http://vjs.zencdn.net/5.8.8/video-js.css" rel="stylesheet">
        <script src="http://vjs.zencdn.net/5.8.8/video.js"></script>-->
</div>
<script>
    $(document).ready(function () {
        var urlLoadCommonwealDoctors = '<?php echo $urlCommonwealDoctors; ?>';
        var urlDoctorView = '<?php echo $urlDoctorView; ?>';
        ajaxLoadCommonwealDoctors(urlLoadCommonwealDoctors, urlDoctorView);
        var urlLoadFreediagnoseDoctors = '<?php echo $urlLoadFreediagnoseDoctors; ?>';
        ajaxLoadFreediagnoseDoctors(urlDoctorView, urlLoadFreediagnoseDoctors);
    });
</script>

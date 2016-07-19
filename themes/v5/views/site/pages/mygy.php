<?php
$this->pageTitle='名医公益联盟,公益手术申请_名医主刀网';
$this->htmlMetaKeywords = '公益联盟,公益手术,名医主刀网';
$this->htmlMetaDescription ='名医公益联盟是名医主刀倡导发起,并联合公益组织,医生共建的一种可持续公益模式,旨在让更多患者有机会接受更好的治疗。希望通过名医公益联盟,汇聚社会爱心力量,帮助贫困患者解决“好看病,看好病”的切实需求。';
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlDownloads = $this->createUrl('site/downLoadFile', array('fileName' => ''));
$urlVideo = Yii::app()->theme->baseUrl . "/videos/";
$urlCommonwealDoctors = $this->createUrl('api/commonwealdoctors');
$urlDoctorView = $this->createUrl('doctor/view');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/mygy.min.css" . "?v=" . time());
$this->checkVendor(AppLog::SITE_MYGY);
$urlLoadFreediagnoseDoctors = $this->createUrl('api/freediagnosedoctors');
?>
<div class="container-fluid">
    <div class="row">
        <div class="mygy-header">
            <div class="text-center"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146163981184576"></div>
        </div>
    </div>
</div>
<div class="container-fluid" id="mygy">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mt40">
                    <div class="vedio-area">
                        <video id="my-video" class="video-js vedio-content" src="<?php echo $urlVideo; ?>event/mygy/mygy.mp4"  data-setup="{}" type="video/mp4" controls></video>
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
            <div class="text-center mt20 mb20 service-line-img"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/14671984566685"></div>

            <div class="mt40"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146718242234110"><span class="mygy-small-title">免支付专家会诊费</span></div>
            <div class="row">
                <div class="col-sm-7">
                    <a href="<?php echo $this->createUrl('doctor/view', array('id' => '3305')) ?>" target="_blank">
                        <div class="recommend-expert">
                            <div><img class="recommend-icon" src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146718266929627"></div>
                            <div class="pb10 expert-info">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3 pr0"><div><img class="img100" src="http://dr.static.mingyizhudao.com/146457623247028.jpg" alt="韩宝三"/></div></div>
                                    <div class="col-md-4 mt25 expertdesc">
                                        <div><strong>韩宝三</strong><span class="ml10">主任医师</span></div>
                                        <div class="color-green mt10">普外科</div>
                                        <div class="mt10">上海新华医院</div>
                                    </div>
                                </div>
                            </div>
                            <div class="recommend-content">
                                <div><strong>推荐理由</strong>：医学博士，博士后，上海新华医院主任医师。国内知名乳腺肿瘤整形外科手术专家，中国抗癌协会乳腺癌专业委员会青年委员，中国抗癌协会会员，海峡两岸医药交流委员会海西乳腺手术学组副主委兼秘书长。韩医师近年所倡导的“微创、精准、精美、精心”的乳腺外科手术学理念和新技术受邀在国内60多个学术会议演讲并被广泛借鉴，在国内30多家医院进行过手术示教。为了更好的关爱女性，关爱乳腺健康，韩医师更投身公益事业，作为名医主刀的签约专家，韩医师在名医主刀发起的名医公益联盟活动中捐赠多台爱心手术，为有需要的患者免费救治。</div>
                                <div class="mt20"><strong>擅长手术</strong>：乳腺良恶性肿瘤的早期诊断；微创、精准、美学前提下的乳腺癌根治性手术、保乳手术和术后乳房重建；践行乳腺癌规范的化疗、内分泌和靶向治疗等综合治疗；乳腺癌一期保乳或联合乳房重建。</div>
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
                            <div class="number-tips text-center">
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
            <div class="mt30"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146718242194824"><span class="mygy-small-title">免费术前方案评估</span></div>
            <div class="mingyiyizhenexpert clearfix"></div>
            <div class="text-right mt5 learn-more-expert"><a href="<?php echo $this->createUrl('event/view', array('page' => 'mingyiyizhen')); ?>" target="_blank">查看更多专家&gt;&gt;</a></div>

            <div class="mt40"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146718242150047"><span class="mygy-small-title">一万元人民币资助</span></div>
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
                            <div class="text-center cooperation-header"><span class="short-line"></span><span class="vertical-line"></span><span class="content"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/14641698902646"></span><span class="vertical-line"></span><span class="short-line"></span></div>
                        </div>-->
            <div class="mt40"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146718241986487"></div>
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
        ajaxLoadFreediagnoseDoctors(urlDoctorView);
    });
    function ajaxLoadCommonwealDoctors(urlLoadCommonwealDoctors, urlDoctorView) {
        $.ajax({
            url: urlLoadCommonwealDoctors,
            success: function (data) {
                setCommonwealDoctors(data, urlDoctorView);
            },
            error: function (XmlHttpRequest, textStatus, errorThrown) {
                console.log(XmlHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    }
    function setCommonwealDoctors(data, urlDoctorView) {
        if (data.results) {
            var innerHtml = "";
            innerHtml += "";
            var page = data.results.page;
            var doctors = page[0];
            for (var i = 0; i < 5; i++) {
                var last = '';
                if (i == 4) {
                    last = 'last';
                }
                var doctor = doctors[i];
                var docdesc = '';
                if (doctor.desc) {
                    docdesc = doctor.desc.length > 40 ? doctor.desc.substr(0, 40) + '...' : doctor.desc;
                } else {
                    docdesc = '暂无信息';
                }
                var hpDeptName = doctor.hpDeptName == null ? "&nbsp;" : doctor.hpDeptName;
                var aTitle = doctor.aTitle == '无' ? '' : doctor.aTitle;
                innerHtml += '<a href="' + urlDoctorView + "?id=" + doctor.id + "&is_commonweal=1" + '" target="_blank"><div class="expertList pull-left ' + last + '">' +
                        '<div class="text-right"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146718708459637" /></div>' +
                        '<div class="pb20 expert-info">' +
                        '<div><img class="img100" src="' + doctor.imageUrl + '" /></div>' +
                        '<div class="text-center"><strong>' + doctor.name + '</strong><span class="ml10">' + doctor.mTitle + ' ' + aTitle + '</span></div>' +
                        '<div class="text-center color-green mt5">' + hpDeptName + '</div>' +
                        '<div class="text-center mt5 text12">' + doctor.hpName + '</div>' +
                        '</div><div class="text12 mygyexpert-desc"><span>擅长手术：</span>' + docdesc + '</div>' +
                        '</div></a>';
            }
        }
        $(".commonwealexpert").html(innerHtml);
    }

    function ajaxLoadFreediagnoseDoctors(cityId, disease_category) {
        var urlDoctorView = '<?php echo $urlDoctorView; ?>';
        var urlLoadFreediagnoseDoctors = '<?php echo $urlLoadFreediagnoseDoctors; ?>';
        $('.loading').show();
        $.ajax({
            url: urlLoadFreediagnoseDoctors,
            success: function (data) {
                setFreediagnoseDoctors(data, urlDoctorView);
            },
            error: function (XmlHttpRequest, textStatus, errorThrown) {
                $('.loading').hide();
                console.log(XmlHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    }
    function setFreediagnoseDoctors(data, urlDoctorView) {
        if (data.results) {
            var innerHtml = "";
            innerHtml += "";
            var doctors = data.results;
            for (var i = 0; i < 5; i++) {
                if (i == 4) {
                    var last = 'last';
                }
                var doctor = doctors[i];
                var docdesc = '';
                if (doctor.desc) {
                    docdesc = doctor.desc.length > 40 ? doctor.desc.substr(0, 40) + '...' : doctor.desc;
                } else {
                    docdesc = '暂无信息';
                }
                var hpDeptName = doctor.hpDeptName == null ? "&nbsp;" : doctor.hpDeptName;
                var aTitle = doctor.aTitle == '无' ? '' : doctor.aTitle;
                innerHtml += '<a href="' + urlDoctorView + "?id=" + doctor.id + "&is_commonweal=1" + '" target="_blank"><div class="expertList pull-left ' + last + '">' +
                        '<div class="pb20 expert-info">' +
                        '<div><img class="img100" src="' + doctor.imageUrl + '" /></div>' +
                        '<div class="text-center"><strong>' + doctor.name + '</strong><span class="ml10">' + doctor.mTitle + ' ' + aTitle + '</span></div>' +
                        '<div class="text-center color-green mt5">' + hpDeptName + '</div>' +
                        '<div class="text-center mt5 text12">' + doctor.hpName + '</div>' +
                        '</div><div class="text12 mygyexpert-desc"><strong>擅长手术：</strong>' + docdesc + '</div>' +
                        '</div></a>';
            }
            $(".mingyiyizhenexpert").html(innerHtml);
        }
    }
</script>

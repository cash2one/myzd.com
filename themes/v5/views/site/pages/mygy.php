<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlDownloads = $this->createUrl('site/downLoadFile', array('fileName' => ''));
$urlVideo = Yii::app()->theme->baseUrl . "/videos/";
$urlCommonwealDoctors = $this->createUrl('api/commonwealdoctors');
$urlDoctorView = $this->createUrl('doctor/view');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/mygy.min.css" . "?v=" . time());
$this->checkVendor(AppLog::SITE_MYGY);
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
            <div class="row mt30">
                <div class="col-sm-9">
                    <div class="vedio-area">
                        <video id="my-video" class="video-js vedio-content" src="<?php echo $urlVideo; ?>event/mygy/mygy.mp4"  data-setup="{}" type="video/mp4" controls></video>
                    </div>
                </div>
                <div class="col-sm-3 pl5">
                    <div class="news">
                        <div>名医公益联盟是名医主刀倡导发起，并联合公益组织、医生共建的一种可持续公益模式，旨在让更多患者有机会接受更好的治疗。</div>
                        <div class="mt10">作为国内最大的移动医疗手术平台，名医主刀每天都能接触到大量需要手术的患者，其中不少患者家境贫寒难以全部承担手术服务费用。名医主刀一直将“仁爱”视为核心文化，希望通过名医公益联盟，汇聚社会爱心力量，帮助贫困患者解决“好看病，看好病”的切实需求。</div>
                        <div class="text-right learn-more text12"><a href="<?php echo $this->createUrl('event/view', array('page' => 'shapinghealth')); ?>" target="_blank">更多详情&gt;</a></div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class="image-link-one mt30"><a href="<?php echo $this->createUrl('event/view', array('page' => 'millionfund')); ?>" target="_blank"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146416988880228" class="img-responsive"></a></div>
                <div class="image-link-two mt30"><a href="<?php echo $this->createUrl('event/view', array('page' => 'mingyiyizhen')); ?>" target="_blank"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146416989035924" class="img-responsive"></a></div>
                <div class="clearfix"></div>
            </div>
            <div class="flowChart">
                <div class="text-center flowChart-header"><span class="short-line"></span><span class="vertical-line"></span><span class="content"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146416989112483"></span><span class="vertical-line"></span><span class="short-line"></span></div>
                <div class="flowChart-content">
                    <div class="content">
                        <div class="text-center"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146416997937999" ></div>
                        <div class="row">
                            <div class="col-md-8 information mt30">
                                所有公益项目的被资助者（点击<strong><a class="mygy-textdownload" href="<?php echo $urlDownloads; ?>mygy_shenqing.docx">下载名医公益申请表</a></strong>）均可以<strong class="color-e50011 text16">免支付专家会诊费</strong>。如家庭条件特别困难，可以再申请“名医公益援助金”（点击<strong><a class="mygy-textdownload" href="<?php echo $urlDownloads; ?>tepin_shenqing.docx">下载名医公益援助申请表</a></strong>），通过审核者可获得<strong class="text16 color-e50011">5000-10000元</strong>的援助金。如患者本人因病暂无能力自行申请，需指定委托人填写（点击<strong><a class="mygy-textdownload" href="<?php echo $urlDownloads; ?>weituoshu.docx">下载名医公益委托书</a></strong>）。
                            </div>
                            <div class="col-md-4 mt30">
                                <div class="text-right">
                                    <div class="number-tips text-center">
                                        <!--                                        <ul class="text-bxslider" style="padding:0;">
                                                                                    <li>-->
                                        <div><span class="text16">已捐赠手术的医生人数：</span><span class="text21 color-e50011 number">53位</span></div>
                                        <div><span class="text16">已成功资助的患者人数：</span><span class="text21 color-e50011 number">58位</span></div>
                                        <!--                                            </li>
                                                                                </ul>-->
                                    </div>
                                </div>
                                <div class="text12 text-right mt5">截至2016.5.27</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="recommend-expert mt20">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="text-right"><img class="recommend-icon" src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146664936386735" /></div>
                        <div class="pb10 expert-info">
                            <div><img class="img100" src="http://dr.static.mingyizhudao.com/F1060759BAAB7A08A1317DFB19151DC9" /></div>
                            <div class="text-center"><strong>梁益建</strong><span class="ml10">主任医师</span></div>
                            <div class="text-center color-green">骨科</div>
                            <div class="text-center">成都市第三人民医院</div>
                        </div>
                    </div>
                    <div class="col-sm-9 recommend-content">
                        <div class="mt20"><strong>推荐理由</strong>：医学博士，成都市第三人民医院主任医师，从事骨科临床工作22年，致力于脊柱疾病及关节疾病的诊断和治疗，挽救了上千个脊柱畸形患者的生命。梁医师以医者仁爱之心履行公益诺言，连续多年参与专家义诊活动，为了让患者尽快得到治疗，他处处为病人节省费用，更常常为经济困难的患者四处奔波筹集治疗费用。作为名医主刀的签约专家，梁医师继续践行公益之路，在名医主刀发起的名医公益联盟活动中捐赠多台爱心手术，希望为有需求的患者解决切实之需，让更多的患者挺起脊梁，直起腰杆。</div>
                        <div class="mt20"><strong>擅长手术</strong>：脊柱疾病及关节疾病的诊断和治疗。尤其是颈椎疾病和颈椎外伤；脊柱侧弯的手术矫正，脊柱退变所致疾病的非融合固定手术，以及微创行肩、肘、髋、膝等人工关节置换术以治疗各种关节疾病，并擅长腰椎间盘镜行各种腰椎微创手术。</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cutover">
                <div class="content commonwealexpert">
                    <ul class="bxslider">

                    </ul>
                </div>
            </div>
        </div>

        <div class="container pr0">
            <div class="mygy-cooperation">
                <div class="text-center cooperation-header"><span class="short-line"></span><span class="vertical-line"></span><span class="content"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/14641698902646"></span><span class="vertical-line"></span><span class="short-line"></span></div>
            </div>
            <div class="mygy-cooperation-area mt30">
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
            var active = "";
            var x = 0;
            for (x in page) {
                innerHtml += '<li><div class="row expList">';
                var doctors = page[x];
                for (var i = 0; i < doctors.length; i++) {
                    var doctor = doctors[i];
                    var hpDeptName = doctor.hpDeptName == null ? "&nbsp;" : doctor.hpDeptName;
                    var contractedImg = doctor.isContracted == 1 ? '<div class="contracted-img"></div>' : '';
                    var aTitle = doctor.aTitle == '无' ? '' : doctor.aTitle;
                    innerHtml += '<div class="col-md-3 mt30 col-sm-4" ><a target="_blank" href="' + urlDoctorView + "?id=" + doctor.id + "&is_commonweal=1" + '">' +
                            '<div class="expInfo text-center bg-white explist-border">' +
                            contractedImg +
                            '<div><img class="img100" src="' + doctor.imageUrl + '"/></div>' +
                            '<div class="expName color-black">' + doctor.name + '</div>' +
                            '<div class="expTitle">' + doctor.mTitle + ' ' + aTitle + '</div>' +
                            '<div class="expHospital mt30">' + doctor.hpName + '</div>' +
                            '<div class="mt10 color-green mb50">' + hpDeptName + '</div>' +
                            '</div>' +
                            '</a>' +
                            '</div>';
                }
                innerHtml += '</div></li>';

            }
            $(".commonwealexpert .bxslider").html(innerHtml);

        }
//轮播
        var adsbxslider = $('.commonwealexpert .bxslider').bxSlider({
            mode: 'fade',
            slideMargin: 0,
            controls: true,
            pause: 5000,
            speed: 0,
            auto: true
        });
        $(".commonwealexpert .bx-controls-direction").hide();
    }

</script>

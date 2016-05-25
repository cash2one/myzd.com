<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlDownloads = $this->createUrl('site/downLoadFile', array('fileName' => ''));
$urlVideo = Yii::app()->theme->baseUrl . "/videos/";
$urlCommonwealDoctors = $this->createUrl('api/commonwealdoctors');
$urlDoctorView = $this->createUrl('doctor/view');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/mygy.min.css" . "?v=" . time());
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
                        <div class="text-right learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'shapinghealth')); ?>" target="_blank">&gt;&gt;</a></div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class="image-link-one mt30"><a href="<?php echo $this->createUrl('event/view', array('page' => 'millionfund')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>mygy/baiwangongyi.png" class="img-responsive"></a></div>
                <div class="image-link-two mt30"><a href="<?php echo $this->createUrl('event/view', array('page' => 'mingyiyizhen')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>mygy/mingyiyizhen.jpg" class="img-responsive"></a></div>
                <div class="clearfix"></div>
            </div>
            <div class="flowChart">
                <div class="text-center flowChart-header"><span class="short-line"></span><span class="vertical-line"></span><span class="content"><img src="<?php echo $urlResImage; ?>mygy/renai.png"></span><span class="vertical-line"></span><span class="short-line"></span></div>
                <div class="flowChart-content">
                    <div class="text-center">
<!--                        <span class="number-icon">1</span><span class="step-arrow" style="line-height:40px;display:inline-block;"><img src="<?php echo $urlResImage; ?>mygy/step-arrow.png"></span><span class="number-icon">2</span><span class="number-icon">3</span><span class="number-icon">4</span><span class="number-icon">5</span>-->

                    </div>
                    <div class="content">
                        <div class="text-center"><img src="<?php echo $urlResImage; ?>mygy/flowChart.png" ></div>
                        <div class="mt30">请在名医助手回访确认后填写下面相关表格。所有确认为公益项目的被资助者均可以<strong class="color-red">免支付专家会诊费</strong>。如有家庭条件特别困难的患者，可以申请“名医公益援助金”，通过审核的申请者可以获得<strong class="color-red">5000-10000元</strong>的援助金。如患者本人因病暂无能力自行申请，需指定委托人填写。</div>
                        <div class="text-center mt30 text16">请点击下载：<a class="mygy-textdownload" href="<?php echo $urlDownloads; ?>mygy_shenqing.docx">名医公益申请表</a><a class="mygy-textdownload ml20" href="<?php echo $urlDownloads; ?>tepin_shenqing.docx">名医公益援助申请表</a><a class="mygy-textdownload ml20" href="<?php echo $urlDownloads; ?>weituoshu.docx">名医公益委托书</a></div>
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
<!--                <div class="text-center mt10"><span class="line-btn active" href="#slider0"></span><span class="line-btn ml10" href="#slider1"></span><span class="line-btn ml10" href="#slider2"></span><span class="line-btn ml10" href="#slider3"></span></div>-->
            </div>
        </div>

        <div class="container pr0">
            <div class="mygy-cooperation">
                <div class="text-center cooperation-header"><span class="short-line"></span><span class="vertical-line"></span><span class="content"><img src="<?php echo $urlResImage; ?>mygy/cooperation.png"></span><span class="vertical-line"></span><span class="short-line"></span></div>
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
        var i = 0;
        $('.image-link-one').hover(function () {
            i++;
            if (i == 0) {
                $(".image-link-one").animate({height: '0'});
                $(".image-link-one").animate({height: '120px'});
            }
            i++;
        }, function () {
            i=0;
        });
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

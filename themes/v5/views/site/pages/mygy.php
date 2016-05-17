<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlDownloads = $this->createUrl('site/downLoadFile',array('fileName'=>''));
$urlVideo = Yii::app()->theme->baseUrl . "/videos/";
$urlCommonwealDoctors = $this->createUrl('api/commonwealdoctors');
$urlDoctorView = $this->createUrl('doctor/view');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/mygy.css" . "?v=" . time());
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
                        <a href="<?php echo $this->createUrl('event/view', array('page' => 'millionfund')) ?>" target="_blank"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/14618119088653" /></a>
                    </div>
                </div>
            </div>
            <div class="row mt30">
                <div class="col-sm-9">
                    <div class="question">
                        <div class="header">
                            <span class="circle"></span>名医公益联盟是什么？
                        </div>
                        <div class="content">
                            <div>名医公益联盟是名医主刀倡导发起，并联合公益组织、医生共建的一种可持续公益模式，旨在让更多患者有机会接受更好的治疗。</div>
                            <div class="mt20">作为国内最大的移动医疗手术平台，名医主刀每天都能接触到大量需要手术的患者，其中不少患者家境贫寒难以全部承担手术服务费用。名医主刀一直将“仁爱”视为核心文化，希望通过名医公益联盟，汇聚社会爱心力量，帮助贫困患者解决“好看病，看好病”的切实需求。</div>
                            <div class="mt20">您可以直接在线点击或拨打客服热线预约以下医生，名医助手会在1个工作日回访确认，并指导填写申请表格。 通过审核的申请者可以<span class="color-red">免支付</span>专家会诊费。（<a class="mygy-textdownload" href="<?php echo $urlDownloads;?>mygy_shenqing.docx">点击下载“名医公益申请表”</a>）</div>
                            <div class="mt20">如有家庭条件特别困难的患者，可以申请“名医公益援助金”。通过审核的申请者可以获得<span class="color-red">5000-10000元的援助金</span>。（<a class="mygy-textdownload" href="<?php echo $urlDownloads;?>tepin_shenqing.docx">点击下载“名医公益援助申请表”</a>）</div>
                            <div class="mt20">备注：如患者本人因病暂无能力自行申请，需指定委托人填写。（<a class="mygy-textdownload" href="<?php echo $urlDownloads;?>weituoshu.docx">点击下载“名医公益委托书”</a>）</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 pl5">
                    <div class="flowChart">
                        <div class="heading">资助流程</div>
                        <div class="content">
                            <div>
                                <div class="pull-left"><span class="step">第一步------</span></div>
                                <div class="pull-left">
                                    <div>选择名医并预约，</div>
                                    <div>或拨打400-6277-120</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="mt30">
                                <div class="pull-left"><span class="step">第二步------</span></div>
                                <div class="pull-left">
                                    <div>名医助手评估病情</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="mt30">
                                <div class="pull-left"><span class="step">第三步------</span></div>
                                <div class="pull-left">
                                    <div>提交申请表格</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="mt30">
                                <div class="pull-left"><span class="step">第四步------</span></div>
                                <div class="pull-left">
                                    <div>确定资助方案</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="mt30">
                                <div class="pull-left"><span class="step">第五步------</span></div>
                                <div class="pull-left">
                                    <div>安排手术</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt60">
                <div class="pull-left title-picture">
                    <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146163989449587">
                </div>
                <div class="pull-left w70">
                    <div>名医公益联盟里有着来自国内三甲医院的主任、副主任医师，</div>
                    <div class="mt5">他/她们秉承“解患者之难”的初心，</div>
                    <div class="mt5">哪里有紧急的病情，哪里需要名医公益联盟的救助，</div>
                    <div class="mt5">他/她们就在哪里，</div>
                    <div class="mt5">为患者提供公益手术服务。</div>                      
                </div>
                <div class="clearfix"></div>
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
        <div class="container">
            <div class="mt20">
                <div class="pull-left title-picture">
                    <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146163989454528">
                </div>
                <div class="pull-left w70">
                    <div>他/她们是公众眼里的明星，</div>
                    <div class="mt5">他/她们也为人妻，为人父。</div>
                    <div class="mt5">他/她们有的是患者家属，有的曾与病魔奋勇抗争，</div>
                    <div class="mt5">在名医公益联盟里，</div>
                    <div class="mt5">他/她们是心存善意的公益人。</div>
                    <div class="mt5 line-83c4bd"></div></div>
                <div class="clearfix"></div>
            </div>
            <div class="row mt30">
                <div class="col-sm-6">
                    <div class="pull-left mr20">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/14616398934664">
                    </div>
                    <div>
                        <div class="text24">郎永淳先生</div>
                        <div class="mt20 text16">
                            <div>“爱永纯”健康中国基金发起人</div>
                            <div>原中国中央电视台新闻播音员、主持人</div>
                            <div>名医公益联盟启动仪式主持人</div>
                        </div>
                        <div class="mt20">寄语：</div>
                        <div>
                            站上舞台是公益活动的主持人，回归生活，希望能够继续主持公益。
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-sm-6">
                    <div class="pull-left mr20">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146163989463972">
                    </div>
                    <div>
                        <div class="text24">王艳女士</div>
                        <div class="mt20 text16">中国内地女演员</div>
                        <div>曾获“中国品牌女性公益奖”</div>
                        <div class="mt30">寄语：</div>
                        <div>
                            以一己之力帮助更多的手术患者，让公益的力量肩负起生命的希望。
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="row mt30">
                <div class="col-sm-6">
                    <div class="pull-left mr20">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/14616398941791">
                    </div>
                    <div>
                        <div class="text24">钱婧女士</div>
                        <div class="mt20 text16">
                            <div>主持人、编导，暖阳基金发起人</div>
                            <div>大型原创健康公益节目《超级诊疗室》总制片人</div>
                            <div>名医公益联盟启动仪式主持人</div>
                        </div>
                        <div class="mt20">寄语：</div>
                        <div>
                            解决大病手术患者的问题，除了表达爱心外，首先我们要行动起来。
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-sm-6">
                    <div class="pull-left mr20">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146163989429370">
                    </div>
                    <div>
                        <div class="text24">乔榛先生</div>
                        <div class="mt20 text16">中国著名配音演员、导演</div>
                        <div class="mt50">寄语：</div>
                        <div>
                            我也曾是和病魔斗争过的病人。可以感同身受到其中的痛苦。希望名医公益联盟的发起，能够聚集成强大的能量，帮助到更多的手术患者。
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="mt60">
                <div class="pull-left title-picture">
                    <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146163989459141">
                </div>
                <div class="pull-left w70">
                    <div>名医公益联盟聚集着有着相同使命的公益组织，</div>
                    <div class="mt5">他们是公益界的践行者，</div>
                    <div class="mt5">他们响应着患者最迫切的呼喊，</div>
                    <div class="mt5">他们是名医公益联盟的基石。</div>
                    <div class="mt5 line-83c4bd"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="text-center mt30">
                <div class="w20 pull-left">
                    <div><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146163989381589"></div>
                    <div>嫣然天使基金</div>
                </div>
                <div class="w20 pull-left">
                    <div><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146163989387142"></div>
                    <div>中国儿童少年基金</div>
                </div>
                <div class="w20 pull-left">
                    <div><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/14616398939429"></div>
                    <div>“爱永纯”健康中国基金</div>
                </div>
                <div class="w20 pull-left">
                    <div><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146163989403495"></div>
                    <div>中国红十字基金会暖阳基金</div>
                </div>
                <div class="w20 pull-left">
                    <div><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146163989411220"></div>
                    <div>春晖博爱儿童救助基金会</div>
                </div>
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
                    innerHtml += '<div class="col-md-3 mt30" ><a target="_blank" href="' + urlDoctorView + "?id=" + doctor.id + "&is_commonweal=1" + '">' +
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

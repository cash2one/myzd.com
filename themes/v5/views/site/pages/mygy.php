<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlVideo = Yii::app()->theme->baseUrl . "/video/";
$urlCommonwealDoctors = $this->createUrl('api/commonwealdoctors');
$urlDoctorView = $this->createUrl('doctor/view');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/mygy.css" . "?v=" . time());
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/home.css" . "?v=" . time());
?>
<div class="container-fluid">
    <div class="row">
        <div class="mygy-header">
            <div class="text-center"><img src="<?php echo $urlResImage; ?>mygy/header.png"></div>
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
                        <img src="<?php echo $urlResImage; ?>mygy/introduction.png" />
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
                            <div class="mt20">作为国内最大的移动医疗手术平台，名医主刀每天都能接触到大量需要手术的患者。在沟通中，我们注意到其中不少患者家境贫寒，难以全部承担平台服务费用。</div>
                            <div class="mt20">名医主刀虽然是新生企业，但“仁爱”一直是我们的初心，我们希望通过名医公益联盟，汇聚社会的爱心力量，让更多贫困的患者也能找到名医进行手术。</div>
                            <div class="mt20">名医公益联盟中，既有饱含仁爱之心的名医，也有有着丰富救助经验的公益组织。通过对资源的整合和优化配置，让患者好看病、看好病。</div>
                            <div class="mt20">做手术找名医主刀，做手术遇到困难找名医公益联盟。</div>
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
                                    <div>或拨打400-119-7900</div>
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
                                    <div>确定资助方案</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="mt30">
                                <div class="pull-left"><span class="step">第四步------</span></div>
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
                    <img src="<?php echo $urlResImage; ?>mygy/title01.png">
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
            <div class="cutover">
                <div class="content commonwealexpert">
                </div>
                <div class="text-center mt10"><span class="line-btn active" href="#slider0"></span><span class="line-btn ml10" href="#slider1"></span><span class="line-btn ml10" href="#slider2"></span><span class="line-btn ml10" href="#slider3"></span></div>
            </div>
            <div class="mt60">
                <div class="pull-left title-picture">
                    <img src="<?php echo $urlResImage; ?>mygy/title02.png">
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
                    <div class="pull-left mr10">
                        <img src="<?php echo $urlResImage; ?>mygy/qiaozhen.png">
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
                <div class="col-sm-6">
                    <div class="pull-left mr10">
                        <img src="<?php echo $urlResImage; ?>mygy/wangyan.png">
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
                    <div class="pull-left mr10">
                        <img src="<?php echo $urlResImage; ?>mygy/qianjing.png">
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
                    <div class="pull-left mr10">
                        <img src="<?php echo $urlResImage; ?>mygy/langyongchun.png">
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
                            我也曾是和病魔斗争过的病人。可以感同身受到其中的痛苦。希望名医公益联盟的发起，能够聚集成强大的能量，帮助到更多的手术患者。
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="mt60">
                <div class="pull-left title-picture">
                    <img src="<?php echo $urlResImage; ?>mygy/title03.png">
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
                    <div><img src="<?php echo $urlResImage; ?>mygy/organization01.png"></div>
                    <div>嫣然天使基金</div>
                </div>
                <div class="w20 pull-left">
                    <div><img src="<?php echo $urlResImage; ?>mygy/organization02.png"></div>
                    <div>中国儿童少年基金</div>
                </div>
                <div class="w20 pull-left">
                    <div><img src="<?php echo $urlResImage; ?>mygy/organization03.png"></div>
                    <div>“爱永纯”健康中国基金</div>
                </div>
                <div class="w20 pull-left">
                    <div><img src="<?php echo $urlResImage; ?>mygy/organization04.png"></div>
                    <div>中国红十字基金会暖阳基金</div>
                </div>
                <div class="w20 pull-left">
                    <div><img src="<?php echo $urlResImage; ?>mygy/organization05.png"></div>
                    <div>春晖博爱儿童救助基金会</div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="test"></div>

<!--    <link href="http://vjs.zencdn.net/5.8.8/video-js.css" rel="stylesheet">
    <script src="http://vjs.zencdn.net/5.8.8/video.js"></script>-->
    
</div>
<script>
    $(document).ready(function () {
        var urlLoadCommonwealDoctors = '<?php echo $urlCommonwealDoctors; ?>';
        var urlDoctorView = '<?php echo $urlDoctorView; ?>';
        ajaxLoadCommonwealDoctors(urlLoadCommonwealDoctors, urlDoctorView);
        $('.line-btn').click(function () {
            $('.line-btn').removeClass('active');
            $(this).addClass('active');
            $('.cutover .commonwealexpert .silder-area').hide();
            var activeTab = $(this).attr('href');
            $(activeTab).show();
        });
    });
    function ajaxLoadCommonwealDoctors(urlLoadCommonwealDoctors, urlDoctorView) {
        $.ajax({
            url: urlLoadCommonwealDoctors,
            success: function (data) {
                setCommonwealDoctors(data, urlDoctorView);

            }
        });
    }
    function setCommonwealDoctors(data, urlDoctorView) {
        if (data.results) {
            var innerHtml = "";
            innerHtml += "";
            var page = data.results.page;
            var active = "";
            var x = 1;
            for (x in page) {
                if (x == 0) {
                    active = 'active';
                } else {
                    active = '';
                }
                innerHtml += '<div class="silder-area ' + active + '" id="slider' + x + '"><div class="row expList" >';
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
                innerHtml += '</div></div>';

            }
            $(".commonwealexpert").html(innerHtml);
        }



    }
</script>

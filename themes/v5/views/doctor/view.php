<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/doctor.min.css?v=" . time());
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery.qrcode.min.js', CClientScript::POS_HEAD);
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlBooking = $this->createUrl('booking/create', array('ajax' => 1));
$doctor = $data->results->doctor;
$urlDoctorView = 'http://m.mingyizhudao.com/mobile/doctor/view/id/';
$urlajaxComment = $this->createUrl('comment/ajaxDoctorComment', array('pagesize' => 5, 'doctorId' => ''));
$page = Yii::app()->request->getQuery('page', '');
$is_commonweal = Yii::app()->request->getQuery('is_commonweal', 0);
$urlDoctor = $this->createUrl('doctor/view', array('id' => ''));
?>
<style>.pr5{padding-right:5px;}.text14{font-size:14px;}</style>
<div class="contaier-fluid bg-green">
    <div class="container">
        <div class="crumbs-doctor">
            <a href="<?php echo Yii::app()->homeUrl; ?>">首页</a> > <a href="<?php echo $referer; ?>">找医生</a> > <?php echo $doctor->name; ?>
        </div>
    </div>
</div>
<div class="container-fluid" id="doctor-view">
    <div class="row">
        <div class="container mb50">
            <div class="doctorInfo mt20">
                <div class="doc-media">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="media ml30">
                                <div class="media-left media-middle pull-left">
                                    <img class="media-object doc-img" src="<?php echo $doctor->imageUrl; ?>" alt="<?php echo $doctor->name; ?>" title="<?php echo $doctor->name; ?>">
                                </div>
                                <div class="media-body pl10">
                                    <h1 class="media-heading mt30"><span><?php echo $doctor->name; ?></span><span class="color-gray ml20"><?php echo $doctor->mTitle; ?></span><span class="color-gray ml20"><?php echo $doctor->aTitle == '无' ? '' : $doctor->aTitle; ?></span></h1>
                                    <h2 class="mt20 text14">
                                        <?php echo $doctor->hpDeptName == '' ? '' : '<span class="expert-faculty text-center">' . $doctor->hpDeptName . '</span>'; ?>
                                        <span><?php echo $doctor->hospitalName; ?></span>
                                    </h2>
                                    <div class="qrcode">
                                        <div><span class="qrcode-text">微信分享医生主页</span><span id="qrcode-sm"><span class="qrlogo-sm"></span></span> <i class="fa fa-caret-down"></i></div>
                                        <div id="qrcode-lg">
                                            <div><img src="<?php echo $urlResImage ?>icons/weixin.png"/></div>
                                            <div id="qrcode-weixin">
                                                <div class="qrlogo-lg"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mt20 text-center doctor-menu">
                                <div class="bookingBtn doc-booking" data-url="<?php echo $urlBooking; ?>&did=<?php echo $doctor->id; ?>" data-toggle="modal" data-target="#booking" data-docid="<?php echo $doctor->id; ?>" data-docname="<?php echo $doctor->name; ?>" data-dochospital="<?php echo $doctor->hospitalName; ?>" data-docdept="<?php echo $doctor->hpDeptName; ?>"><div class="ml10"><img src="<?php echo $urlResImage; ?>/doctor/icon-booking.png"><span class="ml15">预约<?php echo $doctor->name; ?></span></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="row doctorInfo">
                <div class="col-sm-8 pr5">
                    <section class="main pb20">
                        <?php
                        if (isset($doctor->reasons) && arrayNotEmpty($doctor->reasons)) {
                            $reasons = $doctor->reasons;
                            ?>
                            <div class="mt40 pb20" style="border:1px solid #eeefef;">
                                <div class="docinfo-title good-reason"><h3>推荐理由</h3></div> 
                                <div class="ml30 pr30">
                                    <ul class="recommend-reasons">
                                        <?php
                                        foreach ($reasons as $key => $reason) {
                                            echo '<li class="recommend-reason1">' . $reason . '</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        <?php }
                        ?>
                        <?php
                        if (isset($doctor->description) && !is_null($doctor->description)) {
                            ?>
                            <div class="pb20" style="border:1px solid #eeefef;">
                                <div class="disTags">
                                    <div class="docinfo-title good"><h4>擅长手术</h4></div>
                                    <ul class="pl30 pr30 mt10">
                                        <?php
                                        echo $doctor->description;
                                        ?>
                                    </ul>
                                </div> 
                            </div>
                        <?php }
                        ?>
                        <?php
                        if (isset($doctor->careerExp) && !is_null($doctor->careerExp)) {
                            ?>
                            <div class="pb20" style="border:1px solid #eeefef;">
                                <div class="docinfo-title experience"><h5>执业经历</h5></div>
                                <div class="experience-text mt10">
                                    <ul class="pl30 pr30">
                                        <?php echo $doctor->careerExp; ?>
                                    </ul>
                                </div>
                            </div> 
                        <?php }
                        ?>
                        <?php
                        if (isset($doctor->honour) && arrayNotEmpty($doctor->honour)) {
                            ?>
                            <div class="pb20" style="border:1px solid #eeefef;">
                                <div class="honour">
                                    <div class="docinfo-title honor"><h6>获得荣誉</h6></div>
                                    <div class="pl30 mt10 pr30">
                                        <ul>
                                            <?php
                                            foreach ($doctor->honour as $value) {
                                                if (trim($value) != "") {
                                                    echo '<li><span>' . $value . '</span></li>';
                                                }
                                            }
                                            ?>
                                        </ul>                       
                                    </div>
                                </div>
                            </div>
                        <?php }
                        ?>
                        <?php
//                        if (isset($data->results->members) && !is_null($data->results->members)) {
//                            $members = $data->results->members;
                        ?>
                        <!--                            <div class="mb20 mt40 team">
                                                        <span class="docinfo-title members" >团队成员简介</span><div class="pull-left team-line"></div><div class="clearfix"></div>                          
                                                    </div>     -->
                        <?php
//                            foreach ($members as $member) {
                        ?>
                        <!--                                <div class="pl30">
                                                            <div class="media">
                                                                <div class="media-left media-middle pull-left">
                                                                    <img class="media-object team-img" src="<?php //echo $member->imageUrl;                   ?>" alt="<?php //echo $member->name;                   ?>">
                                                                </div>
                                                                <div class="media-body pl10">
                                                                    <div class="media-heading mt15"><?php //echo $member->name;                   ?><span class="color-gray ml20"><?php //echo $member->mTitle;                   ?></span><span class="color-gray ml20"><?php //echo $member->aTitle;                   ?></span></div>
                                                                    <div class="mt15">
                        <?php //echo $member->hpDeptName == null ? '' : '<span class="color-25aea6 text-center">' . $member->hpDeptName . '</span>'; ?>
                                                                    </div>
                                                                    <div class="mt15"><?php //echo $doctor->hospitalName;                   ?></div>
                                                                </div>
                                                            </div>
                                                            <div class="expert-desc mt15 mb40"><?php //echo $member->description == null ? '' : $member->description;                   ?></div>
                                                        </div>-->
                        <?php
//                            }
//                        }
                        ?>
                        <div class="comment-text-title">

                        </div>
                        <div class="comment-text">

                        </div>
                        <div class="comment-text-bottom">
                        </div>
                        <div class="mt30">
                            <nav class="text-center">
                                <ul class="pagination">
                                </ul>
                            </nav>
                        </div>
                    </section>
                </div>
                <div class="col-sm-4 doctor-menu">
                    <div class="server-circuit">
                        <div class="server-title">服务流程</div>
                        <div class="server-step">
                            <div class="mt15">
                                <div class="pull-left mr10"><span class="step">第一步</span></div>
                                <div class="pull-left server-line"></div>
                                <div class="pull-left server-content">提交预约</div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="mt5">
                                <div class="pull-left mr10"><span class="step">第二步</span></div>
                                <div class="pull-left server-line"></div>
                                <div class="pull-left server-content">客服回访确认</div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="mt5">
                                <div class="pull-left mr10"><span class="step">第三步</span></div>
                                <div class="pull-left server-line"></div>
                                <div class="pull-left server-content">匹配对症专家</div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="mt5">
                                <div class="pull-left mr10"><span class="step">第四步</span></div>
                                <div class="pull-left server-line"></div>
                                <div class="pull-left server-content">确认就诊时间</div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="mb15 mt5">
                                <div class="pull-left mr10"><span class="step">第五步</span></div>
                                <div class="pull-left server-line"></div>
                                <div class="pull-left server-content">前往医院就诊</div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="rec-title">
                        <span>同科室推荐</span>
                    </div>
                    <div class="border-gray">
                        <div class="rec-doc">
                            <?php
                            if (isset($data->results->related) && is_array($data->results->related)) {
                                $related = $data->results->related;
                                $last = '';
                                foreach ($related as $i => $relateddoc) {
                                    if ($i == count($related) - 1) {
                                        $last = 'last';
                                    }
                                    ?>
                                    <a href="<?php echo $this->createUrl('doctor/view', array('id' => $relateddoc->id)); ?>" target='_blank'>
                                        <div class="expInfo ">
                                            <div class="content <?php echo $last; ?>">
                                                <div class="pull-left mr10" >
                                                    <img src="<?php echo $relateddoc->imageUrl; ?>"  alt="<?php echo $relateddoc->name; ?>" title="<?php echo $relateddoc->name; ?>"/>
                                                </div>	
                                                <div class="expName pt5"><span class="color-black"><?php echo $relateddoc->name; ?></span>&nbsp;&nbsp;<span class="color-gray"><?php echo $relateddoc->mTitle; ?> <?php echo $relateddoc->aTitle; ?></span></div>
                                                <div class="expHospital mt10 text-overflow"><?php echo $relateddoc->hpDeptName; ?></div>
                                                <div class="expHospital mt10 text-overflow"><?php echo $relateddoc->hospitalName; ?></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </a>  
                                    <?php
                                }
                            } else {
                                echo '<div class="expInfo last"><div class="mt20 mb50">暂无其他推荐</div></div>';
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                    if (isset($data->results->article) && arrayNotEmpty($data->results->article)) {
                        $doctor_articles = $data->results->article;
                        ?>
                        <div class="text18 information">相关资讯</div> 
                        <div class="border-gray news">
                            <?php foreach ($doctor_articles as $doctor_article) { ?>
                                <div class="mt10 mb10">
                                    <div class="pull-left title"><span>【<?php echo $doctor_article->type; ?>】</span></div>
                                    <div class="news-link"><a href="<?php echo $this->createUrl("article/page", array("view" => trim($doctor_article->fileName))); ?>" target="_blank" title="<?php echo $doctor_article->title; ?>"><?php echo $doctor_article->title; ?></a></div>
                                    <div class="clearfix"></div>
                                </div> 
                            <?php } ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->renderPartial("//booking/formModal", array('is_commonweal' => $is_commonweal)); ?>
<script>
    $(document).ready(function () {
        $condition = new Array();
        $condition["page"] = '<?php echo $page == '' ? 1 : $page; ?>';
        $condition["is_commonweal"] = '<?php echo $is_commonweal; ?>';
        //生成大小两个二维码
        jQuery('#qrcode-sm').qrcode({width: 32, height: 32, text: '<?php echo $urlDoctorView . $doctor->id ?>'});
        jQuery('#qrcode-weixin').qrcode({width: 94.5, height: 94.5, text: '<?php echo $urlDoctorView . $doctor->id ?>'});
        $doctorId = '<?php echo $doctor->id ?>';
        ajaxComment($doctorId);
    });
    function ajaxComment(doctorId) {
        var urlajaxComment = '<?php echo $urlajaxComment; ?>' + doctorId + setUrlCondition();
        $.ajax({
            url: urlajaxComment,
            success: function (data) {
                setLocationUrl();
                setComment(data);
                if (data.results.dataCount > 5) {
                    setPages(data);
                }
            },
            complete: function (data) {

            },
            error: function (XmlHttpRequest, textStatus, errorThrown) {
                console.log(XmlHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    }
    //组合url参数
    function setUrlCondition() {
        var urlCondition = "";
        for ($key in $condition) {
            if ($condition[$key] && $condition[$key] !== "") {
                urlCondition += "&" + $key + "=" + $condition[$key];
            }
        }
        return urlCondition;
    }
    function setComment(data) {
        var innerHtml = '';
        var appendHtml = '';
        var bottomHtml = '';
        var comment = data.results.comments;
        var totalPage = Math.ceil(data.results.dataCount / 5);
        if (comment.length != 0) {
            innerHtml += '<div class="mt40 team"><span class="docinfo-title-comment comment" >患者心声</span><div class="pull-left team-line"></div><div class="clearfix"></div></div>';
        }
        if (data.results.dataCount > 5 && $condition["page"] < totalPage) {
            bottomHtml += '<div class="text-center text18 mt50 loadMore"><a>加载更多...</a></div>';
        }
        for (var i = 0; i < comment.length; i++) {
            var detail = comment[i].diseaseDetail == null ? '' : comment[i].diseaseDetail;
            var userName = comment[i].userName == null ? '&nbsp;' : comment[i].userName;
            var date = comment[i].dateCreated.substr(0, 11);
            var commentText = comment[i].commentText.length > 90 ? comment[i].commentText.substr(0, 90) + '<span class="ellipsis">...</span><span class="dese-last" style="display:none;">' + comment[i].commentText.substr(90) + '</span><div class="dese-operate text-right"><span class="desc-more">展开全部 <i class="fa fa-angle-down"></i></span><span class="desc-retract" style="display:none">收起全部 <i class="fa fa-angle-up"></i></span></div>' : comment[i].commentText;
            appendHtml += '<div class="pl30 row mt20"><div class = "col-sm-2 pr0"><div class="text-center"><img src = "http://static.mingyizhudao.com/146822933824594"></div><div class = "text-center text12">' + userName + '</div></div>' +
                    '<div class = "col-sm-10"><div class="clearfix"><span>主刀专家：<?php echo $doctor->name; ?></span><span class="ml30">确诊疾病：' + detail + '</span><span class="text12 pull-right color-777">' + date + '</span></div>';

            appendHtml += '<div class="mt20"><div class = "comment-desc text12">' + commentText + '</div></div></div>' +
                    '<div class = "clearfix"></div>' +
                    '<div class = "divide-gray mt10 mr15"></div>' +
                    '</div> ';
        }
        $('.comment-text-title').html(innerHtml);
        $('.comment-text-bottom').html(bottomHtml);
        appendHtml = $('.comment-text').html() + appendHtml;
        $('.comment-text').html(appendHtml);
        $('.dese-operate>span').click(function () {
            $(this).parents('.comment-desc').find('.ellipsis').toggle();
            $(this).parents('.comment-desc').find('.dese-last').toggle();
            $(this).parents('.comment-desc').find('.desc-more').toggle();
            $(this).parents('.comment-desc').find('.desc-retract').toggle();
        });
    }
    function setPages(data) {
        var datacount = Math.ceil(data.results.dataCount / 5);
        //        下一页
        $(".loadMore").click(function () {
            if ($condition["page"] >= datacount) {
                return;
            } else {
                $condition["page"]++;
                ajaxComment($doctorId);
            }
        });
//        initPageFunction(datacount);
    }

    //更改url
    function setLocationUrl() {
//        var stateObject = {};
//        var title = "";
//        var urlCondition = '';
//        for ($key in $condition) {
//            if ($condition[$key] && $condition[$key] !== "") {
//                urlCondition += "&" + $key + "=" + $condition[$key];
//            }
//        }
//        urlCondition = urlCondition.substring(1);
//        urlCondition = "?" + urlCondition;
//        var newUrl = '<?php //echo $urlDoctor;                                          ?>' + $doctorId + urlCondition;
//        history.pushState(stateObject, title, newUrl);
    }
</script>

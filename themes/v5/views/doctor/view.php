<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/doctor.css?v=" . time());
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery.qrcode.min.js', CClientScript::POS_HEAD);
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlBooking = $this->createUrl('booking/create', array('ajax' => 1));
$doctor = $data->results->doctor;
$urlDoctorView = 'http://m.mingyizhudao.com/mobile/doctor/view/id/';
$urlajaxComment = $this->createUrl('comment/ajaxDoctorComment', array('pagesize' => 3, 'doctorId' => ''));
$page = Yii::app()->request->getQuery('page', '');
$is_commonweal = Yii::app()->request->getQuery('is_commonweal', 0);
$urlDoctor = $this->createUrl('doctor/view', array('id' => ''));
?>
<div class="contaier-fluid bg-green">
    <div class="container">
        <div class="crumbs-doctor">
            <a href="<?php echo Yii::app()->homeUrl; ?>">首页</a> > <?php echo $doctor->hpDeptName == '' ? '' : $doctor->hpDeptName . ' > '; ?><?php echo $doctor->name; ?>
        </div>
    </div>
</div>
<div class="container mb50" id="doctor-view">
    <div class="row doctorInfo mt20">
        <div class="col-md-8 col-sm-8">
            <div class="">
                <div class="media doc-media ml30">
                    <div class="media-left media-middle pull-left">
                        <img class="media-object doc-img" src="<?php echo $doctor->imageUrl; ?>" alt="<?php echo $doctor->name; ?>">
                    </div>
                    <div class="media-body pl10">
                        <h4 class="media-heading mt30"><span><?php echo $doctor->name; ?></span><span class="color-gray ml20"><?php echo $doctor->mTitle; ?></span><span class="color-gray ml20"><?php echo $doctor->aTitle == '无' ? '' : $doctor->aTitle; ?></span></h4>
                        <div class="mt20">
                            <?php echo $doctor->hpDeptName == '' ? '' : '<span class="expert-faculty text-center">' . $doctor->hpDeptName . '</span>'; ?>
                            <span><?php echo $doctor->hospitalName; ?></span>
                        </div>
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
                </div>
                <section class="main pb20"> 
                    <?php
                    if (isset($doctor->description) && !is_null($doctor->description)) {
                        ?>
                        <div class="disTags">
                            <div class="docinfo-title good">擅长手术</div>
                            <ul class="pl30">
                                <?php
                                echo $doctor->description;
                                ?>
                            </ul>
                        </div> 
                    <?php }
                    ?>
                    <?php
                    if (isset($doctor->honour) && arrayNotEmpty($doctor->honour)) {
                        ?>
                        <div class="honour">
                            <div class="docinfo-title honor">获得荣誉</div>
                            <div class="pl30">
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
                    <?php }
                    ?>
                    <?php
                    if (isset($doctor->careerExp) && !is_null($doctor->careerExp)) {
                        ?>
                        <div>
                            <div class="docinfo-title experience">执业经历</div>
                            <div class="pl30 experience-text">
                                <?php echo $doctor->careerExp; ?>
                            </div>
                        </div> 
                    <?php }
                    ?>                                     
                    <?php
                    if (isset($data->results->members) && !is_null($data->results->members)) {
                        $members = $data->results->members;
                        ?>
                        <div class="mb20 mt40 team">
                            <span class="docinfo-title members" >团队成员简介</span><div class="pull-left team-line"></div><div class="clearfix"></div>                          
                        </div>     
                        <?php
                        foreach ($members as $member) {
                            ?>
                            <div class="pl30">
                                <div class="media">
                                    <div class="media-left media-middle pull-left">
                                        <img class="media-object team-img" src="<?php echo $member->imageUrl; ?>" alt="<?php echo $member->name; ?>">
                                    </div>
                                    <div class="media-body pl10">
                                        <div class="media-heading mt15"><?php echo $member->name; ?><span class="color-gray ml20"><?php echo $member->mTitle; ?></span><span class="color-gray ml20"><?php echo $member->aTitle; ?></span></div>
                                        <div class="mt15">
                                            <?php echo $member->hpDeptName == null ? '' : '<span class="color-25aea6 text-center">' . $member->hpDeptName . '</span>'; ?>
                                        </div>
                                        <div class="mt15"><?php echo $doctor->hospitalName; ?></div>
                                    </div>
                                </div>
                                <div class="expert-desc mt15 mb40"><?php echo $member->description == null ? '' : $member->description; ?></div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <div class="comment-text">

                    </div>
                    <div class="mt30">
                        <nav class="text-center">
                            <ul class="pagination">

                            </ul>
                        </nav>
                    </div>
                </section>									
            </div> 
        </div>
        <div class="col-sm-4 doctor-menu">
            <div class="mt20 text-center">
                <div class="bookingBtn doc-booking" data-url="<?php echo $urlBooking; ?>&did=<?php echo $doctor->id; ?>" data-toggle="modal" data-target="#booking" data-docid="<?php echo $doctor->id; ?>" data-docname="<?php echo $doctor->name; ?>" data-dochospital="<?php echo $doctor->hospitalName; ?>" data-docdept="<?php echo $doctor->hpDeptName; ?>"><div class="ml10"><img src="<?php echo $urlResImage; ?>/doctor/icon-booking.png"><span class="ml15">预约<?php echo $doctor->name; ?></span></div></div>
            </div>
            <?php
            if (isset($doctor->reasons) && arrayNotEmpty($doctor->reasons)) {
                $reasons = $doctor->reasons;
                ?>
                <div class="mt14 text18">推荐理由</div> 
                <div class="border-gray">
                    <div>
                        <div class="pl10 pt10 pb10">
                            <?php
                            foreach ($reasons as $key => $reason) {
                                echo '<div class="color-yellow-f8b62c"><span class="text18"><i class="fa fa-star"></i></span><span class="ml5">' . $reason . '</span></div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
            <?php
            if (isset($data->results->article) && arrayNotEmpty($data->results->article)) {
                $doctor_articles = $data->results->article;
                ?>
                <div class="text18 information">相关资讯</div> 
                <div class="border-gray news">
                    <?php foreach ($doctor_articles as $doctor_article) { ?>
                        <div class="mt10 mb10">
                            <div class="pull-left title"><strong>【<?php echo $doctor_article->type; ?>】</strong></div>
                            <div class="news-link"><a href="<?php echo $this->createUrl("article/page", array("view" => trim($doctor_article->fileName))); ?>" target="_blank" title="<?php echo $doctor_article->title; ?>"><?php echo $doctor_article->title; ?></a></div>
                            <div class="clearfix"></div>
                        </div> 
                    <?php } ?>
                </div>
                <?php
            }
            ?>
            <div class="rec-title">
                <span>其他推荐</span>
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
                                            <img src="<?php echo $relateddoc->imageUrl; ?>"/>
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
                console.log(data.results.comments);
                if (data.results.dataCount > 3) {
                    setPages(data);
                }
                setLocationUrl();
                setComment(data);
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
        var comment = data.results.comments;
        if (comment.length != 0) {
            innerHtml += '<div class="mt40 team"><span class="docinfo-title comment" >患者评价</span><div class="pull-left team-line"></div><div class="clearfix"></div></div>';
        }
        for (var i = 0; i < comment.length; i++) {
            var detail = comment[i].diseaseDetail == null ? '' : comment[i].diseaseDetail;
            var userName = comment[i].userName == null ? '&nbsp;' : comment[i].userName;
            var commentText = comment[i].commentText.length > 90 ? comment[i].commentText.substr(0, 90) + '<span class="ellipsis">...</span><span class="dese-last" style="display:none;">' + comment[i].commentText.substr(90) + '</span><span class="dese-operate pull-right"><span class="desc-more">详情 <i class="fa fa-angle-down"></i></span><span class="desc-retract" style="display:none">收起 <i class="fa fa-angle-up"></i></span></span>' : comment[i].commentText;
            innerHtml += '<div class="pl30 row mt20"><div class = "col-sm-2 pr0"><div class="text-center"><img src = "<?php echo $urlResImage; ?>doctor/user.png"></div><div class = "text-center text12">' + userName + '</div></div>' +
                    '<div class = "col-sm-3"><div><span>主刀专家：<?php echo $doctor->name; ?></span></div><div><span>确诊疾病：' + detail + '</span></div>' +
                    '<div class = "mt10 text14">治疗效果：<span>';
            for (var j = 1; j < 6; j++) {
                if (j <= comment[i].effect) {
                    innerHtml += '<i class="fa fa-star active color-yellow-f8b62c"></i>';
                } else {
                    innerHtml += '<i class="fa fa-star-o"></i>';
                }
            }
            innerHtml += '</span ></div><div class = "text14">医生态度：<span>';
            for (var k = 1; k < 6; k++) {
                if (k <= comment[i].doctorAttitude) {
                    innerHtml += '<i class="fa fa-star active color-yellow-f8b62c"></i>';
                } else {
                    innerHtml += '<i class="fa fa-star-o"></i>';
                }
            }
            var date = comment[i].dateCreated.substr(0, 11);
            innerHtml += '</span></div></div>' +
                    '<div class="col-sm-7 pl0"><div class = "comment-desc">' + commentText + '</div><div class="mt15">' + date + '</div></div>' +
                    '<div class = "clearfix"></div>' +
                    '<div class = "divide-gray mt10"></div>' +
                    '</div> ';
        }
        $('.comment-text').html(innerHtml);
        $('.dese-operate').click(function () {
            $(this).parents('.comment-desc').find('.ellipsis').toggle();
            $(this).parents('.comment-desc').find('.dese-last').toggle();
            $(this).parents('.comment-desc').find('.desc-more').toggle();
            $(this).parents('.comment-desc').find('.desc-retract').toggle();
        });
    }
    /**** 设置分页 ****/
    function setPages(data) {
        var datacount = Math.ceil(data.results.dataCount / 3);
        var innerHtml = '';
        var active = '';
        var maxPages = datacount > 8 ? 8 : datacount;
        var starPage = $condition['page'] > 5 ? $condition['page'] : 5;
        var activePage = $condition['page'] > 5 ? 5 : $condition['page'];
        var pageText = '';
        innerHtml += '<li><a class="pagePre" href="javascript:;" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
        if (datacount > 5) {
            innerHtml += '<li class="page-item"><a data-page="' + 1 + '" href="javascript:;">首页</a></li>';
        }
        for (var i = 0; i < maxPages; i++) {
            if (i === activePage - 1) {
                active = 'active';
            } else {
                active = '';
            }
            pageText = starPage - 4 + i;
            if (pageText > datacount) {
                break;
            }
            innerHtml += '<li class="page-item ' + active + '"><a data-page="' + (starPage - 4 + i) + '" href="javascript:;">' + (starPage - 4 + i) + '</a></li>';
        }
        if (datacount > 8 & starPage < datacount - 4) {
            innerHtml += '<li class=""><a href="javascript:;">...</a></li>' +
                    '<li class="page-item"><a data-page="' + datacount + '" href="javascript:;">' + datacount + '</a></li>';
        }
        innerHtml += '<li><a class="pageNext" href="javascript:;" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
        $('.pagination').html(innerHtml);
        initPageFunction(datacount);
    }
    /*** 初始化分页点击方法 *****/
    function initPageFunction(datacount) {
        //分页点击加载医生
        $(".page-item a").click(function () {
            var page = $(this).attr("data-page");
            $condition["page"] = page;
            ajaxComment($doctorId);
        });
        //上一页
        $(".pagePre").click(function () {
            if ($condition["page"] <= 1) {
                return;
            } else {
                $condition["page"]--;
                ajaxComment($doctorId);
            }
        });
//        下一页
        $(".pageNext").click(function () {
            if ($condition["page"] >= datacount) {
                return;
            } else {
                $condition["page"]++;
                ajaxComment($doctorId);
            }
        });
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
//        var newUrl = '<?php //echo $urlDoctor; ?>' + $doctorId + urlCondition;
//        history.pushState(stateObject, title, newUrl);
    }
</script>

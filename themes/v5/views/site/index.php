<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/home.js', CClientScript::POS_HEAD);
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlLoadDoctor = $this->createUrl('api/doctor', array('api' => 4, 'page' => 1, 'pagesize' => 4, 'is_contracted' => 1, 'disease_category' => 1));
$urlRecommendedDoctors = $this->createUrl('api/recommendeddoctors');
$urlDiseaseName = $this->createUrl('api/diseasename', array('api' => 7, 'disease_name' => '')); //api/diseasename?api=7&disease_name=
$urlDoctorView = $this->createUrl('doctor/view', array('id' => ''));
$urlHospitalView = $this->createUrl('hospital/view', array('id' => ''));
$urlDoctorSearch = $this->createUrl('doctor/search');
$urlHopitalSearch = $this->createUrl('hospital/search');
$urlDoctorSearchByDiseaseSubCategory = $this->createUrl('doctor/top', array('disease_sub_category' => 1));
$urlSearchByKeyWord = $this->createUrl('api/search', array('name' => ''));
?>
<style>
    #home .department .dept-area .waike-home{background-color:#f7f7f7;background-image:url("http://7xsq2z.com2.z0.glb.qiniucdn.com/146140403597886");background-repeat:no-repeat;background-position:0 0;width:195px;height:200px;display:inline-block;position:relative;}
    #home .department .dept-area .guke-home{background-color:#f7f7f7;background-image:url("http://7xsq2z.com2.z0.glb.qiniucdn.com/146140403597886");background-repeat:no-repeat;background-position:-195px 0;width:193px;height:200px;margin-right:2px;border-top:2px solid #f7f7f7;position:relative;}
    #home .department .dept-area .fuchanke-home{background-color:#f7f7f7;background-image:url("http://7xsq2z.com2.z0.glb.qiniucdn.com/146140403597886");background-repeat:no-repeat;background-position:-390px 0;width:193px;height:200px;margin-right:2px;border-top:2px solid #f7f7f7;position:relative;}
    #home .department .dept-area .xiaoerke-home{background-color:#f7f7f7;background-image:url("http://7xsq2z.com2.z0.glb.qiniucdn.com/146140403597886");background-repeat:no-repeat;background-position:-585px 0;width:193px;height:200px;margin-right:2px;border-top:2px solid #f7f7f7;position:relative;}
    #home .department .dept-area .wuguanke-home{background-color:#f7f7f7;background-image:url("http://7xsq2z.com2.z0.glb.qiniucdn.com/146140403597886");background-repeat:no-repeat;background-position:-780px 0;width:193px;height:200px;margin-right:2px;border-top:2px solid #f7f7f7;position:relative;}
    #home .department .dept-area .neike-home{background-color:#f7f7f7;background-image:url("http://7xsq2z.com2.z0.glb.qiniucdn.com/146140403597886");background-repeat:no-repeat;background-position:-975px 0;width:194px;height:200px;border-top:2px solid #f7f7f7;border-right:2px solid #f7f7f7;position:relative;}
    #home .department .dept-area{float:left;}

    #service-circuit-home .service-header{margin-top:50px;}
    #service-circuit-home .service-header .content{background-color:#fff;text-align:center;font-size:21px;color:#555;border-left:1px solid #19aea5;border-right:1px solid #19aea5;width:100px;display:inline-block;line-height:21px;}
    #service-circuit-home .service-header .short-line{border-top:1px solid #19aea5;width:20px;display:inline-block;margin-bottom:7px;}
    #service-circuit-home .service-line{border:1px solid #dcdcdd;height:100px;margin-top:-13px;}
    #service-circuit-home .service-circuit{margin-top:-19px;}
    #service-circuit-home .service-circuit .step{float:left;width:20%;text-align:center;font-size:16px;}
    #service-circuit-home .service-circuit .step .number-icon{background-color:#dcdcdd;color:#555;width:36px;height:36px;border-radius:18px;font-size:21px;text-align:center;display:inline-block;padding-top:3px;padding-left:1px;}
    #service-circuit-home .service-circuit .step.active .number-icon{background-color:#5cb6af;color:#fff;width:36px;height:36px;border-radius:18px;font-size:21px;text-align:center;display:inline-block;padding-top:3px;padding-left:1px;}
    #service-circuit-home .service-circuit .step.active .content{color:#5cb6af;}


    @media (max-width: 1200px){.home-event-img{height:323px;}}
    @media (max-width: 992px){.home-small-event-img{margin-left:15px!important;}}

    .home-small-event-img{margin-left:-15px}
    /*    搜索边框线色值：b4b5b5
    搜索框里面的字段：9f9fa0
    顶尖科室鼠标上去后效果：小儿外科字号：14      顶尖科室字号：18      GO：12      35x12
    权威专家色值：87ccc5     150x400        科室：150x300
    医生轮播背景色：f7f7f7*/

    .home-expList .department-choose{background-color:#87ccc5;margin-left:1px;height:59px;line-height:73px;margin-bottom:1px;}
    .home-expList .department-choose-last{background-color:#87ccc5;margin-left:1px;height:60px;line-height:73px;}
    .home-expList .department-choose:hover,.home-expList .department-choose:hover .home-dept-small,.home-expList .category.active{opacity:0.7;}
    .home-expList .department-choose-last:hover,.home-expList .department-choose-last:hover .home-dept-small{opacity:0.7;}
    /*    .home-expList .department-choose:hover,.home-expList .department-choose-last:hover,.home-expList .department-choose:hover .home-waike-small{red}*/
    .test{position:absolute;margin-left:120px;}

    .home-event .learn-more-event a{color:#3973ac;}
    .home-event .learn-more-event a:hover{text-decoration:underline;}
    .home-expslider1,.home-expslider2,.home-expslider3{width:40px;height:5px;background-color:#87ccc5;display:inline-block;}
</style>
<section id="site-content" style="background-color:#fefefe;">
    <div class="container-fluid bg-lunbo" style="height:500px;">
<!--        <div style="position:fixed;right:0;z-index:101;"><a href="<?php echo $this->createUrl('event/view', array('page' => 'mingyiyizhen')); ?>" target="_blank"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146140424966697"></a></div>-->
        <div class="row">
            <div class="container home-header ">
                <div class="home-slogn text-center">
                    <div class="home-title">
                        <div>
                            <span class="slogan-lg strong color-green">做手术就找名医主刀</span>
                        </div>
                        <div>
                            <span class="slogan-sm color-green">国内最大的互联网医疗手术平台</span>
                        </div>
                    </div>
                    <div class="mt40">
                        <a id="show_top" class="btn btn-home color-green" >为什么选择名医主刀?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid home-search">
        <div class="row">
            <div class="container">
                <div class="form-inline text-center" id="home-search-form">
                    <div class="form-group search-frame">
                        <input style="" type="text" class="form-control input-area disease-name" placeholder="请输入医生姓名、确诊疾病、医院名称">
                    </div>
                </div>
                <div id="search-display">
                    <div class="search-display-header">
                        <span class="pull-right clearhistory mt10">清除搜索记录</span>
                        <ul class="nav nav-tabs" role="tablist">

                        </ul>
                    </div>
                    <div id="seach-result">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="home">
        <div class="row">
            <div class="container">
                <div class="department mt50">
                    <div class="dept-area" style=""><div class="waike-home plline"><div class="waike-home-bottom dept-bottom-img"></div></div></div>
                    <div class="dept-area"><div class="guke-home plline"><div class="guke-home-bottom dept-bottom-img"></div></div></div>
                    <div class="dept-area"><div class="fuchanke-home plline"><div class="fuchanke-home-bottom dept-bottom-img"></div></div></div>
                    <div class="dept-area"><div class="xiaoerke-home plline"><div class="xiaoerke-home-bottom dept-bottom-img"></div></div></div>
                    <div class="dept-area"><div class="wuguanke-home plline"><div class="wuguanke-home-bottom dept-bottom-img"></div></div></div>
                    <div class="dept-area"><div class="neike-home"><div class="neike-home-bottom dept-bottom-img"></div></div></div>
                    <div class="clearfix"></div>
                </div>
                <!--                <div class="expert">
                                     Nav tabs 
                                    <ul class="nav nav-tabs mt30" role="tablist">
                                        <li class="active category"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 1)); ?>" data-page="dept1" target="_blank"><span class="waike-small"></span>外科</a></li>
                                        <li class="category text-center"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 13)); ?>" data-page="dept2" target="_blank"><span class="guke-small"></span>骨科</a></li>
                                        <li class="category"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 18)); ?>" data-page="dept3" target="_blank"><span class="fuchanke-small"></span>妇产科</a></li>
                                        <li class="category"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 21)); ?>" data-page="dept4" target="_blank"><span class="xiaoerke-small"></span>小儿外科</a></li>
                                        <li class="category"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 28)); ?>" data-page="dept5" target="_blank"><span class="wuguanke-small"></span>五官科</a></li>
                                        <li class="category last"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 31)); ?>" data-page="dept6" target="_blank"><span class="neike-small"></span>内科</a></li>
                                    </ul>
                                     Tab panes 
                                    <div class="tab-content expList">
                
                                    </div>
                                    <a href="<?php echo $urlDoctorSearchByDiseaseSubCategory; ?>" class="pull-right mt20 color-blue more-expert" target="_blank">更多专家></a>
                                    <div class="clearfix"></div>
                                </div>-->
            </div>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="row">
            <div class="container mt50">
                <div class="row">
                    <div class="col-md-9 pr0">
                        <a href="<?php echo $this->createUrl('event/view', array('page' => 'shapinghealth')); ?>" target="_blank">
                            <img class="img-responsive home-event-img" src="<?php echo $urlResImage; ?>home/zhuanti.jpg"/>
                        </a>
                    </div>
                    <div class="col-md-3 pl0 pr0 home-small-event-img">
                        <div><a href="<?php echo $this->createUrl('event/view', array('page' => 'mingyiyizhen')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>home/mingyiyizhen.jpg"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   备份的医生切换 <div class="container-fluid mt50">
            <div class="row">
                <div class="container">
                    <div class="row home-expList">
                        <div class="col-md-3" style="">
                            <div class="row">
                                <div class="col-md-6 pr0"><div class="" style="background-color:#87ccc5;"><img src="<?php echo $urlResImage; ?>home/expert.png"></div></div>
                                <div class="col-md-6 pl0 pr0">
                                    <div class="text-center department-choose"><div class="home-waike-small home-dept-small"></div></div>
                                    <div class="text-center department-choose"><div class="home-guke-small home-dept-small"></div></div>
                                    <div class="text-center department-choose"><div class="home-wuguanke-small home-dept-small"></div></div>
                                    <div class="text-center department-choose"><div class="home-fuchanke-small home-dept-small"></div></div>
                                    <div class="text-center department-choose"><div class="home-xiaoerke-small home-dept-small"></div></div>
                                    <div class="text-center department-choose-last"><div class="home-neike-small home-dept-small"></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="tab-content expList">
                                    <div role="tabpanel" class="tab-pane active" id="dept1">1</div>
                                    <div role="tabpanel" class="tab-pane active" id="dept2">2</div>
                                    <div role="tabpanel" class="tab-pane active" id="dept3">3</div>
                                    <div role="tabpanel" class="tab-pane active" id="dept4">4</div>
                                    <div role="tabpanel" class="tab-pane active" id="dept5">5</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

    <div class="container-fluid mt50">
        <div class="row">
            <div class="container">
                <div class="row home-expList expert">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-6 pr0"><div class="" style="background-color:#87ccc5;"><img src="<?php echo $urlResImage; ?>home/expert.png"></div></div>
                            <div class="col-md-6 pl0">

<!--                                <li class="active category"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 1)); ?>" data-page="dept1" target="_blank"><span class="waike-small"></span>外科</a></li>
                                <li class="category text-center"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 13)); ?>" data-page="dept2" target="_blank"><span class="guke-small"></span>骨科</a></li>
                                <li class="category"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 18)); ?>" data-page="dept3" target="_blank"><span class="fuchanke-small"></span>妇产科</a></li>
                                <li class="category"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 21)); ?>" data-page="dept4" target="_blank"><span class="xiaoerke-small"></span>小儿外科</a></li>
                                <li class="category"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 28)); ?>" data-page="dept5" target="_blank"><span class="wuguanke-small"></span>五官科</a></li>
                                <li class="category last"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 31)); ?>" data-page="dept6" target="_blank"><span class="neike-small"></span>内科</a></li>-->

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <div class="text-center department-choose category active"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 1)); ?>" data-page="dept1" target="_blank"><div class="home-waike-small home-dept-small"></div></a></div>
                                    <div class="text-center department-choose category"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 13)); ?>" data-page="dept2" target="_blank"><div class="home-guke-small home-dept-small"></div></a></div>
                                    <div class="text-center department-choose category"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 21)); ?>" data-page="dept4" target="_blank"><div class="home-fuchanke-small home-dept-small"></div></a></div>
                                    <div class="text-center department-choose category"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 18)); ?>" data-page="dept3" target="_blank"><div class="home-wuguanke-small home-dept-small"></div></a></div>
                                    <div class="text-center department-choose category"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 28)); ?>" data-page="dept5" target="_blank"><div class="home-xiaoerke-small home-dept-small"></div></a></div>
                                    <div class="text-center department-choose-last category"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 31)); ?>" data-page="dept6" target="_blank"><div class="home-neike-small home-dept-small"></div></a></div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content expList">
                        </div>
                        <div class="text-center"><span class="home-expslider1 ml10"></span><span class="home-expslider2 ml10"></span><span class="home-expslider3 ml10"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid " >
        <div class="row">
            <div class="container home-event">
                <div id="homeads" class="text-right mt50 img-responsive" >
                    <div class="mt-fix">
                        <ul class="bxslider">                           
                        </ul>
                    </div>
                </div>
                <div class="text-right mt10"><div class="learn-more-event"><a href="<?php echo $this->createUrl('event/view', array('page' => 'eventList')); ?>" target="_blank">更多</a></div></div>
            </div>
        </div>
    </div>

    <div class="container-fluid " >
        <div class="row">
            <div class="container" id="service-circuit-home">
                <div class="text-center service-header"><span class="short-line"></span><span class="content">服务流程</span><span class="short-line"></span></div>
                <div class="service-line"></div>
                <div class="service-circuit">
                    <div class="step active" id="step1">
                        <div class="number-icon">1</div>
                        <div class="content">提交预约</div>
                    </div>
                    <div class="step" id="step2">
                        <div class="number-icon">2</div>
                        <div class="content">客服回访确认</div>
                    </div>
                    <div class="step" id="step3">
                        <div class="number-icon">3</div>
                        <div class="content">匹配对症专家</div>
                    </div>
                    <div class="step" id="step4">
                        <div class="number-icon">4</div>
                        <div class="content">确定就诊时间</div>
                    </div>
                    <div class="step" id="step5">
                        <div class="number-icon">5</div>
                        <div class="content">前往医院就诊</div>
                    </div>
                </div>
            </div>
        </div>
        <!--科室-->
        <!--    <div class="container-fluid bg-gray" >
                <div class="row">
                    <div class="container">           
                        <div class="text-center title">
                            <div class="title-lg">顶尖科室</div>
                            <div class="title-sm">做手术就找名医主刀</div>					
                        </div>         
                        <div class="row mt10 mb50">
                            <div class="col-sm-6 col-md-4 mt20">
                                <a target="_blank" href="<?php //echo $this->createUrl('hospital/top', array('disease_sub_category' => 1));             ?>">
                                    <div class="faculty waike pull-left"></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 mt20">
                                <a target="_blank" href="<?php //echo $this->createUrl('hospital/top', array('disease_sub_category' => 13));             ?>">
                                    <div class="faculty guke" style="float:left;margin-left:17px;"></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 mt20">
                                <a target="_blank" href="<?php // echo $this->createUrl('hospital/top', array('disease_sub_category' => 18));             ?>">
                                    <div class="faculty fuchanke pull-right"></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 mt20">
                                <a target="_blank" href="<?php //echo $this->createUrl('hospital/top', array('disease_sub_category' => 21));             ?>">
                                    <div class="faculty xiaoerwaike pull-left"></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 mt20">
                                <a target="_blank" href="<?php // echo $this->createUrl('hospital/top', array('disease_sub_category' => 28));             ?>">
                                    <div class="faculty wuguanke" style="float:left;margin-left:17px;"></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 mt20">
                                <a target="_blank" href="<?php // echo $this->createUrl('hospital/top', array('disease_sub_category' => 31));             ?>">
                                    <div class="faculty neike pull-right"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

</section>
<script>
    $(document).ready(function () {
        $('#home .department .dept-area').hover(function () {
            $('.dept-bottom-img', this).stop().animate({
                height: '80px'
            });
        }, function () {
            $('.dept-bottom-img', this).stop().animate({
                height: '0'
            });
        });
        $html = '<li><div class="shapinghealth"><a href="<?php echo $this->createUrl('event/view', array('page' => 'shapinghealth')); ?>" target="_blank"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146156825972489" alt="" class="img-responsive"></a></div></li>' +
                '<li><div class="winegirl"><a href="<?php echo $this->createUrl('event/view', array('page' => 'winegirl')); ?>" target="_blank"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/14607127350956" alt="" class="img-responsive"></a></div></li>' +
                '<li><div class="robot"><a href="<?php echo $this->createUrl('event/view', array('page' => 'robot')); ?>" target="_blank"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009492190148" alt="" class="img-responsive"></a></div></li>' +
                '<li><div class="cataract"><a href="<?php echo $this->createUrl('event/view', array('page' => 'cataract')); ?>" target="_blank"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009492155191" alt="" class="img-responsive"></a></div></li>';
        $('#homeads .bxslider').html($html);
        //服务流程步骤跳转
        var i = 2;
        function stepActive() {
            if (i < 6) {
                $(".service-circuit .step").removeClass("active");
                $(".service-circuit #step" + i).addClass("active");
                i++;
            }
            if (i == 6) {
                i = 1;
            }
        }
        setInterval(stepActive, 3000);

        var urlDoctorView = '<?php echo $urlDoctorView; ?>';
        ajaxLoadDoctor('<?php echo $urlRecommendedDoctors; ?>', urlDoctorView);
        //轮播
        var adsbxslider = $('#homeads .bxslider').bxSlider({
            mode: 'fade',
            slideMargin: 0,
            controls: true,
            pause: 3000,
            speed: 0,
            auto: true
        });
        $("#homeads .bx-wrapper").mouseover(function () {
            adsbxslider.stopAuto();
            $("#homeads .bx-controls-direction").show();
        });
        $("#homeads .bx-wrapper").mouseout(function () {
            adsbxslider.startAuto();
            $("#homeads .bx-controls-direction").hide();
        });

    });
    function ajaxSearchByKeyWord(keyword) {
        var urlSearch = '<?php echo $urlSearchByKeyWord; ?>' + keyword;
        //解决IE搜索时编码问题
        var urlSearch = encodeURI(urlSearch);
        $.ajax({
            url: urlSearch,
            success: function (data) {
                setResultHtml(data.results, keyword);
            },
            error: function () {
                setResultHtml('', keyword);
            }
        });
    }
    function setResultHtml(results, keyword) {
        var innerHtml = '';
        var headerTabHtml = '';
        if (results) {
            var resultsNum = 0;
            if (results.doctors) {
                var doctors = results.doctors;
                resultsNum += doctors.length;
                headerTabHtml += '<li class="category"><a class="doctor" data-page="doctor" target="_blank">医生</a></li>';
                innerHtml += '<div id="doctor" class="result-tab">';
                for (var i = 0; i < doctors.length; i++) {
                    var doctor = doctors[i];
                    var hpDeptName = doctor.hpDeptName == null ? '' : ' ' + doctor.hpDeptName;
                    var aTitle = doctor.aTitle == '无' ? '' : ' ' + doctor.aTitle;
                    innerHtml += '<div><a target="_blank" class="doctor" href="<?php echo $urlDoctorView ?>' + doctor.id + '"><span class="strong name">' + setResultsNameActive(doctor.name, keyword) + '</span> （' + doctor.hpName + hpDeptName + ' ' + doctor.mTitle + aTitle + '）</a><a target="_blank" href="<?php echo $urlDoctorView ?>' + doctor.id + '" class="pull-right detail">进入医生详情页</a></div>';
                }
                innerHtml += '</div>';
            }
            if (results.diseases) {
                var diseases = results.diseases;
                headerTabHtml += '<li class="category"><a class="disease" data-page="disease" target="_blank">疾病</a></li>';
                resultsNum += diseases.length;
                innerHtml += '<div id="disease" class="result-tab">';
                for (var i = 0; i < diseases.length; i++) {
                    var disease = diseases[i];
                    var urlSearchHp = encodeURI('<?php echo $urlHopitalSearch ?>?disease=' + disease.id);
                    var urlSearchDoctor = encodeURI('<?php echo $urlDoctorSearch ?>?disease_name=' + disease.name);
                    innerHtml += '<div class="department"><span class="strong name">' + setResultsNameActive(disease.name, keyword) + '</span><a href="' + urlSearchHp + '" target="_blank" class="pull-right detail">找医院</a><a href="' + urlSearchDoctor + '" target="_blank" class="pull-right detail mr15">找名医</a></div>';
                }
                innerHtml += '</div>';
            }
            if (results.diseaseCategorys) {
                var diseaseCategorys = results.diseaseCategorys;
                headerTabHtml += '<li class="category"><a class="diseaseCategory" data-page="diseaseCategory" target="_blank">科室</a></li>';
                resultsNum += diseaseCategorys.length;
                innerHtml += '<div id="diseaseCategory" class="result-tab">';
                for (var i = 0; i < diseaseCategorys.length; i++) {
                    var diseaseCategory = diseaseCategorys[i];
                    var urlSearchHp = encodeURI('<?php echo $urlHopitalSearch ?>?disease_sub_category=' + diseaseCategory.id);
                    var urlSearchDoctor = encodeURI('<?php echo $urlDoctorSearch ?>?disease_sub_category=' + diseaseCategory.id);
                    innerHtml += '<div class="department"><span class="strong name">' + setResultsNameActive(diseaseCategory.name, keyword) + '</span><a href="' + urlSearchHp + '" target="_blank" class="pull-right detail">找医院</a><a href="' + urlSearchDoctor + '" target="_blank" class="pull-right detail mr15">找名医</a></div>';
                }
                innerHtml += '</div>';
            }
            if (results.hospitals) {
                var hospitals = results.hospitals;
                headerTabHtml += '<li class="category"><a class="hospital" data-page="hospital" target="_blank">医院</a></li>';
                resultsNum += hospitals.length;
                innerHtml += '<div id="hospital" class="result-tab">';
                for (var i = 0; i < hospitals.length; i++) {
                    var hospital = hospitals[i];
                    innerHtml += '<div><a target="_blank" class="doctor" href="<?php echo $urlHospitalView ?>' + hospital.id + '"><span class="strong name">' + setResultsNameActive(hospital.shortName, keyword) + '（' + setResultsNameActive(hospital.name, keyword) + '）</span></a><a target="_blank" href="<?php echo $urlHospitalView ?>' + hospital.id + '" class="pull-right detail">进入医院详情页</a></div>';
                }
                innerHtml += '</div>';
            }
            if (resultsNum <= 6) {
                innerHtml += '<div class="search-tip mt30"><div>没有找到您想要的结果？换个词再搜搜看。</div><div>您也可以拨打客服热线400-6277-120，名医助手将会为您提供一对一的服务，找到合适的顶尖专家为您主刀。</div></div>';
            }
            $('.search-display-header .nav-tabs').show();
            if (!results.doctors && !results.diseases && !results.diseaseCategorys && !results.hospitals) {
                innerHtml = '<div>没有搜到与<span class="keyword">"' + keyword + '"</span>相关信息</div><div class="search-tip mt30"><div>没有找到您想要的结果？换个词再搜搜看。</div><div>您也可以拨打客服热线400-6277-120，名医助手将会为您提供一对一的服务，找到合适的顶尖专家为您主刀。</div></div>';
                $('.search-display-header .nav-tabs').hide();
            }
        } else {
            innerHtml = '<div>没有搜到<span class="keyword">"' + keyword + '"</span>相关信息</div><div class="search-tip mt30"><div>没有找到您想要的结果？换个词再搜搜看。</div><div>您也可以拨打客服热线400-6277-120，名医助手将会为您提供一对一的服务，找到合适的顶尖专家为您主刀。</div></div>';
        }
        $('#seach-result').html(innerHtml);
        $('.search-display-header .nav-tabs').html(headerTabHtml);
        setResultShow(results);
        initSearchResultTab();
        $('#search-display').show();
    }

</script>
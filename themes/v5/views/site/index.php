<?php
$this->pageTitle='三甲医院手术预约,专家,主任医生手术,床位预约_名医主刀网';
$this->htmlMetaKeywords = '预约手术,专家手术,名医主刀网';
$this->htmlMetaDescription ='名医随时有,手术不再难!【名医主刀】汇聚国内外顶级名医和床位资源,利用互联网技术实现医患精准匹配,帮助广大患者在第一时间预约到名医专家进行主刀治疗-www.mingyizhudao.com';
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/home.js?v=' . time(), CClientScript::POS_HEAD);
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
<section id="site-content" class="home-bg">
    <div class="container-fluid bg-lunbo h500">
        <div class="row">
            <div class="container home-header">
                <div class="home-slogn text-center">
                    <div class="home-title">
                        <div>
                            <span class="slogan-lg strong color-green">做手术就找名医主刀</span>
                        </div>
                        <div>
                            <span class="slogan-sm color-green">国内最大的互联网医疗手术平台</span>
                        </div>
                    </div>
<!--                    <div class="mt40">
                        <a id="show_top" class="btn btn-home color-green" >为什么选择名医主刀?</a>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid home-search">
        <div class="row">
            <div class="container">
                <div class="form-inline text-center" id="home-search-form">
                    <div class="form-group search-frame">
                        <input type="text" class="form-control input-area disease-name" placeholder="请输入医生姓名、确诊疾病、医院名称">
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
                <div class="department">
                    <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 1)); ?>"><div class="dept-area"><div class="waike-home plline"><div class="waike-home-bottom dept-bottom-img"></div></div></div></a>
                    <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 13)); ?>"><div class="dept-area"><div class="guke-home plline"><div class="guke-home-bottom dept-bottom-img"></div></div></div></a>
                    <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 18)); ?>"><div class="dept-area"><div class="fuchanke-home plline"><div class="fuchanke-home-bottom dept-bottom-img"></div></div></div></a>
                    <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 21)); ?>"><div class="dept-area"><div class="xiaoerke-home plline"><div class="xiaoerke-home-bottom dept-bottom-img"></div></div></div></a>
                    <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 28)); ?>"><div class="dept-area"><div class="wuguanke-home plline"><div class="wuguanke-home-bottom dept-bottom-img"></div></div></div></a>
                    <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 31)); ?>"><div class="dept-area"><div class="neike-home"><div class="neike-home-bottom dept-bottom-img"></div></div></div></a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 pr0 mt50">
                        <a href="<?php echo $this->createUrl('event/view', array('page' => 'cooperation')); ?>" target="_blank">
                            <img class="img-responsive home-event-img" src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146837977635481"/>
                        </a>
                    </div>
                    <div class="col-md-3 pl0 pr0 home-small-event-img mt50">
                        <div><a href="<?php echo $this->createUrl('event/view', array('page' => 'mingyiyizhen')); ?>" target="_blank"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146310859981873"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt50">
        <div class="row">
            <div class="container">
                <div class="row home-expList expert">
                    <div class="col-sm-3">
                        <div class="row">
                            <div class="col-md-6 pr0"><div class="expertlist-logo"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146310768121918"></div></div>
                            <div class="col-md-6 expertlist-deptmark">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <a  href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 1)); ?>" data-page="dept1" target="_blank" class="category active "><div class="text-center department-choose department-choose-first"><div class="home-waike-small home-dept-small"></div></div><div><img class="home-expcorner" src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146312014238541"></div><div class="clearfix"></div></a>
                                    <a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 13)); ?>" data-page="dept2" target="_blank" class="category"><div class="text-center department-choose"><div class="home-guke-small home-dept-small"></div></div><div><img class="home-expcorner" src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146312014238541"></div><div class="clearfix"></div></a>
                                    <a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 18)); ?>" data-page="dept4" target="_blank" class="category"><div class="text-center department-choose"><div class="home-fuchanke-small home-dept-small"></div></div><div><img class="home-expcorner" src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146312014238541"></div><div class="clearfix"></div></a>
                                    <a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 28)); ?>" data-page="dept3" target="_blank" class="category"><div class="text-center department-choose"><div class="home-wuguanke-small home-dept-small"></div></div><div><img class="home-expcorner" src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146312014238541"></div><div class="clearfix"></div></a>
                                    <a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 21)); ?>" data-page="dept5" target="_blank" class="category"><div class="text-center department-choose"><div class="home-xiaoerke-small home-dept-small"></div></div><div><img class="home-expcorner" src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146312014238541"></div><div class="clearfix"></div></a>
                                    <a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 31)); ?>" data-page="dept6" target="_blank" class="category"><div class="text-center department-choose-last"><div class="home-neike-small home-dept-small"></div></div><div><img class="home-expcorner" src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146312014238541"></div><div class="clearfix"></div></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9" >
                        <div class="bg-gray-f7 pb15">
                            <div class="tab-content expList-tab">
                            </div>
                            <div class="clearfix"></div>
                            <div class="text-center"><span class="home-expslider ml10 slider active" data-page="first-expgroup"></span><span class="home-expslider ml10 slider" data-page="second-expgroup"></span><span class="home-expslider ml10 slider" data-page="third-expgroup"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" >
        <div class="row">
            <div class="container home-event">
                <div id="homeads" class="text-right mt50 img-responsive">
                    <div class="mt-fix">
                        <ul class="bxslider">                           
                        </ul>
                    </div>
                </div>
                <div class="text-right"><a href="<?php echo $this->createUrl('event/view', array('page' => 'eventList')); ?>" target="_blank"><div class="learn-more-event">查看更多手术专题&gt;&gt;</div></a></div>
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

</section>
<script>
    $(document).ready(function () {
        $('.home-expslider').click(function () {
            $('.home-expslider').removeClass('active');
            $(this).addClass('active');
            var pageId = '.' + $(this).attr('data-page');
            $('.expgroup-slider').removeClass('active');
            $(pageId).addClass('active');
        });

        $('#home .department .dept-area').hover(function () {
            $('.dept-bottom-img', this).stop().animate({
                height: '80px'
            });
        }, function () {
            $('.dept-bottom-img', this).stop().animate({
                height: '0'
            });
        });
        $html = '<li><div class="catherine"><a href="<?php echo $this->createUrl('event/view', array('page' => 'catherine')); ?>" target="_blank"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/14653554028857" alt="" class="img-responsive"></a></div></li>' +
                '<li><div class="redcommonweal"><a href="<?php echo $this->createUrl('event/view', array('page' => 'redcommonweal')); ?>" target="_blank"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146417164772626" alt="" class="img-responsive"></a></div></li>' +
                '<li><div class="lungcancer"><a href="<?php echo $this->createUrl('event/view', array('page' => 'lungcancer')); ?>" target="_blank"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146338468582143" alt="" class="img-responsive"></a></div></li>' +
                '<li><div class="robot"><a href="<?php echo $this->createUrl('event/view', array('page' => 'robot')); ?>" target="_blank"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009492190148" alt="" class="img-responsive"></a></div></li>';
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
            pause: 5000,
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
                    var urlSearchDoctor = encodeURI('<?php echo $urlDoctorSearch ?>?disease=' + disease.id);
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
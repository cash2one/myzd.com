<?php
$this->pageTitle = '三甲医院手术预约,专家,主任医生手术,床位预约_名医主刀网';
$this->htmlMetaKeywords = '预约手术,专家手术,名医主刀网';
$this->htmlMetaDescription = '名医随时有,手术不再难!【名医主刀】汇聚国内外顶级名医和床位资源,利用互联网技术实现医患精准匹配,帮助广大患者在第一时间预约到名医专家进行主刀治疗-www.mingyizhudao.com';
Yii::app()->clientScript->registerCssFile('http://static.mingyizhudao.com/pc/homeelse102.css');
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/home102.min.js', CClientScript::POS_END);
$urlLoadDoctor = $this->createUrl('api/doctor', array('api' => 4, 'page' => 1, 'pagesize' => 4, 'is_contracted' => 1, 'disease_category' => 1));
$urlRecommendedDoctors = $this->createUrl('api/recommendeddoctors');
$urlDiseaseName = $this->createUrl('api/diseasename', array('api' => 7, 'disease_name' => '')); //api/diseasename?api=7&disease_name=
$urlDoctorView = $this->createUrl('doctor/view', array('id' => ''));
$urlHospitalView = $this->createUrl('hospital/view', array('id' => ''));
$urlDoctorSearch = $this->createUrl('doctor/search');
$urlHopitalSearch = $this->createUrl('hospital/search');
$urlDoctorSearchByDiseaseSubCategory = $this->createUrl('doctor/top', array('disease_sub_category' => 1));
$urlSearchByKeyWord = $this->createUrl('api/search', array('name' => ''));
$urlBaseUrl = Yii::app()->params['baseUrl'];
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
    <div class="container-fluid ">
        <div class="row">
            <div class="container home-event">
                <div class="row">
                    <div class="col-md-9 pr0">
                        <div id="homeads" class="text-right mt50 img-responsive">
                            <div class="mt-fix">
                                <ul class="bxslider">                           
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pl0 pr0 home-small-event-img mt50">
                        <div><a href="<?php echo $this->createUrl('event/view', array('page' => 'mingyiyizhen')); ?>" target="_blank"><img src="http://static.mingyizhudao.com/146310859981873"></a></div>
                    </div>
                </div>
                <div class="text-right"><a href="<?php echo $this->createUrl('event/view', array('page' => 'eventList')); ?>" target="_blank"><div class="learn-more-event">查看更多专题&gt;</div></a></div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt50">
        <div class="row">
            <div class="container">
                <div class="text-21">顶尖科室</div><a href="<?php echo $this->createUrl('hospital/department'); ?>" target="_blank"><div class="home-more-dept text-14 mt10">全部科室&gt;</div></a>
                <div class="row">
                    <div class="home-department mt50">
                        <div class="col-sm-3 column-right">
                            <a href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 101)); ?>"target="_blank">
                                <div class="bg-department">
                                    <div class="bg-puwaike"></div>
                                    <div class="text-21-right">普外科</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 column-right">
                            <a href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 102)); ?>"target="_blank">
                                <div class="bg-department ">
                                    <div class="bg-guke"></div>
                                    <div class="text-21-right">骨科</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 column-right">
                            <a href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 103)); ?>"target="_blank">
                                <div class="bg-department ">
                                    <div class="bg-shenwai"></div>
                                    <div class="text-21-right">神经外科</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 ">
                            <a href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 104)); ?>"target="_blank">
                                <div class="bg-department ">
                                    <div class="bg-miniaoke"></div>
                                    <div class="text-21-right">泌尿外科</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 mt20 column-right">
                            <a href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 105)); ?>"target="_blank">
                                <div class="bg-department">
                                    <div class="bg-xiongwaike"></div>
                                    <div class="text-21-right">胸外科</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 mt20 column-right">
                            <a href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 108)); ?>"target="_blank">
                                <div class="bg-department ">
                                    <div class="bg-yanke"></div>
                                    <div class="text-21-right">眼科</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 mt20 column-right">
                            <a href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 106)); ?>"target="_blank">
                                <div class="bg-department">
                                    <div class="bg-xinxueguan"></div>
                                    <div class="text-21-right">心血管外科</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 mt20">
                            <a href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 109)); ?>"target="_blank">
                                <div class="bg-department">
                                    <div class="bg-erbihouke"></div>
                                    <div class="text-21-right">耳鼻喉科</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt50">
        <div class="row">
            <div class="container">
                <div class="text-21">名医主刀</div>
                <div class="row home-expList">
                    <ul class="nav nav-tabs mt50 ">
                        <li class="recommended-department active" style="margin-left:15px;" href="recommended-doctor1">普外科</li>
                        <li class="recommended-department" href="recommended-doctor2">骨科</li>
                        <li class="recommended-department" href="recommended-doctor3">神经外科</li>
                        <li class="recommended-department" href="recommended-doctor4">泌尿外科</li>
                        <li class="recommended-department" href="recommended-doctor5">胸外科</li>
                        <li class="recommended-department" href="recommended-doctor6">眼科</li>
                        <li class="recommended-department" href="recommended-doctor7">心血管外科</li>
                        <li class="recommended-department" href="recommended-doctor8">耳鼻喉科</li>
                        <li class="recommended-department" href="recommended-doctor9">整形外科</li>
                        <li class="recommended-department" href="recommended-doctor10">颌面外科</li>
                        <li class="recommended-department" href="recommended-doctor11">妇科</li>
                        <li class="recommended-department" href="recommended-doctor12">小儿外科</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt30">
        <div class="row">
            <div class="container">
                <div class="expList-tab row">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
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
    </div>

    <!--0元面诊-->        
    <div class="container-fluid" id="bouncedhide">
        <div class="row">
            <div class="homepage-bounced-all">
                <div class="homepage-bounced-fork"id="homeforkone">
                </div>
            </div>
            <div class="container">
                <div class="homepage-bounced">
                    <a href="<?php echo $this->createUrl('event/view', array('page' => 'zeroconsultation')); ?>" target="_blank">
                        <img src="http://static.mingyizhudao.com/14690924509732">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .home-more-dept:hover{text-decoration:underline;}
    .home-expList .recommended-department.active, .home-expList .recommended-department:hover{}
</style>
<script>
    $(document).ready(function () {
        $html = '<li><div class="shareEconomic"><a href="<?php echo $this->createUrl('event/view', array('page' => 'shareEconomic')); ?>" target="_blank"><img src="http://static.mingyizhudao.com/147419072489754" alt="" class="img-responsive"></a></div></li>' +
                '<li><div class="loseweight"><a href="<?php echo $this->createUrl('event/view', array('page' => 'loseweight')); ?>" target="_blank"><img src="http://static.mingyizhudao.com/147505151627490" alt="" class="img-responsive"></a></div></li>' +
                '<li><div class="loseWeightSurgery"><a href="<?php echo $this->createUrl('event/view', array('page' => 'loseWeightSurgery')); ?>" target="_blank"><img src="http://static.mingyizhudao.com/14733163619513" alt="" class="img-responsive"></a></div></li>' +
                '<li><div class="IQQAtechnology"><a href="<?php echo $this->createUrl('event/view', array('page' => 'IQQAtechnology')); ?>" target="_blank"><img src="http://static.mingyizhudao.com/147321875452189" alt="" class="img-responsive"></a></div></li>' +
                '<li><div class="MaChengOperationCenter"><a href="<?php echo $this->createUrl('event/view', array('page' => 'MaChengOperationCenter')); ?>" target="_blank"><img src="http://static.mingyizhudao.com/147331657675720" alt="" class="img-responsive"></a></div></li>';
        $('#homeads .bxslider').html($html);
        var urlDoctorView = '<?php echo $urlDoctorView; ?>';
        ajaxLoadDoctor('<?php echo $urlRecommendedDoctors; ?>', urlDoctorView);
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
                    innerHtml += '<div><a target="_blank" class="doctor" href="<?php echo $urlBaseUrl ?>' + '/hospital-view-id-' + hospital.id + '.html"><span class="strong name">' + setResultsNameActive(hospital.shortName, keyword) + '（' + setResultsNameActive(hospital.name, keyword) + '）</span></a><a target="_blank" href="<?php echo $urlBaseUrl ?>' + '/hospital-view-id-' + hospital.id + '.html" class="pull-right detail">进入医院详情页</a></div>';
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
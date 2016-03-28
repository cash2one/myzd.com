<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/home.js', CClientScript::POS_HEAD);
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlLoadDoctor = $this->createUrl('api/doctor', array('api' => 4, 'page' => 1, 'pagesize' => 4, 'is_contracted' => 1, 'disease_category' => 1));
$urlRecommendedDoctors = $this->createUrl('api/recommendeddoctors');
$urlDiseaseName = $this->createUrl('api/diseasename', array('api' => 7, 'disease_name' => '')); //api/diseasename?api=7&disease_name=
$urlDoctorView = $this->createUrl('doctor/view', array('id' => ''));
$urlDoctorSearch = $this->createUrl('doctor/search');
$urlHopitalSearch = $this->createUrl('hospital/search');
$urlDoctorSearchByDiseaseSubCategory = $this->createUrl('doctor/top', array('disease_sub_category' => 1));
$urlSearchByKeyWord = $this->createUrl('api/search', array('name' => ''));
?>
<section id="site-content">
    <div class="container-fluid bg-lunbo">
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
                <div class="clearfix mt18"></div>
                <div class="form-inline" id="home-search-form">
                    <div class="form-group w100">
                        <input type="text" class="form-control input-area disease-name" placeholder="请输入确诊疾病或医生姓名">
                    </div>
                </div>
                <div id="search-display">
                    <div class="search-display-header"><span>您是不是想找</span><span class="pull-right clearhistory">清除搜索记录</span></div>
                    <div id="seach-result">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pb50 bg-gray">
        <div class="row">
            <div class="container">
                <div class="text-center title">
                    <div class="title-lg">权威专家</div>
                    <div class="title-sm">做手术就找名医主刀</div>			
                </div>
                <div class="expert">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs mt30" role="tablist">
                        <li class="active category text-center"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 1)); ?>" data-page="dept1" target="_blank"><img src="<?php echo $urlResImage; ?>icons/waike.png">外科</a></li>
                        <li class="category text-center"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 13)); ?>" data-page="dept2" target="_blank"><img src="<?php echo $urlResImage; ?>icons/guke.png"> 骨科</a></li>
                        <li class="category text-center"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 18)); ?>" data-page="dept3" target="_blank"><img src="<?php echo $urlResImage; ?>icons/fuchanke.png">妇产科</a></li>
                        <li class="category text-center"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 21)); ?>" data-page="dept4" target="_blank"><img src="<?php echo $urlResImage; ?>icons/xiaoerke.png">小儿外科</a></li>
                        <li class="category text-center"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 28)); ?>" data-page="dept5" target="_blank"><img src="<?php echo $urlResImage; ?>icons/wuguanke.png">五官科</a></li>
                        <li class="category text-center last"><a href="<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => 31)); ?>" data-page="dept6" target="_blank"><img src="<?php echo $urlResImage; ?>icons/neike.png">内科</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content expList">

                    </div>
                    <a href="<?php echo $urlDoctorSearchByDiseaseSubCategory; ?>" class="pull-right mt20 color-blue more-expert" target="_blank">更多专家></a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid " >
        <div class="row">
            <div class="container">
                <div id="homeads" class="text-right mt50 mb50 img-responsive" >
                    <div class="mt-fix">
                        <ul class="bxslider">                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-gray" >
        <div class="row">
            <div class="container">           
                <div class="text-center title">
                    <div class="title-lg">顶尖科室</div>
                    <div class="title-sm">做手术就找名医主刀</div>					
                </div>         
                <div class="row mt10 mb50">
                    <div class="col-sm-6 col-md-4 mt20">
                        <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 1)); ?>">
                            <div class="faculty waike pull-left"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 13)); ?>">
                            <div class="faculty guke" style="float:left;margin-left:17px;"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 18)); ?>">
                            <div class="faculty fuchanke pull-right"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 21)); ?>">
                            <div class="faculty xiaoerwaike pull-left"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 28)); ?>">
                            <div class="faculty wuguanke" style="float:left;margin-left:17px;"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 31)); ?>">
                            <div class="faculty neike pull-right"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row">
            <div class="container mt50">
                <div class="row">
                    <div class="col-md-8">
                        <a href="<?php echo $this->createUrl('event/view', array('page' => 'millionfund')); ?>" target="_blank">
                            <img class="img-responsive h300" src="<?php echo $urlResImage; ?>homeslider/millionfund.png"/>
                        </a>
                    </div>
                    <div class="col-md-4 pl20">
                        <div><span class="text18 color-blue">精彩推荐</span><img class="ml10 mb5" src="<?php echo $urlResImage; ?>icons/icon_change.png"><div class="pull-right change" href="#carousel-example-generic" role="button" data-slide="next">换一批</div><div class="clearfix"></div></div>
                        <div><div class="divide-line-black"></div></div>

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-sm-4 mt18">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'tumor')); ?>" target="_blank">
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider1.png"/>
                                                <div class="slider-text">滚蛋吧肿瘤君</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt18">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'preliverdisease')); ?>" target="_blank">
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider2.png"/>
                                                <div class="slider-text">秋后肝病预防</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt18">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'thyroid')); ?>" target="_blank">
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider3.png"/>
                                                <div class="slider-text">甲状腺预防</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 mt30">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'ruxianai')); ?>" target="_blank">
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider4.png"/>
                                                <div class="slider-text">关爱女性</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt30">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'xinxueguan')); ?>" target="_blank">
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider5.png"/>
                                                <div class="slider-text">警惕心血管病</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt30 ">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'guanxinbing')); ?>" target="_blank">
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider6.png"/>
                                                <div class="slider-text">预防冠心病</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-4 mt18">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'ertai')); ?>" target="_blank">
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider7.png"/>
                                                <div class="slider-text">名医宝驾护航</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt18">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'doctorInterview')); ?>" target="_blank">
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider8.png"/>
                                                <div class="slider-text">任善成专访</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt18">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'dididoctor')); ?>" target="_blank">
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider10.png"/>
                                                <div class="slider-text">滴滴医生</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-sm-4 mt30">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'nationalday')); ?>" target="_blank">
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider11.png"/>
                                                <div class="slider-text">摔伤怎么办</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt30">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'rectalcancer')); ?>" target="_blank">
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider12.png"/>
                                                <div class="slider-text">大肠癌</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt30">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'lujinsong')); ?>" target="_blank">
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider9.png"/>
                                                <div class="slider-text">陆劲松专访</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row" style="margin-bottom:148px;">
                                        <div class="col-sm-4 mt18">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'xinyabang')); ?>" target="_blank">
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider13.png"/>
                                                <div class="slider-text">50强榜单</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $html = '<li><div class="robot"><a href="<?php echo $this->createUrl('event/view', array('page' => 'robot')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>homeslider/bg-robot.png" alt="" class="img-responsive"></a></div></li>' +
                '<li><div class="cataract"><a href="<?php echo $this->createUrl('event/view', array('page' => 'cataract')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>homeslider/bg_cataract.png" alt="" class="img-responsive"></a></div></li>' +
                '<li><div class="prince"><a href="<?php echo $this->createUrl('event/view', array('page' => 'prince')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>homeslider/bg_prince.jpg" alt="" class="img-responsive"></a></div></li>' +
                '<li><div class="cancer"><a href="<?php echo $this->createUrl('event/view', array('page' => 'cancer')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>homeslider/bg_cancer.jpg" alt="" class="img-responsive"></a></div></li>';
        $('#homeads .bxslider').html($html);
        var adsbxslider = $('#homeads .bxslider').bxSlider({
            mode: 'fade',
            slideMargin: 0,
            controls: true,
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
        var urlDoctorView = '<?php echo $urlDoctorView; ?>';
        ajaxLoadDoctor('<?php echo $urlRecommendedDoctors; ?>', urlDoctorView);
        //搜索功能
        var t;
        $('#home-search-form .disease-name').keyup(function (event) {
            var keyword = $(this).val();
            keyword = $.trim(keyword);
            if (!keyword) {
                $('#search-display').hide();
            }
            clearTimeout(t);
            t = setTimeout(function () {
                if (keyword) {
                    ajaxSearchByKeyWord(keyword);
                }
            }, 300);

        }).focus(function () {
            var keyword = $(this).val();
            keyword = $.trim(keyword);
            if (!keyword) {
                $('#search-display').hide();
            } else {
                $('#search-display').show();
                //ajaxSearchByKeyWord(keyword);
            }
        }).click(function (e) {
            if ($('#search-display').is(':visible')) {
                $('#search-display').show();
            } else {
                $('#search-display').hide();
            }
            e.stopPropagation();
        });
        //清除记录
        $('#search-display .clearhistory').click(function () {
            $('#seach-result').html('');
            $('#home-search-form .disease-name').val('');
        });
        //search-display隐藏/显示
        $('.home-search #search-display').click(function (e) {
            $('#search-display').show();
            e.stopPropagation();
        });
        $(document).click(function () {
            $('#search-display').hide();
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
            }
        });
    }
    function setResultHtml(results, keyword) {
        var innerHtml = '';
        if (results) {
            var resultsNum = 0;
            if (results.doctors) {
                var doctors = results.doctors;
                resultsNum += doctors.length;
                for (var i = 0; i < doctors.length; i++) {
                    var doctor = doctors[i];
                    var hpDeptName = doctor.hpDeptName == null ? '' : ' ' + doctor.hpDeptName;
                    var aTitle = doctor.aTitle == '无' ? '' : ' ' + doctor.aTitle;
                    innerHtml += '<div><a target="_blank" class="doctor" href="<?php echo $urlDoctorView ?>' + doctor.id + '"><span class="strong name">' + setResultsNameActive(doctor.name, keyword) + '</span> （' + doctor.hpName + hpDeptName + ' ' + doctor.mTitle + aTitle + '）</a><a target="_blank" href="<?php echo $urlDoctorView ?>' + doctor.id + '" class="pull-right detail">进入详情页</a></div>';
                }
            }
            if (results.diseases) {
                var diseases = results.diseases;
                resultsNum += diseases.length;
                for (var i = 0; i < diseases.length; i++) {
                    var disease = diseases[i];
                    var urlSearchHp = encodeURI('<?php echo $urlHopitalSearch ?>?disease=' + disease.id);
                    var urlSearchDoctor = encodeURI('<?php echo $urlDoctorSearch ?>?disease_name=' + disease.name);
                    innerHtml += '<div class="department"><span class="strong name">' + setResultsNameActive(disease.name, keyword) + '</span><a href="' + urlSearchHp + '" target="_blank" class="pull-right detail">找医院</a><a href="' + urlSearchDoctor + '" target="_blank" class="pull-right detail mr15">找名医</a></div>';
                }

            }
            if (resultsNum <= 6) {
                innerHtml += '<div class="search-tip mt30"><div>没有找到您想要的结果？换个词再搜搜看。</div><div>您也可以拨打客服热线400-119-7900，名医助手将会为您提供一对一的服务，找到合适的顶尖专家为您主刀。</div></div>';
            }
            if (!results.doctors && !results.diseases) {
                innerHtml = '<div>没有搜到与<span class="keyword">"' + keyword + '"</span>相关信息</div><div class="search-tip mt30"><div>没有找到您想要的结果？换个词再搜搜看。</div><div>您也可以拨打客服热线400-119-7900，名医助手将会为您提供一对一的服务，找到合适的顶尖专家为您主刀。</div></div>';
            }
        } else {
            innerHtml = '<div>没有搜到<span class="keyword">"' + keyword + '"</span>相关信息</div><div class="search-tip mt30"><div>没有找到您想要的结果？换个词再搜搜看。</div><div>您也可以拨打客服热线400-119-7900，名医助手将会为您提供一对一的服务，找到合适的顶尖专家为您主刀。</div></div>';
        }
        $('#seach-result').html(innerHtml);
        $('#search-display').show();
    }
    function setResultsNameActive(name, keyword) {
        return name.replace(keyword, '<span class="active">' + keyword + '</span>');
    }
</script>
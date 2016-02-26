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
                <div class="search-top active search-top1 pull-left searchdoctor-tab">找名医</div><div class="search-top search-top2 pull-left searchhospital-tab">找科室</div><div class="clearfix"></div>
                <form class="form-inline" id="home-search-form">
                    <div class="form-group w83">
                        <input type="text" class="form-control input-area disease-name" placeholder="请输入确诊疾病">
                    </div><div class="form-group btn-group w17">
                        <button id="searchdoctor-btn" class="btn btn-yes search-size"><img class="mr10" src="<?php echo $urlResImage; ?>icons/search.png">搜&nbsp;索</button>
                        <button id="searchhospital-btn" class="btn btn-yes search-size"><img class="mr10" src="<?php echo $urlResImage; ?>icons/search.png">搜&nbsp;索</button>
                    </div>
                </form>
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
                            <div class="faculty waike img-responsive"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 13)); ?>">
                            <div class="faculty guke block-center"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 18)); ?>">
                            <div class="faculty fuchanke pull-right"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 21)); ?>">
                            <div class="faculty xiaoerwaike"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 28)); ?>">
                            <div class="faculty wuguanke block-center"></div>
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
                        <a href="<?php echo $this->createUrl('event/view', array('page' => 'rectalcancer')); ?>" target="_blank">
                            <img class="img-responsive h300" src="<?php echo $urlResImage; ?>homeslider/rectalcancer.jpg"/>
                        </a>
                    </div>
                    <div class="col-md-4 pl20">
                        <div><span class="text18 color-blue">精彩推荐</span><img class="ml10 mb5" src="<?php echo $urlResImage; ?>icons/icon_change.png"><div class="pull-right change" href="#carousel-example-generic" role="button" data-slide="next">换一批</div><div class="clearfix"></div></div>
                        <div><div class="divide-line-black"></div></div>
                        <div class="row">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="col-sm-4 mt18">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'tumor')); ?>" target="_blank">
                                                <!--                                                <div class="recommend-area color1">当肿瘤遇上名医专家</div>-->
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider1.png"/>
                                                <div class="slider-text">滚蛋吧肿瘤君</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt18">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'preliverdisease')); ?>" target="_blank">
                                                <!--                                                <div class="recommend-area color2">立秋之后怎样预防和治疗肝病</div>-->
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider2.png"/>
                                                <div class="slider-text">秋后肝病预防</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt18">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'thyroid')); ?>" target="_blank">
                                                <!--                                                <div class="recommend-area color4">甲状腺相关疾病需及早手术</div>-->
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider3.png"/>
                                                <div class="slider-text">甲状腺预防</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt30 pl5">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'ruxianai')); ?>" target="_blank">
                                                <!--                                                <div class="recommend-area color5">关爱女性，关爱乳房</div>-->
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider4.png"/>
                                                <div class="slider-text">关爱女性</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt30 pl5">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'xinxueguan')); ?>" target="_blank">
                                                <!--                                                <div class="recommend-area color6">警惕心血管疾病突发</div>-->
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider5.png"/>
                                                <div class="slider-text">警惕心血管病</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt30 ">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'guanxinbing')); ?>" target="_blank">
                                                <!--                                                <div class="recommend-area color7">预防冠心病发作，名医专家有妙招</div>-->
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider6.png"/>
                                                <div class="slider-text">预防冠心病</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-sm-4 mt18 pl5">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'ertai')); ?>" target="_blank">
                                                <!--                                                <div class="recommend-area color8">名医专家为您“宝”驾护航</div>-->
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider7.png"/>
                                                <div class="slider-text">名医宝驾护航</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt18 pl5 ml-5">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'doctorInterview')); ?>" target="_blank">
                                                <!--                                                <div class="recommend-area color9">泌尿疾病的克星：“达芬奇手术机器人”</div>-->
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider8.png"/>
                                                <div class="slider-text">任善成专访</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt18">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'lujinsong')); ?>" target="_blank">
                                                <!--                                                <div class="recommend-area color10">专访乳腺癌专家——陆劲松</div>-->
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider9.png"/>
                                                <div class="slider-text">陆劲松专访</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt30 pl5">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'dididoctor')); ?>" target="_blank">
                                                <!--                                                <div class="recommend-area color11">“滴滴医生”驾到</div>-->
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider10.png"/>
                                                <div class="slider-text">滴滴医生</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt30 pl5 ml-5">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'nationalday')); ?>" target="_blank">
                                                <!--                                                <div class="recommend-area color12">欢乐出游却不小心摔伤？</div>-->
                                                <img class="img-responsive" src="<?php echo $urlResImage; ?>homeslider/small/slider11.png"/>
                                                <div class="slider-text">摔伤怎么办</div>
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
        $html = '<li><div class="prince"><a href="<?php echo $this->createUrl('event/view', array('page' => 'prince')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>homeslider/bg_prince.jpg" alt="" class="img-responsive"></a></div></li>' +
                '<li><div class="cancer"><a href="<?php echo $this->createUrl('event/view', array('page' => 'cancer')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>homeslider/bg_cancer.jpg" alt="" class="img-responsive"></a></div></li>' +
                '<li><div class="millionfund"><a href="<?php echo $this->createUrl('event/view', array('page' => 'millionfund')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>homeslider/bg_mingYiZhuYi.jpg" alt="" class="img-responsive"></a></div></li>' +
                '<li><div class="xinyabang"><a href="<?php echo $this->createUrl('event/view', array('page' => 'xinyabang')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>homeslider/xinyabang.jpg" alt="" class="img-responsive"></a></div></li>' +
                '<li><div class="lujinsong"><a href="<?php echo $this->createUrl('event/view', array('page' => 'lujinsong')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>homeslider/lujinsong.jpg" alt="" class="img-responsive"></a></div></li>';
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
        $('#searchdoctor-btn').click(function (e) {
            e.preventDefault();
            var disease_name = $('#home-search-form .disease-name').val();
            var fullName = disease_name == '' ? '' : getDisFullNameByDisName(disease_name);
            var urlDoctorSearch = '<?php echo $urlDoctorSearch; ?>?disease_name=' + fullName;
            window.open(urlDoctorSearch);
        });
        $('#searchhospital-btn').click(function (e) {
            e.preventDefault();
            var disease_name = $('#home-search-form .disease-name').val();
            var fullName = disease_name == '' ? '' : getDisFullNameByDisName(disease_name);
            var urlHopitalSearch = '<?php echo $urlHopitalSearch; ?>?disease_name=' + fullName;
            window.open(urlHopitalSearch);
        });

        $('.category a').mouseover(function () {
            $(this).trigger("click");
        });
    });
    //根据疾病名称获取疾病全称
    function getDisFullNameByDisName(disease_name) {
        var disFullName = '';
        var urlDiseaseName = '<?php echo $urlDiseaseName; ?>' + disease_name;
        $.ajax({
            url: urlDiseaseName,
            async: false,
            success: function (data) {
                if (data.results.name) {
                    disFullName = data.results.name;
                } else {
                    disFullName = disease_name;
                }
            },
            error: function () {
                return disFullName = disease_name;
            }
        });
        return disFullName;
    }
</script>
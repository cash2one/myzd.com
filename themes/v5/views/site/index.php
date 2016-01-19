<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/home.js', CClientScript::POS_HEAD);
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlLoadDoctor = $this->createUrl('api/doctor', array('api' => 4, 'page' => 1, 'pagesize' => 4, 'is_contracted' => 1, 'disease_category' => 1));
$urlRecommendedDoctors = $this->createUrl('api/recommendeddoctors');
$urlDiseaseName = $this->createUrl('api/diseasename', array('api' => 7, 'disease_name' => '')); //api/diseasename?api=7&disease_name=
$urlDoctorView = $this->createUrl('doctor/view', array('id' => ''));
$urlDoctorSearch = $this->createUrl('doctor/search');
$urlHopitalSearch = $this->createUrl('hospital/search');
$urlDoctorSearchCategory = $this->createUrl('doctor/search', array('disease_category' => 1));
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
                <div class="search-top active search-top1 pull-left searchdoctor-tab">手术名医</div><div class="search-top search-top2 pull-left searchhospital-tab">顶尖科室</div><div class="clearfix"></div>
                <form class="form-inline" id="home-doctor-search-form">
                    <div class="form-group w83">
                        <input type="text" class="form-control input-area disease-name" placeholder="请输入确诊疾病">
                    </div><div class="form-group btn-group w17">
                        <button id="searchdoctor-btn" class="btn btn-yes search-size">搜索</button>
                    </div>
                </form>
                <form class="form-inline searchform" id="home-hospital-search-form">
                    <div class="form-group w83">
                        <input type="text" class="form-control input-area disease-name" placeholder="请输入确诊疾病">
                    </div><div class="form-group btn-group w17">
                        <button id="searchhospital-btn" class="btn btn-yes search-size">搜索</button>
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
                        <li role="presentation" class="active category text-center"><a href="#dept1" aria-controls="dept1" role="tab" data-toggle="tab">外科</a></li>
                        <li role="presentation" class="category text-center"><a href="#dept2" aria-controls="dept2" role="tab" data-toggle="tab">骨科</a></li>
                        <li role="presentation" class="category text-center"><a href="#dept3" aria-controls="dept3" role="tab" data-toggle="tab">妇产科</a></li>
                        <li role="presentation" class="category text-center"><a href="#dept4" aria-controls="dept4" role="tab" data-toggle="tab">小儿外科</a></li>
                        <li role="presentation" class="category text-center"><a href="#dept5" aria-controls="dept5" role="tab" data-toggle="tab">五官科</a></li>
                        <li role="presentation" class="category text-center last"><a href="#dept6" aria-controls="dept6" role="tab" data-toggle="tab">内科</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content expList">

                    </div>
                    <a href="<?php echo $urlDoctorSearchCategory; ?>" class="pull-right mt20 color-blue more-expert" target="_blank">更多专家></a>
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
                            <li>
                                <div class="xinyabang">
                                    <a href="<?php echo $this->createUrl('event/view', array('page' => 'xinyabang')); ?>" target="_blank">
                                        <img src="<?php echo $urlResImage; ?>homeslider/xinyabang.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="xinyabang">
                                    <a href="<?php echo $this->createUrl('event/view', array('page' => 'lujinsong')); ?>" target="_blank">
                                        <img src="<?php echo $urlResImage; ?>homeslider/lujinsong.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </li>
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
                        <a target="_blank" href="<?php echo $this->createUrl('doctor/search', array('disease_category' => 1)); ?>">
                            <div class="faculty waike img-responsive"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a target="_blank" href="<?php echo $this->createUrl('doctor/search', array('disease_category' => 2)); ?>">
                            <div class="faculty guke block-center"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a target="_blank" href="<?php echo $this->createUrl('doctor/search', array('disease_category' => 3)); ?>">
                            <div class="faculty fuchanke pull-right"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a target="_blank" href="<?php echo $this->createUrl('doctor/search', array('disease_category' => 4)); ?>">
                            <div class="faculty xiaoerwaike"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a target="_blank" href="<?php echo $this->createUrl('doctor/search', array('disease_category' => 5)); ?>">
                            <div class="faculty wuguanke block-center"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a target="_blank" href="<?php echo $this->createUrl('doctor/search', array('disease_category' => 6)); ?>">
                            <div class="faculty neike pull-right"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid " >
        <div class="row">
            <div class="container mt50">
                <div class="row">
                    <div class="col-md-8">
                        <a href="<?php echo $this->createUrl('event/view', array('page' => 'rectalcancer')); ?>" target="_blank">
                            <img class="img-responsive h300" src="<?php echo $urlResImage; ?>homeslider/rectalcancer.jpg"/>
                        </a>
                    </div>
                    <div class="col-md-4 pl20">
                        <div class="pr20"><span class="text18 color-blue">精彩推荐</span><img class="ml10 mb5" src="<?php echo $urlResImage; ?>icons/icon_change.png"><div class="pull-right change" href="#carousel-example-generic" role="button" data-slide="next">换一批</div><div class="clearfix"></div></div>
                        <div class="pr20"><div class="divide-line-black"></div></div>
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
                                        <div class="col-sm-4 mt35 ">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'tumor')); ?>" target="_blank">
                                                <div class="recommend-area color1">当肿瘤遇上名医专家</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt35 pl5">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'preliverdisease')); ?>" target="_blank">
                                                <div class="recommend-area color2">立秋之后怎样预防和治疗肝病</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt35 pl0 ml-5">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'rectalcancer')); ?>" target="_blank">
                                                <div class="recommend-area color3">名医专家让你和大肠癌说再见</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt35">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'thyroid')); ?>" target="_blank">
                                                <div class="recommend-area color4">甲状腺相关疾病需及早手术</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt35 pl5">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'ruxianai')); ?>" target="_blank">
                                                <div class="recommend-area color5">关爱女性，关爱乳房</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt35 pl0 ml-5">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'xinxueguan')); ?>" target="_blank">
                                                <div class="recommend-area color6">警惕心血管疾病突发</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-sm-4 mt35 ">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'guanxinbing')); ?>" target="_blank">
                                                <div class="recommend-area color7">预防冠心病发作，名医专家有妙招</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt35 pl5">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'ertai')); ?>" target="_blank">
                                                <div class="recommend-area color8">名医专家为您“宝”驾护航</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt35 pl0 ml-5">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'doctorInterview')); ?>" target="_blank">
                                                <div class="recommend-area color9">泌尿疾病的克星：“达芬奇手术机器人”</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt35">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'lujinsong')); ?>" target="_blank">
                                                <div class="recommend-area color10">专访乳腺癌专家——陆劲松</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt35 pl5">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'dididoctor')); ?>" target="_blank">
                                                <div class="recommend-area color11">“滴滴医生”驾到</div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 mt35 pl0 ml-5">
                                            <a href="<?php echo $this->createUrl('event/view', array('page' => 'nationalday')); ?>" target="_blank">
                                                <div class="recommend-area color12">欢乐出游却不小心摔伤？</div>
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
        var urlDoctorView = '<?php echo $urlDoctorView; ?>';
        ajaxLoadDoctor('<?php echo $urlRecommendedDoctors; ?>', urlDoctorView);
        $('#searchdoctor-btn').click(function (e) {
            e.preventDefault();
            var disease_name = $('#home-doctor-search-form .disease-name').val();
            var fullName = disease_name == '' ? '' : getDisFullNameByDisName(disease_name);
            var urlDoctorSearch = '<?php echo $urlDoctorSearch; ?>?disease_name=' + fullName;
            window.open(urlDoctorSearch);
        });
        $('#searchhospital-btn').click(function (e) {
            e.preventDefault();
            var disease_name = $('#home-hospital-search-form .disease-name').val();
            var fullName = disease_name == '' ? '' : getDisFullNameByDisName(disease_name);
            var urlHopitalSearch = '<?php echo $urlHopitalSearch; ?>?disease_name=' + fullName;
            window.open(urlHopitalSearch);
        });
        
        $('.category a').mouseover(function(){
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
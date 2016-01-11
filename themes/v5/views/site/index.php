<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/home.js', CClientScript::POS_HEAD);
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlLoadDoctor = $this->createUrl('api/doctor', array('api' => 4, 'page' => 1, 'pagesize' => 4, 'is_contracted' => 1, 'disease_category' => 1));
$urlDoctorView = $this->createUrl('doctor/view', array('id' => ''));
$urlDoctorSearch = $this->createUrl('doctor/search');
$urlHopitalSearch = $this->createUrl('hospital/search');
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
                    <div class="title-lg">签约专家</div>
                    <div class="title-sm">做手术就找名医主刀</div>			
                </div>
                <div class="expert">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs mt30">
                        <li class="active text-center color-green"><a class="category" href="<?php echo $this->createUrl('api/doctor', array('api' => 4, 'page' => 1, 'pagesize' => 4, 'is_contracted' => 1, 'disease_category' => 1)) ?>">外科</a></li>
                        <li class="text-center"><a class="category" href="<?php echo $this->createUrl('api/doctor', array('api' => 4, 'page' => 1, 'pagesize' => 4, 'is_contracted' => 1, 'disease_category' => 2)) ?>">骨科</a></li>
                        <li class="text-center"><a class="category" href="<?php echo $this->createUrl('api/doctor', array('api' => 4, 'page' => 1, 'pagesize' => 4, 'is_contracted' => 1, 'disease_category' => 3)) ?>">妇产科</a></li>
                        <li class="text-center"><a class="category" href="<?php echo $this->createUrl('api/doctor', array('api' => 4, 'page' => 1, 'pagesize' => 4, 'is_contracted' => 1, 'disease_category' => 4)) ?>">小儿外科</a></li>
                        <li class="text-center"><a class="category" href="<?php echo $this->createUrl('api/doctor', array('api' => 4, 'page' => 1, 'pagesize' => 4, 'is_contracted' => 1, 'disease_category' => 5)) ?>">五官科</a></li>
                        <li class="text-center"><a class="category" href="<?php echo $this->createUrl('api/doctor', array('api' => 4, 'page' => 1, 'pagesize' => 4, 'is_contracted' => 1, 'disease_category' => 6)) ?>">内科</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active">
                            <div class="row expList mt15" >

                            </div>
                            <div class="pull-right mr20 color-blue">更多专家></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid " >
        <div class="row">
            <div class="container">
                <div id="propaganda" class="text-right mt50 mb50 img-responsive" >
                    <img src="<?php echo $urlResImage; ?>homeslider/rectalcancer.png"/>
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
                        <a href="#">
                            <div class="faculty waike img-responsive"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a href="#">
                            <div class="faculty guke block-center"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a href="#">
                            <div class="faculty fuchanke pull-right"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a href="#">
                            <div class="faculty xiaoerwaike"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a href="#">
                            <div class="faculty wuguanke block-center"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mt20">
                        <a href="#">
                            <div class="faculty neike pull-right"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid " >
        <div class="row">
            <div class="container mt50 mb50">
                <div class="row">
                    <div class="col-md-8">
                        <img class="img-responsive h300" src="<?php echo $urlResImage; ?>home/wanzheng.png"/>
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
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="col-sm-4 mt35 ">
                                            <div class="recommend-area">111</div>
                                        </div>
                                        <div class="col-sm-4 mt35 pl5">
                                            <div class="recommend-area">111</div>
                                        </div>
                                        <div class="col-sm-4 mt35 pl0 ml-5">
                                            <div class="recommend-area">111</div>
                                        </div>
                                        <div class="col-sm-4 mt35">
                                            <div class="recommend-area">111</div>
                                        </div>
                                        <div class="col-sm-4 mt35 pl5">
                                            <div class="recommend-area">111</div>
                                        </div>
                                        <div class="col-sm-4 mt35 pl0 ml-5">
                                            <div class="recommend-area">111</div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-sm-4 mt35 ">
                                            <div class="recommend-area">111</div>
                                        </div>
                                        <div class="col-sm-4 mt35 pl5">
                                            <div class="recommend-area">111</div>
                                        </div>
                                        <div class="col-sm-4 mt35 pl0 ml-5">
                                            <div class="recommend-area">111</div>
                                        </div>
                                        <div class="col-sm-4 mt35">
                                            <div class="recommend-area">111</div>
                                        </div>
                                        <div class="col-sm-4 mt35 pl5">
                                            <div class="recommend-area">111</div>
                                        </div>
                                        <div class="col-sm-4 mt35 pl0 ml-5">
                                            <div class="recommend-area">111</div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-sm-4 mt35 ">
                                            <div class="recommend-area">111</div>
                                        </div>
                                        <div class="col-sm-4 mt35 pl5">
                                            <div class="recommend-area">111</div>
                                        </div>
                                        <div class="col-sm-4 mt35 pl0 ml-5">
                                            <div class="recommend-area">111</div>
                                        </div>
                                        <div class="col-sm-4 mt35">
                                            <div class="recommend-area">111</div>
                                        </div>
                                        <div class="col-sm-4 mt35 pl5">
                                            <div class="recommend-area">111</div>
                                        </div>
                                        <div class="col-sm-4 mt35 pl0 ml-5">
                                            <div class="recommend-area">111</div>
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
        $('#show_top').click(function () {
            $('#header_home').slideToggle(500);
        });
        var urlDoctorView = '<?php echo $urlDoctorView; ?>';
        ajaxLoadDoctor('<?php echo $urlLoadDoctor; ?>', urlDoctorView);
        $('.category').click(function (e) {
            e.preventDefault();
            $('.expert .nav li').removeClass('active');
            $(this).parent().addClass('active');
            var urlLoadDoctor = $(this).attr('href');
            ajaxLoadDoctor(urlLoadDoctor, urlDoctorView);
        });
        $('.searchdoctor-tab').click(function () {
            $('.search-top').removeClass('active');
            $(this).addClass('active');
            $('#home-doctor-search-form').show();
            $('#home-hospital-search-form').hide();
        });
        $('.searchhospital-tab').click(function () {
            $('.search-top').removeClass('active');
            $(this).addClass('active');
            $('#home-doctor-search-form').hide();
            $('#home-hospital-search-form').show();
        });
        $('#searchdoctor-btn').click(function (e) {
            e.preventDefault();
            var disease_name = $('.disease-name').val();
            var urlDoctorSearch = '<?php echo $urlDoctorSearch; ?>?disease_name=' + disease_name;
            location.href = urlDoctorSearch;
        });
        $('#searchhospital-btn').click(function (e) {
            e.preventDefault();
            var disease_name = $('.disease-name').val();
            var urlHopitalSearch = '<?php echo $urlHopitalSearch; ?>';
                location.href = urlHopitalSearch;
        });
    });
</script>
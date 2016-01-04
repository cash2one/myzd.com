<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/home.js', CClientScript::POS_HEAD);
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$baseUrlTeam = $this->createUrl("expertteam/view", array("code" => ""));
$siteMenu = $this->loadSiteMenu();
$facultyMenu = $siteMenu["faculty"];
$urlHospitalView = $this->createUrl('hospital/view', array('id' => ''));    // hospital/view?id=$id.
//$urlLoadHospitalsByCity = $this->createUrl('api/list', array('model' => 'hospital', 'city' => '')); // append city.id behind.
//$urlLoadHospitalsByCity = $this->createUrl('api/list', array('model' => 'listhospital', 'city' => '')); // append city.id behind.
//$urlLoadHospitalsByCity = $this->createUrl('api/list', array('model' => 'listhospital', 'city' => '')); // append city.id behind.
$urlLoadHospitalsByCity = $this->createUrl('api/list', array('model' => 'hospital', 'order' => 'name', 'city' => '')); // append city.id behind.
$urlLoadSelectHospitals = $this->createUrl('api/list', array('model' => 'hospital', 'city' => '')); // append city.id behind.
$urlLoadallEteamsByCity = $this->createUrl('api/list', array('model' => 'expertteam')); // append city.id behind.
$urlLoadDisease = $this->createUrl('api/list', array('model' => 'disease'));
$urlHospital = $this->createUrl('hospital/index', array('city' => ''));
?>
<section id="site-content" class="">
    <div id="home-header" class="container-fluid border-bottom bg-gray">
        <div class="block-center">
            <div class="row" id="homeads">
                <div class="mt-fix">
                    <ul class="bxslider">
                    </ul>
                </div>
            </div>
        </div>
        <div class="container hidden-xs">
            <?php $this->renderPartial('_dismenu') ?>

        </div>
    </div>
    <!--end bxslide-->

    <div class="container-fluid pt40 pb40">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="border-gray form-content">
                        <div class="form-head mb10">
                            手术预约/术前会诊
                        </div>
                        <form class="form-horizontal pl10 pr10" action="<?php echo $this->createUrl('hospital/view'); ?>">
                            <div class="form-group mb40 mt20">
                                <label class="control-label col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-0">地区:</label>
                                <div class="col-sm-6 col-md-9 citylist">
                                    <select class="form-control">
                                        <option value="1" selected>北京</option>
                                        <option value="73">上海</option>
                                        <optgroup label="江苏">
                                            <option value="74">南京</option>
                                            <option value="75">无锡</option>
                                            <option value="76">徐州</option>
                                            <option value="77">常州</option>
                                            <option value="78">苏州</option>
                                            <option value="79">南通</option>
                                            <option value="80">连云港</option>
                                            <option value="81">淮安</option>
                                            <option value="82">盐城</option>
                                            <option value="83">扬州</option>
                                            <option value="84">镇江</option>
                                        </optgroup>
                                        <optgroup label="浙江">
                                            <option value="87">杭州</option>
                                            <option value="88">宁波</option>
                                            <option value="89">温州</option>
                                            <option value="90">嘉兴</option>
                                            <option value="91">湖州</option>
                                            <option value="93">金华</option>
                                            <option value="94">衢州</option>
                                            <option value="95">舟山</option>
                                            <option value="97">丽水</option>
                                        </optgroup>
                                        <optgroup label="广东">
                                            <option value="200">广州</option>
                                            <option value="204">汕头</option>
                                        </optgroup>
                                        <optgroup label="湖南">
                                            <option value="186">长沙</option>
                                        </optgroup>
                                        <optgroup label="福建">
                                            <option value="114">福州</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb20">
                                <label class="control-label col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-0">医院:</label>
                                <div class="col-sm-6 col-md-9 hospitallist">
                                    <select class="form-control">
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4 col-md-3"></label>
                                <div class="col-sm-6 ">
                                    <a class="selectcity ml0 btn btn-yes abs-btn block" >预 约</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <div class="border-gray operation">
                        <a href="<?php echo $this->createUrl('site/page', array('view' => 'zhitongche')); ?>" target="_blank">
                            <img src="<?php echo $urlResImage; ?>home/operation.png" alt/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt40 pb40">
        <div id="sec-expertteam" class="container">
            <div>
                <span class="expert-title">专家团队</span>
                <span class="ml20 hidden-xs">国内顶尖外科专家领衔的专业手术治疗团队</span>
                <span class="pull-right more-expertteam"><a href="<?php echo $this->createUrl('expertteam/index'); ?>" target="_blank">更多专家团队 <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a></span>
            </div>
            <div class="divider"></div>
            <!--            <div class="recommend mb10">
                            <span class="expertteam-recx">&nbsp;</span>
                            <span id="slider-next" class="pull-right"><a href="javascript:void(0);" class="next">换一组</a></span>
                        </div>-->
            <div class="expertteam mt10">
                <div class="mt-fix">
                    <div class="loading loading02"></div>
                    <ul class="bxslider" id="expertteam">

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt40 pb40">
        <div id="sec-hospital" class="container">
            <div>
                <span class="hospital-title">推荐医院</span>
                <span class="ml20 pull-right hospital-more hidden-xs"><a href="<?php echo $this->createUrl('hospital/index', array('city' => '1')) ?>" target="_blank">查看更多城市 <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a></span>
                <span class="city-name pull-right hospital-more"><a class="city" data-city="200" href="<?php echo $this->createUrl('hospital/index', array('id' => 200)); ?>">广州</a></span>
                <span class="city-name pull-right hospital-more"><a class="city" data-city="73" href="<?php echo $this->createUrl('hospital/index', array('id' => 73)); ?>">上海</a></span>
                <span class="city-name pull-right hospital-more"><a class="city active" data-city="1" href="<?php echo $this->createUrl('hospital/index', array('id' => 1)); ?>">北京</a></span>
            </div>
            <div class="divider"></div>
            <div class="row mt10 pb60">
                <div class="loading loading02"></div>
                <div class="hlist"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt40 pb40">
        <div class="container">
            <div>
                <span class="caselist-title">新闻中心</span>
                <span class="pull-right news-more"><a href="<?php echo $this->createUrl('site/page', array('view' => 'news')); ?>" target="_blank">更多分享 <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a></span>
            </div>
            <div class="divider"></div>
            <div class="row pb20 pt10">
                <div class="col-md-6 col-sm-12 news-list">
                    <div class="mt20 news">
                        <a href="<?php echo $this->createUrl('news/page', array('view' => 'firstaid')); ?>" target="_blank" title="8小时冒雪夜行驰援，医者仁心只为救死扶伤">
                            <div><i class="fa fa-star"></i>&nbsp;<span class="news-title">8小时冒雪夜行驰援，医者仁心只为救死扶伤</span></div>
                            <div class="news-decs">患者生命垂危，又身在异乡举目无亲，家属绝望之际发出求助信息。名医主刀快速响应，争分夺秒，全程对接。山东名医陈伯华雪夜驰援......</div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 news-list">
                    <div class="mt20 news">
                        <a href="<?php echo $this->createUrl('news/page', array('view' => 'femalehealth')); ?>" target="_blank" title="关爱女性健康，名医主刀与公益同行">
                            <div><i class="fa fa-star"></i>&nbsp;<span class="news-title">关爱女性健康，名医主刀与公益同行</span></div>
                            <div class="news-decs">导言：滴滴出行的美女总裁柳青患上乳腺癌，正处事业上升期的她为何会患癌？歌手姚贝娜因乳腺癌复发，于年初病逝。年仅33岁的她为......</div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 news-list">
                    <div class="mt20 news">
                        <a href="<?php echo $this->createUrl('news/page', array('view' => 'mingyizhudaorongzi')); ?>" target="_blank" title="喜大普奔，名医主刀已完成A轮融资">
                            <div><i class="fa fa-star"></i>&nbsp;<span class="news-title">喜大普奔，名医主刀已完成A轮融资</span></div>
                            <div class="news-decs">喜大普奔！喜大普奔！我们已经完成由复星医药领投、高榕资本和真格基金跟投的6000万人民币A轮融资啦！这是继7月完成由真格基金投资的500万人......</div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 news-list">
                    <div class="mt20 news">
                        <a href="<?php echo $this->createUrl('news/page', array('view' => 'dididoctor')); ?>" target="_blank" title="滴滴医生火爆预约，名医抢单随车上门">
                            <div><i class="fa fa-star"></i>&nbsp;<span class="news-title">滴滴医生火爆预约，名医抢单随车上门</span></div>
                            <div class="news-decs">2015年10月15日滴滴出行、名医主刀和阿里健康三家公司联合宣布，将于10月18、19日两天，在北京、上海、杭州、南京四个城市推出“一键呼叫医生......</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            //url 参数
            var urlLoadSelectHospitals = '<?php echo $urlLoadSelectHospitals; ?>';
            var urlLoadHospitalsByCity = "<?php echo $urlLoadHospitalsByCity; ?>";
            var urlHospitalView = '<?php echo $urlHospitalView; ?>';
            var urlLoadallEteamsByCity = "<?php echo $urlLoadallEteamsByCity; ?>";
            var urlResImage = "<?php echo $urlResImage; ?>";
            var urlHospital = '<?php echo $urlHospital; ?>';
            //专题轮播图加载
            $html = '<li><div class="xinyabang"><div class="container"><a href="<?php echo $this->createUrl('event/view', array('page' => 'xinyabang')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>homeslider/xinyabang.png" alt="" class="img-responsive"></a></div></div></li>' +
                    '<li><div class="lujinsong"><div class="container"><a href="<?php echo $this->createUrl('event/view', array('page' => 'lujinsong')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>homeslider/lujinsong.png" alt="" class="img-responsive"></a></div></div></li>' +
                    '<li><div class="awards"><div class="container"><a href="<?php echo $this->createUrl('event/view', array('page' => 'awards')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>homeslider/awards.png" alt="" class="img-responsive"></a></div></div></li>' +
                    '<li><div class="doctorInterview"><div class="container"><a href="<?php echo $this->createUrl('event/view', array('page' => 'doctorInterview')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>homeslider/doctorInterview.png" alt="" class="img-responsive"></a></div></div></li>' +
                    '<li><div class="guanxinbing"><div class="container"><a href="<?php echo $this->createUrl('event/view', array('page' => 'guanxinbing')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>homeslider/guanxinbing.png" alt="" class="img-responsive"></a></div></div></li>' +
                    '<li><div class="dididoctor"><div class="container"><a href="<?php echo $this->createUrl('event/view', array('page' => 'dididoctor')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>homeslider/dididoctor.png" alt="" class="img-responsive"></a></div></div></li>';
            $('#homeads .bxslider').html($html);
            var adsbxslider = $('#homeads .bxslider').bxSlider({
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
            //专家团队轮播图
            loadAllEteams(urlLoadallEteamsByCity, urlResImage);
            var slider = $('.expertteam .bxslider').bxSlider({
                slideMargin: 0,
                controls: true,
                pagerType: 'short',
                infiniteLoop: false,
                hideControlOnEnd: true
            });
            //加载医院
            ajaxGetHospitalByCity(1, '北京', urlLoadHospitalsByCity, urlHospitalView, urlHospital);
            ajaxGetHospitals(1, urlLoadSelectHospitals);

            $(".city").click(function (e) {
                e.preventDefault();
                $cityid = $(this).attr("data-city");
                $cityname = $(this).text();
                ajaxGetHospitalByCity($cityid, $cityname, urlLoadHospitalsByCity, urlHospitalView, urlHospital);
                setActiveCity($cityid);
            });
            $(".citylist").change(function () {
                cityid = $(this).find("select").val();
                ajaxGetHospitals(cityid, urlLoadSelectHospitals);
            });
            $(".selectcity").click(function () {
                $hid = $(".hospitallist select").val();
                window.open("<?php echo $this->createUrl('hospital/view'); ?>?id=" + $hid);
            });
        });
    </script>
</section>
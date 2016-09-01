<?php
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/pc/searchhospital100.min.css");
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/searchhospital100.min.js', CClientScript::POS_HEAD);
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlHopitalSearch = $this->createUrl('hospital/top');
$urlLoadHospital = $this->createUrl('api/hospital', array('api' => 7, 'pagesize' => 10));
$urlLoadHospitalByDiseaseSubCategory = $this->createUrl('api/hospital', array('api' => 7, 'pagesize' => 10, 'disease_sub_category' => ''));
$urlloadDiseaseCategory = $this->createUrl('api/diseasecategory', array('api' => 7)); ///api/diseasecategory
//$urlHospitalView = $this->createUrl('hospital/view');
$urlHospitalView = Yii::app()->params['baseUrl'];
$city = Yii::app()->request->getQuery('city', '1');
$disease_name = Yii::app()->request->getQuery('disease_name', '');
$disease_category = Yii::app()->request->getQuery('disease_category', '');
$disease_sub_category = Yii::app()->request->getQuery('disease_sub_category', '');
$page = Yii::app()->request->getQuery('page', '');
$urlBaseUrl = Yii::app()->params['baseUrl'];
?>
<div class="container-fluid search-hospital-header">
    <div class="container">
        <div class="crumbs-header">
            <ul>
                <li><a href="<?php echo Yii::app()->homeUrl; ?>">首页</a></li>
                <li>></li>
                <li><a href="<?php echo $this->createUrl('hospital/department') ?>">找医院</a></li>
                <li>></li>
                <li class="main-department"></li>
            </ul>
        </div>
    </div>
</div>
</div>
<div class="container" id="hospital-list">
    <div class="city-cutover mt20">
        <span><img class="mt-5" src="http://static.mingyizhudao.com/146253292660125"></span><span class="city-name"></span><span class="cutover-btn"></span>
    </div>
    <div class="open-city city-list">
        <div class="heading mt5">热门城市<span class="close-btn"></span></div>
        <div class="hot-city mt10">
            <div><a class="city city-init" data-id="1">北京</a><a class="city" data-id="73">上海</a><a class="city" data-id="200">广州</a><a class="city" data-id="74">南京</a><a class="city last" data-id="255">成都</a></div>
        </div>
        <div class="heading mt20">其他</div>
        <div class="other-city mt5">
            <a class="city" data-id="391">重庆</a><a class="city ml15" data-id="87">杭州</a><a class="city ml15" data-id="308">西安</a><a class="city ml15" data-id="169">武汉</a><a cl<a class="city ml15" data-id="186">长沙</a><a class="city ml15" data-id="134">济南</a><div class="mt5"><a class="city" data-id="151">郑州</a></div>
        </div>
    </div>
    <div class="row">
        <div class="dept-menu">
            <div class="col-sm-2">
                <ul class="left-department">
                    <a href="<?php echo $urlBaseUrl; ?>/hospital-top-disease_sub_category-101.html"><li data-id="101" class="border-department"><div class="bg1-puwaike"></div><div class="text-14-right">普外科</div></li></a>
                    <a  href="<?php echo $urlBaseUrl; ?>/hospital-top-disease_sub_category-102.html"><li data-id="102" class="border-department "><div class="bg2-guke"></div><div class="text-14-right">骨科</div></li></a>
                    <a href="<?php echo $urlBaseUrl; ?>/hospital-top-disease_sub_category-103.html"><li data-id="103" class="border-department "><div class="bg3-shenwai"></div><div class="text-14-right">神经外科</div></li></a>
                    <a href="<?php echo $urlBaseUrl; ?>/hospital-top-disease_sub_category-104.html"><li data-id="104" class="border-department "><div class="bg4-miniaowaike"></div><div class="text-14-right">泌尿外科</div></li></a>
                    <a href="<?php echo $urlBaseUrl; ?>/hospital-top-disease_sub_category-105.html"><li data-id="105" class="border-department "><div class="bg5-xiongwaike"></div><div class="text-14-right">胸外科</div></li></a>
                    <a href="<?php echo $urlBaseUrl; ?>/hospital-top-disease_sub_category-108.html"><li data-id="108" class="border-department "><div class="bg6-yanke"></div><div class="text-14-right">眼科</div></li></a>
                    <a href="<?php echo $urlBaseUrl; ?>/hospital-top-disease_sub_category-106.html"><li data-id="106" class="border-department "><div class="bg7-xinxueguan"></div><div class="text-14-right">心血管外科</div></li></a>
                    <a href="<?php echo $urlBaseUrl; ?>/hospital-top-disease_sub_category-109.html"><li data-id="109" class="border-department "><div class="bg8-erbihouke"></div><div class="text-14-right">耳鼻喉科</div></li></a>
                    <a href="<?php echo $urlBaseUrl; ?>/hospital-top-disease_sub_category-107.html"><li data-id="107" class="border-department "><div class="bg9-zhengxingwaike"></div><div class="text-14-right">整形外科</div></li></a>
                    <a href="<?php echo $urlBaseUrl; ?>/hospital-top-disease_sub_category-110.html"><li data-id="110" class="border-department "><div class="bg10-hemianwaike"></div><div class="text-14-right">颌面外科</div></li></a>
                    <a href="<?php echo $urlBaseUrl; ?>/hospital-top-disease_sub_category-111.html"><li data-id="111" class="border-department "><div class="bg11-fuke"></div><div class="text-14-right">妇科</div></li></a>
                    <a href="<?php echo $urlBaseUrl; ?>/hospital-top-disease_sub_category-112.html"><li data-id="112" class="border-department "><div class="bg12-xiaoerwaike"></div><div class="text-14-right">小儿外科</div></li></a>
                </ul>

                <div class="mt20 mb20"><a href="<?php echo $this->createUrl('event/view', array('page' => 'remebot')); ?>" target="_blank"><img src="http://static.mingyizhudao.com/146242724592795"></a></div>
                <div class="flowChart">
                    <div class="title">服务流程：</div>
                    <div class="content">
                        <div class="text-center mt20"><span class="step">第一步</span></div>
                        <div><span>用户提交预约申请</span><span class="mark" data-toggle="tooltip" data-placement="top" title="" data-original-title="相关检查资料：核磁（MRI）、CT、病理、B超及相关诊断检验报告等）">?</span></div>
                        <div class="text-center mt20"><span class="step">第二步</span></div>
                        <div><span>名医助手回访确认预约信息</span><span class="color-555">（8小时内）</span></div>
                        <div class="text-center mt20"><span class="step">第三步</span></div>
                        <div><span>名医助手协助整理病历资料，并根据病情匹配对症专家</span><span class="color-555">（2个工作日内）</span></div>
                        <div class="text-center mt20"><span class="step">第四步</span></div>
                        <div><span>回复并沟通就诊时间</span></div>
                        <div class="text-center mt20"><span class="step">第五步</span></div>
                        <div><span>携带相关证件资料，在预约时间由名医助手陪护至医院就诊：</span></div>
                        <div>
                            <div><span>如结果可以手术则</span></div>
                            <div class="color-036eb8"><span>开始安排闲置床位排期手术</span></div>
                            <div><span>如专家意见不宜手术则</span></div>
                            <div class="color-036eb8"><span>给出诊疗意见</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <a href="<?php echo $this->createUrl('hospital/topHospital') ?>" target="_blank"><img class="tophospital-link img-responsive mt20" src="http://static.mingyizhudao.com/146967591025119" /></a>
                <div class="loading loading02" style="margin-top:100px;"></div>
                <div class="hospital-list">

                </div>
                <!--分页-->
                <div class="mt30">
                    <nav class="text-center">
                        <ul class="pagination">
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<?php //$this->renderPartial("//booking/bookingDeptModal"); ?>
<script>
    //url参数数组
    var condition = new Array();
    condition["city"] = '<?php echo $city ?>';
    condition["disease_name"] = '<?php echo $disease_name; ?>';
    condition["disease_category"] = '<?php echo $disease_category; ?>';
    condition["disease_sub_category"] = '<?php echo $disease_sub_category; ?>';
    condition["page"] = '<?php echo $page == '' ? 1 : $page; ?>';
    var urlLoadHospital = '<?php echo $urlLoadHospital; ?>';
    $(document).ready(function () {
        //左侧菜单栏
        setDiseaseCategoryActive();
        
        $("#hospital-list .open-city .close-btn").click(function () {
            $("#hospital-list .city-cutover .cutover-btn").removeClass('active');
            $("#hospital-list .open-city").hide();
        });
        $("#hospital-list .city-cutover .cutover-btn").click(function () {
            if ($("#hospital-list .city-cutover .cutover-btn").hasClass('active')) {
                $("#hospital-list .city-cutover .cutover-btn").removeClass('active');
                $("#hospital-list .open-city").hide();
            } else {
                $(this).addClass('active');
                $("#hospital-list .open-city").show();
            }
        });
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
        setCityActive();
        ajaxLoadHopital('&getcount=1');
//        ajaxLoadDiseaseCategory();
        $('.city-list a.all').click(function (e) {
            e.preventDefault();
            condition["city"] = '';
            condition["page"] = 1;
            ajaxLoadHopital('&getcount=1');
            setCityActive();
        });
        $('.city-list .city').click(function (e) {
            e.preventDefault();
            var cityId = $(this).attr('data-id');
            condition["city"] = cityId;
            condition["page"] = 1;
            ajaxLoadHopital('&getcount=1');
            setCityActive();
        });
        if (condition["disease_name"]) {
            $('.department-name>strong').html(condition["disease_name"]);
        }
    });
    //异步加载医院
    function ajaxLoadHopital(getCount) {
        var urlHospitalView = '<?php echo $urlHospitalView; ?>';
        var urlAjaxLoadHospital = '';
        urlAjaxLoadHospital = urlLoadHospital + setUrlCondition();
        urlAjaxLoadHospital += getCount;
        $('.loading').show();
        $.ajax({
            url: urlAjaxLoadHospital,
            success: function (data) {
                setPages(data.dataNum, condition["page"]);
                setHospitalHtml(data, urlHospitalView);
                $('.loading').hide();
            },
            error: function () {
                $('.loading').hide();
            }
        });
    }

    //设置地址栏信息
    function setLocationUrl() {
//        var stateObject = {};
//        var title = "";
//        var urlCondition = '';
//        for ($key in condition) {
//            if (condition[$key] && condition[$key] !== "") {
//                urlCondition += "&" + $key + "=" + condition[$key];
//            }
//        }
//        urlCondition = urlCondition.substring(1);
//        urlCondition = "?" + urlCondition;
//        var newUrl = "echo $urlHopitalSearch; ?>" + urlCondition;
//        history.pushState(stateObject, title, newUrl);
    }
    function setCityActive() {
        $('.city-list a').removeClass('active');
        $('.city-list a').each(function () {
            var cityId = $(this).attr('data-id');
            if (condition["city"]) {
                if (cityId == condition["city"]) {
                    $(this).addClass('active');
                    var html = $(this).text();
                    $("#hospital-list .city-cutover .city-name").html(html);
                }
            } else {
                $('.all.city').addClass('active');
            }
        });
    }
    function setDiseaseCategoryActive() {
        $('.dept-menu .left-department .border-department').removeClass('active');
        $('.dept-menu .left-department .border-department').each(function () {
            var subCatId = $(this).attr('data-id');
            if (subCatId == condition["disease_sub_category"]) {
                $('.main-department').html($(this).children('.text-14-right').text());
                $(this).addClass('active');
            }
        });
    }
</script>
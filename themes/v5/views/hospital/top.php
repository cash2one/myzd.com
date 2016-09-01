<?php
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/searchhospital100.min.css");
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/custom/searchhospital.js?v=' . time(), CClientScript::POS_HEAD);
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
                    <li class="border-department"><div class="bg1-puwaike"></div><div class="text-14-right">普外科</div></li>
                    <li class="border-department "><div class="bg2-guke"></div><div class="text-14-right">骨科</div></li>
                    <li class="border-department "><div class="bg3-shenwai"></div><div class="text-14-right">神经外科</div></li>
                    <li class="border-department "><div class="bg4-miniaowaike"></div><div class="text-14-right">泌尿外科</div></li>
                    <li class="border-department "><div class="bg5-xiongwaike"></div><div class="text-14-right">胸外科</div></li>
                    <li class="border-department "><div class="bg6-yanke"></div><div class="text-14-right">眼科</div></li>
                    <li class="border-department "><div class="bg7-xinxueguan"></div><div class="text-14-right">心血管外科</div></li>
                    <li class="border-department "><div class="bg8-erbihouke"></div><div class="text-14-right">耳鼻喉科</div></li>
                    <li class="border-department "><div class="bg9-zhengxingwaike"></div><div class="text-14-right">整形外科</div></li>
                    <li class="border-department "><div class="bg10-hemianwaike"></div><div class="text-14-right">颌面外科</div></li>
                    <li class="border-department "><div class="bg11-fuke"></div><div class="text-14-right">妇科</div></li>
                    <li class="border-department "><div class="bg12-xiaoerwaike"></div><div class="text-14-right">小儿外科</div></li>
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
<style>
    .border-switch{cursor:pointer;padding-left: 5px;padding-right: 5px;background-color: #fff;height:29px;width:70px;margin-top: 10px;border:1px solid #5cb6af;border-bottom-color:#fff;position:absolute;z-index: 100}
    .text-switch{font-size: 12px;color:#9f9fa0; margin-top: 3px;}
    .text-switch:hover{font-size: 12px;color:#5cb6af; margin-top: 3px;}
    .mt-3{margin-top: -3px;}
    .border-city{padding-left:20px;z-index: 99;background-color: #fff;width:380px;height:250px;position:absolute;border:1px solid #5cb6af;margin-top:38px;}
    .text-15-color{font-size:15px;color:#9f9fa0;}
    .text-14-color{font-size: 14px;color:#5cb6af}
    .text-12{font-size: 12px;color: #555}
    .line-divider{border-bottom:1px solid #9f9fa0;width:350px;margin-left: -5px;}
    .left-department{margin-left: -40px;margin-top: 20px;}
    .text-14-right{font-size:14px;color:#555;margin-top: -25px;margin-left:80px;}
    .ml20{margin-left:20px;}
    .ml5{margin-left: 5px;}
    .border-department{background-color: #f7f7f7;height:40px;width:100%;margin-top: 1px;padding-top:5px;}
    .bg1-puwaike{height:30px;width:30px;background: url(http://static.mingyizhudao.com/147200784822191) no-repeat;background-position:0 0;margin-left: 35px;padding-top:5px;}
    .bg2-guke{height:30px;width:30px;background: url(http://static.mingyizhudao.com/147200784822191) no-repeat;background-position:-30px 0;margin-left: 35px;padding-top:5px;}
    .bg3-shenwai{height:30px;width:30px;background: url(http://static.mingyizhudao.com/147200784822191) no-repeat;background-position:-60px 0;margin-left: 35px;padding-top:5px;}
    .bg4-miniaowaike{height:30px;width:30px;background: url(http://static.mingyizhudao.com/147200784822191) no-repeat;background-position:-90px 0;margin-left: 35px;padding-top:5px;}
    .bg5-xiongwaike{height:30px;width:30px;background: url(http://static.mingyizhudao.com/147200784822191) no-repeat;background-position:-120px 0;margin-left: 35px;padding-top:5px;}
    .bg6-yanke{height:30px;width:30px;background: url(http://static.mingyizhudao.com/147200784822191) no-repeat;background-position:-150px 0;margin-left: 35px;padding-top:5px;}
    .bg7-xinxueguan{height:30px;width:30px;background: url(http://static.mingyizhudao.com/147200784822191) no-repeat;background-position:-180px 0;margin-left: 35px;padding-top:5px;}
    .bg8-erbihouke{height:30px;width:30px;background: url(http://static.mingyizhudao.com/147200784822191) no-repeat;background-position:-210px 0;margin-left: 35px;padding-top:5px;}
    .bg9-zhengxingwaike{height:30px;width:30px;background: url(http://static.mingyizhudao.com/147200784822191) no-repeat;background-position:-240px 0;margin-left: 35px;padding-top:5px;}
    .bg10-hemianwaike{height:30px;width:30px;background: url(http://static.mingyizhudao.com/147200784822191) no-repeat;background-position:-270px 0;margin-left: 35px;padding-top:5px;}
    .bg11-fuke{height:30px;width:30px;background: url(http://static.mingyizhudao.com/147200784822191) no-repeat;background-position:-300px 0;margin-left: 35px;padding-top:5px;}
    .bg12-xiaoerwaike{height:30px;width:30px;background: url(http://static.mingyizhudao.com/147200784822191) no-repeat;background-position:-330px 0;margin-left: 35px;padding-top:5px;}
</style>
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
        ajaxLoadDiseaseCategory();
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
    /**** ajax异步加载科室 ****/
    function ajaxLoadDiseaseCategory() {
        var urlloadDiseaseCategory = '<?php echo $urlloadDiseaseCategory; ?>';
        $.ajax({
            url: urlloadDiseaseCategory,
            success: function (data) {
                setDiseaseCategory(data);
            },
            error: function (XmlHttpRequest, textStatus, errorThrown) {
                console.log(XmlHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    }

    /**** 设置左侧科室菜单html ****/
    function setDiseaseCategory(data) {
        if (data.results) {
            var innerHtml = '';
            var diseaseCategorys = data.results;
            var active = '';
            for (var i = 1; i <= diseaseCategorys.length; i++) {
                var diseaseCategory = diseaseCategorys[i - 1];
                if (i == condition["disease_category"]) {
                    active = 'active';
                    $('.department-name>span').text(diseaseCategory.name);
                } else {
                    active = '';
                }
                var imgname = '';
                if (diseaseCategory.id == 1) {
                    imgname = 'puwaike-small';
                } else if (diseaseCategory.id == 2) {
                    imgname = 'guke-small';
                } else if (diseaseCategory.id == 3) {
                    imgname = 'fuchanke-small';
                } else if (diseaseCategory.id == 4) {
                    imgname = 'xiaoerke-small';
                } else if (diseaseCategory.id == 5) {
                    imgname = 'wuguanke-small';
                } else if (diseaseCategory.id == 6) {
                    imgname = 'neike-small';
                }
                innerHtml += '<div class="department' + active + '">' +
                        '<div class="dept-header">' +
                        '<span class="' + imgname + '"></span><i class="fa fa-caret-right"></i>' +
                        '<i class="fa fa-caret-down"></i>' +
                        '<span class="strong dept-name">' + diseaseCategory.name + '</span>' +
                        '</div>' +
                        '<ul>';
                var subCats = diseaseCategory.subCat;
                for (var j = 0; j < subCats.length; j++) {
                    var subCat = subCats[j];
                    innerHtml += '<li class="ml10"><a class="subCat" data-id = "' + subCat.id + '" href="<?php echo $urlLoadHospitalByDiseaseSubCategory; ?>' + subCat.id + '">' + subCat.name + '</a></li>';
                }
                innerHtml += '</ul></div>';
            }
            $('.department-list').html(innerHtml);
            setDiseaseCategoryActive();
            initDeptFunction();
        }
    }
    //设置地址栏信息
    function setLocationUrl() {
        var stateObject = {};
        var title = "";
        var urlCondition = '';
        for ($key in condition) {
            if (condition[$key] && condition[$key] !== "") {
                urlCondition += "&" + $key + "=" + condition[$key];
            }
        }
        urlCondition = urlCondition.substring(1);
        urlCondition = "?" + urlCondition;
        var newUrl = "<?php echo $urlHopitalSearch; ?>" + urlCondition;
        history.pushState(stateObject, title, newUrl);
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
        $('.department-list .department').removeClass('active');
        $('.department-list .subCat').each(function () {
            var subCatId = $(this).attr('data-id');
            if (subCatId == condition["disease_sub_category"]) {
//                $('.department-name>span').html($(this).text());
                $('.main-department').html($(this).parents('.department').find('.dept-name').text());
                $(this).addClass('active');
                $(this).parents('.department').addClass('active');
            }
        });
    }
</script>
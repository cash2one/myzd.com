<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/searchhospital.css");
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/custom/searchhospital.js', CClientScript::POS_HEAD);
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlHopitalSearch = $this->createUrl('hospital/search');
$urlLoadHospital = $this->createUrl('api/hospital', array('api' => 7, 'pagesize' => 5));
$urlLoadHospitalByDiseaseSubCategory = $this->createUrl('api/hospital', array('api' => 7, 'pagesize' => 5, 'disease_sub_category' => ''));
$urlloadDiseaseCategory = $this->createUrl('api/diseasecategory', array('api' => 7)); ///api/diseasecategory
$urlHospitalView = $this->createUrl('hospital/view', array('id' => ''));
$city = Yii::app()->request->getQuery('city', '');
$disease = Yii::app()->request->getQuery('disease', '');
$disease_name = Yii::app()->request->getQuery('disease_name', '');
$disease_category = Yii::app()->request->getQuery('disease_category', '');
$disease_sub_category = Yii::app()->request->getQuery('disease_sub_category', '');
$page = Yii::app()->request->getQuery('page', '');
?>

<div class="container-fluid bg-green">
    <div class="container find-navi"><a href="<?php echo Yii::app()->homeUrl; ?>">首页</a>&nbsp;&gt;&nbsp;找顶尖科室</div>
</div>
<div class="container">
    <div class="row mt30">
        <div class="col-sm-2">
            <div class="strong text-center department-name color-green"><span>全部</span></div>
            <div class="border-gray department-list mt20">

            </div>
            <div class="mt20"><a href="<?php echo $this->createUrl('event/view', array('page' => 'remebot')); ?>" target="_blank"><img src="<?php echo $urlResImage; ?>/homeslider/remebot.png"></a></div>
        </div>
        <div class="col-sm-10">
            <div class="row find-header">
                <div class="col-sm-9 mt25" >
                    <div>名医主刀为您精选出在综合及专科领域最强的医院，您只需预约目标医院的科室，名医助手会根据您的具病情推荐该科室里最合适的主刀医生，免除您搜寻和预约医生的烦恼。</div>
                    <div class="color-red mt30 mb25">* 排名依照复旦版最新《中国最佳医院综合排行榜》和《中国医院最佳专科声誉排行榜》</div>
                </div>
            </div>
            <div class="row">
                <div class="mt20 findexp-nav city-list">
                    地区:<a class="all city active">全部</a>
                    <a class="city" data-id="1">北京</a>
                    <a class="city" data-id="73">上海</a>
                    <a class="city" data-id="200">广州</a>
                    <a class="city" data-id="74">南京</a>
                    <a class="city" data-id="87">杭州</a>
                    <a class="city" data-id="114">福州</a>
                    <a class="city" data-id="134">济南</a>
                    <a class="city" data-id="186">长沙</a>
                    <a class="city" data-id="255">成都</a>
                    <a class="city" data-id="204">汕头</a>
                    <a class="city" data-id="218">潮州</a>
                </div>
                <div class="loading loading02"></div>
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
<?php $this->renderPartial("//booking/bookingDeptModal"); ?>
<script>
    //url参数数组
    var condition = new Array();
    condition["city"] = '<?php echo $city ?>';
    condition["disease"] = '<?php echo $disease; ?>';
    condition["disease_name"] = '<?php echo $disease_name; ?>';
    condition["disease_category"] = '<?php echo $disease_category; ?>';
    condition["disease_sub_category"] = '<?php echo $disease_sub_category; ?>';
    condition["page"] = '<?php echo $page == '' ? 1 : $page; ?>';
    var urlLoadHospital = '<?php echo $urlLoadHospital; ?>';
    $(document).ready(function () {
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
                    imgname = 'puwaike.png';
                } else if (diseaseCategory.id == 2) {
                    imgname = 'guke.png';
                } else if (diseaseCategory.id == 3) {
                    imgname = 'fuchanke.png';
                } else if (diseaseCategory.id == 4) {
                    imgname = 'xiaoerke.png';
                } else if (diseaseCategory.id == 5) {
                    imgname = 'wuguanke.png';
                } else if (diseaseCategory.id == 6) {
                    imgname = 'neike.png';
                }
                innerHtml += '<div class="department ' + active + '">' +
                        '<div class="dept-header">' +
                        '<img class="mr5" src="<?php echo $urlResImage; ?>hospital/' + imgname + '"><i class="fa fa-caret-right"></i>' +
                        '<i class="fa fa-caret-down"></i>' +
                        '<span class="strong">' + diseaseCategory.name + '</span>' +
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
                $('.department-name>span').html($(this).text());
                $(this).addClass('active');
                $(this).parents('.department').addClass('active');
            }
        });
    }
</script>
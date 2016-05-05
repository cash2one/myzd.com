<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/searchdoctor.css");
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/custom/searchdoctor.js', CClientScript::POS_HEAD);
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlDoctorSearch = $this->createUrl('doctor/search');
$urlLoadDoctor = $this->createUrl('api/doctor', array('api' => 7, 'pagesize' => 24));
$urlLoadDoctorByDiseaseCategory = $this->createUrl('api/doctor', array('api' => 7, 'pagesize' => 24, 'disease_category' => ''));
$urlLoadDoctorByDiseaseSubCategory = $this->createUrl('api/doctor', array('api' => 7, 'pagesize' => 24, 'disease_sub_category' => ''));
$urlloadDiseaseCategory = $this->createUrl('api/diseasecategory', array('api' => 7)); ///api/diseasecategory
$urlLoadDiseaseByCategory = $this->createUrl('api/diseasebycategory', array('id' => ''));
$urlDoctorView = $this->createUrl('doctor/view', array('id' => ''));
$city = Yii::app()->request->getQuery('city', '');
$disease = Yii::app()->request->getQuery('disease', '');
$disease_name = Yii::app()->request->getQuery('disease_name', '');
$disease_category = Yii::app()->request->getQuery('disease_category', '');
$disease_sub_category = Yii::app()->request->getQuery('disease_sub_category', '');
$page = Yii::app()->request->getQuery('page', '');
?>
<div class="container-fluid bg-green">
    <div class="container find-navi"><a href="<?php echo Yii::app()->homeUrl; ?>">首页</a>&nbsp;&gt;&nbsp;找手术名医</div>
</div>
<div class="container pb20">
    <div class="row mt30">
        <div class="col-sm-3 col-md-2">
            <div class="strong text-center department-name"><span>全部</span></div>
        </div>
        <div class="col-sm-10">
            <div class="city-sick-title-city city-list"><span>所在城市：</span><a class="all city active">全部</a>
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
            <div class="city-sick-title disease-list"></div>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-2 col-sm-3 mt30">
            <div class="border-gray department-list">
                <div class="department active">
                    <div class="dept-header">
                        <i class="fa fa-caret-right"></i>
                        <i class="fa fa-caret-down"></i>
                        <span class="strong">外科</span>
                    </div>
                    <ul>
                        <li><a href="#">全部</a></li>
                        <li><a href="#">普外科</a></li>
                        <li><a href="#">心胸外科</a></li>
                        <li><a href="#">神经外科</a></li>
                        <li><a href="#">泌尿外科</a></li>
                        <li><a href="#">整形外科</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt20"><a href="<?php echo $this->createUrl('event/view', array('page' => 'remebot')); ?>" target="_blank"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146242724592795"></a></div>
        </div>
        <div class="col-sm-9 col-md-10">
            <div class="loading loading02"></div>
            <div class="row doclist">

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
<script>
    //url参数数组
    var condition = new Array();
    condition["city"] = '<?php echo $city ?>';
    condition["disease"] = '<?php echo $disease; ?>';
    condition["disease_name"] = '<?php echo $disease_name; ?>';
    condition["disease_category"] = '<?php echo $disease_category; ?>';
    condition["disease_sub_category"] = '<?php echo $disease_sub_category; ?>';
    condition["page"] = '<?php echo $page == '' ? 1 : $page; ?>';
    var urlLoadDoctor = '<?php echo $urlLoadDoctor; ?>';
    $(document).ready(function () {
        ajaxLoadDoctor('&getcount=1');
        setCityActive();
        ajaxLoadDiseaseCategory();
        var disease_category = condition["disease_sub_category"] == '' ? 1 : condition["disease_sub_category"];
        ajaxLoadDiseaseByCategory(disease_category);
        $('.city-list .all').click(function (e) {
            e.preventDefault();
            condition["city"] = '';
            condition["page"] = 1;
            ajaxLoadDoctor('&getcount=1');
        });
        $('.city-list .city').click(function (e) {
            e.preventDefault();
            var cityId = $(this).attr('data-id');
            condition["city"] = cityId;
            condition["page"] = 1;
            ajaxLoadDoctor('&getcount=1');
            setCityActive();
        });
        if (condition["disease_name"]) {
            $('.department-name>span').html(condition["disease_name"]);
        }
    });
    /**** ajax异步加载医生 ****/
    function ajaxLoadDoctor(getCount) {
        var urlDoctorView = '<?php echo $urlDoctorView; ?>';
        var urlAjaxLoadDoctor = urlLoadDoctor + setUrlCondition();
        urlAjaxLoadDoctor += getCount;
        $('.loading').show();
        $.ajax({
            url: urlAjaxLoadDoctor,
            success: function (data) {
                setPages(data.dataNum, condition["page"]);
                setDoctorHtml(data, urlDoctorView);
                $('.loading').hide();
            },
            error: function () {
                $('.loading').hide();
            }
        });
        setLocationUrl();
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
    /**** ajax异步加载疾病 ****/
    function ajaxLoadDiseaseByCategory(subCatId) {
        var urlLoadDiseaseByCategory = '<?php echo $urlLoadDiseaseByCategory ?>' + subCatId;
        $.ajax({
            url: urlLoadDiseaseByCategory,
            success: function (data) {
                setDiseaseHtml(data, subCatId);
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
                innerHtml += '<div class="department ' + active + '">' +
                        '<div class="dept-header">' +
                        '<span class="'+imgname+'"></span><i class="fa fa-caret-right"></i>' +
                        '<i class="fa fa-caret-down"></i>' +
                        '<span class="strong">' + diseaseCategory.name + '</span>' +
                        '</div>' +
                        '<ul>';
                //'<li><a class="diseaseCategory" data-id = "' + diseaseCategory.id + '" href="<?php echo $urlLoadDoctorByDiseaseCategory; ?>' + diseaseCategory.id + '">全部</a></li>';
                var subCats = diseaseCategory.subCat;
                for (var j = 0; j < subCats.length; j++) {
                    var subCat = subCats[j];
                    innerHtml += '<li class="ml10"><a class="subCat" data-id = "' + subCat.id + '" href="<?php echo $urlLoadDoctorByDiseaseSubCategory; ?>' + subCat.id + '">' + subCat.name + '</a></li>';
                }
                innerHtml += '</ul></div>';
            }
            $('.department-list').html(innerHtml);
            setDiseaseCategoryActive();
            initDeptFunction();
        }
    }
    /**** 设置疾病html ****/
    function setDiseaseHtml(data, subCatId) {
        if (data.results) {
            var diseases = data.results.disease;
            var innerHtml = '<span class="dis-title">具体疾病：</span><span><a class="all" data-id="' + subCatId + '" href="<?php echo $urlLoadDoctorByDiseaseSubCategory; ?>' + subCatId + '">全部</a></span>';
            for (var i = 0; i < diseases.length; i++) {
                var disease = diseases[i];
                innerHtml += '<span><a class="disease" data-id="' + disease.id + '" href = "<?php echo $urlLoadDoctor; ?>">' + disease.name + '</a></span>';
            }
            $('.disease-list').html(innerHtml);
            initDiseaseFunction();
        }
    }
    function setUrlCondition() {
        var urlCondition = "";
        for ($key in condition) {
            if (condition[$key] && condition[$key] !== "") {
                urlCondition += "&" + $key + "=" + condition[$key];
            }
        }
        return urlCondition;
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
        var newUrl = "<?php echo $urlDoctorSearch; ?>" + urlCondition;
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

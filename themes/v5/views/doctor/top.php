<?php
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/searchdoctor100.min.css");
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/searchdoctor.min.js', CClientScript::POS_END);
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlDoctorSearch = $this->createUrl('doctor/top');
$urlLoadDoctor = $this->createUrl('api/doctor', array('api' => 7, 'pagesize' => 24));
$urlLoadDoctorByDiseaseCategory = $this->createUrl('api/doctor', array('api' => 7, 'pagesize' => 24, 'disease_category' => ''));
$urlLoadDoctorByDiseaseSubCategory = $this->createUrl('api/doctor', array('api' => 7, 'pagesize' => 24, 'disease_sub_category' => ''));
$urlloadDiseaseCategory = $this->createUrl('api/diseasecategory', array('api' => 7)); ///api/diseasecategory
$urlLoadDiseaseByCategory = $this->createUrl('api/diseasebycategory', array('id' => ''));
$urlLoadSecondaryDepartment = $this->createUrl('api/secondarydepartment', array('api' => 7, 'disease_id' => ''));
$urlLoadCity = $this->createUrl('doctor/citybydoctor');
$urlDoctorView = $this->createUrl('doctor/view', array('id' => ''));
$city = Yii::app()->request->getQuery('city', '');
$disease = Yii::app()->request->getQuery('disease', '');
$disease_name = Yii::app()->request->getQuery('disease_name', '');
$disease_category = Yii::app()->request->getQuery('disease_category', '');
$disease_sub_category = Yii::app()->request->getQuery('disease_sub_category', '');
$page = Yii::app()->request->getQuery('page', '');
?>
<section id="doctorList">
    <div class="container-fluid bg-green">
        <div class="container">
            <div class="crumbs-doctor">
                <div><a href="<?php echo Yii::app()->homeUrl; ?>">首页</a> > <a href="<?php echo $this->createUrl('doctor/findexpert'); ?>" target="_blank">找名医</a> > <span class="department main-department"></span></div>
            </div>
        </div>
    </div>
    <div class="container pb20 mt30">
        <div class="department-list">
            <div class=""><span  class="main-subCat"></span><span  class="pull-right more-subCat toggle-subCat">展开其他二级科室 <i class="fa fa-angle-right"></i></span><span  class="pull-right retract-subCat toggle-subCat">收起其他二级科室 <i class="fa fa-angle-down"></i></span></div>
            <div class="clearfix"></div>
            <div class="mt10 subCatList"></div>
        </div>
        <div class="mt10 select-condition">
            <div class="color-666 text12">为您找到<span class="color-5ebfb8 doctorNum"></span>位医生</div>
            <div class="divider-line-first" class="mt5"></div>
            <div class="mt20 select-disease"></div>
            <div class="mt10 mb20 divider-line"></div>
            <div class="city-list">
            </div>
            <div class="mt20 mb20 divider-line"></div>
            <div class="select-title">医生级别：</div><a class="mtitle active" data-id="">全部</a><a class="mtitle" data-id="1">主任医师</a><a class="mtitle" data-id="2">副主任医师</a>
        </div> 
        <div class="row ">
            <div class="col-sm-12 col-md-12">
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
</section>
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
        ajaxLoadCity();
        $('.toggle-subCat').click(function () {
            $(this).parents('.department-list').find('.more-subCat').toggle();
            $(this).parents('.department-list').find('.retract-subCat').toggle();
            $('#doctorList .department-list .subCatList').toggle();
        });
        ajaxLoadDoctor('&getcount=1');
        setCityActive();
        ajaxLoadDiseaseCategory();
        var disease_category = condition["disease_sub_category"] == '' ? 1 : condition["disease_sub_category"];
        if (condition["disease_sub_category"] != '') {
            ajaxLoadDiseaseByCategory(disease_category);
        }
        if (condition["disease_name"]) {
            $('.department-name>span').html(condition["disease_name"]);
        }
        $('.mtitle').click(function (e) {
            e.preventDefault();
            $('#doctorList .select-condition .mtitle').removeClass('active');
            $(this).addClass('active');
            var mtitleId = $(this).attr('data-id');
            condition["mtitle"] = mtitleId;
            condition["page"] = 1;
            ajaxLoadDoctor('&getcount=1');
        });
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
//                var arrcity = [];
//                for (var i = 0; i < data.results.length; i++) {
//                    arrcity[i] = data.results[i].cityId;
//                }
                $('.doctorNum').html(data.dataNum);
                setPages(data.dataNum, condition["page"]);
                setDoctorHtml(data, urlDoctorView);
                $('.loading').hide();
            },
            error: function (XmlHttpRequest, textStatus, errorThrown) {
                $('.loading').hide();
                console.log(XmlHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
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
            },
            error: function (XmlHttpRequest, textStatus, errorThrown) {
                console.log(XmlHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
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
            },
            error: function (XmlHttpRequest, textStatus, errorThrown) {
                console.log(XmlHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    }
    /**** ajax异步加载城市 ****/
    function ajaxLoadCity() {
        var urlLoadCity = '<?php echo $urlLoadCity; ?>';
        $.ajax({
            url: urlLoadCity,
            success: function (data) {
                setCityList(data);
            },
            error: function (XmlHttpRequest, textStatus, errorThrown) {
                console.log(XmlHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            },
            complete: function () {
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
            }
        });
    }
    function setCityList(data) {
        if (data.results) {
            var innerHtml = '<div class="pull-left" style="height:7em;"><span class="select-title">按照地区：</span></div><a class="all city active">全部</a>';
            for (var i = 0; i < data.results.length; i++) {
                var city = data.results[i];
                innerHtml += '<a class="city" data-id="' + city.id + '">' + city.name + '</a>';
            }
            $('.city-list').html(innerHtml);
        }
    }

    /**** 设置科室菜单html ****/
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
                innerHtml += '<div class="department ' + active + '">' +
                        '<div class="dept-header">' + diseaseCategory.name +
                        '</div>';
                var subCats = diseaseCategory.subCat;
                for (var j = 0; j < subCats.length; j++) {
                    var subCat = subCats[j];
                    innerHtml += '<span class="other-subCat"><a class="subCat mr10" data-name="' + subCat.name + '" data-id = "' + subCat.id + '" href="<?php echo $urlLoadDoctorByDiseaseSubCategory; ?>' + subCat.id + '">' + subCat.name + '</a></span>';
                }
                innerHtml += '</div>';
            }
            $('.subCatList').html(innerHtml);
            if (condition["disease"] != '') {
                ajaxLoadSecondaryDepartment();
            }
            setDiseaseCategoryActive();
            initDeptFunction();
        }
    }
    /**** 设置疾病html ****/
    function setDiseaseHtml(data, subCatId) {
        if (data.results) {
            var diseases = data.results.disease;
            var innerHtml = '<div class="pull-left" style="min-height:3em;"><span class="select-title">具体疾病：</span></div><div><span class="disease-name"><a class="all active" data-id="' + subCatId + '" href="<?php echo $urlLoadDoctorByDiseaseSubCategory; ?>' + subCatId + '">全部</a></span>';
            for (var i = 0; i < diseases.length; i++) {
                var disease = diseases[i];
                innerHtml += '<span class="disease-name"><a class="disease" data-id="' + disease.id + '" href = "<?php echo $urlLoadDoctor; ?>">' + disease.name + '</a></span>';
            }
            innerHtml += '</div>';
            $('.select-disease').html(innerHtml);
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
//        var newUrl = "<?php echo $urlDoctorSearch; ?>" + urlCondition;
//        history.pushState(stateObject, title, newUrl);
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
            var subCatName = $(this).attr('data-name');
            if (subCatId == condition["disease_sub_category"]) {
                $('.department-list .main-subCat').html(subCatName);
                $('.main-department').html($(this).parents('.department').find('.dept-header').text());
                $(this).addClass('active');
                $(this).parents('.department').addClass('active');
            }
        });
    }
    /**** 根据疾病获取二级科室 ****/
    function ajaxLoadSecondaryDepartment() {
        var urlLoadSecondaryDepartment = '<?php echo $urlLoadSecondaryDepartment ?>' + condition["disease"];
        console.log(urlLoadSecondaryDepartment);
        $.ajax({
            url: urlLoadSecondaryDepartment,
            success: function (data) {
                var subId = data.sub_cat_id;
                setSecondaryDepartmentActive(subId);
            },
            error: function (XmlHttpRequest, textStatus, errorThrown) {
                console.log(XmlHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    }
    function setSecondaryDepartmentActive(subId) {
        $('.department-list .department').removeClass('active');
        $('.department-list .subCat').each(function () {
            var subCatId = $(this).attr('data-id');
            var subCatName = $(this).attr('data-name');
            if (subCatId == subId) {
                $('.department-list .main-subCat').html(subCatName);
                $('.main-department').html($(this).parents('.department').find('.dept-header').text());
                $(this).addClass('active');
                $(this).parents('.department').addClass('active');
            }
        });
    }
</script>

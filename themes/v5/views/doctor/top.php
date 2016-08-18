<?php
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/searchdoctor100.min.css");
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/searchdoctortop101.min.js', CClientScript::POS_END);
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlDoctorSearch = $this->createUrl('doctor/top');
$urlLoadDoctor = $this->createUrl('doctor/top');
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
$urlBaseUrl = Yii::app()->params['baseUrl'];
$disease_sub_category_param = Yii::app()->request->getQuery('disease_sub_category_param', '');
?>
<style>
    #doctorList .select-condition .city-list .city-title{height:7em;}
    #doctorList .select-condition .select-disease .disease-title{height:3em;}
    @media (max-width: 991px){#doctorList .select-condition .city-list .city-title,#doctorList .select-condition .select-disease .disease-title{height:1em;}} 
</style>
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
            <div class="color-666 text12">为您找到<span class="color-5ebfb8 doctorNum"><?php echo $doctorNum; ?></span>位医生</div>
            <div class="divider-line-first" class="mt5"></div>
            <div class="mt20 select-disease"></div>
            <div class="mt10 mb20 divider-line"></div>
            <div class="city-list">
            </div>
            <div class="mt20 mb20 divider-line"></div>
            <div class="select-title">医生级别：</div><a class="mtitle active" href="javascript:;" data-id="">全部</a><a href="javascript:;" class="mtitle" data-id="1" id="mtitle1">主任医师</a><a href="javascript:;" class="mtitle" data-id="2" id="mtitle2">副主任医师</a>
        </div> 
        <div class="row ">
            <div class="col-sm-12 col-md-12">
                <div class="loading loading02"></div>
                <div class="row doclist">
                    <?php
                    if (count($data->results) > 0) {
                        foreach ($data->results as $k => $v) {
                            $docdesc = '';
                            if (isset($v->desc)) {
                                if (mb_strlen($v->desc, 'utf-8') > 40) {
                                    $docdesc = mb_substr($v->desc, 0, 40, 'utf-8');
                                    $docdesc = $docdesc . '<span>...</span>';
                                } else {
                                    $docdesc = $v->desc;
                                }
                            } else {
                                $docdesc = '暂无信息';
                            }
                            $hpDeptName = $v->hpDeptName == null ? '&nbsp;' : $v->hpDeptName;
                            $hpName = $v->hpName == null ? '&nbsp;' : $v->hpName;
                            $isContractedImg = $v->isContracted == 0 ? '' : '';
                            $isMingyiyizhenImg = $v->ServiceId == 2 ? '' : '';
                            $academicianImg = $v->id == 117 ? '' : '';
                            $robotImg = '';
                            if ($v->id == 3209 || $v->id == 3208 || $v->id == 3207) {
                                $robotImg = '<div class="pull-right roboticon-img"></div>';
                            }
                            echo '<div class="col-lg-3 col-sm-4 mt30">';
                            echo '<a target="_blank" href="' . $urlDoctorView . $v->id . '">';
                            echo' <div class="border-gray expert-list">';
                            echo' <div><img class="img100" src="' . $v->imageUrl . '" alt="' . $v->name . '" title="' . $v->name . '"></div>';
                            if ($v->isContracted == 0) {
                                echo '';
                            } else {
                                echo '<div class="pull-right contracted-img"></div><div class="clearfix"></div>';
                            }
                            if ($v->ServiceId == 2) {
                                echo '<div class="pull-right mingyiyizhen-img"></div>';
                            } else {
                                echo '';
                            }
                            if ($v->id == 117) {
                                echo '<div class="pull-right academician-img"></div>';
                            } else {
                                echo '';
                            }
                            if ($v->id == 3209 || $v->id == 3208 || $v->id == 3207) {
                                echo '<div class="pull-right roboticon-img"></div>';
                            }
                            echo '<div class="text-center"><span class="strong">' . $v->name . '</span>&nbsp;';
                            echo '<span class="text-center mt5">' . $v->mTitle . '&nbsp;' . $v->aTitle . '</span></div>';
                            echo '<div class="text-center mt5 hpDeptName">' . $hpDeptName . '</div>';
                            echo '<div class="text-center mt5">' . $hpName . '</div>';
                            echo '<div class="docdesc text12"><span class="strong">擅长：</span>' . $docdesc . '</div>';
                            echo'<div class="text-center mt10"></div></div></a></div>';
                        }
                    } else {
                        echo '<div class="mt150 text-center color-gray">没有相关医生，请重新查找！</div>';
                    }
                    ?>
                </div>
                <!--分页-->
                <div class="mt30">
                    <nav class="text-center">
                        <ul class="pagination">
                            <?php echo $page; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="fristLoad" value="1">
</section>
<style>#doctorList .department-list .department{display:block!important;}</style>
<script>
    //url参数数组
    var condition = new Array();
    condition["city"] = '<?php echo $city ?>';
    condition["disease"] = '<?php echo $disease; ?>';
    condition["disease_name"] = '<?php echo $disease_name; ?>';
    condition["disease_category"] = '<?php echo $disease_category; ?>';
    condition["disease_sub_category"] = '<?php echo $disease_sub_category; ?>';
    condition["mtitle"] = '';
    urlLoadDoctor = '<?php echo $urlLoadDoctor; ?>';
    $(document).ready(function () {
        ajaxLoadCity();
        $('.toggle-subCat').click(function () {
            $(this).parents('.department-list').find('.more-subCat').toggle();
            $(this).parents('.department-list').find('.retract-subCat').toggle();
            $('#doctorList .department-list .subCatList').toggle();
        });
        //ajaxLoadDoctor('&getcount/1');
        setCityActive();
        ajaxLoadDiseaseCategory();
        var disease_category = condition["disease_sub_category"] == '' ? 1 : condition["disease_sub_category"];
        if (condition["disease_sub_category"] != '') {
            ajaxLoadDiseaseByCategory(disease_category);
        } else {
            var disease_category_param = '<?php echo $disease_sub_category_param; ?>';
            ajaxLoadDiseaseByCategory(disease_category_param);
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
            condition["disease_sub_category"] = '';
            condition["disease_sub_category_param"] = '<?php if (array_key_exists("disease_sub_category", $prames)) echo $prames['disease_sub_category'];if (array_key_exists("disease_sub_category_param", $prames)) echo $prames['disease_sub_category_param']; ?>';
            condition["page"] = 1;
            if (condition["disease"] == "" && condition["city"] == "" && condition["mtitle"] == "") {
                window.location.href = 'doctor-top-disease_sub_category-' + condition["disease_sub_category_param"] + '-page-1-getcount-1.html';
            } else {
                ajaxLoadDoctor('/getcount/1');
            }
//            ajaxLoadDoctor('/getcount/1');
        });
        var mtitleId = '<?php if (array_key_exists("mtitle", $prames)) echo $prames['mtitle']; ?>';
        if (mtitleId == '') {
            $('.mtitle:first').addClass('active');
        } else {
            $('.mtitle').removeClass('active');
            $("#mtitle" + mtitleId).attr('class', "mtitle active");
        }

    });
    /**** ajax异步加载医生 ****/
    function ajaxLoadDoctor(getCount) {
        var urlDoctorView = '<?php echo $urlDoctorView; ?>';
        var urlAjaxLoadDoctor = urlLoadDoctor + "/" + setUrlCondition();
        urlAjaxLoadDoctor += getCount;
        window.location.href = urlAjaxLoadDoctor;
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
            }, complete: function () {
                initDiseaseFunction();
                var disease_sub_category = '<?php if (array_key_exists("disease_sub_category", $prames)) echo $prames['disease_sub_category']; ?>';
                var diseaseId = '<?php if (array_key_exists("disease", $prames)) echo $prames['disease']; ?>';
                if (diseaseId == '') {
                    $("#disease" + disease_sub_category).addClass('active');
                } else {
                    $('.disease').removeClass('active');
                    $('.disease-all').removeClass('active');
//                    $("#disease"+disease_sub_category).addClass('active');
                    $("#disease" + diseaseId).attr('class', "disease active");
                }
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

            }
        });
    }
    function setCityList(data) {
        if (data.results) {
            var innerHtml = '<div class="pull-left city-title"><span class="select-title">按照地区：</span></div><a href="javascript:;" class="city all active">全部</a>';
            for (var i = 0; i < data.results.length; i++) {
                var city = data.results[i];
                innerHtml += '<a id="city' + city.id + '" class="city city-other" href="javascript:;" data-id="' + city.id + '">' + city.name + '</a>';
            }
            $('.city-list').html(innerHtml);
            $('.city-list .all.city').click(function (e) {
                e.preventDefault();
                condition["city"] = '';
                condition["disease_sub_category"] = '';
                condition["disease_sub_category_param"] = '<?php if (array_key_exists("disease_sub_category", $prames)) echo $prames['disease_sub_category'];if (array_key_exists("disease_sub_category_param", $prames)) echo $prames['disease_sub_category_param']; ?>';
                condition["page"] = 1;
                if (condition["disease"] == "" && condition["city"] == "" && condition["mtitle"] == "") {
                    window.location.href = 'doctor-top-disease_sub_category-' + condition["disease_sub_category_param"] + '-page-1-getcount-1.html';
                } else {
                    ajaxLoadDoctor('/getcount/1');
                }
            });
            $('.city-list .city-other').click(function (e) {
                e.preventDefault();
                var cityId = $(this).attr('data-id');
                condition["city"] = cityId;
                condition["disease_sub_category"] = '';
                condition["disease_sub_category_param"] = '<?php if (array_key_exists("disease_sub_category", $prames)) echo $prames['disease_sub_category'];if (array_key_exists("disease_sub_category_param", $prames)) echo $prames['disease_sub_category_param']; ?>';
                condition["page"] = 1;
                ajaxLoadDoctor('/getcount/1');
                setCityActive();
            });
            var cityId = '<?php if (array_key_exists("city", $prames)) echo $prames['city']; ?>';
            if (cityId == '') {
                $('.city:first').addClass('active');
            } else {
                $('.city').removeClass('active');
                $("#city" + cityId).attr('class', "city active");
            }
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
                    innerHtml += '<span class="other-subCat"><a class="subCat mr10" data-name="' + subCat.name + '" data-id = "' + subCat.id + '" href="<?php echo $urlBaseUrl; ?>' + '/doctor-top-disease_sub_category-' + subCat.id + '-page-1-getcount-1.html">' + subCat.name + '</a></span>';
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
            var innerHtml = '<div class="pull-left disease-title"><span class="select-title">具体疾病：</span></div><div><span class="disease-name"><a data-subcat="' + subCatId + '" id="disease' + subCatId + '" class="disease-all all active" data-id="' + subCatId + '" href="javascript:;">全部</a></span>';
            for (var i = 0; i < diseases.length; i++) {
                var disease = diseases[i];
                innerHtml += '<span class="disease-name"><a data-subcat="' + subCatId + '" class="disease" id="disease' + disease.id + '" data-id="' + disease.id + '" href = "javascript:;">' + disease.name + '</a></span>';
            }
            innerHtml += '</div>';
            $('.select-disease').html(innerHtml);
        }
    }
    function setUrlCondition() {
        var urlCondition = "";
        for ($key in condition) {
            if (condition[$key] && condition[$key] !== "") {
                if (urlCondition == "") {
                    urlCondition += $key + "/" + condition[$key];
                } else {
                    urlCondition += "/" + $key + "/" + condition[$key];
                }
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
//        var newUrl = "//echo $urlDoctorSearch; ?>" + urlCondition;
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

<?php
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/searchdoctor100.min.css");
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/custom/searchdoctor.js?v=' . time(), CClientScript::POS_HEAD);
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlDoctorSearch = $this->createUrl('doctor/top');
$urlLoadDoctor = $this->createUrl('api/doctor', array('api' => 7, 'pagesize' => 24));
$urlLoadDoctorByDiseaseCategory = $this->createUrl('api/doctor', array('api' => 7, 'pagesize' => 24, 'disease_category' => ''));
$urlLoadDoctorByDiseaseSubCategory = $this->createUrl('api/doctor', array('api' => 7, 'pagesize' => 24, 'disease_sub_category' => ''));
$urlloadDiseaseCategory = $this->createUrl('api/diseasecategory', array('api' => 7)); ///api/diseasecategory
$urlLoadDiseaseByCategory = $this->createUrl('api/diseasebycategory', array('id' => ''));
$urlDoctorView = $this->createUrl('doctor/view', array('id' => ''));
$urlDoctorStaticContent = $this->createUrl('doctor/doctorstaticcontent');
$urlScrollAcceptBooking = $this->createUrl('doctor/scrollacceptbooking');
$city = Yii::app()->request->getQuery('city', '');
$disease = Yii::app()->request->getQuery('disease', '');
$disease_name = Yii::app()->request->getQuery('disease_name', '');
$disease_category = Yii::app()->request->getQuery('disease_category', '');
$disease_sub_category = Yii::app()->request->getQuery('disease_sub_category', '');
$page = Yii::app()->request->getQuery('page', '');
$this->pageTitle = "预约名医手术,网上预约,医生排行榜,好医生_名医主刀网";
$this->htmlMetaKeywords = "找名医,网上预约手术,床位预约";
$this->htmlMetaDescription = "名医主刀网为您提供国内医生预约手术,医生排行榜,医生大全,专家主任哪个好等权威信息;助您在第一时间找到好医生,以最快的时间预约医生并安排手术,网上预约手术就看名医主刀网。";
?>
<div class="container-fluid bg-green">
    <div class="row" style="text-decoration:underline;">
        <img src="http://static.mingyizhudao.com/146242718127132" alt=""/>
    </div>
</div>
<div class="container pb20" id="findexpert">
    <div class="row mt30">
        <div class="col-sm-8 pr0">
            <div></div>
            <div class="deptlist">
                <div class="">
                    <div class="department clearfix">
                        <div class="waike dept active" data-page="dept1"></div>
                        <div class="guke dept" data-page="dept2"></div>
                        <div class="fuchanke dept" data-page="dept3"></div>
                        <div class="xiaoerke dept" data-page="dept4"></div>
                        <div class="wuguanke dept" data-page="dept5"></div>
                        <div class="neike dept" data-page="dept6"></div>
                    </div>
                </div>
            </div>
            <div class="second-faculty-list">

            </div>
        </div>
        <div class="col-sm-4">
            <div class="service-circuit">
                <div><img src="http://static.mingyizhudao.com/146581012481437"></div>
                <div class="scroll-booking-area">
                    <ul class="patient-bxslider">
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="recommend-expert">
        <div class="text-center"><span class="short-line"></span><span class="title-content">每周推荐</span><span class="short-line"></span></div>
        <div class="recommend-expert-list">
            <div class="row">
            </div>
        </div>
    </div>
</div>

</div>
<script>
    $(document).ready(function () {
        $('#findexpert .department .dept').mouseover(function () {
            $('#findexpert .department .dept').removeClass('active');
            $(this).addClass('active');
            var datapage = $(this).attr('data-page');
            $('#findexpert .second-faculty-list .second-faculty-area').removeClass('active');
            $('#' + datapage).addClass('active');
        });
        ajaxLoadDiseaseCategory();
        ajaxDoctorStaticContent();
        ajaxScrollAcceptBooking();

    });
    /**** ajax异步加载预约单滚动 ****/
    function ajaxScrollAcceptBooking() {
        var urlScrollAcceptBooking = '<?php echo $urlScrollAcceptBooking; ?>';
        $.ajax({
            url: urlScrollAcceptBooking,
            success: function (data) {
                setScrollAcceptBooking(data);
            },
            error: function (XmlHttpRequest, textStatus, errorThrown) {
                console.log(XmlHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    }
    /**** 设置预约单滚动html ****/
    function setScrollAcceptBooking(data, urlDoctorView) {
        var urlDoctorView = '<?php echo $urlDoctorView; ?>';
        var innerHtml = '';
        if (data.results) {
            var i = 1;
            var j = 0;
            var scroll = eval(data.results);
            for (i = 1; i <= transform(scroll).length; i++) {
                var scrollBooking = scroll[i];
                innerHtml += '<li><div class="scroll-list">';
                for (j = 0; j < scrollBooking.length; j++) {
                    innerHtml += '<div class="scrollBooking"><a href="' + urlDoctorView + scrollBooking[j].doctor_id + '" target="_blank">' + scrollBooking[j].patient_name + '已接受' + scrollBooking[j].doctor_hospital_name + scrollBooking[j].doctor_name + '手术</a></div>';
                }
                innerHtml += '</div></li>';
            }
            $('.patient-bxslider').html(innerHtml);
            $('.patient-bxslider').bxSlider({
                mode: 'vertical',
                slideMargin: 0,
                controls: true,
                pause: 5000,
                speed: 1000,
                auto: true
            });
            $('.bx-pager').hide();
            $('.bx-controls-direction').hide();
        }
    }

    function transform(obj) {
        var arr = [];
        for (var item in obj) {
            arr.push(obj[item]);
        }
        return arr;
    }
    /**** ajax异步加载推荐医生 ****/
    function ajaxDoctorStaticContent() {
        var urlDoctorStaticContent = '<?php echo $urlDoctorStaticContent; ?>';
        $.ajax({
            url: urlDoctorStaticContent,
            success: function (data) {
                setDoctorStaticContent(data);
            },
            error: function (XmlHttpRequest, textStatus, errorThrown) {
                console.log(XmlHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    }
    /**** 设置推荐医生html ****/
    function setDoctorStaticContent(data) {
        var urlDoctorView = '<?php echo $urlDoctorView; ?>';
        var innerHtml = '';
        if (data.results) {
            var doctors = data.results.doctor;
            innerHtml += '<div class="row">';
            for (var i = 1; i <= doctors.length; i++) {
                var doctor = doctors[i - 1];
                var aTitle = doctor.aTitle == '无' ? '' : doctor.aTitle;
                var docdesc = '';
                if (doctor.description) {
                    docdesc = doctor.description.length > 40 ? doctor.description.substr(0, 40) + '...' : doctor.description;
                } else {
                    docdesc = '暂无信息';
                }
                var hpDeptName = doctor.hpDeptName == null ? '&nbsp;' : doctor.hpDeptName;
                var aTitle = doctor.aTitle == '无' ? '' : doctor.aTitle;
                innerHtml += '<div class="col-sm-3 mt20">' +
                        '<a target="_blank" href="' + urlDoctorView + doctor.id + '">' +
                        '<div class="expert-info border-gray"><div><div><img class="img100" src="' + doctor.imageUrl + '" alt="' + doctor.name + '" title="' + doctor.name + '"></div>' +
                        '<div class = "pull-right recommend-contracted-img"></div><div class="clearfix"></div >' +
                        '<div class = "text-center"><span class = "strong">' + doctor.name + '</span>&nbsp;<span class="text-center mt5">' + doctor.mTitle + '&nbsp;' + aTitle + '</span ></div>' +
                        '<div class = "text-center mt5 hpDeptName">' + hpDeptName + '</div>' +
                        '<div class = "text-center mt5">' + doctor.hospitalName + '</div>' +
                        '<div class = "desc"><strong>擅长：</strong>' + docdesc + '</div>' +
                        '</div></div></div>';
            }
            innerHtml += '</div>';
            $('.recommend-expert .recommend-expert-list').html(innerHtml);
        }
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
    /**** 设置二级科室html ****/
    function setDiseaseCategory(data) {
        var urlDoctorByDiseaseSubCategory = '<?php echo $this->createUrl('doctor/top', array('disease_sub_category' => '')); ?>';
        if (data.results) {
            var innerHtml = '';
            var diseaseCategorys = data.results;
            for (var i = 1; i <= diseaseCategorys.length; i++) {
                var diseaseCategory = diseaseCategorys[i - 1];
                var subCats = diseaseCategory.subCat;
                var active = '';
                if (i == 1) {
                    active = 'active';
                }
                innerHtml += '<div class="second-faculty-area ' + active + '" id="dept' + i + '">';
                for (var j = 0; j < subCats.length; j++) {
                    var subCat = subCats[j];
                    innerHtml += '<span class="second-faculty mr5"><a href="' + urlDoctorByDiseaseSubCategory + subCat.id + '" target="_blank">' + subCat.name + '</a></span>';
                }
                innerHtml += '</div>';
            }
            $('.second-faculty-list').html(innerHtml);
        }
    }
</script>

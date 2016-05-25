<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/event-mingyiyizhen.min.css?v=" . time());
$urlLoadFreediagnoseDoctors = $this->createUrl('api/freediagnosedoctors');
$urlDoctorView = $this->createUrl('doctor/view', array('id' => ''));
$pageCouont = Yii::app()->request->getQuery('pageCouont', '');
?>
<div class="container-fluid">
    <div class="row">
        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146140403608557" class="img-responsive w100">
    </div>
</div>
<div class="container" id="mingyiyizhen">
    <div class="city-search">
        <img class="mt-5" src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146140403634015"><span class="city-name ml10">城市：</span><span><a class="mr20 city active all" data-id="">全部</a><a class="mr20 city" data-id="1">北京</a><a class="mr20 city" data-id="73">上海</a><a class="mr20 city" data-id="200">广州</a><a class="mr20 city" data-id="391">重庆</a><a class="mr20 city" data-id="255">成都</a><a class="mr20 city" data-id="186">长沙</a><a class="city" data-id="other">其他</a></span>
    </div>
<!--    <div class="text-center service-header"><span class="short-line"></span><span class="content">服务流程</span><span class="short-line"></span></div>
    <div class="service-line"></div>
    <div class="service-circuit">
        <div class="step active" id="step1">
            <div class="number-icon">1</div>
            <div class="content">提交预约</div>
        </div>
        <div class="step" id="step2">
            <div class="number-icon">2</div>
            <div class="content">客服回访确认</div>
        </div>
        <div class="step" id="step3">
            <div class="number-icon">3</div>
            <div class="content">匹配对症专家</div>
        </div>
        <div class="step" id="step4">
            <div class="number-icon">4</div>
            <div class="content">确定就诊时间</div>
        </div>
        <div class="step" id="step5">
            <div class="number-icon">5</div>
            <div class="content">前往医院就诊</div>
        </div>
    </div>-->
    <div class="department">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs mt30" role="tablist">
            <li class="category active" data-page="dept1" data-category="1"><div class="dept-area"><div class="waike plline"></div></div></li>
            <li class="category" data-page="dept2" data-category="2"><div class="guke plline"></div></li>
            <li class="category" data-page="dept3" data-category="3"><div class="fuchanke plline"></div></li>
            <li class="category" data-page="dept4" data-category="4"><div class="xiaoerke plline"></div></li>
            <li class="category" data-page="dept5" data-category="5"><div class="wuguanke plline"></div></li>
            <li class="category" data-page="dept6" data-category="6"><div class="neike"></div></li>
        </ul>
        <div style="" class="text-center">
            <div class="loading loading02" style="position:absolute;margin:120px auto;"></div>
        </div>
        <!-- Tab panes -->
        <div class="tab-content expert-group">
            <!--分页-->
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
//        var i = 2;
//        function show() {
//            if (i < 6) {
//                $(".service-circuit .step").removeClass("active");
//                $(".service-circuit #step" + i).addClass("active");
//                i++;
//            }
//            if (i == 6) {
//                i = 1;
//            }
//        }
//        setInterval(show, 3000);
        $condition = new Array();
        $condition["pageCouont"] = '<?php echo $pageCouont == '' ? 1 : $pageCouont; ?>';
        $disease_category = 1;
        $cityId = '';
        $(".city-search .city").click(function () {
            $('.city-search .city').removeClass('active');
            $(this).addClass('active');
            $cityId = $(this).attr("data-id");
            $condition["pageCouont"] = 1;
            ajaxLoadFreediagnoseDoctors($cityId, $disease_category);
        });
        /**** 推荐医生切换 ****/
        $('.department .nav-tabs .category').mouseover(function () {
            $('.department .nav-tabs .category').removeClass('active');
            $(this).addClass('active');
            $disease_category = $(this).attr('data-category');
            var pageId = '#' + $(this).attr('data-page');
            $('.department .expList .tab-pane').removeClass('active');
            $(pageId).addClass('active');
            $condition["pageCouont"] = 1;
//            $cityId='';
//            $('.city-search .city').removeClass('active');
//            $(".city-search .city.all").addClass('active');
            ajaxLoadFreediagnoseDoctors($cityId, $disease_category);
        });
        ajaxLoadFreediagnoseDoctors($cityId, $disease_category);
    });
    function ajaxLoadFreediagnoseDoctors(cityId, disease_category) {
        var urlDoctorView = '<?php echo $urlDoctorView; ?>';
        var urlLoadFreediagnoseDoctors = '<?php echo $urlLoadFreediagnoseDoctors; ?>';
        $('.loading').show();
        $.ajax({
            url: urlLoadFreediagnoseDoctors + '?city=' + cityId + '&disease_category=' + disease_category + '&pagesize=20' + '&page=' + $condition["pageCouont"] + '&getcount=1',
            success: function (data) {
                $('.loading').hide();
                setFreediagnoseDoctors(data, urlDoctorView);
                if (data.dataNum > 20) {
                    setPages(data);
                }
                setLocationUrl();
            },
            error: function (XmlHttpRequest, textStatus, errorThrown) {
                $('.loading').hide();
                console.log(XmlHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    }
    function setFreediagnoseDoctors(data, urlDoctorView) {
        if (data.results) {
            var innerHtml = '<div class="row">';
            var active = '';
            if (data.results.length > 0) {
                for (var i = 0; i < data.results.length; i++) {
                    if (i == 0) {
                        active = 'active';
                    } else {
                        active = '';
                    }
                    var doctor = data.results[i];
                    var hpDeptName = doctor.hpDeptName == null ? "&nbsp;" : doctor.hpDeptName;
                    var hpName = doctor.hpName == null ? "&nbsp;" : doctor.hpName;
                    var contractedImg = doctor.isContracted == 1 ? '<div class="contracted-img"></div>' : '';
                    var aTitle = doctor.aTitle == '无' ? '' : doctor.aTitle;
                    innerHtml += '<div class="col-lg-3 col-md-6 col-sm-6 mt30" ><a target="_blank" href="' + urlDoctorView + doctor.id + '">' +
                            '<div class="expInfo text-center bg-white explist-border">' +
                            contractedImg + '<div class="mingyiyizhen-img"></div>' +
                            '<div><img class="img100" src="' + doctor.imageUrl + '"/></div>' +
                            '<div class="expName color-black">' + doctor.name + '</div>' +
                            '<div class="expTitle">' + doctor.mTitle + ' ' + aTitle + '</div>' +
                            '<div class="expHospital mt30">' + hpName + '</div>' +
                            '<div class="mt10 color-green mb50">' + hpDeptName + '</div>' +
                            '</div>' +
                            '</a>' +
                            '</div>';
                }
            } else {
                innerHtml += '<div class="ml15 mt10">正在寻找中，敬请期待。</div>';
                ;
            }
        }
        innerHtml += '</div><div class="mt30"><nav class="text-center"><ul class="pagination"></ul></nav></div>';
        $('.expert-group').html(innerHtml);
    }
    /**** 设置分页 ****/
    function setPages(data) {
        var datacount = Math.ceil(data.dataNum / 20);
        var innerHtml = '';
        var active = '';
        var maxPages = datacount > 8 ? 8 : datacount;
        var starPage = $condition['pageCouont'] > 5 ? $condition['pageCouont'] : 5;
        var activePage = $condition['pageCouont'] > 5 ? 5 : $condition['pageCouont'];
        var pageText = '';
        innerHtml += '<li><a class="pagePre" href="javascript:;" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
        if (datacount > 5) {
            innerHtml += '<li class="page-item"><a data-page="' + 1 + '" href="javascript:;">首页</a></li>';
        }
        for (var i = 0; i < maxPages; i++) {
            if (i === activePage - 1) {
                active = 'active';
            } else {
                active = '';
            }
            pageText = starPage - 4 + i;
            if (pageText > datacount) {
                break;
            }
            innerHtml += '<li class="page-item ' + active + '"><a data-page="' + (starPage - 4 + i) + '" href="javascript:;">' + (starPage - 4 + i) + '</a></li>';
        }
        if (datacount > 8 & starPage < datacount - 4) {
            innerHtml += '<li class=""><a href="javascript:;">...</a></li>' +
                    '<li class="page-item"><a data-page="' + datacount + '" href="javascript:;">' + datacount + '</a></li>';
        }
        innerHtml += '<li><a class="pageNext" href="javascript:;" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
        $('.pagination').html(innerHtml);
        initPageFunction(datacount);
    }
    /*** 初始化分页点击方法 *****/
    function initPageFunction(datacount) {
        //分页点击加载医生
        $(".page-item a").click(function () {
            var page = $(this).attr("data-page");
            $condition["pageCouont"] = page;
            ajaxLoadFreediagnoseDoctors($cityId, $disease_category);
        });
        //上一页
        $(".pagePre").click(function () {
            if ($condition["pageCouont"] <= 1) {
                return;
            } else {
                $condition["pageCouont"]--;
                ajaxLoadFreediagnoseDoctors($cityId, $disease_category);
            }
        });
//        下一页
        $(".pageNext").click(function () {
            if ($condition["pageCouont"] >= datacount) {
                return;
            } else {
                $condition["pageCouont"]++;
                ajaxLoadFreediagnoseDoctors($cityId, $disease_category);
            }
        });
    }
    //更改url
    function setLocationUrl() {
        var stateObject = {};
        var title = "";
        var urlCondition = '';
        for ($key in $condition) {
            if ($condition[$key] && $condition[$key] !== "") {
                urlCondition += "&" + $key + "=" + $condition[$key];
            }
        }
        urlCondition = urlCondition.substring(1);
        urlCondition = "?" + urlCondition;
        var newUrl = '<?php echo $this->createUrl('event/view/mingyiyizhen'); ?>' + urlCondition;
        history.pushState(stateObject, title, newUrl);
    }
</script>
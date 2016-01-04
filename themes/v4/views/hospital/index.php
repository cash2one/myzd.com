<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlQuickBook = $this->createUrl('booking/quickbook');
$urlHospitalView = $this->createUrl('hospital/view', array('id' => ''));    // hospital/view?id=$id.
$urlLoadHospitalsByCity = $this->createUrl('api/list', array('model' => 'hospital', 'city' => '')); // append city.id behind.
$urlLoadHospital = $this->createUrl('api/view', array('model' => 'hospital', 'id' => ''));  // append hospital.id behind.
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/hospital.css");
$this->pageTitle = '北京,上海,南京,杭州,广州等多个城市三级甲等医院, 北京,上海,南京,杭州,广州等多个城市专家名医手术预约_名医主刀';
$this->htmlMetaKeywords = '三级甲等医院';
$this->htmlMetaDescription = '北京,上海,南京,杭州,广州等多个城市三级甲等医院, 北京,上海,南京,杭州,广州等多个城市专家名医手术预约。涵盖国内所有重点学科的顶尖三甲医院。名医随时有,手术不再难。名医主刀';
?>
<?php ?>

<div class="content-img">
    <div class="container-fluid">
        <div class="row">
            <img src="<?php echo $urlResImage; ?>general/hospital.jpg" alt=""/>
        </div>
    </div>
</div>
<div class="container">
    <div id="hospitallist" class="pt20 pb15 mb20">
        <div class="area mt20"><span class="container-title pl0 pr0">推荐医院</span><span class=""><a class="city" data-city="1" href="javascript:void(0);">北京</a></span><span class="border-left"><a class="city" data-city="73" href="javascript:void(0);">上海</a></span><span class="border-left"><a class="city" data-city="200" href="javascript:void(0);">广州</a></span><span class="border-left morecity"><a class="" data-city="-1" href="javascript:void(0);">更多 <i class="fa fa fa-caret-down"></i></a></span></div>
        <div class="city-content">
            <div class="citylist">
                <div class="mt10">
                    <span class="strong">江苏省</span>
                    <span class="border-left"><a class="city" data-city="74" href="javascript:void(0);">南京</a></span>
                    <span class="border-left"><a class="city" data-city="75" href="javascript:void(0);">无锡</a></span>
                    <span class="border-left"><a class="city" data-city="76" href="javascript:void(0);">徐州</a></span>
                    <span class="border-left"><a class="city" data-city="77" href="javascript:void(0);">常州</a></span>
                    <span class="border-left"><a class="city" data-city="78" href="javascript:void(0);">苏州</a></span>
                    <span class="border-left"><a class="city" data-city="79" href="javascript:void(0);">南通</a></span>
                    <span class="border-left"><a class="city" data-city="80" href="javascript:void(0);">连云港</a></span>
                    <span class="border-left"><a class="city" data-city="81" href="javascript:void(0);">淮安</a></span>
                    <span class="border-left"><a class="city" data-city="82" href="javascript:void(0);">盐城</a></span>
                    <span class="border-left"><a class="city" data-city="83" href="javascript:void(0);">扬州</a></span>
                    <span class="border-left"><a class="city" data-city="84" href="javascript:void(0);">镇江</a></span>
                </div>
                <div class="mt10">
                    <span class="strong">浙江省</span>
                    <span class="border-left"><a class="city" data-city="87" href="javascript:void(0);">杭州</a></span>
                    <span class="border-left"><a class="city" data-city="88" href="javascript:void(0);">宁波</a></span>
                    <span class="border-left"><a class="city" data-city="89" href="javascript:void(0);">温州</a></span>
                    <span class="border-left"><a class="city" data-city="90" href="javascript:void(0);">嘉兴</a></span>
                    <span class="border-left"><a class="city" data-city="91" href="javascript:void(0);">湖州</a></span>
                    <span class="border-left"><a class="city" data-city="93" href="javascript:void(0);">金华</a></span>
                    <span class="border-left"><a class="city" data-city="94" href="javascript:void(0);">衢州</a></span>
                    <span class="border-left"><a class="city" data-city="95" href="javascript:void(0);">舟山</a></span>
                    <span class="border-left"><a class="city" data-city="97" href="javascript:void(0);">丽水</a></span>
                </div>
                <div class="mt10">
                    <span class="strong">广东省</span>
                    <span class="border-left"><a class="city" data-city="200" href="javascript:void(0);">广州</a></span>
                    <span class="border-left"><a class="city" data-city="204" href="javascript:void(0);">汕头</a></span>
                </div>
                <div class="mt10">
                    <span class="strong">湖南省</span>
                    <span class="border-left"><a class="city" data-city="186" href="javascript:void(0);">长沙</a></span>
                </div>
                <div class="mt10">
                    <span class="strong">福建省</span>
                    <span class="border-left"><a class="city" data-city="114" href="javascript:void(0);">福州</a></span>
                </div>
            </div>
        </div>
        <div class=" pad10 mt10">
            <div class="row">
                <div class="col-sm-9">
                    <div class="border-gary pl10 pr10 pb20">
                        <div class="loading loading02"></div>
                        <div class="row hlist">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="process">
                        <div class="process-title">
                            预约流程
                        </div>
                        <div class="process-content">
                            <div class="step">第一步</div>
                            <img src="<?php echo $urlResImage; ?>general/angle-down.png"/>
                            <div class="step-content">
                                <div>通过网站/微信/APP/电话</div>
                                <div>提交预约单</div>
                            </div>
                            <div class="step">第二步</div>
                            <img src="<?php echo $urlResImage; ?>general/angle-down.png"/>
                            <div class="step-content">客服回访确认预约单</div>
                            <div class="step">第三步</div>
                            <img src="<?php echo $urlResImage; ?>general/angle-down.png"/>
                            <div class="step-content">预约成功并短信通知</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        //初始加载ajax
        ajaxGetHospitalByCity(getCityId());
        setActiveCity(getCityId());
        $(".city").click(function () {
            $cityid = $(this).attr("data-city");
            ajaxGetHospitalByCity($cityid);
            setActiveCity($cityid);
            var stateObject = {};
            var title = "";
            var newUrl = "<?php echo $this->createUrl("hospital/index"); ?>" + "?city=" + $cityid;
            history.pushState(stateObject, title, newUrl);
        });
        $("#hospitallist .morecity").mouseover(function () {
            $("#hospitallist .city-content").show();
        });
        $("#hospitallist .morecity").mouseout(function () {
            $("#hospitallist .city-content").hide();
        });
        $("#hospitallist .city-content").mouseover(function () {
            $(this).show();
        });
        $("#hospitallist .city-content").mouseout(function () {
            $(this).hide();
        });
        $(".citylist span").click(function(){
            $("#hospitallist .city-content").hide();
        });
    });
    //异步加载hospital List
    var $hospitals;
    function ajaxGetHospitalByCity(cityid) {
        //url: 'http://mingyizhudao.com/api/hospital?city=' + hCode,
        var urlLoadHospital = "<?php echo $urlLoadHospitalsByCity; ?>";
        urlLoadHospital += cityid;
        // show loading gif.
        $("#hospitallist .loading").show();
        $.ajax({
            url: urlLoadHospital,
            async: false,
            success: function (data) {
                $hospitals = data.hospitals;
                setH_list();
            },
            complete: function () {
                // hide loading gif.
                $("#hospitallist .loading").hide();
            }
        });

    }
    function setH_list() {
        var innerHtml = '';
        if ($hospitals.length > 0) {
            for (var i = 0; i < $hospitals.length; i++) {
                innerHtml = innerHtml +
                        '<div class="col-sm-12 col-md-6 mt20"><a href="<?php echo $urlHospitalView; ?>' +
                        $hospitals[i].id + '"><div class="media border-gray"><div class="pull-left"><img class="media-object img130" src="' +
                        $hospitals[i].imageUrl + '" alt="..."></div>' +
                        '<div class="media-body"><div class="mt20">' +
                        $hospitals[i].name + '</div><div class="mt10">' +
                        $hospitals[i].hpClass + '</div><div class="mt10">电话：' +
                        $hospitals[i].phone + '</div></div></div></a></div>';
            }
        } else {
            innerHtml = "<div class='col-sm-12'><h4>暂无此城市的医院信息</h4></div>";
        }
        $('.hlist').html(innerHtml);
    }
    //cityActive
    function setActiveCity($cityId) {
        $(".city").parent("span").removeClass("active");
        $(".city").each(function () {
            var $data_city = $(this).attr("data-city");
            if ($data_city == $cityId) {
                $(this).parent("span").addClass("active");
            }
        });
    }
    //get location id
    function getCityId() {
        var cityId = '';
        var url = window.location.search;
        if (url.indexOf("?") != -1) {
            var str = url.substr(1);
            strs = str.split("&");
            for (i = 0; i < strs.length; i++) {
                if ([strs[i].split("=")[0]] == 'city')
                    cityId = unescape(strs[i].split("=")[1]);
            }
        }
        return cityId;
    }

</script>




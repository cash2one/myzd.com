<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlQuickBook = $this->createUrl('booking/quickbook');
$city = $_GET["city"];

$urlHospitalView = $this->createUrl('hospital/view', array('id' => ''));    // hospital/view?id=$id.
$urlLoadHospitalsByCity = $this->createUrl('api/list', array('model' => 'hospital', 'city' => '')); // append city.id behind.
$urlLoadHospital = $this->createUrl('api/view', array('model' => 'hospital', 'id' => ''));  // append hospital.id behind.
?>
<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/hospital.css");
?>

<div class="main-hospital">
    <div class="row h-content">
        <div class="h-left col-sm-3 col-md-2 col-xs-12 citylist">
            <a href="javascript:ajaxGetHospitalByCity(1)">
                <div class="city nav-city" data-city='1'>
                    <span class="">北京</span>
                </div>
            </a>
            <a href="javascript:ajaxGetHospitalByCity(73)">
                <div class="city nav-city" data-city='73'>
                    <span class="">上海</span>
                </div>
            </a>
            <a href="javascript:ajaxGetHospitalByCity(74)">
                <div class="city nav-city" data-city='74'>
                    <span class="">南京</span>
                </div>
            </a>

        </div>
        <div class="col-sm-9 col-md-10 col-xs-12 hlist">

            <div class="h-form row">
                <form class="form-inline">
                    <div class="form-group ml10 sel-hospital">
                        <select class="sel form-control form-condivol">
                            <option> -- 选择医院 -- </option>
                        </select>
                    </div>
                    <div class="form-group ml10 sel-dept">
                        <select class="sel form-control form-condivol">
                            <option> -- 选择科室 -- </option>
                        </select>
                    </div>
                    <a id="header-book" data-url="" data-toggle="modal" data-target="#bookingModal" class="btn btn-booking ml10">快速预约</a>
                </form>
            </div>
            <div class="">
                <div class="row border-bottom list-header">
                    <div class="col-md-5 col-sm-6 col-xs-5"><span class="pl10">医院名称</span></div>
                    <div class="col-md-3 col-sm-3 col-xs-4 text-center">特色科室</div>
                    <div class="col-md-3 col-sm-3 col-xs-3 text-center">立即预约</div>
                </div>
                <div style="width: 48px;margin: 0 auto;">
                    <div class="loading loading02 mt150" style="position: absolute;z-index: 100;">
                    </div>
                </div>
                <div class="h-list">

                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->renderPartial("//booking/_modalQuickBook"); ?>

<script>
    var $hospitals;
    $(document).ready(function () {
        //初始加载ajax
        ajaxGetHospitalByCity(getCityId());
        //初始添加city 的 active
        setActiveCity(getCityId());

        //点击时改变active
        $(".nav-city").click(function () {

            $(".nav-city").removeClass("active");

            $(this).addClass("active");
            var stateObject = {};
            var title = "";
            var newUrl = "<?php echo $this->createUrl("hospital/index"); ?>" + "?city=" + $(this).attr("data-city");
            history.pushState(stateObject, title, newUrl);
        });

    });
    //异步加载hospital List
    function ajaxGetHospitalByCity(cityid) {
        //url: 'http://mingyizhudao.com/api/hospital?city=' + hCode,
        var urlLoadHospital = "<?php echo $urlLoadHospitalsByCity; ?>";
        urlLoadHospital += cityid;
        // show loading gif.
        $(".loading").show();
        $.ajax({
            url: urlLoadHospital,
            async: false,
            success: function (data) {
                $hospitals = data.hospitals;
                if ($hospitals){
                    setH_list();
                    setHospitalSelect();
                    setDeptSelect($hospitals[0].id);
                }else{
                    $('.h-list').html("<h4>暂无此城市的医院信息</h4>");
                }
            },
            complete: function () {
                // hide loading gif.
                $(".loading").hide();
            },
            error: function () {
                $(".loading").hide();
            }
        });

    }
    function setH_list() {
        var innerHtml = dataToHtml($hospitals);
        $('.h-list').html(innerHtml);

        //设置hospital list 中的btn的 data-url
        for (var i = 0; i < $hospitals.length; i++) {
            $id = "#" + $hospitals[i].id;
            $hospitalDom = $($id).parents(".hospital");
            $btnDmo = $hospitalDom.find(".h-booking>a");
            $dept = $hospitalDom.find(".h-faculty select").val();
            setDataUrl($btnDmo, $hospitals[i].id, $dept);
        }

        //绑定select change事件
        $(".h-faculty select").change(function () {
            $hid = $(this).parents(".hospital").find(".h-name").attr("id");
            $dept = $(this).val();
            $btnDom = $(this).parents(".hospital").find(".h-booking>a");
            setDataUrl($btnDom, $hid, $dept);
        });
        //绑定model
        var bookingModal = $("#bookingModal");
        $(".btn[data-target=#bookingModal]").click(function (ev) {
            ev.preventDefault();
            var dataUrl = $(this).attr("data-url");
            bookingModal.find("#quickbook-frame").attr("src", dataUrl);
        });
    }
    //将ajax获取的data转换成html
    function dataToHtml($hospitals) {
        $urlHospitalView = "<?php echo $urlHospitalView; ?>";
        var innerHtml = '';

        for (var i = 0; i < $hospitals.length; i++) {
            var $spanContent = $hospitals[i].classText ? '<span class="h-grade ml20">' + $hospitals[i].classText + '</span>' : "";

            var $departments = $hospitals[i].departments === null ? "" : $hospitals[i].departments;
            var $selectContent = setSelect($departments);
            innerHtml = innerHtml +
                    '<div class="row hospital border-bottom"><div  class="col-md-5 col-sm-6 col-xs-5"><div class="h-name" id="' + $hospitals[i].id + '">' +
                    '<a href="' + $urlHospitalView + $hospitals[i].id + '">' +
                    $hospitals[i].name + '</a></div><div class="mb5">' +
                    $spanContent + '</div></div><div  class="col-md-3 col-sm-3 col-xs-4 h-faculty"><div class="form-group ml10">' +
                    $selectContent + '</div></div><div class="col-md-3 col-sm-4 col-xs-3 h-booking">' +
                    '<a data-url="" data-toggle="modal" data-target="#bookingModal"  class="btn btn-booking mt20  button-center">预约</a>' +
                    '</div></div>';
        }
        return innerHtml;
    }
    //根据科室设置select内容
    function setSelect($departments) {
        var $selectContent = "<select class='sel form-control form-condivol'>";
        for (var $group in $departments) {
            $selectContent += "<optgroup label='" + $group + "'>";
            $deptList = $departments[$group];
            for (var $key in $deptList) {
                $dept = $deptList[$key];
                $selectContent += "<option value='" + $dept.id + "'>" + $dept.name + "</option>";
            }
            $selectContent += "</optgroup>";
        }
        $selectContent += "</select>";
        return $selectContent;
    }

    //设置顶部的hospital select 内容
    function setHospitalSelect() {
        var innerHtml = "<select class='sel form-control form-condivol'>";
        for (var i = 0; i < $hospitals.length; i++) {
            innerHtml += '<option value=' + $hospitals[i].id + '>' + $hospitals[i].name + '</option>';
        }
        innerHtml += "</select>";
        $(".sel-hospital").html(innerHtml);

        //绑定change事件
        $(".sel-hospital>select").change(function () {
            $hid = $(this).val();
            setDeptSelect($hid);
            $dept = $(".sel-dept>").val();
            setDataUrl($("#header-book"), $hid, $dept);
        });
        //绑定model
        var bookingModal = $("#bookingModal");
        $(".btn[data-target=#bookingModal]").click(function (ev) {
            ev.preventDefault();
            var dataUrl = $(this).attr("data-url");
            bookingModal.find("#quickbook-frame").attr("src", dataUrl);
        });
    }

    //设置顶部dept select 内容
    function setDeptSelect($hid) {
        for (var i = 0; i < $hospitals.length; i++) {
            if ($hospitals[i].id === $hid) {
                var $departments = $hospitals[i].departments === null ? "" : $hospitals[i].departments;
                var $selectContent = setSelect($departments);
            }
        }
        $(".sel-dept").html($selectContent);

        //获取第一个科室的值
        var deptId;
        for (var $group in $departments) {
            $deptList = $departments[$group];
            for (var $key in $deptList) {
                $dept = $deptList[$key];
                deptId = $dept.id;
                break;
            }
            break;
        }
        setDataUrl($("#header-book"), $hid, deptId);

        //绑定change 事件
        $(".sel-dept select").change(function () {
            $dept = $(this).val();
            setDataUrl($("#header-book"), $hid, $dept);
        });

    }
    //设置btn的data-url
    function setDataUrl($btnDom, $hid, $dept) {
        $($btnDom).attr({"data-url": "<?php echo $urlQuickBook . "?type=4&hid="; ?>" + $hid + "&dept=" + $dept});
    }

    //cityActive
    function setActiveCity($cityId) {
        $(".city").each(function () {
            var $data_city = $(this).attr("data-city");
            if ($data_city == $cityId) {
                $(this).addClass("active");
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


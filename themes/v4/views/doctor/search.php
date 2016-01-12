<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/datepicker.css");
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-datepicker.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-datepicker.zh-CN.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/searchdoctor.css");
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlQuickbook = $this->createUrl('/booking/quickbook');
$urlBooking = $this->createUrl('booking/create', array('ajax' => 1));
$urlLoadHospital = $this->createUrl('api/list', array('model' => 'hospital'));
$urlLoadDoctor = $this->createUrl('api/list', array('model' => 'doctor'));  ///api/doctor?city=1&disease=1&mtitle=1&pagesize=10&page=1
?>
<div class="container-fluid crumbs">
    <div class="container">
        <div class="bread-crumb">
            <span class="breadcrumb-city">全部</span> >> <span class="breadcrumb-faculty"></span> >> <span class="breadcrumb-dept"></span> >> <span class="breadcrumb-dis"></span>
        </div>
    </div>
</div>
<div class="container">
    <div class="selector">
        <div class="city-selector selector-item">
            <span class="selector-header"><a href="javascript:;">地区</a></span>
            <span><a href="javascript:;" data-id='' class="city allcity">全部</a></span>
            <span><a href="javascript:;" data-id="1" class="city ">北京</a></span>
            <span><a href="javascript:;" data-id="73" class="city">上海</a></span>
            <span><a href="javascript:;" data-id="200" class="city">广州</a></span>
            <span><a href="javascript:;" data-id="" class="morecity">更多 <i class="fa fa fa-caret-down"></i></a></span>
            <div class="city-content">
                <div class="citylist">
                    <div class="mt10">
                        <span class="strong">江苏省</span>
                        <span class="border-left"><a href="javascript:;" data-id="74" class="city">南京</a></span>
                        <span class="border-left"><a class="city" data-id="75" href="javascript:void(0);">无锡</a></span>
                        <span class="border-left"><a class="city" data-id="76" href="javascript:void(0);">徐州</a></span>
                        <span class="border-left"><a class="city" data-id="77" href="javascript:void(0);">常州</a></span>
                        <span class="border-left"><a class="city" data-id="78" href="javascript:void(0);">苏州</a></span>
                        <span class="border-left"><a class="city" data-id="79" href="javascript:void(0);">南通</a></span>
                        <span class="border-left"><a class="city" data-id="80" href="javascript:void(0);">连云港</a></span>
                        <span class="border-left"><a class="city" data-id="81" href="javascript:void(0);">淮安</a></span>
                        <span class="border-left"><a class="city" data-id="82" href="javascript:void(0);">盐城</a></span>
                        <span class="border-left"><a class="city" data-id="83" href="javascript:void(0);">扬州</a></span>
                        <span class="border-left"><a class="city" data-id="84" href="javascript:void(0);">镇江</a></span>
                    </div>
                    <div class="mt10">
                        <span class="strong">浙江省</span>
                        <span class="border-left"><a href="javascript:;" data-id="87" class="city">杭州</a></span>
                        <span class="border-left"><a class="city" data-id="88" href="javascript:void(0);">宁波</a></span>
                        <span class="border-left"><a class="city" data-id="89" href="javascript:void(0);">温州</a></span>
                        <span class="border-left"><a class="city" data-id="90" href="javascript:void(0);">嘉兴</a></span>
                        <span class="border-left"><a class="city" data-id="91" href="javascript:void(0);">湖州</a></span>
                        <span class="border-left"><a class="city" data-id="93" href="javascript:void(0);">金华</a></span>
                        <span class="border-left"><a class="city" data-id="94" href="javascript:void(0);">衢州</a></span>
                        <span class="border-left"><a class="city" data-id="95" href="javascript:void(0);">舟山</a></span>
                        <span class="border-left"><a class="city" data-id="97" href="javascript:void(0);">丽水</a></span>
                    </div>
                    <div class="mt10">
                        <span class="strong">广东省</span>
                        <span class="border-left"><a class="city" data-id="200" href="javascript:void(0);">广州</a></span>
                        <span class="border-left"><a class="city" data-id="204" href="javascript:void(0);">汕头</a></span>
                    </div>
                    <div class="mt10">
                        <span class="strong">湖南省</span>
                        <span class="border-left"><a class="city" data-id="186" href="javascript:void(0);">长沙</a></span>
                    </div>
                    <div class="mt10">
                        <span class="strong">福建省</span>
                        <span class="border-left"><a class="city" data-id="114" href="javascript:void(0);">福州</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="dis-selector selector-item">
            <span class="dis-header selector-header">疾病</span>
            <?php $this->renderPartial('//site/_dismenu') ?>
        </div>
        <div class="hp-selector selector-item">
            <span class="hp-header selector-header">医院</span><span><a href="javascript:;" data-id='' class="hospitalname allhp">全部 <i class="fa fa fa-caret-down"></i></a></span>
            <div class="hplist">
                <div class="loading loading02"></div>
                <!--            <div class="somehospital">
                                <a href="javascript:;" class="morehospital">更多 <i class="fa fa-angle-down"></i></a>
                                <div class="row hpcontent">
                
                                </div>
                            </div>-->
                <div class="allhospital  ">
    <!--                <a href="javascript:;" class="retract">收起 <i class="fa fa-angle-up"></i></a>-->
                    <div class="row hpcontent">

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="doc-list">
        <div class="loading loading02"></div>
        <div class="row list-content">

        </div>
        <div class="mt30">
            <nav class="text-center">
                <ul class="pagination">

                </ul>
            </nav>
        </div>
    </div>
    <?php //$this->renderPartial("//booking/_modalQuickBook"); ?>
    <?php //$this->renderPartial("//booking/_modalBooking"); ?>
    <?php $this->renderPartial("//booking/formModal"); ?>
    <script>
        //url参数数组
        var $condition = new Array();
        $condition["city"] = null;
        $condition["disease"] = null;
        $condition["hospital"] = null;
        $(document).ready(function () {
            $(".alldis").text("全部");
            //设置url参数
            setSearchCondition();
            //加载医院
            loadHospitalByCity();
            //加载医生
            loadDocByCityDisease(1, '&getcount=1');
            //设置city active
            setCityActive($condition["city"]);
            //设置disease active
            setDiseaseActive($condition["disease"]);
            //设置hospital active
            setHopitalActive($condition["hospital"]);
            setBreadCrumbCity($condition["city"]);
            //分页
            //setPages();
            $('[data-toggle="tooltip"]').tooltip();
            //hospital 切换显示
            $(".morehospital").click(function () {
                $(".somehospital").hide();
                $(".allhospital").show();
            });
            $(".retract").click(function () {
                $(".somehospital").show();
                $(".allhospital").hide();
            });
            //点击城市加载新的医生list
            $(".city").click(function () {
                $cityid = $(this).attr("data-id");
                $condition["city"] = $cityid;
                $condition["hospital"] = null;
                loadHospitalByCity();
                loadDocByCityDisease(1, '&getcount=1');
                $(".city").removeClass("active");
                $(this).addClass("active");
                $(".breadcrumb-city").html($(this).text());
                setLocationUrl();
            });
            //点击疾病加载医生
            $(".dis-list a").click(function (e) {
                e.preventDefault();
                $diseaseid = $(this).attr("data-id");
                $condition["disease"] = $diseaseid;
                $condition["hospital"] = null;
                loadHospitalByCity();
                loadDocByCityDisease(1, '&getcount=1');
                setDiseaseActive($condition["disease"]);
                $(".dis-class").hide();
                setLocationUrl();
            });
            //全部疾病
            $(".alldis").click(function () {
                $(this).addClass("active");
                $condition["disease"] = null;
                $condition["hospital"] = null;
                loadHospitalByCity();
                loadDocByCityDisease(1, '&getcount=1');
                setDiseaseActive($condition["disease"]);
                $(".dis-class").hide();
                setLocationUrl();
            });

            //城市下拉展示
            $(".city-selector .morecity").mouseover(function () {
                $(".city-selector .city-content").show();
            }).mouseout(function () {
                $(".city-selector .city-content").hide();
            });
            $(".city-selector .city-content").mouseover(function () {
                $(this).show();
            }).mouseout(function () {
                $(this).hide();
            });
            $(".citylist span").click(function () {
                $(".city-selector .city-content").hide();
            });

            //医院显示/隐藏
            $(".hp-selector .allhp").mouseover(function () {
                $(".hplist").show();
            }).mouseleave(function () {
                $(".hplist").hide();
            });
            $(".hplist").mouseover(function () {
                $(this).show();
            }).mouseleave(function () {
                $(this).hide();
            });

            //全部医院
            $(".hp-selector .allhp").click(function () {
                $condition["hospital"] = null;
                loadDocByCityDisease(1, '&getcount=1');
                setLocationUrl();
            });

            //疾病下拉展示
            $(".dis-selector #dis-nav>ul>li").mouseover(function () {
                $(this).find('.dis-class').show();
            });
            $(".dis-selector #dis-nav>ul>li").mouseout(function () {
                $(this).find('.dis-class').hide();
            });
        });
        //加载医院
        function loadHospitalByCity() {
            urlLoadHospital = '<?php echo $urlLoadHospital; ?>';///api/hospital?city=1&disease=1
            urlLoadHospital += setUrlCondition();
            // show loading gif.
            $(".hplist .loading").show();
            $.ajax({
                url: urlLoadHospital,
                success: function (data) {
                    setHospitalHtml(data.hospitals);
                },
                complete: function () {
                    // hide loading gif.
                    $(".hplist .loading").hide();
                }
            });
        }
        //根据城市和疾病加载医生
        function loadDocByCityDisease($page, $getcount) {
            urlLoadDoctor = '<?php echo $urlLoadDoctor; ?>';///api/doctor?city=1&disease=1&mtitle=1&pagesize=10&page=1
            urlCondition = setUrlCondition() == "" ? "?" : setUrlCondition();
            urlLoadDoctor += urlCondition + '&mtitle=1&pagesize=12&page=' + $page + $getcount;
            // show loading gif.
            $(".doc-list .loading").show();
            $.ajax({
                url: urlLoadDoctor,
                success: function (data) {
                    setPages(data.doctorCount, $page);
                    setDoctorsHtml(data.doctors);
                },
                complete: function () {
                    // hide loading gif.
                    $(".doc-list .loading").hide();
                }
            });
        }
        //setHospitalHtml
        function setHospitalHtml($hospitals) {
            var innerHtml = '';
            if ($hospitals && $hospitals.length > 0) {
                if ($hospitals.length < 9) {
                    $(".morehospital").hide();
                } else {
                    $(".morehospital").show();
                }
                var $hsize = $hospitals.length > 8 ? 8 : $hospitals.length;
                for (var i = 0; i < $hospitals.length; i++) {
                    $hospital = $hospitals[i];
                    innerHtml +=
                            '<div class="col-sm-4 col-md-3 hpname"><a class="hospitalname" target="_blank" title="' +
                            $hospital.name + '" href="<?php echo $this->createUrl('hospital/view', array('id' => '')); ?>' +
                            $hospital.id + '" data-id="' +
                            $hospital.id + '">' +
                            $hospital.name + '</a></div>';
                    if (i == $hsize - 1) {
                        $(".somehospital .hpcontent").html(innerHtml);
                    }
                }
                $(".allhospital .hpcontent").html(innerHtml);
            } else {
                innerHtml += '<div class="col-sm-12 hpname">暂无医院信息</div>';
                $(".somehospital .hpcontent").html(innerHtml);
                $(".somehospital .morehospital").hide();
            }
            initSetDisByHospital();
            setHopitalActive($condition["hospital"]);
        }
        //setDoctorsHtml
        function setDoctorsHtml($doctors) {
            var innerHtml = '';
            if ($doctors) {
                for (var i = 0; i < $doctors.length; i++) {
                    $doctor = $doctors[i];
                    $atitle = $doctor.aTitle ? ' | ' + $doctor.aTitle : '';
                    $hpDeptName = $doctor.hpDeptName ? $doctor.hpDeptName : '&nbsp;';
                    $docDesc = '';
                    $docDescAll = '';
                    if ($doctor.desc) {
                        $docDesc = $doctor.desc.length > 29 ? $doctor.desc.substr(0, 29) + '...' : $doctor.desc;
                        $docDescAll = $doctor.desc;
                    }
                    bookingBtn = '<span class="btn btn-disabled">预 约</span>';
                    if ($doctor.isContracted == '1') {
                        bookingBtn = '<span class="btn btn-booking" data-docid="' + $doctor.id + '" data-docname="' + $doctor.name + '" data-dochospital="' + $doctor.hpName + '" data-docdept="' + $hpDeptName + '" data-toggle="modal" data-target="#bookingModal">预 约</span>';
                    }
                    innerHtml +=
                            '<div class="mt30 col-md-4 col-sm-6"><div class="docinfo"><div><img src="' +
                            $doctor.imageUrl + '"/></div><div class="text-center"><span class="docname">' +
                            $doctor.name + '</span>&nbsp;&nbsp;<span class="doctitle">' +
                            $doctor.mTitle +
                            $atitle + '</span></div><div class="text-center"><span>' +
                            $hpDeptName + '</span></div><div class="text-center"><span>' +
                            $doctor.hpName + '</span></div>' +
                            '<div class="dashed"></div>' +
                            '<div class="docdesc"><span class="long">擅长:</span><div class="desc-content" data-toggle="tooltip" data-placement="bottom" title="' +
                            $docDescAll + '">' +
                            $docDesc + '</div></div><div class="text-center mt10 mb5" style="min-height:32px;">' +
                            bookingBtn +
                            '</div></div></div>';
                }
            } else {
                innerHtml += '<div class="mt30 col-sm-12"><h3>暂无医生信息</h3></div>';
            }
            $(".doc-list .list-content").html(innerHtml);
            $('[data-toggle="tooltip"]').tooltip();
            //绑定model
            var bookingModal = $("#bookingModal");
            $(".btn[data-target=#bookingModal]").click(function (ev) {
                ev.preventDefault();
                var dataUrl = $(this).attr("data-url");
                bookingModal.find("#quickbook-frame").attr("src", dataUrl);
            });
        }
        //从地址栏获取需要的参数
        function setSearchCondition() {
            var url = window.location.search;
            var cityId, disease, hospital;
            if (url.indexOf("?") != -1) {
                var str = url.substr(1);
                strs = str.split("&");
                for (i = 0; i < strs.length; i++) {
                    if ([strs[i].split("=")[0]] == 'city') {
                        cityId = unescape(strs[i].split("=")[1]);
                        $condition["city"] = cityId;
                    }
                    if ([strs[i].split("=")[0]] == 'disease') {
                        disease = unescape(strs[i].split("=")[1]);
                        $condition["disease"] = disease;
                    }
                    if ([strs[i].split("=")[0]] == 'hospital') {
                        hospital = unescape(strs[i].split("=")[1]);
                        $condition["hospital"] = hospital;
                    }
                }
            }
        }
        function setUrlCondition() {
            var urlCondition = "";
            if (!$condition["city"] && !$condition["disease"]) {
                return urlCondition;
            } else {
                for ($key in $condition) {
                    if ($condition[$key] && $condition[$key] !== "") {
                        urlCondition += "&" + $key + "=" + $condition[$key];
                    }
                }
                urlCondition = urlCondition.substring(1);
                urlCondition = "?" + urlCondition;
                return urlCondition;
            }
        }
        function setPages($doctorCount, $page) {
            if ($doctorCount > 12) {
                $totalPages = Math.ceil($doctorCount / 12);
                var $pageActive = $page;
                setPageHtml($pageActive, $totalPages);
            } else {
                $(".pagination").html("");
            }

        }
        function setPageHtml($pageActive, $totalPages) {
            var pageHtml = '';
            pageHtml += '<li><a class="pagePre" href="javascript:;" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
            var $active = '';
            $maxPages = $totalPages > 8 ? 8 : $totalPages;
            $starPage = $pageActive > 5 ? $pageActive : 5;
            $activePage = $pageActive > 5 ? 5 : $pageActive;
            for (var i = 0; i < $maxPages; i++) {
                if (i === $activePage - 1) {
                    $active = 'active';
                } else {
                    $active = '';
                }
                $pageText = $starPage - 4 + i;
                if ($pageText > $totalPages) {
                    break;
                }
                pageHtml += '<li class="page-item ' + $active + '"><a data-page="' + ($starPage - 4 + i) + '" href="javascript:;">' + ($starPage - 4 + i) + '</a></li>';
            }
            if ($totalPages > 8 & $starPage < $totalPages - 4) {
                pageHtml += '<li class=""><a href="javascript:;">...</a></li>' +
                        '<li class="page-item"><a data-page="' + $totalPages + '" href="javascript:;">' + $totalPages + '</a></li>';
            }
            pageHtml += '<li><a class="pageNext" href="javascript:;" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
            $(".pagination").html(pageHtml);
            initPageFunction($pageActive);
        }
        function initPageFunction($pageActive) {
            //分页点击加载医生
            $(".page-item a").click(function () {
                $page = $(this).attr("data-page");
                $pageActive = $page;
                loadDocByCityDisease($page, '&getcount=1');
                //setPageHtml($pageActive, $totalPages);
            });
            //上一页
            $(".pagePre").click(function () {
                if ($pageActive === 1) {
                    return;
                } else {
                    $pageActive--;
                    loadDocByCityDisease($pageActive, '&getcount=1');
                    //setPageHtml($pageActive, $totalPages);
                }
            });
            //上一页
            $(".pageNext").click(function () {
                if ($pageActive === $totalPages) {
                    return;
                } else {
                    $pageActive++;
                    loadDocByCityDisease($pageActive, '&getcount=1');
                    //setPageHtml($pageActive, $totalPages);
                }
            });
        }
        //
        function setBreadCrumbCity($cityid) {
            $(".city").each(function () {
                $cid = $(this).attr("data-id");
                if ($cityid == $cid) {
                    $(".breadcrumb-city").html($(this).text());
                }
            });
        }
        //点击城市加载医生
        function initSetDisByHospital() {
            $(".hospitalname").click(function (e) {
                e.preventDefault();
                $(".hplist").hide();
                $hospitalid = $(this).attr("data-id");
                $condition["hospital"] = $hospitalid;
                loadDocByCityDisease(1, '&getcount=1');
                setHopitalActive($condition["hospital"]);
                setLocationUrl();

            });
        }

        //设置disease active
        function setDiseaseActive($diseaseid) {
            $(".faculty-icon").removeClass("active");
            setSwitch = true;
            $(".dis-list a").each(function () {
                $did = $(this).attr("data-id");
                $(this).removeClass("active");
                if ($diseaseid == $did) {
                    $disli = $(this).parents(".dis-list").parent();
                    $deptli = $disli.parents("li");
                    $(".breadcrumb-dis").html($(this).text());
                    $(".breadcrumb-dept").html($.trim($disli.find(".dis-title").text()));
                    $(".breadcrumb-faculty").html($.trim($deptli.find(".faculty-icon").text()));
                    $deptli.find(".faculty-icon").addClass("active");
                    $(this).addClass("active");
                    setSwitch = false;
                }
            });
            if (setSwitch) {
                $(".alldis").addClass("active");
                $(".breadcrumb-dis").html("全部分类");
                $(".breadcrumb-dept").html("全部分类");
                $(".breadcrumb-faculty").html("全部分类");
            }
        }
        //设置 city active
        function setCityActive($cityid) {
            $(".city").removeClass("active");
            $(".city").each(function () {
                if ($(this).attr("data-id") == $cityid) {
                    $(this).addClass("active");
                    //console.log($cityid);
                } else if (!$cityid) {
                    $(".allcity").addClass("active");
                }
            });
        }
        //设置hospital active
        function setHopitalActive($hospital) {
            $(".hospitalname").removeClass("active");
            $(".hospitalname").each(function () {
                if ($(this).attr("data-id") == $hospital) {
                    $(this).addClass("active");
                    //console.log($cityid);
                } else if (!$hospital) {
                    $(".allhp").addClass("active");
                }
            });
        }
        //设置地址栏信息
        function setLocationUrl() {
            var stateObject = {};
            var title = "";
            var newUrl = "<?php echo $this->createUrl("doctor/search"); ?>" + setUrlCondition();
            history.pushState(stateObject, title, newUrl);
        }
    </script>
</div>

<?php
/**
 * $model IHospital
 */
$hid = $model->getId();
$hName = $model->getName();
$hClass = $model->getClass();
$hType = $model->getType();
$desc = $model->getDescription();
//$facultyDesc = $model->getFacultyDesc();
$urlImage = $model->imageUrl;
$departments = $model->getDepartments();
$urlWebsite = $model->getUrlWebsite();
$phone = $model->getPhone();
$address = $model->getAddress();
$city = $model->getCity();
$urlLoadDoctorsByDeptId = $this->createUrl('/api/list', array('model' => 'doctor', 'hpdept' => ''));    // append hpdeptId behind.
?>
<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/hospital.css");
$urlQuickBook = $this->createUrl('booking/quickbook');
$urlBooking = $this->createUrl('booking/create', array('ajax' => 1));
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$this->pageTitle = $hName . '手术预约,电话,地址,网址_名医主刀';
$this->htmlMetaKeywords = $hName;
$this->htmlMetaDescription = mb_strlen($desc) > 70 ? mb_substr($desc, 0, 70, 'utf-8') : $desc;
?>
<div class="container-fluid crumbs crumbs-hospital">
    <div class="container">
        <div class="crumbs-header">
            <ul>
                <li><a href="<?php echo Yii::app()->homeUrl; ?>">首页</a></li>
                <li>>></li>
                <li><a href="<?php echo $this->createUrl('hospital/index', array('city' => '1')) ?>">推荐医院</a></li>
                <li>>></li>
                <li><a href="<?php echo $this->createUrl('hospital/index', array('city' => $city->id)); ?>"><?php echo $city->name; ?></a></li>
                <li>>></li>
                <li><?php echo $hName; ?></li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="hinfo">
            <div class="row">
                <div class="col-lg-9 col-sm-8 col-xs-12">
                    <div class="hdecs border-gray">
                        <div class="container-title"><?php echo $hName; ?></div>
                        <span class="hdesc">
                            <?php
                            if (mb_strlen($desc) > 900) {
                                $subdesc = mb_substr($desc, 0, 300, 'utf-8');
                                $subdesc = $subdesc . '<span class="ellipsis">...</span>';
                            } else {
                                $subdesc = $desc;
                            }
                            echo $subdesc;
                            ?></span>
                        <span class="hdesc decs-last">
                            <?php
                            $lastdesc = mb_substr($desc, 300, mb_strlen($desc), 'utf-8');
                            echo $lastdesc;
                            ?>
                        </span>
                        <?php if (mb_strlen($desc) > 900) { ?>
                            <span class="pull-right more-desc"><a href="javascript:void(0);" alt="查看全部">详情&nbsp;<i class="fa fa fa-caret-down"></i></a></span>
                        <?php } ?>
                        <span class="pull-right retract"><a href="javascript:void(0);" alt="查看全部">收起&nbsp;<i class="fa fa fa-caret-up"></i></a></span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="border-gray pl10 pb20">
                        <div class="mt20 pr10"><img src="<?php echo $urlImage; ?>" alt="<?php echo $hName; ?>"></div>
                        <div>
                            <div class="mt10">电话：<?php echo $phone; ?></div>
                            <div class="mt5">地址：<?php echo $address; ?></div>
                            <div class="mt5 hospitalurl">官网：<a href="<?php echo $urlWebsite; ?>" target="_blank"><?php echo $urlWebsite; ?></a></div>
                        </div>
                        <div class="pr10">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt40">
        <div class="container">
            <div class="departments border-gray">
                <?php
                if ($departments) {
                    foreach ($departments as $key => $dept) {
                        echo '<div class="dept-group"><h4>' . $key . '</h4></div>';
                        echo '<div class="dept-list row">';
                        foreach ($dept as $faculty) {
                            echo '<div class="col-sm-2 col-xs-6 dept"><a data-id="' . $faculty->id . '" href="javascript:void(0);">' . $faculty->name . '</a></div>';
                        }
                        echo '</div>';
                        echo '<div class="hdotted"></div>';
                    }
                } else {
                    echo '<div class="dept-group"><h4>暂无</h4></div>';
                }
                ?>
            </div>
            <div class="dept-info border-gray pt20 pb30">
                <div class="crumbs">
                    <ul>
                        <li><a href="javascript:void(0);" class="alldept text18">所有科室</a></li>
                        <li><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></li>
                        <li class="crumbs-dept text18">头颈外科</li>
                    </ul>
                    <div class="text18">推荐医生</div>
                </div>
                <div class="row ">
                    <div class="loading loading02"></div>
                    <div class="doc-list">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php //$this->renderPartial("//booking/_modalQuickBook"); ?>
    <?php //$this->renderPartial("//booking/_modalBooking"); ?>
    <?php $this->renderPartial("//booking/formModal"); ?>
    <script>
        $(document).ready(function () {
            $(".dept a").click(function () {
                $(".departments").hide();
                $(".crumbs-dept").text($(this).text());
                $hpdeptId = $(this).attr("data-id");
                setDocList($hpdeptId);
                $(".dept-info").show();
            });
            $(".alldept").click(function () {
                $(".departments").show();
                $(".dept-info").hide();
            });
            $(".more-desc").click(function () {
                $(this).hide();
                $(".ellipsis").hide();
                $(".decs-last").show();
                $(".retract").show();
            });
            $(".retract").click(function () {
                $(this).hide();
                $(".decs-last").hide();
                $(".ellipsis").show();
                $(".more-desc").show();
            });
        });
        var $doctors;
        function setDocList($hpdeptId) {
            var urlLoadHospital = "<?php echo $urlLoadDoctorsByDeptId; ?>";
            urlLoadHospital += $hpdeptId;
            // show loading gif.
            $(".doc-list .loading").show();
            $.ajax({
                url: urlLoadHospital,
                async: false,
                success: function (data) {
                    $doctors = data.doctors;
                    setListHtml();
                },
                complete: function () {
                    // hide loading gif.
                    $(".doc-list .loading").hide();
                }
            });
        }
        function setListHtml() {
            var innerHtml = '';
            if ($doctors.length > 0) {
                for (var i = 0; i < $doctors.length; i++) {
                    var $doctor = $doctors[i];
                    var $hfacunty = $doctor.hFaculty ? $doctor.hFaculty : "";
                    var $docdesc = $doctor.desc ? $doctor.desc : "";
                    var bookingBtn = '<span class="btn btn-disabled pull-right">预 约</span>';
                    if ($doctor.isContracted == '1') {
                        bookingBtn = '<span class="btn btn-booking pull-right" data-url="<?php echo $urlBooking; ?>&did=' + $doctor.id + '" data-toggle="modal" data-target="#bookingModal" data-docid="' + $doctor.id + '" data-docname="' + $doctor.docName + '" data-dochospital="' + $doctor.hospital + '" data-docdept="' + $hfacunty + '">预 约</span>';
                    }
                    innerHtml +=
                            '<div class="col-sm-6"><div class="media"><div class="pull-left media-middle"><img class="media-object" src="' +
                            $doctor.imageUrl + '" alt=""></div><div class="media-body">' +
                            bookingBtn +
                            '<h4 class="media-heading mb10 mt40">' +
                            $doctor.docName + '<span class="text15 expert-mtitle">&nbsp;&nbsp;&nbsp;' +
                            $doctor.mTitle + ' | ' +
                            $doctor.aTitle + '</span></h4><div class="mb10"><span>' +
                            $doctor.hospital + '</span><span class="expert-faculty">' +
                            $hfacunty + '</span></div><div class="expert-desc">擅长手术：' +
                            $docdesc + '</div></div></div></div>';
                    if (i % 2 === 1) {
                        innerHtml += '<div class="clearfix"></div>';
                    }
                }
            } else {
                innerHtml += '<div class="col-sm-6 pl30"><h4>暂无医生</h4></div>';
            }
            $(".doc-list").html(innerHtml);
            //绑定model
            var bookingModal = $("#bookingModal");
            $(".btn[data-target=#bookingModal]").click(function (ev) {
                ev.preventDefault();
                var dataUrl = $(this).attr("data-url");
                bookingModal.find("#quickbook-frame").attr("src", dataUrl);
            });
        }
    </script>
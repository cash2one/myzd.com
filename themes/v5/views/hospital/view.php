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
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/hospital100.min.css");
$urlQuickBook = $this->createUrl('booking/quickbook');
$urlBooking = $this->createUrl('booking/create', array('ajax' => 1));
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
//$this->pageTitle = $hName . '手术预约,电话,地址,网址_名医主刀';
//$this->htmlMetaKeywords = $hName;
//$this->htmlMetaDescription = mb_strlen($desc) > 70 ? mb_substr($desc, 0, 70, 'utf-8') : $desc;
$deptId = Yii::app()->request->getQuery('deptId', '');
?>
<div class="container-fluid crumbs crumbs-hospital">
    <div class="container">
        <div class="crumbs-header">
            <ul>
                <li><a href="<?php echo Yii::app()->homeUrl; ?>" target="_blank">首页</a></li>
                <li>></li>
                <li><a href="<?php echo $this->createUrl('hospital/department'); ?>" target="_blank">找医院</a></li>
                <li>></li>
                <li><?php echo $hName; ?></li>
            </ul>
        </div>
    </div>
</div>
<section id="hospital-view">
    <div class="container">
        <div class="hinfo">
            <div class="hdecs">
                <div class="hospital-title"><h1><?php echo $hName; ?></h1></div>
                <div class="hdesc">
                    <?php
                    if (mb_strlen($desc, 'utf-8') > 300) {
                        $subdesc = mb_substr($desc, 0, 300, 'utf-8');
                        $subdesc = $subdesc . '<span class="ellipsis">...</span>';
                    } else {
                        $subdesc = $desc;
                    }
                    echo $subdesc;
                    ?></span><span class="hdesc decs-last"><?php
                    $lastdesc = mb_substr($desc, 300, mb_strlen($desc), 'utf-8');
                    echo $lastdesc;
                    ?>
                </div>
                <?php if (mb_strlen($desc, 'utf-8') > 300) { ?>
                    <div class="text-right more-desc"><a href="javascript:void(0);" alt="查看全部">详情&nbsp;<i class="fa fa fa-caret-down"></i></a></div>
                <?php } ?>
                <div class="text-right retract"><a href="javascript:void(0);" alt="查看全部">收起&nbsp;<i class="fa fa fa-caret-up"></i></a></div>
            </div>
        </div>
    </div>
    <div class="container mt50">
        <div class="row">
            <div class="department-info">
                <div class="col-lg-9 col-sm-8 col-xs-12">
                    <?php
                    foreach ($departments as $key => $dept) {
                        foreach ($dept as $faculty) {
                            ?>
                            <div class="dept-title" id="booking<?php echo $faculty->id; ?>">
                                <div class="pull-left"><span>本院最强科室精选推荐</span></div>
                                <div class="text-right">
                                    <button class="bookingBtn btn btn-yes text-center" data-hospital="<?php echo $hName; ?>" data-dept="<?php echo $faculty->name; ?>" data-deptid="<?php echo $faculty->id; ?>" data-hospitalid="<?php echo $hid; ?>"  data-toggle="modal" data-target="#booking">
                                        <div>预约科室</div>
                                    </button>             
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <div class="faculty-desc">
                        <div class="dept-group ">
                            <ul class="pl0">
                                <?php
                                $i = 0;
                                foreach ($departments as $key => $dept) {

                                    $i++;
                                    if ($i == count($departments)) {
                                        $last = 'last';
                                    } else {
                                        $last = '';
                                    }
                                    echo '<div class="dept-slider"><div data-dept="' . $key . '" class="dept-name dept-waike ' . $last . '">' . $key . ' <i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></div><div class="faculty-open">';
                                    foreach ($dept as $faculty) {
                                        $fuacultyName = $faculty->name;
                                        if (mb_strlen($faculty->name, 'utf-8') > 6) {
                                            $fuacultyName = mb_substr($fuacultyName, 0, 6, 'utf-8');
                                            $fuacultyName = $fuacultyName . '<span>...</span>';
                                        } else {
                                            $fuacultyName = $faculty->name;
                                        }
                                        echo '<a href="' . $this->createUrl('hospital/view2') . '/id/' . $hid . '/deptId/' . $faculty->id . '"><div class="second-faculty" data-dept="' . $key . '" id="faculty' . $faculty->id . '" title="' . $faculty->name . '" data-page="' . $faculty->id . '">' . $fuacultyName . '</div></a>';
                                    }
                                    echo '</div></div>';
                                }
                                ?>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <?php
                        foreach ($departments as $key => $dept) {
                            foreach ($dept as $faculty) {
                                ?>
                                <div class="desc-area" id="<?php echo $faculty->id; ?>">
                                    <div class="desc-title"><h2>学科地位</h2></div>
                                    <div class="desc-content">
                                        <?php
                                        if (isset($faculty->position) && !is_null($faculty->position)) {
                                            echo $faculty->position;
                                        } else {
                                            echo '暂无明确信息';
                                        }
                                        ?>
                                    </div>
                                    <div class="desc-title"><h3>学科规模</h3></div>
                                    <div class="desc-content">
                                        <?php
                                        if (isset($faculty->scale) && !is_null($faculty->scale)) {
                                            echo $faculty->scale;
                                        } else {
                                            echo '暂无明确信息';
                                        }
                                        ?>
                                    </div>
                                    <div class="desc-title"><h4>学科专长</h4></div>
                                    <div class="desc-content">
                                        <?php
                                        if (isset($faculty->specialty) && !is_null($faculty->specialty)) {
                                            echo $faculty->specialty;
                                        } else {
                                            echo '暂无明确信息';
                                        }
                                        ?>
                                    </div>
                                    <div class="desc-title"><h5>学科力量</h5></div>
                                    <div class="desc-content">
                                        <?php
                                        if (isset($faculty->strength) && !is_null($faculty->strength)) {
                                            echo $faculty->strength;
                                        } else {
                                            echo '暂无明确信息';
                                        }
                                        ?>
                                    </div>
                                    <div class="desc-title"><h6>学科荣誉</h6></div>
                                    <div class="desc-content">
                                        <?php
                                        if (isset($faculty->honor) && arrayNotEmpty($faculty->honor)) {
                                            $honors = $faculty->honor;
                                            for ($i = 0; $i < count($honors); $i++) {
                                                echo '<div class="honor"><img class="mr5" src="http://static.mingyizhudao.com/146424275010039"><span>' . $honors[$i] . '</span></div>';
                                            }
                                        } else {
                                            echo '暂无明确信息';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-12"> 
                    <div class="booking-circuit">
                        <div class="text-center heading">一键约科室流程</div>
                        <div class="mt10"><div class="pull-left" style="height:2em;margin-right:8px;"><img src="http://static.mingyizhudao.com/146434442994569"></div><div class="">点击预约科室</div><div class="clearfix"></div></div>
                        <div class="mt10"><div class="pull-left" style="height:2em;margin-right:5px;"><img src="http://static.mingyizhudao.com/146434445111882"></div><div class="">按要求填写并提交病例资料</div><div class="clearfix"></div></div>
                        <div class="mt10"><div class="pull-left" style="height:2em;margin-right:5px;"><img src="http://static.mingyizhudao.com/146434445119581"></div><div class="">名医助手8小时内回访确认预约和病例资料</div><div class="clearfix"></div></div>
                        <div class="mt10"><div class="pull-left" style="height:4em;margin-right:5px;"><img src="http://static.mingyizhudao.com/146434445123129"></div><div class="">两个工作日内回访给出最适合的主刀专家推荐和诊疗意见（如有需要会安排面诊）</div><div class="clearfix"></div></div>
                        <div class="mt10"><div class="pull-left" style="height:4em;margin-right:5px;"><img src="http://static.mingyizhudao.com/146434445127681"></div><div class="">如需要手术，名医助手会立刻开始安排手术床位，减少等待床位时间</div><div class="clearfix"></div></div>
                    </div>
                    <div class="event-link-img mt20"><a href="<?php echo $this->createUrl('event/view', array('page' => 'cancerdefecate')); ?>" target="_blank"><img src="http://static.mingyizhudao.com/146434445103935" alt="澄清癌症错误认识" title="澄清癌症错误认识"/></a></div>
                    <div class="event-link-img mt20"><a href="<?php echo $this->createUrl('event/view', array('page' => 'lungcancer')) ?>" target="_blank"><img src="http://static.mingyizhudao.com/146434445115492" alt="肺癌" title="肺癌" /></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php //$this->renderPartial("//booking/_modalQuickBook");      ?>
<?php //$this->renderPartial("//booking/_modalBooking");       ?>
<?php $this->renderPartial("//booking/bookingDeptModal"); ?>
<script type="text/javascript">
    $(document).ready(function () {
        var deptId = '<?php echo $deptId ?>';
        if (deptId != '') {
            $('#' + deptId).addClass('active');
            $('#booking' + deptId).addClass('active');
            $('#faculty' + deptId).addClass('active');
            var html = $('#faculty' + deptId).text();
            html += '<i class="fa fa-angle-right ml5"></i><i class="fa fa-angle-down ml5"></i>';
            $('#faculty' + deptId).parents('.faculty-open').prev().addClass('active');
            $('#faculty' + deptId).parents('.faculty-open').prev().html(html);
        } else {
            $('.department-info .faculty-open .second-faculty:first').addClass('active');
            $('.department-info .dept-title:first').addClass('active');
            $('.department-info .desc-area:first').addClass('active');
            var html = $('.department-info .faculty-open .second-faculty:first').text();
            html += '<i class="fa fa-angle-right faculty ml5"></i>';
            $('.department-info .faculty-open .second-faculty:first').parents('.faculty-open').prev().addClass('active');
            $('.department-info .faculty-open .second-faculty:first').parents('.faculty-open').prev().html(html);
        }
        $('.faculty-desc .dept-slider .faculty-open').mouseleave(function () {
            $(this).removeClass('active');
        });
//        二级科室弹出
        $('.faculty-desc .dept-slider .dept-name').click(function () {
            if ($(this).hasClass("active") && $(this).next().hasClass("active")) {
                $('.faculty-desc .dept-slider .dept-name').removeClass('active');
            } else {
                $('.faculty-desc .dept-slider .dept-name').removeClass('active');
                $(this).addClass('active');
            }
            if ($(this).next().hasClass("active")) {
                $('.faculty-desc .dept-slider .faculty-open').removeClass('active');
                $('.faculty-desc .dept-slider').removeClass('active');
            } else {
                $('.faculty-desc .dept-slider .faculty-open').removeClass('active');
                $('.faculty-desc .dept-slider').removeClass('active');
                $(this).next().addClass('active');
                $(this).parent().addClass('active');
            }
        });
        $('.department-info .faculty-open .second-faculty').click(function () {
            var dept = $(this).attr('data-dept');
            $('#hospital-view .department-info .dept-name').each(function () {
                var datadeptId = $(this).attr('data-dept');
                if (datadeptId != dept) {
                    datadeptId += '<i class="fa fa-angle-right ml5"></i><i class="fa fa-angle-down ml5"></i>';
                    $(this).html(datadeptId);
                }
            });
            var html = $(this).text();
            html += '<i class="fa fa-angle-right ml5"></i><i class="fa fa-angle-down ml5"></i>';
            $(this).parent().prev().html(html);
            $('.faculty-desc .dept-slider .faculty-open').removeClass('active');
            $('.faculty-desc .dept-slider').removeClass('active');
            $('.department-info .faculty-open .second-faculty').removeClass('active');
            $(this).addClass('active');
            var pageId = '#' + $(this).attr('data-page');
            var bookingpageId = '#booking' + $(this).attr('data-page');
            $('.department-info .faculty-desc .desc-area').removeClass('active');
            $('#hospital-view .department-info .dept-title').removeClass('active');
            $(pageId).addClass('active');
            $(bookingpageId).addClass('active');
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
</script>
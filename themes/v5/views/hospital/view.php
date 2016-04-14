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
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/hospital.css?v=" . time());
$urlQuickBook = $this->createUrl('booking/quickbook');
$urlBooking = $this->createUrl('booking/create', array('ajax' => 1));
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$this->pageTitle = $hName . '手术预约,电话,地址,网址_名医主刀';
$this->htmlMetaKeywords = $hName;
$this->htmlMetaDescription = mb_strlen($desc) > 70 ? mb_substr($desc, 0, 70, 'utf-8') : $desc;
$deptId = Yii::app()->request->getQuery('deptId', '');
?>
<div class="container-fluid crumbs crumbs-hospital">
    <div class="container">
        <div class="crumbs-header">
            <ul>
                <li><a href="<?php echo Yii::app()->homeUrl; ?>">首页</a></li>
                <li>></li>
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
                    <div class="hdecs">
                        <div class="container-title"><?php echo $hName; ?></div>
                        <div class="hdesc">
                            <?php
                            if (mb_strlen($desc) > 900) {
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
                        <?php if (mb_strlen($desc) > 900) { ?>
                            <div class="pull-right more-desc"><a href="javascript:void(0);" alt="查看全部">详情&nbsp;<i class="fa fa fa-caret-down"></i></a></div>
                        <?php } ?>
                        <div class="pull-right retract"><a href="javascript:void(0);" alt="查看全部">收起&nbsp;<i class="fa fa fa-caret-up"></i></a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class=" pl10 pb20">
                        <div class="mt20"><img src="<?php echo $urlImage; ?>" alt="<?php echo $hName; ?>"></div>
                        <div class="text-right pr15">
<!--                            <div class="mt10 hospitalurl"><a class="text12 color-green" href="<?php //echo $urlWebsite;         ?>" target="_blank"><?php echo '查看官网'; ?></a></div>-->
                        </div>
                        <div class="pr10">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt40 hospital">
    <div class="container">
        <div class="departments">
            <div class="row">
                <div class="col-lg-9 col-sm-8 col-xs-12 describable">
                    <?php
                    if ($departments) {
                        foreach ($departments as $key => $dept) {
                            if ($key == '外科') {
                                $deptClass = "waike";
                            } else if ($key == '内科') {
                                $deptClass = "neike";
                            } else if ($key == '妇产科') {
                                $deptClass = "fuchanke";
                            } else if ($key == '小儿外科') {
                                $deptClass = "xiaoerke";
                            } else if ($key == '五官科') {
                                $deptClass = "wuguanke";
                            } else if ($key == '骨科') {
                                $deptClass = "guke";
                            }
                            ?>
                            <!--Tab panes -->
                            <div class="tab-content">
                                <?php
                                $j = 1;
                                foreach ($dept as $faculty) {
                                    $description = $faculty->description == '' ? '暂无信息' : $faculty->description;
                                    echo '<div role="tabpanel" class="tab-pane" id="' . $deptClass . $j . '"><div class="dept-title"><div class="pull-left">选择科室：<span class="color-666">' . $faculty->name . '</span></div><div class="text-right pr10"><button class="bookingBtn btn btn-yes pr30 pl30" data-hospital="' . $hName . '" data-dept="' . $faculty->name . '" data-hospitalid="' . $hid . '" data-deptid="' . $faculty->id . '" data-toggle="modal" data-target="#booking"><div>预 约</div></button></div><div class="clearfix"></div><div class="divide-gray"></div></div><div class="faculty-desc mb20">' . $description . '</div></div>';
                                    $j++;
                                }
                                ?>
                            </div><?php }
                            ?>
                        <div><span class="title">为您精选出的本院最强科室</span><span class="pull-right blue-text" >*排名参考《中国最佳医院综合排名》和《中国医院最佳专科声誉排行榜》</span></div>
                        <div class="clearfix"></div>
                        <div class="divide-gray"></div>
                        <div class="row mt20">
                            <?php
                            foreach ($departments as $key => $dept) {
                                if ($key == '外科') {
                                    $deptClass = "waike";
                                } else if ($key == '内科') {
                                    $deptClass = "neike";
                                } else if ($key == '妇产科') {
                                    $deptClass = "fuchanke";
                                } else if ($key == '小儿外科') {
                                    $deptClass = "xiaoerke";
                                } else if ($key == '五官科') {
                                    $deptClass = "wuguanke";
                                } else if ($key == '骨科') {
                                    $deptClass = "guke";
                                }
                                echo '<div class="col-sm-6 faculty-group mt20"><div class="row deptgroup"><div class="col-sm-4 pr0"><div class="first-faculty ' . $deptClass . '"></div></div><div class="pl0 col-sm-8 second-faculty-group"><ul class="nav nav-tabs" role="tablist">';
                                $i = 1;
                                foreach ($dept as $faculty) {
                                    $fuacultyName = $faculty->name;
                                    if (mb_strlen($faculty->name) > 18) {
                                        $fuacultyName = mb_substr($fuacultyName, 0, 5, 'utf-8');
                                        $fuacultyName = $fuacultyName . '<span>...</span>';
                                    } else {
                                        $fuacultyName = $faculty->name;
                                    }
                                    if ($i == 1 || $i == 2) {
                                        $mt10 = '';
                                    } else {
                                        $mt10 = 'mt10';
                                    }
                                    echo '<li role="presentation" id="' . $faculty->id . '" class="second-faculty ' . $mt10 . '"><a href="#' . $deptClass . $i . '" aria-controls="' . $deptClass . $i . '" role="tab" data-toggle="tab" title=' . $faculty->name . '>' . $fuacultyName . '</a></li>';
                                    $i++;
                                }
                                echo '</ul></div></div></div>';
                            }
                        }
                        ?>
                        <?php
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 sol-sm-4 col-xs-12 pl0 pr0">
                    <div class="flowChart">
                        <div class="title">服务流程介绍</div>
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-3"><span class="step">STEP1</span></div>
                                <div class="col-sm-9 pl0"><span>提交预约申请</span><span class="mark" data-toggle="tooltip" data-placement="top" title="相关检查资料：
                                                                                   核磁（MRI）、CT、病理、B超及相关诊断检验报告等）">?</span></div>
                            </div>
                            <div class="row mt20">
                                <div class="col-sm-3"><span class="step">STEP2</span></div>
                                <div class="col-sm-9 pl0"><span>名医助手联系患者确认预约信息</span><span class="color-555">（8小时内）</span></div>
                            </div>
                            <div class="row mt20">
                                <div class="col-sm-3"><span class="step">STEP3</span></div>
                                <div class="col-sm-9 pl0"><span>名医助手为患者整理病历资料，根据病情匹配对症专家</span><span class="color-555">（2个工作日内）</span></div>
                            </div>
                            <div class="row mt20">
                                <div class="col-sm-3"><span class="step">STEP4</span></div>
                                <div class="col-sm-9 pl0"><span>平台工作人员与患者沟通，确定就诊时间</span></div>
                            </div>
                            <div class="row mt20">
                                <div class="col-sm-3"><span class="step">STEP5</span></div>
                                <div class="col-sm-9 pl0"><span>携带相关证件资料，在预约时间由名医助手陪护至医院就诊</span></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"><span class="step"></span></div>
                                <div class="col-sm-9 pl0">
                                    <div class="mt10"><strong>就诊结果可以手术</strong></div>
                                    <div class="color-666"><span>（安排闲置床位排期手术）</span></div>
                                    <div><strong>就诊结果不宜手术</strong></div>
                                    <div class="color-666"><span>（专家给出参考意见）</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php //$this->renderPartial("//booking/_modalQuickBook");    ?>
<?php //$this->renderPartial("//booking/_modalBooking");  ?>
<?php $this->renderPartial("//booking/bookingDeptModal"); ?>
<script>
    $(document).ready(function () {
        var dept ='<?php echo $deptId ?>'; 
        if(dept!=''){
            $("#"+dept+" a").trigger('click');
        }else{
            $('.second-faculty:first a').trigger('click');
        }
        if ($('.second-faculty').hasClass('active')) {
            $('.second-faculty.active').parents('.deptgroup').find('.first-faculty:first').addClass('active');
        }
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
        $('.second-faculty a').click(function () {
            $('.second-faculty').removeClass("active");
            $('.tab-pane').removeClass("active");
            $('.first-faculty').removeClass("active");
            $(this).parents('.deptgroup').find('.first-faculty').addClass("active");
        });
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    });

</script>
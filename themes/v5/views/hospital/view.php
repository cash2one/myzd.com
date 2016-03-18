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
                        <span class="hdesc">
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
                        </span>
                        <?php if (mb_strlen($desc) > 900) { ?>
                            <span class="pull-right more-desc"><a href="javascript:void(0);" alt="查看全部">详情&nbsp;<i class="fa fa fa-caret-down"></i></a></span>
                        <?php } ?>
                        <span class="pull-right retract"><a href="javascript:void(0);" alt="查看全部">收起&nbsp;<i class="fa fa fa-caret-up"></i></a></span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class=" pl10 pb20">
                        <div class="mt20"><img src="<?php echo $urlImage; ?>" alt="<?php echo $hName; ?>"></div>
                        <div class="text-right pr15">
<!--                            <div class="mt10 hospitalurl"><a class="text12 color-green" href="<?php echo $urlWebsite; ?>" target="_blank"><?php echo '查看官网'; ?></a></div>-->
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
                                    echo '<div role="tabpanel" class="tab-pane" id="' . $deptClass . $j . '"><div class="dept-title"><div class="pull-left mr100">选择科室：' . $faculty->name . '</div><div><button class="bookingBtn btn btn-yes pr30 pl30" data-hospital="' . $hName . '" data-dept="' . $faculty->name . '" data-hospitalid="' . $hid . '" data-deptid="' . $faculty->id . '" data-toggle="modal" data-target="#booking">预 约</button></div><div class="clearfix"></div><div class="divide-gray"></div></div><div class="faculty-desc">' . $description . '</div></div>';
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
                                echo '<div class="col-sm-6 faculty-group mt20"><div class="row deptgroup"><div class="col-sm-4 pr0"><div class="first-faculty ' . $deptClass . '"></div></div><div class="pl0 col-sm-8"><ul class="nav nav-tabs" role="tablist">';
                                $i = 1;
                                foreach ($dept as $faculty) {
                                    if ($i == 1 || $i == 2) {
                                        $mt10 = '';
                                    } else {
                                        $mt10 = 'mt10';
                                    }
                                    echo '<li role="presentation" class="second-faculty ' . $mt10 . '"><a href="#' . $deptClass . $i . '" aria-controls="' . $deptClass . $i . '" role="tab" data-toggle="tab">' . $faculty->name . '</a></li>';
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
                        <div class="text-center step">
                            <div>提交预约申请</div>
                            <div>（8小时内）</div>   
                        </div>
                        <div class="text-center mt10 mb10"><img src="<?php echo $urlResImage; ?>/hospital/arrow.png"></div>
                        <div class="text-center step">
                            <div>名医助手联系患者</div>
                            <div>确认预约信息</div>
                        </div>
                        <div class="text-center mt10 mb10"><img src="<?php echo $urlResImage; ?>/hospital/arrow.png"></div>
                        <div class="text-center step">
                            <div>名医助手为患者整理病历资料，</div>
                            <div>根据病情匹配对症专家（两个工作日内）</div>
                        </div>
                        <div class="text-center mt10 mb10"><img src="<?php echo $urlResImage; ?>/hospital/arrow.png"></div>
                        <div class="text-center step">
                            <div>平台工作人员与患者沟通，</div>
                            <div>确定就诊时间</div>
                        </div>
                        <div class="text-center mt10 mb10"><img src="<?php echo $urlResImage; ?>/hospital/arrow.png"></div>
                        <div class="text-center step">
                            <div>携带相关证件资料，</div>
                            <div>在预约时间由名医助手陪护至医院就诊</div>
                        </div>
                        <div class="text-center"><img src="<?php echo $urlResImage; ?>/hospital/branch.png"></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div>就诊结果可以手术</div>
                                <div class="text-center step">
                                    <div>安排闲置</div>
                                    <div>床位排期手术</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div>就诊结果不宜手术</div>
                                <div class="text-center step">
                                    <div>专家给出</div>
                                    <div>参考意见</div>
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
        $('.departments .describable').find('.tab-pane:first').addClass('active');
        $('.faculty-group:first').find('.first-faculty').addClass('active');
        $('.faculty-group:first').find('.second-faculty:first').addClass('active');
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
    });

</script>
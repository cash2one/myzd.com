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
                <li>></li>
                <li><a href="<?php echo $this->createUrl('hospital/index', array('city' => $city->id)) ?>"><?php echo $city->name; ?></a></li>
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
                    <div class="border-gray pl10 pb20">
                        <div class="mt20 pr10"><img src="<?php echo $urlImage; ?>" alt="<?php echo $hName; ?>"></div>
                        <div>
                            <div class="mt10 hospitalurl">官网：<a href="<?php echo $urlWebsite; ?>" target="_blank"><?php echo $urlWebsite; ?></a></div>
                        </div>
                        <div class="pr10">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt40">
    <div class="container">
        <div class="departments">
            <div class="row">
                <div class="col-lg-9 col-sm-8 col-xs-12">
                    <div class="header"><span>推荐科室</span></div>
                    <div class="divide-color-ddd"></div>
                    <?php if ($departments) { ?>
                        <ul class="nav nav-tabs text-right mt20" role="tablist">
                            <?php
                            $i = 1;
                            foreach (array_reverse($departments) as $key => $dept) {
                                if ($i == count($departments)) {
                                    $active = 'active';
                                } else {
                                    $active = '';
                                }
                                echo '<li role="presentation" class="' . $active . ' color-black col-sm-2 nopadding"><a href="#' . $i . '" aria-controls="' . $i . '" role="tab" data-toggle="tab">' . $key . '</a></li>';
                                $i++;
                            }
                            ?>
                        </ul>
                        <div class="tab-content">
                            <?php
                            $j = 1;
                            foreach (array_reverse($departments) as $key => $dept) {
                                if ($j == count($departments)) {
                                    $active = 'active';
                                } else {
                                    $active = '';
                                }
                                echo '<div role="tabpanel" class="tab-pane ' . $active . '" id="' . $j . '">';
                                foreach ($dept as $faculty) {
                                    echo '<div class="mt20 dept-describe">'.
                                         '<div class="dept-title">'.$faculty->name.'<div class="pull-right mt5"><a class="btn btn-yes">预约</a></div><div class="clearfix"></div></div>'.
                                         '<div class="mt10 strong"><strong>科室介绍：</strong>新华医院新华医院新华医院新华医院新华医院新华医院新华医院新华医院新华医院新华医院新华医院新华医院新华医院新华医院新华医院新华医院新华医院新华医院</div>'.
                                         '</div>';
                                }
                                echo '</div>';
                                $j++;
                            }
                            ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-3 sol-sm-4 col-xs-12">
                    <img src="<?php echo $urlResImage; ?>hospital/flowChart.png">
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
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl . '/css/huizhen.css' . '?v=' . time(); ?>" />
<?php
$menu = $this->loadPageMenu();
$cssClass = $model->code;
?>

<div class="<?php echo $cssClass; ?>">
    <div class="contain-fluid">
        <div class="page-cover">
            <div class="xoverlay-shadow">
                <div class="page-title text-center hidden-xs"><?php echo $model->getName(); ?></div>
                <div class="page-title visible-xs">国内名医</div>
            </div>
        </div>
    </div>

    <div class="container page-content">
        <div class="row">
            <div id="sidemenu" class="col-sm-3 xpos-fixed"> 
                <?php $this->renderPartial('pages/_sidemenu', array('menu' => $menu)); ?>
            </div>
            <div id="main-content" class="col-2 col-sm-9 xcol-sm-offset-3">
                <section class="disease clearfix">
                    <div class="heading-u">
                        <div class="text">疾病导诊</div>
                        <div class="divider"></div>
                    </div>
                    <div class="content nav-dis">
                        <?php
                        $disList = $model->getDiseaseList();
                        if (arrayNotEmpty($disList)) {
                            echo '<ul class="col-3">';
                            foreach ($disList as $dis) {
                                echo '<li><span class="glyphicon glyphicon-ok"></span>' . $dis . '</li>';
                            }
                            echo '</ul>';
                        }
                        ?>
                    </div>                
                </section>
                <section class="hospital clearfix">
                    <div class="heading-u">
                        <div class="text">部分合作医院</div>
                        <a class="btn btn-warning btn-wide pull-right" href="<?php echo $this->createUrl('medicalrecord/create'); ?>"><i class="fa fa-headphones"></i>&nbsp;立即预约</a>
                        <div class="divider"></div>
                    </div>
                    <div class="content">
                        <div class="clearfix">
                            <?php
                            $hospitalList = $model->getHospitals();
                            if (arrayNotEmpty($hospitalList)) {
                                ?>
                                <div class="col-sm-4 col-1">
                                    <div class="row">
                                        <ul class="nav nav-tabs bs-tabs">
                                            <?php
                                            foreach ($hospitalList as $hospital) {                                                
                                                echo '<li><a href="#h-tab' . $hospital->id . '" data-toggle="tab"><div class="h4 h-name">' . $hospital->name . '</div><div><span class="text-info h-class">' . $hospital->class . '</span><span class="text-primary h-type">' . $hospital->type . '</span></div></a></li>';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-2">
                                    <div class="tab-content bs-tab-content">
                                        <?php
                                        foreach ($hospitalList as $hospital) {
                                            echo '<div class="tab-pane" id="h-tab' . $hospital->id . '">' . $hospital->desc . '</div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="clearfix mt15 pull-right">                        
                        <a class="color-green nostyle" href="<?php echo $this->createUrl('site/contactus'); ?>">联系我们，了解更多医院信息&nbsp;<i class="fa fa-chevron-right"></i></a>
                    </div>
                </section>
                <section class="doctor clearfix">
                    <div class="heading-u">
                        <div class="text">部分合作医生</div>
                        <a class="btn btn-warning btn-wide pull-right" href="<?php echo $this->createUrl('medicalrecord/create'); ?>"><i class="fa fa-headphones"></i>&nbsp;立即预约</a>
                        <div class="divider"></div>
                    </div>
                    <div class="content">                        
                        <?php
                        $count = 1;
                        $doctorList = $model->getDoctors();
                        if (arrayNotEmpty($doctorList)) {
                            foreach ($doctorList as $key => $doctor) {
                                if ($count % 2 == 1) {
                                    //odd number.
                                    echo '<div class="row">';
                                }
                                echo '<div class="col-sm-6 d-info">
                            <div class="media">
                                <span class="d-avatar">
                                    <img class="media-object" src="' . $doctor->urlAvatar . '" alt="" />
                                </span>
                                <div class="media-body">
                                    <div class="media-heading d-name">' . $doctor->name . '</div>
                                    <div><span class="d-hospital">' . $doctor->hospitalName . '</span><span class="d-faculty">' . $doctor->faculty . '</span></div>
                                    <div class="d-title">' . $doctor->medicalTitle . '</div>                                        
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="d-desc">
                                <div class="dis-specialty">
                                    <div class="strong">擅长：</div>
                                        <div>' . $doctor->description . '</div>
                                    </div>
                            </div>
                        </div>';
                                if ($count % 2 == 0) {
                                    //even number. close <div class="row">
                                    echo '</div>';
                                }
                                $count++;
                            }
                        }
                        ?>
                    </div>
                    <div class="clearfix mt15 pull-right">
                        <a class="color-green nostyle" href="<?php echo $this->createUrl('site/contactus'); ?>">联系我们，了解更多医院信息&nbsp;<i class="fa fa-chevron-right"></i></a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/cust/huizhen.js', CClientScript::POS_END); ?>
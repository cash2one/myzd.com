<?php
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/user100.min.css");
/**
 * $model MedicalRecordBooking.
 */
$mRecord = $model->getMedicalRecord();
?>
<div id="mrbooking-success" class="row">
    <div class="col-sm-4 hidden-xs">
        <img class="img-responsive pull-right" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/mrbooking_success.jpg" alt="预约名医" />
    </div>
    <div class="col-sm-8">
        <div class="h3 color-green title">恭喜您，预约成功！</div>
        <div class="booking-info">
            <dl class="dl-horizontal border">
                <dt>预约号：</dt>
                <dd><?php echo $model->getRefNumber();?></dd>
                <dt>患者姓名：</dt>
                <dd><?php echo $mRecord->getName(); ?></dd>
                <dt>病情描述：</dt>
                <dd><?php echo $mRecord->getPatientCondition(); ?></dd>
                <dt>所选科室：</dt>
                <dd><?php echo $model->getFacultyName(); ?></dd>
                <dt>期望就诊日期：</dt>
                <dd><span class="mr15"><?php echo $model->getApptDate(); ?></span><span><?php echo $model->getBufferDays();?></span></dd>
                <dt>具体需求：</dt>
                <dd><?php echo $model->getPatientIntention(); ?></dd>                
            </dl>
        </div>
    </div>
</div>
<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time());
$urlBookingView = $this->createUrl('booking/view');
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlBookingList = $this->createUrl('booking/list');
?>
<div class="bg-green">
    <div class="container">
        <div class="user-crumbs">
            <a href="<?php echo Yii::app()->homeUrl; ?>">首页</a>
            >>
            <a href="<?php echo $urlBookingList; ?>">个人中心</a>
            >>
            <a href="<?php echo $urlBookingList; ?>">预约单</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt40">
        <div class="col-sm-3">
            <?php $this->renderPartial('//user/_userMenu', array('pageActive' => 'settings')); ?>
        </div>
        <div class="col-sm-9">
            <div>
                <img class="img-responsive" src="<?php echo $urlResImage; ?>user/process.png">
            </div>
            <div class="bookinglist border-green mt10">
                <div class="mt50">
                    <?php $this->renderPartial('_formPassword', array('model' => $model)); ?>
                </div>
                
            </div>
        </div>
    </div>
</div>
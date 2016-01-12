<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time()); ?>
<?php
/*
 * $form MRBookingForm.
 */
?>

<div id="mrbooking-create" class="row mt20">
    <!-- col-sm-3 -->
    <?php //$this->renderPartial('//layouts/_sidemenu-b', array('activeTab' => 'tab-password')); ?>
    <!-- /-col-sm-3 -->

    <div class="col-md-10 col-md-offset-1">	
        <div class="row">
            <ul class="step-process clearfix">
                <li class="step-item"><a>1. 填写患者信息</a></li>
                <li class="step-item"><a>2. 上传病历报告</a></li>
                <li class="step-item active"><a>3. 预约名医</a></li>
            </ul>
        </div>
        <div class="row">            
            <div class="form border mt20">
                <?php $this->renderPartial('_form', array('model' => $form)); ?>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->
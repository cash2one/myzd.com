<?php Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/user100.min.css"); ?>	
<?php
/*
 * $model DoctorForm.
 */
$urlLogin = $this->createUrl('doctor/login');

?>

<div class="row">
    <div class="col-sm-10 col-md-9">
        <div class="row">
            <div class="col-sm-offset-2 border-bottom">
                <h3>修改医生信息</h3>
            </div>
        </div>
        <div class="row mt20">
            <?php $this->renderPartial('_form', array('model' => $model)); ?>
        </div>
        <div class="mt30"></div>
    </div>  	
</div>
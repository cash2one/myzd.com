<?php
/*
 * $mrBooking MedicalRecordBooking.
 */
$urlMrbookingUpdate = $this->createUrl('mrbooking/update', array('id' => $model->getId()));
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'mrbooking-form',
    'action' => $urlMrbookingUpdate,
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'htmlOptions' => array('class' => "form-horizontal disabled", 'role' => 'form', 'autocomplete' => 'off')
        ));

echo '<input type="hidden" value="' . $model->getId() . '" name="id">';
?>
<fieldset id="mrbooking-info">
    <legend class="color-green">预约信息</legend>
    <div class="form-group">
        <label for="" class="col-sm-3 col-md-2 control-label">科室：</label>
        <div class="col-sm-4"> 
            <div class="form-control-static"><?php echo $model->getFacultyName(); ?></div>                     
        </div>
    </div>

    <div class="form-group">
        <label for="" class="col-sm-3 col-md-2 control-label">期望就诊日期：</label>
        <div class="col-sm-8">
            <div class="form-control-static"><?php echo $model->getApptDate() . '&nbsp;&nbsp;' . $model->getBufferDays(); ?></div>            
        </div>
    </div>


    <div class="form-group">
        <label for="" class="col-sm-3 col-md-2 control-label">具体需求：</label>
        <div class="col-sm-4">        
            <div class="form-control-static"><?php echo $model->getPatientIntention(); ?></div>            
        </div>
    </div>
</fieldset>
<fieldset id="mrbooking-contact" class="mt30">
    <legend class="color-green">联系人信息</legend>
    <div class="form-group">
        <label for="" class="col-sm-3 col-md-2 control-label">手机号码：</label>
        <div class="col-sm-4">        
            <div class="form-control-static"><?php echo $model->getMobile(); ?></div>            
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-3 col-md-2 control-label">邮箱：</label>
        <div class="col-sm-4">        
            <div class="form-control-static"><?php echo $model->getEmail(); ?></div>            
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-3 col-md-2 control-label">微信：</label>
        <div class="col-sm-4">        
            <div class="form-control-static"><?php echo $model->getWechat(); ?></div>            
        </div>
    </div>
</fieldset>

<?php $this->endWidget(); ?>

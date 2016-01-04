<?php
/* @var $this MrBookingController */
/* @var $model MRBookingForm */
/* @var $form CActiveForm */
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/js/bootstrap-datepicker/css/bootstrap-datepicker.css");
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-datepicker/bootstrap-datepicker.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-datepicker/bootstrap-datepicker.zh-CN.js', CClientScript::POS_END);
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'mr-booking-form',
        //'action' => $this->createUrl('mrbooking/create'),
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'htmlOptions' => array('class' => "form-horizontal", 'role' => 'form', 'autocomplete' => 'off'),
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => false,
            'validateOnType' => true,
            'validateOnDelay' => 500,
            'errorCssClass' => 'error',
        ),
        'enableAjaxValidation' => false,
            ));


    echo '<input type="hidden" name="id" value="' . $model->id . '"/>';
    echo '<input type="hidden" name="mrid" value="' . $model->mr_id . '"/>';
    ?>    

    <fieldset>
        <legend class="color-green">预约详情</legend>
        <div class="form-group">
            <label class="col-sm-3 col-md-2 control-label" for="MRBookingForm_faculty_id">科室：</label>   
            <div class="col-sm-4 col-md-3 mb10">
                <div class="styled-select">
                    <?php
                    echo $form->dropDownList($model, 'faculty_id', $model->loadOptionsFaculty(), array(
                        'prompt' => '-- 选择科室 --',
                        'class' => 'sel form-control',
                    ));
                    ?>
                </div>
                <?php echo $form->error($model, 'faculty_id'); ?>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 col-md-2 control-label" for="MRBookingForm_appt_date">期望就诊日期：</label>   
            <div class="col-sm-4 col-md-3 mb10">                
                <div class="styled-select">                    
                    <?php echo $form->textfield($model, 'appt_date', array('class' => 'form-control datepicker', 'readonly' => true, 'data-format' => 'yyyy-mm-dd', 'placeholder' => '请输入日期')); ?>
                </div>  
                <?php echo $form->error($model, 'appt_date'); ?>
            </div>
            <div class="col-sm-4 col-md-3 mb10">
                <div class="styled-select">
                    <?php
                    echo $form->dropDownList($model, 'buffer_days', $model->loadOptionsBufferDays(), array(
                        'class' => 'sel form-control',
                    ));
                    ?>
                </div> 
                <?php echo $form->error($model, 'buffer_days'); ?>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <label for="" class="col-sm-3 col-md-2 control-label">具体需求：</label>
            <div class="col-sm-6">
                <span class="help-block">您需要我们如何帮助您？（必填）</span>
                <?php echo $form->textarea($model, 'patient_intention', array('class' => 'form-control', 'rows' => 3, 'maxlength' => 100, 'placeholder' => '明确诊断、联系专家、安排手术等')); ?>
                <?php echo $form->error($model, 'patient_intention'); ?>
            </div>
            <div class="clearfix"></div>
        </div>

    </fieldset>

    <fieldset class="mt30">
        <legend class="color-green">联系人信息</legend>

        <div class="form-group">
            <label for="" class="col-sm-3 col-md-2 control-label">手机号码：</label>
            <div class="col-sm-6">
                <?php echo $form->textField($model, 'mobile', array('class' => 'form-control', 'maxlength' => 11, 'placeholder' => '请输入11位中国手机号码（必填）')); ?>
                <?php echo $form->error($model, 'mobile'); ?>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <label for="" class="col-sm-3 col-md-2 control-label">邮箱：</label>
            <div class="col-sm-6">
                <?php echo $form->textField($model, 'email', array('class' => 'form-control', 'maxlength' => 100, 'placeholder' => '可为空白')); ?>
                <?php echo $form->error($model, 'email'); ?>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <label for="" class="col-sm-3 col-md-2 control-label">微信号：</label>
            <div class="col-sm-6">
                <?php echo $form->textField($model, 'wechat', array('class' => 'form-control', 'maxlength' => 45, 'placeholder' => '可为空白')); ?>
                <?php echo $form->error($model, 'wechat'); ?>
            </div>
            <div class="clearfix"></div>
        </div>

    </fieldset>

    <div class="form-group mt30">
        <div class="col-sm-3 hidden-xs">
            <?php echo CHtml::link('<i class="fa fa-arrow-left"></i>&nbsp;上一步', array('medicalrecord/create2', 'id' => $model->getMrId()), array('class' => 'btn btn-info btn-block')); ?>
        </div>
        <div class="col-sm-3 pull-right">
            <button type="submit" class="btn btn-success btn-block" name="yt1"><i class="fa fa-check"></i>&nbsp;提交</button>            
        </div>
    </div>
</div>


<?php $this->endWidget(); ?>

</div><!-- form -->
<script>
    $(document).ready(function(){
        $("#mr-booking-form .datepicker").datepicker({
            startDate: "+1d",
            todayBtn: true,
            autoclose: true,
            maxView: 3,
            format: "yyyy-mm-dd",
            language: "zh-CN"
        });
    });
</script> 
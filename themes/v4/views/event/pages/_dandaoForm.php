<?php
/* @var $this EventDandaoController */
/* @var $model EventDandao */
/* @var $form CActiveForm */
?>
<div id="form-success" class="row hide">
    <div class="col-sm-12">
        <div class="alert alert-success alert-dismissable text-center">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <span>恭喜！您已成功报名<i class="fa fa-check"></i></span>
        </div>
    </div>
</div>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'event-dandao-form',
        'action' => $this->createUrl('event/ajaxDandao'),
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'htmlOptions' => array('class' => "form-horizontal", 'role' => 'form', 'autocomplete' => 'off'),
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
            'validateOnType' => true,
            'validateOnDelay' => 500,
            'errorCssClass' => 'error',
        ),
        'enableAjaxValidation' => false,
            ));
    ?>

    <div class="form-group">
        <label for="EventDandao_name" class="col-sm-3 control-label">患者姓名：</label>
        <div class="col-sm-5">
            <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'maxlength' => 45, 'placeholder' => '输入患者姓名')); ?>
            <?php echo $form->error($model, 'name'); ?>
        </div>
    </div>

    <div class="form-group">       
        <div class="col-sm-3 col-sm-offset-3">            
            <div class="styled-select">
                <?php
                echo $form->dropDownList($model, 'gender', $model->getOptionsGender(), array(
                    'prompt' => '请选择性别',
                    'class' => 'sel form-control',
                ));
                ?>
            </div>
            <?php echo $form->error($model, 'gender'); ?>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <label for="EventDandao_mobile" class="col-sm-3 control-label">手机号码：</label>
        <div class="col-sm-5">
            <?php echo $form->textField($model, 'mobile', array('class' => 'form-control', 'maxlength' => 11, 'placeholder' => '11位中国手机号码')); ?>
            <?php echo $form->error($model, 'mobile'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="EventDandao_nric" class="col-sm-3 control-label">身份证号码：</label>
        <div class="col-sm-5">
            <?php echo $form->textField($model, 'nric', array('class' => 'form-control', 'maxlength' => 18, 'placeholder' => '输入身份证号码')); ?>
            <?php echo $form->error($model, 'nric'); ?>
        </div>
    </div>


    <div class="form-group">
        <label for="EventDandao_diagnosis" class="col-sm-3 control-label">疾病诊断：</label>
        <div class="col-sm-8">
            <?php echo $form->textarea($model, 'diagnosis', array('class' => 'form-control', 'rows' => 4, 'maxlength' => 200, 'placeholder' => '肝癌、肾结石等（限200个字）')); ?>
            <?php echo $form->error($model, 'diagnosis'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="EventDandao_treatment" class="col-sm-3 control-label">治疗经过：</label>
        <div class="col-sm-8">
            <?php echo $form->textarea($model, 'treatment', array('class' => 'form-control', 'rows' => 4, 'maxlength' => 200, 'placeholder' => '请描述以上疾病的治疗经过（限200个字）')); ?>
            <?php echo $form->error($model, 'treatment'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="EventDandao_other" class="col-sm-3 control-label">其它：</label>
        <div class="col-sm-8">
            <?php echo $form->textarea($model, 'other', array('class' => 'form-control', 'rows' => 3, 'maxlength' => 100, 'placeholder' => '（限100个字）')); ?>
            <?php echo $form->error($model, 'other'); ?>
        </div>
    </div>


    <div class="form-group mt20">
        <div class="col-sm-5 col-sm-offset-3">
            <?php
            echo CHtml::ajaxSubmitButton('提交', CHtml::normalizeUrl(array('event/ajaxDandao', 'render' => true)), array(
                'dataType' => 'json',
                'type' => 'post',
                'success' => 'function(data) {
                        // $("#ajaxLoader").hide();  
                        $("#btnEventDandao").button("reset");
                         var domForm = $("#event-dandao-form");
                        if(data.status=="true"){
                         $("#form-success").removeClass("hide");
                         domForm[0].reset();
                         domForm.hide();
                        }
                         else{
                         $("#form-success").addClass("hide");
                        $.each(data, function(key, val) {
                        domForm.find("#"+key+"_em_").text(val);
                        domForm.find("#"+key+"_em_").show();
                        });
                        }       
                    }',
                'beforeSend' => 'function(){                        
                          // $("#ajaxLoader").show();
                        //  $("#btnEventDandao").button("loading");
                      }'
                    ), array('id' => 'btnEventDandao', 'class' => 'btn btn-success btn-lg btn-block', 'data-loading-text' => '提交中...'));
            ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
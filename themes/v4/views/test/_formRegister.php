<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-form',
    'enableAjaxValidation' => true,
    'action' => $this->createUrl('test/test'),
    'enableClientValidation' => true,
        ));
?>
<div class="errorMessage" id="formResult"></div>
<div id="AjaxLoader" style="display: none"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/spinner.gif"></img></div>
<div class="row-user-single">
    <?php echo $form->labelEx($model, 'username'); ?>
    <?php echo $form->textField($model, 'username', array('size' => 60, 'maxlength' => 500)); ?>
    <?php echo $form->error($model, 'username'); ?>
</div>

<div class="row-user-single">
    <?php echo $form->labelEx($model, 'password_raw'); ?>
    <?php echo $form->passwordField($model, 'password_raw', array('size' => 60, 'maxlength' => 500)); ?>
    <?php echo $form->error($model, 'password_raw'); ?>
</div>

<div class="row-user-single">
    <?php echo $form->labelEx($model, 'password_repeat'); ?>
    <?php echo $form->passwordField($model, 'password_repeat', array('size' => 60, 'maxlength' => 500)); ?>
    <?php echo $form->error($model, 'password_repeat'); ?>
</div>
<div class="buttons">

    <?php
    echo CHtml::ajaxSubmitButton('Save', CHtml::normalizeUrl(array('test/test', 'render' => true)), array(
        'dataType' => 'json',
        'type' => 'post',
        'success' => 'function(data) {
                         $("#AjaxLoader").hide();  
                        if(data.status=="success"){
                         $("#formResult").html("form submitted successfully.");
                         $("#user-form")[0].reset();
                         console.log("success");
                            console.log(data);
                        }
                         else{
                         console.log("error");
                         console.log(data);
                        $.each(data, function(key, val) {
                        $("#user-form #"+key+"_em_").text(val);                                                    
                        $("#user-form #"+key+"_em_").show();
                        });
                        }       
                    }',
        'beforeSend' => 'function(){                        
                           $("#AjaxLoader").show();
                      }'
            ), array('id' => 'mybtn', 'class' => 'class1 class2'));
    ?>
    <?php $this->endWidget(); ?>
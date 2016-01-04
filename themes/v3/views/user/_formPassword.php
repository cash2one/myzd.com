<?php
/*
 * $model UserPasswordForm.
 */
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-password-form',
    'action' => $this->createUrl('user/changePassword'),
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
        // 'focus' => array($model, 'password'),
        ));
?>
<div class="row form-success hide">
    <div class="col-sm-5 col-sm-offset-3">
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <span>密码修改成功<i class="fa fa-check"></i></span>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="" class="col-sm-3 control-label">当前密码：</label>
    <div class="col-sm-5">
        <?php echo $form->passwordField($model, 'password', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>
</div>

<div class="form-group">
    <label for="" class="col-sm-3 control-label">新密码：</label>
    <div class="col-sm-5">
        <?php echo $form->passwordField($model, 'password_new', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'password_new'); ?>        
    </div>
</div>

<div class="form-group">
    <label for="" class="col-sm-3 control-label">确认新密码：</label>
    <div class="col-sm-5">
        <?php echo $form->passwordField($model, 'password_repeat', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'password_repeat'); ?>        
    </div>
</div>


<div class="form-group mt30">
    <div class="col-sm-5 col-sm-offset-3">         		
        <?php
        echo CHtml::ajaxSubmitButton('提交', CHtml::normalizeUrl(array('user/changePassword', 'render' => true)), array(
            'dataType' => 'json',
            'type' => 'post',
            'beforeSend' => 'function(){                          
                          $("#btnUserPassword").button("loading");
                      }',
            'success' => 'function(data) {                        
                        $("#btnUserPassword").button("reset");
                         var domForm = $("#user-password-form");
                        if(data.status=="true"){
                         domForm.find(".form-success").removeClass("hide");
                         domForm[0].reset();
                        }
                         else{
                         domForm.find(".form-success").addClass("hide");
                        $.each(data, function(key, val) {
                        domForm.find("#"+key+"_em_").text(val).show();                        
                        });
                        }       
                    }',
            'complete' => 'function(){$("#btnUserPassword").button("reset");}'
                ), array('id' => 'btnUserPassword', 'class' => 'btn btn-yes btn-lg btn-block', 'data-loading-text' => '提交中...'));
        ?>
    </div>
</div>
<?php
$this->endWidget();
?>
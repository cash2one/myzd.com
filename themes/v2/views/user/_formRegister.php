<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-form',
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
        //'focus' => array($model, 'username'),
        ));

?>
<div class="hide">
    <input  class="hide" type="text" />
    <input class="hide"  type="password" />
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'username', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-8">
        <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'maxlength'=>11, 'placeholder' => '登录ID')); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'password', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-8">
        <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'autocomplete' => 'off', 'maxlength'=>40, 'placeholder' => '4至20位英文或数字')); ?>                    
        <?php echo $form->error($model, 'password'); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'password_repeat', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-8">
        <?php echo $form->passwordField($model, 'password_repeat', array('class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => '请再次输入密码')); ?>                    
        <?php echo $form->error($model, 'password_repeat'); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
        <div class="checkbox pull-left">
            <label class="radio-label">
                <?php echo $form->checkBox($model, 'terms', array('class' => 'radio-checkbox', 'value' => 1)); ?>同意名医之道<a class="nostyle" href="<?php echo $this->createUrl('site/page', array('view' => 'terms')); ?>" target="_blank">《在线服务条款》</a>
            </label>
        </div>
        <div class="clearfix"></div>
        <?php echo $form->error($model, 'terms'); ?>
    </div>
</div>


<div class="form-group mt30 mb30">
    <div class="col-sm-offset-3 col-sm-8">
        <button type="submit" class="btn btn-success btn-lg btn-block">注册</button>			
    </div>
</div>
<?php $this->endWidget(); ?>

<script>
    $(document).ready(function(){
        $("#btnSendSmsVerifyRegister").click(function(){
            var $mobile = $("input[name='UserRegisterForm[username]']").val();
            var $actionUrl ="<?php echo $this->createUrl('user/sendSmsVerifyCode'); ?>";
            $.ajax({ 
                type:'post',
                data:"UserSmsVerify[mobile]="+$mobile+"&UserSmsVerify[action_type]=1",
                dataType: "json",
                url: $actionUrl
            }); 
            
            buttonTimerStart($(this), 60000);
        });

    });
</script>
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
    <label class="col-sm-3 control-label required" for="UserRegisterForm_username"><span class="required">*</span>&nbsp;手机号：</label>
    <?php //echo $form->labelEx($model, 'username', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-8">
        <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'maxlength' => 11, 'placeholder' => '验证码将会发送至该手机号码')); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label" for="UserRegisterForm_captcha_code"><span class="required">*</span>&nbsp;验证码：</label>
    <?php //echo $form->labelEx($model, 'captcha_code', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-5">
        <?php echo $form->textField($model, 'captcha_code', array('class' => 'form-control', 'autocomplete' => 'off')); ?>
        <?php echo $form->error($model, 'captcha_code'); ?>
    </div>
    <div class="col-sm-4">
        <?php $this->widget('CCaptcha', array('buttonLabel' => '&nbsp;&nbsp;换一张&nbsp;&nbsp;', 'buttonOptions' => array('class' => 'btn btn-info mt10'))); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label" for="UserRegisterForm_sms_verify_code"><span class="required">*</span>&nbsp;短信验证码</label>
    <?php //echo $form->labelEx($model, 'sms_verify_code', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-8">
        <div class="input-group">
            <?php echo $form->textField($model, 'sms_verify_code', array('class' => 'form-control', 'autocomplete' => 'off', 'maxlength' => 6, 'placeholder' => '输入验证码')); ?>

            <span class="input-group-btn">
                <button id="btnSendSmsVerifyRegister" class="btn btn-warning" type="button">发送验证码</button>
            </span>
        </div><!-- /input-group -->
        <?php echo $form->error($model, 'sms_verify_code'); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label required" for="UserRegisterForm_password"><span class="required">*</span>&nbsp;登录密码</label>
    <?php //echo $form->labelEx($model, 'password', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-8">
        <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => '4至20位英文或数字')); ?>                    
        <?php echo $form->error($model, 'password'); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label required" for="UserRegisterForm_password_repeat"><span class="required">*</span>&nbsp;确认密码</label>
    <?php //echo $form->labelEx($model, 'password_repeat', array('class' => 'col-sm-3 control-label')); ?>
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
            var $domForm = $("#user-form");
            var $domBtn = $(this);
            var $mobile = $("input[name='UserRegisterForm[username]']").val();
            if($mobile.trim().length===0){
                $domForm.find("#UserRegisterForm_username_em_").html("请输入手机号").show();    
                return false;
            }
            else if(myhzValidateMobile($mobile, true)==false){
                $domForm.find("#UserRegisterForm_username_em_").html("请输入正确的11位中国手机号码").show();
                return false;
            }
            
            var $captchaCode = $("input[name='UserRegisterForm[captcha_code]']").val();
            var $actionUrl ="<?php echo $this->createUrl('user/sendSmsVerifyCode'); ?>";
            var formData = new FormData();
            formData.append('UserSmsVerify[mobile]',$mobile);
            formData.append('UserSmsVerify[action_type]',1);
            formData.append('UserSmsVerify[captcha_code]',$captchaCode);
            $.ajax({ 
                type:'post',
                url: $actionUrl,
                // data:"UserSmsVerify[mobile]="+$mobile+"&UserSmsVerify[action_type]=1"
                data:formData,
                dataType: "json",
                processData: false, 
                contentType: false,
                'success':function(data){
                    if(data.status=="true"){                        
                        //domForm[0].reset();
                        buttonTimerStart($domBtn, 60000);
                    }
                    else{                        
                        $.each(data, function(key, val) {                            
                            $domForm.find("#UserRegisterForm_"+key+"_em_").text(val).show();                           
                        });
                    }  
                },
                'error':function(data){console.log(data)},
                'complete':function(){}
                
            }); 
            
            //    buttonTimerStart($(this), 60000);
        });

    });
</script>
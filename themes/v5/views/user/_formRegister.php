<?php
/**
 * $model UserRegisterForm.
 */
$urlGetSmsVerifyCode = $this->createAbsoluteUrl('auth/sendSmsVerifyCode');
$authActionType = AuthSmsVerify::ACTION_USER_REGISTER;

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
    'enableAjaxValidation' => true,
        //'focus' => array($model, 'username'),
        ));

echo CHtml::hiddenField("smsverify[actionUrl]", $urlGetSmsVerifyCode);
echo CHtml::hiddenField("smsverify[actionType]", $authActionType);
?>
<div class="hide">
    <input  class="hide" type="text" />
    <input class="hide"  type="password" />
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'username', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-9">
        <?php echo $form->numberField($model, 'username', array('class' => 'form-control', 'maxlength' => 11, 'placeholder' => '请输入有效的中国手机号码')); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>
</div>

<div class="form-group">
    <label for="" class="padright0 col-sm-3 col-md-3 control-label">验证码:</label>
    <div class="col-sm-9 controls">
        <div class="input-group">
            <?php echo $form->numberField($model, 'verify_code', array('class' => 'form-control', 'maxlength' => 6)); ?>
            <div id="btn-sendSmsCode" class="btn input-group-addon  btn-verifycode">获取验证码</div>
        </div>
        <?php echo $form->error($model, 'verify_code'); ?>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'password', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-9">
        <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'autocomplete' => 'off', 'maxlength' => 40, 'placeholder' => '4至20位英文或数字')); ?>                    
        <?php echo $form->error($model, 'password'); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'password_repeat', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-9">
        <?php echo $form->passwordField($model, 'password_repeat', array('class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => '请再次输入密码')); ?>                    
        <?php echo $form->error($model, 'password_repeat'); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
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
    <div class="col-sm-offset-3 col-sm-4">
        <button type="submit" class="btn btn-yes btn-lg btn-block">注册</button>			
    </div>
    <div class="col-sm-5 pt10">
        <sub class="mt10 small text15">已有账号？直接<a class="nostyle" href="<?php echo $this->createUrl('user/login'); ?>">登录</a></sub>
    </div>
    
</div>
<?php $this->endWidget(); ?>


<script type="text/javascript">
    $(document).ready(function () {
        $("#btn-sendSmsCode").click(function () {
            sendSmsVerifyCode($(this));
        });
    });
    function sendSmsVerifyCode(domBtn) {
        var domMobile = $("#UserRegisterForm_username");
        var mobile = domMobile.val();
        if (mobile.length === 0) {
            $("#UserRegisterForm_username_em_").text("请输入手机号码").show();
            domMobile.parent().addClass("error");
        } else if (domMobile.parent().hasClass("error")) {
            // mobile input field as error, so do nothing.
        } else {
            buttonTimerStart(domBtn, 60000);
            $domForm = $("#user-form");
            var actionUrl = $domForm.find("input[name='smsverify[actionUrl]']").val();
            var actionType = $domForm.find("input[name='smsverify[actionType]']").val();
            var formData = new FormData();
            formData.append("AuthSmsVerify[mobile]", mobile);
            formData.append("AuthSmsVerify[actionType]", actionType);

            $.ajax({
                type: 'post',
                url: actionUrl,
                data: formData,
                dataType: "json",
                processData: false,
                contentType: false,
                'success': function (data) {
                    if (data.status === true) {
                        //domForm[0].reset();
                    }
                    else {
                        console.log(data);
                    }
                },
                'error': function (data) {
                    console.log(data);
                },
                'complete': function () {
                }
            });
        }
    }

    function buttonTimerStart(domBtn, timer) {
        timer = timer / 1000 //convert to second.
        var interval = 1000;
        var timerTitle = '秒后重发';
        domBtn.attr("disabled", true);
        domBtn.html(timer + timerTitle);

        timerId = setInterval(function () {
            timer--;
            if (timer > 0) {
                domBtn.html(timer + timerTitle);
            } else {
                clearInterval(timerId);
                timerId = null;
                domBtn.html("重新发送");
                domBtn.attr("disabled", false);
            }
        }, interval);
    }
</script>
<?php
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.form.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.validate.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/custom/forgetPwdValidator.js', CClientScript::POS_END);
?>
<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time());
$urlBookingView = $this->createUrl('booking/view');
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlBookingList = $this->createUrl('booking/list');
$urlAction = $this->createUrl('user/ajaxForgetPassword');
$urlReturn = "";
$urlGetSmsVerifyCode = $this->createAbsoluteUrl('/auth/sendSmsVerifyCode');
$authActionType = AuthSmsVerify::ACTION_USER_PASSWORD_RESET;
?>
<div class="bg-green">
    <div class="container">
        <div class="user-crumbs">
            <a href="<?php echo Yii::app()->homeUrl; ?>">首页</a>
            >
            <a>忘记密码</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt40">
        <div class="col-sm-7">
            <div>
                <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146010389103757"/>
            </div>
        </div>
        <div class="col-sm-4 col-sm-offset-1">
            <div>
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'changePwd-form',
                    'action' => $urlAction,
                    // Please note: When you enable ajax validation, make sure the corresponding
                    // controller action is handling ajax validation correctly.
                    // There is a call to performAjaxValidation() commented in generated controller code.
                    // See class documentation of CActiveForm for details on this.
                    'htmlOptions' => array('class' => "form-horizontal", 'role' => 'form', 'autocomplete' => 'off', 'data-ajax' => 'false', 'data-returnUrl' => $urlReturn),
                    'enableClientValidation' => false,
                    'clientOptions' => array(
                        'validateOnSubmit' => true,
                        'validateOnType' => true,
                        'validateOnDelay' => 500,
                        'errorCssClass' => 'error',
                    ),
                    'enableAjaxValidation' => false,
                ));
                echo CHtml::hiddenField("smsverify[actionUrl]", $urlGetSmsVerifyCode);
                echo CHtml::hiddenField("smsverify[actionType]", $authActionType);
                ?>
                <div class="contrller">
                    <?php echo $form->labelEx($model, 'username', array('class' => '')); ?>
                    <?php echo $form->numberField($model, 'username', array('placeholder' => '输入手机号码', 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'username'); ?>
                    <div></div>
                </div>
                <div class="contrller">
                    <label class=" required" for="ForgetPasswordForm_username" aria-required="true">图形验证码 <span class="required" aria-required="true">*</span></label>
                    <div class="input-group">
                        <input class="form-control" placeholder="请输入图形验证码" name="ForgetPasswordForm[captcha_code]" id="ForgetPasswordForm_captcha_code" type="text">            
                        <div class="input-group-addon vailcodeImg"><a href="javascript:void(0);"><img id="vailcode-forgetPwd" src="" onclick="this.src = '<?php echo $this->createUrl('site/getCaptcha'); ?>/' + Math.random()"></a></div>
                    </div>
                    <div></div>
                </div>
                <div class="contrller">
                    <?php echo $form->labelEx($model, 'verify_code', array('class' => '')); ?>
                    <div class="input-group">
                        <?php echo $form->numberField($model, 'verify_code', array('class' => 'form-control', 'maxlength' => 6)); ?>
                        <div id="btn-sendChangePwdSmsCode" class="btn input-group-addon  btn-verifycode">获取验证码</div>
                    </div>
                    <?php echo $form->error($model, 'verify_code'); ?>
                    <div></div>
                </div>
                <div class="contrller">
                    <?php echo $form->labelEx($model, 'password_new', array('class' => '')); ?>                                
                    <?php echo $form->passwordField($model, 'password_new', array('placeholder' => '请输入新密码', 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'password_new'); ?>
                    <div></div>
                </div>
                <div class="contrller">
                    <?php echo $form->labelEx($model, 'password_repeat', array('class' => '')); ?>                                
                    <?php echo $form->passwordField($model, 'password_repeat', array('placeholder' => '请重复新密码', 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'password_repeat'); ?>
                    <div></div>
                </div>
                <div class="contrller">
                    <div class="">
                        <button type="submit" class="btn btn-yes btn-lg btn-block">提交</button>			
                    </div>     
                </div>
                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>
<!-- success Modal -->
<div class="modal fade" id="ChangePedSuccessModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">确认</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#vailcode-forgetPwd").attr("src", "<?php echo $this->createUrl('site/getCaptcha'); ?>/" + Math.random());
        $("#btn-sendChangePwdSmsCode").click(function (e) {
            e.preventDefault();
            sendChangePwdSmsVerifyCode($(this));
        });
        $('#ChangePedSuccessModal .btn-primary').click(function () {
            $('#ChangePedSuccessModal').modal('hide');
            $('#loginModal').modal();
        });
    });
    function sendChangePwdSmsVerifyCode(domBtn) {
        var domForm = $("#changePwd-form");
        var domCaptchaCode = $("#ForgetPasswordForm_captcha_code");
        var domMobile = domForm.find("#ForgetPasswordForm_username");
        var mobile = domMobile.val();
        var captchaCode = domCaptchaCode.val();
        if (mobile.length === 0) {
            $('#ForgetPasswordForm_username-error').remove();
            $("#ForgetPasswordForm_username").parents('.contrller').append("<div id='ForgetPasswordForm_username-error' class='error'>请输入手机号码</div>");
            //domMobile.parent().addClass("error");
        } else if (!validatorMobile(mobile)) {
            $('#ForgetPasswordForm_username-error').remove();
            $("#ForgetPasswordForm_username").parents('.contrller').append("<div id='ForgetPasswordForm_username-error' class='error'>请输入正确的中国手机号码!</div>");
        } else if (captchaCode.length == 0) {
            $("div.error").remove();
            $("#ForgetPasswordForm_captcha_code").parents('.input-group').after('<div id="ForgetPasswordForm_captcha_code-error" class="error">请输入图形验证码</div>');
        } else if (ajaxValidateCaptchaCode(captchaCode) == false) {
            $("div.error").remove();
            $("#ForgetPasswordForm_captcha_code").parents('.input-group').after('<div id="ForgetPasswordForm_captcha_code-error" class="error">请输入正确的图形验证码</div>');
        } else {
            $("div.error").html("");//删除错误信息
            buttonTimerStart(domBtn, 60000);
            var actionUrl = domForm.find("input[name='smsverify[actionUrl]']").val();
            var actionType = domForm.find("input[name='smsverify[actionType]']").val();
            var formData = new FormData();
            formData.append("AuthSmsVerify[mobile]", mobile);
            formData.append("AuthSmsVerify[actionType]", actionType);
            formData.append("captcha_code", captchaCode);
            $.ajax({
                type: 'post',
                url: actionUrl,
                data: formData,
                dataType: "json",
                processData: false,
                contentType: false,
                'success': function (data) {
                    if (data.status === true || data.status === 'ok') {
                        //domForm[0].reset();
                    }
                    else {
                        console.log(data);
                        if (data.errors.captcha_code) {
                            clearInterval(timerId);
                            $("#UserVerifyCodeLoginForm_captcha_code").parents('.input-group').after('<div id="UserVerifyCodeLoginForm_captcha_code-error" class="error">请输入正确的图形验证码</div>');
                            domBtn.html("获取验证码");
                            domBtn.attr("disabled", false);
                        }
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
    function validatorMobile(mobile) {
        var mobileReg = /^(13[0-9]{9})|(18[0-9]{9})|(14[0-9]{9})|(17[0-9]{9})|(15[0-9]{9})$/;
        return mobileReg.test(mobile);
    }
</script>
<?php
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.form.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.validate.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . "/js/custom/register.js", CClientScript::POS_HEAD);
/**
 * $model UserRegisterForm.
 */
$urlGetSmsVerifyCode = $this->createAbsoluteUrl('auth/sendSmsVerifyCode');
$authActionType = AuthSmsVerify::ACTION_USER_REGISTER;
$ajaxRegisterUrl = $this->createUrl('user/ajaxRegister');
$bookinglist = $this->createUrl('booking/list');
$urlReturn = Yii::app()->homeUrl;
$urlTerms = $this->createUrl('site/page', array('view' => 'help', 'page' => 'terms'));
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
?>
<style>.input-group-addon.icon{padding:0px;background-color:#fff;width:9%;}.close{opacity:1;}#register-form .form-control{height:40px;}</style>
<form class="form-horizontal" role="form" id="register-form" action="<?php echo $ajaxRegisterUrl; ?>" data-url-account ="<?php echo $bookinglist; ?>" data-url-return="<?php echo $urlReturn; ?>" method="post" autocomplete="off">
    <div>
        <input type="hidden" value="<?php echo $urlGetSmsVerifyCode; ?>" name="smsverify[actionUrl]" id="smsverify_actionUrl">
        <input type="hidden" value="<?php echo $authActionType; ?>" name="smsverify[actionType]" id="smsverify_actionType">
        <input class="hide" type="text">
        <input class="hide" type="password">
    </div>
    <div class="form-group">
        <div class="col-sm-12 controls">
            <div class="input-group">
                <div class="input-group-addon icon"><img src="<?php echo $urlResImage; ?>user/user-icon.png"/></div>
                <input class="form-control" maxlength="11" placeholder="请输入有效的中国手机号码" name="UserRegisterForm[username]" id="UserRegisterForm_username" type="text">
            </div>       
            <div class="Message" id="UserRegisterForm_username_em_" style="display: none;"></div>    
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12 controls">
            <div class="input-group">
                <div class="input-group-addon icon"><img src="<?php echo $urlResImage; ?>user/number.png"/></div>
                <input class="form-control" maxlength="6" placeholder="请输入图形验证码" name="UserRegisterForm[captcha_code_register]" id="UserRegisterForm_captcha_code_register" type="text">            
                <div class="input-group-addon" style="width:131px;padding: 0;"><?php $this->widget('CCaptcha', array('showRefreshButton' => false, 'clickableImage' => true, 'imageOptions' => array('alt' => '点击换图', 'title' => '点击换图', 'style' => 'cursor:pointer;width:100%;height:100%;'))); ?></div>
            </div>
            <div class="Message" id="UserRegisterForm_captcha_code_register_em_" style="display:none"></div>    
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <div class="col-sm-12 controls">
            <div class="input-group">
                <div class="input-group-addon icon"><img src="<?php echo $urlResImage; ?>user/number.png"/></div>
                <input class="form-control" maxlength="6" placeholder="请输入验证码" name="UserRegisterForm[verify_code]" id="UserRegisterForm_verify_code" type="text">            
                <div id="btn-sendRegSmsCode" class="btn input-group-addon  btn-verifycode">获取验证码</div>
            </div>
            <div class="Message" id="UserRegisterForm_verify_code_em_" style="display:none"></div>    
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-sm-12 controls">
            <div class="input-group">
                <div class="input-group-addon icon"><img src="<?php echo $urlResImage; ?>user/password.png"/></div>
                <input class="form-control" autocomplete="off" maxlength="40" placeholder="4至20位英文或数字" name="UserRegisterForm[password]" id="UserRegisterForm_password" type="password">
            </div>
            <div class="Message" id="UserRegisterForm_password_em_" style="display:none"></div>    
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12 controls">
            <div class="input-group">
                <div class="input-group-addon icon"><img src="<?php echo $urlResImage; ?>user/password.png"/></div>
                <input class="form-control" autocomplete="off" placeholder="请再次输入密码" name="UserRegisterForm[password_repeat]" id="UserRegisterForm_password_repeat" type="password">
            </div>
            <div class="Message" id="UserRegisterForm_password_repeat_em_" style="display:none"></div>    
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12 controls">
            <div class="checkbox pull-left">
                <label class="radio-label">
                    <input id="ytUserRegisterForm_terms" type="hidden" value="0" name="UserRegisterForm[terms]"><input class="radio-checkbox" value="1" name="UserRegisterForm[terms]" id="UserRegisterForm_terms" checked="checked" type="checkbox">同意名医主刀<a class="nostyle" href="<?php echo $urlTerms; ?>" target="_blank">《在线服务条款》</a>
                </label>
            </div>
            <div class="clearfix"></div>
            <div class="Message" id="UserRegisterForm_terms_em_" style="display:none"></div>    
        </div>
    </div>
    <div class="form-group mt30 mb30">
        <div class="col-sm-12">
            <button id="btnRegisterSubmit" type="button" class="btn btn-yes btn-lg btn-block">注 册</button>			
        </div>

    </div>
</form>
<script type="text/javascript">
    $(document).ready(function () {
        $("#btn-sendRegSmsCode").click(function () {
            sendRegSmsVerifyCode($(this));
        });
    });

    function sendRegSmsVerifyCode(domBtn) {
        var domMobile = $("#UserRegisterForm_username");
        var domCaptchaCode = $("#UserRegisterForm_captcha_code_register");
        var mobile = domMobile.val();
        var captchaCode = domCaptchaCode.val();
        if (mobile.length === 0) {
            $("div.error").remove();
            $("#UserRegisterForm_username").parents('.input-group').after('<div id="UserRegisterForm_username-error" class="error">请输入手机号码</div>');
        } else if (domMobile.hasClass("error")) {
            // mobile input field as , so do nothing.
        } else if (captchaCode.length == 0) {
            $("div.error").remove();
            $("#UserRegisterForm_captcha_code_register").parents('.input-group').after('<div id="UserRegisterForm_captcha_code_register-error" class="error">请输入图形验证码</div>');
        } else if (ajaxValidateCaptchaCode() == false) {
            $("div.error").remove();
            $("#UserRegisterForm_captcha_code_register").parents('.input-group').after('<div id="UserRegisterForm_captcha_code_register-error" class="error">请输入正确的图形验证码</div>');
        } else {
            $("div.error").remove();
            buttonTimerStart(domBtn, 60000);
            $domForm = $("#register-form");
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
    function ajaxValidateCaptchaCode() {
        var validate = false;
        var domForm = $("#register-form");
        var formdata = domForm.serialize();
        $.ajax({
            type: 'post',
            data: formdata,
            async: false,
            url: '<?php echo $ajaxRegisterUrl; ?>',
            success: function (data) {
                console.log(data.errors);
                if (!data.errors['captcha_code_register']) {
                    validate = true;
                }
            },
            error: function () {
            }
        });
        return validate;
    }
</script>
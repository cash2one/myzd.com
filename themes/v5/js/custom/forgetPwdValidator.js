jQuery(function () {
    var $ = jQuery,
            domForm = $("#changePwd-form"), // form - html dom object.;
            btnSubmit = $("#btnSubmit"),
            returnUrl = domForm.attr("data-returnUrl");
    // 手机号码验证
    jQuery.validator.addMethod("isMobile", function (value, element) {
        var length = value.length;
        var mobile = /^(13[0-9]{9})|(18[0-9]{9})|(14[0-9]{9})|(17[0-9]{9})|(15[0-9]{9})$/;
        return this.optional(element) || (length == 11 && mobile.test(value));
    }, "请填写正确的手机号码");

    //注册页面表单验证模块
    var validator = domForm.validate({
        //focusInvalid: true,
        rules: {
            'ForgetPasswordForm[username]': {
                required: true,
                maxlength: 11,
                isMobile: true
            },
            'ForgetPasswordForm[captcha_code]': {
                required: true
            },
            'ForgetPasswordForm[verify_code]': {
                required: true,
                digits: true,
                maxlength: 6,
                minlength: 6
            },
            'ForgetPasswordForm[password_new]': {
                required: true,
                maxlength: 40,
                minlength: 4
            },
            'ForgetPasswordForm[password_repeat]': {
                required: "请输入登录密码",
                equalTo: "#ForgetPasswordForm_password_new",
                minlength: 4
            }
        },
        messages: {
            'ForgetPasswordForm[username]': {
                required: "请输入手机号码",
                maxlength: '请输入正确的中国手机号码!',
                isMobile: '请输入正确的中国手机号码!'
            },
            'ForgetPasswordForm[captcha_code]': {
                required: "请输入图形验证码"
            },
            'ForgetPasswordForm[verify_code]': {
                required: "请输入短信验证码",
                digits: "请输入正确的短信验证码",
                maxlength: "请输入正确的短信验证码",
                minlength: "请输入正确的短信验证码"
            },
            'ForgetPasswordForm[password_new]': {
                required: "请输入新密码",
                maxlength: "最长为40个字母或数字",
                minlength: "最短为4个字母或数字"
            },
            'ForgetPasswordForm[password_repeat]': {
                required: "请重复新密码",
                equalTo: "密码不一致",
                minlength: "最短为4个字母或数字"
            }
        },
        errorElement: "div",
        errorPlacement: function (error, element) {                             //错误信息位置设置方法  
            element.parent().find("div.error").remove();
            error.appendTo(element.parents('.contrller'));     //这里的element是录入数据的对象  
        },
        submitHandler: function () {
            //form插件的异步无刷新提交
            disabledBtn(btnSubmit);
            requestUrl = domForm.attr('action');
            domForm.ajaxSubmit({
                type: 'post',
                url: requestUrl,
                success: function (data) {
                    //success.
                    if (data.status == 'ok') {
                        //弹框提示
                        $("#ChangePedSuccessModal .modal-body").html("<h4>修改成功!</h4><p>点击确定登录!</p>");
                        $("#ChangePedSuccessModal .modal-footer").show();
                        $("#ChangePedSuccessModal").modal();
                        successbtnTimerStart($("ChangePedSuccessModal .modal-footer .btn"), 5000);
                    } else {
                        //error.
                        enableBtn(btnSubmit);
                        domForm.find("div.error").remove();
                        for (error in data.errors) {
                            errerMsg = data.errors[error][0];
                            inputKey = '#ForgetPasswordForm_' + error;
                            $(inputKey).focus();
                            $(inputKey).parents('.contrller').append("<div class='error'>" + errerMsg + "</div> ");
                        }
                    }
                },
                error: function () {
                },
                complete: function () {
                    enableBtn(btnSubmit);
                }
            });
        }
    });
    function successbtnTimerStart(domBtn, timer) {
        timer = timer / 1000 //convert to second.
        var interval = 1000;
        var timerTitle = '确 认';
        domBtn.attr("disabled", false);
        domBtn.html(timerTitle + "(" + timer + ")");

        timerId = setInterval(function () {
            timer--;
            if (timer > 0) {
                domBtn.html(timerTitle + "(" + timer + ")");
            } else {
                clearInterval(timerId);
                timerId = null;
                $('#ChangePedSuccessModal').modal('hide');
                $('#loginModal').modal();
            }
        }, interval);
    }
});


jQuery(function () {
    var $ = jQuery,
            domForm = $("#login-verifycode-form"), // form - html dom object.;
            btnSubmit = $("#btnLoginVerifycodeSubmit");
    btnSubmit.click(function () {
        var bool = validator.form();
        if (bool) {
            formAjaxSubmit();
        }
    });
    // 手机号码验证
    jQuery.validator.addMethod("isMobile", function (value, element) {
        var length = value.length;
        var mobile = /^(13[0-9]{9})|(18[0-9]{9})|(14[0-9]{9})|(17[0-9]{9})|(15[0-9]{9})$/;
        return this.optional(element) || (length == 11 && mobile.test(value));
    }, "请填写正确的手机号码");
    //登陆页面表单验证模块
    var validator = domForm.validate({
        //focusInvalid: true,
        rules: {
            'UserVerifyCodeLoginForm[username]': {
                required: true,
                maxlength: 11,
                isMobile: true
            },
            'UserVerifyCodeLoginForm[verify_code]': {
                required: true,
                digits: true,
                maxlength: 6,
                minlength: 6
            }
        },
        messages: {
            'UserVerifyCodeLoginForm[username]': {
                required: "请输入手机号",
                maxlength: '请输入正确的中国手机号码',
                isMobile: '请输入正确的中国手机号码'
            },
            'UserVerifyCodeLoginForm[verify_code]': {
                required: "请输入短信验证码",
                digits: "请输入正确的短信验证码",
                maxlength: "请输入正确的短信验证码",
                minlength: "请输入正确的短信验证码"
            }
        },
        errorElement: "div",
        errorPlacement: function (error, element) {                             //错误信息位置设置方法  
            element.parent().find("div.error").remove();
            error.appendTo(element.parents('.controls'));     //这里的element是录入数据的对象  
        }
    });
    function formAjaxSubmit() {
        //form插件的异步无刷新提交
        disabledBtn(btnSubmit);
        var formdata = domForm.serialize();
        var requestUrl = domForm.attr('data-action');
        var accountUrl = domForm.attr('data-url-account');
        var logoutUrl = domForm.attr('data-url-logout');
        $.ajax({
            type: 'post',
            url: requestUrl,
            data: formdata,
            success: function (data) {
                //success.
                if (data.status == 'ok') {
                    $('#loginModal').modal('hide');
                    $('.user').html('<span class="">您好！&nbsp;<a target="_blank" href="' + accountUrl + '">' + data.user.username + '</a>&nbsp;</span>|<a id="logout" href="' + logoutUrl + '">&nbsp;退出&nbsp;</a>|<a target="_blank" href="' + accountUrl + '">&nbsp;我的手术&nbsp;</a>');
                    setCookie('user', data.user.username, null);
                    openBookingModal($('.bookingBtn'));
                } else {
                    domForm.find("div.error").remove();
                    for (error in data.errors) {
                        errerMsg = data.errors[error];
                        inputKey = '#UserVerifyCodeLoginForm_' + error;
                        $(inputKey).focus();
                        $(inputKey).parents('.controls').append("<div class='error'>" + errerMsg + "</div> ");
                    }
                    //error.
                }
                enableBtn(btnSubmit);
            },
            error: function (XmlHttpRequest, textStatus, errorThrown) {
                enableBtn(btnSubmit);
                console.log(XmlHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            },
            complete: function () {
                //enableBtn(btnSubmit);
                //btnSubmit.show();
            }
        });
    }
});


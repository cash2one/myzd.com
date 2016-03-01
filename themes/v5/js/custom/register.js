jQuery(function () {
    var $ = jQuery,
            domForm = $("#register-form"), // form - html dom object.;
            btnSubmit = $("#btnRegisterSubmit");

    btnSubmit.click(function () {
        var bool = validator_register.form();
        console.log(bool);
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
    var validator_register = domForm.validate({
        //focusInvalid: true,
        rules: {
            'UserRegisterForm[username]': {
                required: true,
                maxlength: 11,
                isMobile: true
            },
            'UserRegisterForm[verify_code]': {
                required: true,
                digits: true,
                maxlength: 6,
                minlength: 6
            },
            'UserRegisterForm[password]': {
                required: true,
                maxlength: 40,
                minlength: 4
            },
            'UserRegisterForm[password_repeat]': {
                required: true,
                equalTo: "#UserRegisterForm_password",
                minlength: 4
            },
            'UserRegisterForm[terms]': {
                required: true
            }
        },
        messages: {
            'UserRegisterForm[username]': {
                required: "请输入手机号码",
                maxlength: '请输入正确的中国手机号码!',
                isMobile: '请输入正确的中国手机号码!'
            },
            'UserRegisterForm[verify_code]': {
                required: "请输入短信验证码",
                digits: "请输入正确的短信验证码",
                maxlength: "请输入正确的短信验证码",
                minlength: "请输入正确的短信验证码"
            },
            'UserRegisterForm[password]': {
                required: "请输入登录密码",
                maxlength: "最长为40个字母或数字",
                minlength: "最短为4个字母或数字"
            },
            'UserRegisterForm[password_repeat]': {
                required: "请输入登录密码",
                equalTo: "密码不一致",
                minlength: "最短为4个字母或数字"
            },
            'UserRegisterForm[terms]': {
                required: '请同意《在线服务条款》'
            }
        },
        errorElement: "div",
        errorPlacement: function (error, element) {                             //错误信息位置设置方法  
            element.parents('.controls').find("div.error").remove();
            error.appendTo(element.parents('.controls'));     //这里的element是录入数据的对象  
        }
    });
    function formAjaxSubmit() {
        //form插件的异步无刷新提交
        disabledBtn(btnSubmit);
        var formdata = domForm.serialize();
        var requestUrl = domForm.attr('action');
        var accountUrl = domForm.attr('data-url-account');
        var logoutUrl = domForm.attr('data-url-logout');
        var returnUrl = domForm.attr('data-url-return');
        $.ajax({
            type: 'post',
            url: requestUrl,
            data: formdata,
            success: function (data) {
                //success.
                if (data.status == 'ok') {
                    $('.user').html('<span class="user">您好！&nbsp;<a target="_blank" href="' + accountUrl + '">' + data.user.username + '</a>&nbsp;</span> | <a id="logout" href="' + logoutUrl + '">&nbsp;退出&nbsp;</a> | <a target="_blank" href="' + accountUrl + '">&nbsp;我的手术&nbsp;</a>');
                    setCookie('user', data.user.username, null);
                    location.href = returnUrl;
                } else {
                    domForm.find("div.error").remove();
                    for (error in data.errors) {
                        errerMsg = data.errors[error];
                        inputKey = '#UserRegisterForm_' + error;
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


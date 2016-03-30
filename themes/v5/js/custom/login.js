jQuery(function () {
    var $ = jQuery,
            domForm = $("#login-form"), // form - html dom object.;
            btnSubmit = $("#btnLoginSubmit");
    btnSubmit.click(function () {
        var bool = validator.form();
        if (bool) {
            formAjaxSubmit();
        }
    });
    //登陆页面表单验证模块
    var validator = domForm.validate({
        //focusInvalid: true,
        rules: {
            'UserLoginForm[username]': {
                required: true
            },
            'UserLoginForm[password]': {
                required: true,
                minlength: 4
            }
        },
        messages: {
            'UserLoginForm[username]': {
                required: "请输入手机号"
            },
            'UserLoginForm[password]': {
                required: "请输入登录密码",
                minlength: "登录密码最短为4个字符"
            }
        },
        errorElement: "div",
        errorPlacement: function (error, element) {                             //错误信息位置设置方法  
            element.parent().parent().find("div.error").remove();
            error.appendTo(element.parent().parent());     //这里的element是录入数据的对象  
        }
    });
    function formAjaxSubmit() {
        //form插件的异步无刷新提交
        disabledBtn(btnSubmit);
        var formdata = domForm.serialize();
        var requestUrl = domForm.attr('data-action');
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
                    if (returnUrl) {
                        location.href = returnUrl;
                    } else {
                        $('#loginModal').modal('hide');
                        $('.user').html('<span class="">您好！&nbsp;<a target="_blank" href="' + accountUrl + '">' + data.user.username + '</a>&nbsp;</span> | <a id="logout" href="' + logoutUrl + '">&nbsp;退出&nbsp;</a> | <a target="_blank" href="' + accountUrl + '">&nbsp;我的手术&nbsp;</a>');
                        setCookie('user', data.user.username, null);
//                      openBookingModal($('.bookingBtn'));
                    }
                } else {
                    domForm.find("div.error").remove();
                    for (error in data.errors) {
                        errerMsg = data.errors[error];
                        inputKey = '#UserLoginForm_' + error;
                        $(inputKey).focus();
                        $(inputKey).parent().parent().append("<div class='error'>" + errerMsg + "</div> ");
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


jQuery(function () {
    var $ = jQuery,
            domForm = $("#feedback-form"), // form - html dom object.;
            btnSubmit = $("#feedbackFormSubmit");

    btnSubmit.click(function () {
        var domMobile = domForm.find("#feedback-mobile");
        var mobile = domMobile.val();
        if (mobile.length != 0 && !validatorMobile(mobile)) {
            $('#feedback-mobile-error').remove();
            $("#feedback-mobile").parents('.form-group').append("<div id='feedback-mobile-error' class='error text-left ml10'>请输入正确的中国手机号码!</div>");
        } else {
            var bool = validator_feedback.form();
            if (bool) {
                formAjaxSubmit();
            }
        }

    });
    //表单验证模块
    var validator_feedback = domForm.validate({
        //focusInvalid: true,
        rules: {
            'feedback[content]': {
                required: true,
                maxlength: 200
            }
        },
        messages: {
            'feedback[content]': {
                required: "请输入您的反馈意见",
                maxlength: '反馈意见最多200个字!'
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
        var requestUrl = domForm.attr('action');
        $.ajax({
            type: 'post',
            url: requestUrl,
            data: formdata,
            success: function (data) {
                if (data.status == 'ok') {
                    $('#feedback-open').hide();
                    $('#feedback-success').show();
                    $('#feedback-content').val('');
                    $('#feedback-mobile').val('');
                    setInterval("$('#feedback-success').hide();", 3000);
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

    function validatorMobile(mobile) {
        var mobileReg = /^(13[0-9]{9})|(18[0-9]{9})|(14[0-9]{9})|(17[0-9]{9})|(15[0-9]{9})$/;
        return mobileReg.test(mobile);
    }
});


jQuery(function () {
    //图片上传板块
    var $ = jQuery, // just in case. Make sure it's not an other libaray.
            domForm = $("#quickbook-form"),
            btnSubmit = $("#btnQuickBookSubmit");
//提交按钮点击时间

    btnSubmit.click(function () {
        //触发表单提交事件
        domForm.submit();
    });
// 手机号码验证
    $.validator.addMethod("isMobile", function (value, element) {
        var length = value.length;
        var mobile = /^(13[0-9]{9})|(18[0-9]{9})|(14[0-9]{9})|(17[0-9]{9})|(15[0-9]{9})$/;
        return this.optional(element) || (length == 11 && mobile.test(value));
    }, "请填写正确的手机号码");

//表单验证板块
    var validator = domForm.validate({
        rules: {
            'booking[doctor_name]': {
                //  required: true,
                maxlength: 50
            },
            'booking[hospital_name]': {
                //  required: true,
                maxlength: 50
            },
            'booking[hp_dept_name]': {
                //  required: true,
                maxlength: 50
            },
            'booking[contact_name]': {
                required: true,
                maxlength: 50
            },
            'booking[mobile]': {
                required: true,
                isMobile: true
            },
            'booking[verify_code]': {
                required: true,
                digits: true,
                maxlength: 6,
                minlength: 6
            },
            'booking[disease_name]': {
                required: true,
                maxlength: 50
            },
            'booking[disease_detail]': {
                required: true,
                minlength: 10,
                maxlength: 1000
            },
            'booking[terms]': {
                required: true
            }
        },
        messages: {
            'booking[doctor_name]': {
                required: '请填写医生姓名',
                maxlength: '姓名太长'
            },
            'booking[hospital_name]': {
                required: '请填写医院名称',
                maxlength: '医院名称太长'
            },
            'booking[hp_dept_name]': {
                required: '请填写科室名称',
                maxlength: '科室名称太长'
            },
            'booking[contact_name]': {
                required: '请填写患者姓名',
                maxlength: '患者姓名太长'
            },
            'booking[mobile]': {
                required: "请输入手机号码",
                isMobile: '请输入正确的中国手机号码!'
            },
            'booking[verify_code]': {
                required: "请输入短信验证码",
                digits: "请输入正确的短信验证码",
                maxlength: "请输入正确的短信验证码",
                minlength: "请输入正确的短信验证码"
            },
            'booking[disease_name]': {
                required: '请填写疾病诊断',
                maxlength: '请将字数控制在50以内'
            },
            'booking[disease_detail]': {
                required: '请填写病情',
                minlength: '请至少填写10个字',
                maxlength: '请将字数控制在1000以内'
            },
            'booking[terms]': {
                required: '请同意《在线服务条款》'
            }
        },
//        errorContainer: "div.error",
//        errorLabelContainer: $("#booking-form div .error"),
//        wrapper: "div",
        errorElement: "div",
        errorPlacement: function (error, element) {                             //错误信息位置设置方法  
            element.parents(".controls").find("div.error").remove();
            error.appendTo(element.parents(".controls"));     //这里的element是录入数据的对象  
            //error.appendTo(element); 
        },
        submitHandler: function () {
            //form插件的异步无刷新提交
            disabledBtn(btnSubmit);
            actionUrl = domForm.attr('action');
            returnUrl = domForm.attr("data-url-return");
            //alert("asdf");
            //    btnSubmit.button("disable");
            domForm.ajaxSubmit({
                type: 'post',
                url: actionUrl,
                success: function (data) {
                    if (data.status == 'ok') {
                        //弹框提示
                        $('#qucikbookingModal').modal('hide');
                        $("#successModal .modal-body").html("<h4>预约成功!</h4><p>我们的工作人员会尽快联系您!</p>");
                        $("#successModal .modal-footer").show();
                        $("#successModal").modal();
                        confirmbtnTimerStart($("#successModal .modal-footer .btn"), 5000);
                    } else {
                        // 错误, data.
                        // clear previous error msg
                        domForm.find("div.error").remove();
                        //append errorMsg
                        isfocus = true;
                        for (error in data.errors) {
                            errerMsg = data.errors[error];
                            inputKey = '#booking_' + error;
                            //    $(inputKey).focus();
                            $(inputKey).parent().after("<div class='error'>" + errerMsg + "</div> ");
                            $(inputKey).parent().addClass("error");
                        }

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
                    $("#btnSubmit").attr("disabled", false);
                    //    btnSubmit.button("enable");
                }
            });
        }
    });
    //modal关闭时初始化表单
    $('#bookingModal').on('hide.bs.modal', function (event) {
        $("#bookingModal form div.error").remove();
        $("#bookingModal form input[type=reset]").trigger("click");
    });
});
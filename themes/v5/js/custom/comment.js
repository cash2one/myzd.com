jQuery(function () {
    var $ = jQuery,
            domForm = $("#comment-form"), // form - html dom object.;
            btnSubmit = $("#btnCommentSubmit");

    btnSubmit.click(function () {
        var bool = validator_comment.form();
        if (bool) {
            formAjaxSubmit();
        }
    });
    //表单验证模块
    var validator_comment = domForm.validate({
        //focusInvalid: true,
        rules: {
            'CommentForm[comment_text]': {
                required: true,
                maxlength: 1000
            }
        },
        messages: {
            'CommentForm[comment_text]': {
                required: "请输入其他分享与评价",
                maxlength: '其他分享与评价最多1000个字!'
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
        var returnUrl = domForm.attr('data-url-return');
        $.ajax({
            type: 'post',
            url: requestUrl,
            data: formdata,
            success: function (data) {
                //success.
                if (data.status == 'ok') {
                    $('#commentModal').modal();
                } else {
                    domForm.find("div.error").remove();
                    for (error in data.errors) {
                        errerMsg = data.errors[error];
                        inputKey = '#CommentForm_' + error;
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



<form id="sms-form" action="<?php echo $this->createAbsoluteUrl('api/create', array('model' => 'smsverifycode')); ?>">
    <div><label>手机</label><input type="text" name="mobile" value="18217531537" maxlength="11"></div>
    <div><label>验证码</label><input type="text" name="verify_code" value="123456"></div>
    <div><a id="btn-submit" type="button" class="btn btn-primary">提交</a></div>
</form>

<script>
    $(document).ready(function () {
        $("#btn-submit").click(function (e) {
            e.preventDefault();
            var domForm = $("#sms-form");
            var mobile = domForm.find("input[name='mobile']").val();
            var requestUrl = domForm.attr('action');
            var postData = {smsVerifyCode: {mobile: mobile, actionType: "1"}};
            console.log(postData);
            //return false;
            $.ajax({
                type: 'post',
                url: requestUrl,
                //data: $form.serialize(),
                data: postData,
                dataType: "json",
                //processData: false,
                //contentType: false,
                // jsonp: "$callback",
                success: function (data) {
                    console.log("success");
                    console.log(data);
                },
                error: function (data) {
                    console.log("error");
                    console.log(data);
                },
                complete: function (data) {

                }
            });
        });

    });

</script>

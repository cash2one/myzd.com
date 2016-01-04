
<form id="register-form" action="<?php echo $this->createAbsoluteUrl('api/create', array('model' => 'userregister')); ?>">
    <div><label>手机</label><input type="text" name="username" value="11111111111" maxlength="11"></div>
    <div><label>密码</label><input type="text" name="password" value="1234"></div>
    <div><label>验证码</label><input type="text" name="verify_code" value="123456"></div>
    <div><a id="btn-submit" type="button" class="btn btn-primary">提交</a></div>
</form>

<script>
    $(document).ready(function () {
        $("#btn-submit").click(function (e) {
            e.preventDefault();
            var domForm = $("#register-form");
            var username = domForm.find("input[name='username']").val();
            
            var password = domForm.find("input[name='password']").val();
            var verifyCode = domForm.find("input[name='verify_code']").val();
            var requestUrl = domForm.attr('action');
            //var formData = new FormData();
            //  formData.append('username', $username);
            //  formData.append('password', $password);
            var postData = {userRegister: {username: username, password: password, verifyCode: verifyCode, autoLogin:"1"}};
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

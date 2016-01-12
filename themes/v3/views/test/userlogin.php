<form id="login-form" action="<?php echo $this->createAbsoluteUrl('api/create', array('model' => 'userlogin')); ?>">
    <input type="text"name="username" maxlength="11" value="11111111111">
    <input type="text" name="password" value="1234">

    <a id="btn-login" class="btn btn-primary" href="">提交</a>
</form>
<script>
    $(document).ready(function () {
        $("#btn-login").click(function (e) {
            e.preventDefault();
            var domForm = $("#login-form");
            var username = domForm.find("input[name='username']").val();
            var password = domForm.find("input[name='password']").val();
            var requestUrl = domForm.attr('action');
            //var formData = new FormData();
            //  formData.append('username', $username);
            //  formData.append('password', $password);
            var postData = {userlogin:{username: username, password: password}};
            //var filemetas = new Array({25:'25', value:"{fid:25, dateTaken:2015-04-02}"}, {key:'26', value:"{fid:25, desc:'some desc.'}"});
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
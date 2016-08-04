<?php
//Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/jquery.form.js', CClientScript::POS_END);
//Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/jquery.validate.min.js', CClientScript::POS_END);
//Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/quickbook.min.js', CClientScript::POS_END);

$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlTerms = $this->createUrl('site/page', array('view' => 'help', 'page' => 'terms'));
$urlGetSmsVerifyCode = $this->createAbsoluteUrl('/auth/sendSmsVerifyCode');
$authActionType = AuthSmsVerify::ACTION_BOOKING;
$urlSubmitForm = $this->createUrl("booking/ajaxQuickbook");
$urlReturn = '';
$bookingLog = $this->createUrl("booking/ajaxBookingLog");
?>
<div class="modal fade" id="qucikbookingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="mybooking">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                <div class="mybooking-text text-center color-white"><img src="http://static.mingyizhudao.com/146010432282534"> 我要预约</div>
            </div>
            <div class="booking-form pt20">
                <div class="form-wrapper">
                    <form enctype="multipart/form-data" data-url-return="<?php echo $urlReturn; ?>" id="quickbook-form" action="<?php echo $urlSubmitForm; ?>" method="post">
                        <input type="hidden" value="<?php echo $urlGetSmsVerifyCode; ?>" name="smsverify[actionUrl]" id="smsverify_actionUrl">
                        <input type="hidden" value="<?php echo $authActionType; ?>" name="smsverify[actionType]" id="smsverify_actionType">
                        <div class="form-group">
                            <label for="" class="padright0 col-sm-offset-1 col-sm-3 col-md-3 control-label">医院:</label>
                            <div class="col-sm-7 controls">
                                <input name="booking[hospital_name]" placeholder="可不填" class="form-control" maxlength="50" id="booking_hospital_name" type="text">                                </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="padright0 col-sm-offset-1 col-sm-3 col-md-3 control-label">科室:</label>
                            <div class="col-sm-7 controls">
                                <input name="booking[hp_dept_name]" placeholder="可不填" class="form-control" maxlength="50" id="booking_hp_dept_name" type="text">                                </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="padright0 col-sm-offset-1 col-sm-3 col-md-3 control-label">医生:</label>
                            <div class="col-sm-7 controls">
                                <input name="booking[doctor_name]" placeholder="可不填" class="form-control" maxlength="50" id="booking_doctor_name" type="text">                                </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="padright0 col-sm-offset-1 col-sm-3 col-md-3 control-label">患者姓名:</label>
                            <div class="col-sm-7 controls">
                                <input name="booking[contact_name]" placeholder="请填写患者的真实姓名" class="form-control" maxlength="50" id="booking_contact_name" type="text">                                </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="padright0 col-sm-offset-1 col-sm-3 col-md-3 control-label">手机:</label>
                            <div class="col-sm-7 controls">
                                <input name="booking[mobile]" placeholder="请输入手机号" class="form-control" maxlength="11" id="booking_mobile" type="text">                     
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="padright0 col-sm-offset-1 col-sm-3 col-md-3 control-label">图形验证码:</label>
                            <div class="col-sm-7 controls">
                                <div class="input-group" style="width:100%;">
                                    <input name="booking[captcha_code]" placeholder="请输入图形验证码" class="form-control" maxlength="6" id="booking_captcha_code" type="text">                                        
                                    <div class="input-group-addon vailcodeImg"><a href="javascript:void(0);"><img class="vailcode" src="<?php echo $this->createUrl('site/getCaptcha'); ?>" onclick="this.src = '<?php echo $this->createUrl('site/getCaptcha'); ?>/' + Math.random()"></a></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="padright0 col-sm-offset-1 col-sm-3 col-md-3 control-label">验证码:</label>
                            <div class="col-sm-7 controls">
                                <div class="input-group">
                                    <input name="booking[verify_code]" placeholder="请输入验证码" class="form-control" maxlength="6" id="booking_verify_code" type="text">                                        
                                    <div id="btn-sendBookingSmsCode" class="btn input-group-addon  btn-verifycode">获取验证码</div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="padright0 col-sm-offset-1 col-sm-3 col-md-3 control-label">疾病诊断:</label>
                            <div class="col-sm-7 controls">            
                                <input name="booking[disease_name]" placeholder="请填写确诊疾病" class="form-control" maxlength="50" id="booking_disease_name" type="text">                
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="padright0 col-sm-offset-1 col-sm-3 control-label">病情:</label>
                            <div class="col-sm-7 controls">   
                                <textarea name="booking[disease_detail]" placeholder="请详细的描述患者的病情" class="form-control" maxlength="1000" rows="3" id="booking_disease_detail"></textarea>                              
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group mt30">
                            <div class="col-sm-offset-3 col-sm-offset-3 col-sm-7 controls">
                                <div class="checkbox">
                                    <label>
                                        <input name="booking[terms]" type="checkbox" checked="checked">我已同意《<a href="<?php echo $urlTerms; ?>" target="_blank">名医主刀在线用户协议</a>》
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group mt20">
                            <div class="col-sm-6 col-sm-offset-3">
                                <button id="btnQuickBookSubmit" type="button" class="btn btn-lg btn-yes btn-block" name="">提&nbsp;交</button>       
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"  onclick="location.reload();">确认</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#qucikbookingModal').on('show.bs.modal', function (event) {
            var actionUrl = '<?php echo $bookingLog; ?>';
            $.ajax({
                type: 'get',
                url: actionUrl,
                'success': function (data) {

                },
                'error': function (data) {
                    console.log(data);
                },
                'complete': function () {
                }
            });
            $('#loginModal').modal('hide');
        });
        $("#btn-sendBookingSmsCode").click(function (e) {
            e.preventDefault();
            sendBookingSmsVerifyCode($(this));
        });
    });

    function sendBookingSmsVerifyCode(domBtn) {
        var domMobile = $("#booking_mobile");
        var domCaptchaCode = $("#booking_captcha_code");
        var mobile = domMobile.val();
        var captchaCode = domCaptchaCode.val();
        if (mobile.length === 0) {
            $("#booking_mobile-error").remove();
            $("#booking_mobile").after('<div id="booking_mobile-error" class="error">请输入手机号码</div>');
        } else if (domMobile.hasClass("error")) {
            // mobile input field as error, so do nothing.
        } else if (captchaCode.length == 0) {
            $("div.error").remove();
            $("#booking_captcha_code").parents('.input-group').after('<div id="booking_captcha_code-error" class="error">请输入图形验证码</div>');
        } else if (ajaxValidateCaptchaCode(captchaCode) == false) {
            $("div.error").remove();
            $("#booking_captcha_code").parents('.input-group').after('<div id="booking_captcha_code-error" class="error">请输入正确的图形验证码</div>');
        } else {
            $("div.error").remove();
            buttonTimerStart(domBtn, 60000);
            $domForm = $("#quickbook-form");
            var actionUrl = $domForm.find("input[name='smsverify[actionUrl]']").val();
            var actionType = $domForm.find("input[name='smsverify[actionType]']").val();
            var formData = new FormData();
            formData.append("AuthSmsVerify[mobile]", mobile);
            formData.append("AuthSmsVerify[actionType]", actionType);
            formData.append("captcha_code", captchaCode);
            $.ajax({
                type: 'post',
                url: actionUrl,
                data: formData,
                dataType: "json",
                processData: false,
                contentType: false,
                'success': function (data) {
                    if (data.status === true) {
                        //domForm[0].reset();
                    }
                    else {
                        console.log(data);
                        if (data.errors.captcha_code) {
                            clearInterval(timerId);
                            $("#booking_captcha_code").parents('.input-group').after('<div id="booking_captcha_code-error" class="error">请输入正确的图形验证码</div>');
                            domBtn.html("获取验证码");
                            domBtn.attr("disabled", false);
                        }
                    }
                },
                'error': function (data) {
                    console.log(data);
                },
                'complete': function () {
                }
            });
        }
    }
</script>
<style type="text/css">    
    #btn-addfiles_wrap{position:relative;}
    #btn-addfiles_wrap input[type="file"]{position:absolute;top:0;right:0;width:200px;line-height:36px;opacity:0;}
    #btn-addfiles_wrap>.btn:hover, #btn-addfiles:hover{cursor:pointer;}
</style>
<?php
/**
 * $model BookingForm
 */
$urlGetSmsVerifyCode = $this->createAbsoluteUrl('auth/sendSmsVerifyCode');
$authActionType = AuthSmsVerify::ACTION_BOOKING;

$form = $this->beginWidget('CActiveForm', array(
    'id' => 'booking-form',
    'action' => $this->createUrl('booking/quickbook'),
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'htmlOptions' => array('class' => "form-horizontal", 'role' => 'form', 'autocomplete' => 'off', "enctype" => "multipart/form-data"),
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
        'validateOnType' => true,
        'validateOnDelay' => 500,
        'errorCssClass' => 'error',
    ),
    'enableAjaxValidation' => false,
        ));
echo CHtml::hiddenField("smsverify[actionUrl]", $urlGetSmsVerifyCode);
echo CHtml::hiddenField("smsverify[actionType]", $authActionType);
?>

<!-- 预约成功消息 -->
<?php if ($this->hasFlashMessage("booking.success")): ?>
    <div class="row">
        <div class="col-sm-12">            
            <div class="alert alert-info alert-dismissable" style="padding:10px;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <div><?php echo $this->getFlashMessage("booking.success"); ?></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
<?php endif; ?>

<div class="form-group">
    <label for="" class="padright0 col-sm-3 col-md-3 control-label">称呼:</label>
    <div class="col-sm-8 controls">
        <?php
        echo $form->textfield($model, 'contact_name', array('class' => 'form-control', 'maxlength' => 45));
        echo $form->error($model, 'contact_name');
        ?>
    </div>
    <div class="clearfix"></div>
</div>
<div class="form-group">
    <label for="" class="padright0 col-sm-3 col-md-3 control-label">手机:</label>
    <div class="col-sm-8 controls">
        <?php
        echo $form->textfield($model, 'mobile', array('class' => 'form-control', 'maxlength' => 11));
        echo $form->error($model, 'mobile');
        ?>                     
    </div>
    <div class="clearfix"></div>
</div>
<div class="form-group">
    <label for="" class="padright0 col-sm-3 col-md-3 control-label">验证码:</label>
    <div class="col-sm-8 controls">
        <div class="input-group">
            <?php echo $form->textfield($model, 'verify_code', array('class' => 'form-control', 'maxlength' => 6)); ?>
            <div id="btn-sendSmsCode" class="btn input-group-addon  btn-verifycode">获取验证码</div>
        </div>
        <?php echo $form->error($model, 'verify_code'); ?>
    </div>
    <div class="clearfix"></div>
</div>

<?php
$fid = $model->getFacultyId();
$bookingTarget = $model->getBookingTarget();
if (isset($fid) && isset($bookingTarget) && empty($bookingTarget) === false):
    ?>
    <div class="form-group">
        <label for="" class="padright0 col-sm-3 col-md-3 control-label">预约:</label>
        <div class="col-sm-8 controls">
            <?php echo $form->hiddenField($model, "faculty_id");?>
            <?php echo $form->hiddenField($model, "booking_target");?>
            <div class="form-control-static"><?php echo $bookingTarget; ?></div>            
        </div>
        <div class="clearfix"></div>
    </div>
<?php else: ?>
    <div class="form-group">
        <label class="padright0 col-sm-3 col-md-3 control-label" for="">科室:</label>   
        <div class="col-sm-8 controls">
            <div class="styled-select">
                <?php
                $options = $model->loadOptionsFaculty();
                echo $form->dropdownList($model, 'faculty_id', $options, array('class' => 'form-control', 'prompt' => '-- 选择科室 --'));
                echo $form->error($model, 'faculty_id');
                ?>             
            </div>        
        </div>
        <div class="clearfix"></div>
    </div>
<?php endif; ?>

<div class="form-group">
    <label for="" class="padright0 col-sm-3 control-label">病情:</label>
    <div class="col-sm-8 controls">   
        <?php
        echo $form->textarea($model, 'patient_condition', array('class' => 'form-control', 'maxlength' => 200, 'rows' => 3, 'placeholder' => '请填写病情描述'));
        echo $form->error($model, 'patient_condition');
        ?>                              
    </div>
</div>
<div class="form-group">    
    <div class="text-right">
        <?php
        $this->widget('CMultiFileUpload', array(
            'model' => $model,
            'attribute' => 'files',
            'id'=>"btn-addfiles",
            'name' => 'BookingFiles',
            'accept' => 'jpg|gif|png',
            'options' => array(
            //'onFileSelect' => 'function(e, v, m){ alert("onFileSelect - "+v) }',
            //'afterFileSelect'=>'function(e, v, m){ alert("afterFileSelect - "+v) }',
            //'onFileAppend'=>'function(e, v, m){ alert("onFileAppend - "+v) }',
            // 'afterFileAppend'=>'function(e, v, m){ alert("afterFileAppend - "+v) }',
            // 'onFileRemove'=>'function(e, v, m){ alert("onFileRemove - "+v) }',
            // 'afterFileRemove'=>'function(e, v, m){ alert("afterFileRemove - "+v) }',
            ),
            'denied' => '请上传jpg、png、gif格式',
            'duplicate' => '该文件已被选择',
            'max' => 3, // max 10 files
            //'htmlOptions' => array(),
            'value' => '上传病历',
            'selected' => '已选文件',
                //'file'=>'文件'
        ));
        ?>

    </div>
</div>

<div class="form-group mt30">
    <div class="col-sm-6 col-sm-offset-3">
        <button type="submit" class="btn btn-lg btn-yes btn-block" name="">提&nbsp;交</button>       
    </div>
    <div class="clearfix"></div>
</div>

<?php
$this->endWidget();
?>

<script type="text/javascript">
    $(document).ready(function () {
        setTimeout(function () {
            initForm();
        }, 200);

        $("#btn-sendSmsCode").click(function () {
            sendSmsVerifyCode($(this));
        });
    });

    function initForm() {
        var htmlstr = "<a class='btn btn-primary btn-wide'><i class='fa fa-plus'></i>&nbsp;上传病历</a>";
        $("#btn-addfiles_wrap").css("position", "relative").prepend(htmlstr).find("input[type='file']").attr("capture", "camera");
        //console.log($("#btn-addfiles_wrap").html());
    }

    function sendSmsVerifyCode(domBtn) {
        var domMobile = $("#BookingForm_mobile");
        var mobile = domMobile.val();
        if (mobile.length === 0) {
            $("#BookingForm_mobile_em_").text("请输入手机号码").show();
            domMobile.parent().addClass("error");
        } else if (domMobile.parent().hasClass("error")) {
            // mobile input field as error, so do nothing.
        } else {
            buttonTimerStart(domBtn, 60000);
            $domForm = $("#booking-form");
            var actionUrl = $domForm.find("input[name='smsverify[actionUrl]']").val();
            var actionType = $domForm.find("input[name='smsverify[actionType]']").val();
            var formData = new FormData();
            formData.append("AuthSmsVerify[mobile]", mobile);
            formData.append("AuthSmsVerify[actionType]", actionType);

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

    function buttonTimerStart(domBtn, timer) {
        timer = timer / 1000 //convert to second.
        var interval = 1000;
        var timerTitle = '秒后重发';
        domBtn.attr("disabled", true);
        domBtn.html(timer + timerTitle);

        timerId = setInterval(function () {
            timer--;
            if (timer > 0) {
                domBtn.html(timer + timerTitle);
            } else {
                clearInterval(timerId);
                timerId = null;
                domBtn.html("重新发送");
                domBtn.attr("disabled", false);
            }
        }, interval);
    }
</script>
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
    'action' => $this->createUrl('api/booking'),
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'htmlOptions' => array('class' => "form-horizontal", 'role' => 'form', 'autocomplete' => 'off', "enctype" => "multipart/form-data"),
    'enableClientValidation' => false,
    'clientOptions' => array(
        'validateOnSubmit' => true,
        'validateOnType' => true,
        'validateOnDelay' => 500,
        'errorCssClass' => 'error',
    ),
    'enableAjaxValidation' => true,
        ));
echo CHtml::hiddenField("smsverify[actionUrl]", $urlGetSmsVerifyCode);
echo CHtml::hiddenField("smsverify[actionType]", $authActionType);

?>

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
        echo $form->textField($model, 'mobile', array('class' => 'form-control', 'maxlength' => 11));
        echo $form->error($model, 'mobile');
        ?>                     
    </div>
    <div class="clearfix"></div>
</div>
<div class="form-group">
    <label for="" class="padright0 col-sm-3 col-md-3 control-label">验证码:</label>
    <div class="col-sm-8 controls">
        <div class="input-group">
            <?php echo $form->textField($model, 'verify_code', array('class' => 'form-control', 'maxlength' => 6)); ?>
            <div id="btn-sendSmsCode" class="btn input-group-addon  btn-verifycode">获取验证码</div>
        </div>
        <?php echo $form->error($model, 'verify_code'); ?>
    </div>
    <div class="clearfix"></div>
</div>

<?php
$bookingType = $model->getBookingType();
switch ($bookingType) {
    case 1: //科室
        ?>
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
        <?php
        break;
    case 2: // 医生
        ?>
        <div class="form-group">
            <label for="" class="padright0 col-sm-3 col-md-3 control-label">医生:</label>
            <div class="col-sm-8 controls">
                <?php echo $form->hiddenField($model, "doctor_id"); ?>                
                <div class="form-control-static"><?php echo $model->getDoctorName(); ?></div>            
            </div>
            <div class="clearfix"></div>
        </div>
        <?php
        break;
    case 3: // 专家团队
        ?>
        <div class="form-group">
            <label for="" class="padright0 col-sm-3 col-md-3 control-label">专家团队:</label>
            <div class="col-sm-8 controls">
                <?php echo $form->hiddenField($model, "expteam_id"); ?>                
                <div class="form-control-static"><?php echo $model->getExpertTeamName(); ?></div>            
            </div>
            <div class="clearfix"></div>
        </div>
        <?php
        break;
    case 4: // 医院
        ?>
        <div class="form-group">
            <label for="" class="padright0 col-sm-3 col-md-3 control-label">医院:</label>
            <div class="col-sm-8 controls">
                <?php echo $form->hiddenField($model, "hospital_id"); ?>                
                <div class="form-control-static"><?php echo $model->getHospitalName(); ?></div>            
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <label class="padright0 col-sm-3 col-md-3 control-label" for="">科室:</label>   
            <div class="col-sm-8 controls">
                <div class="styled-select">
                    <?php
                    $options = $model->loadOptionsHospitalDept();

                    echo $form->dropdownList($model, 'hospital_dept', $options, array('class' => 'form-control', 'prompt' => '-- 选择科室 --'));
                    echo $form->error($model, 'hospital_dept');
                    ?>             
                </div>        
            </div>
            <div class="clearfix"></div>
        </div>
        <?php
        break;
    default:
        break;
}
?>

<div class="form-group">
    <label for="" class="padright0 col-sm-3 control-label">病情:</label>
    <div class="col-sm-8 controls">   
        <?php
        echo $form->textarea($model, 'patient_condition', array('class' => 'form-control', 'maxlength' => 200, 'rows' => 3, 'placeholder' => '请填写病情描述'));
        echo $form->error($model, 'patient_condition');
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
        /*
         setTimeout(function () {
         initForm();
         }, 200);
         */
        /*
         $("#btn-sendSmsCode").click(function () {
         sendSmsVerifyCode($(this));
         });
         */
    });


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
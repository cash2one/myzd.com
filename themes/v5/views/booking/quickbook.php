<?php
/*
 * $model BookQuickForm
 */
//$this->show_footer = false;
$urlGetSmsVerifyCode = $this->createAbsoluteUrl('/auth/sendSmsVerifyCode');
$authActionType = AuthSmsVerify::ACTION_USER_REGISTER;
$urlSubmitForm = $this->createUrl("booking/ajaxCreate");
$urlUploadFile = $this->createUrl("booking/ajaxUploadFile");
$urlReturn = '#success';

$urlAboutus = $this->createUrl('site/page', array('view' => 'aboutus'));
$urlBigevents = $this->createUrl('site/page', array('view' => 'bigevents'));
$urlJoinus = $this->createUrl('site/page', array('view' => 'joinus'));
$urlNews = $this->createUrl('site/page', array('view' => 'news'));
$urlTerms = $this->createUrl('site/page', array('view' => 'terms'));
$urlContactus = $this->createUrl('site/contactus');
$urlEnquiry = $this->createUrl('site/enquiry');
$this->pageTitle = '我要预约_名医主刀';
?>
<style>
    #site-header{border-bottom:1px solid #ddd;}
    .page-content .heading-u{margin-bottom:0;}
    .page-content .panel{border-top:none;border-radius:0;}
    .page-content .panel-body{padding-top:30px;}   
</style>
<div class="container">
    <div class="">
        <div id="sidemenu" class="col-sm-2">
            <div class="row hidden-xs">
                <ul class="nav nav-pills nav-stacked">
                    <li class=""><a class="" href="<?php echo $urlAboutus; ?>">简介</a></li>
                    <li><a class="" href="<?php echo $urlBigevents; ?>">大事记</a></li>
                    <li><a class="" href="<?php echo $urlJoinus; ?>">加入我们</a></li>
                    <li><a class="" href="<?php echo $urlNews; ?>">新闻中心</a></li>
                    <li><a class="" href="<?php echo $urlTerms; ?>">免责声明</a></li>
                    <li class="active"><a class="" href="<?php echo $urlEnquiry; ?>">我要预约</a></li>    
                </ul>
            </div>
            <div class="row visible-xs">
                <div class="btn-group block">
                    <button type="button" class="btn btn-default btn-success btn-lg btn-block dropdown-toggle" data-toggle="dropdown">
                        简介 <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-mobile" role="menu" style="width:100%;">
                        <li><a class="" href="<?php echo $urlAboutus; ?>">简介</a></li>
                        <li><a class="" href="<?php echo $urlBigevents; ?>">大事记</a></li>
                        <li><a class="" href="<?php echo $urlJoinus; ?>">加入我们</a></li>
                        <li><a class="" href="<?php echo $urlNews; ?>">新闻中心</a></li>
                        <li><a class="" href="<?php echo $urlTerms; ?>">免责声明</a></li>
                        <li><a class="" href="<?php echo $urlContactus; ?>">联系我们</a></li>
                        <li class="active"><a class="" href="<?php echo $urlEnquiry; ?>">快速咨询</a></li>       
                    </ul>
                </div>
            </div>        </div>
        <div class="col-sm-10 page-content">
            <div class="row">
                <div class="panel panel-default">             
                    <div class="panel-body">  
                        <div class="form-wrapper  col-sm-8 col-sm-offset-1">
                            <?php
                            $form = $this->beginWidget('CActiveForm', array(
                                'id' => 'booking-form',
                                'action' => $urlSubmitForm,
                                'htmlOptions' => array("enctype" => "multipart/form-data", 'data-url-uploadFile' => $urlUploadFile, 'data-url-return' => $urlReturn),
                                'enableClientValidation' => false,
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
                            <div class="form-group">
                                <label for="" class="padright0 col-sm-3 col-md-3 control-label">医院:</label>
                                <div class="col-sm-8 controls">
                                    <?php
                                    echo $form->textfield($model, 'hospital_name', array('name' => 'booking[hospital_name]', 'placeholder' => '可不填', 'class' => 'form-control', 'maxlength' => 50));
                                    echo $form->error($model, 'hospital_name');
                                    ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label for="" class="padright0 col-sm-3 col-md-3 control-label">科室:</label>
                                <div class="col-sm-8 controls">
                                    <?php
                                    echo $form->textfield($model, 'hp_dept_name', array('name' => 'booking[hp_dept_name]', 'placeholder' => '可不填', 'class' => 'form-control', 'maxlength' => 50));
                                    echo $form->error($model, 'hp_dept_name');
                                    ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label for="" class="padright0 col-sm-3 col-md-3 control-label">医生:</label>
                                <div class="col-sm-8 controls">
                                    <?php
                                    echo $form->textfield($model, 'doctor_name', array('name' => 'booking[doctor_name]', 'placeholder' => '可不填', 'class' => 'form-control', 'maxlength' => 50));
                                    echo $form->error($model, 'doctor_name');
                                    ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="padright0 col-sm-3 col-md-3 control-label">患者姓名:</label>
                                <div class="col-sm-8 controls">
                                    <?php
                                    echo $form->textfield($model, 'contact_name', array('name' => 'booking[contact_name]', 'placeholder' => '请填写患者的真实姓名', 'class' => 'form-control', 'maxlength' => 50));
                                    echo $form->error($model, 'contact_name');
                                    ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="padright0 col-sm-3 col-md-3 control-label">手机:</label>
                                <div class="col-sm-8 controls">
                                    <?php
                                    echo $form->textField($model, 'mobile', array('name' => 'booking[mobile]', 'placeholder' => '请输入手机号', 'class' => 'form-control', 'maxlength' => 11));
                                    echo $form->error($model, 'mobile');
                                    ?>                     
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label for="" class="padright0 col-sm-3 col-md-3 control-label">验证码:</label>
                                <div class="col-sm-8 controls">
                                    <div class="input-group">
                                        <?php echo $form->textField($model, 'verify_code', array('name' => 'booking[verify_code]', 'placeholder' => '请输入验证码', 'class' => 'form-control', 'maxlength' => 6)); ?>
                                        <div id="btn-sendSmsCode" class="btn input-group-addon  btn-verifycode">获取验证码</div>
                                    </div>
                                    <?php echo $form->error($model, 'verify_code'); ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label for="" class="padright0 col-sm-3 col-md-3 control-label">疾病诊断:</label>
                                <div class="col-sm-8 controls">            
                                    <?php echo $form->textField($model, 'disease_name', array('name' => 'booking[disease_name]', 'placeholder' => '请填写确诊疾病', 'class' => 'form-control', 'maxlength' => 50)); ?>                
                                    <?php echo $form->error($model, 'disease_name'); ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="padright0 col-sm-3 control-label">病情:</label>
                                <div class="col-sm-8 controls">   
                                    <?php
                                    echo $form->textarea($model, 'disease_detail', array('name' => 'booking[disease_detail]', 'placeholder' => '请详细的描述患者的病情', 'class' => 'form-control', 'maxlength' => 1000, 'rows' => 3));
                                    echo $form->error($model, 'disease_detail');
                                    ?>                              
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">    
                                <div class="col-sm-12">
                                    <?php echo $this->renderPartial('_uploadFile'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <button id="btnSubmit" type="button" class="btn btn-lg btn-yes btn-block" name="">提&nbsp;交</button>       
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <?php
                            $this->endWidget();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tip Modal -->
<div class="modal fade" id="tipModal" tabindex="-1" role="dialog" aria-labelledby="tipModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="tipModallLabel">错误提示</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">确认</button>
            </div>
        </div>
    </div>
</div>
<div id="bookingModal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="successModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="successModallLabel">预约成功</h4>
            </div>
            <div class="modal-body">
                <div>
                    <h4>预约成功！</h4>
                    <h4>我们的工作人员会尽快联系您。</h4>
                </div>
            </div>
            <div class="modal-footer" style="display:none;">
                <button type="button" class="ml20 btn btn-primary" data-dismiss="modal" onclick="location.reload();">确&nbsp;认</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#btn-sendSmsCode").click(function (e) {
            e.preventDefault();
            sendSmsVerifyCode($(this));
        });
    });

    function sendSmsVerifyCode(domBtn) {
        var domMobile = $("#booking_mobile");
        var mobile = domMobile.val();
        if (mobile.length === 0) {
            $("#booking_mobile-error").remove();
            $("#booking_mobile").after('<div id="booking_mobile-error" class="error">请输入手机号码</div>');
            //showErrorPopup('请输入手机号码', '#popupError', '#triggerPopupError');
        } else if (domMobile.hasClass("error")) {
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
</script>

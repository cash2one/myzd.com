<?php
Yii::app()->clientScript->registerCssFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/webuploader/css/webuploader.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/js/webuploader/css/webuploader.custom.css');
//Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/bootstrap.min.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.form.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.validate.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/webuploader/js/webuploader.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/custom/booking.js', CClientScript::POS_END);

$urlResImage = Yii::app()->theme->baseUrl . "/images/";

$urlGetSmsVerifyCode = $this->createAbsoluteUrl('/auth/sendSmsVerifyCode');
$authActionType = AuthSmsVerify::ACTION_USER_REGISTER;
$urlSubmitForm = $this->createUrl("booking/ajaxCreate");
$urlUploadFile = $this->createUrl("booking/ajaxUploadFile");
$urlReturn = '#success';
?>
<style>
    .modal .modal-title{text-align: center;}
    .modal .modal-header a>img{width: 100px;}
    .form-wrapper{margin-left:20px;border: 0!important;}
    #uploader .queueList{max-height:340px;overflow-y:scroll;}
    .page-container{border:1px solid #ddd;padding-left: 15px;padding-right: 15px;}
    .control-label{margin-top: 5px;}
    .error{color: #f00;}
    .ui-field-contain a.ui-link{position: absolute;margin: 20px 0 0 141px;z-index: 99;font-size: 16px;}
    #filePicker{min-height: 39px;}
    #filePicker div{position: absolute; top: 0px; left: 200px!important; width: 130px!important; height: 39px!important; overflow: hidden;height: 39px;}
</style>
<div class="modal fade " role="dialog" id="bookingModal" aria-labelledby="bookingModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
<!--                <a href="<?php echo Yii::app()->homeUrl; ?>"><img src="<?php echo $urlResImage; ?>icons/logo.png"></a>-->
                <h4 class="modal-title" id="gridSystemModalLabel">预约单</h4>
            </div>
            <div class="modal-body">
                <div class="block-center">
                    <div class="successTip text-center">

                    </div>
                    <div class="booking-form">
                        <div class="form-wrapper">
                            <form class="form-horizontal" role="form" autocomplete="off" enctype="multipart/form-data" data-url-uploadfile="<?php echo $urlUploadFile; ?>" data-url-return="<?php echo $urlReturn; ?>" id="booking-form" action="<?php echo $urlSubmitForm; ?>" method="post" novalidate="novalidate">
                                <input type="hidden" value="<?php echo $urlGetSmsVerifyCode ?>" name="smsverify[actionUrl]" id="smsverify_actionUrl">
                                <input type="hidden" value="<?php echo $authActionType ?>" name="smsverify[actionType]" id="smsverify_actionType">
                                <input name="booking[doctor_id]" id="booking_doctor_id" type="hidden" value="">    
                                <div class="form-group">
                                    <label for="" class="col-xs-3 col-sm-3 col-md-3 control-label">专家:</label>
                                    <div class="col-sm-8 col-xs-8 controls">        
                                        <h4 class="docname"></h4>
                                        <h4 class="dochospital"></h4>
                                        <h4 class="docdept"></h4> 
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label for="booking_contact_name" class="col-xs-3 col-sm-3 col-md-3 control-label">患者姓名:</label>
                                    <div class="col-sm-8 col-xs-8 controls">
                                        <input name="booking[contact_name]" placeholder="请填写患者的真实姓名" class="form-control" maxlength="45" id="booking_contact_name" type="text">        </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-xs-3 col-sm-3 col-md-3 control-label">手机:</label>
                                    <div class="col-sm-8 col-xs-8 controls">
                                        <input name="booking[mobile]" placeholder="请输入手机号" class="form-control" maxlength="11" id="booking_mobile" type="text">                     
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-xs-3 col-sm-3 col-md-3 control-label">验证码:</label>
                                    <div class="col-sm-8 col-xs-8 controls">
                                        <div class="input-group">
                                            <input name="booking[verify_code]" placeholder="请输入验证码" class="form-control" maxlength="6" id="booking_verify_code" type="text">                <div id="btn-sendSmsCode" class="btn input-group-addon  btn-verifycode">获取验证码</div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-xs-3 col-sm-3 col-md-3 control-label">疾病诊断:</label>
                                    <div class="col-sm-8 col-xs-8 controls">            
                                        <input name="booking[disease_name]" placeholder="请填写确诊疾病" class="form-control" maxlength="50" id="booking_disease_name" type="text">                
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-xs-3 col-sm-3 control-label">病情:</label>
                                    <div class="col-sm-8 col-xs-8 controls">   
                                        <textarea name="booking[disease_detail]" placeholder="请详细的描述患者的病情" class="form-control" maxlength="1000" rows="3" id="booking_disease_detail"></textarea>                              
                                    </div>
                                </div>
                                <div class="form-group">    
                                    <div class="col-sm-12">
                                        <div id="uploader">
                                            <div class="queueList">
                                                <div id="dndArea" class="placeholder">
                                                    <!-- btn 选择图片 -->
                                                    <div id="filePicker"></div>
                                                <!-- <p>或将照片拖到这里，单次最多可选10张</p>-->
                                                </div>
                                                <ul class="filelist"></ul>
                                            </div>
                                            <div class="statusBar clearfix" style="display:none;">
                                                <div class="progress" style="display: none;">
                                                    <span class="text">0%</span>
                                                    <span class="percentage" style="width: 0%;"></span>
                                                </div>
                                                <div class="info">共0张（0B），已上传0张</div>
                                                <div class="">
                                                    <!-- btn 继续添加 -->
                                                    <div id="filePicker2" class="pull-right"></div>                          

                                                </div>
                                            </div>
                                            <!--一开始就显示提交按钮就注释上面的提交 取消下面的注释 -->
                                            <!-- <div class="statusBar uploadBtn">提交</div>-->
                                        </div>    
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <button id="btnSubmit" type="button" class="btn btn-lg btn-yes btn-block state-pedding" name="">提&nbsp;交</button>
                                        <input type="reset" name="reset" style="display: none;" />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="display:none;">
                <button type="button" class="ml20 btn btn-primary" data-dismiss="modal" onclick="location.reload();">确&nbsp;认</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->    
<!-- /. Modal 手术直通车 -->

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

<script type="text/javascript">
    $(document).ready(function () {
        $("#btn-sendSmsCode").click(function () {
            sendSmsVerifyCode($(this));
        });
        $('#bookingModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var docid = button.data('docid');
            var docname = button.data('docname');
            var dochospital = button.data('dochospital');
            var docdept = button.data('docdept');
            var modal = $(this);
            //modal.find('.modal-body input').val(recipient);
            modal.find('.modal-body input[name="booking[doctor_id]"]').val(docid);
            modal.find('.modal-body .docname').text(docname);
            modal.find('.modal-body .dochospital').text(dochospital);
            modal.find('.modal-body .docdept').text(docdept);
        });
    });

    function sendSmsVerifyCode(domBtn) {
        var domMobile = $("#booking_mobile");
        var mobile = domMobile.val();
        if (mobile.length === 0) {
            $("#booking_mobile-error").remove();
            $("#booking_mobile").after('<div id="booking_mobile-error" class="error">请填写手机号码</div>');
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
</script>
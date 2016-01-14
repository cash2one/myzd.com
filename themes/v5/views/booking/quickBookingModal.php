<?php
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.form.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.validate.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/custom/quickbook.js', CClientScript::POS_END);
$urlSubmitForm = $this->createUrl("booking/ajaxCreate");
$urlReturn = '#success';
?>
<div class="modal fade" id="qucikbookingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="mybooking">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="mybooking-text text-center color-white">我要预约</div>
            </div>
            <div class="booking-form pt20">
                <div class="form-wrapper">
                    <form enctype="multipart/form-data" data-url-return="<?php echo $urlReturn; ?>" id="quickbook-form" action="<?php echo $urlSubmitForm; ?>" method="post">
                        <div class="form-group">
                            <label for="" class="padright0 col-sm-3 col-md-3 control-label">医院:</label>
                            <div class="col-sm-8 controls">
                                <input name="booking[hospital_name]" placeholder="可不填" class="form-control" maxlength="50" id="booking_hospital_name" type="text">                                </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="padright0 col-sm-3 col-md-3 control-label">科室:</label>
                            <div class="col-sm-8 controls">
                                <input name="booking[hp_dept_name]" placeholder="可不填" class="form-control" maxlength="50" id="booking_hp_dept_name" type="text">                                </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="padright0 col-sm-3 col-md-3 control-label">医生:</label>
                            <div class="col-sm-8 controls">
                                <input name="booking[doctor_name]" placeholder="可不填" class="form-control" maxlength="50" id="booking_doctor_name" type="text">                                </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="padright0 col-sm-3 col-md-3 control-label">患者姓名:</label>
                            <div class="col-sm-8 controls">
                                <input name="booking[contact_name]" placeholder="请填写患者的真实姓名" class="form-control" maxlength="50" id="booking_contact_name" type="text">                                </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="padright0 col-sm-3 col-md-3 control-label">疾病诊断:</label>
                            <div class="col-sm-8 controls">            
                                <input name="booking[disease_name]" placeholder="请填写确诊疾病" class="form-control" maxlength="50" id="booking_disease_name" type="text">                
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="padright0 col-sm-3 control-label">病情:</label>
                            <div class="col-sm-8 controls">   
                                <textarea name="booking[disease_detail]" placeholder="请详细的描述患者的病情" class="form-control" maxlength="1000" rows="3" id="booking_disease_detail"></textarea>                              
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
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
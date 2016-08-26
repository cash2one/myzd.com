<?php
//Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/jquery.form.js', CClientScript::POS_END);
//Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/jquery.validate.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/booking100.min.js', CClientScript::POS_END);

$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlTerms = $this->createUrl('site/page', array('view' => 'help','page'=>'terms'));
$urlSubmitForm = $this->createUrl("booking/ajaxCreate");
$urlReturn = $this->createUrl('booking/success', array('id' => ''));
$is_commonweal=isset($is_commonweal)?$is_commonweal:0;
$bookingLog = $this->createUrl("booking/ajaxBookingLog");
?>
<div class="modal fade " role="dialog" id="bookingModal" aria-labelledby="bookingModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div>
                <div class="block-center">
                    <div class="mybooking">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="mybooking-text text-center color-white"><img src="http://static.mingyizhudao.com/147012947413524"> 我要预约</div>
                    </div>
                    <div class="booking-form">
                        <div class="form-wrapper">
                            <form class="form-horizontal" role="form" autocomplete="off" enctype="multipart/form-data" data-url-return="<?php echo $urlReturn; ?>" id="booking-form" action="<?php echo $urlSubmitForm; ?>" method="post" novalidate="novalidate">
                                
                                <input name="booking[doctor_id]" id="booking_doctor_id" type="hidden" value="">
                                <input name="booking[is_commonweal]" id="booking_is_commonweal" type="hidden" value="<?php echo $is_commonweal;?>">
                                <div class="form-group mt10">
                                    <label class="col-sm-3 control-label">就诊专家:</label>
                                    <div class="col-sm-8 text-left label-booking">
                                        <h4 class="docname mt5"></h4>
                                    </div>
                                </div>
                                <div class="form-group mt30">
                                    <label class="col-sm-3 control-label">就诊医院:</label>
                                    <div class="col-sm-8 text-left label-booking">
                                        <h4 class="dochospital mt5"></h4>
                                    </div>
                                </div>
                                <div class="form-group mt30">
                                    <label for="booking_contact_name" class="col-xs-3 col-sm-3 col-md-3 control-label">患者姓名:</label>
                                    <div class="col-sm-8 col-xs-8 controls">
                                        <input name="booking[contact_name]" placeholder="请填写患者的真实姓名" class="form-control" maxlength="19" id="booking_contact_name" type="text">        </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group mt30">
                                    <label for="" class="col-xs-3 col-sm-3 col-md-3 control-label">疾病诊断:</label>
                                    <div class="col-sm-8 col-xs-8 controls">            
                                        <input name="booking[disease_name]" placeholder="请填写确诊疾病" class="form-control" maxlength="50" id="booking_disease_name" type="text">                
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="form-group mt30">
                                    <label for="" class="col-xs-3 col-sm-3 control-label">病情:</label>
                                    <div class="col-sm-8 col-xs-8 controls">   
                                        <textarea name="booking[disease_detail]" placeholder="请详细的描述患者的病情" class="form-control" maxlength="1000" rows="3" id="booking_disease_detail"></textarea>                              
                                    </div>
                                </div>
                                <div class="form-group mt30">
                                    <div class="col-sm-offset-3 col-sm-8 controls">
                                        <div class="checkbox">
                                            <label>
                                                <input name="booking[terms]" type="checkbox" checked="checked">我已同意《<a href="<?php echo $urlTerms; ?>" target="_blank">名医主刀在线用户协议</a>》
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt30">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <button id="btnSubmit" type="button" class="btn btn-lg btn-yes btn-block">提&nbsp;交</button>
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

<script>
    $(document).ready(function () {
        $('#bookingModal').on('show.bs.modal', function (event) {
            var actionUrl = '<?php echo $bookingLog?>';
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
        });
    });
</script>
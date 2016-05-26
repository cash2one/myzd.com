<?php
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.form.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.validate.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/custom/booking.js', CClientScript::POS_END);

$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlTerms = $this->createUrl('site/page', array('view' => 'help','page'=>'terms'));
$urlSubmitForm = $this->createUrl("booking/ajaxCreate");
$urlReturn = $this->createUrl('booking/success', array('id' => ''));
$bookingLog = $this->createUrl("booking/ajaxBookingLog");
?>
<div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="mybooking">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="mybooking-text text-center color-white"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146010432282534"> 我要预约</div>
            </div>
            <div class="booking-form">
                <div class="form-wrapper">
                    <form class="form-horizontal" role="form" autocomplete="off" enctype="multipart/form-data" data-url-return="<?php echo $urlReturn; ?>" id="booking-form" action="<?php echo $urlSubmitForm; ?>" method="post" novalidate="novalidate">
                        <input name="booking[hospital_id]" id="booking_hospital_id" type="hidden" value="">
                        <input name="booking[hp_dept_id]" id="booking_hp_dept_id" type="hidden" value="">
                        <input name="booking[hp_dept_id]" id="booking_hp_dept_name" type="hidden" value="">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">就诊医院:</label>
                            <div class="col-sm-9 text-left label-booking">
                                <span class="hospital-name"></span>--<span class="dept-name"></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="booking_contact_name" class="col-xs-3 col-sm-3 col-md-3 control-label">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名:</label>
                            <div class="col-sm-8 col-xs-8 controls">
                                <input name="booking[contact_name]" placeholder="请填写患者的真实姓名" class="form-control" maxlength="45" id="booking_contact_name" type="text">        </div>
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
                            <label for="" class="col-xs-3 col-sm-3 control-label">病情描述:</label>
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
                        <div class="form-group mt20">
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
<script>
    $(document).ready(function () {
        $('#bookingModal').on('show.bs.modal', function (event) {
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
            var button = $(event.relatedTarget);
            var hospital = button.data('hospital');
            var dept = button.data('dept');
            var hospitalId = button.data('hospitalId');
            var deptId = button.data('deptId');
            var modal = $(this);
            modal.find('.modal-content input[name="booking[hospital_id]"]').val(hospitalId);
            modal.find('.modal-content input[name="booking[dept_id]"]').val(deptId);
            modal.find('.modal-content .hospital-name').text(hospital);
            modal.find('.modal-content .dept-name').text(dept);
        });
    });
</script>
<?php
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/user100.min.css");
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
//$urlUploadFile = $this->createUrl("booking/ajaxUploadFile");
$urlUploadFile = 'http://file.mingyizhudao.com/api/uploadbookingfile';
$urlBookingList = $this->createUrl('booking/list');
$booking = $data->results->booking;
$urlReturn = $this->createUrl('booking/userBooking',array('id'=>$booking->id));
?>
<div class="bg-green">
    <div class="container">
        <div class="user-crumbs">
            <a href="<?php echo Yii::app()->homeUrl; ?>">首页</a>
            >
            <a href="<?php echo $urlBookingList; ?>">个人中心</a>
            >
            <a href="<?php echo $urlBookingList; ?>">预约单</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt40">
        <div class="col-sm-3">
            <?php $this->renderPartial('//user/_userMenu',array('pageActive'=>'bookinglist')); ?>
        </div>
        <div class="col-sm-9">
            <div class="">
                <img class="img-responsive" src="http://static.mingyizhudao.com/147012953748342">
            </div>
            <div class="bookingSuccess border-gray mt10 pl40 pr40 minh700">
                <div class="row mt40">
                    <div class="col-md-8 border-right mt10 min-h410p">
                        <div>
                            <form id="booking-form" data-url-uploadfile="<?php echo $urlUploadFile; ?>" data-url-return="<?php echo $urlReturn; ?>">
                                <input id="bookingId" type="hidden" name="booking[id]" value="<?php echo $booking->id; ?>" />
                                <input id="bookingReport_type" type="hidden" name="booking[report_type]" value="mr" />
                            </form>
                            <h4 class="color-green">请您上传病例资料：</h4>
                            <style>h4,.h4{margin-top:0px!important;}</style>
                            <div>
                                <?php echo $this->renderPartial('_uploadFile'); ?>
                            </div>
                            
                            <div class="mt100">
                                <a href="<?php echo $this->createUrl('booking/view', array('id' => $booking->id)); ?>" class="showBookingInfo color-status text12">查看预约详情 <i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></a>
                            </div>
                            <div class="row mt10 bookingInfo">
                                <div class="col-md-6">
                                    <div>意向专家：<?php echo $booking->expertName == '' ? '未填写' : $booking->expertName; ?></div>
                                    <div class="mt30">专家科室：<?php echo $booking->hpDeptName == '' ? '未填写' : $booking->hpDeptName; ?></div>
                                    <div class="mt30">专家医院：<?php echo $booking->hpName == '' ? '未填写' : $booking->hpName; ?></div>
                                    <div class="mt30">意向日期：<?php echo $booking->dateStart . ' -- ' . $booking->dateEnd; ?></div>
                                </div>
                                <div class="col-md-6 border-left-dashed">
                                    <div>患者姓名：<?php echo $booking->patientName; ?></div>
                                    <div class="mt30">联系方式：<?php echo $booking->mobile; ?></div>
                                    <div class="mt30">疾病名称：<?php echo $booking->diseaseName; ?></div>
                                    <div class="mt30">疾病描述：<?php echo $booking->diseaseDetail; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt5">
                        <div class="introduce">
                            <div class="introduce-title"><i class="fa fa-caret-right"></i> <strong>什么是病例资料？</strong></div>
                            <div class="introduce-content">病历资料包括影像资料（CT、磁共振、X光片）、检查报告单、门诊病例、住院病历、出院小结等病史资料。</div>
                        </div>
                        <div class="introduce">
                            <div class="introduce-title"><i class="fa fa-caret-right"></i> <strong>为什么要上传影像资料？</strong></div>
                            <div class="introduce-content">病历资料为医生的诊断和治疗方案提供了可靠有效的参考价值。可以让医生在最短的时间里，尽可能全面地对病情做个初判。所以请您提供清楚的照片。名医主刀会对此绝对保密，仅用于医生诊断。</div>
                        </div>
                        <div class="introduce">
                            <div class="introduce-title"><i class="fa fa-caret-right"></i> <strong>暂时没有，稍后可以补充吗？</strong></div>
                            <div class="introduce-content">可以。在您完成拍照后，您可以在个人中心——我的预约单列表里找到您的预约单，点击修改——上传病历，即可补充。最多可以上传9张。</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.showBookingInfo').click(function (e) {
            e.preventDefault();
            $('.showBookingInfo .fa-angle-right').toggle();
            $('.showBookingInfo .fa-angle-down').toggle();
            $('.bookingInfo').toggle();
        });
//        $('.introduce-title').click(function(){
//            $(this).parent().find('.introduce-content').toggle();
//        });
    });
</script>
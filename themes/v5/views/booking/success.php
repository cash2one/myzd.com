<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time());
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$booking = $data->results->booking;
?>
<div class="bg-green">
    <div class="container">
        <div class="user-crumbs">
            <a href="">首页</a>
            >
            <a href="">个人中心</a>
            >
            <a href="">预约单</a>
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
                <img class="img-responsive" src="<?php echo $urlResImage; ?>user/process.png">
            </div>
            <div class="bookingSuccess border-green mt10 pl40 pr40 minh700">
                <div class="row mt40">
                    <div class="col-md-8 border-right">
                        <div>
                            <h4 class="color-green">提交成功！请您上传病例资料：</h4>
                            <div class="mt20">
                                <a href="<?php echo $this->createUrl('booking/uploadFile',array('id'=>$booking->id)); ?>" class="btn btn-yes mr20 w150p">上传影像资料</a>
                                <a href="<?php echo $this->createUrl('booking/userBooking',array('id'=>$booking->id)); ?>" class="color-status text12 somewhat-add">稍后添加</a>
                            </div>
                            <div class="mt100">
                                <a href="<?php echo $this->createUrl('booking/view',array('id'=>$booking->id)); ?>" class="showBookingInfo color-status">查看预约详情 <i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></a>
                            </div>
                            <div class="row mt10 bookingInfo">
                                <div class="col-md-6">
                                    <div>意向专家：<?php echo $booking->expertName ==''?'未填写':$booking->expertName; ?></div>
                                    <div class="mt30">专家科室：<?php echo $booking->hpDeptName ==''?'未填写':$booking->hpDeptName; ?></div>
                                    <div class="mt30">专家医院：<?php echo $booking->hpName ==''?'未填写':$booking->hpName; ?></div>
                                    <div class="mt30">意向日期：<?php echo $booking->dateStart.' -- '.$booking->dateEnd; ?></div>
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
                    <div class="col-md-4">
                        <div class="introduce">
                            <div class="introduce-title"><i class="fa fa-caret-right"></i> 什么是病例资料？</div>
                            <div class="introduce-content"></div>
                        </div>
                        <div class="introduce">
                            <div class="introduce-title"><i class="fa fa-caret-right"></i> 为什么要上传影像资料？</div>
                            <div class="introduce-content"></div>
                        </div>
                        <div class="introduce">
                            <div class="introduce-title"><i class="fa fa-caret-right"></i> 暂时没有，稍后可以补充吗？</div>
                            <div class="introduce-content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.showBookingInfo').click(function(e){
            e.preventDefault();
            $('.showBookingInfo .fa-angle-right').toggle();
            $('.showBookingInfo .fa-angle-down').toggle();
            $('.bookingInfo').toggle();
        });
    });
</script>
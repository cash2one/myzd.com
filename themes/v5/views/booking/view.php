<?php
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/user100.min.css");
$urlOrderView = $this->createUrl('order/viewweb');
$urlBookingList = $this->createUrl('booking/list');
$booking = $data->results->booking;
$salesOrder = $data->results->salesOrder;
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
            <?php $this->renderPartial('//user/_userMenu', array('pageActive' => 'bookinglist')); ?>
        </div>
        <div class="col-sm-9 bookingView">
            <div class="user-header pl20">
                <div class="color-status">预约单：<?php echo $booking->refNo; ?></div>
                <div>
                    <?php
                    foreach ($salesOrder as $order) {
                        echo '<h4 class="text-center color-green text20">';
                        echo '<span>状态：' . $order->subject . ' ' . $order->finalAmount . '元</span>';
                        echo '<a target="_blank" href="' . $this->createUrl('order/viewnew',array('bookingId'=>$booking->id)) . '" class="pay-btn btn btn-yes">立即支付</a>';
                        echo '</h4>';
                    }
                    ?>
                </div>
                <div class="text-center text-red">*该费用术前专家咨询费、第一次面诊费(如有需要，安排面诊)和手术相关安排费用</div>
            </div>
            <div class="pb40 border-green mt10 pl20 pr20">
                <div class="pt10"> 
                    <div class="pull-right">
                        <a class="color-status mr10" href=""><span class="mr10">修改</span>|<span class="pl10">完成</span></a>
                    </div>
                </div>
                <div>
                    <div class="row mt30">
                        <div class="col-md-4 border-right">
                            <div class="pl20 mt30">
                                <div class="bookingInfo">预约专家：<?php echo $booking->expertName == '' ? '未填写' : $booking->expertName; ?></div>
                                <div class="bookingInfo">意向科室：<?php echo $booking->hpDeptName == '' ? '未填写' : $booking->hpDeptName; ?></div>
                                <div class="bookingInfo">意向医院：<?php echo $booking->hospitalName == '' ? '未填写' : $booking->hospitalName; ?></div>
                                <div class="bookingInfo">意向会诊时间：<?php echo $booking->dateStart . ' -- ' . $booking->dateEnd; ?></div>
                            </div>
                        </div>
                        <div class="col-md-4 border-right">
                            <div class="pl20 mt30">
                                <div class="bookingInfo">患者姓名：<?php echo $booking->patientName; ?></div>
                                <div class="bookingInfo">联系方式：<?php echo $booking->mobile; ?></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pl20 mt30">
                                <div class="bookingInfo">疾病名称：<?php echo $booking->diseaseName; ?></div>
                                <div class="bookingInfo">疾病描述：<?php echo $booking->diseaseDetail; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="pl20 mrfile mt40">
                        <div>
                            <span class="strong text18">上传病历</span>
                            <span>(影像资料、检查报告、门诊病历、住院病历、出院小结等病史资料)</span>
                        </div>
                        <div class="row mt20">
                            <?php
                            foreach ($booking->files as $file) {
                                echo '<div class="col-sm-3 col-md-2"><img src="' . $file->absFileUrl . '" /></div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time());
$urlOrderView = $this->createUrl('order/view');
$booking = $data->results->booking;
$urlBookingFile = $this->createUrl('booking/bookingFile', array('id' => $booking->id));
$urlBookingList = $this->createUrl('booking/list');
$urlUploadFile = $this->createUrl("booking/ajaxUploadFile");
$urlReturn = $this->createUrl('booking/userBooking', array('id' => $booking->id));
?>
<style>
    #uploader .filelist li{width: 25%;}
</style>
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
                <div class="color-status text12">预约单：<?php echo $booking->refNo; ?></div>
                <div>
                    <?php
                    if ($booking->status == StatCode::BK_STATUS_CANCELLED || $booking->status == StatCode::BK_STATUS_INVALID) {
                        echo '<h4 class="text-center color-green text20">';
                        echo '<span>' . $booking->statusText . '</span>';
                        echo '</h4>';
                    } else {
                        if (isset($data->results->salesOrder) && count($data->results->salesOrder) > 0) {
                            $salesOrder = $data->results->salesOrder;
                            foreach ($salesOrder as $order) {
                                echo '<h4 class="text-center color-green text20 pb10">';
                                echo '<span>状态：' . $order->subject . ' ' . $order->finalAmount . '元</span>';
                                if ($order->isPaid == 0) {
                                    if ($order->orderTypeCode == SalesOrder::ORDER_TYPE_DEPOSIT && $booking->bookingServiceId == 2) {
                                        echo '<a class="pay-btn btn btn-yes" href="' . $this->createUrl('order/payDeposit', array('refno' => $order->refNo)) . '">点击完成</a>';
                                    } else {
                                        echo '<a target="_blank" href="' . $this->createUrl('order/view', array('refno' => $order->refNo)) . '" class="pay-btn btn btn-yes">立即支付</a>';
                                    }
                                } else {
                                    echo '<span class="pay-btn btn btn-disabled">已支付</span>';
                                }
                                echo '</h4>';
                            }
                        } else {
                            echo '<h4 class="text-center color-green text20">';
                            echo '<span>无支付信息</span>';
                            echo '</h4>';
                        }
                    }
                    ?>
                </div>
                <?php
                if ($booking->status != StatCode::BK_STATUS_CANCELLED && $booking->status != StatCode::BK_STATUS_INVALID) {
                    echo '<div class="text-center text-red text12 mt10">*该费用术前专家咨询费、第一次面诊费(如有需要，安排面诊)和手术相关安排费用</div>';
                }
                ?>

            </div>
            <div class="pb40 border-green mt10 pl20 pr20">
                <?php
                if ($booking->status != 9) {
                    //echo '<div class="pt10"><div class="pull-right"><a class="color-status" href="' . $this->createUrl('booking/uploadFile', array('id' => $booking->id)) . '"><span class="">修改</span></a></div></div>';
                }
                ?>

                <div>
                    <div class="row mt30">
                        <div class="col-md-4 border-right">
                            <div class="pl20 mt30">
                                <div class="bookingInfo">预约专家：<?php echo $booking->expertName == '' ? '未填写' : $booking->expertName; ?></div>
                                <div class="bookingInfo">意向科室：<?php echo $booking->hpDeptName == '' ? '未填写' : $booking->hpDeptName; ?></div>
                                <div class="bookingInfo">意向医院：<?php echo $booking->hpName == '' ? '未填写' : $booking->hpName; ?></div>
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
                            <span class="text18">上传病历</span>
                            <span class="color-gray">(影像资料、检查报告、门诊病历、住院病历、出院小结等病史资料)</span>
                        </div>
                        <div class="row mt20 imgList">

                        </div>
                        <form id="booking-form" data-url-uploadfile="<?php echo $urlUploadFile; ?>" data-url-return="<?php echo $urlReturn; ?>">
                            <input id="bookingId" type="hidden" name="booking[id]" value="<?php echo $booking->id; ?>" />
                            <input id="bookingReport_type" type="hidden" name="booking[report_type]" value="mr" />
                        </form>
                        <div class="mt20">
                            <?php
                            if ($booking->status != 9) {
                                $this->renderPartial('_uploadFile');
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        var urlBookingFile = '<?php echo $urlBookingFile; ?>';
        $.ajax({
            url: urlBookingFile,
            success: function (data) {
                setImgHtml(data);
            }
        });
    });
    function setImgHtml(data) {
        if (data.results.files && data.results.files.length > 0) {
            var innerHtml = '';
            var files = data.results.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                innerHtml += '<div class="col-sm-3 col-md-2 mt10"><img src="' + file.absFileUrl + '" /></div>';
                if (i % 6 == 5) {
                    innerHtml += '<div class="clearfix"></div>';
                }
            }
            $('.imgList').html(innerHtml);
        } else {
            $('.imgList').html('<div class="col-sm-12">暂未上传图片</div>');
        }
    }
</script>

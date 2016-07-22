<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time());
$urlOrderView = $this->createUrl('order/view');
$booking = $data->results->booking;
$urlBookingFile = $this->createUrl('booking/bookingFile', array('id' => $booking->id));
$urlBookingList = $this->createUrl('booking/list');
//$urlUploadFile = $this->createUrl("booking/ajaxUploadFile");
$urlUploadFile = 'http://121.40.127.64:8089/api/uploadbookingfile';
$urlReturn = $this->createUrl('booking/userBooking', array('id' => $booking->id));
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
?>
<style>
    #uploader .filelist li{width: 25%;}
    .detail{position: absolute;border: 1px solid #31708f;color: #31708f;font-size: 12px;padding: 2px 3px;margin-top: -1em;}
    .tooltip-inner{background-color:#fff;border: 1px solid #31708f;color:#f00;text-align:justify;}
    .tooltip.right .tooltip-arrow{border-right-color:#31708f;}
    .first{margin-top:30px;}
    .btn-disabled, .btn-disabled:hover{padding:5px 17px;}
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
                <?php
                $active1 = '';
                $active2 = '';
                $active3 = '';
                $active4 = '';
                if ($booking->status == StatCode::BK_STATUS_NEW) {
                    $active1 = 'active';
                } else if ($booking->status >= StatCode::BK_STATUS_PROCESSING && $booking->status <= StatCode::BK_STATUS_PATIENT_ACCEPTED) {
                    $active2 = 'active';
                } else if ($booking->status == StatCode:: BK_STATUS_SERVICE_UNPAID) {
                    $active3 = 'active';
                } else if ($booking->status >= StatCode:: BK_STATUS_SERVICE_PAIDED && $booking->status <= StatCode::BK_STATUS_DONE) {
                    $active4 = 'active';
                }
                ?>
                <?php if ($booking->status >= StatCode:: BK_STATUS_NEW && $booking->status < StatCode:: BK_STATUS_CANCELLED) {
                    ?>
                    <div>
                        <div class="row ml20 mr20">
                            <div class="col-sm-3 pr0"><div class="user-titleline"></div><div class="step-spot"></div></div>
                            <div class="col-sm-3 pr0 pl0"><div class="user-titleline"></div><div class="step-spot <?php echo $active1; ?>"></div></div>
                            <div class="col-sm-3 pr0 pl0"><div class="user-titleline"></div><div class="step-spot <?php echo $active2; ?>"></div></div>
                            <div class="col-sm-3 pl0"><div class="user-titleline"></div><div class="step-spot <?php echo $active3; ?>"></div><div class="step-spot-last pull-right <?php echo $active4; ?>"></div></div>
                        </div>
                        <div class="row ml20">
                            <div class="col-sm-3 pr0 stepone">提交订单</div>
                            <div class="col-sm-3 pr0 pl0 steptwo <?php echo $active1; ?>">支付费用</div>
                            <div class="col-sm-3 pr0 pl0 stepthree <?php echo $active2; ?>">安排中</div>
                            <div class="col-sm-3 pl0 stepfour <?php echo $active3; ?>">确定手术时间<div class="pull-right stepfive <?php echo $active4; ?>">入院手术</div></div>
                        </div>
                    </div> 
                <?php } else if ($booking->status == StatCode:: BK_STATUS_INVALID || $booking->status == StatCode:: BK_STATUS_CANCELLED) {
                    ?>
                    <div class="mt15"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146312719792390"></div>
                <?php }
                ?>
            </div>
            <div class="pb40 border-gray mt10 pl20 pr20">
                <div>
                    <?php
                    if ($booking->status == StatCode::BK_STATUS_CANCELLED || $booking->status == StatCode::BK_STATUS_INVALID) {
                        echo '<h4 class="text-center color-green text20 mt30">';
                        echo '<span >' . $booking->statusText . '</span>';
                        echo '</h4>';
                    } else if ($booking->status == StatCode::BK_STATUS_PROCESSING) {
                        echo '<div class="mt30"><h4 class="text-center color-green text20">
                        <span>状态：对接专家中... <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146286350628653"></span>
                        <span class="detail" data-toggle="tooltip" data-placement="right" title="*客服确认信息并匹配专家 ，如有需要会安排面诊 *因专家个人原因（如出国参加会议）无法按原有协商时间赴约的，名医助手会第一时间与您沟通其他时间，或为您推荐其他同级别专家名医。该情况不算违约。">声明</span>
                    </h4></div>';
                    } else {
                        if (isset($data->results->salesOrder) && count($data->results->salesOrder) > 0) {
                            $salesOrder = $data->results->salesOrder;
                            if ($booking->status == StatCode::BK_STATUS_NEW) {
                                $order = $salesOrder[0];
                                $first = '';
                                if ($order->isPaid == 0) {
                                    echo '<h4 class="text-center color-green text20 pb10 mt30' . $first . '">';
                                    echo '<span>状态：' . $order->subject . ' ' . $order->finalAmount . '元</span>';
                                    if ($order->orderTypeCode == SalesOrder::ORDER_TYPE_DEPOSIT && $booking->bookingServiceId == 2) {
                                        echo '<div class="text-right mt-26"><a class="pay-btn btn btn-yes" href="' . $this->createUrl('order/payDeposit', array('refno' => $order->refNo)) . '">点击完成</a></div>';
                                    } else {
                                        echo '<div class="text-right mt-26"><a target="_blank" href="' . $this->createUrl('order/view', array('refno' => $order->refNo)) . '" class="pay-btn btn btn-yes">立即支付</a></div>';
                                    }
                                } else {
                                    echo '<div class="text20 color-green text-center mt30"><span><img class="mr10 mt-3" src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146312588201985"></span>' . $order->finalAmount . '元预约金支付成功！</div>';
                                }
                                echo '</h4>';
                            }
                            if ($booking->status == StatCode::BK_STATUS_SERVICE_UNPAID) {
                                
                                $paid_all = 0;
                                foreach ($salesOrder as $i => $order) {
                                    if ($order->isPaid == 0 && $order->orderTypeCode == 'service') {
                                        $paid_all = 1;
                                    }
                                }
                                if ($paid_all == 1) {
                                    echo '<h4 class="text-center mt30 color-green text20 pb10"><span>状态：待付平台咨询费</span></h4>';
                                    foreach ($salesOrder as $i => $order) {
                                        if ($order->orderTypeCode == SalesOrder::ORDER_TYPE_SERVICE) {
                                            if ($i == 0) {
                                                $first = 'first';
                                            } else {
                                                $first = '';
                                            }
                                            if ($order->isPaid == 0) {
                                                echo '<h4 class="text-center color-green text16 pb10 ' . $first . '">';
                                                echo '<span>→请您支付' . $order->finalAmount . '元</span>';
                                                echo '<span class="mt-26 ml10"><a target="_blank" href="' . $this->createUrl('order/view', array('refno' => $order->refNo)) . '" class="pay-btn btn btn-yes">立即支付</a></span>';
                                            } else {
                                                echo '<h4 class="text-center color-green text16 pb10 ' . $first . '">';
                                                echo '<span>→请您支付' . $order->finalAmount . '元</span>';
                                                echo '<span class="mt-26 ml10"><span class="pay-btn btn btn-disabled">已支付</span></span>';
                                            }
                                            echo '</h4>';
                                        }
                                    }
                                } else {
                                    $count_money= 0;
                                     foreach ($salesOrder as $i => $order) {
                                         if($order->isPaid == 1 && $order->orderTypeCode == 'service'){
                                             $count_money = $order->finalAmount + $count_money;
                                         }
                                         
                                     }
                                         echo '<h4 class="text-center mt30 color-green text20 pb10"><span>您已成功支付平台咨询费'. $count_money .'元</span></h4>';
                                }
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
                    if ($booking->status == StatCode::BK_STATUS_NEW) {
                        echo '<div class="text-center text-red text12 mt10">*该费用术前专家咨询费、第一次面诊费(如有需要，安排面诊)和手术相关安排费用</div>';
                    }
                    if ($booking->status == StatCode::BK_STATUS_SERVICE_PAIDED || $booking->status == StatCode::BK_STATUS_DONE) {
                        echo '<div class="text20 color-green text-center mt30">感谢您选择名医主刀！祝您手术顺利，早日康复！</div>';
                    }
                    ?>
                <?php
                if ($booking->status != 9) {
                    //echo '<div class="pt10"><div class="pull-right"><a class="color-status" href="' . $this->createUrl('booking/uploadFile', array('id' => $booking->id)) . '"><span class="">修改</span></a></div></div>';
                }
                ?>
                <div class="booking-order">预约单：<?php echo $booking->refNo; ?></div>
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
                                <?php if (!empty($paid_count['deposit_count']) || !empty($paid_count['paid_count'])): ?><span>支付费用：</span><?php endif; ?><?php if (!empty($paid_count['deposit_count'])): ?><span class="bookingInfo"> 已支付预约金<?php echo $paid_count['deposit_count']; ?>元</span><?php endif; ?>
<?php if (!empty($paid_count['deposit_count'])): ?><span class="user-bookinginfo-white-block"></span><?php endif; ?><?php if (!empty($paid_count['paid_count'])): ?><span class="bookingInfo"> 已支付咨询费<?php echo $paid_count['paid_count']; ?>元</span><?php endif; ?>
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
if ($booking->status >= StatCode::BK_STATUS_NEW && $booking->status < StatCode::BK_STATUS_SERVICE_UNPAID) {
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
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        })
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

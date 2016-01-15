<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time());
$urlBookingList = $this->createUrl('booking/list');
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$booking = $data->results->booking;
?>
<div class="bg-green">
    <div class="container">
        <div class="user-crumbs">
            <a href="<?php echo Yii::app()->homeUrl; ?>">首页</a>
            >>
            <a href="<?php echo $urlBookingList; ?>">个人中心</a>
            >>
            <a href="<?php echo $urlBookingList; ?>">预约单</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt40">
        <div class="col-sm-3">
            <?php $this->renderPartial('//user/_userMenu', array('pageActive' => 'bookinglist')); ?>
        </div>
        <div class="col-sm-9 paySuccess">
            <div class="user-header pl20">
                <div>&nbsp;</div>
                <div>
                    <h4 class="text-center color-green text20">
                        <span class="pr10">状态：对接专家中... <img src="<?php echo $urlResImage; ?>user/phone.png"></span>
                        <span class="detail"data-toggle="tooltip" data-placement="right" title="*对接情况我们将会客服及时通知">详情</span>
                    </h4>
                </div>
            </div>
            <div class="pb40 border-green mt10">              
                <div>
                    <h3 class="text-center color-green mb0"><img src="<?php echo $urlResImage; ?>user/TKCG.png"> 1000元预约金支付成功</h3>
                    <div class="text-center">预约单：<?php echo $booking->refNo; ?></div>
                    <div>
                        <div class="pl100">您的预约单详情如下：</div>
                        <div class="bookingInfo">
                            <ul>
                                <li>患者姓名：<?php echo $booking->patientName; ?></li>
                                <li>联系方式：<?php echo $booking->mobile; ?></li>
                                <li>意向专家：<?php echo $booking->expertName == '' ? '未填写' : $booking->expertName; ?></li>
                                <li>意向医院：<?php echo $booking->hpName == '' ? '未填写' : $booking->hpName; ?></li>
                                <li>意向会诊时间：<?php echo $booking->dateStart . ' -- ' . $booking->dateEnd; ?></li>
                                <li>疾病名称：<?php echo $booking->diseaseName; ?></li>
                                <li>疾病描述：<?php echo $booking->diseaseDetail; ?></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
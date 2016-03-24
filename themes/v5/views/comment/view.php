<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time());

$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlBookingList = $this->createUrl('booking/list');
$bookingInfo = $booking->results->booking;
$commentInfo = $comment->results->comment;
?>
<div class="bg-green">
    <div class="container">
        <div class="user-crumbs">
            <a href="<?php echo Yii::app()->homeUrl; ?>">首页</a>
            >
            <a href="<?php echo $urlBookingList; ?>">个人中心</a>
            >
            <a>查看评价</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt40">
        <div class="col-sm-3">
            <?php $this->renderPartial('//user/_userMenu', array('pageActive' => 'bookinglist')); ?>
        </div>
        <div class="col-sm-9">
            <div class="user-header pl20">
                <div class="color-status">预约单：<?php echo $bookingInfo->refNo; ?></div>
                <div>
                    <h4 class="text-center color-green text20" >
                        <img src="<?php echo $urlResImage; ?>user/pingJia.png"> <strong>感谢您的评价！</strong>
                    </h4>
                </div>
            </div>
            <div class="border-green mt10 pt50 pl50 pr50 minh700">
                <div><span class="color-gray">主刀专家：</span><strong><?php echo $bookingInfo->expertName == null ? '无' : $bookingInfo->expertName; ?></strong>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="color-gray">确诊疾病：</span><strong><?php echo $bookingInfo->diseaseName; ?></strong></div>
                <div id="service" class="mt50 comment">
                    <strong>治疗效果</strong>
                    <?php
                    $effect = $commentInfo->effect;
                    for ($i = 1; $i < 6; $i++) {
                        if ($i <= $effect) {
                            echo '<i class="fa fa-star active ml40 "></i>';
                        } else {
                            echo '<i class="fa fa-star-o ml40 "></i>';
                        }
                    }
                    echo '<span class="fraction-text ml40 color-gray">' . $effect . '分</span>';
                    ?>
                </div>
                <div id="post_operative" class="mt20 comment ">
                    <strong>医生态度</strong>
                    <?php
                    $doctorAttitude = $commentInfo->doctorAttitude;
                    for ($i = 1; $i < 6; $i++) {
                        if ($i <= $doctorAttitude) {
                            echo '<i class="fa fa-star active ml40 "></i>';
                        } else {
                            echo '<i class="fa fa-star-o ml40 "></i>';
                        }
                    }
                    echo '<span class="fraction-text ml40 color-gray">' . $doctorAttitude . '分</span>';
                    ?>
                </div>
                <div class="mt100"><?php echo $commentInfo->commentText; ?></div>
                <div class="text-right mt50">评价日期：<?php echo date('Y年m月d日', strtotime($commentInfo->dateCreated)); ?></div>
            </div>

        </div>
    </div>
</div>
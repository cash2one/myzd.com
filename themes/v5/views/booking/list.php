<?php
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/user100.min.css");
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/bookingList.min.js', CClientScript::POS_END);
$urlBookingView = $this->createUrl('booking/view');
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlBookingList = $this->createUrl('booking/list');
$bookinglist = $data->results;
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
        <div class="col-sm-9">
            <div>
                <img class="img-responsive" src="http://static.mingyizhudao.com/146277800063795">
            </div>
            <div class="bookinglist border-gray mt10">
                <table class="table">
                    <thead>
                        <tr>
                            <td class="text-center">订单号</td>
                            <td class="text-center">就诊人</td>
                            <td class="text-center">意向就诊专家</td>
                            <td class="pad8">状态</td>
                            <td class="text-center">操作</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($bookinglist) {
                            foreach ($bookinglist as $booking) {
                                ?>
                                <tr id="<?php echo $booking->id; ?>">
                                    <td class="text-center"><?php echo $booking->refNo; ?></td>
                                    <td class="text-center"><?php echo $booking->contact_name; ?></td>
                                    <td>
                                        <div class="ml15"><?php echo $booking->expertName == '' ? '' : $booking->expertName . ' - '; ?><?php echo $booking->hpDeptName; ?></div>
                                        <div class="ml15"><?php echo $booking->hpName == '' ? '无' : $booking->hpName; ?></div>
                                    </td>
                                    <td class="">
                                        <div class="color-red bkStatus"><?php echo $booking->bkStatus; ?></div>
                                        <div><a target="_blank" href="<?php echo $this->createUrl('booking/userBooking', array('id' => $booking->id)); ?>" class="color-status">详情</a></div>
                                    </td>
                                    <td class="text-center bookOperate">
                                        <?php
                                        if ($booking->bkStatusId == StatCode::BK_STATUS_NEW || $booking->bkStatusId == StatCode::BK_STATUS_PROCESSING) {
                                            ?>
                                            <a class="color-status" data-id="<?php echo $booking->id; ?>" data-href="<?php echo $this->createUrl('booking/cancelbook', array('id' => $booking->id)); ?>" data-toggle="modal" data-target="#cancelOrder">取消订单</a>
                                            <?php
                                        } else if ($booking->bkStatusId == StatCode::BK_STATUS_SERVICE_PAIDED) {
                                            echo '<a target="_blank" class="color-status" href="' . $this->createUrl('comment/create', array('bookingId' => $booking->id)) . '" >评价</a>';
                                        } else if ($booking->bkStatusId == StatCode::BK_STATUS_DONE) {
                                            if ($booking->bkComment == 1) {
                                                echo '<a target="_blank" class="color-status" href="' . $this->createUrl('comment/view', array('bookingId' => $booking->id)) . '" >查看评价</a>';
                                            }
                                        } else {
                                            echo '—';
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo '<tr><td colspan="5">暂无预约</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="cancelOrder" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="cancelOrder">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center">提示</h4>
                </div>
                <div class="modal-body">
                    <h4 class="text-center color-green">您好！您确认要取消订单吗？</h4>
                    <div class="text-center mt40">
                        <a class="btn btn-default mr20 pl20 pr20" data-dismiss="modal">取消</a>
                        <a id="cancelSubmit" class="btn btn-yes pl20 pr20">确认</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

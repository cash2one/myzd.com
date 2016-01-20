<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time());
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
                <img class="img-responsive" src="<?php echo $urlResImage; ?>user/process.png">
            </div>
            <div class="bookinglist border-green mt10">
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
                                        if ($booking->bkStatusId == 1) {
                                            ?>
                                            <a class="color-status" data-id="<?php echo $booking->id; ?>" data-href="<?php echo $this->createUrl('booking/cancelbook', array('id' => $booking->id)); ?>" data-toggle="modal" data-target="#cancelOrder">取消订单</a>
                                            <?php
                                        } else {
                                            echo '—';
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }
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
<script>
    $(document).ready(function () {
        $('#cancelOrder').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var href = button.attr('data-href');
            var booingId = button.attr('data-id');
            $('#cancelSubmit').attr({'data-href': href, 'data-id': booingId});
        });
        $('#cancelSubmit').click(function (e) {
            e.preventDefault();
            var urlSubmit = $(this).attr('data-href');
            var trId = '#' + $(this).attr('data-id');
            $.ajax({
                url: urlSubmit,
                success: function (data) {
                    if (data.status == 'ok') {
                        $('#cancelOrder').modal('hide');
                        $(trId).find('.bkStatus').text('已取消');
                        $(trId).find('.bookOperate').html('—');
                        
                    }
                }
            });
        });
    });
</script>
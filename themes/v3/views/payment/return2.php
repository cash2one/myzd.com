<?php
// $payment IMrBookingPayment
?>

<h2>付款成功！</h2>
<div class="mt30 pb50">
    <dl class="dl-horizontal">
        <dt>订单号：</dt>
        <dd><?php echo $payment->getRef(); ?></dd>
        <dt>付款金额：</dt>
        <dd>￥<?php echo $payment->getPaidAmount(); ?></dd>
        <dt>付款日期：</dt>
        <dd><?php echo $payment->getPaidDate(); ?></dd>
        <dt>付款方式：</dt>
        <dd><?php echo $payment->getPayMethod(); ?></dd>
    </dl>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/pingpp-html5-master/example-wap/styles/pinus.css">
<?php $urlResImage = Yii::app()->theme->baseUrl . "/images/"; ?>
<style>
    #site-header .dis-index{display:none;}
    .h3{font-size: 20px;}
    .color-green{font-weight: bold;}
    .order-content{padding: 10px 0;border-bottom: 1px solid #888;color: #000;font-weight:bold;}
    .order-content span{display: inline-block;width: 8em;}
    .form-horizontal .checkbox{text-align: center;}
    .form-horizontal .checkbox a{text-decoration: underline;color: #19aea5;}
    .ch{text-align:center;}
    .up{background-color:#e4e4e4;border:1px solid #ddd!important;border-radius:10px;background-position:center;background-repeat:no-repeat;width:190px!important;margin:5px auto 0!important;padding:10px!important;}
    .alipay{background-image: url(<?php echo $urlResImage; ?>icons/ic-alipay.png);}
    .yeepay{background-image: url(<?php echo $urlResImage; ?>icons/ic-yeepay.png);}
</style>

<?php
//$this->show_header = false;
//$this->show_footer = false;
$this->show_baidushangqiao = false;
$payUrl = $this->createAbsoluteUrl('payment/doPingxxPay');
$refUrl = $this->createAbsoluteUrl('order/view');

?>
<div class="container">
    <div class="h3 text-center">订单</div>
    <div class="divider"></div>
    <div class="order-content"><span class="color-green">订单号:</span><?php echo $model->ref_no ?></div>
    <div class="order-content"><span class="color-green">订单标题:</span><?php echo $model->subject ?></div>
    <div class="order-content">
        <div class="color-green mb5">订单详情:</div>
        <?php echo $model->description ?>
    </div>
    <div class="order-content"><span class="color-green">金额:</span><?php echo $model->final_amount ?>元</div>
    <div class="order-content"><span class="color-green">订单状态:</span><?php echo ($model->is_paid) == 1 ? '已支付' : '待支付'; ?></div>
    <div class="mt40">
        <form class="form-horizontal">
            <div class="checkbox hide">
                <label>
                    <input type="checkbox" checked> 同意名医主刀《<a href="<?php echo $this->createUrl('site/page', array('view' => 'terms')); ?>">患者服务条款</a>》
                </label>
            </div>
            <input id="ref_no" type="hidden" name="order[ref_no]" value="<?php echo $model->ref_no; ?>" />
        </form>
    </div>
	<!--<div class="form-group text-center mt15">
                <button id="pay" type="button" class="btn btn-yes btn-lg">确认并支付</button>
    </div>-->
	<?php
    //if ($model->is_paid == 0) {
	if ($model->ref_no == 'test' || $model->is_paid == 0) {
        ?>
        <section class="block">
            <div class="content2">
                <div class="app">
                    <div class="ch">
                        <!--<span class="up" onclick="wap_pay('upacp_wap')">银联 WAP</span>-->
                        <!--<span class="up" onclick="wap_pay('alipay_pc_direct')">支付宝 即时到账</span>-->
                        <span class="up alipay" onclick="wap_pay('alipay_wap')">&nbsp;</span>
                        <!--<span class="up" onclick="wap_pay('bfb_wap')">百度钱包 WAP</span>-->
                        <!--<span class="up" onclick="wap_pay('jdpay_wap')">京东支付 WAP</span>-->
                        <span class="up yeepay" onclick="wap_pay('yeepay_wap')">&nbsp;</span>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    ?>
</div>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/pingpp-html5-master/src/pingpp.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/pingpp-html5-master/src/pingpp-pc.js"></script>
<script type="text/javascript" src="https://one.pingxx.com/lib/pingpp_one.js"></script>

<script type="text/javascript">
    function wap_pay(channel) {
        var refNo = document.getElementById('ref_no').value;

        var url = "<?php echo $payUrl; ?>";
        var refUrl = "<?php echo $refUrl . '?refno='; ?>" + refNo;
        var xhr = new XMLHttpRequest();
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-type", "application/json");
        xhr.send(JSON.stringify({
            order_no: refNo,
            channel: channel,
            ref_url: refUrl
        }));

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
//                dataText = xhr.responseText;
//                data = dataText.parseJSON();
                data = eval('(' + xhr.responseText + ')');
                console.log(data);
                if (data.channel === 'alipay_pc_direct') {
                    pingppPc.createPayment(xhr.responseText, function (result, err) {
//                        console.log(result);
//                        console.log(err);
                    });
                } else {
                    pingpp.createPayment(xhr.responseText, function (result, err) {
//                        console.log(result);
//                        console.log(err);
                    });
                }


            }
        };
    }
</script>
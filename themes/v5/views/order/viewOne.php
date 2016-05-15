<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time());
$urlBookingList = $this->createUrl('booking/list');
?>
<style>
    #site-header .dis-index{display:none;}
    .h3{font-size: 20px;}
    .color-green{font-weight: bold;}
    /*    .order-content{padding: 10px 0;border-bottom: 1px solid #888;color: #000;font-weight:bold;}
        .order-content span{display: inline-block;width: 8em;}*/
    .form-horizontal .checkbox{text-align: center;}
    .form-horizontal .checkbox a{text-decoration: underline;color: #19aea5;}
    .ch{text-align:center;}
    .up{border:1px solid #ddd!important;border-radius:10px;background-position:center;background-repeat:no-repeat;width:190px!important;margin:5px auto 0!important;padding:10px!important;}
    .alipay{background-image: url(<?php echo $urlResImage; ?>icons/ic-alipay.png);}
    .yeepay{background-image: url(<?php echo $urlResImage; ?>icons/ic-yeepay.jpg);}
    .open-code-area{opacity:0.7;width:350px;height:250px;position:fixed;left:41%;bottom:40%;border:1px solid #efefef;border-radius:5px;z-index:99;background-color:#333;padding:0 10px;display:none;}
    .open-code-area .cancel{font-size:24px;color:#fff;display:inline-block;}
    .open-code-area .cancel:hover{cursor:pointer;}
    .ml30{margin-left:30px;}
    .mt5{margin-top:5px;}
    .img_wx_pub_qr>canvas{border:3px solid #fff;}
    /*    .img_wx_pub_qr{border:3px solid #fff;}*/
</style>

<?php
//$this->show_header = false;
//$this->show_footer = false;
$this->show_baidushangqiao = false;
$refno = $model->getRefNo();
$payUrl = $this->createAbsoluteUrl('pay/payment/doPingxxPay');  // url of creating payment request.

$refUrl = $this->createAbsoluteUrl('order/view', array('refno' => $refno)); // 
//$currentUrl = Yii::app()->request->getHostInfo() . Yii::app()->request->getUrl();    // url of this currently requested page.

function isClientWeixin() {
    $ua = $_SERVER['HTTP_USER_AGENT'];
    $wxStr = 'micromessenger';
    return stripos($ua, $wxStr) > 0; // ignore case.
}

//$refno = $_GET['refno'];
// 有待优化。openid 应该从sessin获取。
if (isClientWeixin()) {
    //  $openid = $this->getSession("wx.openid");
    //if(isset($openid)){
    if (isset($_GET['openid'])) {
        $openid = $_GET['openid'];
        // echo 'openid:<br>';
        // echo $openid;
        // exit;
    } else {
        //$urlGetWxCode = 'http://mingyizhudao.com/weixin/getWxCodeTest';
        $urlGetWxCode = 'http://mingyizhudao.com/weixin/getopenid.php?returnUrl=' . urlencode($refUrl);
        //header('Location: ' . $urlGetWxCode);
        // echo $urlGetWxCode;exit;
    }
}
?>
<div class="bg-green">
    <div class="container">
        <div class="user-crumbs">
            <a href="<?php echo Yii::app()->homeUrl; ?>">首页</a>
            >
            <a href="<?php echo $urlBookingList; ?>">个人中心</a>
            >
            <span>支付页面</span>
        </div>
    </div>
</div>
<div class="container" id="order-view">
    <div class="order-main-content mt30">
        <div class="order-title">订单支付</div>
        <div class="order-detail mt20"><span>订单详情</span></div>
        <div class="order-content">
            <div><span>订单金额：</span><span><?php echo $model->final_amount ?>元</span></div>
            <div><span>订单编号：</span><span><?php echo $model->ref_no ?></span></div>
            <div><span>患者姓名：</span><span><?php echo $model->patient_name ?></span></div>
            <div><span>联系方式：</span><span><?php echo $model->patient_mobile ?></span></div>
            <div><span>预约专家：</span><span><?php echo $model->expected_doctor_name ?>（<?php echo $model->expected_hospital_name ?> - <?php echo $model->expected_hp_dept_name ?>）</span></div>
        </div>
        <div class="order-divider mt20 mb20"></div>
        <?php
        if ($model->is_paid == 0) {
            ?>
            <div class="text18">请选择付款方式</div>
            <div class="mt40">
                <form class="form-horizontal">
                    <div class="radio row">
                        <div class="col-sm-4">
                            <label>
                                <input class="input-radio" type="radio" name="optionsRadios" id="optionsRadios1" value="wx_pub_qr" checked>
                                <img class="mt-5" src="<?php echo $urlResImage; ?>user/order/weixin.png">
                            </label>
                        </div>
                        <div class="col-sm-4 text-center">
                            <label>
                                <input class="input-radio" type="radio" name="optionsRadios" id="optionsRadios2" value="alipay_pc_direct">
                                <img class="mt-5" src="<?php echo $urlResImage; ?>user/order/ic-alipay.png">
                            </label>
                        </div>
                        <div class="col-sm-4 text-center">
                            <label>
                                <input class="input-radio" type="radio" name="optionsRadios" id="optionsRadios3" value="yeepay_wap">
                                <img class="mt-5" src="<?php echo $urlResImage; ?>user/order/ic-yeepay.png">
                            </label>
                        </div>
                    </div>

                    <div class="form-group text-center mt50">
                        <button  type="button" class="btn btn-yes btn-lg" id="pay-certain-btn">确定</button>
                    </div>
                    <?php
                }else{
                ?>
                    付款成功
                <?php }?>
                <input id="ref_no" type="hidden" name="order[ref_no]" value="<?php echo $model->ref_no; ?>" />
            </form>
        </div>
        <div class="open-code-area">
            <div class="text-right"><span class="cancel">&times;</span></div>
            <div class="text-center"><span class="color-white text-center">请打开微信，扫描以下二维码以完成付款</span></div> 
            <div class="color-white text-center img_wx_pub_qr mt15"></div>
            <div class="color-white text-center mt5">还剩<span class="test"></span>秒</div>
        </div>
        <div class="order-divider mt50 mb20"></div>
        <div class="order-statement">
            <div>声明：</div>
            <div>1. 请您付款务必阅读《名医主刀在线服务协议》</div>
            <div>2. 名医主刀会为您的隐私全程保密。</div>
            <div>3. 因专家个人原因（如出国参加会议）无法按原有协商时间赴约的，名医助手会在第一时间与您沟通其他时间，或者为您推荐其他同级别专家名医。该情况不算违约。</div>
        </div>
    </div>
</div>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/pingpp-html5-master/src/pingpp.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/pingpp-html5-master/src/pingpp-pc.js"></script>
<script type="text/javascript" src="https://one.pingxx.com/lib/pingpp_one.js"></script>
<script type="text/javascript" src="http://cdn.staticfile.org/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>

<script type="text/javascript">
    $(".btn-lg").click(function () {
        $(".btn-lg").attr("disabled", true);
        var timer = 30;
        timerId = setInterval(function () {
            timer--;
            if (timer > 0) {
                $('.test').html(timer);
            } else {
                $('.open-code-area').hide();
                clearInterval(timerId);
                timerId = null;
                $(".btn-lg").attr("disabled", false);
                 location.reload();   
            }
        }, 1000);

        var refNo = document.getElementById('ref_no').value;

        var channel = $('input:radio[name=optionsRadios]:checked').val();


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
                if (channel == 'wx_pub_qr') {
                    $(".open-code-area").show();
                    jQuery('.img_wx_pub_qr').text('');
                    var img_wx_pub_qr = data.credential.wx_pub_qr;
                    jQuery('.img_wx_pub_qr').qrcode({width: 130, height: 130, correctLevel: 0, text: img_wx_pub_qr});
//                   $("#img_wx_pub_qr").attr('src',jQuery('.code').qrcode({width: 200, height: 200, correctLevel: 0, text: img_wx_pub_qr})); 
//                    $("#img_wx_pub_qr").attr('src',jQuery('.code').qrcode({width: 200, height: 200, correctLevel: 0, text: img_wx_pub_qr})); 
                }

            }
        };


    });
    $(".open-code-area .cancel").click(function () {
        clearInterval(timerId);
        timerId = null;
        $(".btn-lg").attr("disabled", false);
        $(".open-code-area").hide();
        location.reload();   
    });

</script>
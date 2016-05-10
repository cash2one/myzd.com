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
</style>

<?php
//$this->show_header = false;
//$this->show_footer = false;
$this->show_baidushangqiao = false;
$refno = $model->getRefNo();
$payUrl = $this->createAbsoluteUrl('payment/doPingxxPay');  // url of creating payment request.
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
        <div class="text18">请选择付款方式</div>
        <div class="mt40">
            <form class="form-horizontal">
                <div class="radio">
                    <div class="col-sm-4">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            <img class="mt-5" src="<?php echo $urlResImage; ?>user/order/weixin.png">
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            <img class="mt-5" src="<?php echo $urlResImage; ?>user/order/ic-alipay.png">
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                            <img class="mt-5" src="<?php echo $urlResImage; ?>user/order/ic-yeepay.png">
                        </label>
                    </div>
                </div>
                <?php
                if ($model->is_paid == 0) {
                    ?>
                    <div class="form-group text-center mt50">
                        <button  type="button" class="btn btn-yes btn-lg">确定</button>
                    </div>
                    <?php
                }
                ?>
                <input id="ref_no" type="hidden" name="order[ref_no]" value="<?php echo $model->ref_no; ?>" />
            </form>
        </div>
        <div class="order-divider mt50 mb20"></div>
        <div class="order-statement">
            <div>声明：</div>
            <div>1. 请您付款务必阅读《名医主刀在线服务协议》</div>
            <div>2. 名医主刀会为您的隐私全程保密。</div>
            <div>3. 因专家个人原因（如出国参加会议）无法按原有协商时间赴约的，名医助手会在第一时间与您沟通其他时间，或者为您推荐其他同级别专家名医。该情况不算违约。</div>
        </div>
    </div>


    <!--    <div class="h3 text-center">订单</div>
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
    <?php
    if ($model->is_paid == 0) {
        ?>
                                                <div class="form-group text-center mt15">
                                                    <button id="pay" type="button" class="btn btn-yes btn-lg">去支付</button>
                                                </div>
        <?php
    }
    ?>
                <input id="ref_no" type="hidden" name="order[ref_no]" value="<?php echo $model->ref_no; ?>" />
            </form>
        </div>-->
</div>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/pingpp-html5-master/src/pingpp.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/pingpp-html5-master/src/pingpp-pc.js"></script>
<!--<script type="text/javascript" src="https://one.pingxx.com/lib/pingpp_one.js"></script>-->
<!--<script type="text/javascript" src="http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/pingpp-one/pingpp-one.js"></script>-->

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
//    var orderno = document.getElementById('ref_no').value;
//    var amount = 0.01;
//    document.getElementById('pay').addEventListener('click', function (e) {
//        pingpp_one.init({
//            app_id: 'app_SWv9qLSGWj1GKqbn', //该应用在ping++的应用ID
//            order_no: orderno, //订单在商户系统中的订单号
//            amount: amount * 100, //订单价格，单位：人民币 分
//            // 壹收款页面上需要展示的渠道，数组，数组顺序即页面展示出的渠道的顺序
//            // upmp_wap 渠道在微信内部无法使用，若用户未安装银联手机支付控件，则无法调起支付                
//            // channel: ['alipay_wap', 'wx_pub', 'yeepay_wap', 'upacp_wap', 'jdpay_wap', 'bfb_wap'],
//            //channel: ['alipay_wap', 'wx_pub', 'yeepay_wap'], //'wx_pub'
//            channel: ['alipay_wap', 'yeepay_wap'],
//            charge_url: "<?php echo $payUrl; ?>", //商户服务端创建订单的url              
//            charge_param: {ref_url: "<?php echo $refUrl; ?>"}, //(可选，用户自定义参数，若存在自定义参数则壹收款会通过 POST 方法透传给 charge_url)
//            //open_id: 'o9D7bsrlWC5ecKJdSuyVAYLedjVc'                             //(可选，使用微信公众号支付时必须传入)
//            open_id: ""
//        }, function (res) {
//            console.log("res data...");
//            console.log(res);
//            //   alert(res.msg);
//            if (!res.status) {
//                //处理错误
//                console.log(res);
//                //alert(res.msg);
//            }
//            else {
//                //若微信公众号渠道需要使用壹收款的支付成功页面，则在这里进行成功回调，调用 pingpp_one.success 方法，你也可以自己定义回调函数
//                //其他渠道的处理方法请见第 2 节
//                pingpp_one.success(function (res) {
//                    if (!res.status) {
//                        alert(res.msg);
//                    }
//                }, function () {
//                    //这里处理支付成功页面点击“继续购物”按钮触发的方法，例如：若你需要点击“继续购物”按钮跳转到你的购买页，则在该方法内写入 window.location.href = "你的购买页面 url"
//                    //window.location.href = 'http://yourdomain.com/payment_succeeded';//示例
//                    alert("支付成功的跳转");
//                });
//            }
//        });
//    });
</script>
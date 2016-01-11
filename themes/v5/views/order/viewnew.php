<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time());
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
?>
<div class="bg-green">
    <div class="container">
        <div class="user-crumbs">
            <a href="">首页</a>
            >>
            <a href="">个人中心</a>
            >>
            <a href="">预约单</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt40">
        <div class="col-sm-3">
            <div class="login-menu mb20">
                <a href="">
                    <div class="personalcenter">
                        <div class="row">
                            <div class="col-sm-5">

                            </div>
                            <div class="col-sm-7">
                                <h4>你好！</h4>
                                <div>12345678912</div>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="mt10 border-green">
                    <ul>
                        <li><a class="bookinglist active" href="#"><span class="icon-img"></span>我的预约单</a></li>
                        <li><a class="settings" href="#"><span class="icon-img"></span>账号设置</a></li>
                        <li class="last"><a class="back" href="#">问题反馈<span class="icon-img"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-9 payment">
            <div class="user-header pl20">
                <div class="color-status">预约单：MY151116734265</div>
                <div>
                    <h4 class="text-center color-green text20">
                        <span>状态：等待支付预约金1000元</span>

                    </h4>

                </div>
                <div class="text-center text-red">*该费用术前专家咨询费、第一次面诊费(如有需要，安排面诊)和手术相关安排费用</div>
            </div>
            <div class="pb40 border-green mt10">         
                <div class="pl20 pr20">
                    <div class="mt50">
                        <div>目前名医主刀网站已开通支付宝、易宝支付，您可以选择适合您的支付方式。</div>
                    </div>
                    <div>
                        <h4 class="mt40">请选择付款方式：</h4>
                        <div class="radio mt40">
                            <label>
                                <input type="radio" name="paytype" id="paytype1" value="alipay">
                                <img src="<?php echo $urlResImage; ?>icons/ic-alipay.png"/>
                            </label>
                            <label class="ml40">
                                <input type="radio" name="paytype" id="paytype2" value="yeepay">
                                <img src="<?php echo $urlResImage; ?>icons/ic-yeepay.png"/>
                            </label>
                        </div>
                        <div class="mt50">
                            <a href="<?php echo $this->createUrl('booking/success') ?>" class="btn btn-yes">立即支付</a>
                            <a href="<?php echo $this->createUrl('booking/view') ?>" class="ml20 link-gray">暂不支付</a>
                        </div>
                    </div>
                    <div class="divider mt40"></div>
                    <div class="color-statement lineheight2-5em mt10">声明:<br/>1. 请您付款务必阅读《名医主刀在线服务协议》<br/>
                        2. 名医主刀会为您的隐私全程保密。<br/>
                        3. 因专家个人原因（如出国参加会议）无法按原有协商时间赴约的，名医助手会在第一时间与您沟通其他时间，或者为您推荐其他同级别专家名医。该情况不算违约。</div>
                </div>
            </div>
        </div>
    </div>
</div>
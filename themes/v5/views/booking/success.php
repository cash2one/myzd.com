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
        <div class="col-sm-9 paySuccess">
            <div class="user-header pl20">
                <div>&nbsp;</div>
                <div>
                    <h4 class="text-center color-green text20">
                        <span class="pr10">状态：对接专家中... <img src="<?php echo $urlResImage; ?>user/phone.png"></span>
                        <span class="detail"data-toggle="tooltip" data-placement="right" title="*对接情况我们将会客服及时通知">详情</span>
                    </h4>

                </div>
                <div class="text-right color-status mr30">注解:点击详情单出红色框，在详情位置！</div>
            </div>
            <div class="pb40 border-green mt10">              
                <div>
                    <h3 class="text-center color-green"><img src="<?php echo $urlResImage; ?>user/TKCG.png"> 1000元预约金支付成功</h3>
                    <div class="text-center">预约单：MY151116734265</div>
                    <div>
                        <div class="pl70">您的预约单详情如下：</div>
                        <div class="bookingInfo">
                            <ul>
                                <li>患者姓名：哈哈哈</li>
                                <li>联系方式：177****1111</li>
                                <li>身份证号：123456********1234</li>
                                <li>意向专家：王小明</li>
                                <li>意向医院：南京医科大学附属南京市妇幼保健院</li>
                                <li>意向会诊时间：11月11日-11月11日</li>
                                <li>疾病名称：脑子被门挤了</li>
                                <li>疾病描述：呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵</li>
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
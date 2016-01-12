<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time());
$urlOrderView = $this->createUrl('order/viewnew');
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
        <div class="col-sm-9 bookingView">
            <div class="user-header pl20">
                <div class="color-status">预约单：MY151116734265</div>
                <div>
                    <h4 class="text-center color-green text20">
                        <span>状态：等待支付预约金1000元</span>
                        <a target="_blank" href="<?php echo $this->createUrl('order/viewnew'); ?>" class="pay-btn btn btn-yes">立即支付</a>
                    </h4>

                </div>
                <div class="text-center text-red">*该费用术前专家咨询费、第一次面诊费(如有需要，安排面诊)和手术相关安排费用</div>
            </div>
            <div class="pb40 border-green mt10 pl20 pr20">
                <div class="pt10"> 
                    <div class="pull-right">
                        <a class="color-status mr10" href=""><span class="mr10">修改</span>|<span class="pl10">完成</span></a>
                    </div>
                </div>
                <div>
                    <div class="row mt30">
                        <div class="col-md-4 border-right">
                            <div class="pl20 mt30">
                                <div class="bookingInfo">预约专家：哈哈哈</div>
                                <div class="bookingInfo">意向科室：口腔科</div>
                                <div class="bookingInfo">意向医院：南京医科大学附属南京市妇幼保健院</div>
                                <div class="bookingInfo">意向会诊时间：11月11日-11月11日</div>
                            </div>
                        </div>
                        <div class="col-md-4 border-right">
                            <div class="pl20 mt30">
                                <div class="bookingInfo">患者姓名：呵呵呵</div>
                                <div class="bookingInfo">联系方式：11012340000</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pl20 mt30">
                                <div class="bookingInfo">疾病名称：神经病刚出院</div>
                                <div class="bookingInfo">疾病描述：哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈</div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="pl20 mrfile mt40">
                        <div>
                            <span class="strong text18">上传病历</span>
                            <span>(影像资料、检查报告、门诊病历、住院病历、出院小结等病史资料)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
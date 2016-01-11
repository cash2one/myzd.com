<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time());
$urlBookingView = $this->createUrl('booking/view');
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
                                <h4 class="color-25aea6">你好！</h4>
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
        <div class="col-sm-9">
            <div>
                <img class="img-responsive" src="<?php echo $urlResImage; ?>user/process.png">
            </div>
            <div class="bookinglist border-green mt10">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <td>订单号</td>
                            <td>就诊人</td>
                            <td>意向就诊专家</td>
                            <td>状态</td>
                            <td>操作</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">PB15102096900001</td>
                            <td class="text-center">哈哈哈</td>
                            <td>
                                <div class="ml15">许建屏专家团队 - 心血管科</div>
                                <div class="ml15">南京医科大学附属南京市妇幼保健院</div>
                            </td>
                            <td class="">
                                <div class="color-red">待付预约金</div>
                                <div><a target="_blank" href="<?php echo $urlBookingView; ?>" class="color-status" href="">详情</a></div>
                            </td>
                            <td class="text-center"><a class="color-status" href="javascript:;" data-toggle="modal" data-target="#cancelOrder">取消订单</a></td>
                        </tr>
                        <tr>
                            <td class="text-center">PB15102096900001</td>
                            <td class="text-center">哈哈哈</td>
                            <td>
                                <div class="ml15">许建屏专家团队 - 心血管科</div>
                                <div class="ml15">南京医科大学附属南京市妇幼保健院</div>
                            </td>
                            <td class="">
                                <div class="color-red">待付预约金</div>
                                <div><a class="color-status" href="">详情</a></div>
                            </td>
                            <td class="text-center"><a class="color-status" href="javascript:;" data-toggle="modal" data-target="#cancelOrder">可申请退款</a></td>
                        </tr>
                        <tr>
                            <td class="text-center">PB15102096900001</td>
                            <td class="text-center">哈哈哈</td>
                            <td>
                                <div class="ml15">许建屏专家团队 - 心血管科</div>
                                <div class="ml15">南京医科大学附属南京市妇幼保健院</div>
                            </td>
                            <td class="">
                                <div class="color-status">完成</div>
                                <div><a class="color-status" href="">详情</a></div>
                            </td>
                            <td class="text-center"><a class="color-status" href="javascript:;" data-toggle="modal" data-target="#cancelOrder">可申请退款</a></td>
                        </tr>
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
                    <div class="text-center">
                        <a class="btn btn-default" data-dismiss="modal">取消</a>
                        <a class="btn btn-yes">确认</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
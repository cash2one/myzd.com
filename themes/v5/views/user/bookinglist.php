<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/vendor/jquery.ui.widget.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/jquery.iframe-transport.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/vendor/load-image.all.min.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/jquery.fileupload.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/jquery.fileupload-process.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/jquery.fileupload-image.js', CClientScript::POS_HEAD);
?>
<style>
    #bookinglist .login-menu{text-align: center;}
    #bookinglist .personalcenter-title{padding:10px 0;font-size: 15px;color:#fff;border: 1px solid #19aea5;background-color: #19aea5;text-align: center;}
    #bookinglist .login-menu ul{padding: 0;margin-bottom: 0;}
    #bookinglist .login-menu ul>li{border-bottom: 1px solid #ddd;padding: 0 10px;}
    #bookinglist .login-menu ul>li>a{display:block;padding: 10px 0;font-size: 12px;}
    #bookinglist .login-menu ul>li.last{border: 0;}
    #bookinglist .login-menu ul>li.active{background-color: #e4e4e4;}
    #bookinglist .login-menu ul .menu-header{text-align: left;font-size: 15px;font-weight: bold;padding: 10px 10px;}
    @media screen and (min-width:768px){#bookinglist .bookinginfo ul{width: 470px;margin: 0 auto;}}
    #bookinglist .pad15{padding: 15px;}
    #bookinglist .table>thead>tr>td{font-weight: bold;font-size: 15px;}
    #bookinglist .table>tbody>tr>td{vertical-align: middle;font-size: 12px;}
    #bookinglist .text-blue{color: #00f;}
    #bookinglist .text-gray{color:#9fa0a0;}
    #bookinglist .bookinginfo{display: none;}
    #bookinglist .bookinginfo .booking-title{padding:10px 20px 10px 40px;background-color: #e4e4e4;color: #19aea5;}
    #bookinglist .bookinginfo .booking-title a{color: #19aea5;}
    #bookinglist .bookinginfo .booking-title>.remind-text{font-size: 12px;color: #333;padding-left: 15px;}
    #bookinglist .bookinginfo ul{margin-top: 20px;font-size: 16px;}
    #bookinglist .bookinginfo ul>li{padding: 10px 0;font-size: 12px;letter-spacing: 3px;font-weight: bold;}
    #bookinglist .bookinginfo ul>li>a{color:#00f;margin-left: 20px;display: inline-block;}
    #bookinglist .uploadcase .case-item{padding: 20px 0;}
    #bookinglist .uploadcase .case-item img{border: 1px solid #e4e4e4;display: block;margin: 0 auto;width: 130px;height: 130px;}
    #bookinglist .uploadcase .case-item .add{overflow: hidden;background-color: #fff;color: #ddd;border: 1px solid #e4e4e4;text-align: center;width: 130px;height: 130px;margin: 0 auto;}
    #bookinglist .uploadcase .case-item .add>.fa{vertical-align: middle;font-size: 60px;padding: 35px 0;}
    #bookinglist .uploadcase .case-item .add:hover{color: #19aea5;border-color: #19aea5;}
    #bookinglist .uploadcase .case-item .add input[type=file]{width: 130px;height: 130px;position: absolute;top: 20px;margin: 0;opacity: 0;-ms-filter: 'alpha(opacity=0)';}
    #bookinglist .uploadcase .case-item .delete{text-align: center;margin-top: 10px;}
    #bookinglist .uploadcase .case-item .delete>a{color: #00f;}
</style>
<div class="container" id="bookinglist">
    <div class="row">
        <div class="col-sm-3">
            <div class="login-menu mb20">
                <a href="">
                    <div class="personalcenter-title">
                        个人中心
                    </div>
                </a>
                <div class="mt10 border-gary">
                    <ul>
                        <li class="menu-header">预约单</li>
                        <li class="active"><a href="#">查看预约单</a></li>
                        <li class="menu-header">个人信息</li>
                        <li><a href="#">修改个人信息</a></li>
                        <li class=""><a href="#">修改密码</a></li>
                        <li class="last"><a href="#">添加常用联系人</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="bookinglist">
                <div class="personalcenter-title">
                    所 有 预 约 单
                </div>
                <div class="border-gary pad15">
                    <table class="table">
                        <thead class="text-center">
                            <tr>
                                <td>订单号</td>
                                <td>姓名</td>
                                <td>就诊专家</td>
                                <td>意向就诊时间</td>
                                <td>操作</td>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td class="text-blue">NO.1234</td>
                                <td>哈哈</td>
                                <td>上海第一人民医院 - 口腔科 - 王晓杰</td>
                                <td>8月1日-9月1日</td>
                                <td>
                                    <div><a href="#" class="details text-blue">详情</a></div>
                                    <div class="text-gray">(可补充上传病历)</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-blue">NO.1234</td>
                                <td>哈哈哈</td>
                                <td>上海第一人民医院 - 口腔科 - 王晓杰</td>
                                <td>8月1日-9月1日</td>
                                <td>
                                    <div><a href="#" class="details text-blue">详情</a></div>
                                    <div class="text-gray">(可补充上传病历)</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="bookinginfo">
                <div class="personalcenter-title">
                    预 约 单 详 情
                </div>
                <div class="border-gary">
                    <div class="">
                        <div class="booking-title">
                            <span><a href="javascript:;" class="back">< 返回</a></span>
                            <span class="pull-right">预约单 : 1234</span>
                        </div>
                        <ul>
                            <li>
                                <span>姓名 :</span> 李小白
                            </li>
                            <li>
                                <span>年龄 :</span> 100岁
                            </li>
                            <li>
                                <span>性别 :</span> 女
                            </li>
                            <li>
                                <span>联系方式 :</span> 88888888888
                            </li>
                            <li>
                                <span>身份证 :</span> 888888888888888888
                            </li>
                            <li>
                                <span>预约就诊日期 :</span> 8月1日-8月7日
                            </li>
                            <li>
                                <div><span>预约就诊专家 :</span>王达 | 口腔科 | 上海交通大学附属新华医院</div>
                            </li>
                        </ul>
                        <div class="booking-title">
                            <span>上传病历 </span>
                            <span class="remind-text">  (病症部位、检查报告单、诊断报告单以及病历等其他病情资料)</span>
                        </div>
                        <div class="row uploadcase">
                            <div class="col-sm-8 col-sm-offset-2 pb20">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="case-item">
                                            <div><img src="<?php echo $urlResImage; ?>loading/loading.gif"/></div>
                                            <div class="delete"><a href="javascript:;" >删除</a></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="case-item">
                                            <div>
                                                <a href="javascript:;">
                                                    <div class="add">
                                                        <i class="fa fa-plus"></i><input id="fileupload" type="file" name="file" multiple>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="delete"><a href="javascript:;" >添加</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <span class="btn btn-yes">提 交</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $(".details").click(function () {
                $(".bookinglist").hide();
                $(".bookinginfo").show();
            });
            $(".back").click(function () {
                $(".bookinglist").show();
                $(".bookinginfo").hide();
            });
        });
    </script>
</div>
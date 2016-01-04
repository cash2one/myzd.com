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
    .login-menu{text-align: center;}
    .personalcenter-title{padding:10px 0;font-size: 15px;color:#fff;border: 1px solid #19aea5;background-color: #19aea5;text-align: center;}
    .login-menu ul{padding: 0;margin-bottom: 0;}
    .login-menu ul>li{border-bottom: 1px solid #ddd;padding: 0 10px;}
    .login-menu ul>li>a{display:block;padding: 10px 0;font-size: 12px;}
    .login-menu ul>li.last{border: 0;}
    .login-menu ul>li.active{background-color: #e4e4e4;}
    .login-menu ul .menu-header{text-align: left;font-size: 15px;font-weight: bold;padding: 10px 10px;}
    @media screen and (min-width:768px){.bookinginfo ul{width: 470px;margin: 0 auto;}.bookinginfo ul>li span{width: 30%;display: inline-block;}}

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
                        <li><a href="#">查看预约单</a></li>
                        <li class="menu-header">个人信息</li>
                        <li><a href="#">修改个人信息</a></li>
                        <li class="active"><a href="#">修改密码</a></li>
                        <li class="last"><a href="#">添加常用联系人</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="bookinglist">
                <div class="personalcenter-title">
                    修 改 密 码
                </div>
                <div class="border-gary mt10">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <form class="form-horizontal mt20">
                                <div class="row form-success hide">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <span>密码修改成功<i class="fa fa-check"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-4 control-label">当前密码：</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" maxlength="45" name="name" id="name" type="password" placeholder="请输入当前密码">
                                        <div class="errorMessage" id="name_em_" style="display:none"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-4 control-label">新密码：</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" maxlength="45" name="name" id="name" type="password" placeholder="请输入新密码">
                                        <div class="errorMessage" id="name_em_" style="display:none"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-4 control-label">确认新密码：</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" maxlength="45" name="name" id="name" type="password" placeholder="请再次输入新密码">
                                        <div class="errorMessage" id="name_em_" style="display:none"></div>
                                    </div>
                                </div>


                                <div class="form-group mt30">
                                    <div class="col-sm-4 col-sm-offset-4">         		
                                        <div class="btn btn-yes abs-btn">提 交</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
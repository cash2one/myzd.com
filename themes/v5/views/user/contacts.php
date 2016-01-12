<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
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
    .pad15{padding: 15px;}
    .contactslist .table>tbody{border-bottom: 1px solid #e4e4e4;}
    .contactslist .table>thead>tr>td{font-weight: bold;font-size: 15px;}
    .contactslist .table>tbody>tr>td{vertical-align: middle;font-size: 12px;line-height: 2em;padding: 8px 0;}
    .contactslist .btn{padding: 5px 20px;}
    .defaultcontact{color: #f00;}
    .text-blue{color: #00f;}
    .text-gray{color:#9fa0a0;}
    .tdcheckbox{padding-left: 20px!important;}
    .tdcheckbox input[type=checkbox]{position: absolute;margin-left: -19px;margin-top: 6px;}
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
                        <li class=""><a href="#">查看预约单</a></li>
                        <li class="menu-header">个人信息</li>
                        <li><a href="#">修改个人信息</a></li>
                        <li class=""><a href="#">修改密码</a></li>
                        <li class="last active"><a href="#">添加常用联系人</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="contactslist">
                <div class="personalcenter-title">
                    常 用 联 系 人
                </div>
                <div class="border-gary pad15">
                    <table class="table">
                        <thead class="text-center">
                            <tr>
                                <td class="text-left">选择</td>
                                <td>姓名</td>
                                <td>年龄</td>
                                <td>性别</td>
                                <td>身份证</td>
                                <td>联系方式</td>
                                <td>操作</td>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="contacts-item" data-id="1">
                                <td class="text-left">
                                    <input class="checkbox" type="checkbox" value="1">
                                </td>
                                <td>哈哈哈1</td>
                                <td>99</td>
                                <td>男</td>
                                <td>888888888888888888</td>
                                <td>88888888888</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <span><a href="">修改</a></span>
                                        </div>

                                        <div class="col-sm-6 text-center">
                                            <span class="defaultcontact">默认联系人</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="contacts-item" data-id="2">
                                <td class="text-left">
                                    <input class="checkbox" type="checkbox" value="2">
                                </td>
                                <td>哈哈哈2</td>
                                <td>99</td>
                                <td>男</td>
                                <td>888888888888888888</td>
                                <td>88888888888</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <span><a href="">修改</a></span>
                                        </div>

                                        <div class="col-sm-6 text-center">
                                            <span class=""><a href="">设为默认</a></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="contacts-item" data-id="3">
                                <td class="text-left">
                                    <input class="checkbox" class="test" type="checkbox" value="3">
                                </td>
                                <td>哈哈哈3</td>
                                <td>99</td>
                                <td>男</td>
                                <td>888888888888888888</td>
                                <td>88888888888</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <span><a href="">修改</a></span>
                                        </div>

                                        <div class="col-sm-6 text-center">
                                            <span class=""><a href="">设为默认</a></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left tdcheckbox">
                                    <input class="checkall" type="checkbox" value="-1">全选
                                </td>
                                <td><a class="contactsdelete" href="#">删除</a></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(".checkall").click(function () {
            $('input[type=checkbox]').prop('checked', $(this).prop('checked')); 
        });
        $(".contactsdelete").click(function(){
            $('.checkbox').each(function(){
                if($(this).prop('checked')){
                    $value = $(this).val();
                    $(".contacts-item").each(function(){
                        $dataId = $(this).attr('data-id');
                        if($dataId==$value){
                            $(this).remove();
                        }
                    });
                }
            });
        });
    });
</script>
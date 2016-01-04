<style>
    .login-menu{text-align: center;}
    .personalcenter-title{padding:10px 0;font-size: 15px;color:#fff;border: 1px solid #19aea5;background-color: #19aea5;text-align: center;}
    .login-menu ul{padding: 0;margin-bottom: 0;}
    .login-menu ul>li{border-bottom: 1px solid #ddd;padding: 0 10px;}
    .login-menu ul>li>a{display:block;padding: 10px 0;font-size: 12px;}
    .login-menu ul>li.last{border: 0;}
    .login-menu ul>li.active{background-color: #e4e4e4;}
    .login-menu ul .menu-header{text-align: left;font-size: 15px;font-weight: bold;padding: 10px 10px;}
    .personalinfo h1{font-weight: 100;}
    .personalinfo ul{margin-top: 20px;font-size: 16px;}
    .personalinfo ul>li{padding: 5px 0;font-size: 12px;letter-spacing: 3px;font-weight: bold;}
    .prompt{color: #999999;padding: 30px;}
    .prompt a{color: #00f;}
    .text-red{color: #f00;}
</style>
<div class="container">
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
                        <li class=""><a href="#">修改个人信息</a></li>
                        <li><a href="#">修改密码</a></li>
                        <li class="last active"><a href="#">添加常用联系人</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="personalcenter-title">
                添 加 常 用 联 系 人
            </div>
            <div class="border-gary pl30 pt30 pb30">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-3">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="" class="col-sm-3 col-md-2 control-label">姓名:</label>
                                <div class="col-sm-6 controls">
                                    <input class="form-control" maxlength="45" name="name" id="name" type="text" placeholder="请输入姓名">
                                    <div class="errorMessage" id="name_em_" style="display:none"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 col-md-2 control-label">年龄:</label>
                                <div class="col-sm-6 controls">
                                    <input class="form-control" maxlength="3" name="age" id="age" type="text" placeholder="请输入年龄">
                                    <div class="errorMessage" id="age_em_" style="display:none"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 col-md-2 control-label">性别:</label>
                                <div class="col-sm-6 controls">
                                    <select class="form-control"name="gender" id="gender" >
                                        <option value="1">男</option>
                                        <option value="0">女</option>
                                    </select>
                                    <div class="errorMessage" id="gender_em_" style="display:none"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 col-md-2 control-label">身份证:</label>
                                <div class="col-sm-6 controls">
                                    <input class="form-control" maxlength="18" name="idcard" id="idcard" type="text" placeholder="请输入身份证号">
                                    <div class="errorMessage" id="idcard_em_" style="display:none"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 col-md-2 control-label">手机:</label>
                                <div class="col-sm-6 controls">
                                    <input class="form-control" maxlength="11" name="idcard" id="idcard" type="text" placeholder="请输入手机号号码">
                                    <div class="errorMessage" id="idcard_em_" style="display:none"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="col-sm-3 col-md-2 control-label"></label>
                                <div class="col-sm-3 controls">
                                    <button type="submit" class="btn btn-yes btn-block" name="">提&nbsp;交</button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $(".tochangeinfo").click(function () {
                $(".infodisplay").hide();
                $(".changeinfo").show();
            });
        });
    </script>
</div>
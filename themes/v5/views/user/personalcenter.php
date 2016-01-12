<style>
    .login-menu{text-align: center;}
    .login-menu .personalcenter{padding:10px 0;font-size: 15px;color:#fff;border: 1px solid #19aea5;background-color: #19aea5;}
    .login-menu ul{padding: 0;margin-bottom: 0;}
    .login-menu ul>li{border-bottom: 1px solid #ddd;padding: 0 10px;}
    .login-menu ul>li>a{display:block;padding: 10px 0;font-size: 12px;}
    .login-menu ul>li.last{border: 0;}
    .login-menu ul>li.active{background-color: #e4e4e4;}
    .login-menu ul .menu-header{text-align: left;font-size: 15px;font-weight: bold;padding: 10px 10px;}
    .personalcenter-title{padding:10px 0;font-size: 15px;color:#fff;border: 1px solid #19aea5;background-color: #19aea5;text-align: center;}
    .personalinfo{min-height: 295px;}
    .prompt{color: #999999;padding: 30px;}
    .prompt a{color: #e60a0a;}
    .changeinfo{display: none;}
    .text-red{color: #f00;}
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="login-menu mb20">
                <a href="">
                    <div class="personalcenter">
                        个人中心
                    </div>
                </a>
                <div class="mt10 border-gary">
                    <ul>
                        <li class="menu-header">预约单</li>
                        <li><a href="#">查看预约单</a></li>
                        <li class="menu-header">个人信息</li>
                        <li class="active"><a href="#">修改个人信息</a></li>
                        <li><a href="#">修改密码</a></li>
                        <li class="last"><a href="#">添加常用联系人</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="infodisplay personalinfo border-gary pl30">
                <h2 class="mt30">您好！ <span>111****1111</span></h2>
                <div class="divider"></div>
                
                <div class="prompt mt20">
                    *为了更快更好地为您精准找到专家，请填写真实姓名和身份证号。
                    <div class="mt10">
                        <a class="tochangeinfo" href="javascript:void(0);">去完善个人信息>></a>
                    </div>
                </div>
            </div>
            <div class="changeinfo border-gary pb30">
                <div class="personalcenter-title">
                    修 改 个 人 信 息
                </div>
                <div class="row mt30">
                    <div class="col-sm-10 col-md-offset-2 col-sm-offset-1">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="" class="col-sm-3 col-md-2 control-label">姓名:</label>
                                <div class="col-sm-6 col-md-5 controls">
                                    <input class="form-control" maxlength="45" name="name" id="name" type="text" placeholder="哈哈">
                                    <div class="errorMessage" id="name_em_" style="display:none"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 col-md-2 control-label">年龄:</label>
                                <div class="col-sm-6 col-md-5 controls">
                                    <input class="form-control" maxlength="3" name="age" id="age" type="text" placeholder="100">
                                    <div class="errorMessage" id="age_em_" style="display:none"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 col-md-2 control-label">性别:</label>
                                <div class="col-sm-6 col-md-5 controls">
                                    <select class="form-control"name="gender" id="gender" >
                                        <option value="1">男</option>
                                        <option value="0" selected>女</option>
                                    </select>
                                    <div class="errorMessage" id="gender_em_" style="display:none"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 col-md-2 control-label">身份证:</label>
                                <div class="col-sm-6 col-md-5 controls">
                                    <input class="form-control" maxlength="18" name="idcard" id="idcard" type="text" placeholder="888888888888888888">
                                    <div class="errorMessage" id="idcard_em_" style="display:none"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label text-red">*为了更快更好地为您精准找到专家，请填写真实姓名和身份证号。</label>
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
        $(document).ready(function(){
            $(".tochangeinfo").click(function(){
                $(".infodisplay").hide();
                $(".changeinfo").show();
            });
        });
    </script>
</div>
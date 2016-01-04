<style>
    .login-menu{text-align: center;}
    .personalcenter-title{padding:10px 0;font-size: 15px;color:#fff;border: 1px solid #19aea5;background-color: #19aea5;text-align: center;}
    .login-menu ul{padding: 0;margin-bottom: 0;}
    .login-menu ul>li{border-bottom: 1px solid #ddd;padding: 0 10px;}
    .login-menu ul>li>a{display:block;padding: 10px 0;font-size: 12px;}
    .login-menu ul>li.last{border: 0;}
    .login-menu ul>li.active{background-color: #e4e4e4;}
    .login-menu ul .menu-header{text-align: left;font-size: 15px;font-weight: bold;padding: 10px 10px;}
    .personalinfo{padding: 5px 15px 15px 15px;}
    @media screen and (min-width:768px){.personalinfo{width: 470px;margin: 0 auto;}}
    .personalinfo ul{margin-top: 20px;font-size: 16px;}
    .personalinfo ul>li{padding: 10px 0;font-size: 12px;letter-spacing: 3px;font-weight: bold;}
    .personalinfo ul>li>span{color:#9fa0a0;margin: 0 10px;}
    .personalinfo ul>li>a{color:#00f;margin-left: 20px;display: inline-block;}
    .text-red{color: #f00;font-size: 12px;}
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
                        <li class="active"><a href="#">修改个人信息</a></li>
                        <li class=""><a href="#">修改密码</a></li>
                        <li class="last"><a href="#">添加常用联系人</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="personalcenter-title">
                个 人 信 息
            </div>
            <div class="border-gary pb30">
                <div class="personalinfo">
                    <ul>
                        <li>
                            登录名 : 123****8909
                        </li>
                        <li>
                            姓名 : 李小白
                        </li>
                        <li>
                            年龄 : 100岁
                        </li>
                        <li>
                            性别 : 女
                        </li>
                        <li>
                            身份证 : 888888888888888888
                        </li>
                        <li>
                            联系方式 : 88888888888
                            <span>已验证</span>
                            <a href="#">修改手机号</a>
                        </li>
                        <li>
                            密码 : ********
                            <a href="#">修改密码</a>
                        </li>
                    </ul>
                </div>
                <div class="text-red text-center">*为了让我们更快更好地为您找到专家，请填写真实姓名和身份证号。</div>
                <div class="text-center mt20">
                    <a href='#' class="btn btn-yes">补 充 资 料</a>
                </div>
            </div>
        </div>
    </div>
</div>
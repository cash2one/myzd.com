<?php
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.form.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.validate.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . "/js/custom/login.js", CClientScript::POS_HEAD);
$siteMenu = $this->loadSiteMenu();
$facultyMenu = $siteMenu["faculty"];
$aboutusMenu = $this->loadSiteMenu()["site"];
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$loginUrl = $this->createUrl('user/login');
$ajaxLoginUrl = $this->createUrl('user/ajaxLogin');
$registerUrl = $this->createUrl('user/register');
$urlLogout = $this->createUrl('user/logout');
$bookinglist = $this->createUrl('booking/list');
?>
<section id="site-header" class="container-fluid">
    <div class="container-fluid bg-gray home-top">
        <div class="row">
            <div class="container">
                <div class="pull-left hidden-sm phone"><span class="site-phone">400-119-7900</span></div>
                <div class="pull-right " >
                    <?php
                    $user = $this->getCurrentUser();
                    if (isset($user)) {
                        echo '<span class="user">您好！&nbsp;<a target="_blank" href="' . $bookinglist . '">' . $user->getUsername() . '</a>&nbsp;</span>|<a href="' . $urlLogout . '">&nbsp;退出&nbsp;</a>|<a target="_blank" href="' . $bookinglist . '">&nbsp;我的手术&nbsp;|</a>';
                    } else {
                        echo '<span class="user">您好！&nbsp;请&nbsp;<a data-toggle="modal" data-target="#loginModal">登陆</a>/<a target="_blank" href="' . $registerUrl . '">注册</a>&nbsp;</span>|';
                    }
                    ?>
                    <a>&nbsp;快速预约&nbsp;|</a><a>&nbsp;下载APP</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="row">
            <div class="container mt30 mb20">
                <nav class="navbar navbar-default bg-white no-border" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo Yii::app()->homeUrl; ?>"><img src="<?php echo $urlResImage; ?>icons/logo.png"></a>
                    </div> 
                    <div class="collapse navbar-collapse" id="header-navbar-collapse">                
                        <ul id="header-nav" class="nav navbar-nav mt5">
                            <li class="dropdown dropdown-hover">
                                <a id="header-nav-home" href="<?php echo Yii::app()->homeUrl; ?>" class="dropdown-toggle">首页</a>
                            </li>
                            <li class="dropdown dropdown-hover">
                                <a id="header-nav-hospital" href="#" class="dropdown-toggle">名医榜单</a>
                            </li>
                            <li class="dropdown dropdown-hover">
                                <a id="header-nav-aboutus" href="#" class="dropdown-toggle">顶尖科室</a>
                            </li>
                            <li class="dropdown dropdown-hover">
                                <a id="header-nav-aboutus" href="#" class="dropdown-toggle">手术直通车</a>
                            </li>
                            <li class="dropdown dropdown-hover">
                                <a id="header-nav-aboutus" href="<?php echo $aboutusMenu["aboutus"]["url"]; ?>" class="dropdown-toggle">关于我们</a>
                            </li>
                        </ul>
                    </div>											
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="loginModal">登录</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal mt40" id="login-form" data-action="<?php echo $ajaxLoginUrl; ?>" data-url-account ="<?php echo $bookinglist; ?>" data-url-logout="<?php echo $urlLogout; ?>" method="post">
                    <div class="form-group">
                        <label class="col-sm-3 control-label required" for="UserLoginForm_username">用户名 <span class="required">*</span></label>                
                        <div class="col-sm-8">
                            <input class="form-control" placeholder="输入手机号" name="UserLoginForm[username]" id="UserLoginForm_username" type="text">                        
                            <div class="errorMessage" id="UserLoginForm_username_em_" style="display:none"></div>                    
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label required" for="UserLoginForm_password">登录密码 <span class="required">*</span></label>
                        <div class="col-sm-8">
                            <input class="form-control" autocomplete="off" placeholder="输入密码" name="UserLoginForm[password]" id="UserLoginForm_password" type="password">                    
                            <div class="errorMessage" id="UserLoginForm_password_em_" style="display:none"></div>                    
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-3">   
                            <input id="ytUserLoginForm_rememberMe" type="hidden" value="0" name="UserLoginForm[rememberMe]">
                            <input class="radio-checkbox" name="UserLoginForm[rememberMe]" id="UserLoginForm_rememberMe" value="1" type="checkbox">                        
                            <label class="radio-label" for="UserLoginForm_rememberMe">下次记住我</label>
                            <div class="errorMessage" id="UserLoginForm_rememberMe_em_" style="display:none"></div>
                            <div class="pull-right hide">
                                <a class="nostyle strong" href="/mingyizhudao/user/forgetPassword">&gt;&gt;忘记密码？</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt30 mb30">
                        <div class="col-sm-offset-3 col-sm-6">
                            <span id="btnSubmit" class="btn btn-yes btn-lg btn-block">登录</span>			
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

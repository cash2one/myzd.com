<?php
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.form.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.validate.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . "/js/custom/login.js", CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . "/js/custom/register.js", CClientScript::POS_HEAD);
$siteMenu = $this->loadSiteMenu();
$facultyMenu = $siteMenu["faculty"];
$aboutusMenu = $this->loadSiteMenu()["site"];
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$loginUrl = $this->createUrl('user/login');
$ajaxLoginUrl = $this->createUrl('user/ajaxLogin');
$ajaxRegisterUrl = $this->createUrl('user/ajaxRegister');
$urlGetSmsVerifyCode = $this->createAbsoluteUrl('/auth/sendSmsVerifyCode');
$authActionType = AuthSmsVerify::ACTION_USER_REGISTER;
$registerUrl = $this->createUrl('user/register');
$urlLogout = $this->createUrl('user/logout');
$bookinglist = $this->createUrl('booking/list');
$urlDownloadApp = $this->createUrl('download/app');
$urlDoctorSearch = $this->createUrl('doctor/top', array('disease_category' => 1));
$urlHopitalSearch = $this->createUrl('hospital/top', array('disease_category' => 1));
$urlZhiTongChe = $this->createUrl('site/page', array('view' => 'zhitongche'));
$urlTerms = $this->createUrl('site/page', array('view' => 'help', 'page' => 'terms'));
?>
<section id="site-header">
    <div class="container-fluid bg-gray home-top hidden-xs">
        <div class="row">
            <div class="container">
                <div class="pull-left hidden-sm phone"><span class="site-phone">400-119-7900</span></div>
                <div class="pull-right " >
                    <?php
                    $user = $this->getCurrentUser();
                    if (isset($user)) {
                        echo '<span class="user">您好！&nbsp;<a target="_blank" href="' . $bookinglist . '">' . $user->getUsername() . '</a>&nbsp;</span>|<a id="logout" href="' . $urlLogout . '">&nbsp;退出&nbsp;</a>|<a target="_blank" href="' . $bookinglist . '">&nbsp;我的手术&nbsp;|</a>';
                    } else {
                        echo '<span class="user">您好！&nbsp;请&nbsp;<a data-toggle="modal" data-target="#loginModal">登陆</a>/<a target="_blank" data-toggle="modal" data-target="#registerModal">注册</a>&nbsp;</span>|';
                    }
                    ?>
                    <a data-toggle="modal" data-target="#qucikbookingModal">&nbsp;快速预约&nbsp;</a>|<a target="_blank" href="<?php echo $urlDownloadApp; ?>">&nbsp;下载APP</a>
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
                                <a id="header-nav-hospital" href="<?php echo $urlDoctorSearch; ?>" class="dropdown-toggle" target="_blank">名医榜单</a>
                            </li>
                            <li class="dropdown dropdown-hover">
                                <a id="header-nav-aboutus" href="<?php echo $urlHopitalSearch; ?>" class="dropdown-toggle" target="_blank">顶尖科室</a>
                            </li>
                            <li class="dropdown dropdown-hover">
                                <a id="header-nav-aboutus" href="<?php echo $urlZhiTongChe; ?>" class="dropdown-toggle" target="_blank">手术直通车</a>
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
<?php $this->renderPartial('//booking/quickBookingModal'); ?>
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
                            <div class="Message" id="UserLoginForm_username_em_" style="display:none"></div>                    
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label required" for="UserLoginForm_password">登录密码 <span class="required">*</span></label>
                        <div class="col-sm-8">
                            <input class="form-control" autocomplete="off" placeholder="输入密码" name="UserLoginForm[password]" id="UserLoginForm_password" type="password">                    
                            <div class="Message" id="UserLoginForm_password_em_" style="display:none"></div>                    
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-3">   
                            <input id="ytUserLoginForm_rememberMe" type="hidden" value="0" name="UserLoginForm[rememberMe]">
                            <input class="radio-checkbox" name="UserLoginForm[rememberMe]" id="UserLoginForm_rememberMe" value="1" type="checkbox">                        
                            <label class="radio-label" for="UserLoginForm_rememberMe">下次记住我</label>
                            <div class="Message" id="UserLoginForm_rememberMe_em_" style="display:none"></div>
                            <div class="pull-right hide">
                                <a class="nostyle strong" href="/mingyizhudao/user/forgetPassword">&gt;&gt;忘记密码？</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt30 mb30">
                        <div class="col-sm-offset-3 col-sm-6">
                            <span id="btnLoginSubmit" class="btn btn-yes btn-lg btn-block">登录</span>			
                        </div>
                        <div class="col-sm-offset-7 col-sm-4 mt20">
                            <a id="toReg" class="text-right">没有账号？马上注册</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="loginModal">注册</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" id="register-form" action="<?php echo $ajaxRegisterUrl; ?>" method="post">
                    <div>
                        <input type="hidden" value="<?php echo $urlGetSmsVerifyCode; ?>" name="smsverify[actionUrl]" id="smsverify_actionUrl">
                        <input type="hidden" value="<?php echo $authActionType; ?>" name="smsverify[actionType]" id="smsverify_actionType">
                        <input class="hide" type="text">
                        <input class="hide" type="password">
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label required" for="UserRegisterForm_username">手机号 <span class="required">*</span></label>    
                        <div class="col-sm-8 controls">
                            <input class="form-control" maxlength="11" placeholder="请输入有效的中国手机号码" name="UserRegisterForm[username]" id="UserRegisterForm_username" type="number">        
                            <div class="Message" id="UserRegisterForm_username_em_" style="display: none;"></div>    </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="padright0 col-sm-3 col-md-3 control-label">验证码:</label>
                        <div class="col-sm-8 controls">
                            <div class="input-group">
                                <input class="form-control" maxlength="6" name="UserRegisterForm[verify_code]" id="UserRegisterForm_verify_code" type="number">            
                                <div id="btn-sendRegSmsCode" class="btn input-group-addon  btn-verifycode">获取验证码</div>
                            </div>
                            <div class="Message" id="UserRegisterForm_verify_code_em_" style="display:none"></div>    </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label required" for="UserRegisterForm_password">登录密码 <span class="required">*</span></label>    
                        <div class="col-sm-8 controls">
                            <input class="form-control" autocomplete="off" maxlength="40" placeholder="4至20位英文或数字" name="UserRegisterForm[password]" id="UserRegisterForm_password" type="password">                    
                            <div class="Message" id="UserRegisterForm_password_em_" style="display:none"></div>    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label required" for="UserRegisterForm_password_repeat">确认密码 <span class="required">*</span></label>    
                        <div class="col-sm-8 controls">
                            <input class="form-control" autocomplete="off" placeholder="请再次输入密码" name="UserRegisterForm[password_repeat]" id="UserRegisterForm_password_repeat" type="password">                    
                            <div class="Message" id="UserRegisterForm_password_repeat_em_" style="display:none"></div>    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-8 controls">
                            <div class="checkbox pull-left">
                                <label class="radio-label">
                                    <input id="ytUserRegisterForm_terms" type="hidden" value="0" name="UserRegisterForm[terms]"><input class="radio-checkbox" value="1" name="UserRegisterForm[terms]" id="UserRegisterForm_terms" checked="checked" type="checkbox">同意名医主刀<a class="nostyle" href="<?php echo $urlTerms; ?>" target="_blank">《在线服务条款》</a>
                                </label>
                            </div>
                            <div class="clearfix"></div>
                            <div class="Message" id="UserRegisterForm_terms_em_" style="display:none"></div>    </div>
                    </div>
                    <div class="form-group mt30 mb30">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button id="btnRegisterSubmit" type="button" class="btn btn-yes btn-lg btn-block">注册</button>			
                        </div>
                        <div class="col-sm-offset-7 col-sm-4 mt20">
                            <a id="toLogin" class="text-right">已有账号？去登录</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#btn-sendRegSmsCode").click(function (e) {
            e.preventDefault();
            sendRegSmsVerifyCode($(this));
        });
        $('#toReg').click(function () {
            $('#loginModal').modal('hide');
            $('#registerModal').modal();
        });
        $('#toLogin').click(function () {
            $('#registerModal').modal('hide');
            $('#loginModal').modal();
        });
    });

    function sendRegSmsVerifyCode(domBtn) {
        var domMobile = $("#UserRegisterForm_username");
        var mobile = domMobile.val();
        if (mobile.length === 0) {
            $("#UserRegisterForm_username-error").remove();
            $("#UserRegisterForm_username").after('<div id="UserRegisterForm_username-error" class="error">请输入手机号码</div>');
        } else if (domMobile.hasClass("error")) {
            // mobile input field as , so do nothing.
        } else {
            buttonTimerStart(domBtn, 60000);
            $domForm = $("#register-form");
            var actionUrl = $domForm.find("input[name='smsverify[actionUrl]']").val();
            var actionType = $domForm.find("input[name='smsverify[actionType]']").val();
            var formData = new FormData();
            formData.append("AuthSmsVerify[mobile]", mobile);
            formData.append("AuthSmsVerify[actionType]", actionType);
            $.ajax({
                type: 'post',
                url: actionUrl,
                data: formData,
                dataType: "json",
                processData: false,
                contentType: false,
                'success': function (data) {
                    if (data.status === true) {
                        //domForm[0].reset();
                    }
                    else {
                        console.log(data);
                    }
                },
                '': function (data) {
                    console.log(data);
                },
                'complete': function () {
                }
            });
        }
    }
</script>

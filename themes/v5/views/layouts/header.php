<?php
//Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.form.js', CClientScript::POS_END);
//Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.validate.min.js', CClientScript::POS_END);
//Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . "/js/custom/login.js", CClientScript::POS_HEAD);
//Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . "/js/custom/login_verifycode.js", CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . "/js/custom/login_quickbooking.min.js", CClientScript::POS_END);
$siteMenu = $this->loadSiteMenu();
$headerMenu = $this->getHeaderMenu();
$facultyMenu = $siteMenu["faculty"];
$aboutusMenu = $siteMenu["site"];
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$loginUrl = $this->createUrl('user/login');
$ajaxLoginUrl = $this->createUrl('user/ajaxLogin');
$ajaxRegisterUrl = $this->createUrl('user/ajaxRegister');
$ajaxCaptchaCode = $this->createUrl('site/valiCaptcha');
$urlGetSmsVerifyCode = $this->createAbsoluteUrl('/auth/sendSmsVerifyCode');
$authActionType = AuthSmsVerify::ACTION_USER_LOGIN;
$registerUrl = $this->createUrl('user/register');
$urlLogout = $this->createUrl('user/logout');
$bookinglist = $this->createUrl('booking/list');
$urlDownloadApp = $this->createUrl('download/app');
$urlDoctorSearch = $this->createUrl('doctor/top', array('disease_sub_category' => 1));
$urlHopitalSearch = $this->createUrl('hospital/top', array('disease_sub_category' => 1));
$urlZhiTongChe = $this->createUrl('site/page', array('view' => 'zhitongche'));
$urlTerms = $this->createUrl('site/page', array('view' => 'help', 'page' => 'terms'));
$urlHelp = $this->createUrl('site/page', array('view' => 'help'));
$urlForgetPassword = $this->createUrl('user/forgetPassword');
if (($this->action->controller->id == 'user') && ($this->action->id == 'register')) {
    $returnUrl = $this->createUrl('site/index');
} else {
    $returnUrl = '';
}
?>
<style>.input-group-addon.icon{padding:0px;background-color:#fff;width:9%;}.close{opacity:1;}.login-form .form-control{height:40px;}.ml40{margin-left:40px;}</style>
<section id="site-header">
    <div class="container-fluid bg-gray home-top hidden-xs">
        <div class="row">
            <div class="container relative">
                <div class="pull-left hidden-sm phone"><span class="site-phone">400-6277-120</span></div>
                <div class="pull-right " >
                    <?php
                    $user = $this->getCurrentUser();
                    if (isset($user)) {
                        echo '<span class="user">您好！&nbsp;<a target="_blank" href="' . $bookinglist . '">' . $user->getUsername() . '</a>&nbsp;</span> | <a id="logout" href="' . $urlLogout . '">&nbsp;退出&nbsp;</a> | <a target="_blank" href="' . $bookinglist . '">&nbsp;我的手术&nbsp;</a> | ';
                    } else {
                        echo '<span class="user">您好！&nbsp;请&nbsp;<a data-toggle="modal" data-target="#loginModal">登录</a>/<a target="_blank" href="' . $registerUrl . '">注册</a>&nbsp;</span> |';
                    }
                    ?>
                    <a data-toggle="modal" data-target="#qucikbookingModal">&nbsp;快速预约&nbsp;</a>
                    |
                    <a href="<?php echo $this->createUrl('download/app'); ?>">&nbsp;下载关注&nbsp;</a>
                    <!--                    <div id="qrcode" class="tooltip bottom">
                                            <div class="tooltip-arrow"></div>
                                            <div class="tooltip-inner">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <a href="https://itunes.apple.com/cn/app/id1001032594" target="_blank">
                                                            <img src="<?php //echo $urlResImage;        ?>icons/ios-download.png"/>
                                                            <div class="mt5 text-center"><i class="fa fa-apple"></i> IOS</div>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <a href="http://android.myapp.com/myapp/detail.htm?apkName=com.mingyizhudao.app" target="_blank">
                                                            <img src="<?php //echo $urlResImage;        ?>icons/android-download.png"/>
                                                            <div class="mt5 text-center"><i class="fa fa-android"></i> Android</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                    |
                    <a target="_blank" href="<?php echo $urlHelp; ?>">&nbsp;常见问题</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt50">
        <div class="row">
            <div class="container mt20 mb20">
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
                        <ul id="header-nav" class="nav navbar-nav mt5 ml40">
                            <?php
                            $curView = Yii::app()->request->getParam('view');
                            foreach ($headerMenu as $key => $menuItem) {
                                if (($this->action->controller->id == 'doctor') && ($key == 'doctor') && ($this->action->id == 'top')) {
                                    echo '<li class="dropdown dropdown-hover active">' . CHtml::link('' . $menuItem['label'], $menuItem['url'], array('class' => '')) . '</li>';
                                } else if (($this->action->controller->id == 'hospital') && ($key == 'hospital') && ($this->action->id == 'top')) {
                                    echo '<li class="dropdown dropdown-hover active">' . CHtml::link('' . $menuItem['label'], $menuItem['url'], array('class' => '')) . '</li>';
                                } else if (($this->action->controller->id == 'site') && ($key == 'home') && ($this->action->id == 'index')) {
                                    echo '<li class="dropdown dropdown-hover active">' . CHtml::link('' . $menuItem['label'], $menuItem['url'], array('class' => '')) . '</li>';
                                } else if (($this->action->controller->id == 'site') && ($key == 'mygy') && ($this->action->id == 'mygy')) {
                                    echo '<li class="dropdown dropdown-hover active">' . CHtml::link('' . $menuItem['label'], $menuItem['url'], array('class' => '')) . '</li>';
                                } else if (($this->action->controller->id == 'site') && ($key == 'aboutus') && ($curView == 'bigevents' || $curView == 'news' || $curView == 'mingyizhuyi' || $curView == 'joinus')) {
                                    echo '<li class="dropdown dropdown-hover active">' . CHtml::link('' . $menuItem['label'], $menuItem['url'], array('class' => '')) . '</li>';
                                } else if ($key == $curView) {
                                    echo '<li class="dropdown dropdown-hover active">' . CHtml::link('' . $menuItem['label'], $menuItem['url'], array('class' => '')) . '</li>';
                                } else {
                                    echo '<li class="dropdown dropdown-hover">' . CHtml::link('' . $menuItem['label'], $menuItem['url'], array('target' => '_blank')) . '</li>';
                                }
                            }
                            ?>
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
            <div class="modal-body">
                <div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row mb40 mt40">
                    <div class="col-md-6 col-sm-6 hidden-xs text-center">
                        <img src="<?php echo $urlResImage; ?>user/heart.png"/>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="login-form">
                            <h3 class="color-green lettersp5">感谢您选择名医主刀!</h3>
                            <div class="login-change mt30"><span class="phone-login active">手机号快速登录</span><span class="account-login">帐号密码登录</span></div>
                            <form class="form-horizontal mt10" id="login-form" data-action="<?php echo $ajaxLoginUrl; ?>" data-url-account ="<?php echo $bookinglist; ?>" data-url-logout="<?php echo $urlLogout; ?>" data-url-return="<?php echo $returnUrl; ?>" method="post" autocomplete="off">
                                <div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <div class="input-group-addon icon"><img src="<?php echo $urlResImage; ?>user/user-icon.png"/></div>
                                                <input class="form-control" placeholder="输入手机号" maxlength="11" name="UserLoginForm[username]" id="UserLoginForm_username" type="text"/>                        
                                            </div>
                                            <div class="Message" id="UserLoginForm_username_em_" style="display:none"></div>                    
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <div class="input-group-addon icon"><img src="<?php echo $urlResImage; ?>user/password.png"/></div> 
                                                <input class="form-control" autocomplete="off" placeholder="输入密码" name="UserLoginForm[password]" id="UserLoginForm_password" type="password" />                    
                                            </div>
                                            <div class="Message" id="UserLoginForm_password_em_" style="display:none"></div>                    
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">   
                                        <input class="radio-checkbox" name="UserLoginForm[rememberMe]" id="UserLoginForm_rememberMe" value="1" type="checkbox">                        
                                        <label class="radio-label" for="UserLoginForm_rememberMe">下次记住我</label>
                                        <div class="Message" id="UserLoginForm_rememberMe_em_" style="display:none"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 text-right">
                                        <a class="" href="<?php echo $urlForgetPassword; ?>" target="_blank">忘记密码</a>
                                    </div>
                                    <div class="col-sm-12 mt10">
                                        <span id="btnLoginSubmit" class="btn btn-yes btn-lg btn-block">登录</span>			
                                    </div>
                                    <div class="col-sm-12 mt10 text-right">
                                        <a id="toReg" href="<?php echo $registerUrl; ?>" class="text-right" target="_blank">没有账号？马上注册</a>
                                    </div>
                                </div>
                            </form>
                            <form class="form-horizontal mt10" id="login-verifycode-form" data-action="<?php echo $ajaxLoginUrl; ?>" data-url-account ="<?php echo $bookinglist; ?>" data-url-logout="<?php echo $urlLogout; ?>" data-url-return="<?php echo $returnUrl; ?>" method="post" autocomplete="off">
                                <input type="hidden" value="<?php echo $urlGetSmsVerifyCode; ?>" name="smsverify[actionUrl]" id="smsverify_actionUrl">
                                <input type="hidden" value="<?php echo $authActionType; ?>" name="smsverify[actionType]" id="smsverify_actionType">
                                <div class="form-group">
                                    <div class="col-sm-12 controls">
                                        <div class="input-group">
                                            <div class="input-group-addon icon"><img src="<?php echo $urlResImage; ?>user/user-icon.png"/></div>              
                                            <input class="form-control" placeholder="输入手机号" maxlength="11" name="UserVerifyCodeLoginForm[username]" id="UserVerifyCodeLoginForm_username" type="text">                        
                                        </div>
                                        <div class="Message" id="UserVerifyCodeLoginForm_username_em_" style="display:none"></div>                    
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-12 controls">
                                        <div class="input-group">
                                            <div class="input-group-addon icon"><img src="<?php echo $urlResImage; ?>user/number.png"/></div> 
                                            <input class="form-control" maxlength="6" placeholder="请输入图形验证码" name="UserVerifyCodeLoginForm[captcha_code]" id="UserVerifyCodeLoginForm_captcha_code" type="text">            
                                            <div class="input-group-addon vailcodeImg"><a href="javascript:void(0);"><img class="vailcode" src="<?php echo $this->createUrl('site/getCaptcha'); ?>" onclick="this.src = '<?php echo $this->createUrl('site/getCaptcha'); ?>/' + Math.random()"></a></div>

                                            <!--<div id="btn-sendLoginSmsCode" class="btn input-group-addon  btn-verifycode">获取验证码</div>-->
                                        </div>
                                        <div class="Message" id="UserVerifyCodeLoginForm_verify_code_em_" style="display:none"></div>    
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12 controls">
                                        <div class="input-group">
                                            <div class="input-group-addon icon"><img src="<?php echo $urlResImage; ?>user/number.png"/></div> 
                                            <input class="form-control" maxlength="6" placeholder="请输入验证码" name="UserVerifyCodeLoginForm[verify_code]" id="UserVerifyCodeLoginForm_verify_code" type="text">            
                                            <div id="btn-sendLoginSmsCode" class="btn input-group-addon  btn-verifycode">获取验证码</div>
                                        </div>
                                        <div class="Message" id="UserVerifyCodeLoginForm_verify_code_em_" style="display:none"></div>    
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">   
                                        <input class="radio-checkbox" name="UserVerifyCodeLoginForm[rememberMe]" id="UserVerifyCodeLoginForm_rememberMe" value="1" type="checkbox">                        
                                        <label class="radio-label" for="UserVerifyCodeLoginForm_rememberMe">下次记住我</label>
                                        <div class="Message" id="UserVerifyCodeLoginForm_rememberMe_em_" style="display:none"></div>

                                    </div>
                                </div>
                                <div class="form-group mt30 mb30">
                                    <div class="col-sm-12 ">
                                        <span id="btnLoginVerifycodeSubmit" class="btn btn-yes btn-lg btn-block">登录</span>			
                                    </div>
                                    <div class="col-sm-12 mt10">
                                        <span class="color-red text12">*如未注册，将自动创建您的名医主刀账号</span>
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
<script type="text/javascript">
    function vailcode() {
       // $(".vailcode").attr("src", "<?php echo $this->createUrl('site/getCaptcha'); ?>/" + Math.random());
    }
    $(document).ready(function () {
        vailcode();
        $('#loginModal').on('show.bs.modal', function (event) {
            $('#qucikbookingModal').modal('hide');
        });
        $('.vailcode').click(function(e){
            e.preventDefault();
            vailcode();
        });
<?php
if (isset($user)) {
    echo "setCookie('user', " . $user->username . ", null);";
} else {
    echo "delCookie('user');";
}
?>
        $('#appdownload').mouseover(function () {
            $('#qrcode').show();
        }).mouseout(function () {
            $('#qrcode').hide();
        });
        $('#qrcode').mouseover(function () {
            $('#qrcode').show();
        }).mouseout(function () {
            $('#qrcode').hide();
        });
        $('#toLogin').click(function () {
            $('#registerModal').modal('hide');
            $('#loginModal').modal();
        });
        $("#btn-sendLoginSmsCode").click(function () {
            sendLoginSmsVerifyCode($(this));
        });
        //两种登录方式切换
        $('.phone-login').click(function () {
            $(this).addClass('active');
            $('.account-login').removeClass('active');
            $('#login-verifycode-form').show();
            $('#login-form').hide();
        });
        $('.account-login').click(function () {
            $(this).addClass('active');
            $('.phone-login').removeClass('active');
            $('#login-form').show();
            $('#login-verifycode-form').hide();
        });
    });
    function sendLoginSmsVerifyCode(domBtn) {
        var domMobile = $("#UserVerifyCodeLoginForm_username");
        var domCaptchaCode = $("#UserVerifyCodeLoginForm_captcha_code");
        var mobile = domMobile.val();
        var captchaCode = domCaptchaCode.val();
        if (mobile.length === 0) {
            $("#UserVerifyCodeLoginForm_username-error").remove();
            $("#UserVerifyCodeLoginForm_username").parents('.input-group').after('<div id="UserVerifyCodeLoginForm_username-error" class="error">请输入手机号码</div>');
        } else if (domMobile.hasClass("error")) {
            // mobile input field as , so do nothing.
        } else if (captchaCode.length == 0) {
            $("div.error").remove();
            $("#UserVerifyCodeLoginForm_captcha_code").parents('.input-group').after('<div id="UserVerifyCodeLoginForm_captcha_code-error" class="error">请输入图形验证码</div>');
        } else if (ajaxValidateCaptchaCode(captchaCode) == false) {
            $("div.error").remove();
            $("#UserVerifyCodeLoginForm_captcha_code").parents('.input-group').after('<div id="UserVerifyCodeLoginForm_captcha_code-error" class="error">请输入正确的图形验证码</div>');
        } else {
            $("div.error").remove();
            buttonTimerStart(domBtn, 60000);
            $domForm = $("#login-verifycode-form");
            var actionUrl = $domForm.find("input[name='smsverify[actionUrl]']").val();
            var actionType = $domForm.find("input[name='smsverify[actionType]']").val();
            var formData = new FormData();
            formData.append("AuthSmsVerify[mobile]", mobile);
            formData.append("AuthSmsVerify[actionType]", actionType);
            formData.append("captcha_code", captchaCode);
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
                    } else {
                        console.log(data);
                        if (data.errors.captcha_code) {
                            clearInterval(timerId);
                            $("#UserVerifyCodeLoginForm_captcha_code").parents('.input-group').after('<div id="UserVerifyCodeLoginForm_captcha_code-error" class="error">请输入正确的图形验证码</div>');
                            domBtn.html("获取验证码");
                            domBtn.attr("disabled", false);
                        }
                    }
                },
                'error': function (data) {
                    console.log(data);
                },
                'complete': function () {
                }
            });
        }
    }
    function ajaxValidateCaptchaCode(co_code) {
        var validate = false;
        $.ajax({
            type: 'post',
            async: false,
            data: {'co_code': co_code},
            url: '<?php echo $ajaxCaptchaCode; ?>',
            success: function (data) {
                if (data.status == 'ok') {
                    validate = true;
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
        return validate;
    }
</script>

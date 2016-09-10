<?php
$this->show_footer = false;
$this->show_header = false;
?>
<style>
    #qiao-icon-wrap .qiao-icon-head{height:0;}
    #site-content{padding-bottom:0;}
    .pwd_article .pwd-box{padding-left: 1px;position: relative;border-radius: 3px;overflow: hidden;}
    .pwd_article .pwd-box input[type="tel"]{height: 160px;color: transparent;position: absolute;top: 0;left: 0;border: none;font-size: 18px;opacity: 0;z-index: 1;letter-spacing: 35px;text-indent:-100em;margin-left: -100%;width: 200%;}
    .pwd_article .fake-box input{float:left;height: 160px;width:160px;border: none;border-radius: 0px;border: 1px solid #efca24!important;text-align: center;font-size: 30px;margin-bottom: 0px;}
    .pwd_article .fake-box .col-1:nth-last-child(1) input{border-right:none!important;}
    .pwd_article .fake-box input{color:#378438;}
    .pd210{padding-left:210px;padding-right:210px;}
    .pwd_article .pwdtips{font-size:60px;color:#378438;margin-top:60px;margin-bottom:50px;}
    .mr15{margin-right:15px;}
    .mr60{margin-right:60px;}
</style>
<div class="container-fluid">
    <div class="row">
        <ul class=" bxslider" style="padding-left:0;">
            <li>
                <div class="pwd_article">
                    <img src="http://static.mingyizhudao.com/147347874851752" class="img-responsive">
                    <div class="pd210">
                        <div class="pwdtips">进入请输入密码：</div>
                        <div class="pwd-box">
                            <input type="tel" maxlength="8" class="pwd-input" id="pwd-input" />
                            <div class="fake-box">
                                <div class="everytext everytextone">
                                    <input class="mr15" type="text" readonly="">
                                </div>
                                <div class="everytext">
                                    <input  class="mr15" type="text" readonly="">
                                </div>
                                <div class="everytext">
                                    <input  class="mr15" type="text" readonly="">
                                </div>
                                <div class="everytext">
                                    <input class="mr60" type="text" readonly="">
                                </div>
                                <div class="everytext">
                                    <input class="mr15" type="text" readonly="">
                                </div>
                                <div class="everytext">
                                    <input class="mr60" type="text" readonly="">
                                </div>
                                <div class="everytext">
                                    <input class="mr15" type="text" readonly="">
                                </div>
                                <div class="everytext">
                                    <input type="text" readonly="">
                                </div>
                            </div>
                        </div>
                        <div class="pt40">
                            <button id="submitBtn" class="hide btn btn-full btn-yellow2">下一步</button>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="http://static.mingyizhudao.com/147348229869465" class="img-responsive">
            </li>
        </ul>
    </div>
</div>
<script>
    window.onload = function () {
        $('#pwd-input').focus();
    }
    $(document).ready(function () {
        var slider = true;
        $('.bxslider').bxSlider({
            mode: 'vertical',
            slideMargin: 0,
            controls: true,
            pause: 5000,
            speed: 1000,
            auto: false
        });
        $('.bx-pager').hide();
        $('.bx-controls-direction').hide();
        var pwd = '';
        var $input = $(".fake-box input");
        $("#pwd-input").on("input", function () {
            pwd = $(this).val().trim();
            for (var i = 0; i < pwd.length; i++) {
                $input.eq("" + i + "").val(pwd[i]);
            }
            var len = pwd.length;
            $input.each(function () {
                var index = $(this).parents('.everytext').index();
                if (index >= len) {
                    $(this).val("");
                }
            });
        });

        $('#submitBtn').click(function () {
            if (pwd.length != 8) {
                J.closePopup();
                J.customConfirm('',
                        '<div class="mt10 mb10">请输入8位密码</div>',
                        '<a id="closeLogout" class="w50">取消</a>',
                        '<a id="emptyKey" class="color-green w50">重新输入</a>',
                        function () {
                        },
                        function () {
                        });
                $('#closeLogout').click(function () {
                    J.closePopup();
                });
                $('#emptyKey').click(function () {
                    $('input').each(function () {
                        pwd = '';
                        $("#pwd-input").val('');
                        $('input').each(function () {
                            $(this).val('');
                        });
                    });
                    J.closePopup();
                });
                return;
            }
        });

        function keyDown(e) {
            var keycode = e.which;
            var realkey = String.fromCharCode(e.which);
            if (pwd.length == 8) {
                if (keycode == 13) {
                    if (slider) {
                        $('.bx-controls-direction .bx-next').trigger("click");
                        slider = false;
                    }
                }
            }
        }
        document.onkeydown = keyDown;
    });
</script>
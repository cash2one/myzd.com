<?php
$siteMenu = $this->loadSiteMenu()["site"];
$baseUrlImage = Yii::app()->theme->baseUrl . "/images/"; 
?>
<!-- right-widget-list -->
<div id="right-widget-list"  class="hidden-xs">
    <div class="widget menu-right">
        <div class="item-box">
            <div class="menu-icon weixin" title="关注微信"><i class="fa fa-weixin"></i></div>
            <div class="left-content weixin-content">
                <div class="icon"><img src="http://mingyihz.oss-cn-hangzhou.aliyuncs.com/wx%2Fwx_qrcode_myzd_258x258.jpg"/></div>
                <div class="caption pt10">
                    <div>扫一扫关注微信</div>
                    <div>微信号:</div>
                    <div>mingyizhudao</div>
                </div>
            </div>
        </div>
        <div class="item-box">
            <div class="menu-icon android" title="APP"><i class="fa fa-mobile"></i></div>
            <div class="left-content android-content">
                <div class="caption">
                    <div class="item-title">扫描二维码安装</div>
                </div>
                <div class="icon android-icon" style="padding:8px;"><img src="http://myzd.oss-cn-hangzhou.aliyuncs.com/static%2Fqrcode_app_android_myzd_qq_280x280.png"></div>
                <div class="caption">
                    <div>安卓 APP</div>
                </div>
                <div class="icon iphone-icon"><img src="http://myzd.oss-cn-hangzhou.aliyuncs.com/static%2Fqrcode_app_ios_293x291.jpg"></div>
                <div class="caption">
                    <div>IOS APP</div>
                </div>
            </div>
        </div>
        <div class="item-box hide">
            <div class="menu-icon contactus" title="联系我们"><i class="fa fa-phone-square"></i></div>
            <div class="left-content contactus-content">
                <div class="">
                    <h4>您可以通过以下方式联系我们：</h4>
                    <table class="table mb0">
                        <tbody><tr class="noborder"><td><span class="strong">电话：</span></td><td class="strong color-green">400-119-7900</td></tr>
                            <tr class="noborder"><td><span class="strong">邮箱：</span></td><td><a class="text-info" href="mailto:service@mingyihz.com">service@mingyihz.com</a></td></tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <form class="form-horizontal" role="form" id="contactus-form">

                        <h4 class="mt20">您也可以留下你的的手机号及咨询内容，我们会第一时间联系你：</h4>


                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">手机：</label>
                            <div class="col-sm-9">                                
                                <input class="form-control" maxlength="11" placeholder="您的手机号码" name="ContactForm[mobile]" id="ContactForm_mobile" type="text">                                    <div class="errorMessage" id="ContactForm_mobile" style="display:none"></div>                                </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">咨询：</label>
                            <div class="col-sm-9">                                
                                <textarea class="form-control" maxlength="200" rows="2" placeholder="请填写您的咨询内容" name="" id=""></textarea>                                    <div class="errorMessage" id="" style="display:none"></div>                                </div>
                        </div>

                        <div class="form-group mt30">
                            <div class="col-md-offset-3 col-md-8">
                                <input class="btn btn-yes btn-block" type="submit" name="" value="提&nbsp;交">                                </div>
                        </div>

                    </form>     
                </div>
            </div>
        </div>
        <div class="item-box top">
            <div class="totop" title="返回顶部"><i class="fa fa-arrow-up"></i><div id="#top">TOP</div></div>  
        </div>
    </div>
</div>

<!-- /.End  right-widget-list -->
<section id="site-footer" >
    <div class="company container-fluid">
        <div class="row">
            <div class="container pt30 pb30">
                <div class="row content">
                    <div class="col-sm-3 col-sm-offset-1 col-md-3 col-xs-12">
                        <div class="row">
                            <div class="qrcode col-sm-8 col-xs-6 col-xs-offset-3"><img class="img-responsive" src="http://mingyihz.oss-cn-hangzhou.aliyuncs.com/wx%2Fwx_qrcode_myzd_258x258.jpg"></div>
                        </div>
                    </div>
                    <div class="abs-btm text-center col-sm-3 col-xs-12">	
                        <h4>公司信息</h4>
                        <div class="navigator mb20">
                            <span class="bl1"><a class="" href="<?php echo $siteMenu["aboutus"]["url"]; ?>">关于我们</a></span><span class="bl1"><a class="" href="<?php echo $siteMenu["terms"]["url"]; ?>">免责声明</a></span><span><a class="" href="<?php echo $siteMenu["contactus"]["url"]; ?>">联系我们</a></span>
                        </div>
                        <div class="site-phone mb5"><span class="text">400-119-7900</span></div>
                        <div class="site-email">service@mingyizhudao.com</div>
                        <div class="mt20 cctv"></div>
                    </div>
                    <div class="col-sm-3 col-md-4 col-sm-offset-1 col-xs-8 col-xs-offset-2">
                        <div class="title-app mb20"><h4>下载名医主刀App</h4></div>
                        <div class="dl-app">
                            <a href="http://www.wandoujia.com/apps/com.mingyizhudao.app" target="_blank"><span class="icon ic_android_dl"></span></a>
                            <a href="https://itunes.apple.com/cn/app/id1001032594" target="_blank"><span class="icon ic_ios_dl"></span></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="footer-last mt20">
                        <span>名医会诊网版权所有©2015</span>
                        <span class="ml15">上海创贤网络科技有限公司</span>
                        <span class="ml15">沪ICP备15033328号-1</span>
                        <span class="ml15">上海市杨浦区国通路127号</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="totop visible-xs" title="回到顶部">
        <i class="fa fa-arrow-up"></i>回到顶部
    </div>
    <script>
        $(document).ready(function () {
            var speed = 500;//自定义滚动速度
            //回到顶部
            $(".totop").click(function () {
                $("html,body").animate({"scrollTop": 0}, speed);
            });
        });
    </script>
</section>
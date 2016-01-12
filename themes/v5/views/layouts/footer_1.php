<?php
$siteMenu = $this->loadSiteMenu()["site"];
$baseUrlImage = Yii::app()->theme->baseUrl . "/images/";
?>
<!-- right-widget-list -->

<!-- /.End  right-widget-list -->

<section id="site-footer" >
    <div class="container-fluid">
        <div class="">
            <div class="container pt30 pb30">
                <!--  toTop  -->
                <div class="totop">
                </div>
                <!--  end toTop  -->
                <div class="row content">
                    <div class="col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3">
                        <div class="row">
                            <div class="col-sm-6 mt40">
                                <a href="<?php echo Yii::app()->homeUrl; ?>">
                                    <div class="footer-logo"><img src="<?php echo $baseUrlImage ?>icons/logo.png"/></div>
                                </a>  
                            </div>
                            <div class="col-sm-6 tetelephone">
                                <div class="cctv"><img src="<?php echo $baseUrlImage ?>icons/cctv-2.png"/></div>
                            </div>
                        </div>
                    </div>

                    <div class="abs-btm text-center col-sm-4 col-xs-12">	
                        <h4>公司信息</h4>
                        <div class="navigator mb20">
                            <span class="br1"><a class="" href="<?php echo $siteMenu["aboutus"]["url"]; ?>">关于我们</a></span><span class="br1"><a class="" href="<?php echo $siteMenu["terms"]["url"]; ?>">免责声明</a></span><span class="br1"><a class="" href="<?php echo $siteMenu["contactus"]["url"]; ?>">联系我们</a></span><span><a id="header-nav-aboutus" href="http://zixun.mingyizhudao.com/" class="dropdown-toggle" target="_blank">相关资讯</a></span>
                        </div>
                        <?php
                        if (!$this->show_header_navbar) {
                            ?>
                            <div class="mb5 mt15"><span class="">友情链接</span></div>
                            <div class="">
                                <a class="text-info" href="http://bx.qdnrm.com/" target="_blank">百姓健康</a>
                                <a class="text-info" href="http://jiancha.aikang.com/" target="_blank">爱康检查</a>
                                <a class="text-info" href="http://www.51zsyl.com" target="_blank">远程门诊</a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-sm-4 col-xs-12 pl0">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6">
                                <div class="wx-qrcode qr-code"><img src="<?php echo $baseUrlImage ?>icons/ic_wx.jpg"/></div>
                                <div class="text-center">微信公众号</div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <a href="<?php echo $this->createUrl('download/app'); ?>" target="_blank">
                                    <div class="app-download qr-code"><img src="<?php echo $baseUrlImage ?>icons/app-download.png"/></div>
                                    <div class="text-center">APP 下载</div>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="footer-last mt20 col-xs-12 col-sm-12">
                        <span>名医主刀版权所有©2015</span>
                        <span class="ml15">上海创贤网络科技有限公司</span>
                        <span class="ml15">沪ICP备15033328号-1</span>
                        <span class="ml15">上海市杨浦区国通路127号</span>
                    </div> 
                </div>
            </div>
        </div>
    </div>      
</section>
<?php
if ($this->show_baidushangqiao) {
    $this->renderPartial("//layouts/_scriptBaiduShangQiao");
}
?>
<script>
    $(document).ready(function () {
        var speed = 500;//自定义滚动速度
        //回到顶部
        $(".totop").click(function () {
            $("html,body").animate({"scrollTop": 0}, speed);
        });
    });
</script>
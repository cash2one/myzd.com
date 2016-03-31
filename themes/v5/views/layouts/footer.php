<?php
$siteMenu = $this->loadSiteMenu()["site"];
$baseUrlImage = Yii::app()->theme->baseUrl . "/images/";
?>
<!-- right-widget-list -->

<!-- /.End  right-widget-list -->

<section id="site-footer" >
    <div class="container-fluid">
        <div class="">
            <!--  toTop  -->
            <div class="totop">
            </div>
            <?php
            if (!$this->show_header_navbar) {
                ?>
                <div class="container pt30 pb30 show_header_main">
                    <div class="content">
                        <div class="w25 partner">
                            <h4>战略合作伙伴</h4>
                            <div class="row">
                                <div class="col-xs-6 pr5 mt10">
                                    <img src="<?php echo $baseUrlImage; ?>footer/didi.jpg"/>
                                </div>
                                <div class="col-xs-6 pl5 mt10">
                                    <img src="<?php echo $baseUrlImage; ?>footer/ali.jpg"/>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-6 pr5 mt10">
                                    <img src="<?php echo $baseUrlImage; ?>footer/xingyi.jpg"/>
                                </div>
                                <div class="col-xs-6 pl5 mt10">
                                    <img src="<?php echo $baseUrlImage; ?>footer/cctv.jpg"/>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-6 pr5 mt10">
                                    <img src="<?php echo $baseUrlImage; ?>footer/36kr.jpg"/>
                                </div>
                                <div class="col-xs-6 pl5 mt10">
                                    <img src="<?php echo $baseUrlImage; ?>footer/remebot.png"/>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-6 pr5 mt10">
                                    <img src="<?php echo $baseUrlImage; ?>footer/160.jpg"/>
                                </div>
                                <div class="col-xs-6 pl5 mt10">
                                    <img src="<?php echo $baseUrlImage; ?>footer/120ask.jpg"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!--                        <div class="w20 hospital">
                                                    <h4>战略合作医院</h4>
                                                    <ul class="mt10">
                                                        <li><a class="text-info" href="http://www.jsnydefy.com" target="_blank">南京医科大学第二附属医院</a></li>
                                                        <li><a class="text-info" href="http://beijing.ufh.com.cn/?lang=zh" target="_blank">北京和睦家医院有限公司</a></li>
                                                        <li><a class="text-info" href="http://www.shneuro.org/" target="_blank">上海德济医院</a></li>
                                                        <li><a class="text-info" href="http://www.puhuachina.cn/" target="_blank">北京天坛普华医院</a></li>
                                                        <li><a class="text-info" href="http://www.aqslyy.com.cn/" target="_blank">安庆市立医院</a></li>
                                                        <li><a class="text-info" href="http://www.aqhospital.com/" target="_blank">安庆市第一人民医院</a></li>
                                                        <li><a class="text-info" href="http://www.hssyy.com/" target="_blank">黄山市人民医院</a></li>
                                                    </ul>
                                                </div>-->
                        <div class="w25 contactus">
                            <h4>联系我们</h4>
                            <ul class="mt10">
                                <li>人事招聘：</li>
                                <li><span class="strong">hr@mingyizhudao.com</span></li>
                                <li>市场合作：</li>
                                <li><span class="strong">marketing@mingyizhudao.com</span></li>
                                <li>公司邮箱：</li>
                                <li><span class="strong">service@mingyizhudao.com</span></li>
                            </ul>
                        </div>
                        <div class="w25 corporationInfo">
                            <div>
                                <h4>关于我们</h4>
                                <a class="text-info" href="<?php echo $siteMenu["aboutus"]["url"]; ?>" target="_blank">关于我们</a>
                                <a class="text-info" href="<?php echo $this->createUrl('site/page', array('view' => 'help', 'page' => 'terms')); ?>" target="_blank">免责声明</a>
    <!--                            <a class="text-info" href="<?php //echo $siteMenu["contactus"]["url"];         ?>" target="_blank">联系我们</a>-->
                                <!--                                <a id="header-nav-aboutus" href="http://zixun.mingyizhudao.com/" class="text-info" target="_blank">相关资讯</a>-->
                            </div>
                            <div class="mt40">

                                <h4>友情链接</h4>
                                <div class="">
                                    <a class="text-info" href="http://bx.qdnrm.com/" target="_blank">百姓健康</a>
                                    <a class="text-info" href="http://jiancha.aikang.com/" target="_blank">爱康检查</a>
                                    <a class="text-info" href="http://www.51zsyl.com" target="_blank">远程门诊</a>
                                    <a class="text-info" href="http://www.91160.com/" target="_blank">就医160</a>
                                </div>

                            </div>
                        </div>
                        <div class="w25 logo-footer border0">
                            <a href="<?php echo Yii::app()->homeUrl; ?>">
                                <img class="" src="<?php echo $baseUrlImage; ?>icons/logo.png"/>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="container pt30 pb30">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6 col-sm-5">
                                <h4>战略合作伙伴</h4>
                                <div class="clearfix">
                                    <div class="pull-left mr10 mt10">
                                        <img src="<?php echo $baseUrlImage; ?>footer/didi.jpg"/>
                                    </div>
                                    <div class="pull-left mr10 mt10">
                                        <img src="<?php echo $baseUrlImage; ?>footer/ali.jpg"/>
                                    </div>
                                    <div class="pull-left mr10 mt10">
                                        <img src="<?php echo $baseUrlImage; ?>footer/xingyi.jpg"/>
                                    </div>
                                    <div class="pull-left mr10 mt10">
                                        <img src="<?php echo $baseUrlImage; ?>footer/cctv.jpg"/>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="pull-left mr10 mt10">
                                        <img src="<?php echo $baseUrlImage; ?>footer/36kr.jpg"/>
                                    </div>
                                    <div class="pull-left mr10 mt10">
                                        <img src="<?php echo $baseUrlImage; ?>footer/remebot.png"/>
                                    </div>
                                    <div class="pull-left mr10 mt10">
                                        <img src="<?php echo $baseUrlImage; ?>footer/160.jpg"/>
                                    </div>
                                    <div class="pull-left mr10 mt10">
                                        <img src="<?php echo $baseUrlImage; ?>footer/120ask.jpg"/>
                                    </div>
                                </div>
                                <div class="mt25 mb20">
                                    <h4>关于我们</h4>
                                    <a class="text-info" href="<?php echo $siteMenu["aboutus"]["url"]; ?>" target="_blank">关于我们</a>
                                    <a class="text-info" href="<?php echo $this->createUrl('site/page', array('view' => 'help', 'page' => 'terms')); ?>" target="_blank">免责声明</a>
        <!--                            <a class="text-info" href="<?php //echo $siteMenu["contactus"]["url"];         ?>" target="_blank">联系我们</a>-->
                                    <!--                                    <a id="header-nav-aboutus" href="http://zixun.mingyizhudao.com/" class="text-info" target="_blank">相关资讯</a>-->
                                </div>
                            </div>
                            <div class="col-md-3  col-sm-4 contactus">
                                <h4>联系我们</h4>
                                <ul class="mt10">
                                    <li>人事招聘：</li>
                                    <li><span class="strong">hr@mingyizhudao.com</span></li>
                                    <li>市场合作：</li>
                                    <li><span class="strong">marketing@mingyizhudao.com</span></li>
                                    <li>公司邮箱：</li>
                                    <li><span class="strong">service@mingyizhudao.com</span></li>
                                </ul>
                            </div>
                            <div class="col-md-3  col-sm-3 logo-footer border0">
                                <a href="<?php echo Yii::app()->homeUrl; ?>">
                                    <img class="" src="<?php echo $baseUrlImage; ?>icons/logo.png"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row footer-last">
            <div class="container">
                <div class="text-center col-xs-12 col-sm-12">
                    <span>名医主刀版权所有©2015</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="ml15">上海创贤网络科技有限公司</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="ml15">沪ICP备15033328号-1</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="ml15">上海市杨浦区国通路127号</span>
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
        var innerHeight = window.innerHeight;//获得浏览器高度
        //回到顶部
        $(".totop").click(function () {
            $("html,body").stop();//多次点击停止之前动画
            $("html,body").animate({"scrollTop": 0}, speed);
        });
        $(window).scroll(function () {
            var scroH = $(this).scrollTop();
            //若下滑超过0.1倍浏览器高度则显示回到顶部按钮，否则隐藏
            if (scroH >= 0.1 * innerHeight) {
                $(".totop").show();
            } else {
                $(".totop").hide();
            }
        });
    });
</script>
<?php
$siteMenu = $this->loadSiteMenu()["site"];
$baseUrlImage = Yii::app()->theme->baseUrl . "/images/";
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . "/js/custom/feedback.js", CClientScript::POS_HEAD);
$urlSubmitForm = $this->createUrl("feedback/ajaxcreatfeedback");
$user_id = '';
if ($this->getCurrentUser() !== null) {
    $user_id = $this->getCurrentUser()->getId();
}
?>
<section id="site-footer" >
    <div class="container-fluid">
        <div class="">
            <!--  toTop  -->
            <div class="totop">
            </div>
            <div class="feedback"></div> 
            <?php
            if (!$this->show_header_navbar) {
                ?>
                <div class="container pt30 pb30 show_header_main">
                    <div class="content">
                        <div class="w25 partner pr0">
                            <h4>战略合作伙伴</h4>
                            <div class="pull-left mr10 mt10">
                                <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009550171630"/>
                            </div>
                            <div class="pull-left mr10 mt10">
                                <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009550154718"/>
                            </div>
                            <div class="pull-left mt10">
                                <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009550177089"/>
                            </div>
                            <div class="clearfix"></div>
                            <div class="pull-left mr10 mt10">
                                <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/14600955016650"/>
                            </div>
                            <div class="pull-left mr10 mt10">
                                <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009550111140"/>
                            </div>
                            <div class="pull-left mt10">
                                <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009550181983"/>
                            </div>
                            <div class="clearfix"></div>
                            <div class="pull-left mr10 mt10">
                                <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009550145111"/>
                            </div>
                            <div class="pull-left mr10 mt10">
                                <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009550131922"/>
                            </div>
                            <div class="pull-left mt10">
                                <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009550185756"/>
                            </div>
                            <div class="clearfix"></div>
                            <div class="pull-left mt10">
                                <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146348128150118"/>
                            </div>
                            <div class="clearfix"></div>
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
    <!--                            <a class="text-info" href="<?php //echo $siteMenu["contactus"]["url"];                    ?>" target="_blank">联系我们</a>-->
                                <!--                                <a id="header-nav-aboutus" href="http://zixun.mingyizhudao.com/" class="text-info" target="_blank">相关资讯</a>-->
                            </div>
                            <div class="mt40">

                                <h4>友情链接</h4>
                                <div class="">
                                    <a class="text-info" href="http://www.linjiahaoyi.com/" target="_blank">邻家好医</a>
                                    <a class="text-info" href="http://bx.qdnrm.com/" target="_blank">百姓健康</a>
                                    <a class="text-info" href="http://jiancha.aikang.com/" target="_blank">爱康检查</a>
                                    <a class="text-info" href="http://www.51zsyl.com" target="_blank">远程门诊</a>
                                    <a class="text-info" href="http://www.91160.com/" target="_blank">就医160</a>
                                    <a class="text-info" href="http://www.7lk.com/" target="_blank">七乐康</a>
                                </div>

                            </div>
                        </div>
                        <div class="w25 logo-footer border0">
                            <a href="<?php echo Yii::app()->homeUrl; ?>">
                                <img class="" src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009415900025"/>
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
                                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009550171630"/>
                                    </div>
                                    <div class="pull-left mr10 mt10">
                                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009550154718"/>
                                    </div>
                                    <div class="pull-left mr10 mt10">
                                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009550177089"/>
                                    </div>
                                    <div class="pull-left mr10 mt10">
                                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/14600955016650"/>
                                    </div>
                                    <div class="pull-left mr10 mt10">
                                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009550111140"/>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="pull-left mr10 mt10">
                                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009550181983"/>
                                    </div>
                                    <div class="pull-left mr10 mt10">
                                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009550145111"/>
                                    </div>
                                    <div class="pull-left mr10 mt10">
                                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009550131922"/>
                                    </div>
                                    <div class="pull-left mr10 mt10">
                                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009550185756"/>
                                    </div>
                                    <div class="pull-left mr10 mt10">
                                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146348128150118"/>
                                    </div>
                                </div>
                                <div class="mt25 mb20">
                                    <h4>关于我们</h4>
                                    <a class="text-info" href="<?php echo $siteMenu["aboutus"]["url"]; ?>" target="_blank">关于我们</a>
                                    <a class="text-info" href="<?php echo $this->createUrl('site/page', array('view' => 'help', 'page' => 'terms')); ?>" target="_blank">免责声明</a>
        <!--                            <a class="text-info" href="<?php //echo $siteMenu["contactus"]["url"];                    ?>" target="_blank">联系我们</a>-->
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
                                    <img class="" src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146009415900025"/>
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
    <div id="feedback-success">反馈提交成功！</div>
    <div id="feedback-open">
        <div >
            <div>
                <div class="text-center">
                    <div class="feedback-icon"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146570125395645"></div>
                    <div class="feedback-open-area">
                        <div class="close"></div>
                        <div class="text-left feedback-title-img"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146570125444173"></div>
                        <div class="feedback-form pt5" >
                            <form enctype="multipart/form-data" id="feedback-form" action="<?php echo $urlSubmitForm;?>" method="post">
                                <input type="hidden" value="<?php echo $user_id;?>" name="feedback[user_id]" id="FeedbackForm_user_id">
                                <input type="hidden" value="website" name="feedback[source]" id="FeedbackForm_source">
                                <div class="form-group">
                                    <div class="controls col-sm-12 pr7 pl7">   
                                        <textarea id="feedback-content" name="feedback[content]" placeholder="我是名医主刀的产品经理小南，把你遇到的问题，或是想要的功能告诉我吧（200字以内）" class="form-control" maxlength="200" rows="3" id="FeedbackForm_content"></textarea>                              
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-9 controls pr0 pl7">
                                        <input id="feedback-mobile" name="feedback[contact_mobile]" placeholder="欢迎您留下手机号，以便我们感谢（选填）" class="form-control" maxlength="11" id="FeedbackForm_contact_mobile" type="text">                     
                                    </div>
                                    <div class="col-sm-3 pr7 pl5">
                                        <div id="feedbackFormSubmit" type="button" class="btn btn-yes btn-block h34" name="">提&nbsp;交</div>       
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
if ($this->show_baidushangqiao) {
    $this->renderPartial("//layouts/_scriptXiaoNeng");
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
        //反馈
        $(".feedback").click(function () {
            $('#feedback-open').show();
        });
        $("#feedback-open .close").click(function () {
            $('#feedback-open').hide();
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
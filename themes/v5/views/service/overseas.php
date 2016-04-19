<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl . '/css/service.css' . '?v=' . time(); ?>" />
<?php
$this->content_container = "";
$menu = array();
$resourceUrl = Yii::app()->theme->baseUrl . '/images/service';
?>
<div id="page-service-overeas" class="page-service">
    <div class="contain-fluid">
        <div class="page-cover">
            <div class="page-title text-center">服务流程</div>
        </div>
    </div>
    <div class="container page-navigator text-center">
        <ul class="nav nav-pills">
            <li><a class="block" href="<?php echo $this->createUrl('service/domestic'); ?>">国内服务流程</a></li>
            <li class="active"><a class="block" href="<?php echo $this->createUrl('service/domestic'); ?>">国外服务流程</a></li>
        </ul>
    </div>
    <div class="container page-content">
        <div class="row">
            <div id="sidemenu" class="col-sm-3 hidden-xs"> 
                <div class="row">
                    <ul class="nav nav-stacked">
                        <li><a class="step-nav step-1 active" href="#step-1"><span class="icon icon-proc-contact"></span><span class="caption">第一步 联系我们</span></a></li>
                        <li><a class="step-nav step-2" href="#step-2"><span class="icon icon-proc-upload"></span><span class="caption">第二步 上传病例</span></a></li>
                        <li><a class="step-nav step-3" href="#step-3"><span class="icon icon-proc-huizhen"></span><span class="caption">第三步 专家会诊</span></a></li>
                        <li><a class="step-nav step-4" href="#step-4"><span class="icon icon-proc-trip"></span><span class="caption">第四步 行程安排</span></a></li>
                        <li><a class="step-nav step-5" href="#step-5"><span class="icon icon-proc-visit"></span><span class="caption">第五步 入院就诊</span></a></li>
                        <li><a class="step-nav step-6" href="#step-6"><span class="icon icon-proc-followup"></span><span class="caption">第六步 诊后跟进</span></a></li>
                    </ul>
                </div>
            </div>
            <div id="main-content" class="col-sm-9 col-sm-offset-3 border-left pb50">
                <section id="step-1" class="step step-contact clearfix">
                    <div class="heading-u">
                        <div class="text">联系我们</div>
                        <div class="divider"></div>
                    </div>
                    <div class="content">
                        <div class="h4">您可以通过以下渠道咨询我们或者留下你的手机和问题，我们会第一时间电话回访。</div>
                        <div clas="row">
                            <div class="col-sm-6">
                                <div class="row"><div class="contact"><div class="icon icon-cm-phone"></div><div class="caption">400-6277-120</div></div></div>
                                <div class="row"><div class="contact"><div class="icon icon-cm-qq"></div><div class="caption">3077068520</div></div></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row"><div class="contact"><div class="icon icon-cm-wx"></div><div class="caption">微信号: mingyizd</div></div></div>
                                <div class="row"><div class="contact"><div class="icon icon-cm-email"></div><div class="caption">service@mingyihz.com</div></div></div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="step-2" class="step step-upload clearfix">
                    <div class="heading-u">
                        <div class="text">上传病历</div>
                        <div class="divider"></div>
                    </div>
                    <div class="content">
                        <div class="h4">您可以通过网站、APP和微信公众号上传病历资料，或者联系我们的客服协助您完成上传</div>
                        <div><img class="img-responsive" src="<?php echo $resourceUrl; ?>/process_step2.jpg"/></div>
                    </div>
                </section>

                <section id="step-3" class="step step-huizhen clearfix">
                    <div class="heading-u">
                        <div class="text">专家会诊</div>
                        <div class="divider"></div>
                    </div>
                    <div class="content">
                        <div class="h4">我们保证推荐合作专家均是15年工作经验以上的名医，主要来自新加坡、韩国、美国、日本。</div>
                        <div><table class="table">
                                <tbody>
                                    <tr class="odd"><th>新加坡</th><td>骨科、神经外科、妇科</td></tr>
                                    <tr class="even"><th>韩国</th><td>整形美容</td></tr>
                                    <tr class="odd"><th>美国</th><td>肿瘤、骨科</td></tr>
                                    <tr class="even"><th>日本</th><td>肾透、肿瘤、骨科康复、牙科</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <section id="step-4" class="step step-trip pt20 pb20 clearfix">
                    <div class="heading-u">
                        <div class="text">行程安排</div>
                        <div class="divider"></div>
                    </div>
                    <div class="content">
                        <div class="h4">我们的医疗服务人员会帮助您确定治疗方案，制定一整套的服务流程方案 （包括： 出国医疗签证、出国机票、滞留时间、国外住宿、医疗翻译），并向您确认医疗费用和支付方式。</div>
                    </div>
                </section>

                <section id="step-5" class="step step-visit clearfix">
                    <div class="heading-u">
                        <div class="text">入院就诊</div>
                        <div class="divider"></div>
                    </div>
                    <div class="content">
                        <div class="h4">专车接送，专人接待，全程陪护。保证合作医院均具有国际医疗权威认证，享受最专业，最贴心的医疗服务。</div>
                        <div class="row">
                            <div class="col-sm-4"><img class="img-responsive" src="<?php echo $resourceUrl; ?>/process_step5_img01.jpg" /></div>                            
                            <div class="col-sm-4"><img class="img-responsive" src="<?php echo $resourceUrl; ?>/process_step5_img04.jpg" /></div>
                            <div class="col-sm-4"><img class="img-responsive" src="<?php echo $resourceUrl; ?>/process_step5_img03.jpg" /></div>
                        </div>
                    </div>
                </section>

                <section id="step-6" class="step step-followup clearfix">
                    <div class="heading-u">
                        <div class="text">诊后跟进</div>
                        <div class="divider"></div>
                    </div>
                    <div class="content">
                        <div class="h4">回国后提交每次复查资料，由国外主治医生或者国内名医会诊并解读病情的变化与恢复情况。</div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        var stepsTop = new Array();
        stepsTop["step-6"]=$("#step-6").offset().top;
        stepsTop["step-5"]=$("#step-5").offset().top;
        stepsTop["step-4"]=$("#step-4").offset().top;
        stepsTop["step-3"]=$("#step-3").offset().top;
        stepsTop["step-2"]=$("#step-2").offset().top;
        stepsTop["step-1"]=$("#step-1").offset().top;
        
        var domSideMenu=$("#sidemenu");
        var topOffset1=10;
        var topOffset2 = $(".page-content").height()-domSideMenu.height();
        
        $(window).scroll(function() {
                        
            var top=$(this).scrollTop();
                        
            if((top+250)>stepsTop["step-6"]){ //last item.   
                domSideMenu.css("position",'absolute').css("top",topOffset2);                               
            }
            else if(top>stepsTop["step-1"]){ //first item.       
                domSideMenu.css("position",'fixed').css("top",0);
            }else{
                domSideMenu.css("position",'absolute').css("top",topOffset1);
            }
            var topOffset = top+200;
            for(var key in stepsTop){
                if(topOffset>stepsTop[key]) {
                    $("#sidemenu .step-nav.active").removeClass("active");
                    $("#sidemenu ."+key).addClass("active");                    
                    return false;
                }
            }
        });
    });
</script>
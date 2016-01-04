<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl . '/css/service.css' . '?v=' . time(); ?>" />
<?php
$this->content_container = "";
$menu = array();
$resourceUrl = Yii::app()->theme->baseUrl . '/images/service';
?>
<div id="page-service-domestic" class="page-service">
    <div class="contain-fluid">
        <div class="page-cover">
            <div class="page-title text-center">服务流程</div>
        </div>
    </div>
    <div class="container page-navigator text-center">
        <ul class="nav nav-pills">
            <li class="active"><a class="block" href="<?php echo $this->createUrl('service/domestic'); ?>">国内服务流程</a></li>
            <li><a class="block" href="<?php echo $this->createUrl('service/overseas'); ?>">国外服务流程</a></li>
        </ul>
    </div>
    <div class="container page-content">
        <div class="row">
            <div id="sidemenu" class="col-sm-3 hidden-xs"> 
                <div class="row">
                    <ul class="nav nav-stacked">
                        <li><a class="step-nav step-1 active" href="#step-1"><span class="icon icon-proc-contact"></span><span class="caption">第一步 线上预约</span></a></li>
                        <li><a class="step-nav step-2" href="#step-2"><span class="icon icon-proc-upload"></span><span class="caption">第二步 上传病例</span></a></li>
                        <li><a class="step-nav step-3" href="#step-3"><span class="icon icon-proc-huizhen"></span><span class="caption">第三步 专家会诊</span></a></li>
                        <li><a class="step-nav step-4" href="#step-4"><span class="icon icon-proc-visit"></span><span class="caption">第四步 入院就诊</span></a></li>
                    </ul>
                </div>
            </div>
            <div id="main-content" class="col-sm-9 col-sm-offset-3 border-left pb50">
                <section id="step-1" class="step step-contact clearfix">
                    <div class="heading-u">
                        <div class="text">线上预约</div>
                        <div class="divider"></div>
                    </div>
                    <div class="content">
                        <div class="h4">您可以通过线上预约您想要的医院和医生。</div>
                        <div>
                            <a class="btn btn-primary btn-lg" href="<?php echo $this->createUrl('medicalrecord/create');?>"><i class="fa fa-headphones">&nbsp;线上预约</i></a>
                        </div>
                        <div class="divider mt20"></div>
                        <div class="clearfix">
                            <div class="wx-qrcode inline-block pull-left"><img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl ?>/images/icons/wx_qrcode_258x258.jpg" /></div>
                            <div class="inline-block pull-left">
                                <div class="contact clearfix"><div class="icon icon-cm-phone"></div><div class="caption">400-119-7900</div></div>
                                <div class="contact clearfix"><div class="icon icon-cm-qq"></div><div class="caption">3077068520</div></div>
                                <div class="contact clearfix"><div class="icon icon-cm-email"></div><div class="caption">service@mingyihz.com</div></div>
                            </div>
                        </div>
                        <div>
                            <div class="h4">同时您也可以通过我们的热线电话、微信公众号、QQ、电邮联系我们的客服人员。</div>
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

                <section id="step-3" class="step step-huizhen pb20 clearfix">
                    <div class="heading-u">
                        <div class="text">专家会诊</div>
                        <div class="divider"></div>
                    </div>
                    <div class="content">
                        <div class="h4">我们保证推荐合作专家均是三甲医院副主任和主任医师，主要来自北京、上海和杭州</div>

                    </div>
                </section>

                <section id="step-4" class="step step-visit clearfix">
                    <div class="heading-u">
                        <div class="text">入院就诊</div>
                        <div class="divider"></div>
                    </div>
                    <div class="content">
                        <div class="h4">不排队，不挂号，立即预约，随时入住，一流名医，妙手回春。</div>
                        <div class="row">
                            <div class="col-sm-4"><img class="img-responsive" src="<?php echo $resourceUrl; ?>/process_step5_img01.jpg" /></div>
                            <div class="col-sm-4"><img class="img-responsive" src="<?php echo $resourceUrl; ?>/process_step5_img02.jpg" /></div>
                            <div class="col-sm-4"><img class="img-responsive" src="<?php echo $resourceUrl; ?>/process_step5_img03.jpg" /></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        var stepsTop = new Array();
        stepsTop["step-4"]=$("#step-4").offset().top;
        stepsTop["step-3"]=$("#step-3").offset().top;
        stepsTop["step-2"]=$("#step-2").offset().top;
        stepsTop["step-1"]=$("#step-1").offset().top;
                      
        var domSideMenu=$("#sidemenu");
                 
        var topOffset1=10;
        var topOffset2 = $(".page-content").height()-domSideMenu.height();
       
        $(window).scroll(function(e) {
            
            var top=$(this).scrollTop();            
            if((top-90)>stepsTop["step-4"]){   //last item.
                domSideMenu.css("position",'absolute').css("top",topOffset2);                
            }
            else if(top>stepsTop["step-1"]){    //first item..
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
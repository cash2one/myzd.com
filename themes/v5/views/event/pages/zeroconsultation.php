<?php
$this->pageTitle = '0元见名医,专家面对面_名医主刀网';
$this->htmlMetaKeywords = '0元见名医,名医主刀';
$this->htmlMetaDescription = '针对有手术需求的患者,名医主刀提供全国知名三甲医院专家的面对面术前咨询服务, 让患者获得更全面、更权威的诊疗建议;本服务只针对非初诊手术患者,首诊患者可以先到附近正规医院,有初步诊断后方可预约0元面诊服务。';
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/event-main100.min.css");
?>
<style>#site-content{padding-bottom:0!important;}</style>
<style>
    .search-hospital-header ul li a{background-color:#19aea5;color:#fff;}
    .search-hospital-header ul{-webkit-padding-start:0}
    .search-hospital-header ul li{display:inline-block; color:#fff;font-size:16px}
    .search-hospital-header .crumbs-header{padding-top:10px}
</style>
 <div class="container-fluid search-hospital-header"style="background-color:#19AEA5;height:45px;">
        <div class="container">
            <div class="crumbs-header">
                <ul>
                    <li><a href="<?php echo Yii::app()->homeUrl; ?>">首页</a></li>
                    <li>></li>
                    <li><a href="<?php echo $this->createUrl('event/view/eventList'); ?>">专题列表</a></li>
                    <li>></li>
                    <li class="main-department">详情</li>
                </ul>
            </div>
        </div>
    </div>
<section id="zeroconsultation">
    <div class="container-fluid">
        <div class="row">
            <img src="http://static.mingyizhudao.com/146908024721626"/>
            </div>
        </div>
    
    <div class="zeroconsultation-content">
        <div class="container ">
            <div class="zeroconsultation-padding-115">
                <div class=" mt85 text-center">
                   <img src="http://static.mingyizhudao.com/14689883443570">
                </div>
                <div class="mt25 text-20">
                    <div>
                        针对有手术需求的患者，名医主刀提供全国知名三甲医院专家的面对面术前咨询服务，
                        让患者获得更全面、更权威的诊疗建议。
                    </div>
                </div>
                <div class="mt85 text-center">
                   <img src="http://static.mingyizhudao.com/146898838869337">
                </div>
                <div class="mt25 text-20">
                    <div>
                        本服务只针对非初诊手术患者。首诊患者可以先到附近正规医院，有初步诊断后方可预约0元面诊服务。
                    </div>
                </div>
                </div>
            <div class="zeroconsultation-padding-105">
                <div class="mt85 text-center">
                    <img src="http://static.mingyizhudao.com/146898839303827">
                </div>
                <div class="mt25 text-center"><img style="" src="http://static.mingyizhudao.com/146898931533930"></div>
                <div class="mt10 text-20">
                    <div style="width:20%;float:left;padding-right: 20px;" class=" text-center">
                        <div>扫描下方二维码</div>
                        <div>马上申请</div> 
                    </div>
                    <div style="width:20%;float:left;padding-right: 10px;"  class=" text-center">
                        <div>选择意向专家</div>
                    </div>
                    <div style="width:15%;float:left;text-align:right;padding-right: 10px;"  class=" text-center">
                        <div>提交申请</div>
                    </div>
                    <div  style="width:27%;float:left;padding-left: 50px;"  class=" text-center">
                        <div>等待名医助手回访确认</div>
                        <div>（工作时间内2小时）</div>
                        <div style="font-size: 14px;font-weight:bold">*工作时间9:00-18:00</div>
                    </div>
                    <div style="width:18%;float:right;padding-right: 10px;"  class=" text-right">
                        <div>如申请被确认有效</div>
                        <div style="font-size: 14px; text-align: center;padding-left: 15px;">支付50元预约金</div>
                        <div>面诊后将全额退还</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="mt85 text-center">
                    <img src="http://static.mingyizhudao.com/146898839689952">
                </div>
                <div class="text-center mt25 mb50"><img src="http://static.mingyizhudao.com/146898504737557"></div>
            </div> 
        </div>
    </div>
</section>
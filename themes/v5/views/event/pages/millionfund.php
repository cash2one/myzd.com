<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlQuickBook = $this->createUrl('booking/quickbook');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/event-millionfund.css");
?>
<div class="container-fluid pt30 bg-millonfund">
    <div class="row">
        <img src="<?php echo $urlResImage; ?>event/millionfund/header.png" class="img-responsive" alt="" />
    </div>
</div>
<div class="container-fluid bg-millonfund">
    <div class="row">
        <div class="container">
            <div class="row">
                <div id="millonfund-content" class="text-center">
                    <div class="header">“名医主义”--名医主刀旗下医疗公益项目</div>
                    <div class="mt16">通过整合全国优质医疗资源</div>
                    <div class="mt14">借助资本力量和品牌影响力</div>
                    <div class="mt14">为有手术需求的患者提供公益支持和帮助</div>

                    <div class="mt46">如果你还在为找不到专家而发愁</div>
                    <div class="mt14">如果你还在为等不到床位而苦恼</div>
                    <div class="mt14">如果你还在为手术费用而烦忧</div>
                    <div class="mt14">那么就来<span class="color-21a59c">“名医主义”</span></div>

                    <div class="mt46">“名医主义”将为手术患者提供:</div>
                    <div class="clearfix mt25"><span class="tag">专家资源</span><span class="tag ml44">床位资源</span><span class="tag ml44">保险服务</span><span class="tag ml44 pl7 pr6">100万公益金</span></div>

                    <div class="mt30">百万基金将用于</div>
                    <div class="mt14">为患者提供手术治疗的专家费用</div>
                    <div class="mt14">每位患者可获得<span class="ten-thousand inline-block">“一万”</span>元专家手术费的资助</div>
                    <div class="mt14">若患者情况特殊还可向百万基金申请额外增资</div>

                    <div class="mt46">
                        <img src="<?php echo $urlResImage; ?>event/millionfund/step-01.png" alt="" />
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-4" style="margin-left:20px;">
                        <div class="text-left"><div class="mt32">1.网站</div><div class="mt14">2.APP</div><div class="mt14">3.微信公众号(在搜索栏中输入“名医主刀”即可)</div><div class="mt14">4.服务热线 <span class="color-21a59c strong">400-6277-120</span></div>
                        </div>
                    </div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-3 text-left" style="margin-left:-20px;"><div class="mt32">"名医主义"评估委员会将</div><div class="mt14">对您提交的病例和申请进行审核</div><div class="mt14">审核通过后客服会立即联系您</div><div class="mt14">为您尽快安排手术</div></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

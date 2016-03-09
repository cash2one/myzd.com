<?php
$menu = $this->getPageMenu();
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/mingyizhuyi.css");
?>
<div class="container-fluid aboutus-header h400">
    <img src="<?php echo $urlResImage; ?>aboutus/our-header.png"/>
</div>
<div class="container-fluid bg-gray-f7">
    <div class="row">
        <div class="container">
            <div class="mt-60">
                <?php $this->renderPartial('pages/_menu'); ?> 
            </div>
            <div class="row mt100">
                <div class="col-sm-2"><img src="<?php echo $urlResImage ?>aboutus/mingYiZhuYi-01.png"></div>
                <div class="col-sm-10"><div class="ml30 line2em">“名医主义”是名医主刀旗下的医疗公益项目，希望通过整合全国医疗资源，借助资本力量和品牌影响力，为有手术需求的患者提供公益支持和帮助。名医主义的组织精神是仁爱自信 、乐观积极、感同身受。在大量的日常手术对接服务中，我们发现求医无门、支付无援的病患家庭，需要的不仅仅是温暖的祝愿，更需要一双有力的手，与他们携手攻坚克难。<br/>
                        “做手术就找名医主刀，做手术遇到困难有名医主义。”这是名医企业体系中最重要的组成部分。期冀通过我们的平台，让全天下患者不仅可以好看病，更要看好病。</div></div>
                <div class="col-sm-10 col-sm-offset-1 dashed-line"></div>
            </div>
            <div class="row mt105">
                <div class="col-sm-2"><img src="<?php echo $urlResImage ?>aboutus/sanYaoSu-01.png"></div>
                <div class="col-sm-3 col-sm-offset-1"><img src="<?php echo $urlResImage ?>aboutus/mingYiJun-01.png"><div class=" pt10 mingyijun" style="">名医君</div></div>
                <div class="col-sm-3"><img class="mt30" src="<?php echo $urlResImage ?>aboutus/mingYiYiHui-01.png"><div class=" pt40 yihui">名医益会</div></div>
                <div class="col-sm-3"><img class="mt29" src="<?php echo $urlResImage ?>aboutus/healthyAngel-01.png"><div class="dashi">健康大使</div></div>
            </div>
            <div class="row mt90 mingyizhuyi-content">
                <div class="col-sm-2 "><div class="x pull-right bevel"></div><div class="clearfix"></div></div>
                <div class="col-sm-9">
                    <span class="strong">名医主义三要素：</span><br/>
                    <span class="color-white number-icon">1.</span>&nbsp;<span class="strong">名医君</span><br/>
                    我们将组织全国各地和名医主义有着相同抱负的公益医生，为病患提供医疗救助。救助形式不限，哪里有最紧急的病痛，哪里最需要名医主义的力量，名医主义白衣君就在哪里。<br/>
                    <span class="color-white number-icon">2.</span>&nbsp;<span class="strong">名医益会</span><br/>
                    是为特殊病患家庭及群体搭建的基金平台，并提供医疗救助、资金支持、媒体宣传等服务。名医主义公益基金就像一个磁场，把特殊病患和帮助病患的能量集中到一起，同时我们也会制定出解决患者问题的最佳救助方案。<br/>
                    <span class="color-white number-icon">3.</span>&nbsp;<span class="strong">健康大使</span><br/>
                    最了解患者病痛的除了医生就是患友。这些胸怀名医主义理念的“患者带头人”，深知如何正确的求医问诊，不贻误救治时机。他们作为名医主义重要的一部分，将为全天下相同病症的患者，分享手术就医过程和心得体验。<br/>
                </div>
            </div>

            <div class="row mb100 mt160">
                <div class="col-sm-2"></div>
                <div class="col-sm-9">
                    <div class="text-center text17 color-green mb40">
                        <span>申请热线：400-119-7900 。现在拨打，马上为您服务。</span>
                    </div>
                    <div class="line-height2-5em app-download-area">
                        <img class="pull-left mt10 mr5" src="<?php echo $urlResImage ?>aboutus/wei.png">
                        <div class="mt2">名医主义将定期举办公益性活动</div>
                        <div>如想了解更多动态</div>
                        <div>请关注“名医主刀”微信公众账号</div>
                        <div>同时也期待更多公益之士加入到我们的团队中来</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
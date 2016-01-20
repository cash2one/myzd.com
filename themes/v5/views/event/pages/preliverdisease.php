<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/event-preliverdisease.css");
?>
<div class="container-fluid">
    <div class="row">
        <div class="liver-header">

        </div>
    </div>
</div>
<div class="container">
    <div class="liver-content">
        <div class="prevention">
            <div class="liverdisease-title">
                <div class="title-answer">立秋之后怎么预防和治疗肝病?</div>
                <div class="line"></div>
                <div class="title-question">肝胆胰专家团队让你焕然新春,告别秋黄!</div>
            </div>
            <div class="text-intro">
                “立秋之日凉风至”，虽然今年全国大部分地区在立秋后暑气难消，“秋老虎”的余威依旧，但总的趋势是天气逐渐凉爽。气温的日较差逐渐明显，往往是白天很热，而夜晚却比较凉爽。一些曾经患过肝病的人更易因此旧病复发。
            </div>
            <div class="mt20">
                <img src="<?php echo $urlResImage; ?>event/liver-health.jpg"/>
            </div>
        </div>
        <div class="solution mt50">
            <div class="liverdisease-title">
                <div class="title-answer">秋凉，我们在你身边!</div>
                <div class="line"></div>
                <div class="title-question">名医主刀肝胆胰专家团队全方位为你健康护航。</div>
            </div>
            <div class="text-intro">
                肝病由不同病因引起，如病毒感染、毒物或毒素中毒、不良的饮食习惯以及药物中毒等。这些病因大多是与人们不良的生活习惯有关，如急性甲肝和戊肝是由于饮食、饮水不洁，生食肉食或生猛海鲜造成的；有些乙肝、丙肝和丁肝患者主要是经血和血制品、母婴、破损的皮肤和黏膜感染的；酒精性肝病、脂肪性肝病是由于人们大量酗酒，饮食无节制，大吃大喝，最终致病。
            </div>
            <div class="mb20">
                <img src="<?php echo $urlResImage; ?>event/liver-cirrhosis.jpg" alt=""/>
            </div>
            <div class="text-intro">
                肝硬化、肝恶变等重症肝病都是由慢性乙肝发展而来，肝脏这个“沉默”的器官，在满足人体的新陈代谢时，即便出现些微病变也不会引起人体的强列反应，因此常被忽视，而一些患者发现自己患上肝病，比如检查出“肝病”之后，大多数人“转阴”心切，因此相信一些“一个月之内转阴”的不实、夸大的宣传，治疗的效果却往往不尽如人意，病情依旧，甚至还耽误了比较好治疗时机导致病情恶化。
            </div>
            <div class="text-intro">
                战胜乙肝的关键是加强医患沟通，设定合理的治疗目标，采用最适合患者的个体化治疗方案。可以考虑从病因、病理、全身调理、局部强化、饮食运动等各方位治疗肝病，综合调理机体机能，从而在治疗上达到事半功倍的效果。
            </div>
        </div>
        <div class="liverdisease-eteam">
            <div class="eteam-title">
                <span class="eteam-header">肿瘤专家团队介绍</span>
                <span class="eteam-slogan">专家支招为您的健康保驾护航</span>
            </div>
            <div class="liverdiseasedivider"></div>
            <div class="row expertteam">
                
                <div class="col-sm-6 eteam-info">
                    <div class="pad20 expert-content">
                        <a href="<?php echo $this->createUrl('doctor/view', array('id' => '116')); ?>">
                            <img src="<?php echo $urlResImage; ?>doc-images/miaoyi.png"/>
                            <div class="mt10"><span class="ename">苗毅</span> <span class="color-gray">主任|教授</span></div>
                            <div class="color-gray text12">江苏省人民医院</div>
                            <div class="color-yellow">胰腺外科国内顶级专家团队</div>
                            <div class="edesc">
                                <span class="strong">苗毅教授明星专家团队：</span>由江苏省人民医院普外科苗毅教授领衔。 致力于普外科临床、每年为300余例患者施行各类疑难手术，具有丰富的临床经验，把握胰腺外科发展动向，不断开展技术创新，为患者解决痛苦。
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/event-tumor.css");
?>
<style>
    .tumor-dis{padding-left: 15px;}
    .tdis-title{border-bottom: 3px solid #19aea5;font-size: 18px;}
    .tdis-title>span{padding: 3px 5px;color: #fff;background-color: #19aea5;border-radius: 3px;}
    .pr15{padding-right: 15px;}
    .info-title{font-weight: bold;font-size: 15px;}
    .info-title>.fa-star{color: #EFA429;}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="">
            <img src="<?php echo $urlResImage ?>event/rectalcancer-header.jpg" />
        </div>
    </div>
</div>
<div class="container">
    <div class="tumor-content">
        <div class="tumor-dis pr15 mt40">
            <div class="tdis-info">
                <p>
                    现代社会，由于老龄化及环境的改变，加上久坐不动的生活方式和不均衡的饮食习惯，导致癌症高发，患结直肠癌的比例也越来越高。
                </p>
                <p>
                    大肠癌医学上称为结直肠癌，是直肠癌、结肠癌的统称。近两年，浙江、上海等地的大肠癌发病率已经接近欧美等发达国家。在浙江省肿瘤发病率的统计中，肺癌排在首位，胃癌紧接其后，排在第三的就是结直肠癌，并且正以每年2%至4%的速度增加，增长率超过了肺癌胃癌。据省癌症中心今年年初公布的杭州市城市癌症临床筛查数据显示：共有社区居民20036人参加风险评估，发现大肠癌高危对象2918人，也就是说7个人中就有一个。
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-7 col-lg-8">
                <div class="tumor-dis">
                    <div class="tdis-title"><span>如何尽早预防？</span></div>
                    <div class="tdis-info">
                        <p>
                            名医专家建议饮食不要太精细，尽量不吃或少吃腌制食物，应增加粗食和新鲜果蔬的摄入，因为蔬菜里含纤维素多，它们促进肠道蠕动，有助于排出大便中的废物，让致癌物与肠道接触时间缩短，降低肿瘤的发生。当发生大便习惯改变、脓血便、不明原因的腹痛消瘦贫血时，要及时看医生，慢性结肠炎、肠道内腺瘤、息肉要及时治疗，防止恶变为肠癌的机会。普通人坚持每年定期体检，体检可以做大便潜血检查，如果潜血检查反复阳性，则要进一步检查，必要时做肠镜确诊。对于有肠息肉、肠癌家族史、便血腹痛等重点人群，建议定期肠镜检查。
                        </p>
                    </div>
                    <div class="tdis-title"><span>如何简单自查？</span></div>
                    <div class="tdis-info">
                        <div class="info-title"><i class="fa fa-star"></i> 破大肠癌第一招之：年龄上的区别。</div>
                        <p>
                            痔疮能发生在任何年龄的人身上，而大肠癌多数是发生在中年人的身上，40～60岁人群是易发人群。如果您属于这个年龄段，而且还发现大便出血，就要及时检查，排除大肠癌。
                        </p>
                        <div class="info-title"><i class="fa fa-star"></i> 识破大肠癌第二招之：观察大便及出血颜色。</div>
                        <p>
                            大肠癌患者与痔疮患者都会出现大便便血的情况，虽然都会出现便血，但是便血的颜色是不一样的。痔疮患者便血颜色为血色鲜红，与粪便不相混合，血液多数随大便排出后滴下。而大肠癌患者出现便血的颜色较暗，多是混在大便里面，在肠癌的晚期，还会出现排便习惯的改变，比如以前的排便习惯是一天一次，现在可能是一天十几次。
                        </p>
                        <div class="info-title"><i class="fa fa-star"></i> 识破大肠癌第三招之：肛门指检。</div>
                        <p>
                            大部分的痔疮与大肠癌都是发生在手指可以触摸的部位，因为肛门指检是一种有效的检查大肠癌的一种方法。如果手指触摸到一些凸起的小粒则是痔疮。如果触到肠内有菜花状的硬块，或边缘隆起、中央凹陷的溃疡，就要高度怀疑是肠癌了。检查后，指套上沾有血液、脓液的，也是肠癌的特征性表现。
                        </p>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-12 col-md-5  col-lg-4">
                <div class="tumor-eteam mb20">
                    <div class="row">
                        <div class="col-sm-5 col-xs-5 pr0">
                            <div class="eteam-header">肿瘤专家</div>
                            <div class="eteam-header">团队介绍</div>
                        </div>
                        <div class="col-sm-7 col-xs-7 pl0">
                            <div class="eteam-slogan">
                                <span class="block">专家支招</span>
                                <span class="block">为您的健康保驾护航!</span>
                            </div>
                        </div>
                    </div>
                    <div class="tumordivider mt5"></div>
                    <div class="expertteam">
                        <div class="eteam-info">
                            <div class="expert-content">
                                <a href="<?php echo $this->createUrl('doctor/view', array('id' => '83')); ?>">
                                    <img src="<?php echo $urlResImage; ?>doc-images/gujin.png"/>
                                    <div class="mt10"><span class="ename">顾晋</span> <span class="color-gray">主任|教授</span></div>
                                    <div class="color-gray text12">北京肿瘤医院</div>
                                    <div class="color-yellow">结直肠癌顶级专家团队,美国外科学院院士</div>
                                    <div class="edesc">
                                        <span class="strong">顾晋教授直肠癌明星专家团队：</span>由北京肿瘤医院结直肠肿瘤外科顾晋教授领衔。较早地在中国开展直肠癌全系膜去切除术并积极倡导开展低位直肠癌术前辅助治疗。主要在直肠癌的临床和基础研究，临床方面对直肠癌保留神经的根治手术，直肠癌全系膜切除手术以及术前新辅助治疗治疗进展期直肠癌等方面积累了较丰富的经验。是目前国内按照国际直肠癌治疗规范开展手术的团队之一。同时对直肠癌系膜淋巴结的转移规律进行了较系统的研究; 参加并担任PI参与国际临床合作项目; 紧密结合临床开展直肠癌的临床和基础研究.与美国著名MSKCC和英国BILL HEALD等著名结直肠癌专家保持较紧密的联系.团队始终坚持工作在临床第一线，对消化道肿瘤的诊断和治疗积累了丰富的经验。
                                    </div>
                                </a>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

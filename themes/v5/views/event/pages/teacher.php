<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/pc/event-tumor100.min.css");
?>
<style>
    .teacher-text{letter-spacing: 2px;line-height: 2em;margin-top: 20px;font-size: 15px;}
    .teacher-img>img{display: block;margin: 40px auto;}
    .expertteam{font-size: 14px;letter-spacing: 3px;line-height: 1.7em;text-align: center;}
    .expertteam .expert-content:hover{background-color: rgba(190,227,237,0.3);box-shadow: 0 0 1px 1px #e4e4e4;}
    .expertteam img{border: 1px solid #e4e4e4;border-radius: 50%;}
    .expertteam .ename{font-size: 16px;}
    .expertteam .text12{font-size: 12px;letter-spacing: 1px;}
    .color-yellow{color: #EFA429;}
    .expertteam .edesc{text-align: left;margin-top: 10px;}
    .expertteam .expert-content{min-height: 396px;}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="teacher-header">
            <img src="http://static.mingyizhudao.com/14702931012067"/>
        </div>
    </div>
</div>
<div class="container">
    <div class="teacher-content pb20">
        <div class="teacher-text">一项针对上海近千名中小学和大专院校骨干教师（701名男教师和284名女教师）的健康体检结果显示，1/4老师有肿瘤疾病危险，近1/2老师有心脑血管疾病危险。然而在医生检查后的检查结果更让人难以置信：在平均年龄为48.9岁的701名男教师和284名女教师中，提示有肿瘤疾病危险的占25.5%；有心血管意外危险的占47.6%；　有脑血管意外危险的占48.9%；可能与职业有关的肺功能不全的占19.2%；颈椎病的占62.5%。</div>
        <div class="teacher-text">每个人的心目中都有一位记忆最深刻的老师。他/她或许是我们学习兴趣和信心的来源，或许是我们奋发图强的动力，亦或说职业方向航程中的引路人，更或曾是我们奏响人生乐章中最重要的一个指挥者。</div>
        <div class="teacher-text">我们总在感谢着老师的帮助，但似乎很少想过怎样帮助老师。除了鲜花，关爱老师更应该成为我们的话题。不少老师因为压力大，容易患上心脑血管疾病。在教师节来临之际，名医主刀携手上海慈善基金会为老师提供医生上门服务，旨在为老师提供最方便最可信的帮助。</div>
        <div class="teacher-img">
            <img src="http://static.mingyizhudao.com/147013882227648"/>
        </div>
        <div class="teacher-text">疲劳和高压力在老师中特别是毕业班老师中很常见。长时间的疲劳和压力会令人精神紧张、血压升高、免疫力下降，从而带来高血压、心脑血管疾病方面的隐患，而这类疾病带来的危害是巨大的。在对教师的调查中，中老年教师患心血管疾病的比例还是很高的。“教师中来做心血管手术的不在少数。这与老师的工作状态有关系，与压力、疲劳、久坐、运动少、饮食结构不平衡有密切关系”。在高压力和长时间繁重的工作中，缺少运动，会令人的免疫力低下，而这几乎又是所有疾病发病的原因。据调查，长时间疲劳和高压力的工作与生活会令心脑血管疾病、恶性肿瘤与重大疾病的发病概率增高。</div>
        <div class="row expertteam mt20">
            <div class="col-sm-6">
                <div class="border-gary pad20 expert-content">
                    <a href="<?php echo $this->createUrl('expertteam/view', array('id' => '1')); ?>">
                        <img src="http://static.mingyizhudao.com/147013890781512"/>
                        <div class="mt10"><span class="ename">许建屏</span> <span class="color-gray">主任|教授</span></div>
                        <div class="color-gray text12">北京阜外医院</div>
                        <div class="color-yellow">心血管外科国内前三甲</div>
                        <div class="edesc">
                            <span class="strong">许建屏教授心血管明星专家团队：</span>由北京阜外心外科成人中心主任许建屏教授领衔，心胸外科主任医师高峰、副主任医师陈雷博士联袂组成。旨在打造国内顶级的心血管疾病专家团队，依托阜外医院和安贞医院雄厚的心血管诊疗平台，为全国的心血管疾病患者提供最专业、最权威、最可靠的医疗服务。
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="border-gary pad20 expert-content">
                    <a href="<?php echo $this->createUrl('expertteam/view', array('id' => '5')); ?>">
                        <img src="http://static.mingyizhudao.com/147013893053314"/>
                        <div class="mt10"><span class="ename">张东</span> <span class="color-gray">主任|教授</span></div>
                        <div class="color-gray text12">北京天坛医院</div>
                        <div class="color-yellow">脑血管手术顶级专家团队</div>
                        <div class="edesc">
                            <span class="strong">张东教授神经外科疾病明星专家团队：</span>主要从事神经外科疾病尤其是脑血管疾病和脑肿瘤的显微外科治疗，专长脑动脉瘤、脑血管畸形、颈动脉狭窄手术及介入治疗、以及颅内外血管搭桥手术治疗烟雾病和动脉粥样硬化等缺血性脑血管病。为国内神经外科疾病患者提供最专业、最权威、最可靠的医疗服务。
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="teacher-text">除了上表中的疾病，教师中患有青光眼、白内障等眼部疾病的也有一部分。青光眼现在医学还没有好的治疗方法，只能控制症状，容易复发，而白内障的手术技术已经很成熟。但眼睛的疾患给眼睛带来的伤害是永久的，老师们一定要注意保护自已的眼睛。</div>
        <div class="row expertteam mt20">
            <div class="col-sm-6">
                <div class="border-gary pad20 expert-content">
                    <a href="<?php echo $this->createUrl('expertteam/view', array('id' => '3')); ?>">
                        <img src="http://static.mingyizhudao.com/147013895060472"/>
                        <div class="mt10"><span class="ename">朱思泉</span> <span class="color-gray">主任|教授</span></div>
                        <div class="color-gray text12">北京同仁医院</div>
                        <div class="color-yellow">国内白内障第一刀，成功手术25万例</div>
                        <div class="edesc">
                            <span class="strong">朱思泉教授白内障疾病明星专家团队：</span>由北京同仁医院白内障中心主任朱思泉教授领衔。至今已成功的施行了各类白内障手术25万余例。最近在国内率先开展微创超声乳化手术的临床研究，对先天白内障的遗传、生化及蛋白质组学进行系统研究，获得了多项国家级基金的资助。
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="border-gary pad20 expert-content">
                    <a href="<?php echo $this->createUrl('expertteam/view', array('id' => '4')); ?>">
                        <img src="http://static.mingyizhudao.com/147013897690488"/>
                        <div class="mt10"><span class="ename">卢海</span> <span class="color-gray">主任|教授</span></div>
                        <div class="color-gray text12">北京同仁医院</div>
                        <div class="color-yellow">眼底疾病顶级专家团队</div>
                        <div class="edesc">
                            <span class="strong">卢海教授眼底病科疾病明星专家团队：</span>擅长眼科临床诊断及治疗技术，手术技术全面。在全国率先开展白内障联合玻璃体手术治疗复杂及难治性眼底病及眼外伤，尤其是糖尿病视网膜病变的治疗及儿童玻璃体视网膜疾病的手术治疗目前处国内领先水平。对于复杂性白内障的手术治疗具有丰富经验。
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="teacher-text">名医主刀愿所有老师，教师节快乐！</div>
        <div class="teacher-text mb40">名医随时有，手术不再难！</div>
    </div>
</div>

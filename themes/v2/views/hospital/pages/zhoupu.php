<style>
    .nav-pageheader>li>a{padding:20px 40px;}
</style>
<?php

$urlUpload = $this->urlUpload.='/zhoupu/';
//Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/video-js/video.js', CClientScript::POS_END);
//Yii::app()->clientScript->registerScript('hopistal.zhoupu1', 'document.createElement("video")', CClientScript::POS_HEAD);
?>
<?php
$menu = $this->loadHospitalMenu();
?>

<div class="row bg-green clearfix hidden-xs">
    <div class="container page-container">
        <ul class="nav nav-tabs nav-pageheader noborder">
            <?php
            foreach ($menu as $menuItem) {
                if ($menuItem['active']) {
                    echo '<li class="' . $menuItem['key'] . ' active"><a href="' . $menuItem['link'] . '">' . $menuItem['label'] . '</a></li>';
                } else {
                    echo '<li class="' . $menuItem['key'] . '"><a href="' . $menuItem['link'] . '">' . $menuItem['label'] . '</a></li>';
                }
            }
            ?>
        </ul>
    </div>
</div>

<div class="row visible-xs">
    <div class="btn-group block">
        <button type="button" class="btn btn-default btn-success btn-lg btn-block dropdown-toggle" data-toggle="dropdown">
            <?php echo $this->getCurrentHospitalLabel(); ?> <span class="caret"></span>
        </button>
        <ul class="dropdown-menu dropdown-menu-mobile" role="menu" style="width:100%;">
            <?php
            foreach ($menu as $menuItem) {
                if ($menuItem['active']) {
                    echo '<li class="' . $menuItem['key'] . ' selected active"><a href="' . $menuItem['link'] . '">' . $menuItem['label'] . '</a></li>';
                } else {
                    echo '<li class="' . $menuItem['key'] . '"><a href="' . $menuItem['link'] . '">' . $menuItem['label'] . '</a></li>';
                }
            }
            ?>
        </ul>
    </div>
</div>

<section class="page center-block">

    <div class="">

        <div class="page-title text-center">上海市浦东新区周浦医院</div>

        <div class="row mt20">
            <img src="<?php echo $urlUpload; ?>04.jpg" class="img-responsive col-sm-10 col-sm-offset-1">
        </div>

        <div class="passage mt20 clearfix">
            <h4 class="heading strong">医院简介</h4>
            <p>
                上海市浦东新区周浦医院创建于1930年，是集医疗、教学、科研为一体快速发展的二级甲等综合性医院和浦东中部医疗中心，服务人口超过100万，年门急诊和住院达135万人次,手术量1.6万余台。由政府全额投资8个多亿、占地120亩、按照三级医院配置标准，异地建造的新院区已于2013年12月2日落成并正式投入使用，新院地处浦东的中心区域，紧邻上海国际医学园区、浦东迪斯尼乐园和地铁16号线。
            </p>
            <p>
                新院设35个临床和医技科室，开放床位800余张。配备了最新一代的西门子双梯度核磁共振仪、炫速双源螺旋CT成像仪、心血管数字减影造影机和冠脉血管内超声诊断仪、心脏多导电生理记录仪、三维心脏超声诊断仪、全数字钼靶乳房成像仪、数字胃肠机、超声内镜、胶囊内镜、电子胃肠镜、中央麻醉监护系统、血液透析系统和腔镜系统等先进的大型医疗设备、现代信息系统和医院自助系统。
            </p>

            <div class="row mt30">        
                <img src="<?php echo $urlUpload; ?>03.jpg" class="img-responsive col-sm-8 col-sm-offset-2">
            </div>

            <h4 class="heading strong">先进设备和特色项目</h4>
            <p>
                上海市浦东新区周浦医院由政府全额投资8个多亿，按照三级医院配置标准，异地建造的新院区已于2013年12月2日落成并正式投入使用，新院设33个临床和医技科室，配备了最新一代的西门子核磁共振仪、炫速双源螺旋CT成像仪、心血管数字减影造影机和冠脉血管内超声诊断仪、心脏多导电生理记录仪、三维心脏超声诊断仪、全数字钼靶乳房成像仪、数字胃肠机、超声内镜、麻醉监护系统等先进的大型医疗设备、现代信息系统和自助系统。
            </p>

            <h4 class="heading strong">目前我院心内科已开展特色及新技术项目：</h4>
            <ol>
                <li>
                    冠脉介入诊疗技术:冠脉球囊扩张（PTCA）、支架植入技术（STENT）、血管内超声、 血流储备分数(FFR)测定。应用于冠心病、急性冠脉综合征、急性心肌梗死介入诊疗。
                </li>
                <li>
                    起搏器介入诊疗技术：单腔起搏（SSI）、双腔起搏（DDD）、左室再同步技术（CRT）、体内除颤器植入技术（ICD）。应用于病态窦房结综合症、房室传导阻滞、心动过缓、血管性晕厥、慢性充血性心力衰竭、室性心动过速及室颤诊疗。
                </li>
                <li>
                    心脏导管消融技术：心内电生理技术、导管射频消融技术。应用于室上性心动过速、预激综合征、房室结双径路诊疗。
                </li>
                <li>
                    先天性心脏病介入诊疗技术：先心病动脉导管未闭栓堵术、房间隔栓堵术、室间隔栓堵术，肺动脉瓣狭窄球囊成形术、二尖瓣狭窄球囊成形术。
                </li>	
            </ol>

            <h4 class="heading strong">我院放射特色及新项目：</h4>
            <ol>
                <li>
                    CT：心脏冠脉成像，胸痛三联症成像，结肠三维重建及仿真内窥镜技术(CTC)，CT尿路造影（CTU），CT血管造影（CTA），CT骨骼三维重建，肺小结节分析等。主要用于：正常冠状动脉冠状动脉先天性变异、冠状动脉狭窄的诊断、粥样斑块的密度分析、支架与搭桥术后的跟踪随访、心肌梗死区域及运动状态的观察、先天性心脏病、胸痛三联征(冠心病、主动脉夹层、肺梗塞)。
                </li>
                <li>
                    MRI：心肌灌注成像， SWI “磁敏成像”，Blade“刀锋成像”。主要用于：急性中枢神经系统疾病诊断，各骨关节疾病诊断，妇科良恶性肿瘤鉴别，乳腺肿瘤良恶性肿瘤鉴别，前列腺疾病诊断，脊柱疾病诊断。
                </li>
            </ol>

            <h4 class="heading strong">我院血液净化中心特色及新项目：</h4>
            <p>医院新建成的血液净化中心拥有先进的德国贝朗血液透析机39台。</p>
            <ol>
                <li>
                    目前可开展的血液净化技术主要包括：普通血液透析、单纯超滤、血液透析滤过、血液灌流、血液灌流联合血液透析、连续性肾脏替代治疗等。
                </li>
                <li>
                    血液透析治疗的适应症主要包括：终末期肾病；急性肾功能衰竭；急性药物或毒物中毒；严重水、电解质和酸碱平衡紊乱；难治性充血性心衰；急、慢性肺水肿；顽固性肝硬化腹水；重症肝炎等。
                </li>
            </ol>

            <div class="row">
                <img src="<?php echo $urlUpload; ?>06.jpg" class="img-responsive col-sm-8 col-sm-offset-2">
            </div>

            <h4 class="heading strong">重点科室</h4>
            <ol>
                <li><b>呼吸内科</b>
                    <p>
                        呼吸内科门诊位于医院门诊楼二楼，设有呼吸内科、哮喘门诊及专家门诊。现年门诊量超过4万余人次。肺功能检查超过1300人次/年，支气管镜检查超过100次/年。病区设置床位28张，拥有Bird及Drager呼吸机2台及瑞思迈无创呼吸机3台，多参数床旁心电监护仪5台，年收住病人超过800人次。
                    </p>
                    <p>
                        呼吸内科愿意尽全科人员的努力，为患者解除痛苦，为社会服务。我们的服务宗旨：为患者提供便捷、优质的医疗服务。我们的承诺：为了你的健康，我们全力以赴！
                    </p>
                </li>
                <li><b>心血管内科</b>
                    <p>
                        心血管内科是浦东新区重点学科和医院引领学科，科室按照三级医院建设。中国科学院院士葛均波教授为我院名誉院长，直接指导该科开展工作。心脏介入治疗是心血管内科的医疗特色，技术力量均由国内知名三甲医院心血管专家调入，长期从事心脏介入工作，包括冠心病介入、生理性起搏、心律失常射频消融、先心病和心脏瓣膜病介入治疗。科室设有CCU、心导管室、心脏电生理室、运动平板试验室和三维超声心动图室。配备有大型心血管造影机（DSA）、新一代西门子核磁共振仪、双源螺旋CT、三维心脏彩超、64导心电生理仪及温控射频消融仪，冠状动脉血管内超声仪、冠状动脉压力导丝、心脏起搏器分析系统、运动平板试验仪、Holter分析仪、动态血压监测分析仪、中央心电监护系统、遥控心电监护系统、主动脉球囊反搏泵等先进心血管诊断治疗设备。
                    </p>
                </li>
                <li><b>泌尿外科</b>
                    <p>
                        科室技术力量雄厚，拥有一支精诚团结、勇于开拓的团队，其中硕士研究生4名，高级职称3人，均有在国内知名医院进修学习的经历。每年收治病人1000人次以上，门诊量20000余人次。科室配备有尿流动力学检查室、膀胱镜检查治疗室、体外冲击波碎石室，并拥有国内先进的钬激光系统和输尿管镜、德国STORZ膀胱镜、电切镜、多功能体外冲击波碎石机、前列腺治疗仪等设备。
                    </p>
                </li>
            </ol>

            <div class="row">
                <img src="<?php echo $urlUpload; ?>07.jpg" class="img-responsive col-sm-8 col-sm-offset-2">
            </div>

            <h4 class="heading strong">其他信息</h4>
            <p>
                医院拥有上海市医学重点专科“创伤骨科”和心内科、妇产科、肝胆外科、神经内科脑血管病专科、传统中医示范学科及口腔科等多个浦东新区重点学科，其中心内科由名誉院长、中国科学院院士葛均波教授和院长李新明教授领衔，在冠心病、结构性心脏病及心脏介入治疗领域已形成独特的优势。医院目前拥有包括国务院特殊津贴专家，全国五一劳动奖章获得者，博士生导师，硕士生导师以及上海市和浦东新区医学领先人才、学科带头人等在内的一大批专家队伍。近两年来，医院相继承担了包括国家科技支撑计划、上海市自然基金、上海市科委课题、上海市卫生局重点课题、浦东新区卫生行业专项及医学领先人才等各级纵向研究课题100多项，获得2013年度上海市医学科技奖和浦东新区科技进步一等奖、二等奖等多项科技奖励，发表SCI收录论文50余篇、获实用新型和发明专利30余项。医院是上海医药高等专科学校临床医学院，也是海南医学院临床医学院和多所大学的教学医院，目前独立指导和培养了同济大学医学院心血管内科、神经内科、护理学和卫生统计学等专业的博士和硕士研究生30多名，也是上海市住院医师规范化培训基地、教学基地和浦东新区临床技能培训基地。
            </p>



            <h4 class="strong text-center mt50">上海周浦医院 宣传片</h4>
            <div class="row mt20">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="embed-responsive embed-responsive-16by9">
                        <embed class="" src="http://www.tudou.com/v/irfYQEtujL0/&bid=05&rpid=56288817&resourceId=56288817_05_05_99/v.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" wmode="opaque" width="600" height="400"></embed>

<!--<embed class="" src="<?php echo $urlUpload; ?>zhoupu.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" wmode="opaque" width="600" height="400"></embed>-->
                    </div>


                </div>
            </div>

        </div>
    </div>
</section>
<script>
    
</script>
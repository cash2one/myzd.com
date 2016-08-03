<link rel="stylesheet" type="text/css" href="http://static.mingyizhudao.com/pc/huizhen.min.css" />
<?php
$urlResource = $this->resource_url;
$cssImageUrl = Yii::app()->theme->baseUrl . '/images/huizhen/';
$menu = $this->loadPageMenu();

//data for this page.
$introImageUrl = 'http://static.mingyizhudao.com/147022285905568';
$introContent = '';

$diseaseList = array('急性阑尾炎', '肠瘘', '肠炎', '肠梗阻', '结肠炎', '十二指肠溃疡', '直肠癌');

$hospitalList = array(
    array(
        'name' => '上海市瑞金医院',
        'class' => '三级甲等',
        'type' => '综合医院',
        'desc' => '上海交通大学医学院附属瑞金医院是上海交通大学医学院最大的临床教学医院，瑞金医院专科齐全，技术力量雄厚，医疗、科研、教学等方面均有相当的水平，先后培养出三位两院院士，走出WHO副总干事和两位国家卫生部长，在海内外声誉卓著。瑞金医院曾经在世界上首次抢救大面积烧伤病人成功，首次利用分化诱导治疗白血病成功。'
    ),
    array(
        'name' => '龙华医院',
        'class' => '三级甲等',
        'type' => '综合医院',
        'desc' => '中医胆石病、中医外科、中医肿瘤科为国家中管局“十五”重点专科（专病）建设项目；肿瘤、胆石症、高血压病、肾病、风湿病、乳房病、肛瘘、溃疡性结肠炎、颈椎病九个特色专科为上海市中医特色专科。中医肿瘤科在 2003 年第三批上海市临床医学中心竞评中一举成功，使龙华医院成为唯一拥有二个上海市临床医学中心的中医医院。'
    ),
    array(
        'name' => '复旦大学附属中山医院',
        'class' => '三级甲等',
        'type' => '综合医院',
        'desc' => '心脏、肝癌、肾脏和肺部疾病诊治是医院的重点和特色，诊治水平始终处于国内领先地位。其中心血管病和肝肿瘤为上海市临床医学中心。腹部外科、骨科、介入放射、麻醉科、超声诊断和中西医结合等科室以及十余个临床医疗诊治中心皆颇具特色，并且具有强大的医疗和科研实力。每年承担国家、卫生部和上海市重大科研项目近百项。'
        ));

$doctorList = array(
    array(
        'name' => '冯波',
        'hospital' => '上海交通大学附属瑞金医院',
        'faculty' => '普外科',
        'title' => '副主任医师',
        'avatar' => Yii::app()->baseUrl . '/resource/doctor/avatar/fengbo.jpg',
        'desc' => '<p><strong>擅长疾病：</strong><br />结直肠癌，胃癌, 胆囊结石，甲状腺结节, 疝气</p>
                    <p><strong>擅长手术：</strong><br />胃肠肿瘤腹腔镜手术，胆囊、疝、甲状腺手术，纤维结肠镜治疗，纤维结肠镜治疗。</p>'
    ),
    array(
        'name' => '何宏勋',
        'hospital' => '安徽省安庆市立医院',
        'faculty' => '儿科',
        'title' => '主任医师',
        'avatar' => Yii::app()->baseUrl . '/resource/doctor/avatar/hehongxun.jpg',
        'desc' => '<p><strong>擅长疾病：</strong><br />小儿呼吸、消化、营养代谢系统疾病</p>
            <p><strong>擅长手术：</strong><br />率先在本市开展人工呼吸机在儿科的应用及应用DSA部分脾动脉栓塞技术治疗儿童血吸虫性脾功能亢进，尤其对小儿呼吸、消化、营养代谢系统疾病的诊治及小儿急救有独特的见解。</p>',
    ),
);
?>

<div class="weichang">
    <div class="contain-fluid">
        <div class="page-cover">        
            <div class="xinner">
                <div class="page-title text-center hidden-xs">胃肠</div>
                <div class="page-title visible-xs">国内会诊</div>
            </div>
        </div>
    </div>

    <div class="container page-content">
        <div class="row">
            <div id="sidemenu" class="col-sm-3 xpos-fixed"> 
                <?php $this->renderPartial('pages/_sidemenu', array('menu' => $menu)); ?>
            </div>
            <div class="col-2 col-sm-9 xcol-sm-offset-3">
                <section class="intro clearfix">
                    <img class="img-responsive hidden-xs" src="<?php echo $introImageUrl; ?>" />
                    <?php
                    if ($introContent != '') {
                        echo '<div class="mt20 mb20">
                    <p' . $introContent . '</p>
                </div>';
                    }
                    ?>
                </section>
                <section class="disease clearfix">
                    <div class="heading-u">
                        <div class="text">疾病导诊</div>
                        <div class="divider"></div>
                    </div>
                    <div class="content nav-dis">
                        <?php
                        if (emptyArray($diseaseList) === false) {
                            echo '<ul class="col-3">';
                            foreach ($diseaseList as $dis) {
                                echo '<li><span class="glyphicon glyphicon-ok"></span>' . $dis . '</li>';
                            }
                        }
                        echo '</ul>';
                        ?>
                    </div>                
                </section>
                <section class="hospital clearfix">
                    <div class="heading-u">
                        <div class="text">部分合作医院</div>
                        <div class="divider"></div>
                    </div>
                    <div class="content">
                        <div class="clearfix bg">
                            <?php if (emptyArray($hospitalList) === false) { ?>
                                <div class="col-sm-4 col-1">
                                    <div class="row">
                                        <ul class="nav nav-tabs bs-tabs">
                                            <?php
                                            foreach ($hospitalList as $key => $hospital) {
                                                echo '<li><a href="#h-tab' . $key . '" data-toggle="tab"><div class="h4 h-name">' . $hospital['name'] . '</div><div><span class="text-info h-class">' . $hospital['class'] . '</span><span class="text-primary h-type">' . $hospital['type'] . '</span></div></a></li>';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-2">
                                    <div class="tab-content bs-tab-content col-sm-8">
                                        <?php
                                        foreach ($hospitalList as $key => $hospital) {
                                            echo '<div class="tab-pane" id="h-tab' . $key . '">' . $hospital['desc'] . '</div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </section>
                <section class="doctor clearfix">
                    <div class="heading-u">
                        <div class="text">部分合作医生</div>
                        <div class="divider"></div>
                    </div>
                    <div class="content">
                        <!-- <div class="row">-->
                        <?php
                        $count = 1;
                        if (emptyArray($doctorList) === false) {
                            foreach ($doctorList as $key => $doctor) {
                                if ($count % 2 == 1) {
                                    //odd number.
                                    echo '<div class="row">';
                                }
                                echo '<div class="col-sm-6 d-info">
                            <div class="media">
                                <span class="d-avatar">
                                    <img class="media-object" src="' . $doctor['avatar'] . '" alt="" />
                                </span>
                                <div class="media-body">
                                    <div class="media-heading d-name">' . $doctor['name'] . '</div>
                                    <div><span class="d-hospital">' . $doctor['hospital'] . '</span><span class="d-faculty">' . $doctor['faculty'] . '</span></div>
                                    <div class="d-title">' . $doctor['title'] . '</div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="d-desc">' . $doctor['desc'] . '</div>
                        </div>';
                                if ($count % 2 == 0) {
                                    //even number. close <div class="row">
                                    echo '</div>';
                                }
                                $count++;
                            }
                        }
                        ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?php Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/huizhen.min.js', CClientScript::POS_END); ?>
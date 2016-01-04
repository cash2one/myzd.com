<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl . '/css/huizhen.css' . '?v=' . time(); ?>" />
<?php
$urlResource = $this->resource_url;
$cssImageUrl = Yii::app()->theme->baseUrl . '/images/huizhen/';
$menu = $this->loadPageMenu();

//data for this page.
$introImageUrl = Yii::app()->theme->baseUrl . '/images/huizhen/u44.jpg';
$introContent = '';


$diseaseList = array('子宫肌瘤', '乳腺癌', '前列腺癌', '肺癌', '胃癌', '甲状腺癌', '直肠癌', '胰腺癌', '淋巴瘤');

$hospitalList = array(
    array(
        'name' => '上海东方肝胆外科医院',
        'class' => '三级甲等',
        'type' => '综合医院',
        'desc' => '在原发性肝癌的早期诊断和治疗，中晚期肝癌的综合治疗，原发性肝癌术后抗复发治疗，肿瘤的免疫治疗、介入治疗，复杂胆道疾病的手术治疗，肝胆疾病的内窥镜治疗，以及肝移植等方面均居国内外先进水平。不仅采用传统的外科手术治疗方法，还采取了微波方法、射频方法、氩氦刀方法、激光光敏技术、肝内肿瘤酒精注射疗法和经股动脉至肝动脉插管加栓塞疗法等。'
    ),
    array(
        'name' => '复旦大学附属肿瘤医院',
        'class' => '三级甲等',
        'type' => '肿瘤医院',
        'desc' => '作为上海市唯一一家三级甲等肿瘤专科医院，经过76周年的发展，逐渐形成了以放射治疗、肿瘤病理、乳腺肿瘤和大肠癌为优势学科的医疗特色，在肿瘤治疗的专业性、综合性方面具有领先水平。'
    ),
    array(
        'name' => '复旦大学附属中山医院',
        'class' => '三级甲等',
        'type' => '综合医院',
        'desc' => '心脏、肝癌、肾脏和肺部疾病诊治是医院的重点和特色，诊治水平始终处于国内领先地位。其中心血管病和肝肿瘤为上海市临床医学中心。腹部外科、骨科、介入放射、麻醉科、超声诊断和中西医结合等科室以及十余个临床医疗诊治中心皆颇具特色，并且具有强大的医疗和科研实力。每年承担国家、卫生部和上海市重大科研项目近百项。'
        ));

$doctorList = array(
    array(
        'name' => '袁振刚',
        'hospital' => '上海东方肝胆外科医院',
        'faculty' => '肿瘤科',
        'title' => '副主任医师',
        'avatar' => Yii::app()->baseUrl . '/resource/doctor/avatar/yuanzhengang.jpg',
        'desc' => '<p><strong>擅长疾病：</strong><br />肺癌，肝癌，淋巴癌，胃癌，乳腺癌，肾癌，鼻癌，直肠癌</p>
            <p><strong>擅长手术：</strong><br />实体肿瘤的细胞免疫治疗。成功开展多项新技术、新疗法。负责多项国际多中心新药临床验证。 任上海市全科医师及上海市住院医师规范化培训考核出题专家和考官，曾被评为第二军医大学校A级教员及住院医师规范化培训优秀教师，发表教改论文5篇。</p>',
    ),
    array(
        'name' => '马亦龙',
        'hospital' => '广西医科大学附属肿瘤医院',
        'faculty' => '放射科 介入治疗科',
        'title' => '主任医师',
        'avatar' => Yii::app()->baseUrl . '/resource/doctor/avatar/mayilong.jpg',
        'desc' => '<p><strong>擅长疾病：</strong><br />各类肿瘤</p>
            <p><strong>擅长手术：</strong><br />放射学诊断和介入治疗，专长放射学诊断及肺癌、肝癌、鼻咽癌、盆腔肿瘤、胃肠道肿瘤、食道癌及胆道恶性梗阻、椎间盘脱出症等的放射介入诊疗。</p>',
    ),
);
?>

<div class="zhongliu">
    <div class="contain-fluid">
        <div class="page-cover">        
            <div class="xinner">
                <div class="page-title text-center hidden-xs">肿瘤</div>
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
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/cust/huizhen.js', CClientScript::POS_END); ?>
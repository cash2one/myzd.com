<link rel="stylesheet" type="text/css" href="http://static.mingyizhudao.com/pc/huizhen.min.css" />
<?php
$urlResource = $this->resource_url;
$cssImageUrl = Yii::app()->theme->baseUrl . '/images/huizhen/';
$menu = $this->loadPageMenu();

//data for this page.
$introImageUrl = 'http://static.mingyizhudao.com/147022285905568';
$introContent = '';

$diseaseList = array('肾炎', '肾衰竭', '肾结石', '肾囊肿', '糖尿病肾病', '高血压肾病', '小儿肾病');

$hospitalList = array(
    array(
        'name' => '上海交通大学附属瑞金医院',
        'class' => '三级甲等',
        'type' => '综合医院',
        'desc' => '上海交通大学医学院附属瑞金医院是上海交通大学医学院最大的临床教学医院，瑞金医院专科齐全，技术力量雄厚，医疗、科研、教学等方面均有相当的水平，先后培养出三位两院院士，走出WHO副总干事和两位国家卫生部长，在海内外声誉卓著。瑞金医院曾经在世界上首次抢救大面积烧伤病人成功，首次利用分化诱导治疗白血病成功。'
    ),
    array(
        'name' => '上海东方肝胆外科医院',
        'class' => '三级甲等',
        'type' => '综合医院',
        'desc' => '在原发性肝癌的早期诊断和治疗，中晚期肝癌的综合治疗，原发性肝癌术后抗复发治疗，肿瘤的免疫治疗、介入治疗，复杂胆道疾病的手术治疗，肝胆疾病的内窥镜治疗，以及肝移植等方面均居国内外先进水平。不仅采用传统的外科手术治疗方法，还采取了微波方法、射频方法、氩氦刀方法、激光光敏技术、肝内肿瘤酒精注射疗法和经股动脉至肝动脉插管加栓塞疗法等。'
    ),
    array(
        'name' => '复旦大学附属中山医院',
        'class' => '三级甲等',
        'type' => '综合医院',
        'desc' => '心脏、肝癌、肾脏和肺部疾病诊治是医院的重点和特色，诊治水平始终处于国内领先地位。其中心血管病和肝肿瘤为上海市临床医学中心。腹部外科、骨科、介入放射、麻醉科、超声诊断和中西医结合等科室以及十余个临床医疗诊治中心皆颇具特色，并且具有强大的医疗和科研实力。每年承担国家、卫生部和上海市重大科研项目近百项。'
        ));

$doctorList = array(
    array(
        'name' => '鲁军',
        'hospital' => '上海市第一人民医院',
        'faculty' => '泌尿外科',
        'title' => '主任医师',
        'avatar' => Yii::app()->baseUrl . '/resource/doctor/avatar/lujun.jpg',
        'desc' => '<p><strong>擅长疾病：</strong><br />肾脏输尿管结石的微创激光手术、性功能障碍及不育症</p>
                    <p><strong>擅长手术：</strong><br />男性性功能障碍、男性不育症、男性泌尿生殖系感染；泌尿系统肿瘤、前列腺疾病的诊治</p>'
    ),
    array(
        'name' => '韩久怀',
        'hospital' => '安徽省安庆市立医院',
        'faculty' => '肾内科',
        'title' => '主任医师',
        'avatar' => Yii::app()->baseUrl . '/resource/doctor/avatar/hanjiuhuai.jpg',
        'desc' => '<p><strong>擅长疾病：</strong><br />肾炎，肾衰，肾病综合征，肾结石</p>
            <p><strong>擅长手术：</strong><br />肾脏内科疾病诊治，血液净化技术：包括血液 透析、腹膜透析、CRRT、血液灌流等，血管通路建立，包括长期导管置入。</p>',
    ),
);
?>
<div class="shen">
    <div class="contain-fluid">
        <div class="page-cover">
            <div class="xinner">
                <div class="page-title text-center hidden-xs">肾脏</div>
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
                                //  echo '<li><i class="fa fa-check"></i></span>' . $dis . '</li>';
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
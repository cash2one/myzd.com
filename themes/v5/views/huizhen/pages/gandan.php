<link rel="stylesheet" type="text/css" href="http://static.mingyizhudao.com/pc/huizhen.min.css" />
<?php
$urlResource = $this->resource_url;
$cssImageUrl = Yii::app()->theme->baseUrl . '/images/huizhen/';
$menu = $this->loadPageMenu();

//data for this page.
$introImageUrl = 'http://static.mingyizhudao.com/147022285905568';
$introContent = '';

$diseaseList = array('肝硬化', '病毒性肝炎', '脂肪肝', '红斑狼疮肝炎', '胆囊炎', '肝内胆管结石', '多发性肝囊肿');

$hospitalList = array(
    array(
        'name' => '上海胸科医院',
        'class' => '三级甲等',
        'type' => '专科医院',
        'desc' => '目前医院开展的单肺、双肺移植术，冠心搭桥术，心脏单、双瓣膜置换术及瓣膜成形术，各种心脏复杂畸形的诊治，各类肺、食管、气管、纵隔手术，各类心脏疾病的介入诊治，恶性心律失常和急性心肌梗塞的救治，气管镜的诊疗技术以及病理细胞、组织学检测等均居国内先进水平；肺癌的早期发现和综合治疗等居国际先进水平；还曾成功施行同种异体原位心脏移植术。'
    ),
    array(
        'name' => '上海东方肝胆外科医院',
        'class' => '三级甲等',
        'type' => '综合医院',
        'desc' => '在原发性肝癌的早期诊断和治疗，中晚期肝癌的综合治疗，原发性肝癌术后抗复发治疗，肿瘤的免疫治疗、介入治疗，复杂胆道疾病的手术治疗，肝胆疾病的内窥镜治疗，以及肝移植等方面均居国内外先进水平。不仅采用传统的外科手术治疗方法，还采取了微波方法、射频方法、氩氦刀方法、激光光敏技术、肝内肿瘤酒精注射疗法和经股动脉至肝动脉插管加栓塞疗法等。'
    ),
    array(
        'name' => '上海市第一人民医院',
        'class' => '三级甲等',
        'type' => '综合医院',
        'desc' => '视网膜疾病的临床研究，肝脏移植质量，妇科肿瘤、咽喉及头颈部肿瘤的外科治疗，重症急性胰腺炎、重症肺部感染的救治，冠心病的介入治疗和心律失常射频消融治疗，骨髓干细胞移植治疗血液系统疾病，血液净化治疗，创伤及脊柱外科，糖尿病胰岛移植及综合治疗以及肿瘤相关基础研究等均处于国内先进水平。'
        ));

$doctorList = array(
    array(
        'name' => '张迁',
        'hospital' => '上海东方肝胆外科医院',
        'faculty' => '肝脏科',
        'title' => '副主任医师',
        'avatar' => Yii::app()->baseUrl . '/resource/doctor/avatar/zhangqian.jpg',
        'desc' => '<p><strong>擅长疾病：</strong><br />病毒性肝炎及疑难病</p>
                    <p><strong>擅长手术：</strong><br />对于慢性乙型丙型肝炎及相关并发症诊治有丰富的临床经验，非传染性肝病如自身免疫性肝病、脂肪肝、药物肝病等能准确诊治。目前从事恶性肿瘤生物治疗和化疗，将生物治疗和其它肿瘤治疗方法密切结合，控制肿瘤的生长和延长晚期肿瘤的生存时间。</p>'
    ),
    array(
        'name' => '蔡端',
        'hospital' => '复旦大学附属华山医院',
        'faculty' => '普外科',
        'title' => '主任医师',
        'avatar' => Yii::app()->baseUrl . '/resource/doctor/avatar/caiduan.jpg',
        'desc' => '<p><strong>擅长疾病：</strong><br />原发性肝癌 肝移植 甲状腺癌 急性化脓性胆管炎 肝内胆管结石 肝外胆管结石</p>
            <p><strong>擅长手术：</strong><br />胆石症的防治急性重症胰腺炎发病机理及临床诊治肝脏移植研究学方面对肿瘤外科治疗。</p>',
    ),
);
?>

<div class="gandan">
    <div class="contain-fluid">
        <div class="page-cover">
            <div class="inner">
                <div class="page-title text-center hidden-xs">肝胆</div>
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
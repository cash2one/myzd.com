<link rel="stylesheet" type="text/css" href="http://static.mingyizhudao.com/pc/huizhen.min.css" />
<?php
$urlResource = $this->resource_url;
$cssImageUrl = Yii::app()->theme->baseUrl . '/images/huizhen/';
$menu = $this->loadPageMenu();

//data for this page.
$introImageUrl = 'http://static.mingyizhudao.com/147022285905568';
$introContent = '';

$diseaseList = array('子宫内膜炎', '子宫肌瘤', '宫颈炎', '乳腺炎', '妊娠');

$hospitalList = array(
    array(
        'name' => '上海红房子妇产科医院',
        'class' => '三级甲等',
        'type' => '综合医院',
        'desc' => '医院设有妇科、产科、计划生育科、中西医结合科、新生儿科、宫颈疾病诊疗中心、乳腺科等多个临床科室及上海市中西医结合月经病诊疗中心、上海市女性生殖内分泌疾病诊疗中心、上海市集爱遗传与不育诊疗中心等多个专科诊疗中心。'
    ),
    array(
        'name' => '上海市仁济医院',
        'class' => '三级甲等',
        'type' => '综合医院',
        'desc' => '医院设32个临床科室和6个医技科室，其中含国家教育部重点学科、卫生部重点实验室1个（消化内科），上海市临床医学中心和上海市教委重点学科2个（消化科、风湿科）。美容外科、颅面外科、修复重建和显微外科等重点分支领域内各有专攻，独树一帜。'
    ),
    array(
        'name' => '长征医院',
        'class' => '三级甲等',
        'type' => '肿瘤医院',
        'desc' => '在世界上首次成功进行了断肢再植动物实验，完成了国内第一例变性手术和大陆地区存活时间最长的单次原位全肝移植。颈椎手术已突破20000例，其中高难度、高风险的枕颈部手术已完成2857例，手术例数居全国首位；肾脏移植手术逾3555例，居全国首位；肝脏移植手术990例，居华东地区首位；国内98%的医院使用该院研制的器官保存液。'
        ));

$doctorList = array(
    array(
        'name' => '吴小华',
        'hospital' => '复旦大学附属肿瘤医院',
        'faculty' => '妇科',
        'title' => '主任医师',
        'avatar' => Yii::app()->baseUrl . '/resource/doctor/avatar/wuxiaohua.jpg',
        'desc' => '<p><strong>擅长疾病：</strong><br />宫颈癌、卵巢癌、子宫内膜癌、外阴癌的手术治疗及化疗等综合治疗</p>
                    <p><strong>擅长手术：</strong><br />特别是年轻宫颈癌患者保留生育功能的根治性宫颈切除术</p>'
    ),
    array(
        'name' => '朱慧芬',
        'hospital' => '安徽省安庆市立医院',
        'faculty' => '妇产科',
        'title' => '主任医师',
        'avatar' => Yii::app()->baseUrl . '/resource/doctor/avatar/zhuhuifen.jpg',
        'desc' => '<p><strong>擅长疾病：</strong><br />妇科肿瘤的手术和化疗</p>
            <p><strong>擅长手术：</strong><br />妇科微创手术、阴式子宫切除术、阴式卵巢良性肿瘤切除术、宫腔镜手术、腹腔镜手术等</p>',
    ));
?>

<div class="fuchan">
    <div class="contain-fluid">
        <div class="page-cover">
            <div class="inner">
                <div class="page-title text-center hidden-xs">妇产</div>
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
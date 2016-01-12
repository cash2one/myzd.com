<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl . '/css/huizhen.css' . '?v=' . time(); ?>" />
<?php
$urlResource = $this->resource_url;
$cssImageUrl = Yii::app()->theme->baseUrl . '/images/huizhen/';
$menu = $this->loadPageMenu();

//data for this page.
$introImageUrl = Yii::app()->theme->baseUrl . '/images/huizhen/u44.jpg';
$introContent = '';

$diseaseList = array('半月板损伤', '断指再植', '肩周炎', '骨髓炎', '平底足', '骨折', '慢性腰背痛');

$hospitalList = array(
    array(
        'name' => '上海仁济医院',
        'class' => '三级甲等',
        'type' => '综合医院',
        'desc' => '医院设32个临床科室和6个医技科室，其中含国家教育部重点学科、卫生部重点实验室1个（消化内科），上海市临床医学中心和上海市教委重点学科2个（消化科、风湿科）。美容外科、颅面外科、修复重建和显微外科等重点分支领域内各有专攻，独树一帜。'
    ),
    array(
        'name' => '上海长海医院',
        'class' => '三级甲等',
        'type' => '综合医院',
        'desc' => '医院注重高新技术的创新和运用，在脑血管病防治、血管外科、影像诊断、X线刀、微波治疗、腹腔镜手术、“细胞刀”治疗帕金森病、整形整容、准分子激光近视手术、钬激光治疗泌尿系结石、肛肠疾病诊治、放射治疗、介入治疗、基因治疗、创伤救治、房间隔缺损封堵、颈椎脊柱病诊治、中晚期肝癌的中西医结合治疗及血液净化等方面各展所长，形成了新的特色。'
    ),
    array(
        'name' => '上海市第一人民医院',
        'class' => '三级甲等',
        'type' => '综合医院',
        'desc' => '视网膜疾病的临床研究，肝脏移植质量，妇科肿瘤、咽喉及头颈部肿瘤的外科治疗，重症急性胰腺炎、重症肺部感染的救治，冠心病的介入治疗和心律失常射频消融治疗，骨髓干细胞移植治疗血液系统疾病，血液净化治疗，创伤及脊柱外科，糖尿病胰岛移植及综合治疗以及肿瘤相关基础研究等均处于国内先进水平。'
        ));

$doctorList = array(
    array(
        'name' => '王友',
        'hospital' => '上海交通大学医学院附属第九人民医院',
        'faculty' => '骨科',
        'title' => '主任医师',
        'avatar' => Yii::app()->baseUrl . '/resource/doctor/avatar/wangyou.jpg',
        'desc' => '<p><strong>擅长疾病：</strong><br />人工关节置换术，膝关节损伤，关节镜，先天性膝关节畸形，骨质增生，关节炎</p>
                    <p><strong>擅长手术：</strong><br />膝关节创伤与疾病的诊治及镜下手术、人工全膝关节转置换手术、膝部畸形矫正手术。对各种膝关节创伤、运动损伤、炎症、畸形、肿瘤，膝关节严重退行性病损等有丰富治疗经验。</p>'
    ),
    array(
        'name' => 'Jeffrey',
        'hospital' => '新加坡伊丽莎白医院',
        'faculty' => '骨科',
        'title' => '主任医师',
        'avatar' => Yii::app()->baseUrl . '/resource/doctor/avatar/ChewTecHockJeffrey.jpg',
        'desc' => '<p><strong>擅长疾病：</strong><br />整形，骨科</p>
            <p><strong>擅长手术：</strong><br />骨科手术，整形外科手术等。Jeffrey医生在骨科和整形外科领域积累了超过20年的工作经验，尤其在使用Makoplasty技术做高难度膝盖骨替换，以及其他运动损伤治疗方面在业内享有盛名。</p>',
    ),
);
?>

<div class="guke">
    <div class="contain-fluid">
        <div class="page-cover">
            <div class="xinner">
                <div class="page-title text-center hidden-xs">骨科</div>
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
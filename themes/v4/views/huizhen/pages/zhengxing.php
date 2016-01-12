<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl . '/css/huizhen.css' . '?v=' . time(); ?>" />
<?php
$urlResource = $this->resource_url;
$cssImageUrl = Yii::app()->theme->baseUrl . '/images/huizhen/';
$menu = $this->loadPageMenu();

//data for this page.
$introImageUrl = Yii::app()->theme->baseUrl . '/images/huizhen/u44.jpg';
$introContent = '';

$diseaseList = array('美白针', '瘦脸针', '双眼皮手术', '丰胸', '生物除皱', '微整形');

$hospitalList = array(
    array(
        'name' => '上海长海医院',
        'class' => '三级甲等',
        'type' => '综合医院',
        'desc' => '医院注重高新技术的创新和运用，在脑血管病防治、血管外科、影像诊断、X线刀、微波治疗、腹腔镜手术、“细胞刀”治疗帕金森病、整形整容、准分子激光近视手术、钬激光治疗泌尿系结石、肛肠疾病诊治、放射治疗、介入治疗、基因治疗、创伤救治、房间隔缺损封堵、颈椎脊柱病诊治、中晚期肝癌的中西医结合治疗及血液净化等方面各展所长，形成了新的特色。'
    ),
    array(
        'name' => '上海市第九人民医院',
        'class' => '三级甲等',
        'type' => '综合医院',
        'desc' => '医院拥有3个上海市临床医学中心（口腔临床、整复外科、关节外科）和2个上海市临床医疗质量控制中心（口腔医学、医学美容）。口腔修复科是上海市重点学科（特色学科）；口腔正畸科是院级重点学科。整复外科是我国整复外科学的创始单位，现为国家“211工程”重点建设学科、上海市教委重点学科。骨科是上海市教委重点学科，在国际、国内享有较高声誉。血管外科、眼科、麻醉科等院级重点学科也在竞争中崛起。骨科、血管外科还列入教育部“211工程”外科学重点学科建设。'
    ),
    array(
        'name' => '长征医院',
        'class' => '三级甲等',
        'type' => '肿瘤医院',
        'desc' => '在世界上首次成功进行了断肢再植动物实验，完成了国内第一例变性手术和大陆地区存活时间最长的单次原位全肝移植。颈椎手术已突破20000例，其中高难度、高风险的枕颈部手术已完成2857例，手术例数居全国首位；肾脏移植手术逾3555例，居全国首位；肝脏移植手术990例，居华东地区首位；国内98%的医院使用该院研制的器官保存液。'
        ));

$doctorList = array(
    array('name' => '陈付国',
        'hospital' => '上海交通大学医学院附属第九人民医院',
        'faculty' => '整复外科',
        'title' => '副主任医师',
        'avatar' => Yii::app()->baseUrl . '/resource/doctor/avatar/chenfuguo.jpg',
        'desc' => '<p><strong>擅长疾病：</strong><br />亚洲鼻的精致整形（如:全软骨综合鼻整形）及疑难鼻整形失败后的修复</p>
                    <p><strong>擅长手术：</strong><br />擅长动态小切口重睑术（双眼皮）及 眼形态重塑；擅长时尚性面部立体注射微整形术；擅长自体脂肪疑难注射；擅长多种器官再造术等</p>'
    ),
    array('name' => '孙美庆',
        'hospital' => '上海长征医院',
        'faculty' => '整形外科',
        'title' => '主任医师',
        'avatar' => Yii::app()->baseUrl . '/resource/doctor/avatar/sunmeiqing.jpg',
        'desc' => '<p><strong>擅长疾病：</strong><br />在双眼皮，内眼角开大手术，以及双眼皮失败修复手术方面有独特技术以及丰富的临床经验</p>
                    <p><strong>擅长手术：</strong><br />对青春痘 痤疮独特解决方案特效治疗，激光，光子嫩肤、脱毛、祛斑、以及玻尿酸微整形，自体脂肪移植隆胸，内窥镜辅助双平面动感隆胸技术，隆鼻，水动力吸脂，包皮过长，尤其擅长隐匿性阴茎及腋臭的微创治疗</p>'
    )
);
?>

<div class="zhengxing">
    <div class="contain-fluid">
        <div class="page-cover">
            <div class="inner">
                <div class="page-title text-center hidden-xs">整形美容</div>
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
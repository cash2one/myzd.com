<?php
/**
 * $model IHospital
 */

$hid = $model->getId();
$hName = $model->getName();
$hClass = $model->getClassText();
$hType = $model->getTypeText();
$desc = $model->getDescription();
//$facultyDesc = $model->getFacultyDesc();
$urlImage = $model->getUrlImage();
$departments = $model->getDepartments();
$urlWebsite = $model->getUrlWebsite();
$phone = $model->getPhone();
$address = $model->getAddress();
$city = $model->getCity();
?>
<?php
$urlQuickBook = $this->createUrl('booking/quickbook', array('type'=>4,'hid'=>$hid));
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/hospital.css");
?>
<div class="main-hospital">
    <div class="row hospital-heder">
        <ul>
            <li><a href="<?php echo $this->createUrl("hospital/index", array("city" => 1)); ?>">合作医院</a></li>
            <li>></li>
            <li><a href="<?php echo $this->createUrl("hospital/index", array("city" => $city->id)); ?>"><?php echo $city->name; ?></a></li>
            <li>></li>
            <li><span><?php echo $hName; ?></span></li>           
        </ul>
    </div>
    <div class="row hospital-content">
        <div class="col-sm-9">
            <div class="pt20 pb20 mr5 bg-gray row">
                <span class="hospital-name"><?php echo $hName; ?></span>
                <?php
                if ($hClass) {
                    echo '<span class="hospital-grade ml20">' . $hClass . '</span>';
                }
                ?>
            </div>
            <div class="row mr5 hospital-info">
                <div class="introduce">
                    <div>
                        <h3>医院信息</h3>
                    </div>
                    <div class="hInfo">
                        <div><label>官网：</label><span><a href="<?php echo $urlWebsite; ?>" target="_blank"><?php echo $urlWebsite === "" ? "暂无" : $urlWebsite; ?></a></span></div>
                        <div><label>电话：</label><span><?php echo $phone === "" ? "暂无" : $phone; ?></span></div>
                        <div><label>地址：</label><span><?php echo $address === "" ? "暂无" : $address; ?></span></div>
                    </div>
                    <div>
                        <h3>特色科室</h3>
                    </div>
                    <div class="divider"></div>
                    <div class="departments">
                        <?php
                        if ($departments) {
                            foreach ($departments as $key => $dept) {
                                echo '<div class="dept-group"><h4>' . $key . '</h4></div>';
                                echo '<div class="dept-list row">';
                                foreach ($dept as $faculty) {
                                    echo '<div class="col-sm-2 col-xs-2 dept">' . $faculty->name . '</div>';
                                }
                                echo '</div>';
                                echo '<div class="hdotted"></div>';
                            }
                        } else {
                            echo '<div class="dept-group"><h4>暂无</h4></div>';
                        }
                        ?>
                    </div>
                    <div>
                        <h3>医院简介</h3>
                    </div>
                    <div class="divider"></div>
                    <div class="hDecs">
                        <?php echo $desc; ?>
                    </div>
                </div>
                <div>
                    <a data-toggle="modal" data-target="#bookingModal" data-url="<?php echo $urlQuickBook;?>" class="btn btn-booking">快速预约</a>
                </div>
            </div>
        </div>
        <div class="booking col-md-3 col-sm-3 ml-10 mt10">
            <div class="mt20 mb20"><h3>手术直通车</h3></div>
            <div class="booking-form home-booking noborder">
                <?php $this->Widget("QuickBookWidget", array("type"=>4, "hid"=>$hid)); ?>
            </div>
        </div>
    </div>
</div>
<?php $this->renderPartial("//booking/_modalQuickBook");?>
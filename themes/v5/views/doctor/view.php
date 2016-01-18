<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/doctor.css");
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlBooking = $this->createUrl('booking/create', array('ajax' => 1));
$doctor = $data->results->doctor;
//var_dump($data);
?>
<div class="contaier-fluid bg-green">
    <div class="container">
        <div class="crumbs-doctor">
            <a href="<?php echo Yii::app()->homeUrl; ?>">首页</a> > <?php echo $doctor->hpDeptName; ?> > <?php echo $doctor->name; ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row doctorInfo mt20">
        <div class="col-md-8 col-sm-8">
            <div class="">
                <div class="media doc-media ml30">
                    <div class="media-left media-middle pull-left">
                        <img class="media-object doc-img" src="<?php echo $doctor->imageUrl; ?>" alt="<?php echo $doctor->name; ?>">
                    </div>
                    <div class="media-body pl10">
                        <h4 class="media-heading mt15"><?php echo $doctor->name; ?>&nbsp;&nbsp;<span class="color-gray"><?php echo $doctor->mTitle; ?>&nbsp;&nbsp;<?php echo $doctor->aTitle; ?></span></h4>
                        <div class="mt15">
                            <?php echo $doctor->hpDeptName == '' ? '' : '<span class="expert-faculty text-center">' . $doctor->hpDeptName . '</span>'; ?>
                        </div>
                        <div class="mt15"><?php echo $doctor->hospitalName . $doctor->hpDeptName . $doctor->name . $doctor->aTitle; ?>领衔</div>
                    </div>
                </div>
                <section class="main pb20">
                    <div class="disTags">
                        <div class="docinfo-title good">擅长手术</div>
                        <ul class="pl30">
                            <?php
                            echo $doctor->description;
                            ?>
                        </ul>
                    </div>
                    <div>
                        <div class="docinfo-title experience">执业经历</div>
                        <div class="pl30">
                            <?php echo $doctor->careerExp == null ? '暂无信息' : $doctor->careerExp; ?>
                        </div>
                    </div>
                    <div class="honour">
                        <div class="docinfo-title honor">获得荣誉</div>
                        <div class="pl30">
                            <?php
                            if (isset($doctor->honour)) {
                                echo '<ul>';
                                foreach ($doctor->honour as $value) {
                                    echo '<li>' . $value . '</li>';
                                }
                                echo '</ul>';
                            } else {
                                echo '暂无信息';
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                    if (isset($data->results->members) && !is_null($data->results->members)) {
                        $members = $data->results->members;
                        ?>
                        <div class="">
                            <div class="docinfo-title members pull-left">专家团队成员简介</div>
                        </div>
                        <div class="clearfix"></div>
                        <?php
                        foreach ($members as $member) {
                            ?>
                            <div class="pl30">
                                <div class="media">
                                    <div class="media-left media-middle pull-left">
                                        <img class="media-object" src="<?php echo $member->imageUrl; ?>" alt="<?php echo $member->name; ?>">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading mt15"><?php echo $member->name; ?>&nbsp;<span class="text15 expert-mtitle"><?php echo $member->mTitle; ?>&nbsp;<?php echo $member->aTitle; ?></span></h4>
                                        <div class="mt15">
                                            <?php echo $member->hpDeptName == null ? '' : '<span class="expert-faculty text-center">' . hpDeptName . '</span>'; ?>
                                        </div>
                                        <div class="mt15"><?php echo $doctor->hospitalName . $doctor->hpDeptName . $doctor->name . $doctor->aTitle; ?>领衔</div>
                                    </div>
                                </div>
                                <div class="expert-desc mt15 mb40"><?php echo $member->description == null ? '暂无信息' : $member->description; ?></div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </section>									
            </div> 
        </div>
        <div class="col-sm-4 doctor-menu">
            <div class="bg-green">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="memu-title"><div>我要</div><div>预约</div></div>
                    </div>
                    <div class="col-md-9">
                        <div class="mt25 text-center">
                            <span class="bookingBtn btn btn-booking" data-url="<?php echo $urlBooking; ?>&did=<?php echo $doctor->id; ?>" data-toggle="modal" data-target="#booking" data-docid="<?php echo $doctor->id; ?>" data-docname="<?php echo $doctor->name; ?>" data-dochospital="<?php echo $doctor->hospitalName; ?>" data-docdept="<?php echo $doctor->hpDeptName; ?>">预 约</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt30 pb30 border-green">
                <img class="" src="<?php echo $urlResImage; ?>doctor/flowChart.png">

                <div class="clearfix"></div>
            </div>
            <div class="rec-title">
                <span>其他推荐</span>
            </div>
            <div class="border-green">
                <div class="rec-doc">
                    <?php
                    if (isset($data->results->related) && is_array($data->results->related)) {
                        $related = $data->results->related;
                        $last = '';
                        foreach ($related as $i => $relateddoc) {
                            if ($i == count($related) - 1) {
                                $last = 'last';
                            }
                            ?>
                            <a href="<?php echo $this->createUrl('doctor/view', array('id' => $relateddoc->id)); ?>" target='_blank'>
                                <div class="expInfo <?php echo $last; ?>">
                                    <div class="pull-left mr10" >
                                        <img src="<?php echo $relateddoc->imageUrl; ?>"/>
                                    </div>	
                                    <div class="expName pt20"><span class="strong color-black"><?php echo $relateddoc->name; ?></span>&nbsp;&nbsp;<span class="color-gray"><?php echo $relateddoc->mTitle; ?> <?php echo $relateddoc->aTitle; ?></span></div>
                                    <div class="expHospital mt10 text-overflow"><?php echo $relateddoc->hospitalName; ?></div>
                                    <div class="clearfix"></div>
                                </div>
                            </a>  
                            <?php
                        }
                    } else {
                        echo '<div class="expInfo last"><div class="mt20 mb50">暂无其他推荐</div></div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->renderPartial("//booking/formModal"); ?>
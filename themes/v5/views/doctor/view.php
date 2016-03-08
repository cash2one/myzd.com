<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/doctor.css");
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery.qrcode.min.js', CClientScript::POS_HEAD);
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlBooking = $this->createUrl('booking/create', array('ajax' => 1));
$doctor = $data->results->doctor;
$urlDoctorView = 'http://m.mingyizhudao.com/mobile/doctor/view/id/';
?>
<div class="contaier-fluid bg-green">
    <div class="container">
        <div class="crumbs-doctor">
            <a href="<?php echo Yii::app()->homeUrl; ?>">首页</a> > <?php echo $doctor->hpDeptName == '' ? '' : $doctor->hpDeptName . ' > '; ?><?php echo $doctor->name; ?>
        </div>
    </div>
</div>
<div class="container mb50">
    <div class="row doctorInfo mt20">
        <div class="col-md-8 col-sm-8">
            <div class="">
                <div class="media doc-media ml30">
                    <div class="media-left media-middle pull-left">
                        <img class="media-object doc-img" src="<?php echo $doctor->imageUrl; ?>" alt="<?php echo $doctor->name; ?>">
                    </div>
                    <div class="media-body pl10">
                        <h4 class="media-heading mt30"><span><?php echo $doctor->name; ?></span><span class="color-gray ml20"><?php echo $doctor->mTitle; ?></span><span class="color-gray ml20"><?php echo $doctor->aTitle == '无' ? '' : $doctor->aTitle; ?></span></h4>
                        <div class="mt20">
                            <?php echo $doctor->hpDeptName == '' ? '' : '<span class="expert-faculty text-center">' . $doctor->hpDeptName . '</span>'; ?>
                            <span><?php echo $doctor->hospitalName; ?></span>
                        </div>
                        <div class="qrcode">
                            <div><span class="qrcode-text">微信分享医生主页</span><span id="qrcode-sm"><span class="qrlogo-sm"></span></span> <i class="fa fa-caret-down"></i></div>
                            <div id="qrcode-lg">
                                <div><img src="<?php echo $urlResImage ?>icons/weixin.png"/></div>
                                <div id="qrcode-weixin">
                                    <div class="qrlogo-lg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="main pb20"> 
                    <?php
                    if (isset($doctor->description) && !is_null($doctor->description)) {
                        ?>
                        <div class="disTags">
                            <div class="docinfo-title good">擅长手术</div>
                            <ul class="pl30">
                                <?php
                                echo $doctor->description;
                                ?>
                            </ul>
                        </div> 
                    <?php }
                    ?>
                    <?php
                    if (isset($doctor->honour) && arrayNotEmpty($doctor->honour)) {
                        ?>
                        <div class="honour">
                            <div class="docinfo-title honor">获得荣誉</div>
                            <div class="pl30">
                                <ul>
                                    <?php
                                    foreach ($doctor->honour as $value) {
                                        if (trim($value) != "") {
                                            echo '<li><span>' . $value . '</span></li>';
                                        }
                                    }
                                    ?>
                                </ul>                       
                            </div>
                        </div>
                    <?php }
                    ?>
                    <?php
                    if (isset($doctor->careerExp) && !is_null($doctor->careerExp)) {
                        ?>
                        <div>
                            <div class="docinfo-title experience">执业经历</div>
                            <div class="pl30">
                                <?php echo $doctor->careerExp; ?>
                            </div>
                        </div> 
                    <?php }
                    ?>                                     
                    <?php
                    if (isset($data->results->members) && !is_null($data->results->members)) {
                        $members = $data->results->members;
                        ?>
                        <div class="mb20 mt40 team">
                            <span class="docinfo-title members" >团队成员简介</span><div class="pull-left team-line"></div><div class="clearfix"></div>                          
                        </div>     
                        <?php
                        foreach ($members as $member) {
                            ?>
                            <div class="pl30">
                                <div class="media">
                                    <div class="media-left media-middle pull-left">
                                        <img class="media-object team-img" src="<?php echo $member->imageUrl; ?>" alt="<?php echo $member->name; ?>">
                                    </div>
                                    <div class="media-body pl10">
                                        <div class="media-heading mt15"><?php echo $member->name; ?><span class="color-gray ml20"><?php echo $member->mTitle; ?></span><span class="color-gray ml20"><?php echo $member->aTitle; ?></span></div>
                                        <div class="mt15">
                                            <?php echo $member->hpDeptName == null ? '' : '<span class="color-25aea6 text-center">' . $member->hpDeptName . '</span>'; ?>
                                        </div>
                                        <div class="mt15"><?php echo $doctor->hospitalName; ?></div>
                                    </div>
                                </div>
                                <div class="expert-desc mt15 mb40"><?php echo $member->description == null ? '' : $member->description; ?></div>
                            </div>
                            <?php
                        }
                    }
                    ?>           
                    <!--                        <div class="mt40 team">
                                                <span class="docinfo-title comment" >患者评价</span><div class="pull-left team-line"></div><div class="clearfix"></div>                        
                                            </div>
                                            <div class="pl30">
                                                <div class="pull-left"><img src="<?php //echo $urlResImage;   ?>doctor/user.png"><div class="text-center text12">1221</div></div>
                                                <div class="pull-left ml10 mr30"><div><strong>主刀专家：刘跃武</strong></div>
                                                    <div><strong>确诊疾病：甲状腺肿瘤</strong></div>
                                                    <div class="mt10 text14">服务效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                                                    <div class="text14">手术效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>	
                                                </div>
                                                <div class="mt20 pl30">名医主刀非常专业名医主刀非常专业名医主刀非常专业名医主刀非常专业刀非常专业刀非常专业刀非常专业</div>
                                                <div class="clearfix"></div>
                                                <div class="divide-gray mt10"></div>
                                            </div>
                                            <div class="pl30">
                                                <div class="pull-left"><img src="<?php //echo $urlResImage;   ?>doctor/user.png"><div class="text-center text12">1221</div></div>
                                                <div class="pull-left ml10 mr30"><div><strong>主刀专家：刘跃武</strong></div>
                                                    <div><strong>确诊疾病：甲状腺肿瘤</strong></div>
                                                    <div class="mt10 text14">服务效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                                                    <div class="text14">手术效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>	
                                                </div>
                                                <div class="mt20 pl30">名医主刀非常专业名医主刀非常专业名医主刀非常专业名医主刀非常专业刀非常专业刀非常专业刀非常专业</div>
                                                <div class="clearfix"></div>
                                                <div class="divide-gray mt10"></div>
                                            </div>
                                            <div class="pl30">
                                                <div class="pull-left"><img src="<?php //echo $urlResImage;   ?>doctor/user.png"><div class="text-center text12">1221</div></div>
                                                <div class="pull-left ml10 mr30"><div><strong>主刀专家：刘跃武</strong></div>
                                                    <div><strong>确诊疾病：甲状腺肿瘤</strong></div>
                                                    <div class="mt10 text14">服务效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                                                    <div class="text14">手术效果：<span class="color-yellow-f8b62c"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>	
                                                </div>
                                                <div class="mt20 pl30">名医主刀非常专业名医主刀非常专业名医主刀非常专业名医主刀非常专业刀非常专业刀非常专业刀非常专业</div>
                                                <div class="clearfix"></div>
                                                <div class="divide-gray mt10"></div>
                                            </div>-->                 
                </section>									
            </div> 
        </div>
        <div class="col-sm-4 doctor-menu">
            <div class="mt20 text-center">
                <div class="bookingBtn doc-booking" data-url="<?php echo $urlBooking; ?>&did=<?php echo $doctor->id; ?>" data-toggle="modal" data-target="#booking" data-docid="<?php echo $doctor->id; ?>" data-docname="<?php echo $doctor->name; ?>" data-dochospital="<?php echo $doctor->hospitalName; ?>" data-docdept="<?php echo $doctor->hpDeptName; ?>"><div class="ml10"><img src="<?php echo $urlResImage; ?>/doctor/icon-booking.png"><span class="ml15">立即预约</span></div></div>
            </div>
            <?php
            if (isset($doctor->reasons) && arrayNotEmpty($doctor->reasons)) {
                $reasons = $doctor->reasons;
                ?>
                <div class="mt14 text18">推荐理由</div> 
                <div class="border-gray">
                    <div>
                        <div class="pl10 pt10 pb10">
                            <?php
                            foreach ($reasons as $key => $reason) {
                                echo '<div class="color-yellow-f8b62c"><span class="text18"><i class="fa fa-star"></i></span><span class="ml5">' . $reason . '</span></div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php }
            ?> 

            <!--                <div class="mt20 text18">相关资讯</div> 
                            <div class="border-gray news">
                                <div class="mt10 mb10">
                                    <div class="pull-left title">【媒体报道】</div>
                                    <div>福布斯发布亚洲年轻领袖榜单,名医主刀CEO苏舒入选</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="mt10 mb10">
                                    <div class="pull-left title">【媒体报道】</div>
                                    <div>福布斯发布亚洲年轻领袖榜单,名医主刀CEO苏舒入选</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="mt10 mb10">
                                    <div class="pull-left title">【媒体报道】</div>
                                    <div>福布斯发布亚洲年轻领袖榜单</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="mt10 mb10">
                                    <div class="pull-left title">【媒体报道】</div>
                                    <div>福布斯发布亚洲年轻领袖榜单</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>-->

            <div class="rec-title">
                <span>其他推荐</span>
            </div>
            <div class="border-gray mt10">
                <div class="rec-doc pl20 pr20">
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
                                    <div class="expName pt20"><span class="color-black"><?php echo $relateddoc->name; ?></span>&nbsp;&nbsp;<span class="color-gray"><?php echo $relateddoc->mTitle; ?> <?php echo $relateddoc->aTitle; ?></span></div>
                                    <div class="expHospital mt10 text-overflow"><?php echo $relateddoc->hpDeptName; ?></div>
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
<script>
    $(document).ready(function () {
        //生成大小两个二维码
        jQuery('#qrcode-sm').qrcode({width: 32, height: 32, text: '<?php echo $urlDoctorView . $doctor->id ?>'});
        jQuery('#qrcode-weixin').qrcode({width: 94.5, height: 94.5, text: '<?php echo $urlDoctorView . $doctor->id ?>'});

    });
</script>

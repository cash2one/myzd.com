<style type="text/css">
    #main-tab-content{margin-bottom:50px;}    
    #main-tab-content .sub-title{margin-bottom:10px;font-size:21px;}
    .dl-horizontal dt, .dl-horizontal dd{font-weight:300;}
    .dl-horizontal dt{margin-top:10px;}
    .dl-horizontal dd{margin-top:10px;margin-bottom:10px;padding:10px;border:1px solid #ddd;font-weight:300;}
    #medicalRecord{padding:0!important;}
</style>

<?php
/**
 * $model MedicalRecord.
 */
$menu = $this->loadPageMenu();
$mrBooking = $model->getMrBookings();
$urlMrIndex = $this->createUrl('medicalrecord/index');
?>
<div class="">
    <div class="row">
        <div id="main-content" class="col-md-10 col-md-offset-1 xnoborder">
            <section class="row">
                <div class="heading-u">
                    <div class="text">查看病历详情</div>
                    <a class="btn btn-info pull-right"href="<?php echo $urlMrIndex; ?> "><i class="fa fa-arrow-left"></i>&nbsp;返回病历列表</a>
                    <div class="divider"></div>
                </div>
                <div class="content">
                    <div class="main-header">
                        <ul class="step-process clearfix">
                            <li class="col-sm-4 select step-item active" data-list="patient-msg"><a href="#patientInfo">患者信息</a></li>
                            <li class="col-sm-4 select step-item" data-list="report"><a href="#medicalRecord">病历报告</a></li>
                            <li class="col-sm-4 select step-item" data-list="reserve-info"><a href="#bookingInfo">预约信息</a></li>
                        </ul>
                    </div>
                    <!-- Tab panes -->
                    <div id="main-tab-content" class="tab-content">
                        <div id="patientInfo" class="tab-pane patient-info active">
                            <div class="form border">
                                <?php $this->renderPartial('_formView', array('model' => $model, 'mrForm' => $form)); ?>
                            </div>
                        </div>
                        <!-- 病理报告 -->
                        <div class="tab-pane" id="medicalRecord">                            
                            <?php $this->renderPartial('_formFile', array('model' => $model, 'hideSubmitBtn' => true)); ?>
                        </div>
                        <div class="tab-pane" id="bookingInfo">

                            <div class="form border">
                                <?php
                                if (isset($mrBooking)) {
                                    $this->renderPartial('_mrbookingInfo', array('model' => $mrBooking));
                                } else {
                                    ?>
                                    <div class="row">
                                        <div class="col-sm-4 hidden-xs">
                                            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/mrbooking_success.jpg" alt="预约名医" />
                                        </div>
                                        <div class="col-sm-8 text-center">
                                            <div class="h2">您目前还没有任何预约</div>
                                            <div class="col-sm-6 col-sm-offset-3 mt30">
                                                <a type="button" class="btn btn-success btn-lg btn-block" href="<?php echo $this->createUrl('mrbooking/create', array('mrid' => $model->getId())); ?>"><i class="fa fa-headphones"></i>&nbsp;立即预约</a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>                        
                    </div>                   

                </div>
            </section>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {

        $('.step-process>li>a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        });
    });
</script>

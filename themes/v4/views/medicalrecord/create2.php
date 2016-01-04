<?php 
/**
 * $model MedicalRecord
 */
?>
<?php
$urlPrevStep = $this->createUrl('medicalRecord/create', array('id' => $model->getId()));
?>

<div id="mr-create2" class="row mt20">
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <ul class="step-process clearfix">
                <li class="step-item"><a>1. 填写患者信息</a></li>
                <li class="step-item active"><a>2. 上传病历报告</a></li>
                <li class="step-item"><a>3. 预约名医</a></li>
            </ul>
        </div>
        <div id="medical-record-file" class="row mt10">                
            <?php $this->renderPartial('_formFile', array('model' => $model, 'hideSubmitBtn' => true)); ?>
        </div>
        <div class="row mt30">
            <div class="btn-groups">
                <?php
                echo CHtml::link('<i class="fa fa-arrow-left"></i>&nbsp;上一步', $urlPrevStep, array('class' => 'btn btn-info btn-wide'));
                echo CHtml::link('下一步&nbsp;<i class="fa fa-arrow-right"></i>', array('mrbooking/create', 'mrid' => $model->getId()), array('id' => 'btn-submit', 'data-loading-text' => '处理中...', 'data-next-step' => 3, 'class' => 'btn btn-success btn-wide pull-right'));
                echo '<input type="hidden" name="mrId" value="' . $model->getId() . '"/>';
                ?>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->
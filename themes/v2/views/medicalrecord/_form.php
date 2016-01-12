<?php
/*
 * $model MedicalRecordForm.
 */
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'mr-form',
    'action' => $this->createUrl('medicalrecord/create'),
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'htmlOptions' => array('class' => "form-horizontal", 'role' => 'form', 'autocomplete' => 'off'),
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => false,
        'validateOnType' => true,
        'validateOnDelay' => 500,
        'errorCssClass' => 'error',
    ),
    'enableAjaxValidation' => false,
        //'focus' => array($model, 'name'),
        ));
if ($model->isNewRecord === false) {
    echo $form->hiddenField($model, 'id');
}

?>

<div id="form-success" class="row hide">
    <div class="col-sm-5 col-sm-offset-3">
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <span>病例上传成功！</span>
        </div>
    </div>
</div>
<fieldset>
    <legend class="color-green">患者信息</legend>
    <div class="form-group">
        <label for="" class="col-sm-3 col-md-2 control-label">姓名：</label>
        <div class="col-sm-4">
            <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'placeholder' => '患者的真实姓名')); ?>
            <?php echo $form->error($model, 'name'); ?>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <label for="" class="col-sm-3 col-md-2 control-label">身份证：</label>
        <div class="col-sm-4">
            <?php echo $form->textField($model, 'nric', array('class' => 'form-control', 'maxlength' => 18, 'placeholder' => '患者的身份证号码')); ?>
            <?php echo $form->error($model, 'nric'); ?>
        </div>
        <div class="clearfix"></div>
    </div>


    <div class="form-group">
        <label for="" class="col-sm-3 col-md-2 control-label">性别：</label>
        <div class="col-sm-9">        
            <?php
            $optionsGender = $model->loadOptionsGender();
            if (emptyArray($optionsGender) === false) {
                echo '<div class="checkbox-groups">';
                foreach ($optionsGender as $key => $option) {
                    echo '<label class="radio-inline">';
                    if ($key == $model->gender) {
                        echo '<input id="MedicalRecordForm_gender" type="radio" name="MedicalRecordForm[gender]" value="' . $key . '" checked>';
                    } else {
                        echo '<input id="MedicalRecordForm_gender" type="radio" name="MedicalRecordForm[gender]" value="' . $key . '">';
                    }
                    echo $option . '</label>';
                }
                echo '</div>';
            }
            ?>

            <?php echo $form->error($model, 'gender'); ?>        
        </div>
    </div>

    <div class="form-group hide">
        <label for="" class="col-sm-3 col-md-2 control-label">出生日期：</label>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-12">                    
                    <?php echo $form->error($model, 'dob'); ?>
                </div>
                <div class="col-sm-4 mb10">
                    <div class="styled-select">
                        <?php
                        echo $form->dropDownList($model, 'dob_year', $model->loadOptionsDobYear(), array(
                            'prompt' => '年',
                            'class' => 'sel form-control',
                            'id' => "MedicalRecordForm_dob"
                        ));
                        ?>
                    </div>               
                </div>

                <div class="col-sm-4 mb10">
                    <div class="styled-select">
                        <?php
                        echo $form->dropDownList($model, 'dob_month', $model->loadOptionsDobMonth(), array(
                            'prompt' => '月',
                            'class' => 'sel form-control',
                        ));
                        ?>
                    </div>
                </div>
                <div class="col-sm-4 mb10">
                    <div class="styled-select">
                        <?php
                        echo $form->dropDownList($model, 'dob_day', $model->loadOptionsDobDay(), array(
                            'class' => 'sel form-control',
                            'prompt' => '日'
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="form-group">
        <label for="" class="col-sm-3 col-md-2 control-label">所在地区：</label>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-12">
                    <?php echo $form->error($model, 'city'); ?>
                </div>                
                <div class="col-sm-4 mb10">
                    <div class="styled-select">
                        <?php
                        echo $form->dropDownList($model, 'state', $model->loadOptionsState(), array(
                            'prompt' => '-- 选择省份 --',
                            'class' => 'sel form-control',
                            'ajax' => array(
                                'type' => 'GET',
                                'url' => $this->createAbsoluteUrl('region/loadCities'),
                                'data' => array('state' => 'js:this.value'),
                                'update' => '#MedicalRecordForm_city',
                            )
                        ));
                        ?>
                    </div>               
                </div>

                <div class="col-sm-4 mb10">
                    <div class="styled-select">
                        <?php
                        echo $form->dropDownList($model, 'city', $model->loadOptionsCity(), array(
                            'prompt' => '-- 选择城市 --',
                            'class' => 'sel form-control',
                        ));
                        ?>
                    </div>
                </div>               
            </div>
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label" for="MedicalRecordForm_occupation">职业：</label>   
        <div class="col-sm-3 mb10">
            <?php echo $form->error($model, 'occupation'); ?>
            <div class="styled-select">
                <?php
                echo $form->dropDownList($model, 'occupation', $model->loadOptionsOccupation(), array(
                    'prompt' => '-- 选择职业 --',
                    'class' => 'sel form-control',
                ));
                ?>
            </div>  

        </div>
        <div class="clearfix"></div>
    </div>
</fieldset>
<fieldset class="mt20">
    <legend class="color-green">疾病信息</legend>
    <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label" for="MedicalRecordForm_patient_condition">病情描述：</label>   
        <div class="col-sm-9">
            <span class="help-block">请详细地写出目前的疾病状况（必填）</span>
            <?php echo $form->textarea($model, 'patient_condition', array('class' => 'form-control', 'rows' => 8)); ?>
            <?php echo $form->error($model, 'patient_condition'); ?>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label" for="MedicalRecordForm_surgery_history">手术史：</label>   
        <div class="col-sm-9">
            <span class="help-block">请详细地写出您过去所做过的手术（如果没有做过任何手术，请忽略）</span>
            <?php echo $form->textarea($model, 'surgery_history', array('class' => 'form-control', 'rows' => 8)); ?>

            <?php echo $form->error($model, 'surgery_history'); ?>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label" for="MedicalRecordForm_drug_history">用药史：</label>   
        <div class="col-sm-9">
            <span class="help-block">请详细地写出您过去曾用过的药物（如果没有记录，请忽略）</span>
            <?php echo $form->textarea($model, 'drug_history', array('class' => 'form-control', 'rows' => 8)); ?>

            <?php echo $form->error($model, 'drug_history'); ?>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label" for="MedicalRecordForm_disease_history">过往病史：</label>   
        <div class="col-sm-9">
            <span class="help-block">请详细地写出您过去所患过的其它疾病（如果没有记录，请忽略）</span>
            <?php echo $form->textarea($model, 'disease_history', array('class' => 'form-control', 'rows' => 8)); ?>

            <?php echo $form->error($model, 'disease_history'); ?>
        </div>
        <div class="clearfix"></div>
    </div>
</fieldset>

<div class="form-group mt30">
    <div class="col-sm-3 hide">
        <?php echo CHtml::link('<i class="fa fa-chevron-left"></i>&nbsp;查看更多医生信息', array('huizhen/'), array('class' => 'btn btn-warning btn-block')); ?>
    </div>
    <div class="col-sm-3 pull-right">
        <button type="submit" class="btn btn-success btn-block" name="yt1">提交&nbsp;<i class="fa fa-chevron-right"></i></button>       
    </div>
</div>

<?php
$this->endWidget();
?>
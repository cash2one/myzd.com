<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/js/multiple-select-master/multiple-select.css");
?>
<!--<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-multiselect.css">-->
<style>
    .ms-parent{padding:0;}
    .ms-parent>button.ms-choice{height:34px;line-height:34px;}
    .ms-parent.multiple{min-width:200px !important;}
    .ms-parent.multiple  li.group{background-color:#eee;font-size:1.2em;}
</style>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'doctor-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'htmlOptions' => array('class' => "form-horizontal", 'role' => 'form', 'autocomplete' => 'off'),
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
    'enableAjaxValidation' => true,
        ));
?>
<div class="hide">
    <input  class="hide" type="text" />
    <input class="hide"  type="password" />
</div>

<div class="form-group">    
    <label class="col-sm-3 control-label" for="DoctorForm_mobile">手机<span class="small text-muted">（用作登录ID）</span><span class="required">*</span></label>
    <div class="col-sm-8">
        <?php echo $form->textField($model, 'mobile', array('class' => 'form-control', 'placeholder' => '请输入手机号')); ?>        
        <?php echo $form->error($model, 'mobile'); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'password', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-8">
        <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => '4至20位英文或数字')); ?>                    
        <?php echo $form->error($model, 'password'); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'password_repeat', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-8">
        <?php echo $form->passwordField($model, 'password_repeat', array('class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => '请确认密码')); ?>                    
        <?php echo $form->error($model, 'password_repeat'); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'fullname', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-8">
        <?php echo $form->textField($model, 'fullname', array('class' => 'form-control', 'placeholder' => '请输入真实姓名')); ?>                    
        <?php echo $form->error($model, 'fullname'); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'gender', array('class' => 'col-sm-3 control-label')); ?>    
    <div class="col-sm-9">
        <?php
        $optionsGender = $model->getOptionsGender();
        if (emptyArray($optionsGender) === false) {
            echo '<div class="checkbox-groups">';
            foreach ($optionsGender as $key => $option) {
                echo '<label class="radio-inline">';
                if ($key == $model->gender) {
                    echo '<input type="radio" name="DoctorForm[gender]" value="' . $key . '" checked>';
                } else {
                    echo '<input type="radio" name="DoctorForm[gender]" value="' . $key . '">';
                }
                echo $option . '</label>';
            }
            echo '</div>';
        }
        ?>
        <?php echo $form->error($model, 'gender'); ?>
    </div>
    <div class="clearfix"></div>
</div>


<div class="form-group">
    <?php echo $form->labelEx($model, 'title', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-3">
        <div class="styled-select">
            <?php
            echo $form->dropDownList($model, 'title', $model->getOptionsTitle(), array(
                'prompt' => '职称',
                'class' => 'sel form-control',
            ));
            ?>
        </div>
        <?php echo $form->error($model, 'title'); ?>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'hospital_id', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-3">
        <div class="styled-select">
            <?php
            echo $form->dropDownList($model, 'hospital_id', $model->getOptionsHospital(), array(
                'prompt' => '选择医院',
                'class' => 'sel form-control',
                'id' => 'hospital'
            ));
            ?>
        </div>  
        <?php echo $form->error($model, 'hospital_id'); ?>
    </div>
    <div class="clearfix"></div>
</div>


<div class="form-group">
    <?php echo $form->labelEx($model, 'faculty', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-8">
        <?php echo $form->textField($model, 'faculty', array('class' => 'form-control', 'placeholder' => '您所在科室的名称')); ?>                    
        <?php echo $form->error($model, 'faculty'); ?>
    </div>
</div>


<div class="form-group">
    <?php echo $form->labelEx($model, 'disease_list', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-8">
        <div class="styled-select">
            <select id="select-disease" multiple="multiple" class="multiple form-control" name="DoctorForm[disease_list][]">                
                <?php
                $optionlist = $model->getOptionsDisease();
                $diseaselist = $model->getDiseaseList();
                $diseaselist = array();
                foreach ($optionlist as $key => $options) { //$key is name of disease category.
                    echo '<optgroup label="' . $key . '">';
                    foreach ($options as $id => $name) {
                        if (in_array($id, $diseaselist)) {
                            echo '<option value="' . $id . '" selected="selected">' . $name . '</option>';
                        } else {
                            echo '<option value="' . $id . '">' . $name . '</option>';
                        }
                    }
                    echo '</optgroup>';
                }
                ?>
            </select>
        </div>
        <?php echo $form->error($model, 'disease_list'); ?>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'expertise', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-8">
        <?php echo $form->textarea($model, 'expertise', array('class' => 'form-control', 'rows' => 3, 'maxlength' => 200, 'placeholder' => '请简略的描述下您所擅长的医学领域...')); ?>  
        <div class="help-block pull-right">（限：200字）</div>
        <?php echo $form->error($model, 'expertise'); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'tel', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-8">
        <?php echo $form->textField($model, 'tel', array('class' => 'form-control')); ?>                    
        <?php echo $form->error($model, 'tel'); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model, 'email', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-8">
        <?php echo $form->emailField($model, 'email', array('class' => 'form-control')); ?>                    
        <?php echo $form->error($model, 'email'); ?>
    </div>
</div>


<div class="form-group">
    <?php echo $form->labelEx($model, 'wechat', array('class' => 'col-sm-3 control-label')); ?>
    <div class="col-sm-8">
        <?php echo $form->textField($model, 'wechat', array('class' => 'form-control')); ?>                    
        <?php echo $form->error($model, 'wechat'); ?>
    </div>
</div>

<?php if ($model->scenario == 'new') { ?>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-8">
            <div class="checkbox pull-left">
                <label class="radio-label">
                    <?php echo $form->checkBox($model, 'terms', array('class' => 'radio-checkbox', 'value' => 1, 'checked' => true)); ?>同意名医之道<a class="nostyle" href="<?php echo $this->createUrl('site/page', array('view' => 'terms')); ?>" target="_blank">《在线服务条款》</a>
                </label>
            </div>
            <div class="clearfix"></div>
            <?php echo $form->error($model, 'terms'); ?>
        </div>
    </div>
<?php } ?>

<div class="form-group mt30">
    <div class="col-sm-offset-3 col-sm-8">
        <button type="submit" class="btn btn-success btn-lg btn-block">注册</button>			
    </div>
</div>
<?php $this->endWidget(); ?>

<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/multiple-select-master/jquery.multiple.select.js', CClientScript::POS_END);
?>
<script>

    $(document).ready(function(){
        $("select.multiple").multipleSelect({
            filter: true,
            multiple: true,
            selectAllText:'\u5168\u9009',
            allSelected:'\u5df2\u5168\u9009',
            countSelected:'\u5df2\u9009 # \u4e2a',
            placeholder:"\u8bf7\u9009\u62e9",
            multipleWidth:80       
        });
    });
</script>
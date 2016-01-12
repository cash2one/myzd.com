<?php
/*
 * $model UserProfileForm
 */

$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-profile-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // See class documentation of CActiveForm for details on this,
    // you need to use the performAjaxValidation()-method described there.
    'htmlOptions' => array(
        'class' => "form-horizontal",
        'role' => 'form'
    ),
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
    'enableAjaxValidation' => true,
        ));
?>

<div class="form-group">
    <div class="col-sm-3 control-label">
        <label>手机号：</label>
        <div class="text-muted">（登录ID）</div>
    </div>
    <div class="col-sm-9">
        <div class="form-control-static"><?php echo $model->mobile; ?></div>        
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label" for="UserProfileForm_gender">性别：</label>
    <div class="col-sm-9">
        <?php
        $optionsGender = $model->getOptionsGender();
        if (emptyArray($optionsGender) === false) {
            echo '<div class="checkbox-groups">';
            foreach ($optionsGender as $key => $option) {
                echo '<label class="radio-inline">';
                if ($key == $model->gender) {
                    echo '<input type="radio" name="UserProfileForm[gender]" value="' . $key . '" checked>';
                } else {
                    echo '<input type="radio" name="UserProfileForm[gender]" value="' . $key . '">';
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
    <label class="col-sm-3 control-label" for="UserProfileForm_dob">出生日期：</label>
    <div class="col-sm-9">
        <div class="row">
            <div class="col-sm-12">
                <?php echo $form->error($model, 'dob'); ?>
            </div>
            <div class="col-sm-4">
                <div class="styled-select">
                    <?php
                    echo $form->dropDownList($model, 'dob_year', $model->getOptionsDOBYear(), array(
                        'prompt' => '年份',
                        'class' => 'sel form-control',
                    ));
                    ?>
                </div>               
            </div>

            <div class="col-sm-4">
                <div class="styled-select">
                    <?php
                    echo $form->dropDownList($model, 'dob_month', $model->getOptionsDOBMonth(), array(
                        'prompt' => '月份',
                        'class' => 'sel form-control',
                    ));
                    ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="styled-select">
                    <?php
                    echo $form->dropDownList($model, 'dob_day', $model->getOptionsDOBDay(), array(
                        'class' => 'sel form-control',
                        'prompt' => '日期'
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- /- DOB -->

<div class="form-group">    
    <label class="col-sm-3 control-label" for="UserProfileForm_email">电子邮箱：</label>   
    <div class="col-sm-9">
        <?php echo $form->emailField($model, 'email', array('maxlength' => 255, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'email'); ?>
    </div>
    <div class="clearfix"></div>
</div>



<div class="form-group">
    <label class="col-sm-3 control-label" for="UserProfileForm_city_id">城市：</label>   
    <div class="col-sm-3">
        <div class="styled-select">
            <?php
            echo $form->dropDownList($model, 'city_id', $model->getOptionsCity(), array(
                'prompt' => '城市',
                'class' => 'sel form-control',
            ));
            ?>
        </div>  
        <?php echo $form->error($model, 'city_id'); ?>
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group mt30">
    <div class="col-sm-5 col-sm-offset-3">        
        <button type="submit" class="btn btn-success btn-lg btn-block" ><span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;保存</button>
    </div>
</div>
<?php $this->endWidget(); ?>
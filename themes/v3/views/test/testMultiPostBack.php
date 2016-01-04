<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-form',
        //  'enableAjaxValidation' => true,
        // 'action' => $this->createUrl('test/test'),
        //  'enableClientValidation' => true,
        ));
?>

<?php
$models = Doctor::model()->getAll();

foreach ($models as $model) {
    ?>

    <div class="form-group">
        <input name="Doctor[<?php echo $model->id;?>][id]"  type="hidden" value="<?php echo $model->id;?>">
        <input name="Doctor[<?php echo $model->id;?>][name]"  type="text" maxlength="45" value="<?php echo $model->name;?>">
        <input name="Doctor[<?php echo $model->id;?>][gender]"  type="text" value="<?php echo $model->gender;?>">
        <input name="Doctor[<?php echo $model->id;?>][hospital_id]"  type="text" value="<?php echo $model->hospital_id;?>">
    </div>


    <?php
}

/*
  foreach ($models as $model) {


  echo '<div class="form-group">';
  echo $form->hiddenField($model, 'id');
  echo $form->textField($model, 'name');
  echo $form->textField($model, 'gender');
  echo $form->textField($model, 'hospital_id');
  echo '</div>';

  }
 * 
 */
echo '<div>';
echo CHtml::submitButton('submit');
echo '</div>';
?>

<?php $this->endWidget(); ?>
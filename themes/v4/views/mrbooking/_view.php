<?php
/* @var $this MrBookingController */
/* @var $data MedicalRecordBooking */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mr_id')); ?>:</b>
	<?php echo CHtml::encode($data->mr_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('faculty_id')); ?>:</b>
	<?php echo CHtml::encode($data->faculty_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('appt_date')); ?>:</b>
	<?php echo CHtml::encode($data->appt_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('buffer_days')); ?>:</b>
	<?php echo CHtml::encode($data->buffer_days); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patient_intention')); ?>:</b>
	<?php echo CHtml::encode($data->patient_intention); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wechat')); ?>:</b>
	<?php echo CHtml::encode($data->wechat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_updated')); ?>:</b>
	<?php echo CHtml::encode($data->date_updated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_deleted')); ?>:</b>
	<?php echo CHtml::encode($data->date_deleted); ?>
	<br />

	*/ ?>

</div>
<?php
/* @var $this MrBookingController */
/* @var $model MedicalRecordBooking */

$this->breadcrumbs=array(
	'Medical Record Bookings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MedicalRecordBooking', 'url'=>array('index')),
	array('label'=>'Create MedicalRecordBooking', 'url'=>array('create')),
	array('label'=>'Update MedicalRecordBooking', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MedicalRecordBooking', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MedicalRecordBooking', 'url'=>array('admin')),
);
?>

<h1>View MedicalRecordBooking #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'mr_id',
		'faculty_id',
		'mobile',
		'status',
		'appt_date',
		'buffer_days',
		'patient_intention',
		'email',
		'wechat',
		'date_created',
		'date_updated',
		'date_deleted',
	),
)); ?>

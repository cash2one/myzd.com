<?php
/* @var $this MrBookingController */
/* @var $model MedicalRecordBooking */

$this->breadcrumbs=array(
	'Medical Record Bookings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MedicalRecordBooking', 'url'=>array('index')),
	array('label'=>'Create MedicalRecordBooking', 'url'=>array('create')),
	array('label'=>'View MedicalRecordBooking', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MedicalRecordBooking', 'url'=>array('admin')),
);
?>

<h1>Update MedicalRecordBooking <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
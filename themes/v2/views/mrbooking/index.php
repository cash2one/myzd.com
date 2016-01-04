<?php
/* @var $this MrBookingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Medical Record Bookings',
);

$this->menu=array(
	array('label'=>'Create MedicalRecordBooking', 'url'=>array('create')),
	array('label'=>'Manage MedicalRecordBooking', 'url'=>array('admin')),
);
?>

<h1>Medical Record Bookings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

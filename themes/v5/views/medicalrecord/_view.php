<?php
/* @var $this MedicalRecordController */
/* @var $data MedicalRecord */
$mrBooking = $data->mrBookings;
//var_dump($mrBooking);exit;
?>
<tr>
    <td class="patient_name"><?php echo $data->getName(); ?></td>  
    <td>
        <?php if (isset($mrBooking)) { ?>
            <div class="row">
                <label class="col-sm-5">预约号:</label>
                <div class="col-sm-7"><?php echo $mrBooking->getRefNumber(); ?></div>
            </div>
            <div class="row">
                <label class="col-sm-5">科室:</label>
                <div class="col-sm-7"><?php echo $mrBooking->getFacultyName(); ?></div>
            </div>
            <div class="row">
                <label class="col-sm-5">预约时间:</label>
                <div class="col-sm-7"><?php echo $mrBooking->getApptDate(); ?></div>
            </div>
            <div class="row">
                <label class="col-sm-5">联系人手机:</label>
                <div class="col-sm-7"><?php echo $mrBooking->getMobile(); ?></div>
            </div>
        <?php } ?>
    </td>

    <td>				
        <a href="<?php echo $this->createUrl('medicalrecord/view', array('id' => $data->getId())); ?>" target="_blank" class="btn btn-info btn-wide pull-right"><i class="fa fa-search"></i>&nbsp;查看详情</a>
    </td>
</tr>
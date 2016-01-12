<?php 
$bookingId = $booking->getId();
$mr = $booking->getMedicalRecord();
$patientName = $mr->getName();
$patientGender=$mr->getGender();
$patientAge = $mr->getPatientAge();
$patientCondition = $mr->getPatientCondition();
$patientIntention = $booking->getPatientIntention();
$billAmt = $booking->getTotalPrice();
?>

<div class="h2 text-center">专家预约</div>
<div class="mt30">
    <form class="form-horizontal" role="form" autocomplete="off" id="user-form" action="<?php echo $this->createUrl('payment/alipay', array('bid' =>$bookingId)); ?>" method="post">
        <input type="hidden" name="payment[bid]" id="payment_amt" value="<?php echo $bookingId;?>">        
        <div class="form-group">
            <div class=" col-sm-6 col-sm-offset-3 border pt20 pb20">
                <dl class="dl-horizontal">
                    <dt>患者姓名：</dt>
                    <dd><?php echo $patientName;?></dd>
                    <dt>性别：</dt>
                    <dd><?php echo $patientGender;?></dd>
                  <!--  <dt>年龄：</dt>
                    <dd><?php echo $patientAge;?></dd>
                  -->
                    <dt>疾病描述：</dt>
                    <dd>
                        <?php echo $patientCondition;?>
                    </dd>                    
    
                    <dt>就诊医院：</dt>
                    <dd>北京军区总医院</dd>
                    <dt>科室</dt>
                    <dd>肝胆外科</dd>
                    <dt>就诊医生：</dt>
                    <dd>陈永兵主任</dd>
                    
                    <br />
                    <dt></dt>
                    <dd></dd>
                    <dt>付款金额：</dt>
                    <dd>￥<?php echo $billAmt;?></dd>
                </dl>
            </div>
        </div>

        <div class="form-group mt30 mb30">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-success btn-lg btn-block">去付款&nbsp;<i class="fa fa-arrow-right"></i></button>			
            </div>
        </div>
    </form>
</div>
<br />
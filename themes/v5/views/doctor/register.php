<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time());       ?>	
<?php
/*
 * $model DoctorForm.
 */
$urlLogin = $this->createUrl('doctor/login');
?>
<div class="container">
    <div class="">
        <div class="col-sm-3 col-sm-offset-1 switch hidden-xs">
            <a href="<?php echo $this->createUrl("user/register"); ?>">
                <div class="switch-content">
                    <div class="switch-btn">
                        <i class="fa fa-user"></i>
                        <div class="mt30"><i class="fa fa-angle-left"></i>&nbsp;用户注册</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="">
                <div class="border-bottom">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h3>医生注册</h3>
                        </div>
                        <div class="pull-right mt20 visible-xs">
                            <a class="btn btn-info btn-small" href="<?php echo $this->createUrl('user/register') ?>">用户注册&nbsp;<i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class=""></div>
            </div>
            <div class="mt20">
                <?php
                if ($this->hasFlashMessage("doctor.success")) {
                    $this->renderPartial("_success");
                } else {
                    $this->renderPartial('_form', array('model' => $model));
                }
                ?>
            </div>
            <div class="mt30"></div>
        </div>  	
    </div>
</div>
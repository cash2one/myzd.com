<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time()); ?>	
<?php
/*
 * $model RegisterForm.
 */
$urlLogin = $this->createUrl('user/login');
?>
<div class="container">
    <div class="">
        <!--
        <div class="col-sm-5 col-left mt50 hidden-xs pb50">
            <div class="bg-register"></div>        
        </div>
        -->
        <div>
            <div class="clearfix">
                <div class="col-sm-3 col-sm-offset-1 switch hidden-xs">
                    <a href="<?php echo $this->createUrl("doctor/register"); ?>">
                        <div class="switch-content">
                            <div class="switch-btn">
                                <i class="fa fa-user-md"></i>
                                <div class="mt30"><i class="fa fa-angle-left"></i>&nbsp;医生注册</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <div class="clearfix border-bottom">
                        <div class="pull-left">
                            <h3>用户注册</h3>
                        </div>
                        <div class="pull-right mt20 visible-xs">
                            <a class="btn btn-info btn-small" href="<?php echo $this->createUrl("doctor/register"); ?>">医生注册&nbsp;<i class="fa fa-chevron-right"></i></a>
                        </div>

                    </div>
                    <div class="mt20">
                        <?php
                        if ($model->scenario == 'success') {
                            $this->widget('MessageBox', array(
                                'message' => '恭喜！您已经成功注册为' . Yii::app()->name . '用户！',
                                'buttonLabel' => '现在就登录',
                                'buttonUrl' => $urlLogin
                            ));
                        } else {
                            // var_dump($model->attributes);var_dump($model->getErrors());
                            $this->renderPartial('_formRegister', array('model' => $model));
                            //$this->renderPartial('_formRegisterSms', array('model' => $model));
                        }
                        ?>    
                    </div>
                </div>
            </div>   

        </div>
    </div>
</div>
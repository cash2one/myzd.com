<?php Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/user100.min.css"); ?>	
<?php
/*
 * $model RegisterForm.
 */
$urlLogin = $this->createUrl('user/login');
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
?>
<div class="container">
    <div class="">
        <!--
        <div class="col-sm-5 col-left mt50 hidden-xs pb50">
            <div class="bg-register"></div>        
        </div>
        -->
        <div>
            <div class="clearfix mt40">
                <div class="col-sm-7 mt50">
                    <div>
                        <img src="http://static.mingyizhudao.com/146010389103757"/>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="clearfix">
                        <div class="">
                            <h3 class="color-green lettersp5">感谢您选择名医主刀！</h3>
                        </div>
                        <div class="mt20 text-right">
                            <a id="toLogin" class="text-right toLogin">已有账号？去登录</a>
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
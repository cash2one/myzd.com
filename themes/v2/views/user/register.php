<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time()); ?>	
<?php
/*
 * $model RegisterForm.
 */
$urlLogin = $this->createUrl('user/login');
?>
<div id="user-col-2" class="row">
    <div class="col-sm-5 col-left mt50 hidden-xs pb50">
        <div class="bg-register"></div>        
    </div>
    <div class="col-sm-6">
        <div class="clearfix">
            <div class="col-sm-10 col-sm-offset-1" >
                <div class="row border-bottom">
                    <h3>用户注册
                        <sub class="mt5 small pull-right">已有账号？直接<a class="nostyle" href="<?php echo $urlLogin; ?>">登录</a></sub>
                    </h3>
                </div>
            </div>
        </div>

        <div class="clearfix mt20">
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
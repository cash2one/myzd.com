<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time()); ?>
<div class="container">
    <div id="user-col-2" class="row">
        <div class="col-sm-5 col-left mt50 hidden-xs pb50">
            <div class="bg-register"></div>        
        </div>
        <div class="col-sm-6">
            <div class="clearfix">
                <div class="col-sm-10 col-sm-offset-1" >
                    <div class="border-bottom">
                        <h3>用户登陆
                            <sub class="mt5 small pull-right">没有账号？立即<a class="nostyle" href="<?php echo $this->createUrl('user/register'); ?>">注册</a></sub>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="clearfix mt20">

                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'user-form',
                    'action' => $this->createUrl('/user/login'),
                    // Please note: When you enable ajax validation, make sure the corresponding
                    // controller action is handling ajax validation correctly.
                    // There is a call to performAjaxValidation() commented in generated controller code.
                    // See class documentation of CActiveForm for details on this.
                    'htmlOptions' => array('class' => "form-horizontal", 'role' => 'form', 'autocomplete' => 'off'),
                    'enableClientValidation' => true,
                    'clientOptions' => array(
                        'validateOnSubmit' => true,
                        'validateOnType' => true,
                        'validateOnDelay' => 500,
                       'errorCssClass' => 'error',
                    ),
                        //  'enableAjaxValidation' => true,
                ));
                ?>
                <!--
                <div class="hide">
                    <input  class="hide" type="text" />
                    <input class="hide"  type="password" />
                </div>
                -->
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'username', array('class' => 'col-sm-3 control-label')); ?>                
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'placeholder' => '输入手机号')); ?>
                        <?php echo $form->error($model, 'username'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'password', array('class' => 'col-sm-3 control-label')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => '输入密码')); ?>                    
                        <?php echo $form->error($model, 'password'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-3">   
                        <?php echo $form->checkBox($model, 'rememberMe', array('class' => 'radio-checkbox')); ?>
                        <?php echo $form->label($model, 'rememberMe', array('class' => 'radio-label')); ?>
                        <?php echo $form->error($model, 'rememberMe'); ?>

                        <div class="pull-right hide">
                            <a class="nostyle strong" href="<?php echo $this->createUrl('user/forgetPassword'); ?>">>>忘记密码？</a>
                        </div>
                    </div>
                </div>


                <div class="form-group mt30 mb30">
                    <div class="col-sm-offset-3 col-sm-8">
                        <button type="submit" class="btn btn-yes btn-lg btn-block">登录</button>			
                    </div>
                </div>
                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>
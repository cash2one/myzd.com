<?php //Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/js/fotorama/fotorama.css" . "?v=" . time());  ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/user.css" . "?v=" . time()); ?>
<?php
/*
 * $model UserPasswordForm.
 */
?>
<div class="row dis-nav">
    <div class="col-sm-12" style="border-right:1px solid #fff;">
        <div class="h3 mt10">
            <a class="" href="">我的中心</a>
        </div>
    </div>
</div>
<div class="row">
    <!-- col-sm-3 -->
    <?php $this->renderPartial('//layouts/_sidemenu-b', array('activeTab' => 'tab-password')); ?>
    <!-- /-col-sm-3 -->
    <div class="col-sm-9">	
        <div class="tab-content row">
            <div id="changepassword" class="mt10 tab-pane active">
                <div class="clearfix">
                    <div class="tab-pane-title h3  col-sm-12">修改密码</div>
                </div>
                <div class="tab-pane-content border">
                    <div class="mt20">
                        <?php $this->renderPartial('_formPassword', array('model' => $model)); ?>
                    </div>
                </div>
            </div>

            <div id="recordnew" class="mt10 tab-pane active" data-title="新的病历"></div>

            <div id="recordaccepted" class="mt10 tab-pane" data-title="已受理病历"></div>

            <div id="recordcompleted" class="mt10 tab-pane" data-title="已完成病历"></div>


        </div>
    </div>
</div>
<!-- End Content -->
<?php Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/user100.min.css"); ?>
<?php
/*
 * $model User.
 * $userPasswordForm UserPasswordForm.
 */
?>
<div class="row dis-nav hide">
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

    <div class="col-sm-9 page-content">	
        <div class="tab-content row">
            <div id="changepassword" class="mt10 tab-pane active">
                <div class="clearfix">
                    <div class="tab-pane-title h3  col-sm-12">修改密码</div>
                </div>
                <div class="tab-pane-content border">
                    <div class="mt20">
                        <?php $this->renderPartial('_formPassword', array('model' => $userPasswordForm)); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->
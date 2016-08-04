<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/js/fotorama/fotorama.css" . "?v=" . time()); ?>
<?php Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/user100.min.css"); ?>
<?php
/*
 * $model User.
 * $profileForm UserProfileForm.
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
    <div class="col-sm-3">
        <div class="">
            <?php $this->renderPartial('_columnLeft', array('activeTab' => 'tab-profile')); ?>
        </div>
    </div>
    <div class="col-sm-9">	
        <div class="tab-content row">
            <div id="profile" class="mt10 tab-pane active">
                <div class="clearfix">
                    <div class="tab-pane-title h3 col-sm-12">修改-我的信息
                        <a class="nostyle pull-right small" href="<?php echo $this->createUrl('user/account'); ?>"><span class="glyphicon glyphicon-remove-sign"></span>&nbsp;取消</a>
                    </div>
                </div>

                <div class="tab-pane-content border">
                    <?php $this->renderPartial('_formProfile', array('model' => $profileForm)); ?>
                </div>
            </div>

            <div id="recordnew" class="mt10 tab-pane active" data-title="新的病历"></div>

            <div id="recordaccepted" class="mt10 tab-pane" data-title="已受理病历"></div>

            <div id="recordcompleted" class="mt10 tab-pane" data-title="已完成病历"></div>
        </div>
    </div>
</div>
<!-- End Content -->
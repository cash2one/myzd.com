<?php
Yii::app()->clientScript->registerCssFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/webuploader/css/webuploader.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/js/webuploader/css/webuploader.custom.css');
//Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/bootstrap.min.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.form.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.validate.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/webuploader/js/webuploader.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/custom/testBooking.js', CClientScript::POS_END);
/*
 * $model BookQuickForm
 */
//$this->show_footer = false;
$urlSubmitForm = $this->createUrl("booking/ajaxCreate");
$urlUploadFile = $this->createUrl("booking/ajaxUploadFile");
$urlReturn = '#success';
$this->pageTitle = '我要预约_名医主刀';
?>
<style>
    #site-header{border-bottom:1px solid #ddd;}
    .page-content .heading-u{margin-bottom:0;}
    .page-content .panel{border-top:none;border-radius:0;}
    .page-content .panel-body{padding-top:30px;}   
</style>
<div class="container">
    <div class="">
        <div class="page-content">
            <div class="row">
                <div class="panel panel-default">             
                    <div class="panel-body">  
                        <div class="form-wrapper  col-sm-8 col-sm-offset-1">
                            <?php
                            $form = $this->beginWidget('CActiveForm', array(
                                'id' => 'booking-form',
                                'action' => $urlSubmitForm,
                                'htmlOptions' => array("enctype" => "multipart/form-data", 'data-url-uploadFile' => $urlUploadFile, 'data-url-return' => $urlReturn),
                                'enableClientValidation' => false,
                                'clientOptions' => array(
                                    'validateOnSubmit' => true,
                                    'validateOnType' => true,
                                    'validateOnDelay' => 500,
                                    'errorCssClass' => 'error',
                                ),
                                'enableAjaxValidation' => false,
                            ));
                            ?>
                            <div class="form-group">    
                                <div class="col-sm-12">
                                    <div id="uploader">
                                        <div class="queueList">
                                            <div id="dndArea" class="placeholder">
                                                <!-- btn 选择图片 -->
                                                <div id="filePicker"></div>
                                            <!-- <p>或将照片拖到这里，单次最多可选10张</p>-->
                                            </div>
                                            <ul class="filelist"></ul>
                                        </div>
                                        <div class="statusBar clearfix" style="display:none;">
                                            <div class="progress" style="display: none;">
                                                <span class="text">0%</span>
                                                <span class="percentage" style="width: 0%;"></span>
                                            </div>
                                            <div class="info">共0张（0B），已上传0张</div>
                                            <div class="">
                                                <!-- btn 继续添加 -->
                                                <div id="filePicker2" class="pull-right"></div>                          
                                                <button id="btnSubmit" type="button" class="btn btn-lg btn-yes btn-block" name="">提&nbsp;交</button>   
                                            </div>
                                        </div>
                                        <!--一开始就显示提交按钮就注释上面的提交 取消下面的注释 -->
                                        <!-- <div class="statusBar uploadBtn">提交</div>-->
                                    </div>
                                </div>
                            </div>
                            <?php
                            $this->endWidget();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
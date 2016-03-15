<?php
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.form.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/mobile/js/jquery.validate.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . "/js/custom/comment.js", CClientScript::POS_HEAD);

$urlSubmitForm = $this->createUrl("comment/ajaxCreate");
$urlReturn = $this->createUrl("comment/view");
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'comment-form',
    'action' => $urlSubmitForm,
    'htmlOptions' => array("enctype" => "multipart/form-data", 'data-url-return' => $urlReturn),
    'enableClientValidation' => false,
    'clientOptions' => array(
        'validateOnSubmit' => true,
        'validateOnType' => true,
        'validateOnDelay' => 500,
        'errorCssClass' => 'error',
    ),
    'enableAjaxValidation' => false,
        ));

echo CHtml::hiddenField("CommentForm[bk_type]", StatCode::TRANS_TYPE_BK);
echo CHtml::hiddenField("CommentForm[bk_id]", $booking->id);
echo CHtml::hiddenField("CommentForm[doctor_id]", $booking->doctor_id);
echo CHtml::hiddenField("CommentForm[service]", 5);
echo CHtml::hiddenField("CommentForm[post_operative]", 5);
?>

<div class="form-group mt10">
    <div class="controls">   
        <?php
        echo $form->textarea($model, 'comment_text', array('placeholder' => '请填写其他分享与评价', 'class' => 'form-control', 'maxlength' => 1000, 'rows' => 3));
        echo $form->error($model, 'comment_text');
        ?>                              
    </div>
    <div class="clearfix"></div>
</div>
<div class="form-group">
    <div class="text-right mt10">
        <button id="btnCommentSubmit" type="button" class="btn btn-yes" name="">&nbsp;&nbsp; 发表评价 &nbsp;&nbsp;</button>       
    </div>
    <div class="clearfix"></div>
</div>
<?php
$this->endWidget();
?>
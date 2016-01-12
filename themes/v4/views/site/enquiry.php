<style type="text/css">
    #site-header{border-bottom:1px solid #ddd;}
    .page-content .heading-u{margin-bottom:0;}
    .page-content .panel{border-top:none;border-radius:0;}
    .page-content .panel-body{padding-top:30px;}    
</style>
<?php
/**
 * $model ContactEnquiryForm.
 * $this SiteController.
 */
?>
<div class="container">
    <div class="mb20">
        <div id="sidemenu" class="col-sm-2">
            <?php $this->renderPartial('pages/_menu'); ?>
        </div>
        <div class="col-sm-10 page-content">
            <div class="row">
                <div class="panel panel-default">             
                    <div class="panel-body pt0">                          
                        <div class="mt10">
                            <?php
                            $form = $this->beginWidget('CActiveForm', array(
                                'id' => 'contact-enquiry-form',
                                'action' => $this->createUrl('site/enquiry'),
                                'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form'),
                                'enableClientValidation' => true,
                                'clientOptions' => array(
                                    'validateOnSubmit' => true,
                                    'validateOnType' => true,
                                    'validateOnDelay' => 500,
                                    'errorCssClass' => 'error',
                                ),
                                'enableAjaxValidation' => true,
                            ));
                            ?>
                            <div class="form-group  form-result-success">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="alert alert-success alert-dismissable text-center">                                 
                                        <div>提交成功<i class="fa fa-check"></i></div><div>我们的名医助手会在第一时间与您确认预约的详情。</div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-3">
                                    <div class="help-block">请详细的填写以下信息： </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">患者姓名：</label>
                                <div class="col-sm-5 col-md-4">                                
                                    <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'maxlength' => 45, 'placeholder' => "患者的真实姓名")); ?>
                                    <?php echo $form->error($model, 'name'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">患者年龄：</label>
                                <div class="col-sm-5 col-md-4">
                                    <div class="styled-select">
                                        <?php
                                        echo $form->dropDownList($model, 'age', $model->loadOptionsAge(), array(
                                            'prompt' => '-- 选择年龄 --',
                                            'class' => 'sel form-control'
                                        ));
                                        ?>
                                    </div> 
                                    <?php echo $form->error($model, 'age'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">手机号码：</label>
                                <div class="col-sm-5 col-md-4">                          
                                    <?php echo $form->textField($model, 'mobile', array('class' => 'form-control', 'maxlength' => 11, 'placeholder' => "您的手机号码")); ?>
                                    <?php echo $form->error($model, 'mobile'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">科室：</label>
                                <div class="col-sm-5 col-md-4">
                                    <div class="styled-select">
                                        <?php
                                        echo $form->dropDownList($model, 'faculty_id', $model->loadOptionsFaculty(), array(
                                            'prompt' => '-- 选择科室 --',
                                            'class' => 'sel form-control'
                                        ));
                                        ?>
                                    </div> 
                                    <?php echo $form->error($model, 'faculty_id'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">病情描述：</label>
                                <div class="col-sm-5 col-md-4">                                
                                    <?php echo $form->textarea($model, 'patient_condition', array('class' => 'form-control', 'maxlength' => 200, 'rows' => 4, 'placeholder' => "请详细的描述患者目前的病情（限200个字）")); ?>
                                    <?php echo $form->error($model, 'patient_condition'); ?>
                                </div>
                            </div>

                            <div class="form-group mt50">
                                <div class="col-md-offset-3 col-sm-5 col-md-4">
                                    <?php
                                    echo CHtml::ajaxSubmitButton('提交', CHtml::normalizeUrl(array('site/enquiry', 'render' => true)), array(
                                        'dataType' => 'json',
                                        'type' => 'post',
                                        'beforeSend' => 'function(){$("#btnSubmitEnquiry").button("loading");}',
                                        'success' => 'function(data) {
                         var domForm = $("#contact-enquiry-form");
                        if(data.status=="true"){ 
                         domForm.find(".form-result-success").show();
                         domForm[0].reset();
                        }
                         else{
                         domForm.find(".form-result-success").hide();
                        $.each(data, function(key, val) {
                        domForm.find("#"+key+"_em_").text(val);
                        domForm.find("#"+key+"_em_").show();
                        });
                        }       
                    }',
                                        'complete' => 'function(){$("#btnSubmitEnquiry").button("reset");}'
                                            ), array('id' => 'btnSubmitEnquiry', 'class' => 'btn btn-yes btn-lg btn-block', 'data-loading-text' => '提交中...'));
                                    ?>
                                </div>
                            </div>
                            <?php $this->endWidget(); ?>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-site-enquiry" tabindex="-1" role="dialog" aria-labelledby="modal-site-enquiry" aria-hidden="true" backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php
            $model = new ContactEnquiryForm();
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'contact-enquiry-form',
                'action' => $this->createUrl('site/enquiry'),
                'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form', 'data-status' => 1),
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

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" class="glyphicon glyphicon-remove-sign"></span></button>
                <div><h4 class="modal-title color-green strong"><i class="fa fa-headphones"></i>&nbsp;快速咨询</h4></div>
            </div>
            <div class="modal-body">
                <div class="form-result-success mt20">
                    <div class="alert alert-success alert-dismissable text-center">                                 
                        <div>提交成功<i class="fa fa-check"></i></div><div>我们的名医助手会在第一时间与您确认预约的详情。</div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">患者姓名：</label>
                    <div class="col-sm-5 col-md-5">                                
                        <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'maxlength' => 45, 'placeholder' => "患者的真实姓名")); ?>
                        <?php echo $form->error($model, 'name'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">患者年龄：</label>
                    <div class="col-sm-5 col-md-5">
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
                    <div class="col-sm-5 col-md-5">                          
                        <?php echo $form->textField($model, 'mobile', array('class' => 'form-control', 'maxlength' => 11, 'placeholder' => "您的手机号码")); ?>
                        <?php echo $form->error($model, 'mobile'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">科室：</label>
                    <div class="col-sm-5 col-md-5">
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
                    <div class="col-sm-8">                                
                        <?php echo $form->textarea($model, 'patient_condition', array('class' => 'form-control', 'maxlength' => 200, 'rows' => 4, 'placeholder' => "请详细的描述患者目前的病情（限200个字）")); ?>
                        <?php echo $form->error($model, 'patient_condition'); ?>
                    </div>
                </div>                

            </div>

            <div class="modal-footer">
                <!--<div class="text-info text-center">感谢您的兴趣！<br />我们会在24小时之内联系您。</div>-->
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                        <?php
                        echo CHtml::ajaxSubmitButton('提交', CHtml::normalizeUrl(array('site/enquiry', 'render' => true)), array(
                            'dataType' => 'json',
                            'type' => 'post',
                            'beforeSend' => 'function(){$("#btnSubmitEnquiry").button("loading");}',
                            'success' => 'function(data) {
                         var domForm = $("#contact-enquiry-form");
                        if(data.status=="true"){
                        domForm.parents(".modal-dialog").addClass("modal-sm");
                        domForm.addClass("success");                         
                         domForm[0].reset();
                        }
                         else{
                        $.each(data, function(key, val) {
                        domForm.find("#"+key+"_em_").text(val);
                        domForm.find("#"+key+"_em_").show();
                        });
                        }       
                    }',
                            'complete' => 'function(){$("#btnSubmitEnquiry").button("reset");}'
                                ), array('id' => 'btnSubmitEnquiry', 'class' => 'btn btn-success btn-lg btn-block', 'data-loading-text' => '提交中...'));
                        ?>
                    </div>
                </div>
                <div class="form-result-success text-center">                    
                    <button type="button" class="btn btn-success btn-lg btn-wide" data-dismiss="modal">关闭</button>                    
                </div>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>
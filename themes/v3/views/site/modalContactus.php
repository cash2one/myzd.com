<div class="modal fade" id="modal-contactus" tabindex="-1" role="dialog" aria-labelledby="modal-contactus" aria-hidden="true" backdrop="static">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <?php
            $model = new ContactForm();

            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'contactus-form',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // There is a call to performAjaxValidation() commented in generated controller code.
                // See class documentation of CActiveForm for details on this.
                'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form'),
                'action' => $this->createUrl('site/contactus'),
                'enableAjaxValidation' => true,
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                  /*  'afterValidate' => 'js:function(form,data,hasError){  
                        if(!hasError){  
                            console.log(form);
                            
                                $.ajax({  
                                        "type":"POST",  
                                        //"url":"login",  
                                       // "data":$("#contactus-form").serialize()+"&ajax=1",  
                                       "url":form.attr("action"),
                                       "data":form.serialize()+"&ajax=1",
                                        "success":function(response){
                                            
                                          console.log(response);
                                          }
                                        });  
                                        
                                }  
                        }'
                   * 
                   
                   */
                ),
                    ));
            ?>

            <div class="modal-header noborder">

                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" class="glyphicon glyphicon-remove-sign"></span></button>
                <div><h4 class="modal-title color-green strong">联系我们</h4></div>
            </div>
            <div class="modal-body pt5">
                <div class="text-center hide">
                    <div class="alert alert-info"><p>请留下您的手机号，我们会第一时间联系您，或者发邮件至： <a href="mailto:service@mingyihz.com">service@mingyihz.com</a></p></div>
                </div>

                <div class="mb10">
                    <?php echo $form->labelEx($model, 'mobile', array('class' => 'control-label')); ?>
                </div>
                <div>
                    <?php echo $form->textField($model, 'mobile', array('class' => 'form-control', 'placeholder' => "您的手机号")); ?>
                    <?php echo $form->error($model, 'mobile'); ?>
                </div>
            </div>

            <div class="modal-footer pt5 pb5 noborder">
                <div class="text-info text-center">感谢您的兴趣！<br />我们会在24小时之内联系您。</div>
                <div class="mt20 mb10">
                    <div class="">
                        <?php echo CHtml::submitButton('提交', array('class' => 'btn btn-success btn-lg btn-block')); ?>
                    </div>
                </div>

            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>
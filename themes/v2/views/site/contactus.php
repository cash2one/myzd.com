<style type="text/css">
    #site-header{border-bottom:1px solid #ddd;}
    .page-content .heading-u{margin-bottom:0;}
    .page-content .panel{border-top:none;border-radius:0;}
    .page-content .panel-body{padding-top:30px;}    

</style>
<div id="sidemenu" class="row mb20">
    <div class="col-sm-3">
        <?php
        $this->renderPartial('pages/_menu');
        ?>
    </div>
    <div class="col-sm-8 page-content">
        <div class="row">
            <section class="clearfix">
                <div class="heading-u">
                    <div class="text">联系我们</div>
                    <div class="divider"></div>
                </div>                
            </section>
            <div class="panel panel-default">             
                <div class="panel-body pt0">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-2">
                            <div class="alert xalert-info mb0">您可以通过以下方式联系我们：</div>

                            <table class="table mb0">
                                <tr class="noborder"><td><span class="strong">电话：</span></td><td class="strong color-green">400-119-7900</td></tr>
                                <tr class="noborder"><td><span class="strong">邮箱：</span></td><td><a class="text-info" href="mailto:service@mingyihz.com">service@mingyihz.com</a></td></tr>
                                <tr class="noborder"><td><span class="strong">微信：</span></td><td><img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/wx_qrcode_100x100.jpg" width="100px"/></td></tr>                                    
                            </table>
                        </div>
                    </div>
                    <?php if ($this->hasFlashMessage('contactus')) { ?>

                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="alert alert-success text-center">
                                    <?php echo Yii::app()->user->getFlash('contactus'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mt50 mb30">
                            <div class="col-sm-10 col-sm-offset-1">
                                <a class="btn btn-success btn-lg btn-block" href="<?php echo $this->getHomeUrl(); ?>">回首页</a>
                            </div>
                        </div>
                    <?php } else { ?>

                        <div>
                            <?php
                            $form = $this->beginWidget('CActiveForm', array(
                                'id' => 'contactus-form',
                                'enableClientValidation' => true,
                                'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form'),
                                'clientOptions' => array(
                                    'validateOnSubmit' => true,
                                ),
                                'enableAjaxValidation' => true,
                                    ));
                            ?>


                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <div class="alert xalert-info mb0">您也可以留下你的的手机号及咨询内容，我们会第一时间联系你：</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">手机：</label>
                                <div class="col-sm-8">                                
                                    <?php echo $form->textField($model, 'mobile', array('class' => 'form-control', 'maxlength'=>11, 'placeholder' => "您的手机号码")); ?>
                                    <?php echo $form->error($model, 'mobile'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">咨询：</label>
                                <div class="col-sm-8">                                
                                    <?php echo $form->textarea($model, 'message', array('class' => 'form-control', 'maxlength'=>200, 'rows' => 4, 'placeholder' => "请填写您的咨询内容")); ?>
                                    <?php echo $form->error($model, 'message'); ?>
                                </div>
                            </div>

                            <div class="form-group mt30">
                                <div class="col-md-offset-3 col-md-8">
                                    <?php echo CHtml::submitButton('提交', array('class' => 'btn btn-success btn-lg btn-block')); ?>
                                </div>
                            </div>

                            <?php
                            $this->endWidget();
                        }
                        ?>     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        //  $('.dropdown-toggle').dropdown();
    });
</script>
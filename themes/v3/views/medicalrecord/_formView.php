<style type="text/css">
    #mr-form fieldset{display:block;width:100%;}
    #mr-form fieldset .help-block, #mr-form .visible-on-active{display:block;}
    #mr-form fieldset.disabled .help-block, #mr-form.disabled .visible-on-active{display:none;}
</style>
<?php
/*
 * $model MedicalRecord.
 * $mrForm MedicalRecordForm.
 */
$urlMrUpdate = $this->createUrl('ajaxUpdate', array('id' => $model->getId()));
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'mr-form',
    'action' => $this->createUrl('medicalrecord/create'),
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'htmlOptions' => array('class' => "form-horizontal disabled", 'role' => 'form', 'autocomplete' => 'off'),
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => false,
        'validateOnType' => true,
        'validateOnDelay' => 500,
        'errorCssClass' => 'error',
    ),
    'enableAjaxValidation' => false,
        //'focus' => array($model, 'name'),
        ));

echo '<input type="hidden" value="' . $model->getId() . '" name="id">';
?>

<div id="form-success" class="row hide">
    <div class="col-sm-5 col-sm-offset-3">
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <span>病例上传成功！</span>
        </div>
    </div>
</div>
<fieldset id="mr-patient-info" class="disabled">
    <legend class="color-green">患者信息</legend>
    <div class="form-group">
        <label for="" class="col-sm-3 col-md-2 control-label">姓名：</label>
        <div class="col-sm-4"> 
            <div class="form-control-static"><?php echo $model->getName(); ?></div>
            <?php echo $form->hiddenField($mrForm, 'name'); ?>            
        </div>
    </div>

    <div class="form-group">
        <label for="" class="col-sm-3 col-md-2 control-label">身份证：</label>
        <div class="col-sm-4">
            <div class="form-control-static"><?php echo $model->getNRIC(); ?></div>
            <?php echo $form->hiddenField($mrForm, 'nric'); ?> 
        </div>
    </div>


    <div class="form-group">
        <label for="" class="col-sm-3 col-md-2 control-label">性别：</label>
        <div class="col-sm-4">        
            <div class="form-control-static"><?php echo $model->getGender(); ?></div>
            <?php echo $form->hiddenField($mrForm, 'gender'); ?>     
        </div>
    </div>

    <div class="form-group">
        <label for="" class="col-sm-3 col-md-2 control-label">出生日期：</label>
        <div class="col-sm-4">
            <div class="form-control-static"><?php echo $model->getDob(); ?></div>
            <?php echo $form->hiddenField($mrForm, 'dob'); ?>   
        </div>
    </div>


    <div class="form-group">
        <label for="" class="col-sm-3 col-md-2 control-label">所在地区：</label>
        <div class="col-sm-4">
            <div class="form-control-static"><?php echo $model->getCityName() . '&nbsp;&nbsp;' . $model->getStateName(); ?></div>
            <?php echo $form->hiddenField($mrForm, 'city'); ?>
            <?php echo $form->hiddenField($mrForm, 'state'); ?>
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label" for="MedicalRecordForm_occupation">职业：</label>   
        <div class="col-sm-4">
            <div class="form-control-static"><?php echo $model->getOccupation(); ?></div>
            <?php echo $form->hiddenField($mrForm, 'occupation'); ?>          
        </div>
    </div>
</fieldset>
<div class="pull-right" style="margin-top:20px;margin-bottom:-26px;">
    <a class="btnMrTriggerUpdate btn btn-warning btn-wide" href="javascript:void(0);" type="button"><i class="fa fa-pencil-square-o"></i>&nbsp;修改信息</a>
    <a class="btnMrCancelUpdate btn btn-danger btn-wide" href="javascript:void(0);" type="button" style="display:none;"><i class="fa fa-undo"></i>&nbsp;取消</a>
</div>
<fieldset id="mr-disease-info" class="disabled" disabled>
    <legend class="color-green">疾病信息</legend>
    <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label" for="MedicalRecordForm_patient_condition">病情描述：</label>   
        <div class="col-sm-9">
            <span class="help-block">请详细地写出目前的疾病状况（必填）</span>
            <?php echo $form->textarea($mrForm, 'patient_condition', array('class' => 'form-control', 'rows' => 8)); ?>
            <?php echo $form->error($mrForm, 'patient_condition'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label" for="MedicalRecordForm_surgery_history">手术史：</label>   
        <div class="col-sm-9">
            <span class="help-block">请详细地写出您过去所做过的手术（如果没有做过任何手术，请忽略）</span>
            <?php echo $form->textarea($mrForm, 'surgery_history', array('class' => 'form-control', 'rows' => 8)); ?>

            <?php echo $form->error($mrForm, 'surgery_history'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label" for="MedicalRecordForm_drug_history">用药史：</label>   
        <div class="col-sm-9">
            <span class="help-block">请详细地写出您过去曾用过的药物（如果没有记录，请忽略）</span>
            <?php echo $form->textarea($mrForm, 'drug_history', array('class' => 'form-control', 'rows' => 8)); ?>

            <?php echo $form->error($mrForm, 'drug_history'); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 col-md-2 control-label" for="MedicalRecordForm_disease_history">过往病史：</label>   
        <div class="col-sm-9">
            <span class="help-block">请详细地写出您过去所患过的其它疾病（如果没有记录，请忽略）</span>
            <?php echo $form->textarea($mrForm, 'disease_history', array('class' => 'form-control', 'rows' => 8)); ?>

            <?php echo $form->error($mrForm, 'disease_history'); ?>
        </div>
    </div>
</fieldset>

<div class="form-group mt30 visible-on-active">
    <div class="col-sm-3 pull-right">
        <a class="btnMrSavePatient btn btn-success btn-wide" data-loading-text="处理中..." href="<?php echo $this->createUrl('update', array('id' => $model->getId())); ?>" type="button" style="display:none;"><i class="fa fa-save"></i>&nbsp;保存</a>      
    </div>
</div>

<?php
$this->endWidget();
?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".btnMrTriggerUpdate").click(function(e){
            e.preventDefault();
            //  $(this).siblings(".btnMrSavePatient").show();
            //  $(this).hide();
            enableMrForm(true);            
        });
        $(".btnMrCancelUpdate").click(function(e){
            e.preventDefault();
            //  $(this).siblings(".btnMrSavePatient").show();
            //  $(this).hide();
            enableMrForm(false);            
        });
        $(".btnMrSavePatient").click(function(e){
            e.preventDefault();
            $(this).button("loading");
            saveMrInfo($(this));
            
            //  $(this).siblings(".btnMrTriggerUpdate").show();
            //   $(this).hide();
            //  enableMrForm(false);
        });
        
        function enableMrForm(enable){
            var domForm = $("#mr-form");
            if(enable){
                domForm.removeClass("disabled");
                domForm.find("#mr-disease-info").attr("disabled", false).removeClass("disabled");   
                domForm.find(".btnMrTriggerUpdate").hide();
                domForm.find(".btnMrCancelUpdate").show();
                domForm.find(".btnMrSavePatient").show();                
            }
            else{
                domForm.addClass("disabled");
                domForm.find("#mr-disease-info").attr("disabled", true).addClass("disabled");
                domForm.find(".btnMrCancelUpdate").hide();
                domForm.find(".btnMrSavePatient").hide();
                domForm.find(".btnMrTriggerUpdate").show();                
            }       
        }
        
        function saveMrInfo(domBtn){           
            var domForm = $("#mr-form");            
            var actionUrl = "<?php echo $urlMrUpdate; ?>";            
            var formData = domForm.serialize();
            
            $.ajax({'url':actionUrl, 'data':formData, 'dataType':'json','type':'POST',processData: true,
                'success':function(response) {                    
                    if(response.status=="true"){ 
                        domForm[0].reset();        
                        enableMrForm(false);//disable the form.
                    }
                    else{
                        $.each(response, function(key, val) {
                            domForm.find("#"+key+"_em_").text(val);
                            domForm.find("#"+key+"_em_").show();                             
                        });
                    }       
                },
                'complete':function(){domBtn.button("reset");}
            });
        }
    });
</script>
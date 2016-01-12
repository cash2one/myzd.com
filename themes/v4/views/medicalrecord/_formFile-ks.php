<?php
/*
  Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/js/jqueryfileupload/css/blueimp-gallery.min.css");
  Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/js/jqueryfileupload/css/jquery.fileupload.css");
  Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/js/jqueryfileupload/css/jquery.fileupload-ui.css");
  Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/js/jqueryfileupload/css/jquery.fileupload-noscript.css");
  Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/js/jqueryfileupload/css/jquery.fileupload-ui-noscript.css");
 * Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/medicalrecord.css"); 
 */
?>

<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryfileupload/css/blueimp-gallery.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryfileupload/css/jquery.fileupload.css">
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryfileupload/css/jquery.fileupload-ui.css">
<noscript><link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryfileupload/css/jquery.fileupload-noscript.css"></noscript>
<noscript><link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryfileupload/css/jquery.fileupload-ui-noscript.css"></noscript>
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-datepicker/css/bootstrap-datepicker.css">
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/colorbox-master/colorbox.css">
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/user.css">


<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/custom/dictionary.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/custom/medicalrecord.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-datepicker/bootstrap-datepicker.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-datepicker/bootstrap-datepicker.zh-CN.js', CClientScript::POS_HEAD);
//Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/vendor/jquery-1.10.1.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/vendor/jquery.ui.widget.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/vendor/tmpl.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/vendor/load-image.all.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/vendor/canvas-to-blob.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/jquery.iframe-transport.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/jquery.fileupload.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/jquery.fileupload-process.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/jquery.fileupload-image.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/jquery.fileupload-validate.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/jquery.fileupload-ui.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/custom.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/colorbox-master/jquery.colorbox.custom.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/wheelzoom.js', CClientScript::POS_END);


/*
  <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
  <!--[if (gte IE 8)&(lt IE 10)]>
  Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/cors/jquery.xdr-transport.js', CClientScript::POS_END);
  <![endif]-->
 */
//$hideSubmitBtn boolean to indicate hide submit button. use isset($hideSubmitBtn) to check for validity first.
// MedicalRecord.id
$mrid = $model->getId();
// ajax request urls.
$urlLoadFiles = $this->createUrl('medicalRecord/ajaxLoadFiles', array('id' => $mrid, 'tmpl' => 1));
$urlUploadFile = $this->createUrl('medicalRecord/ajaxUploadFile');
$urlDeleteFile = $this->createUrl('medicalRecord/deleteFile');
$urlUpdateFileMeta = $this->createUrl('medicalRecord/ajaxUpdateFileMeta');
$urlFileMeta = $this->createUrl('test/filemeta');
// report types.
$report_lab = MedicalRecordFile::REPORT_LAB;
$report_image = MedicalRecordFile::REPORT_IMAGE;
$report_written = MedicalRecordFile::REPORT_WRITTEN;
?>

<div class="clearfix">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="report-tab">
        <li class="active"><a href="#report-lab" data-toggle="tab">化验报告</a></li>
        <li><a href="#report-image" data-toggle="tab">影像资料</a></li>
        <li><a href="#report-written" data-toggle="tab">其它报告</a></li>                
    </ul>
</div>

<!-- Tab panes -->
<div class="tab-content form border">
    <div class="tab-pane active" id="report-lab">
        <div class="alert alert-warning">化验报告包括：验血、验尿、验血糖等。<br />请在“设置日期”处添加报告检验日期。</div>        
        <!-- The file upload form used as target for the file upload widget -->
        <form class="fileupload" action="<?php echo $urlUploadFile; ?>" method="POST" enctype="multipart/form-data">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value=""></noscript>
            <div class="mr-data">
                <input class="report-type" type="hidden" name="MRFile[report_type]" value="<?php echo $report_lab; ?>">
                <input type="hidden" name="id" value="<?php echo $mrid; ?>">
            </div>
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="clearfix fileupload-buttonbar mb20">
                <div class="col-sm-5 col-md-4">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-primary btn-lg btn-block fileinput-button">
                        <i class="fa fa-plus"></i>
                        <span>上传化验报告</span>
                        <input type="file" name="mr_files[]" multiple>
                    </span>
                </div>
            </div>
            <div class="file-loading loading loading01 show-on-start"></div>
            <div role="presentation" class="gallery row center-block clearfix">
                <!-- The table listing the files available for upload/download -->
                <div class="files"></div>
                <!-- file upload button -->
                <div class="btn-doc col-sm-6 col-md-4">
                    <span class="button fileinput-button">
                        <i class="fa fa-plus-square-o icon"></i>
                        <span class="caption">点击添加</span>
                        <input type="file" name="mr_files[]" multiple>
                    </span>
                </div>
            </div>
        </form>
    </div>

    <div class="tab-pane" id="report-image">
        <div class="alert alert-warning">影像资料包括（照片）：X光片、CT、 PET-CT、 磁共振（MRI）等。<br />请上传 jpg、png、gif格式。<br />请在“设置日期”处添加拍摄日期。</div>
        <!-- The file upload form used as target for the file upload widget -->
        <form class="fileupload" action="<?php echo $urlUploadFile; ?>" method="POST" enctype="multipart/form-data">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value=""></noscript>
            <div class="mr-data">
                <input type="hidden" name="MRFile[report_type]" value="<?php echo $report_image; ?>">
                <input type="hidden" name="id" value="<?php echo $mrid; ?>">
            </div>
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="clearfix fileupload-buttonbar mb20">
                <div class="col-sm-5 col-md-4">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-primary btn-lg btn-block fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>上传影像资料</span>
                        <input type="file" name="mr_files[]" multiple>
                    </span>
                </div>
            </div>
            <div class="file-loading loading loading01 show-on-start"></div>
            <!-- The table listing the files available for upload/download -->
            <div role="presentation" class="gallery row center-block clearfix">
                <!-- The table listing the files available for upload/download -->
                <div class="files"></div>
                <!-- file upload button -->
                <div class="btn-doc col-sm-6 col-md-4">
                    <span class="button fileinput-button">
                        <i class="fa fa-plus-square-o icon"></i>
                        <span class="caption">点击添加</span>
                        <input type="file" name="mr_files[]" multiple>
                    </span>
                </div>
            </div>
        </form>
    </div>

    <div class="tab-pane" id="report-written">
        <div class="alert alert-warning">其它报告：心电图、B超、病理报告、门诊病历、出院小结等。<br />请在“设置日期”处添加检查日期。</div>
        <!-- The file upload form used as target for the file upload widget -->
        <form class="fileupload" action="<?php echo $urlUploadFile; ?>" method="POST" enctype="multipart/form-data">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value=""></noscript>
            <div class="mr-data">
                <input type="hidden" name="MRFile[report_type]" value="<?php echo $report_written; ?>">
                <input type="hidden" name="id" value="<?php echo $mrid; ?>">
            </div>
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="clearfix fileupload-buttonbar mb20">
                <div class="col-sm-5 col-md-4">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-primary btn-lg btn-block fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>上传其它报告</span>
                        <input type="file" name="mr_files[]" multiple>
                    </span>                    
                </div>
            </div>
            <div class="file-loading loading loading01 show-on-start"></div>
            <!-- The table listing the files available for upload/download -->
            <div role="presentation" class="gallery row center-block clearfix">
                <!-- The table listing the files available for upload/download -->
                <div class="files"></div>
                <!-- file upload button -->
                <div class="btn-doc col-sm-6 col-md-4">
                    <span class="button fileinput-button">
                        <i class="fa fa-plus-square-o icon"></i>
                        <span class="caption">点击添加</span>
                        <input type="file" name="mr_files[]" multiple>
                    </span>
                </div>
            </div>
        </form>
    </div>
    <?php if (isset($hideSubmitBtn) === false || $hideSubmitBtn === false) { ?>
        <div class="mt30 row">
            <div class="col-sm-4 pull-right">
                <button id="btn-submit" type="submit" class="btn btn-success btn-lg btn-block" data-loading-text="处理中..."><i class="glyphicon glyphicon-floppy-saved"></i>&nbsp;保存</button>
                <input type="hidden" name="mrId" value="<?php echo $mrid; ?>"/>
            </div>
        </div>
    <?php } ?>
</div>

<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
    <div class="template-upload fade">
    <div class="file-holder gallery-cell gallery-preview col-sm-6 col-md-4 mb20 text-center">            
    <div class="gallery-cell-inner">               
    <div class="gallery-image"><span class="preview thumbnail"></span></div>
    <div>
    <strong class="error text-danger"></strong>
    </div>
    <div>
    <p class="size">上传中...</p>
    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
    </div>
    <div class="btn-holder">
    {% if (!i && !o.options.autoUpload) { %}
    <button class="btn btn-primary btn-sm btn-block start" disabled>
    <i class="glyphicon glyphicon-upload"></i>
    <span>开始</span>
    </button>
    {% } %}
    {% if (!i) { %}
    <button class="btn btn-warning btn-sm btn-block cancel">
    <i class="glyphicon glyphicon-ban-circle"></i>
    <span>取消</span>
    </button>
    {% } %}
    </div>
    </div>
    </div>
    <!-- /- file-holder -->
    </div>

    {% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
    <div id="{%=file.id%}" class="file-holder gallery-cell col-sm-6 col-md-4 mb20">
    <input type="hidden" name="fileId" value="{%=file.id%}" />
    <input type="hidden" name="mrId" value="{%=file.mrId%}" />
    <div class="gallery-cell-inner">
    <div class="loading"></div>            
    <div class="gallery-image"><div class="gallery-image-controls"><a href="javascript:deleteFile({%=file.id%});" class="control-delete"><i class="fa fa-trash"></i></a><a href="{%=file.fileUrl%}" class="control-popup"><i class="fa fa-search"></i></a><a class="control-dl" href="{%=file.fileUrl%}" download><i class="fa fa-download"></i></a></div>
    <img class="center-block" src="{%=file.thumbnailUrl%}" data-hd-src="{%=file.fileUrl%}"/></div>
    <div><input type="text" name="fileDate" value="{%=file.fileDate%}" placeholder="点击设置日期" class="pull-right gallery-image-date form-control datepicker" data-date-format="yyyy-mm-dd" readonly /><textarea name="fileDesc" class="gallery-image-desc form-control" maxlength="50" rows="3" placeholder="请填写相关描述（最多50个字）">{%=file.fileDesc%}</textarea></div>
    </div>
    </div>   
    {%}%}
</script>

<script>
    var urlLoadFiles = "<?php echo $urlLoadFiles; ?>";
    var urlUpdateFileMeta = "<?php echo $urlUpdateFileMeta; ?>";
    var urlDeleteFile = "<?php echo $urlDeleteFile; ?>";
    // api for updating filemeta.
    var urlFileMeta = "<?php echo $urlFileMeta; ?>";
    
</script>
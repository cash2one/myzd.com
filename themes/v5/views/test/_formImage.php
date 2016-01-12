<!--<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryfileupload/css/style.css">-->
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryfileupload/css/blueimp-gallery.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryfileupload/css/jquery.fileupload.css">
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryfileupload/css/jquery.fileupload-ui.css">
<noscript><link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryfileupload/css/jquery.fileupload-noscript.css"></noscript>
<noscript><link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryfileupload/css/jquery.fileupload-ui-noscript.css"></noscript>



<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/vendor/jquery-1.10.1.min.js', CClientScript::POS_END);
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
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/main.js', CClientScript::POS_END);

/*
  <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
  <!--[if (gte IE 8)&(lt IE 10)]>
  Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jqueryfileupload/cors/jquery.xdr-transport.js', CClientScript::POS_END);
  <![endif]-->
 */
$recordId = 1;
$loadImagesUrl = $this->createUrl('test/ajaxLoadImages', array('id' => $recordId, 'tmpl' => 1));
$uploadUrl = $this->createUrl('test/ajaxUploadImage');
$setCoverUrl = $this->createUrl('test/ajaxSetCoverImage');
$doctype_prelim = MedicalRecordFile::DOCTYPE_PRELIM;
$doctype_blood = MedicalRecordFile::DOCTYPE_BLOOD;
$doctype_urine = MedicalRecordFile::DOCTYPE_URINE;
$doctype_xray = MedicalRecordFile::DOCTYPE_XRAY;
$doctype_mri = MedicalRecordFile::DOCTYPE_MRI;
$doctype_bmode = MedicalRecordFile::DOCTYPE_BMODE;
$doctype_endoimage = MedicalRecordFile::DOCTYPE_ENDOSCOPICIMAGE;
?>

<div class="container">
    <div class="row">
        <!-- The file upload form used as target for the file upload widget -->
        <form class="fileupload" action="<?php echo $uploadUrl; ?>" method="POST" enctype="multipart/form-data">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value=""></noscript>
            <input type="hidden" name="MedicalRecordFile[doc_type]" value="<?php echo $doctype_prelim; ?>">
            <input type="hidden" name="MedicalRecord[id]" value="<?php echo $recordId; ?>">
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="row fileupload-buttonbar">
                <div class="col-lg-7">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-success fileinput-button upload">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>上传血象报告</span>
                        <input type="file" name="files[]" multiple>
                    </span>
                    <!-- The global file processing state -->
                    <span class="fileupload-process"></span>
                </div>
                <!-- The global progress state -->
                <div class="col-lg-5 fileupload-progress fade">
                    <!-- The global progress bar -->
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                    </div>
                    <!-- The extended global progress state -->
                    <div class="progress-extended">&nbsp;</div>
                </div>
            </div>
            <!-- The table listing the files available for upload/download -->
            <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
        </form>
    </div>
    <div class="row">
        <!-- The file upload form used as target for the file upload widget -->
        <form class="fileupload" action="<?php echo $uploadUrl; ?>" method="POST" enctype="multipart/form-data">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value=""></noscript>
            <input type="hidden" name="MedicalRecordFile[doc_type]" value="<?php echo $doctype_blood; ?>">
            <input type="hidden" name="MedicalRecord[id]" value="<?php echo $recordId; ?>">
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="row fileupload-buttonbar">
                <div class="col-lg-7">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-success fileinput-button upload">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>上传初诊报告</span>
                        <input type="file" name="files[]" multiple>
                    </span>
                    <!-- The global file processing state -->
                    <span class="fileupload-process"></span>
                </div>
                <!-- The global progress state -->
                <div class="col-lg-5 fileupload-progress fade">
                    <!-- The global progress bar -->
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                    </div>
                    <!-- The extended global progress state -->
                    <div class="progress-extended">&nbsp;</div>
                </div>
            </div>
            <!-- The table listing the files available for upload/download -->
            <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
        </form>
    </div>
    <div class="row">
        <!-- The file upload form used as target for the file upload widget -->
        <form class="fileupload" action="<?php echo $uploadUrl; ?>" method="POST" enctype="multipart/form-data">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value=""></noscript>
            <input type="hidden" name="MedicalRecordFile[doc_type]" value="<?php echo $doctype_urine; ?>">
            <input type="hidden" name="MedicalRecord[id]" value="<?php echo $recordId; ?>">
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="row fileupload-buttonbar">
                <div class="col-lg-7">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-success fileinput-button upload">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>上传尿检报告</span>
                        <input type="file" name="files[]" multiple>
                    </span>                    
                    <!-- The global file processing state -->
                    <span class="fileupload-process"></span>
                </div>
                <!-- The global progress state -->
                <div class="col-lg-5 fileupload-progress fade">
                    <!-- The global progress bar -->
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                    </div>
                    <!-- The extended global progress state -->
                    <div class="progress-extended">&nbsp;</div>
                </div>
            </div>
            <!-- The table listing the files available for upload/download -->
            <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
        </form>
    </div>
    <div class="row">
        <!-- The file upload form used as target for the file upload widget -->
        <form class="fileupload" action="<?php echo $uploadUrl; ?>" method="POST" enctype="multipart/form-data">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value=""></noscript>
            <input type="hidden" name="MedicalRecordFile[doc_type]" value="<?php echo $doctype_xray; ?>">
            <input type="hidden" name="MedicalRecord[id]" value="<?php echo $recordId; ?>">
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="row fileupload-buttonbar">
                <div class="col-lg-7">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-success fileinput-button upload">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>上传X光片</span>
                        <input type="file" name="files[]" multiple>
                    </span>
                    <!-- The global file processing state -->
                    <span class="fileupload-process"></span>
                </div>
                <!-- The global progress state -->
                <div class="col-lg-5 fileupload-progress fade">
                    <!-- The global progress bar -->
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                    </div>
                    <!-- The extended global progress state -->
                    <div class="progress-extended">&nbsp;</div>
                </div>
            </div>
            <!-- The table listing the files available for upload/download -->
            <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
        </form>
    </div>
    <div class="row">
        <!-- The file upload form used as target for the file upload widget -->
        <form class="fileupload" action="<?php echo $uploadUrl; ?>" method="POST" enctype="multipart/form-data">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value=""></noscript>
            <input type="hidden" name="MedicalRecordFile[doc_type]" value="<?php echo $doctype_mri; ?>">
            <input type="hidden" name="MedicalRecord[id]" value="<?php echo $recordId; ?>">
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="row fileupload-buttonbar">
                <div class="col-lg-7">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-success fileinput-button upload">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>上传核磁共振报告</span>
                        <input type="file" name="files[]" multiple>
                    </span>
                    <!-- The global file processing state -->
                    <span class="fileupload-process"></span>
                </div>
                <!-- The global progress state -->
                <div class="col-lg-5 fileupload-progress fade">
                    <!-- The global progress bar -->
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                    </div>
                    <!-- The extended global progress state -->
                    <div class="progress-extended">&nbsp;</div>
                </div>
            </div>
            <!-- The table listing the files available for upload/download -->
            <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
        </form>
    </div>
    <div class="row">
        <!-- The file upload form used as target for the file upload widget -->
        <form class="fileupload" action="<?php echo $uploadUrl; ?>" method="POST" enctype="multipart/form-data">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value=""></noscript>
            <input type="hidden" name="MedicalRecordFile[doc_type]" value="<?php echo $doctype_bmode; ?>">
            <input type="hidden" name="MedicalRecord[id]" value="<?php echo $recordId; ?>">
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="row fileupload-buttonbar">
                <div class="col-lg-7">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-success fileinput-button upload">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>上传B超报告</span>
                        <input type="file" name="files[]" multiple>
                    </span>
                    <!-- The global file processing state -->
                    <span class="fileupload-process"></span>
                </div>
                <!-- The global progress state -->
                <div class="col-lg-5 fileupload-progress fade">
                    <!-- The global progress bar -->
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                    </div>
                    <!-- The extended global progress state -->
                    <div class="progress-extended">&nbsp;</div>
                </div>
            </div>
            <!-- The table listing the files available for upload/download -->
            <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
        </form>
    </div>
    <div class="row">
        <!-- The file upload form used as target for the file upload widget -->
        <form class="fileupload" action="<?php echo $uploadUrl; ?>" method="POST" enctype="multipart/form-data">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value=""></noscript>
            <input type="hidden" name="MedicalRecordFile[doc_type]" value="<?php echo $doctype_endoimage; ?>">
            <input type="hidden" name="MedicalRecord[id]" value="<?php echo $recordId; ?>">
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="row fileupload-buttonbar">
                <div class="col-lg-7">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-success fileinput-button upload">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>上传内镜影像</span>
                        <input type="file" name="files[]" multiple>
                    </span>
                    <!-- The global file processing state -->
                    <span class="fileupload-process"></span>
                </div>
                <!-- The global progress state -->
                <div class="col-lg-5 fileupload-progress fade">
                    <!-- The global progress bar -->
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                    </div>
                    <!-- The extended global progress state -->
                    <div class="progress-extended">&nbsp;</div>
                </div>
            </div>
            <!-- The table listing the files available for upload/download -->
            <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
        </form>
    </div>   

</div>

<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
            <button class="btn btn-primary start" disabled>
                <i class="glyphicon glyphicon-upload"></i>
                <span>Start</span>
            </button>
            {% } %}
            {% if (!i) { %}
            <button class="btn btn-warning cancel">
                <i class="glyphicon glyphicon-ban-circle"></i>
                <span>Cancel</span>
            </button>
            {% } %}
        </td>
    </tr>
    {% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade {% if(o.init){ %} in {% } %}">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                <a href="{%=file.fileUrl%}" xtitle="{%=file.name%}" xdownload="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        
        <td>
            {% if (file.deleteUrl) { %}
            <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}" data-data="MedicalRecord[id]={%=file.mrId%}&MedicalRecordFile[id]={%=file.id%}" {% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                <span>删除</span>
            </button>
            <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
            <button class="btn btn-warning cancel">
                <i class="glyphicon glyphicon-ban-circle"></i>
                <span>取消</span>
            </button>
            {% } %}
        </td>
    </tr>
    {% } %}
</script>

<script>
    $(document).ready(function(){

        initUploadedFiles();
    });
    
    function initUploadedFiles(){
        $.ajax({ 
            type:'get',
            dataType: "json",
            url: "<?php echo $loadImagesUrl; ?>",
            // jsonp: "$callback",

            success: function( data ) {
                data.init=true; //indicate its initial loading.      
                $(".files").html(tmpl("template-download", data));
            }
        });
    }
    
</script>
<!--<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryfileupload/css/style.css">-->
<link type="text/css" rel="stylesheet" href="http://static.mingyizhudao.com/pc/blueimp-gallery.min.css">
<link type="text/css" rel="stylesheet" href="http://static.mingyizhudao.com/pc/jquery.fileupload.css">
<link type="text/css" rel="stylesheet" href="http://static.mingyizhudao.com/pc/jquery.fileupload-ui.css">
<noscript><link type="text/css" rel="stylesheet" href="http://static.mingyizhudao.com/pc/jquery.fileupload-noscript.css"></noscript>
<noscript><link type="text/css" rel="stylesheet" href="http://static.mingyizhudao.com/pc/jquery.fileupload-ui-noscript.css"></noscript>



<?php
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/jquery-1.10.1.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/jquery.ui.widget.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/tmpl.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/load-image.all.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/canvas-to-blob.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/jquery.iframe-transport.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/jquery.fileupload.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/jquery.fileupload-process.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/jquery.fileupload-image.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/jquery.fileupload-validate.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/jquery.fileupload-ui.js', CClientScript::POS_END);
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
<style>

    .file-holder{
        display: block;
        width:108px;
        height:185px;
        padding:4px;
        position:relative;
        float: left;
    }
    .file-holder .thumbnail{margin:0;}
    .file-holder .thumbnail>img{
        width:90px;
        height:127px;
    }
    /*
    .file-holder .close{position:absolute;top:4px;right:4px;font-size:18px;color:#d9534f;opacity:1;}
    .file-holder .close:hover{font-size:21px;color:#D8241E;}
    */
    .file-holder .btn-holder{padding:4px 15px;}
    .file-holder .btn{padding:6px 10px;}

    .file-holder .preview{width:100px;height:96px;}
    .file-holder .progress{margin:0;height:20px;}
    .file-holder .size{margin:0;}
</style>

<div id="medical-record-file">
    <div class="">
        <!-- The file upload form used as target for the file upload widget -->
        <form class="fileupload" action="<?php echo $uploadUrl; ?>" method="POST" enctype="multipart/form-data">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value=""></noscript>
            <input class="doc-type" type="hidden" name="MedicalRecordFile[doc_type]" value="<?php echo $doctype_prelim; ?>">
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
            <div role="presentation" class="row files center-block clearfix"></div>
        </form>
    </div>
    <div class="">
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
            <div role="presentation" class="row files center-block clearfix"></div>
        </form>
    </div>
    <div class="">
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
            <div role="presentation" class="row files center-block clearfix"></div>
        </form>
    </div>
    <div class="">
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
            <div role="presentation" class="row files center-block clearfix"></div>
        </form>
    </div>
    <div class="">
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
            <div role="presentation" class="row files center-block clearfix"></div>
        </form>
    </div>
    <div class="">
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
            <div role="presentation" class="row files center-block clearfix"></div>
        </form>
    </div>
    <div class="">
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
            <div role="presentation" class="row files center-block clearfix"></div>
        </form>
    </div>   
</div>

<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
    <div class="template-upload fade">
        <div class="file-holder">
            <div>
                <span class="preview thumbnail text-center"></span>
            </div>
            <div>
                <strong class="error text-danger"></strong>
            </div>
            <div>
                <p class="size">处理中...</p>
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

    {% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
    <div class="file-holder" data-id="{%=file.id%}" data-mrid="{%=file.mrId%}">
        <a data-url="{%=file.fileUrl%}" class="thumbnail" target="_blank">
            <img src="{%=file.thumbnailUrl%}" alt="">
        </a>      
        <div class="btn-holder"><button class="btn btn-danger btn-sm btn-block btn-remove" type="submit" data-url="{%=file.deleteUrl%}"><span class="glyphicon glyphicon-trash"></span>&nbsp;删除</button></div>
    </div>
    {% } %}
</script>

<script>
    $(document).ready(function(){
        initFiles();        
       
    });
    
    function initFiles(){
        $("form.fileupload").each(function(){
            var domForm = $(this);
            var doctype = domForm.find("input[name='MedicalRecordFile[doc_type]']").val();           
            
            $.ajax({ 
                type:'get',
                dataType: "json",
                url: "<?php echo $loadImagesUrl; ?>"+"&doctype="+doctype,
                // jsonp: "$callback",
                success: function( data ) {
                    data.init=true; //indicate its initial loading.      
                    domForm.find(".files").html(tmpl("template-download", data));     
                   
                    domForm.find(".files .btn-remove").bind("click",function(e){
                        removeFile(e, $(this));
                    });
                }
            });       
        });
        
    }
    
    
    function removeFile(e, btn){
        e.preventDefault();
        btn.addClass("disabled");
        var url = btn.attr("data-url");
        var id = btn.parents(".file-holder").attr("data-id");
        var mrid = btn.parents(".file-holder").attr("data-mrid");
        $.ajax({ 
            type:'post',
            data:"MedicalRecord[id]="+mrid+"&MedicalRecordFile[id]="+id,
            dataType: "json",
            url: url,
            // jsonp: "$callback",            
            success: function( data ) {                
                if(data.s=='success'){                    
                    btn.parents(".file-holder").remove();
                }
            },
            always: function (data) {
                btn.removeClass("disabled");
            }
        });          
         

            
        return false;
    }
    
</script>
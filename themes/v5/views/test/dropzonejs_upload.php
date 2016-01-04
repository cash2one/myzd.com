<link href="<?php echo Yii::app()->theme->baseUrl; ?>/js/dropzone/css/dropzone.css" rel="stylesheet" />
<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/dropzone/dropzone.min.js', CClientScript::POS_END);
?>

<div id="dropzone">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'tripImageForm',
        'action' => $this->createUrl('test/ajaxUploadImage'),
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'htmlOptions' => array(
            'role' => 'form',
            'class' => 'dropzone',
            'enctype' => 'multipart/form-data'), // For image upload.
            ));
    ?>
    <input type="hidden" name="TripImageForm[action]" value="publish" />
    <input type="hidden" name="id" value="1" />
    <div class="fallback">
        <input name="image_uploads[]" type="file" multiple />
    </div>
    <?php $this->endWidget(); ?>

</div>
<script>
    $(document).ready(function(){
        
        // "myAwesomeDropzone" is the camelized version of the HTML element's ID
        Dropzone.options.tripImageForm = {
            //  url:"http://localhost/MainApp/trip/uploadImage",
            paramName: "image_uploads[]", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            //   uploadMultiple:true,
            addRemoveLinks:true,
            maxFiles:6,
            acceptedFiles:"image/jpeg,image/png,image/gif",
            autoProcessQueue:true,
            createResizedImage: true,
            resizedWidth: 500,  
            resizedHeight: 500,
            createImageThumbnails:true,
            thumbnailWidth:200,
            thumbnailHeight:200,
            /*
             accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                }
                else { done(); }
            },
             */
            /*    resize:function(file, done){
                
            },
             */
            init: function() {
                this.on("addedfile", function(file) {
                    // Create the remove button
                   /* var removeButton = Dropzone.createElement("<button>Remove file</button>");
                    // Capture the Dropzone instance as closure.
                    var _this = this;
                    // Listen to the click event
                    removeButton.addEventListener("click", function(e) {
                        // Make sure the button click doesn't submit the form:
                        e.preventDefault();
                        e.stopPropagation();

                        // Remove the file preview.
                        _this.removeFile(file);
                        // If you want to the delete the file on the server as well,
                        // you can do the AJAX request here.
                    });

                    // Add the button to the file preview element.
                    file.previewElement.appendChild(removeButton);
                    */
                });
                this.on("sending", function(file, xhr, formData) {
                    formData.append("ajax", 1); // Will send the filesize along with the file as POST data.
                });
                this.on("maxfilesexceeded",function(){
                    showModalAlert("上传错误", "最多只可上传6张照片");
                });
            },            
        };
        
    });
        
    

</script>
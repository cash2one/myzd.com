<div class="row pt20 bg-white">
    <?php 
    if($this->hasFlashMessage('success.info')){
        $msg = $this->getFlashMessage('success.info');
        echo '<div class="alert alert-success alert-dismissible" role="alert">';
        echo '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';
        echo $msg;
        echo '</div>';
    }
    ?>

    <div class="mt-sm-50">
        <?php 
       // $this->renderPartial('_formImage');
        $this->renderPartial('_formUpload');
        ?>
    </div>
</div>
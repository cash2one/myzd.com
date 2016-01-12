<?php
$this->renderPartial('//trip/_formComment', array('model' => $model));
?>
<script>
    $(document).ready(function(){
        $("form").click(function(){
            if(isUserLogin()===false){
                showModalLogin();
            }
        });
    });
   
    
</script>
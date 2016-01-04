<div class="container-sm registerbox bg-white box">
    <div class="col-sm-offset-1">
        <h3 class="fcolor mt-sm-20"><strong>欢迎加入伴客！</strong></h3>
    </div>
    <div>
        <!-- Register Form -->
        <?php $this->renderPartial('_formRegister', array('model' => $model)); ?>
        <!-- End Register Form -->


    </div>
    <!--  <div class="col-md- loginbox">
          <a href="<?php echo $this->createAbsoluteUrl('user/login'); ?>"><div class="text-center">> 已经拥有伴客账号？</div></a>
      </div>
    -->
</div>
<?php
if ($model->scenario == 'success') {
    $this->renderPartial('_registerSuccessBox');
}
?>
<!--
<div class="modal success" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content modal-content-reg">
            <div class="modal-header modal-header-reg">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
                <p class="text-center">恭喜！您已经成功注册为伴客用户！</p>
                <p class="text-center"><a href="<?php echo $this->getHomeUrl(); ?>" class="btn btn-tourist btn-xs">进入主页</a></p>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
<script>
    jQuery(document).ready(function () {
        
        $("#user-form").submit(function (e) {
            e.preventDefault();
        });
     
        $( "[data-toggle='modal']" ).click(function(e){
            e.preventDefault();
            
            var d_tar = $(this).attr('data-target'); 
            //  var d_tar ='.success';
            $(d_tar).show();   
            var modal_he = $(d_tar).find('.modal-dialog .modal-content').height(); 
            var win_height = $(window).height();
            var marr = win_height - modal_he;
            $('.modal-dialog').css('margin-top',marr/2);
        });
        
    });

</script>
-->
<!-- Model quick booking form 手术直通车 -->  
<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
?>
<style>
    .modal .modal-title{text-align: center;}
    .modal .modal-header a>img{width: 100px;}
</style>
<div class="modal fade " role="dialog" id="bookingModal" aria-labelledby="bookingModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
<!--                <a href="<?php echo Yii::app()->homeUrl; ?>"><img src="<?php echo $urlResImage; ?>icons/logo.png"></a>-->
                <h4 class="modal-title" id="gridSystemModalLabel">预约单</h4>
            </div>
            <div class="modal-body">
                <div class="block-center">
                    <div class="booking-form">
                        <iframe id="quickbook-frame" width="302px" height="630px" name="quickbook-form" class="block" frameborder="0" scrolling="no" seamless style="margin:0 auto;"></iframe>
                    </div>
                </div>
            </div>
            <div class="modal-footer hide">
                <div class="row">
                    <button type="button" class="col-sm-2 col-sm-offset-7 btn btn-blue">提&nbsp;交</button>

                    <button type="button" class="ml20 col-sm-2 btn btn-default" data-dismiss="modal">关&nbsp;闭</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->    
<!-- /. Modal 手术直通车 -->
<script type="text/javascript">
    $(document).ready(function () {
        var bookingModal = $("#bookingModal");
        $(".btn[data-target=#bookingModal]").click(function (ev) {
            ev.preventDefault();
            var dataUrl = $(this).attr("data-url");
            bookingModal.find("#quickbook-frame").attr("src", dataUrl);
        });
    });
</script>
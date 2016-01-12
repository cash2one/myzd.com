<style>
    .page-container{border:1px solid #ddd;}
    #header-nav{display: none;}
    .header-menu{border: 0!important;}
    #booking-form .control-label{padding-top:7px;float: left;padding-left: 0;padding-right: 0;width: 70px;text-align: right}
    #booking-form .controls{width:220px;padding-right:0;float:left;}   
    #booking-form .MultiFile-wrap{width:290px;}
</style>
<div id="quickbook" class="pt10">
<?php $this->renderPartial('_form', array('model' => $model)); ?>
</div>
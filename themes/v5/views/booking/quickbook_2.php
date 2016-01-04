<div class="container page-container">
    <style>
        .page-container{border:1px solid #ddd;padding-left: 15px;padding-right: 15px;}
        #header-nav{display: none;}
        .header-menu{border: 0!important;}
        #booking-form .control-label{padding-top:7px;float: left;padding-left: 0;padding-right: 0;width: 70px;text-align: right}
        #booking-form .controls{width:220px;padding-right:0;float:left;}   
        #booking-form .MultiFile-wrap{width:290px;}
    </style>
    <div id="quickbook" class="pt10 pb10">
        <?php $this->show_baidushangqiao = false; ?>

        <?php        
        if ($this->hasFlashMessage("booking.success")):
            ?>
            <!-- 预约成功消息 -->
            <div class="row">
                <div class="col-sm-12">            
                    <div style="padding:10px; background-color:#19aea5;color:#fff;">                        
                        <p>预约成功！<br/>我们的客服人员会在第一时间与您确认您的预约细节。</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php
        else:
            $this->renderPartial('_form', array('model' => $model));
        endif;
        ?>
    </div>
</div>
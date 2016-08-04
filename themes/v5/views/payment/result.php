<link rel="stylesheet" type="text/css" href="http://static.mingyizhudao.com/pc/pingpp-html5-master-pinus.css">
<style>
    #site-header .dis-index{display:none;}
    .order-content{padding: 10px 0;border-bottom: 1px solid #888;}
    .order-content span{display: inline-block;width: 8em;}
    .form-horizontal .checkbox{text-align: center;}
    .form-horizontal .checkbox a{text-decoration: underline;color: #19aea5;}
</style>
<?php
//$this->show_header = false;
//$this->show_footer = false;
//$this->show_baidushangqiao = false;
?>
<div class="container">
    <div class="h3 text-center"><h3>订单</h3></div>
    <div class="divider"></div>
    <div class="order-content"><span class="color-green">订单号:</span><?php echo $model->ref_no ?></div>
    <div class="order-content"><span class="color-green">订单标题:</span><?php echo $model->subject ?></div>
    <div class="order-content">
        <div class="color-green mb5">订单详情:</div>
        <div>
            <?php echo $model->description ?>
        </div>
    </div>
    <div class="order-content"><span class="color-green">金额:</span><?php echo $model->final_amount ?>元</div>
    <div class="order-content"><span class="color-green">支付结果:</span><?php echo ($model->is_paid) == 1 ? '已支付' : '待支付'; ?></div>
    <div class="mt20">
        <form class="form-horizontal">
            <div class="checkbox hide">
                <label>
                    <input type="checkbox" checked> 同意名医主刀《<a href="<?php echo $this->createUrl('site/page', array('view' => 'terms')); ?>">患者服务条款</a>》
                </label>
            </div>
            <!--
            <div class="form-group text-center mt15">
                <button class="btn btn-yes btn-lg">确认并支付</button>
            </div>
            -->
            <input id="ref_no" type="hidden" name="order[ref_no]" value="<?php echo $model->ref_no; ?>" />
        </form>
    </div>
</div>
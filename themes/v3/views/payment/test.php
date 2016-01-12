<div class="h2">测试付款</div>
<div class="alert alert-info">This is a testing page for payment gateway.</div>

<form class="form-horizontal" role="form" autocomplete="off" id="user-form" action="<?php echo $this->createUrl('payment/test'); ?>" method="post">

    <div class="form-group">
        <label class="col-sm-3 control-label required" for="UserRegisterForm_username">付款金额(￥) <span class="required">*</span></label>    
        <div class="col-sm-8">
            <input class="form-control" maxlength="11" placeholder="输入金额（如：0.01）" name="payment[amt]" id="payment_amt" type="number" step="0.1" min="0.01" value="0.01">
            <div class="errorMessage" id="payment_amt_em_" style="display:none"></div>    
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label required" for="UserRegisterForm_username">付款方式 <span class="required">*</span></label>    
        <div class="col-sm-8">
            <p class="form-control-static">支付宝</p>
        </div>
    </div>

    <div class="form-group mt30 mb30">
        <div class="col-sm-offset-3 col-sm-8">
            <button type="submit" class="btn btn-success btn-lg btn-block">确认</button>			
        </div>
    </div>
</form>

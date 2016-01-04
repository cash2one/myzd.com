<div class="h2 text-center">挂号咨询</div>
<div class="mt30">
    <form class="form-horizontal" role="form" autocomplete="off" id="user-form" action="<?php echo $this->createUrl('payment/alipay', array('ref' => 'xxg100001')); ?>" method="post">
        <input type="hidden" name="payment[amt]" id="payment_amt" value="100">
        <div class="form-group">
            <div class=" col-sm-6 col-sm-offset-3 border pt20 pb20">
                <dl class="dl-horizontal">
                    <dt>患者姓名：</dt>
                    <dd>高叶文</dd>
                    <dt>性别：</dt>
                    <dd>男</dd>
                    <dt>年龄：</dt>
                    <dd>53</dd>
                    <dt>疾病描述：</dt>
                    <dd>
                        <ol style="padding-left: 20px;">
                            <li>走路时候，左腿左手，不知道摆动，走路很困难</li>
                            <li>左腿穿拖鞋穿不住，需要用鞋带绑在腿上，才能保持拖鞋不掉落</li>
                            <li>左腿，起步很困难</li>
                            <li>平时如果工作不辛苦时候，左手不颤抖；但是工作累的时候，双手不受控制的颤抖</li>
                            <li>现在按照帕金森病治疗，吃了美多巴快一个月了，每天三次，每次半片，感觉没有什么效果</li>
                        </ol>
                    </dd>                    
                    <!--     
            <dt>治疗医生：</dt>
            <dd>王晓芳    主任</dd>
        
            <dt>所属科室：</dt>
            <dd>神经科</dd>
                    -->
                    <dt>具体需求：</dt>
                    <dd>神经科转诊</dd>
                    <br />
                    <dt></dt>
                    <dd></dd>
                    <dt>付款金额：</dt>
                    <dd>￥100.00</dd>
                </dl>
            </div>
        </div>

        <div class="form-group mt30 mb30">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-success btn-lg btn-block">去付款&nbsp;<i class="fa fa-arrow-right"></i></button>			
            </div>
        </div>
    </form>
</div>
<br />
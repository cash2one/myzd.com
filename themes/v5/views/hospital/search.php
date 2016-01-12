<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/searchhospital.css");
?>
<div class="container-fluid bg-green">
    <div class="container find-navi">首页&nbsp;&gt;&nbsp;按照科室找医院</div>
</div>
<!--明星专家团队-->
<div class="container">
    <div class="row mt30">
        <div class="col-sm-2">
            <div class="strong text-center department-name color-green"><strong>神经外科</strong></div>
        </div>
        <div class="col-sm-10 border-green">
            <div>名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀名医主刀</div>
            <div class="color-red mt5 pull-right">*排名依照。。。</div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 mt30">
            <div class="border-gray department-list">
                <div><div class="waike"><span class="ml20 strong">外科</span></div></div>
                <div class="mt30"><div class="waike"><span class="ml20 strong">骨科</span></div></div>
                <div class="mt30"><div class="waike"><span class="ml20 strong">妇产科</span></div></div>
                <div class="mt30"><div class="waike"><span class="ml20 strong">小儿外科</span></div></div>
                <div class="mt30"><div class="waike"><span class="ml20 strong">五官科</span></div></div>
                <div class="mt30"><div class="waike"><span class="ml20 strong">内科</span></div></div>
            </div>
            <div class="border-gray mt20">
                <div class="text-center ad-area">
                    <div>200x140</div>			
                </div>
            </div>
        </div>
        <div class="col-sm-10 nopadding">

            <div class="mt30">脑外伤是由于脑外伤是由于脑外伤是由于脑外伤是由于脑外伤是由于脑外伤是由于脑外伤是由于脑外伤是由于脑外伤是由于脑外伤是由于脑外伤是由于</div>
            <div class="divide-line-gray mt30"></div>
            <div class="mt20 findexp-nav">
                地区:<span class=>全部</span><span>北京</span><span>上海</span><span>广州</span><span>南京</span><span>杭州</span><span>其他</span>
            </div>
            <div class="row mt30">
                <div class="col-sm-2"><img class="img-responsive" src="http://mingyizhudao.com/resource/hospital/0012-BJ-301.jpg"></div>
                <div class="col-sm-10">
                    <div><strong>上海交通大学附属医院新华医院</strong><span class="color-green ml20">三甲医院</span><span class="pull-right"><button type="submit" class="btn btn-yes" data-toggle="modal" data-target="#booking-dept">预约</button></span></div>
                    <div class="clearfix"></div>
                    <div class="modal fade" id="booking-dept" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="text-center mybooking">
                                    <div class="color-white mybooking-text">我要预约</div>
                                </div>
                                <div class="booking-form">
                                    <form class="form-horizontal">
                                        <div class="form-group mt10">
                                            <label class="col-sm-3 control-label">就诊医院:</label>
                                            <div class="col-sm-8 text-left label-booking">
                                                上海复旦大学
                                            </div>
                                        </div>
                                        <div class="form-group mt30">
                                            <label class="col-sm-3 control-label">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder="请填写患者姓名">
                                            </div>
                                        </div>
                                        <div class="form-group mt30">
                                            <label class="col-sm-3 control-label">确诊疾病:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder="请填写确认疾病名称">
                                            </div>
                                        </div>
                                        <div class="form-group mt30">
                                            <label class="col-sm-3 control-label">疾病描述:</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" placeholder="为了让专家对您的病情有更好的初判，请您尽量详细填写（至少10个字）。"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group mt50">
                                            <div class="col-sm-offset-3 col-sm-8">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox">我已同意《名医主刀在线用户协议》
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <button id="btnSubmit" type="button" class="btn btn-lg btn-yes btn-block " name="">提&nbsp;交</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-1"><strong class="text15">科室介绍</strong></div>
                        <div class="col-sm-11">科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍科室介绍</div>
                    </div>
                </div>
            </div>

            <!--分页-->
            <div class="text-center mt50"><span>1</span><span class="ml20">2</span><span class="ml20">3</span></div>

        </div>
    </div>

</div>
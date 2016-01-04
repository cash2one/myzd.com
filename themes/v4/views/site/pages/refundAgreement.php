<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/refundAgreement.css");
?>
<div id="refundAgreement" class="container">
    <div class="head-title">名医主刀预约服务退款协议</div>
    <div class="angle-line"></div>
    <div class="refund-content">
        <div class="introduce">
            名医主刀提供的是一项高品质的收费就诊，医生给患者提供了手术的便利条件以及自己的专业指导，患者需按照规定缴纳费用，在出现以下情况的时候，平台会扣除或退还患者已缴纳的费用。
        </div>
        <div class="title">一、平台扣除患者已缴纳费用</div>
        <div class="">除非出现不可抗力（如台风、地震等自然因素）、或平台及预约医生原因导致病人完全不能实现本平台的预约功能或出现下表情形，当病人通过本平台的预约功能，完成远程会诊、线下门诊或手术三项之一或全部时，平台将自动扣除已缴纳的全部金额。</div>
        <div class="mt20">
            <table class="table table-bordered">
                <thead class="text-center tabletitle">
                    <tr>
                        <td>预约类型</td>
                        <td>取消预约</td>
                        <td>爽约</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tabletitle">远程咨询</td>
                        <td>
                            <div>从付费时间算起<span class="color-red">≤2小时</span>取消预约，不扣除费用；</div>
                            <div>从付费时间算起<span class="color-red">＞2小时</span>取消预约，扣除200元费用；</div>
                        </td>
                        <td>病人超过预约时间未参加远程咨询，扣除200元费用</td>
                    </tr>
                    <tr>
                        <td class="tabletitle">门诊</td>
                        <td>
                            <div>从付费时间算起<span class="color-red">≤2小时</span>取消预约，不扣除费用；</div>
                            <div>从付费时间算起<span class="color-red">＞2小时</span>取消预约，扣除500元费用；</div>
                        </td>
                        <td>超过约定门诊时间未就诊，扣除500元费用</td>
                    </tr>
                    <tr>
                        <td class="tabletitle">手术</td>
                        <td>确定接受手术服务，因患者单方面导致服务终止，扣除1000元费用；</td>
                        <td>超过约定手术时间扣除1000元费用</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="title">二、平台退还患者已缴费用的退款条件</div>
        <div class="refund">
            <i class="fa fa-star"></i>
            <div class="refund-condition">
                1、患者已完成预约，且已准备就诊，遭遇不可抗因素（如台风、地震等自然因素）导致未能完成预约医生提供的服务；
            </div>
            <div>退款金额：<span class="color-red">退还当次预约金的全部金额。</span></div>
        </div>
        <div class="refund">
            <i class="fa fa-star"></i>
            <div class="refund-condition">
                2、预约医生未能在平台承诺的时间内完成远程会诊、线下门诊及手术中的任何一次服务，但确因客观原因如医生出国、手术、临时参加会议等除外，遇此等客观限制情形，预约时间可顺延，经顺延一次仍不能完成前述服务时。
            </div>
            <div>退款金额：<span class="color-red">退还当次预约金的双倍金额。</span></div>
        </div>
    </div>
</div>
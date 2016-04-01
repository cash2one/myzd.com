<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/appdownload.css?v=" . time());
?>
<div id="downloadapp">
    <div class="container-fluid">
        <div class="row">
            <div class="main-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="header">
                                <img src="<?php echo $urlResImage; ?>appdownload/operation.png"> 
                            </div>
                            <div>
                                <div class="pull-left">
                                    <div><img src="<?php echo $urlResImage; ?>appdownload/1-01.png"></div>
                                    <div class="prompt"><img src="<?php echo $urlResImage; ?>appdownload/ios.png"><span class="ml10">IOS下载</span></div>
                                </div>
                                <div class="pull-left ml40">
                                    <div><img src="<?php echo $urlResImage; ?>appdownload/2-01.png"></div>
                                    <div class="prompt"><img src="<?php echo $urlResImage; ?>appdownload/Android.png"><span class="ml10">Android下载</span></div>
                                </div>
                                <div class="pull-left ml40">
                                    <div><img src="<?php echo $urlResImage; ?>appdownload/3-01.png"></div>
                                    <div class="prompt"><img src="<?php echo $urlResImage; ?>appdownload/WeChat.png"><span class="ml10">微信公众号</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <img class="mt20" src="<?php echo $urlResImage; ?>appdownload/iPhone.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="main-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="header">
                                <img src="<?php echo $urlResImage; ?>appdownload/doctor.png">
                            </div>
                            <div>
                                <div class="pull-left">
                                    <div><img src="<?php echo $urlResImage; ?>appdownload/4-01.png"></div>
                                    <div class="prompt"><img src="<?php echo $urlResImage; ?>appdownload/ios.png"><span class="ml10">IOS下载</span></div>
                                </div>
                                <div class="pull-left ml40">
                                    <div><img src="<?php echo $urlResImage; ?>appdownload/5-01.png"></div>
                                    <div class="prompt"><img src="<?php echo $urlResImage; ?>appdownload/Android.png"><span class="ml10">Android下载</span></div>
                                </div>
                                <div class="pull-left ml40">
                                    <div><img src="<?php echo $urlResImage; ?>appdownload/6-01.png"></div>
                                    <div class="prompt"><img src="<?php echo $urlResImage; ?>appdownload/WeChat.png"><span class="ml10">微信公众号</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt20">
                            <div class="stepone">
                                <div class="pull-left"><img class="mr10 mt7" src="<?php echo $urlResImage; ?>appdownload/step01.png"></div><div class="step">第一步</div>
                                <div class="clearfix"></div>
                                <div class="content-text">
                                    <div class="text16 ml35">注册，并完善个人资料及实名认证</div>
                                </div>
                            </div>
                            <div class="steptwo">
                                <div class="pull-left"><img class="mr10 mt7" src="<?php echo $urlResImage; ?>appdownload/step02.png"></div><div class="step">第二步</div>
                                <div class="clearfix"></div>
                                <div class="content-text">
                                    <div class="text16 ml35">填写患者基本资料并上传病例图片</div>
                                </div>
                            </div>
                            <div class="stepthree">
                                <div class="pull-left"><img class="mr10 mt7" src="<?php echo $urlResImage; ?>appdownload/step03.png"></div><div class="step">第三步</div>
                                <div class="clearfix"></div>
                                <div class="content-text">
                                    <div class="text16 ml35">选择就诊意向（会诊/转诊），提交订单</div>
                                </div>
                            </div>
                            <div class="stepfour">
                                <div class="pull-left"><img class="mr10 mt7" src="<?php echo $urlResImage; ?>appdownload/step04.png"></div><div class="step">第四步</div>
                                <div class="clearfix"></div>
                                <div class="content-text">
                                    <div class="text16 ml35">名医助手回访确认并处理订单</div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



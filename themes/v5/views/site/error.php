<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle = Yii::app()->name . ' - 访问错误';
?>
<style>
    .background-all{background-color: #89cec8;   min-height:750px;}
    .mt100{margin-top: 100px;}
    .mt200{margin-top: 200px;}
    .border-button{display:block;border:1px ;height:35px;width:200px;border-radius:5px;background-color: #fff;text-align:center;padding-top:2px;font-size: 18px;color:#89cec8;}
    .text-21{font-size: 21px;}
    .text-color{color:#fff;}
    #site-content{padding-bottom:0!important;}
</style>
<div class="background-all">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4 mt200 "style="padding-left: 50px; line-height: 30px;">
                <div><img src="http://static.mingyizhudao.com/147013005921535"></div>
                <div class="text-21 text-color">sorry......</div>
                <div class="text-21 text-color">您访问的页面弄丢了，</div>
                <div class="text-21 text-color">您可以通过以下的方式继续访问。</div>
                <a class="border-button mt10" href="<?php echo $this->getHomeUrl(); ?>">返回首页</a>
            </div>
            <div class="col-md-4 mt100"style="margin-left: -50px;">
                <img src="http://static.mingyizhudao.com/147013006129652">
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
</div>
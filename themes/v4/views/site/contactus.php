<?php
$this->pageTitle = '联系我们_名医主刀';
?>
<style type="text/css">
    #site-header{border-bottom:1px solid #ddd;}
    .page-content .heading-u{margin-bottom:0;}
    .page-content .panel{border-top:none;border-radius:0;}
    .page-content .panel-body{padding:147px 0px 150px 170px;}
    @media screen and (max-width:1200px){.page-content .panel-body{padding:147px 50px 150px;}}
    .page-content .panel-body .media .media-body{font-size: 16px;line-height: 1.8em;}
</style>
<div class="container">
    <div class="mb20">
        <div id="sidemenu" class="col-sm-2">
            <?php $this->renderPartial('pages/_menu'); ?>
        </div>
        <div class="col-sm-10 page-content">
            <div class="row">
                <div class="panel panel-default">             
                    <div class="panel-body">
                        <div class="media">
                            <div class="pull-left media-middle">
                                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/ic_wx.png" width="150px"/>
                            </div>
                            <div class="media-body">
                                <div>客服电话：<span class="color-green">400-119-7900</span></div>
                                <div>人事招聘：186-1620-5157（谢小姐）</div>
                                <div>市场合作：电话：188-1758-2363  QQ：974790339（龙小姐）</div>
                                <div>企业邮箱：service@mingyizhdao.com</div>
                                <div><span class="color-green">名医主刀微信公众号，扫码左边关注。</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
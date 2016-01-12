<?php
//Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery.carousel.js', CClientScript::POS_END);

$urlPartner = Yii::app()->baseUrl . '/resource/partner/';
$partnerlist = array(
    '上海长海医院' => $urlPartner . 'partner01.gif',
    '新加坡伊丽莎白医院' => $urlPartner . 'partner06.gif',
    '上海东方肝胆外科医院' => $urlPartner . 'partner02.gif',
    '新加坡陈笃生医院' => $urlPartner . 'partner07.gif',
    '上海瑞金医院' => $urlPartner . 'partner03.gif',
    '新加坡中央医院' => $urlPartner . 'partner08.gif',
    '复旦附属华山医院' => $urlPartner . 'partner04.gif',
    '新加坡癌症中心' => $urlPartner . 'partner09.gif',
    '上海天坛普华医院' => $urlPartner . 'partner05.gif',
    '新加坡国大医学院' => $urlPartner . 'partner10.gif',
);
?>

<section id="footer">
    <div id="footer-partner" class="partner">
        <div class="section-title text-center">合作伙伴</div>
        <div class="container">
            <div class="content">
                <div id="partnerlist">
                    <div class="carousel">
                        <?php foreach ($partnerlist as $name => $urlImage) { ?>
                            <div class="logo"><img class="img-responsive" src="<?php echo $urlImage; ?>" alt="<?php echo $name; ?>" /><div xclass="caption"><?php echo $name; ?></div></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="company container-fluid bg-green">
        <div class="row">
            <div class="container pt30 pb30">
                <div class="row content">
                    <div class="col-sm-4 col-md-4 col-1">
                        <div class="site-phone"><span class="text color-white">400-119-7900</span></div>
                        <div class="abs-btm">
                            <div class="site-email">service@mingyihz.com</div>
                            <div class="navigator">
                                <ul class="nostyle inline-block">
                                    <li><?php echo CHtml::link('关于我们', array('site/page', 'view' => 'aboutus'), array('class' => 'nostyle', 'id' => 'footer-nav-aboutus')); ?></li>
                                    <li><?php echo CHtml::link('免责声明', array('site/page', 'view' => 'terms'), array('class' => 'nostyle', 'id' => 'footer-nav-terms')); ?></li>
                                    <li><?php echo CHtml::link('联系我们', array('site/contactus'), array('class' => 'nostyle', 'id' => 'footer-nav-contactus')); ?></li>                
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-4 col-2">
                        <div class="">
                            <div class="qrcode"><img class="img-responsive" src="<?php echo Yii::app()->baseUrl; ?>/resource/wx/wx_qrcode_344x344.jpg"></div>

                            <div class="c-name mb5">上海创贤网络科技有限公司</div>
                            <div class="">上海市杨浦区国通路127号</div>
                            <div class="abs-btm pb15">
                                <div class="mb5">沪ICP备15004081号-2</div>
                                <div><?php echo Yii::app()->name; ?>版权所有&copy;2015</div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-3 col-md-4 col-3">
                        <div>下载名医主刀App</div>
                        <div class="dl-app">
                            <a href="http://www.wandoujia.com/apps/com.mingyihz.myhzwebapp" target="_blank"><span class="icon ic_android_dl"></span></a>
                            <a href="https://itunes.apple.com/cn/app/id1001032594" target="_blank"><span class="icon ic_ios_dl"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--  <div id="site-contactus" title="联系我们">
          <a class="block" href="<?php echo $this->createUrl('site/contactus'); ?>">
              <div class="icon"></div><div class="caption">联系我们</div>
          </a>
      </div>
    -->
    <div class="totop" title="回到顶部" style="position: fixed; bottom: 70px; right: 5px; opacity: 1; cursor: pointer;">
        <a href="">回到顶部</a>
    </div>
</section>
<script type="text/javascript">
    $(function() {
        $('#partnerlist>.carousel').bxSlider({
            minSlides: 1,
            maxSlides: 5,
            slideWidth: 180,
            slideMargin: 5,
            ticker: true,
            tickerHover:true,
            speed: 20000,
            useCSS:false
        });
    });
</script>
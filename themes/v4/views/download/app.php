<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/appdownload.css");
?>
<div class="container" id="appdownload">
    <div class="row mt50">
        <div class="col-sm-4 col-sm-offset-1 col-md-3">
            <div class="phone-bxslider">
                <div class="mt-fix">
                    <ul class="bxslider">
                        <li><img src="<?php echo $urlResImage; ?>download/expertteam.jpg"/></li>
                        <li><img src="<?php echo $urlResImage; ?>download/hospital.jpg"/></li>
                        <li><img src="<?php echo $urlResImage; ?>download/zhitongche.jpg"/></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row download-img">
                <div class="col-sm-6 col-md-5 col-xs-6">
                    <a href="https://itunes.apple.com/cn/app/id1001032594" target="_blank">
                        <div class="ios-download qr-code"></div>
                        <div class="text-center"><span class="download-desc"><i class="fa fa-apple"></i> IOS下载</span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-5 col-xs-6">
                    <a href="http://android.myapp.com/myapp/detail.htm?apkName=com.mingyizhudao.app" target="_blank">
                        <div class="android-download qr-code"></div>
                        <div class="text-center"><span class="download-desc"><i class="fa fa-android"></i> Android下载</span></div>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.phone-bxslider .bxslider').bxSlider({
                slideMargin: 0,
                controls: false,
                auto: true,
                autoControls: true
            });
            $(".phone-bxslider .bx-wrapper").mouseover(function () {
                $('.bx-stop').trigger("click");
            });
            $(".phone-bxslider .bx-wrapper").mouseout(function () {
                $('.bx-start').trigger("click");
            });
        });
    </script>
</div>
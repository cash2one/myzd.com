<!DOCTYPE html>
<html lang="zh" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>                
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta charset="utf-8" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="pragma" content="no-cache" />
        <title><?php echo ($this->pageTitle); ?></title>        
        <meta name="keywords" content="<?php echo $this->htmlMetaKeywords; ?>" />
        <meta name="description" content="<?php echo $this->htmlMetaDescription; ?>" />
        <meta name="baidu-site-verification" content="KtqpwJh89S" />
        <meta name="baidu-site-verification" content="trPIkIhMMh" />
        <link rel="shortcut icon" type="image/ico" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/favicon.ico" />
        
        <?php
//        Yii::app()->clientScript->registerCssFile("http://myzd.oss-cn-hangzhou.aliyuncs.com/static/web/css/bootstrap.min.css");
//        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/font-awesome.min.css");
//        Yii::app()->clientScript->registerCssFile("http://myzd.oss-cn-hangzhou.aliyuncs.com/static/web/js/jquery.bxslider/jquery.bxslider.css");
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/pc_all.min.css");
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/main.min.css" . "?v=" . time());
        Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/web/js/jquery-1.9.1.min.js', CClientScript::POS_HEAD);
//        Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/web/js/bootstrap.min.js', CClientScript::POS_HEAD);
//        Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/web/js/jquery.bxslider/jquery.bxslider.min.js', CClientScript::POS_END);
//        Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/web/js/unslider.min.js', CClientScript::POS_HEAD);
//        Yii::app()->clientScript->registerScriptFile('http://myzd.oss-cn-hangzhou.aliyuncs.com/static/web/js/holder.js', CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/pc_all.min.js', CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/main.js', CClientScript::POS_HEAD);
        ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->		
        <!--[if lt IE 9]>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/html5shiv.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/respond.min.js"></script>
        <![endif]-->       
        <style>  #BDBridgeMess{display:none !important;}</style>
    </head>
    <body>

        <!-- Header -->

        <?php
        if ($this->showHeader()) {
            $this->renderPartial('//layouts/header');
        }
        //$this->renderPartial("//layouts/_topNavigator");
        ?>


        <!-- End Header -->

        <!-- Content-->
        <section id="site-content">
            <?php echo $content; ?>   
        </section>
        <!-- End Content -->

        <!-- Footer -->
        <?php
        if ($this->showFooter()) {
            $this->renderPartial('//layouts/footer');
        }
        ?>
        <!-- End Footer -->

        <?php
        /* Contact us floating widget */
        //$this->renderPartial('//site/modalContactus');
        //$this->renderPartial('//site/modalEnquiry');
        /* Baidu & cnzz traffic analysis script */
        if ($this->show_traffic_script) {
            $this->loadTrafficAnalysisScript(true);
        }
        ?>

    </body>
</html>
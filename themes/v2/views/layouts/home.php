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
        <meta name="keywords" content="名医,癌症,看病,就医,三甲医院,主任,医疗专家" />
        <meta name="description" content="名医会诊网是集在线远程诊询、线下合作会诊于一体的移动医疗O2O服务平台，同时提供出国医疗体验服务，是值得您信赖的健康咨询专家。" />           
        <meta name="baidu-site-verification" content="udpfk9Nj1q" />
        <link rel="shortcut icon" type="image/ico" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/favicon.ico" />


        <?php
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/bootstrap.min.css");
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/font-awesome.min.css");        
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/main.css" . "?v=" . time());
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/home.css" . "?v=" . time());
        ?>

        <?php
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery-1.9.1.min.js', CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap.min.js', CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery.bxslider/jquery.bxslider.min.js', CClientScript::POS_END);        
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/main.js', CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/home.js', CClientScript::POS_HEAD);
        ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->		
        <!--[if lt IE 9]>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/html5shiv.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <!-- Header -->
        <section id="site-header" class="container-fluid">
            <?php
            if ($this->show_header) {
                $this->renderPartial('//layouts/header');
            }
            ?>
        </section>
        <!-- End Header -->

        <!-- Content-->
        <?php echo $content; ?>
        <!-- End Content -->

        <!-- Footer -->
        <?php
        /*
          if ($this->show_footer) {
          $this->renderPartial('//layouts/footer');
          }
         * 
         */
        ?>
        <!-- End Footer -->

        <?php
        /* left widget list */
        $this->renderPartial('//layouts/_leftWidgetList');
        /* Contact us bs modal. */
        //$this->renderPartial('//site/modalContactus');
        $this->renderPartial('//site/modalEnquiry');
        /* Baidu & cnzz traffic analysis script */
        $this->loadTrafficAnalysisScript(true);
        ?>

    </body>
</html>
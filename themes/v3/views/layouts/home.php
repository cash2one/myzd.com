<!DOCTYPE html>
<html lang="zh" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>                
        <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
        <meta charset="utf-8" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="pragma" content="no-cache" />
        <title><?php echo ($this->pageTitle); ?></title>        
        <meta name="keywords" content="名医,名医主刀,做手术,手术预约,手术直通车,主任医师,就医,看病" />
        <meta name="description" content="名医主刀汇聚国内顶尖名医，为手术患者提供全面专业手术预约服务，一键预约医院专家，让手术患者轻松看病！" />       
        <link rel="shortcut icon" type="image/ico" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/favicon.ico" />


        <?php
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/bootstrap.min.css");
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/font-awesome.min.css");
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/main.css" . "?v=" . time());
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/home.css" . "?v=" . time());
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/js/jquery.bxslider/jquery.bxslider.css");
        ?>

        <?php
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery-1.9.1.min.js', CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap.min.js', CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery.bxslider/jquery.bxslider.min.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/unslider.min.js', CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/holder.js', CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/main.js', CClientScript::POS_HEAD);
//        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/home.js', CClientScript::POS_HEAD);
        ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->		
        <!--[if lt IE 9]>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/html5shiv.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>        
        <div id="browsermode-menu" style="display:none;width:100%;position:fixed;top:0;z-index:99;"><a class="btn btn-warning btn-block mode-mobile" href="<?php echo Yii::app()->params['baseUrlMobile']; ?>">浏览手机版&nbsp;<i class="fa fa-mobile"></i></a></div>
        <!-- Header -->
        <?php
        if ($this->show_header) {
            $this->renderPartial('//layouts/header');
        }
        ?>
        <!-- End Header -->

        <!-- Content-->
        <?php echo $content; ?>
        <!-- End Content -->                   

        <!-- Footer -->
        <?php
        if ($this->show_footer) {
            $this->renderPartial('//layouts/footer');
        }
        ?>
        <!-- End Footer -->         

        <?php
        /* left widget list */
        //$this->renderPartial('//layouts/_leftWidgetList');
        /* Contact us bs modal. */
        //$this->renderPartial('//site/modalContactus');
        //$this->renderPartial('//site/modalEnquiry');
        /* Baidu & cnzz traffic analysis script */
        $this->loadTrafficAnalysisScript(true);
        ?>         
    </body>
</html>
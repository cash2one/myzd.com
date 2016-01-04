<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
    <head>
        <title>EasyBuy</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" type="text/css" media="all" />
        <!--[if IE 6]>
                <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/png-fix.js"></script>
    <![endif]-->
    </head>
    <body>
        <div id="print-wrapper">
            <!-- Content -->
            <div id="content">
                <?php echo $content; ?>
            </div>
            <!-- End Content -->
            <div class="cl">&nbsp;</div>
        </div>
    </body>
</html>
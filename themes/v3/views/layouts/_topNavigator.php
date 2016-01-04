<?php
$siteMenu = $this->loadSiteMenu();
$facultyMenu = $siteMenu["faculty"];
?>
<div class="container">
    <div class="row header-menu">
        <div class="collapse navbar-collapse" id="header-navbar-collapse">                
            <ul id="header-nav" class="nav navbar-nav" style="width:100%;">
                <li class="dropdown dropdown-hover">
                    <a id="header-nav-home" href="<?php echo Yii::app()->homeUrl; ?>" class="dropdown-toggle">首页</a>
                </li>
                <?php if (isset($this->current_page) && isset($this->current_page["label"])): ?>
                    <li class="dropdown dropdown-hover" >
                        <a id="header-nav-faculty-list" href="/serviceflow" class="dropdown-toggle borderleft" data-toggle="dropdown">主打科室</a>
                        <ul id="faculty-menu" class="dropdown-menu noborder nopadding" role="menu">
                            <div class="header-faculty">
                                <?php foreach ($facultyMenu as $key => $menu): ?>
                                    <div class="faculty-content col-sm-3 col-md-2 col-xs-4">
                                        <a href="<?php echo $menu['url']; ?>">
                                            <div class="faculty-icon icon-<?php echo $key ?>"></div>
                                            <div class="faculty-name"><?php echo $menu["label"] ?></div>
                                        </a>
                                    </div>
                                <?php endforeach ?>
                                <div class="faculty-content col-sm-3 col-md-2 col-xs-4">
                                    <a href="<?php echo $this->createUrl('faculty/view', array('name' => '妇科')); ?>" target="_blank">
                                        <div class="faculty-icon icon-fuke"></div>
                                        <div class="faculty-name">妇科</div>
                                    </a>
                                </div>
                                <div class="faculty-content col-sm-3 col-md-2 col-xs-4">
                                    <a href="<?php echo $this->createUrl('faculty/view', array('name' => '骨科')); ?>" target="_blank">
                                        <div class="faculty-icon icon-guke"></div>
                                        <div class="faculty-name">骨科</div>
                                    </a>
                                </div>
                            </div>

                        </ul>
                    </li>
                    <li class="dropdown dropdown-hover hidden-xs">
                        <a id="header-nav-faculty" href="/serviceflow" class="dropdown-toggle noborder" data-toggle="dropdown"><?php echo $this->current_page["label"]; ?></a>
                    </li>
                <?php endif; ?>
                <li class="dropdown dropdown-hover block-left">
                    <a id="header-nav-event" href="/event/index" class="dropdown-toggle" data-toggle="dropdown">特色推荐</a>
                    <ul class="dropdown-menu noborder nopadding" role="menu">
                        <li><a href="<?php echo $this->createUrl('event/view/dandao'); ?>">上海胆道疾病会诊中心</a></li> 
                        <li><a href="<?php echo $this->createUrl('event/view/liubaochi'); ?>">肝病新疗法</a></li>   
                    </ul>
                </li>
                <li class="dropdown dropdown-hover block-left">
                    <a id="header-nav-overseas" href="/overseas/index" class="dropdown-toggle " data-toggle="dropdown">海外名医</a>
                    <ul class="dropdown-menu noborder nopadding" role="menu">
                        <li><a href="<?php echo $this->createUrl('overseas/view', array('page' => 'sg')); ?>">新加坡</a></li>
                        <li><a href="<?php echo $this->createUrl('overseas/view', array('page' => 'usa')); ?>">美国</a></li>
                        <li><a href="<?php echo $this->createUrl('overseas/view', array('page' => 'korea')); ?>">韩国</a></li>
                        <li><a href="<?php echo $this->createUrl('overseas/view', array('page' => 'japan')); ?>">日本</a></li>
                        <li class="divider nomargin"></li>
                        <li><a href="<?php echo $this->createUrl('overseas/surgery'); ?>">特色手术</a></li> 
                    </ul>
                </li>
                <?php if (!isset($this->current_page) || !isset($this->current_page["label"])): ?>
                    <li class="dropdown dropdown-hover block-left" >
                        <a id="header-nav-faculty-list" href="/serviceflow" class="dropdown-toggle borderleft" data-toggle="dropdown">主打科室</a>
                        <ul id="faculty-menu" class="dropdown-menu noborder nopadding pull-right" role="menu">
                            <div class="header-faculty">
                                <?php foreach ($facultyMenu as $key => $menu): ?>
                                    <div class="faculty-content col-sm-3 col-md-2 col-xs-4">
                                        <a href="<?php echo $menu['url']; ?>">
                                            <div class="faculty-icon icon-<?php echo $key ?>"></div>
                                            <div class="faculty-name"><?php echo $menu["label"] ?></div>
                                        </a>
                                    </div>
                                <?php endforeach ?>
                            </div>

                        </ul>
                    </li>
                <?php endif; ?>
                <li class="dropdown dropdown-hover block-left">
                    <a id="header-nav-event" href="<?php echo $this->createUrl("hospital/index", array("city" => 1)); ?>" class="dropdown-toggle borderleft" data-toggle="dropdown">合作医院</a>
                    <ul class="dropdown-menu noborder nopadding" role="menu">
                        <li><a href="<?php echo $this->createUrl("hospital/index", array("city" => 1)); ?>">北京</a></li> 
                        <li><a href="<?php echo $this->createUrl("hospital/index", array("city" => 73)); ?>">上海</a></li>  
                        <li><a href="<?php echo $this->createUrl("hospital/index", array("city" => 74)); ?>">南京</a></li>  
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</div>
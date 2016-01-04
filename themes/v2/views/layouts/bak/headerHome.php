<?php
$this->loadHeaderMenu();
?>
<div class="row">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container pos-relative">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="site-logo" class="navbar-brand" href="<?php echo Yii::app()->homeUrl; ?>"></a>
            </div>     

            <ul class="nav navbar-nav user-nav nav-top-right hidden-xs">
                <li class="hidden-sm phone"><a><span class="site-phone text color-green">400-119-7900</span></a></li>
                <?php
                $user = $this->getCurrentUser();
                if (isset($user)) {
                    //user is signed in.
                    echo '<li class="dropdown dropdown-hover">';
                    echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;账号：'.$user->getUsername().'</a>';
                    echo '<ul class="dropdown-menu nopadding" role="menu">';
                    echo '<li><a href="' . $this->createUrl('medicalrecord/index') . '"><i class="fa fa-files-o"></i>&nbsp;我的病历</a></li>';
                    echo '<li><a href="' . $this->createUrl('medicalrecord/create') . '"><i class="fa fa-edit"></i>&nbsp;创建病历</a></li>';                    
                    echo '<li><a href="' . $this->createUrl('user/account') . '"><i class="fa fa-gear"></i>&nbsp;账户设置</a></li>';
                    echo '<li class="divider"></li>';
                    echo '<li><a href="' . $this->createUrl('user/logout') . '"><i class="fa fa-sign-out"></i>&nbsp;退出登录</a></li>';
                    echo '</ul>';
                    echo '</li>';                  
                } else {
                    echo '<li class="nav-item"><a href="' . $this->createUrl('user/login') . '">登录</a></li>';
                    echo '<li class="nav-item"><a href="' . $this->createUrl('user/register') . '">注册</a></li>';
                }
                ?>
            </ul>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="row">
                <div class="collapse navbar-collapse pull-right" id="header-navbar-collapse">                
                    <ul id="header-nav" class="nav navbar-nav">	
                        <li class="dropdown dropdown-hover">
                            <a id="header-nav-aboutus" href="<?php echo $this->createUrl('site/page', array('view' => 'aboutus')); ?>" class="dropdown-toggle" data-toggle="dropdown">关于我们</a>
                            <ul class="dropdown-menu noborder nopadding" role="menu">
                                <?php
                                foreach ($this->site_menu['site'] as $label => $menuItem) {
                                    echo '<li><a href="' . $menuItem . '">' . $label . '</a></li>';
                                }
                                ?>                           
                            </ul>
                        </li>                        
                        <li class="dropdown dropdown-hover">
                            <a id="header-nav-huizhen" href="<?php echo $this->createUrl('huizhen/index'); ?>" class="dropdown-toggle" data-toggle="dropdown">国内名医</a>
                            <ul class="dropdown-menu noborder nopadding" role="menu">
                                <?php
                                foreach ($this->site_menu['domestic'] as $label => $menuItem) {
                                    if ($label == 'divider') {
                                        echo '<li class="divider nomargin"></li>';
                                    } else {
                                        echo '<li><a href="' . $menuItem . '">' . $label . '</a></li>';
                                    }
                                }
                                ?>   
                            </ul>
                        </li>
                        <li class="dropdown dropdown-hover">
                            <a id="header-nav-overseas" href="<?php echo $this->createUrl('overseas/index'); ?>" class="dropdown-toggle" data-toggle="dropdown">海外名医</a>
                            <ul class="dropdown-menu noborder nopadding" role="menu">
                                <?php
                                foreach ($this->site_menu['overseas'] as $label => $menuItem) {
                                    if ($label == 'divider') {
                                        echo '<li class="divider nomargin"></li>';
                                    } else {
                                        echo '<li><a href="' . $menuItem . '">' . $label . '</a></li>';
                                    }
                                }
                                ?> 
                            </ul>
                        </li>
                        <li class="dropdown dropdown-hover">
                            <a id="header-nav-hospital" href="<?php echo $this->createUrl('site/page', array('view' => 'serviceflow')); ?>" class="dropdown-toggle" data-toggle="dropdown">服务流程</a>
                            <ul class="dropdown-menu noborder nopadding" role="menu">
                                <?php
                                foreach ($this->site_menu['serviceflow'] as $label => $menuItem) {
                                    echo '<li><a href="' . $menuItem . '">' . $label . '</a></li>';
                                }
                                ?>                           
                            </ul>
                        </li>

                        <li class="dropdown dropdown-hover">
                            <a id="header-nav-event" href="<?php echo $this->createUrl('event/index'); ?>" class="dropdown-toggle" data-toggle="dropdown">特色推荐</a>
                            <ul class="dropdown-menu noborder nopadding" role="menu">
                                <?php
                                foreach ($this->site_menu['event'] as $label => $menuItem) {
                                    if ($label == 'divider') {
                                        echo '<li class="divider nomargin"></li>';
                                    } else {
                                        echo '<li><a href="' . $menuItem . '">' . $label . '</a></li>';
                                    }
                                }
                                ?>  
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container-fluid -->
    </nav>
</div>
<?php
$siteMenu = $this->loadSiteMenu();
$facultyMenu = $siteMenu["faculty"];
$aboutusMenu = $siteMenu["site"];
?>
<section id="site-header" class="container-fluid">
    <div class="container-fluid hidden-xs fixed-container">
        <div class="container" style="padding: 0;">
            <div class="fixed-header">
                <a class="pull-left" href="<?php echo Yii::app()->homeUrl; ?>">
                    <img src="http://myzd.oss-cn-hangzhou.aliyuncs.com/static%2Flogo_website_217x50.png"/>
                </a>
                <ul class="nav navbar-nav user-nav nav-top-right hidden-xs pull-right">
                    <li class="nav-item hidden-sm phone"><a><span class="site-phone text color-green">400-119-7900</span></a></li>
                    <?php
                    $user = $this->getCurrentUser();
                    if (isset($user)) {
                        //user is signed in.
                        echo '<li class="dropdown dropdown-hover">';
                        echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">账号:' . $user->getUsername() . '<i class="fa fa-caret-down"></i></a>';
                        echo '<ul class="dropdown-menu nopadding" role="menu">';
                        //    echo '<li><a href="' . $this->createUrl('medicalrecord/index') . '"><i class="fa fa-files-o"></i>&nbsp;我的预约</a></li>';
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
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container pos-relative">
                    <div class="row">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="<?php echo Yii::app()->homeUrl; ?>"><img src="http://myzd.oss-cn-hangzhou.aliyuncs.com/static%2Flogo_website_217x50.png"/></a>
                        </div>     

                        <ul class="nav navbar-nav user-nav nav-top-right hidden-xs">
                            <li class="hidden-sm phone"><a><span class="site-phone text color-green">400-119-7900</span></a></li>
                            <?php
                            $user = $this->getCurrentUser();
                            if (isset($user)) {
                                //user is signed in.
                                echo '<li class="dropdown dropdown-hover">';
                                echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">账号:' . $user->getUsername() . '<i class="fa fa-caret-down"></i></a>';
                                echo '<ul class="dropdown-menu nopadding" role="menu">';
                                //    echo '<li><a href="' . $this->createUrl('medicalrecord/index') . '"><i class="fa fa-files-o"></i>&nbsp;我的预约</a></li>';
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
                        <?php if (!$this->show_header_navbar) { ?>
                            <div class="row">
                                <div class="collapse navbar-collapse pull-right" id="header-navbar-collapse">                
                                    <ul id="header-nav" class="nav navbar-nav">
                                        <li class="dropdown dropdown-hover">
                                            <a id="header-nav-hospital" href="<?php echo $aboutusMenu["aboutus"]["url"]; ?>" class="dropdown-toggle" >关于我们</a>
                                            <ul class="dropdown-menu noborder nopadding" role="menu">
                                                <?php foreach ($aboutusMenu as $key => $menu): ?>
                                                    <li><a href="<?php echo $menu['url']; ?>"><?php echo $menu["label"] ?></a></li>
                                                <?php endforeach ?>
                                                <li><a href="<?php echo $this->createUrl('news/index'); ?>"><?php echo '新闻中心'; ?></a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-hover">
                                            <a id="header-nav-hospital" href="/serviceflow" class="dropdown-toggle" data-toggle="dropdown">主打科室</a>
                                            <ul class="dropdown-menu noborder nopadding" role="menu">
                                                <?php foreach ($facultyMenu as $key => $menu): ?>
                                                    <li><a href="<?php echo $menu['url']; ?>"><?php echo $menu["label"] ?></a></li>
                                                <?php endforeach ?>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-hover">
                                            <a id="header-nav-overseas" href="/overseas/index" class="dropdown-toggle" data-toggle="dropdown">海外名医</a>
                                            <ul class="dropdown-menu noborder nopadding" role="menu">
                                                <li><a href="<?php echo $this->createUrl('overseas/view', array('page' => 'sg')); ?>">新加坡</a></li>
                                                <li><a href="<?php echo $this->createUrl('overseas/view', array('page' => 'usa')); ?>">美国</a></li>
                                                <li><a href="<?php echo $this->createUrl('overseas/view', array('page' => 'korea')); ?>">韩国</a></li>
                                                <li><a href="<?php echo $this->createUrl('overseas/view', array('page' => 'japan')); ?>">日本</a></li>
                                                <li class="divider nomargin"></li>
                                                <li><a href="<?php echo $this->createUrl('overseas/surgery'); ?>">特色手术</a></li> 
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-hover">
                                            <a id="header-nav-event" href="/event/index" class="dropdown-toggle" data-toggle="dropdown">特色推荐</a>
                                            <ul class="dropdown-menu noborder nopadding" role="menu">
                                                <li><a href="<?php echo $this->createUrl('event/view/dandao'); ?>">上海胆道疾病会诊中心</a></li> 
                                                <li><a href="<?php echo $this->createUrl('event/view/liubaochi'); ?>">肝病新疗法</a></li>   
                                            </ul>
                                        </li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div>
                        <?php } ?>
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    <script>
        $(document).ready(function () {

        });
    </script>
</section>
<?php if ($this->show_header_navbar) { ?>
    <style>#site-header .container{padding-bottom:10px;}</style>

<?php } ?>


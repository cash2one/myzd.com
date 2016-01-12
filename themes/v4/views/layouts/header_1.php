<?php
$siteMenu = $this->loadSiteMenu();
$facultyMenu = $siteMenu["faculty"];
$aboutusMenu = $this->loadSiteMenu()["site"];
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
?>
<section id="site-header" class="container-fluid">
    <div class="container">
        <div class="">
            <nav class="navbar navbar-default" role="navigation">
                <div class="">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo Yii::app()->homeUrl; ?>"><img src="<?php echo $urlResImage; ?>icons/logo.png"></a>
                    </div>     
                    <ul class="nav navbar-nav user-nav nav-top-right hidden-xs" style="width: 50%">
                        <div class="pull-right hidden-sm phone"><a><span class="site-phone text color-green">400-119-7900</span></a></div>
                    </ul>
                    <ul class="header-sologan nav navbar-nav user-nav nav-top-rightx hidden-sm hidden-xs">
                        <li class="nav-item pull-left">仁爱</li> 
                        <li class="nav-item">专业</li> 
                        <li class="nav-item">创新</li> 
                        <li class="nav-item mr30">效率</li> 
                    </ul>
                    <ul class="nav navbar-nav user-nav nav-top-right hidden-xs">
                        <?php
                        $user = $this->getCurrentUser();
                        /*
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
                         * 
                         */
                        ?>  
                    </ul>
                    <!-- Collect the nav links, forms, and other content for toggling -->

                </div>
            </nav>
        </div>
    </div>
    <div class="siteheader-menu row">
        <div class="container pt0">
            <div class="">
                <div class="collapse navbar-collapse" id="header-navbar-collapse">                
                    <ul id="header-nav" class="nav navbar-nav">
                        <li class="dropdown dropdown-hover">
                            <a id="header-nav-expertteam" href="<?php echo $this->createUrl('expertteam/index'); ?>" class="dropdown-toggle">专家团队</a>
                        </li>
                        <li class="dropdown dropdown-hover">
                            <a id="header-nav-hospital" href="<?php echo $this->createUrl('hospital/index', array('city' => '1')); ?>" class="dropdown-toggle">推荐医院</a>
                        </li>
                        <li class="dropdown dropdown-hover">
                            <a id="header-nav-aboutus" href="<?php echo $aboutusMenu["aboutus"]["url"]; ?>" class="dropdown-toggle">关于我们</a>
                        </li>
                        <li class="dropdown dropdown-hover">
                            <a id="header-nav-aboutus" href="<?php echo $this->createUrl('site/enquiry'); ?>" class="dropdown-toggle">我要预约</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
            <?php
            if ($this->show_header_navbar) {
                ?>
                <a class="dis-index hidden-sm hidden-xs" href="<?php echo $this->createUrl('disease/index'); ?>" target="_blank">快速查找入口</a>
                <?php
            }
            ?>

            <style>
                .dis-index{width: 158px;text-align: center;padding: 3px 10px;letter-spacing: 5px;font-size: 15px;background-color: #19aea5;color: #fff;box-shadow: 0px 0px 1px 1px #ccc;position: absolute;right: 15px;top: -30px;border-radius: 5px;z-index: 999;}
                .siteheader-menu .container{position: relative;}
            </style>
        </div>
    </div>
</section>



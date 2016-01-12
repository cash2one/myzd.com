<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$baseUrlTeam = $this->createUrl("expertteam/view", array("id" => ""));
$siteMenu = $this->loadSiteMenu();
$facultyMenu = $siteMenu["faculty"];
?>
<section id="site-content">
    <div id="main-content">
        <div class="container-fluid bg-gray">
            <div class="container">
                <div class="row">
                    <div class="mt-fix">
                        <ul class="bxslider" id="expertteam">
                            <li><a href="<?php echo $baseUrlTeam; ?>1"><img src="<?php echo $urlResImage; ?>homeslider/team-xujianping.jpg" alt="许建屏专家团队" class="img-responsive"></a></li>
                            <li><a href="<?php echo $baseUrlTeam; ?>2"><img src="<?php echo $urlResImage; ?>homeslider/team-liuyuewu.jpg" alt="刘跃武专家团队" class="img-responsive"></a></li>
                            <li><a href="<?php echo $baseUrlTeam; ?>3"><img src="<?php echo $urlResImage; ?>homeslider/team-zhusiquan.jpg" alt="朱思泉专家团队" class="img-responsive"></a></li>
                            <li><a href="<?php echo $baseUrlTeam; ?>4"><img src="<?php echo $urlResImage; ?>homeslider/team-luhai.jpg" alt="卢海专家团队" class="img-responsive"></a></li>
                            <li><a href="<?php echo $baseUrlTeam; ?>5"><img src="<?php echo $urlResImage; ?>homeslider/team-zhangdong.jpg" alt="张东专家团队" class="img-responsive"></a></li>
                            <li><a href="<?php echo $baseUrlTeam; ?>6"><img src="<?php echo $urlResImage; ?>homeslider/team-guochuanbin.jpg" alt="郭传瑸团队" class="img-responsive"></a></li>
                            <li><a href="<?php echo $baseUrlTeam; ?>7"><img src="<?php echo $urlResImage; ?>homeslider/team-gujin.jpg" alt="顾晋专家团队" class="img-responsive"></a></li>
                            <li><a href="<?php echo $baseUrlTeam; ?>8"><img src="<?php echo $urlResImage; ?>homeslider/team-wangxuehao.jpg" alt="王学浩专家团队" class="img-responsive"></a></li>
                            <li><a href="<?php echo $baseUrlTeam; ?>9"><img src="<?php echo $urlResImage; ?>homeslider/team-miaoyi.jpg" alt="苗毅专家团队" class="img-responsive"></a></li>
                            <li><a href="<?php echo $baseUrlTeam; ?>10"><img src="<?php echo $urlResImage; ?>homeslider/team-liujiayin.jpg" alt="刘嘉茵专家团队" class="img-responsive"></a></li>
                            <li><a href="<?php echo $baseUrlTeam; ?>11"><img src="<?php echo $urlResImage; ?>homeslider/team-gongxiaoming.jpg" alt="龚晓明专家团队" class="img-responsive"></a></li>
                            <li><a href="<?php echo $baseUrlTeam; ?>12"><img src="<?php echo $urlResImage; ?>homeslider/team-lishiting.jpg" alt="李世亭专家团队" class="img-responsive"></a></li>
                            <li><a href="<?php echo $baseUrlTeam; ?>13"><img src="<?php echo $urlResImage; ?>homeslider/team-shiweijin.jpg" alt="施维锦专家团队" class="img-responsive"></a></li>
                            <li><a href="<?php echo $baseUrlTeam; ?>14"><img src="<?php echo $urlResImage; ?>homeslider/team-xuqiwu.jpg" alt="徐启武专家团队" class="img-responsive"></a></li>
                            <li><a href="<?php echo $baseUrlTeam; ?>15"><img src="<?php echo $urlResImage; ?>homeslider/team-songdonglei.jpg" alt="宋冬雷专家团队" class="img-responsive"></a></li>
                            <li><a href="<?php echo $baseUrlTeam; ?>16"><img src="<?php echo $urlResImage; ?>homeslider/team-guohui.jpg" alt="郭辉专家团队" class="img-responsive"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row mt20 visible-xs">
                    <a class="btn btn-info btn-wide col-xs-6" href="<?php echo $siteMenu["auth"]["userRegister"]["url"]; ?>" >用户入口</a><a class="btn btn-success btn-wide col-xs-6" href="<?php echo $siteMenu["auth"]["doctorRegister"]["url"]; ?>">医生入口</a>                </div>
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <div class="mb20" style="margin-top:74px;"><h3>主打科室</h3></div>
                        <div class="row faculty home-faculty">
                            <?php foreach ($facultyMenu as $key => $menu) { ?>
                                <div class="faculty-content col-sm-4 col-md-3 col-xs-6">
                                    <a href="<?php echo $menu["url"]; ?>" target="_blank">
                                        <div class="faculty-icon icon-<?php echo $key ?>"></div>
                                        <div class="faculty-name"><?php echo $menu["label"] ?></div>
                                    </a>
                                </div>
                            <?php } ?>

                            <div class="faculty-content col-sm-4 col-md-3 col-xs-6">
                                <a href="<?php echo $this->createUrl('faculty/view', array('name' => '妇产科')); ?>" target="_blank">
                                    <div class="faculty-icon icon-fuke"></div>
                                    <div class="faculty-name">妇产科</div>
                                </a>
                            </div>
                            <div class="faculty-content col-sm-4 col-md-3 col-xs-6">
                                <a href="<?php echo $this->createUrl('faculty/view', array('name' => '骨科')); ?>" target="_blank">
                                    <div class="faculty-icon icon-guke"></div>
                                    <div class="faculty-name">骨科</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="booking col-md-3 col-sm-3">
                        <div class="mt20 mt74 mb20"><h3>手术直通车</h3></div>
                        <div class="booking-form home-booking noborder">
                            <?php $this->Widget("QuickBookWidget", array('type' => 1)); ?>       
                        </div>
                    </div>
                </div>
                <!-- right-widget-list -->

            </div>   
        </div>
        <div class="container-fluid bg-gray">
            <div class="container home-hospital mt40 mb40">
                <div class="mb20">
                    <div class="title-hospital">合作医院</div>
                    <div class="title-slogan">国内一线城市顶尖名医</div>
                </div>
                <div class="row">
                    <div class="col-sm-4 city">
                        <a href="<?php echo $this->createUrl("hospital/index", array("city" => 1)); ?>">
                            <div class="beijing city-img">
                                <div class="bg-front">
                                    <div class="city-name"><span>北京</span></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-sm-4 city">
                        <a href="<?php echo $this->createUrl("hospital/index", array("city" => 73)); ?>">
                            <div class="shanghai city-img">
                                <div class="bg-front">
                                    <div class="city-name"><span>上海</span></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-sm-4 city">
                        <a href="<?php echo $this->createUrl("hospital/index", array("city" => 74)); ?>">
                            <div class="nanjing city-img">
                                <div class="bg-front">
                                    <div class="city-name"><span>南京</span></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="show-more row mt30 mb30">
                    <a href="<?php echo $this->createUrl("hospital/index", array("city" => 1)); ?>">
                        <div class="more-hospital">
                            <div class="title-slogan">查看更多合作医院</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-color: #d8efed;">
            <div class=" pb30">
                <div class="container">
                    <div class="mt40 mb20"><h3>感谢信</h3></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="mt-fix">
                            <ul class="bxslider">
                                <li><img src="<?php echo $urlResImage; ?>home/home-03.png" alt="" class="img-responsive"></li>
                                <li><img src="<?php echo $urlResImage; ?>home/home-01.png" alt="" class="img-responsive"></li>
                                <li><img src="<?php echo $urlResImage; ?>home/home-02.png" alt="" class="img-responsive"></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {

            $('.bxslider').bxSlider({
                controls: true,
                pager: true,
                auto: true,
                autoControls: true
            });
            $(".bx-wrapper").mouseover(function () {
                $('.bx-stop').trigger("click");
                $(".bx-prev").show();
                $(".bx-next").show();
            });
            $(".bx-wrapper").mouseout(function () {
                $('.bx-start').trigger("click");
                $(".bx-prev").hide();
                $(".bx-next").hide();
            });
        });
    </script>
</section>
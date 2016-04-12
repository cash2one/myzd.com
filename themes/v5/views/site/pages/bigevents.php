<?php
$menu = $this->getPageMenu();
$this->pageTitle = '大事记_名医主刀';
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/aboutus.css?v=" . time());
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
?>
<div class="container-fluid aboutus-header h400">
    <img src="<?php echo $urlResImage; ?>aboutus/our-header.png"/>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="mt-60">
                <?php $this->renderPartial('pages/_menu'); ?>
            </div>
        </div>
        <div class="container-fluid" id="big-events">
            <div class="row">
                <div class="container">
                    <div class="main-content">
                        <div class="event">
                            <div class="pull-left">
                                <img src="<?php echo $urlResImage; ?>aboutus/bigevents/event141001.png">
                            </div>
                            <div class="pl620">
                                <div class="event-date">2014年10月，名医主刀项目启动。</div>
                                <div class="divider-line"></div>
                                <div class="content">名医主刀希望通过互联网让更多患者<span class="text21">"好看病"、"看好病"</span>。</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="event">
                            <div class="pull-left mr30">
                                <img src="<?php echo $urlResImage; ?>aboutus/bigevents/event150501.png">
                            </div>
                            <div class="pl620">
                                <div class="event-date">2015年5月</div>
                                <div class="divider-line"></div>
                                <div class="content">“名医主刀”全新的医疗模式理念获得到了<span class="text21">真格基金创始人徐小平</span>老师的高度认可，仅在一次电话交流之后就果断决定对名医主刀项目进行了<span class="text21">500万</span>的天使投资。</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="event">
                            <div class="pull-left mr30">
                                <img src="<?php echo $urlResImage; ?>aboutus/bigevents/event151001.png">
                            </div>
                            <div class="pl620">
                                <div class="event-date">2015年10月</div>
                                <div class="divider-line"></div>
                                <div class="content">名医主刀完成<span class="text21">A轮6000万</span>元人民币融资。复星医药领投，高榕资本/真格基金跟投。</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$menu = $this->getPageMenu();
?>
<style>
    #site-header{border-bottom:1px solid #ddd;}
    .page-content .heading-u{margin-bottom:20px;}
    .page-content .heading-u .header-title{font-size: 24px;}
    .page-content .panel{border-radius:0;}
    .page-content .panel-body{padding-top:20px;}
    .page-content .panel-body .news-item{padding: 5px;border-bottom: 1px dotted #e4e4e4;}
    .page-content .panel-body .news-item.last{border-bottom: 0;}
</style>
<div class="container">
    <div class="mb20">
        <div id="sidemenu" class="col-sm-2">
            <?php $this->renderPartial('pages/_menu'); ?>
        </div>
        <div class="col-sm-10 page-content">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-body passage">
                        <div class="news-item">
                            <a href="<?php echo $this->createUrl('news/page', array('view' => 'mamajixufeiyuan')) ?>" target="_blank">年轻妈妈的生命倒计时，急需寻找“续命”肺源</a>
                            <span class="newstime pull-right">-- 2015-09-29</span>
                        </div>
                        <div class="news-item">
                            <a href="<?php echo $this->createUrl('news/page', array('view' => 'tiantanpuhua')) ?>" target="_blank">"名医主刀＋北京天坛普华医院" 互联网诊疗新模式</a>
                            <span class="newstime pull-right">-- 2015-09-15</span>
                        </div>
                        <div class="news-item">
                            <a href="<?php echo $this->createUrl('news/page', array('view' => 'chuangyebang')) ?>" target="_blank">"名医主刀"----"创业邦"推荐为9月值得关注的新创公司</a>
                            <span class="newstime pull-right">-- 2015-09-13</span>
                        </div>
                        <div class="news-item">
                            <a href="<?php echo $this->createUrl('news/page', array('view' => 'teacher')) ?>" target="_blank">感恩教师，名医与慈善同行</a>
                            <span class="newstime pull-right">-- 2015-09-10</span>
                        </div>
                        <div class="news-item">
                            <a href="<?php echo $this->createUrl('news/page', array('view' => 'yinlianzhihui')) ?>" target="_blank">银联智惠与名医主刀携手，缓解患者经济负担</a>
                            <span class="newstime pull-right">-- 2015-09-09</span>
                        </div>
                        <div class="news-item">
                            <a href="<?php echo $this->createUrl('news/page', array('view' => 'jiazhuangxian')) ?>" target="_blank">甲状腺肿瘤患者的求医经历</a>
                            <span class="newstime pull-right">-- 2015-09-05</span>
                        </div>
                        <div class="news-item">
                            <a href="<?php echo $this->createUrl('news/page', array('view' => '36ke')) ?>" target="_blank">获真格基金青睐的“名医主刀”如何打造互联网O2O“飞刀”平台？</a>
                            <span class="newstime pull-right">-- 2015-09-05</span>
                        </div>
                        <div class="news-item">
                            <a href="<?php echo $this->createUrl('news/page', array('view' => 'mingyizhudao')) ?>" target="_blank">名医主刀：移动医疗手术O2O</a>
                            <span class="newstime pull-right">-- 2015-08-04</span>
                        </div>
                        <div class="news-item">
                            <a href="<?php echo $this->createUrl('news/page', array('view' => 'fly-cutter')) ?>" target="_blank">名医主刀：互联网式“飞刀”</a>
                            <span class="newstime pull-right">-- 2015-07-30</span>
                        </div>
                        <div class="news-item">
                            <a href="<?php echo $this->createUrl('news/page', array('view' => 'kangai')) ?>" target="_blank">父亲两次抗癌，只为给女儿更久远的爱</a>
                            <span class="newstime pull-right">-- 2015-07-30</span>
                        </div>
                        <div class="news-item">
                            <a href="<?php echo $this->createUrl('news/page', array('view' => 'qianyuedejiyiyuan')) ?>" target="_blank">名医主刀成功签约德济医院 互联网医疗又一里程碑</a>
                            <span class="newstime pull-right">-- 2015-07-30</span>
                        </div>
                        <div class="news-item">
                            <a href="<?php echo $this->createUrl('news/page', array('view' => 'chuangyeyingxionghui')) ?>" target="_blank">男儿英雄泪，志在“好看病，看好病”——“名医主刀”登陆央视《创业英雄汇》</a>
                            <span class="newstime pull-right">-- 2015-07-28</span>
                        </div>
                        <div class="news-item">
                            <a href="<?php echo $this->createUrl('news/page', array('view' => 'zhenfund')) ?>" target="_blank">“名医主刀”获真格基金500万天使投资，打造国内最大的手术O2O平台</a>
                            <span class="newstime pull-right">-- 2015-07-22</span>
                        </div>
                        <div class="news-item last">
                            <a href="<?php echo $this->createUrl('news/page', array('view' => 'hanayideganxiexin')) ?>" target="_blank">韩阿姨的一封感谢信照亮千万患者就医路</a>
                            <span class="newstime pull-right">-- 2015-07-18</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$this->pageTitle = '新闻资讯中心_2015_名医主刀';
$this->htmlMetaKeywords = '新闻中心';
$this->htmlMetaDescription = '新闻中心。【名医主刀】汇聚国内外顶级名医资源和床位资源，利用互联网技术实现医患精准匹配，帮助广大患者得以在第一时间预约到名医专家进行主刀治疗。www.mingyizhudao.com';
$menu = $this->getPageMenu();
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/mingyizhuyi.css");
$news = array(
    'forbes' => '2016-2月 --------------------福布斯发布亚洲年轻领袖榜单,名医主刀CEO苏舒入选',
    'firstaid' => '2015-12-08------------------8小时冒雪夜行驰援，医者仁心只为救死扶伤',
    'femalehealth' => '2015-11-06------------------关爱女性健康，名医主刀与公益同行',
    'mingyizhudaorongzi' => '2015-10-28------------------喜大普奔，名医主刀已完成A轮融资',
    'dididoctor' => '2015-10-20------------------滴滴医生火爆预约，名医抢单随车上门',
    'doctoronsite' => '2015-10-20------------------足不出户、医生上门！------阿里健康、滴滴出行、名医主刀，三强联手推医生上门服务',
    'partnerofdocs' => '2015-09-29------------------名医主刀：做医生和医生集团的合伙人',
//    'mamajixufeiyuan' => '2015-09-29------------------年轻妈妈的生命倒计时，急需寻找“续命”肺源',
    'tiantanpuhua' => '2015-09-15------------------"名医主刀＋北京天坛普华医院" 互联网诊疗新模式',
    'chuangyebang' => '2015-09-13------------------"名医主刀"----"创业邦"推荐为9月值得关注的新创公司',
    'teacher' => '2015-09-10------------------感恩教师，名医与慈善同行',
    'yinlianzhihui' => '2015-09-09------------------银联智惠与名医主刀携手，缓解患者经济负担',
    'jiazhuangxian' => '2015-09-05------------------甲状腺肿瘤患者的求医经历',
    '36ke' => '2015-09-05------------------获真格基金青睐的“名医主刀”如何打造互联网O2O“飞刀”平台？',
    'mingyizhudao' => '2015-08-04------------------名医主刀：移动医疗手术O2O',
    'fly-cutter' => '2015-07-30------------------名医主刀：互联网式“飞刀”',
//    'kangai' => '2015-07-30------------------父亲两次抗癌，只为给女儿更久远的爱',
    'qianyuedejiyiyuan' => '2015-07-30------------------名医主刀成功签约德济医院 互联网医疗又一里程碑',
    'chuangyeyingxionghui' => '2015-07-28------------------男儿英雄泪，志在“好看病，看好病”——“名医主刀”登陆央视《创业英雄汇》',
    'zhenfund' => '2015-05月 ------------------“名医主刀”获真格基金500万天使投资，打造国内最大的手术O2O平台',
//    'hanayideganxiexin' => '2015-07-18------------------韩阿姨的一封感谢信照亮千万患者就医路'
);
?>
<div class="container-fluid aboutus-header h400">
    <img src="<?php echo $urlResImage; ?>aboutus/our-header.png"/>
</div>
<div class="container-fluid bg-gray-f7" style="padding-bottom:35px;">
    <div class="row">
        <div class="container">
            <div class="mt-60">
                <?php $this->renderPartial('pages/_menu'); ?> 
            </div>

            <div class="row">
                <div class="col-sm-2 pr0 mt94"><img src="<?php echo $urlResImage ?>aboutus/215-01.png"></div>
                <div class="col-sm-10 pl0 mt160"><div class="news-yellow-line"></div></div>
            </div>
            <div class="row ml-80 mt-35">
                <?php
                foreach ($news as $key => $value) {
                    //echo "<li class='news-item'><i class='fa fa-star'></i>&nbsp;<a title='" . $value . "' href='" . $this->createUrl("news/page", array("view" => $key)) . "'>" . $value . "</a></li>";
                    echo '<div class="col-sm-offset-3 mt30"><a target="_blank" title="' . $value . '" href="' . $this->createUrl("news/page", array("view" => $key)) . '"><span>'.$value.'</span></a></div>';
                }
                ?>
                
            </div>
        </div>
    </div>
    <br/><br/><br/>
</div>


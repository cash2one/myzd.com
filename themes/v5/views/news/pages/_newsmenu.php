<?php
$news = array(
    'deanmanifesto'=>'郎永淳担纲主持，120家公立医院发表院长宣言',
    'publicdaily'=>'互联网医疗+纸媒，迈出联姻第一步',
    'anhuiflooding'=>'安徽怀宁水灾救援',
    'guojihuanzheri'=>'癫痫患者福音来啦！',
    'xuzhou'=>'互联网+手术战略合作基地落地徐州',
    'entrepreneurship'=>'医生创业：周瑜等来了东风',
    'yanancenter'=>'名医主刀开启“红色公益之旅” 互联网手术中心落地',
    'mingyigongyi'=>'共享名医资源，共铸健康中国',
    'jiazhuanxianjiejie' => '当甲状腺结节遇到达芬奇机器人',
    'forbes' => '福布斯发布亚洲年轻领袖榜单,名医主刀CEO苏舒入选',
    'firstaid' => '8小时冒雪夜行驰援，医者仁心只为救死扶伤',
    'femalehealth' => '关爱女性健康，名医主刀与公益同行',
    'mingyizhudaorongzi' => '喜大普奔，名医主刀已完成A轮融资',
    'dididoctor' => '滴滴医生火爆预约，名医抢单随车上门',
    'doctoronsite' => '足不出户、医生上门！------阿里健康、滴滴出行、名医主刀，三强联手推医生上门服务',
    'partnerofdocs' => '名医主刀：做医生和医生集团的合伙人',
    'mamajixufeiyuan' => '年轻妈妈的生命倒计时，急需寻找“续命”肺源',
    'tiantanpuhua' => '"名医主刀＋北京天坛普华医院" 互联网诊疗新模式',
    'chuangyebang' => '"名医主刀"----"创业邦"推荐为9月值得关注的新创公司',
    'teacher' => '感恩教师，名医与慈善同行',
    'yinlianzhihui' => '银联智惠与名医主刀携手，缓解患者经济负担',
    'jiazhuangxian' => '甲状腺肿瘤患者的求医经历',
    '36ke' => '获真格基金青睐的“名医主刀”如何打造互联网O2O“飞刀”平台？',
    'mingyizhudao' => '名医主刀：移动医疗手术O2O',
    'fly-cutter' => '名医主刀：互联网式“飞刀”',
    'kangai' => '父亲两次抗癌，只为给女儿更久远的爱',
    'qianyuedejiyiyuan' => '名医主刀成功签约德济医院 互联网医疗又一里程碑',
    'chuangyeyingxionghui' => '男儿英雄泪，志在“好看病，看好病”——“名医主刀”登陆央视《创业英雄汇》',
    'zhenfund' => '“名医主刀”获真格基金500万天使投资，打造国内最大的手术O2O平台',
    'hanayideganxiexin' => '韩阿姨的一封感谢信照亮千万患者就医路',
    'zhitongche'=>'患者故事',
);
$this->pageTitle = $news[$data] . '_名医主刀';
?>
<style>.news-item>a:hover{color:#EFA429;}</style>
<div class="col-sm-3">
    <div class="newslist" style="border: 1px solid #e4e4e4;margin-right: -15px;">
        <div>
            <div class="news-title"><a href="<?php echo $this->createUrl('site/page', array('view' => 'news')); ?>">最新新闻</a><span class="new-slogan">关注健康,享受生活!</span></div>
            <div class="divider mb5"></div>
        </div>
        <div>
            <ol class="mt10" style="padding-left:10px;">
                <?php
                $count = 0;$totalPage=10;
                foreach ($news as $key => $value) {
                    if ($key != $data) {
                        echo "<li class='news-item'><i class='fa fa-star'></i>&nbsp;<a title='" . $value . "' href='" . $this->createUrl("news/page", array("view" => $key)) . "'>" . $value . "</a></li>";
                    }
                    $count ++;
                    if($count>$totalPage){
                        break;
                    }
                }
                ?>
            </ol>
        </div>
    </div>
</div>
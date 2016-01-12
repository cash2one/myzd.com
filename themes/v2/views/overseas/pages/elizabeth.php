<style>
    #content .list-inline{margin:0 auto;}
    #content .list-inline .list-group-item{min-width:24.5%;border:none;text-align:center;vertical-align:top;}
    .nav-pageheader>li>a{padding:20px 40px;}
</style>

<?php
$menu = $this->loadPageMenu();
?>
<div class="row bg-green clearfix hidden-xs">
    <div class="container page-container">
        <ul class="nav nav-tabs nav-pageheader noborder">
            <?php
            foreach ($menu as $menuItem) {
                if ($menuItem['active']) {
                    echo '<li class="' . $menuItem['key'] . ' active"><a href="' . $menuItem['link'] . '">' . $menuItem['label'] . '</a></li>';
                } else {
                    echo '<li class="' . $menuItem['key'] . '"><a href="' . $menuItem['link'] . '">' . $menuItem['label'] . '</a></li>';
                }
            }
            ?>
        </ul>
    </div>
</div>
<div class="row visible-xs">
    <div class="btn-group block">
        <button type="button" class="btn btn-default btn-success btn-lg btn-block dropdown-toggle" data-toggle="dropdown">
            <?php echo $this->getCurrentPageLabel(); ?> <span class="caret"></span>
        </button>
        <ul class="dropdown-menu dropdown-menu-mobile" role="menu" style="width:100%;">
            <?php
            foreach ($menu as $menuItem) {
                if ($menuItem['active']) {
                    echo '<li class="' . $menuItem['key'] . ' selected active"><a href="' . $menuItem['link'] . '">' . $menuItem['label'] . '</a></li>';
                } else {
                    echo '<li class="' . $menuItem['key'] . '"><a href="' . $menuItem['link'] . '">' . $menuItem['label'] . '</a></li>';
                }
            }
            ?>
        </ul>
    </div>
</div>


<div class="row">
    <img class="img-responsive" src="<?php echo $urlUpload . 'cover.jpg'; ?>" width="100%" >
</div>


<section class="container page-container">
    <div class="page-title text-center color-blue">伊丽莎白医院</div>
    <div class="passage">
        <p class="paragraph">伊丽莎白医院是新加坡私人医院中执行心脏手术和神经外科最多的医院。医院与国际联合委员会（JCI）的认证，是亚洲第一个赢得的“亚洲管理奖”，为优秀人才的开发和管理的私人医院。是亚洲患者出国看病的主要目的地，同时也是到新加坡看病的患者最信赖的医院之一。</p>
        <div>
            <img class="img-responsive hidden-xs" src="<?php echo $urlUpload . 'ee1.jpg'; ?>" width="100%" >
        </div>
        <div class="heading border-bottom clearfix">
            <h4 class="strong color-blue">设施及服务</h4>
        </div>
        <p class="paragraph">
            伊丽莎白医院是一家拥有505个病床的急症医院，同时也是新加坡规模最大的医院之一，在亚洲的私人医疗护理领域极负盛誉，并与国外多家顶尖机构有着深入的合作交流。
            伊丽莎白医院提供心脏、神经科学和其它急诊服务，并以专科服务和卓越的医生享誉本区域。它除了设立本区域首个私人癌症中心外，也是新加坡首家提供心脏导管插入手术、心脏和神经外科，以及其他先进医科手术的私人医院。</p>
        <p class="paragraph">伊丽莎白医院提供广泛的医疗就诊和手术服务，并以其专科、高素质护理和尖端技术闻名。伊丽莎白医院也是本区域进行最多心脏和神经外科手术的私人医院。该医院也获得国际医院评鉴联合会的认证。我们出国看病的患者来自中国，美国，日本，韩国，印度，印尼等。</p>
        <div>
            <img class="img-responsive hidden-xs" src="<?php echo $urlUpload; ?>ee2.jpg" width="100%">
        </div>
        <div class="heading border-bottom clearfix">
            <h4 class="strong color-blue">特色</h4>   
        </div>

        <p class="paragraph">新加坡首家完成心内直视手术和神经外科手术的私立医院。</p>
        <ul>
            <li>亚洲首家成功利用心脏激光完成心肌成形手术和心肌血管重建手术的医院。</li>
            <li>设立首个核医学中心的私人医院。</li>
        </ul>
        <div><img class="img-responsive hidden-xs" src="<?php echo $urlUpload; ?>ee3.jpg" width="100%"></div>

        <div class="center-block">
            <ul class="list-group list-inline">
                <li class="list-group-item">麻醉学</li>            
                <li class="list-group-item">心胸外科</li>            
                <li class="list-group-item">牙科</li>            
                <li class="list-group-item">放射诊断学</li>			            
                <li class="list-group-item">胃肠病学</li>            
                <li class="list-group-item">妇科</li>            
                <li class="list-group-item">手外科</li>            
                <li class="list-group-item">内科</li>            
                <li class="list-group-item">神经病学</li>            
                <li class="list-group-item">核医学</li>            
                <li class="list-group-item">眼科</li>
                <li class="list-group-item">小儿外科</li>            
                <li class="list-group-item">儿科血液学</li>            
                <li class="list-group-item">儿童干细胞移植</li>            
                <li class="list-group-item">精神病学</li>
                <li class="list-group-item">肾内科</li>
                <li class="list-group-item">生殖医学</li>
                <li class="list-group-item">风湿病学</li>
                <li class="list-group-item">泌尿外科</li>
                <li class="list-group-item">耳、鼻及咽喉手术（耳鼻咽喉科）</li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="heading border-bottom clearfix">
            <h4 class="strong color-blue">专科</h4>
        </div>
        <div class="h5 strong">心脏病学</div>
        <p class="paragraph">心脏病学是处理影响心脏和血管的疾病治疗中的内科医学。心血管系统负责泵抽和全身的血液循环。常见疾病的例子包括冠心病、 心衰、 先天性的心脏病和心脏瓣膜病。一些常见的测试，你的心脏可进行包括验血、 心电图机、 和超声心动图。</p>
        <div class="h5 strong">血液学和移植</div>
        <p class="paragraph"> 血液学是生物学的同血研究关注的是生物学的的分支。贫血、 白血病、 淋巴瘤等血液疾病可能通过血液学，那些接受训练的护理和治疗血液病的医生诊断。常见的血液测试试验血常规、 白细胞计数、 血小板计数和血红蛋白水平。</p>
        <div class="h5 strong">神经病学</div>
        <p class="paragraph">影响大脑疾病、 中枢神经系统和脊髓通常患神经功能的疾病。这并不是精神疾病，只是侧重于病人的行为混淆。主要神经障碍包括脑性瘫痪、 言语和语言障碍、 肿瘤的大脑和运动障碍帕金森病和亨廷顿舞蹈病等。</p>
        <div class="h5 strong">骨科</div>
        <p class="paragraph">处理预防或涉及骨骼、 关节、 肌肉和其他支持结构的疾病，如韧带和软骨病校正的医学。</p>
        <div class="h5 strong">儿科肿瘤</div>
        <p class="paragraph">接受当代治疗儿童癌症。</p>
        <div class="h5 strong">儿童干细胞移植</div>
        <p class="paragraph">那些有更严重的或危及生命的血液疾病或癌症可能需要造血干细胞移植。</p>

        <div class="heading mt50 clearfix">
            <h4 class="strong text-center  color-blue">贵宾房（带连接酒廊）</h4>
        </div>
        <div>
            <img class="img-responsive center-block"  src="<?php echo $urlUpload; ?>ee4.jpg" width="800px" >
        </div>
        <div class="mt20">
            <img class="img-responsive center-block"  src="<?php echo $urlUpload; ?>ee5.jpg" width="800px" >
        </div>
        <div class="heading clearfix">
            <h4 class="strong text-center color-blue">玉香房</h4>
        </div>
        <div>
            <img class="img-responsive center-block" src="<?php echo $urlUpload; ?>ee6.jpg" width="800px" >
        </div>
        <div class="mt20">
            <img class="img-responsive center-block" src="<?php echo $urlUpload; ?>ee7.jpg" width="800px" >
        </div>
        <div class="mt20">
            <img class="img-responsive center-block" src="<?php echo $urlUpload; ?>ee8.jpg" width="800px" >
        </div>
        <div class="heading clearfix">
            <h4 class="strong text-center color-blue">单间</h4>
        </div>
        <div>
            <img class="img-responsive center-block"  src="<?php echo $urlUpload; ?>ee9.jpg" width="800px" >        
        </div>
        <div class="heading clearfix">
            <h4 class="strong text-center  color-blue">双人间</h4>
        </div>
        <div>
            <img class="img-responsive center-block"  src="<?php echo $urlUpload; ?>ee10.jpg" width="800px" >
        </div>
        <div class="mt20">
            <img class="img-responsive center-block"  src="<?php echo $urlUpload; ?>ee11.jpg" width="800px" >        
        </div>
    </div>
</section>
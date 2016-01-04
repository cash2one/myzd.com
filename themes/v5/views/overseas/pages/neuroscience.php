<style>
    #content .list-inline{margin:0 auto;}
    #content .list-inline .list-group-item{min-width:24.5%;border:none;text-align:center;vertical-align:top;}
    .nav-pageheader>li>a{padding:20px 40px;}
    .passage ul>li{margin-top:20px;}
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

<div class="row" style="max-height:330px;overflow:hidden;">
    <img class="img-responsive" src="<?php echo $urlUpload; ?>cover_960.jpg" width="100%" />
</div>


<section class="container page-container">
    <div class="page-title text-center color-blue">神经外科专题</div>
    <div class="passage row">
        <p class=" strong h4" xstyle="font-size:18px">新加坡最好的神经科医院是国家神经中心和伊丽莎白医院。</p>

        <div class="heading border-bottom clearfix">
            <h4 class="strong color-blue">1.  新加坡国家神经中心</h4>
        </div>
        <div>
            <img class="img-responsive xhidden-xs center-block" src="<?php echo $urlUpload; ?>nni03_960.jpg" width="100%" >
        </div>

        <p class="paragraph mt20">
            新加坡国家神经中心（The National Neuroscience Institute）是一家临床推荐的专业性地区性的管理治疗神经科学的医疗中心，同时在教育研究领域也具有引导作用。</p>
        <div>
            <img class="img-responsive " src="" width="100%">
        </div>
        <div class="heading border-bottom clearfix">
            <h4 class="strong color-blue">特色</h4>   
        </div>


        <div class="row">
            <div class="col-sm-5 col-sm-offset-1 mb10">
                <img class="img-responsive  center-block" src="<?php echo $urlUpload; ?>nni01.jpg" xwidth="60%">
            </div>
            <div class="col-sm-5 mb10">           
                <img class="img-responsive  center-block hidden-xs" src="<?php echo $urlUpload; ?>nni02.jpg " xwidth="60%">
            </div>
        </div>

        <p class="paragraph">
            新加坡国家神经中心的神经外科是新加坡最大的治疗神经系统疾病的科室，也因拥有一批优秀的从事神经外科治疗的医生而被誉为“神经外科之母”。
            这些医生为了提高临床效果，针对各种疾病研究出一些附属专业服务和项目，这些附属专业包括创伤（trauma）、肿瘤（oncology）、
            颅底神经（skull base）与神经血管功能（neurovascular）、儿科（paediatric），还有能与全球范围内其他顶尖的神经外科中心相比较的脊柱神经外科项目。
            连同新加坡中央医院一起，国家神经中心是全世界第一个结合数字集成设备提供全面的治疗方案的神经外科治疗中心，
            使用最新的神经影像更好的让病人看到结果。
        </p>
        <p class="paragraph">神经外科也因被世界神经外科联合会（the World Federation of Neurosurgical Society）指定为神经外科研究生奖学金培训中心感到骄傲，因为这个称号，
            国家神经中心加入了其他著名神经培训中心，例如伦敦国立医院神经病学和神经外科，美国的纽约大学，藤田保健卫生大学。
        </p>

        <div class="divider mt30"></div>

        <div id="elizabeh" class="heading border-bottom clearfix">
            <h4 class="strong color-blue">2.  伊丽莎白医院 神经外科</h4>   
        </div>
        <p class="paragraph">
            各地被诊断为脑外伤（brain trauma）、癫痫（epilepsy）、睡眠系统紊乱（sleep disorders）、中风（stroke）、颈部和脊柱条件（neck and spine conditions）的患者，来医院寻找我们具备熟练专业知识的神经科医生。
            我们经验丰富的神经学家有效率的与放射科医生一起，通过神经外科和神经学来治疗病人。
        </p>
        <div class="heading border-bottom clearfix">
            <h4 class="strong color-blue">特色手术</h4>   
        </div>

        <div>
            <div class="h4 strong text-center">唤醒开颅手术（Awake Craniotomy）</div>
            <div>
                <img class="img-responsive  center-block mt10"  src="<?php echo $urlUpload; ?>nni04-400.jpg" xwidth="30%" >
            </div>

            <p class="paragraph mt20">我们的专家包括神经学家、脑外科医生,麻醉师和语言专家，他们会评估您做开颅手术的适用性。如果手术触及大脑结构的脆弱部分，例如神经、静脉或者动脉,或者触及接近控制身体重要功能、影响感觉处理或语言能力的脑部区域，
                那么专家会针对开颅手术推荐您一些选择。</p>
            <p class="paragraph">这个手术对患者，特别是帕金森患者和癫痫患者有益，因为医生可以在手术过程中随时监测患者的运动功能或控制癫痫发作。开颅手术也可以用来准确地诊断脑部肿瘤的类型,之后转移或治疗位于脑部重要区域的肿瘤,否则由于所涉及损害大脑的风险而被认为是不实用的。</p>
        </div>
        <div class="mt30">
            <div class="h4 strong text-center">大脑深部刺激手术（Deep Brain Stimulation Surgery）</div>
            <div>
                <img class="img-responsive  center-block mt10" src="<?php echo $urlUpload; ?>nni05-400.jpg" xwidth="50%" >
            </div>

            <p class="paragraph mt20">这项手术可以缓解一些由于帕金森病引起的症状恶化，例如肢体颤抖、肢体僵硬和无意识的抖动，让您重新获得控制肢体运动,保持良好的生活质量,实现自理。
                报告显示,帕金森症患者经过大脑深部治疗，持续临床症状改善至少10年,第三阶段保持12年,第四阶段也为12年。</p>

        </div>
        <div class="heading border-bottom clearfix">
            <h4 class="strong color-blue">主要治疗疾病包括：</h4>   
        </div>
        <ul class="nostyle">
            <ol>
                <li>静脉血管畸形（Arterio Venous Malformation）</li>
                <li>脑部动脉瘤（Brain Aneurysm）</li>
                <li>脑肿瘤（Brain tumor）</li>
                <li>脑痴呆（Dementia）</li>
                <li>癫痫（Epilepsy）</li>
                <li>帕金森病（Parkinson Disease）</li>
                <li>中风（Stroke）</li>
                <li>睡眠系统紊乱（Sleep Disorder）</li>
            </ol>
        </ul>


    </div>
</section>




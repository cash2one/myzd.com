<style>
    .nav-pageheader>li>a{padding:20px 40px;}
    #content .passage img{width:800px;margin:30px auto;}
</style>
<?php
$urlUpload = $this->urlUpload . '/tiantanpuhua/';
?>
<?php
$menu = $this->loadHospitalMenu();
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
            <?php echo $this->getCurrentHospitalLabel(); ?> <span class="caret"></span>
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
<section class="page center-block">
    <div class="page-title text-center color-blue">上海天坛普华医院</div>
    <div class="passage">        
        <div class="clearfix">
            <img class="img-responsive center-block" style="margin-top:0;" src="<?php echo $urlUpload . 'image01.jpg'; ?>">
        </div>       
        <p class="paragraph">上海天坛普华医院（原康联医院）成立于2007年坐落在上海著名的古北国际社区，是一所具有最先进的医疗设备和国际化医生团队的综合性医院。人性化的环境设计，使医生和医护人员能在温馨的氛围中为患者提供周全的照料。
            2009年，原康联医院加入了APMG医疗网络，成立了上海天坛普华医院。它们的结合集成他们的专门技术和资源与APMG旗下的医疗机构以及其他国内外合作伙伴合力为患者提供优质医疗服务。</p>
        <p class="paragraph">上海天坛普华通过先进的医疗配备与微创技术为患有神经系统疾病和其他疾病的病人治疗：糖尿病、帕金森氏症、脑瘫、脑损伤、中风、多发性硬化症、脊髓损伤、病毒性肝炎、肝硬化、系统性红斑狼疮、 肿瘤。医院的使命是成为一个知名医疗机构，它致力于提供优良的、以患者为中心的服务，其爱岗敬业的专业人士队伍可提供可靠的、整体性的医疗保健服务。</p>

        <div class="clearfix">
            <img class="img-responsive center-block" src="<?php echo $urlUpload . 'image02.jpg'; ?>">
        </div>
        <div class="heading border-bottom clearfix">
            <h4 class="strong color-blue">肿瘤科</h4>
        </div>
        <p class="paragraph">我院制定出能够帮助我们的患者和其家人应对癌症所带来的各种挑战的方案，力图使他们的生活品质达到最优化。上海天坛普华医院肿瘤科医师团队致力于为所有患者提供最好的专业护理、传递爱心之举。我院几乎可治疗所有类型的癌症，包括乳腺癌、肺癌、结肠直肠癌、前列腺癌、头颈癌以及血癌。除具备前沿的癌症治疗技术外，我院还制定了创新性临床试验综合方案及其一系列的配套护理服务，以实现最佳的健康状况，从而提升患者的健康状况和生活品质。</p>
        <p class="paragraph">近年来，癌症的发病率和死亡率仍然居高不下。在中国，癌症已成为居民死亡的第二大杀手，并成为城镇居民死亡的首要因素，而早期诊断对治疗效果和存活时间是至关重要的。专业的肿瘤学专家可提供专业的抗癌建议，安排相应的检查，并在早期确诊，这对于引导正确治疗方向具有重要意义。</p>
        <p class="paragraph">确诊后，引导患者接受适当的治疗。多学科治疗被视为是治疗癌症的一种方法，包括众所周知的外科手术、化疗和放疗方法，以及分子靶向治疗、生物疗法和免疫疗法，都起到了很好的治疗效果</p>
        <p class="paragraph"><span class="strong">化疗 - </span>在恶性肿瘤的治疗中起到了重要作用，且被广泛使用。癌症需要化疗，这是一般人都知道的常识。早期接受化疗可减少或延缓肿瘤的复发。通过化疗，可以控制癌症并减轻晚期癌症的症状和痛苦。也可以改善生活品质并延长生命。临床经验也表明，老年患者可接受化疗并取得了一定的成效。因此，不要因过度恐惧而放弃化疗或使用非常规化疗。化疗是一把双刃剑，既有优点也会带来副作用。但如果应用得当，可以拯救生命，并且利大于弊。根据具体情况，我们经验丰富的肿瘤学专家将决定是否使用化疗方案或其他特定的治疗方案。</p>
        <p class="paragraph"><span class="strong">接受放射疗法 - </span>能够较好地控制术前/术后病变以及化疗后病变，尽管它也对人体产生副作用。通过手术/化疗/靶向治疗可以治愈或缓解病症。我们的专业医生将根据患者的个人情况决定是否采用放射疗法、其他治疗方法或其他疗程。</p>
        <p class="paragraph"><span class="strong">分子靶向治疗 - </span>即在细胞和分子层面，针对具体的肿瘤位点（该位点可能是细胞内的蛋白质分子或是一个基因片段），配制出相应的治疗药物。这种药物将专门结合癌基因位点，并在不影响正常组织细胞的情况下杀死肿瘤细胞。分子靶向治疗效率高且毒性低。这是被广泛认可的最有效的靶向药物，由著名的跨国公司研发，并为海外大型临床试验所检验和证实。在癌症专家的指导下，可以单独使用或与放疗、化疗结合使用。对于治疗乳腺癌、淋巴瘤、肺癌、结肠癌、肝癌以及肾癌等癌症效果更显著。</p>
        <p class="paragraph"><span class="strong">生物治疗 - </span>是癌症免疫疗法中的一种，是癌症生物治疗领域中较成熟的一种治疗技术。生物治疗的最大优点是具有独特的康复和重建受损免疫系统的效果。采用外科手术联合治疗可以防止肿瘤的转移和复发；采用化疗也可以延长寿命，提升患者的生活品质。</p>
        <div class="heading border-bottom clearfix">
            <h4 class="strong color-blue">骨康科</h4>
        </div>
        <p class="paragraph"><span class="strong">OSMART</span>（骨科、运动医学、关节镜手术和康复团队）是由一组由著名骨科、运动医学和康复专家构建的团队，旨在提供各类骨骼肌问题（从头部到脚趾，包括脊柱，如骨骼、关节、韧带、软组织以及运动相关的问题，包括从保守治疗到手术和康复过程中的变性）的全套综合服务此外，通过制定个性化的治疗方案，OSMART还提供能够提高运动成绩和健康的服务，以及进行现场急救损伤评估并进行相应的治疗。</p>
        <p class="paragraph">骨科、运动医学、关节镜手术和康复团队是由Samson Cho（曹深诚医生）设立和负责的，该医生专业从事运动医学与关节镜检查。骨科、运动医学、关节镜手术和康复团队将顶级骨科医师、运动医学医生、脊椎按摩师、康复医生及协同工作的理疗师整合为一个团队，个性化定制高效的医疗卫生服务。</p>
        <div class="clearfix">
            <img class="img-responsive center-block" src="<?php echo $urlUpload . 'image03.jpg'; ?>">
        </div>
        <p class="strong subheading">骨科、运动医学、关节镜手术和康复团队的愿景：</p>
        <p class="paragraph">骨科病症在生活中随时都可能出现。由运动引发的相关病症，例如：扭伤、骨折、韧带撕裂和肌腱损伤（如前交叉韧带和肩袖撕裂）会让人沮丧，并限制了您的日常生活。骨科治疗应越早越好。通过制定出让您回到您的最佳健康状况的清晰的方案，骨科、运动医学、关节镜手术和康复团队可以确定症状、进行测试、诊断、治疗以及帮助您康复。</p>
        <p class="paragraph">骨科、运动医学、关节镜手术和康复团队也可以治疗晚年出现的退化性病变，帮助您长期保持健康、留住青春。我们的团队对于常见退化性病症（如骨关节炎、遭受的腰背部疼痛、膝关节疼痛、颈痛、肩痛等）具有多年的治疗经验。</p>
        <p class="paragraph">骨科、运动医学、关节镜手术和康复团队有一个愿景，即向任何寻求积极、健康、美好生活的患者提供优质的医疗保健和相关的治疗。</p>
        <p class="strong subheading">骨科、运动医学、关节镜手术和康复团队的价值：</p>
        <div>
            <ol>
                <li><span class="strong">减少病痛，快乐生活：</span>专注于使患者在愉悦的环境下快速康复</li>
                <li><span class="strong">作用：</span>在规定的时间期限内，对症状治疗的同时进行病因治疗</li>
                <li><span class="strong">认识：</span>通过向患者详述病情，使其保持平和的心态</li>
                <li><span class="strong">量身定制的治疗：</span>以尽可能最好的方法治疗每项疾病</li>
                <li><span class="strong">团队精神：</span>根据我院的各项专业和技术，在康复的各个阶段为患者提供健康餐饮</li>
            </ol>
        </div>
        <div class="clearfix">
            <img class="img-responsive center-block" src="<?php echo $urlUpload . 'image04.jpg'; ?>">
        </div>
        <p class="strong subheading">骨科、运动医学、关节镜手术和康复团队治疗：</p>
        <p class="paragraph">我们治疗脊柱疾患、创伤（意外）、工作或运动中出现的相关损伤、急性和慢性疼痛、软组织病变（神经、肌肉、韧带以及肌腱等）。常见症状，如关节活动度减少、肌无力、感觉异常、关节传染或锁紧、麻木或刺痛、肿胀、感觉不稳定。</p>
        <p class="strong">保守治疗： </p>
        <div>
            <ol>
                <li>推拿手法和脊骨神经疗法</li>
                <li>理疗：医疗按摩、伸展和肌肉专业强化训练；超声、牵引、冲击波、电力疗法（通过电子皮下神经刺激仪）；热疗和冷疗</li>
                <li>药物治疗：口服、外用、静脉注射、注射和关节内注射</li>
                <li>姿势矫正及矫形</li>
            </ol>
        </div>
        <p class="strong">手术治疗：</p>
        <ol>
            <li>用于治疗骨骼、脊柱、关节和软组织等疾病的微创手术</li>
            <li>适用于肩、肘、腕、髋、膝、踝关节和脚部的关节镜手术治疗</li>
        </ol>
        <p><span class="strong">康复治疗：</span>手术前或手术后康复和功能康复。</p>
    </div>
</section>
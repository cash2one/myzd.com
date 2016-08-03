<?php
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/pc/disease100.min.css");
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
?>
<div class="container">
    <div><h2 class="mt30">疾病分类</h2></div>
    <div class="">
        <div class="row">
            <div class="col-sm-12">
                <div class="dis-content">
                    <div class="faculty-class first">
                        <div class="dis-item">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="dis-header waike"><span class="icon-img"></span><span class="facult-text">外科</span></li>
                                <li role="presentation" class="active ml40"><a href="#puwaike" aria-controls="puwaike" role="tab" data-toggle="tab"><span>普外科</span></a></li>
                                <li role="presentation"><a href="#xinxiongwaike" aria-controls="xinxiongwaike" role="tab" data-toggle="tab"><span>心胸外科</span></a></li>
                                <li role="presentation"><a href="#miniaowaike" aria-controls="miniaowaike" role="tab" data-toggle="tab"><span>泌尿外科</span></a></li>
                                <li role="presentation"><a href="#shenjingwaike" aria-controls="shenjingwaike" role="tab" data-toggle="tab"><span>神经外科</span></a></li>
                                <li role="presentation"><a href="#zhengxingwaike" aria-controls="zhengxingwaike" role="tab" data-toggle="tab"><span>整形外科</span></a></li>
                            </ul>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="puwaike">
                                <div class="dis-list">
                                    <a class="focus" href="javascript:;" data-id="1">
                                        肠癌
                                    </a>
                                    <a href="javascript:;" data-id="2">
                                        肠息肉
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="3">
                                        大隐静脉曲张
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="4">
                                        胆道肿瘤
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="5">
                                        胆管癌
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="6">
                                        胆结石
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="7">
                                        肝癌
                                    </a>
                                    <a href="javascript:;" data-id="8">
                                        肝囊肿
                                    </a>
                                    <a href="javascript:;" data-id="9">
                                        肝脏移植
                                    </a>
                                    <a href="javascript:;" data-id="10">
                                        甲状旁腺亢进
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="11">
                                        甲状腺癌
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="12">
                                        甲状腺结节
                                    </a>
                                    <a href="javascript:;" data-id="13">
                                        颈动脉狭窄
                                    </a>
                                    <a href="javascript:;" data-id="14">
                                        门脉高压症
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="15">
                                        乳腺癌
                                    </a>
                                    <a href="javascript:;" data-id="16">
                                        乳腺结节
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="17">
                                        疝气
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="18">
                                        胃癌
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="19">
                                        胰腺癌
                                    </a>
                                    <a href="javascript:;" data-id="20">
                                        胰腺囊肿
                                    </a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="xinxiongwaike">
                                <div class="dis-list">
                                    <a class="focus" href="javascript:;" data-id="21">
                                        成人心脏病
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="22">
                                        肺癌
                                    </a>
                                    <a href="javascript:;" data-id="23">
                                        腹主动脉瘤
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="24">
                                        冠心病
                                    </a>
                                    <a href="javascript:;" data-id="25">
                                        气胸
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="26">
                                        食管癌
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="27">
                                        先天性心脏病
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="28">
                                        心律失常
                                    </a>
                                    <a href="javascript:;" data-id="29">
                                        胸腺瘤
                                    </a>
                                    <a href="javascript:;" data-id="30">
                                        胸主动脉瘤
                                    </a>
                                    <a href="javascript:;" data-id="31">
                                        主动脉夹层
                                    </a>
                                    <a href="javascript:;" data-id="32">
                                        纵膈淋巴结肿大
                                    </a>
                                    <a href="javascript:;" data-id="33">
                                        纵膈肿瘤
                                    </a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="miniaowaike">
                                <div class="dis-list">
                                    <a class="focus" href="javascript:;" data-id="34">
                                        膀胱癌
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="35">
                                        膀胱结石
                                    </a>
                                    <a href="javascript:;" data-id="36">
                                        男性性功能障碍
                                    </a>
                                    <a href="javascript:;" data-id="37">
                                        尿失禁
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="38">
                                        前列腺癌
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="39">
                                        肾癌
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="40">
                                        肾结石
                                    </a>
                                    <a href="javascript:;" data-id="41">
                                        肾上腺肿瘤
                                    </a>
                                    <a href="javascript:;" data-id="42">
                                        肾脏移植
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="43">
                                        输尿管结石
                                    </a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="shenjingwaike">
                                <div class="dis-list">
                                    <a class="focus" href="javascript:;" data-id="44">
                                        垂体瘤
                                    </a>
                                    <a href="javascript:;" data-id="45">
                                        癫痫
                                    </a>
                                    <a href="javascript:;" data-id="46">
                                        脊髓损伤
                                    </a>
                                    <a href="javascript:;" data-id="47">
                                        脊髓血管畸形
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="48">
                                        脊髓肿瘤
                                    </a>
                                    <a href="javascript:;" data-id="49">
                                        面肌痉挛
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="50">
                                        脑动脉瘤
                                    </a>
                                    <a href="javascript:;" data-id="51">
                                        脑外伤
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="52">
                                        脑血管畸形
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="53">
                                        脑肿瘤
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="54">
                                        帕金森病
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="55">
                                        三叉神经痛
                                    </a>
                                    <a href="javascript:;" data-id="56">
                                        舌咽神经痛
                                    </a>
                                    <a href="javascript:;" data-id="57">
                                        烟雾病
                                    </a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="zhengxingwaike">
                                <div class="dis-list">
                                    <a class="focus" href="javascript:;" data-id="58">
                                        瘢痕疙瘩
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="59">
                                        美容整形
                                    </a>
                                    <a href="javascript:;" data-id="60">
                                        皮肤血管瘤
                                    </a>
                                    <a href="javascript:;" data-id="61">
                                        生殖器畸形
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faculty-class">
                        <div class="dis-item">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="dis-header guke"><span class="icon-img"></span><span class="facult-text">骨科</span></li>
                                <li role="presentation" class="active ml40"><a href="#sizhi" aria-controls="sizhi" role="tab" data-toggle="tab"><span>四肢</span></a></li>
                                <li role="presentation"><a href="#jizhu" aria-controls="jizhu" role="tab" data-toggle="tab"><span>脊柱</span></a></li>
                                <li role="presentation"><a href="#guanjie" aria-controls="guanjie" role="tab" data-toggle="tab"><span>关节</span></a></li>
                            </ul>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="sizhi">
                                <div class="dis-list">
                                    <a class="focus" href="javascript:;" data-id="62">
                                        骨肿瘤
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="63">
                                        手外伤
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="64">
                                        四肢骨折
                                    </a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="jizhu">
                                <div class="dis-list">
                                    <a class="focus" href="javascript:;" data-id="65">
                                        脊柱骨折
                                    </a>
                                    <a href="javascript:;" data-id="66">
                                        脊柱畸形
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="67">
                                        脊柱肿瘤
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="68">
                                        颈椎病
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="69">
                                        腰椎间盘突出
                                    </a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="guanjie">
                                <div class="dis-list">
                                    <a class="focus" href="javascript:;" data-id="70">
                                        半月板损伤
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="71">
                                        股骨头坏死
                                    </a>
                                    <a href="javascript:;" data-id="72">
                                        关节畸形
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="73">
                                        关节置换
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="74">
                                        肩袖损伤
                                    </a>
                                    <a href="javascript:;" data-id="75">
                                        膝关节炎
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faculty-class">
                        <div class="dis-item">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="dis-header fuchanke"><span class="icon-img"></span><span class="facult-text">妇产科</span></li>
                                <li role="presentation" class="active ml40"><a href="#fuke" aria-controls="fuke" role="tab" data-toggle="tab"><span>妇科</span></a></li>
                                <li role="presentation"><a href="#chanke" aria-controls="chanke" role="tab" data-toggle="tab"><span>产科</span></a></li>
                                <li role="presentation"><a href="#shengzhiyixueke" aria-controls="shengzhiyixueke" role="tab" data-toggle="tab"><span>生殖医学科</span></a></li>
                            </ul>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="fuke">
                                <div class="dis-list">
                                    <a class="focus" href="javascript:;" data-id="76">
                                        宫颈癌
                                    </a>
                                    <a href="javascript:;" data-id="77">
                                        宫外孕
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="78">
                                        卵巢癌
                                    </a>
                                    <a href="javascript:;" data-id="79">
                                        卵巢囊肿
                                    </a>
                                    <a class="hide" href="javascript:;" data-id="80">
                                        外阴癌
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="81">
                                        阴道癌
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="82">
                                        子宫癌
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="83">
                                        子宫肌瘤
                                    </a>
                                    <a href="javascript:;" data-id="84">
                                        子宫内膜异位症
                                    </a>
                                    <a href="javascript:;" data-id="85">
                                        子宫脱垂
                                    </a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="chanke">
                                <div class="dis-list">
                                    <a href="javascript:;" data-id="86">
                                        高危妊娠
                                    </a>
                                    <a href="javascript:;" data-id="87">
                                        妊娠合并糖尿病
                                    </a>
                                    <a href="javascript:;" data-id="88">
                                        妊娠合并心脏病
                                    </a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="shengzhiyixueke">
                                <div class="dis-list">
                                    <a class="focus" href="javascript:;" data-id="89">
                                        不孕症
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="90">
                                        试管婴儿
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faculty-class">
                        <div class="dis-item">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="dis-header yanke"><span class="icon-img"></span><span class="facult-text">眼科</span></li>
                                <li role="presentation" class="active ml40"><a href="#yanke" aria-controls="yanke" role="tab" data-toggle="tab"><span>眼科</span></a></li>
                            </ul>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="yanke">
                                <div class="dis-list">
                                    <a href="javascript:;" data-id="91">
                                        白内障
                                    </a>
                                    <a href="javascript:;" data-id="92">
                                        玻璃体积血
                                    </a>
                                    <a href="javascript:;" data-id="93">
                                        角膜病
                                    </a>
                                    <a href="javascript:;" data-id="94">
                                        近视
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="95">
                                        青光眼
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="96">
                                        弱视
                                    </a>
                                    <a href="javascript:;" data-id="97">
                                        散光
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="98">
                                        视网膜脱离
                                    </a>
                                    <a href="javascript:;" data-id="99">
                                        糖尿病视网膜病变
                                    </a>
                                    <a href="javascript:;" data-id="100">
                                        斜视
                                    </a>
                                    <a href="javascript:;" data-id="101">
                                        眼底病
                                    </a>
                                    <a href="javascript:;" data-id="102">
                                        眼外伤
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="103">
                                        眼肿瘤
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="104">
                                        远视
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faculty-class">
                        <div class="dis-item">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="dis-header kouqiangke"><span class="icon-img"></span><span class="facult-text">口腔科</span></li>
                                <li role="presentation" class="active ml40"><a href="#kouqianke" aria-controls="kouqianke" role="tab" data-toggle="tab"><span>口腔科</span></a></li>
                            </ul>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="kouqianke">
                                <div class="dis-list">
                                    <a href="javascript:;" data-id="105">
                                        唇腭裂
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="106">
                                        口腔肿瘤
                                    </a>
                                    <a href="javascript:;" data-id="107">
                                        龋齿
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="108">
                                        牙齿修复
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="109">
                                        牙齿正畸
                                    </a>
                                    <a href="javascript:;" data-id="110">
                                        牙颌面畸
                                    </a>
                                    <a href="javascript:;" data-id="111">
                                        牙髓病
                                    </a>
                                    <a href="javascript:;" data-id="112">
                                        牙龈病
                                    </a>
                                    <a href="javascript:;" data-id="113">
                                        牙周病
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="114">
                                        种植牙
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faculty-class">
                        <div class="dis-item">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="dis-header xiaoerwaike"><span class="icon-img"></span><span class="facult-text">小儿外科</span></li>
                                <li role="presentation" class="active ml40"><a href="#xiaoerpuwaike" aria-controls="xiaoerpuwaike" role="tab" data-toggle="tab"><span>小儿普外科</span></a></li>
                                <li role="presentation"><a href="#xiaoerxinxiongwaike" aria-controls="xiaoerxinxiongwaike" role="tab" data-toggle="tab"><span>小儿心胸外科</span></a></li>
                                <li role="presentation"><a href="#xiaoershenjingwaike" aria-controls="xiaoershenjingwaike" role="tab" data-toggle="tab"><span>小儿神经外科</span></a></li>
                                <li role="presentation"><a href="#xiaoeryanke" aria-controls="xiaoeryanke" role="tab" data-toggle="tab"><span>小儿眼科</span></a></li>
                            </ul>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="xiaoerpuwaike">
                                <div class="dis-list">
                                    <a class="focus" href="javascript:;" data-id="115">
                                        小儿肝胆先天性畸形
                                    </a>
                                    <a href="javascript:;" data-id="116">
                                        小儿关节脱位
                                    </a>
                                    <a href="javascript:;" data-id="117">
                                        小儿脊柱畸形
                                    </a>
                                    <a href="javascript:;" data-id="118">
                                        小儿尿道下裂
                                    </a>
                                    <a href="javascript:;" data-id="119">
                                        小儿鞘膜积液
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="120">
                                        小儿疝气
                                    </a>
                                    <a href="javascript:;" data-id="121">
                                        小儿手足畸形
                                    </a>
                                    <a href="javascript:;" data-id="122">
                                        小儿先天发育畸形
                                    </a>
                                    <a href="javascript:;" data-id="123">
                                        小儿隐睾
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="124">
                                        小儿肿瘤
                                    </a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="xiaoerxinxiongwaike">
                                <div class="dis-list">
                                    <a class="focus" href="javascript:;" data-id="128">
                                        小儿先天性心脏病
                                    </a>
                                    <a href="javascript:;" data-id="129">
                                        小儿心肌炎
                                    </a>
                                    <a href="javascript:;" data-id="130">
                                        小儿心律失常
                                    </a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="xiaoershenjingwaike">
                                <div class="dis-list">
                                    <a class="focus" href="javascript:;" data-id="125">
                                        先天性神经系统畸形
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="126">
                                        小儿脊髓肿瘤
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="127">
                                        小儿脑肿瘤
                                    </a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="xiaoeryanke">
                                <div class="dis-list">
                                    <a class="focus" href="javascript:;" data-id="131">
                                        儿童屈光不正
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="132">
                                        儿童弱视
                                    </a>
                                    <a href="javascript:;" data-id="133">
                                        儿童斜视
                                    </a>
                                    <a href="javascript:;" data-id="134">
                                        儿童眼外伤
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="135">
                                        先天性白内障
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="136">
                                        先天性青光眼
                                    </a>
                                    <a href="javascript:;" data-id="137">
                                        先天性上睑下垂
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faculty-class">
                        <div class="dis-item">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="dis-header other"><span class="icon-img"></span><span class="facult-text">其他</span></li>
                                <li role="presentation" class="active ml40"><a href="#xinneike" aria-controls="xinneike" role="tab" data-toggle="tab"><span>心内科</span></a></li>
                                <li role="presentation"><a href="#xiaohuaneijingke" aria-controls="xiaohuaneijingke" role="tab" data-toggle="tab"><span>消化内镜科</span></a></li>
                                <li role="presentation"><a href="#erbiyanhoutoujingwaike" aria-controls="erbiyanhoutoujingwaike" role="tab" data-toggle="tab"><span>耳鼻咽喉头颈外科</span></a></li>
                            </ul>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="xinneike">
                                <div class="dis-list">
                                    <a class="focus" class="hide" href="javascript:;" data-id="142">
                                        急性心肌梗死
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="143">
                                        心脏瓣膜病
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="24">
                                        冠心病
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="28">
                                        心律失常
                                    </a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="xiaohuaneijingke">
                                <div class="dis-list">
                                    <a class="focus" class="hide" href="javascript:;" data-id="144">
                                        肠息肉
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="145">
                                        溃疡性结肠炎
                                    </a>
                                    <a class="focus" class="hide" href="javascript:;" data-id="146">
                                        十二指肠溃疡
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="147">
                                        胃溃疡
                                    </a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="erbiyanhoutoujingwaike">
                                <div class="dis-list">
                                    <a class="focus" href="javascript:;" data-id="148">
                                        鼻窦炎
                                    </a>
                                    <a href="javascript:;" data-id="149">
                                        鼻息肉
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="150">
                                        鼻咽癌
                                    </a>
                                    <a href="javascript:;" data-id="151">
                                        耳聋
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="152">
                                        喉癌
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="153">
                                        声带息肉
                                    </a>
                                    <a class="focus" href="javascript:;" data-id="154">
                                        头颈部肿瘤
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 hide">
                <div class="ads-img first">
                    <a target="_blank" href="<?php echo $this->createUrl('event/view', array('page' => 'infertility')); ?>">
                        <img src="<?php echo $urlResImage; ?>disease/ads-buyunbuyu.jpg" />
                    </a>
                </div>
                <div class="ads-img">
                    <a target="_blank" href="<?php echo $this->createUrl('event/view', array('page' => 'tumor')); ?>">
                        <img src="<?php echo $urlResImage; ?>disease/ads-zhongliu.jpg" />
                    </a>
                </div>
                <div class="ads-img">
                    <a target="_blank" href="<?php echo $this->createUrl('event/view', array('page' => 'rectalcancer')); ?>">
                        <img src="<?php echo $urlResImage; ?>disease/ads-dachangai.jpg" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(".dis-list a").click(function () {
            $id = $(this).attr("data-id");
            window.open("<?php echo $this->createUrl('disease/view', array('id' => '')); ?>" + $id, '_blank');
        });
    });
</script>
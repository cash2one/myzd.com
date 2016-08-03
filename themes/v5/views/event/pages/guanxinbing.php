<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/pc/event-guanxinbing100.min.css");
$urlBooking = $this->createUrl('booking/create', array('ajax' => 1));
?>
<section id="body">
    <div class="container-fluid">
        <div class="row guan-header text-center">
            <img src="http://static.mingyizhudao.com/147013624323357">
        </div>
    </div>	

    <div class="container container-body"> 
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
                <div id="doctor-img-left">
                    <div class="pt20">
                        <div class="title">
                            专家提醒冠心病患者在冬季应需要做好日常防护
                        </div>
                        <div class="text">
                            临床资料表明，冠心病患者对寒冷刺激特别敏感，主要是由于寒冷刺激可使体表小血管收缩痉挛，诱发冠状动脉内血栓形成;寒冷刺激还可直接引起冠状动脉痉挛，导致心肌缺血、缺氧，诱发心绞痛或急性心肌梗死等。另外，天气寒冷时血流速度减慢，也可间接地引起冠心病发作。因此，专家提醒冠心病患者在冬天应注意以下几点：
                        </div>
                    </div>
                </div>
                <div><div class="mt20"><img src="http://static.mingyizhudao.com/147013624378393"><span class="title-xs" >1、慧眼识别冠心病症状</span></div>
                    <div class="main-text">冠心病有典型与不典型症状之分，劳力诱发或寒冷刺激诱发的胸痛是冠心病的典型症状，需引起患者重视。但有的心绞痛表现在胸部以外，如牙痛、下颌疼痛、咽部紧缩感等，部分还表现为上腹胀痛不适等胃肠道症状，特别是疼痛剧烈时常伴有恶心、呕吐，临床上易误诊为急性胃肠炎、胆囊炎、胰腺炎等。上述不典型症状常使患者掉以轻心，造成医生误诊，从而延误冠心病的诊治。我们必须提高警惕，早防早治。</div>
                </div>
                <div><div class="mt20"><img src="http://static.mingyizhudao.com/147013624378393"><span class="title-xs">2、警惕急性冠脉综合症</span></div>
                    <div class="main-text">急性冠脉综合症包括急性st段抬高心肌梗死、急性非st段抬高心肌梗死和不稳定性心绞痛。其中急性心肌梗死表现为持续、剧烈、难以忍受的胸痛，范围较大，伴濒死感，若症状10～15分钟不缓解，或含服硝酸甘油1片5分钟不缓解，需立即到医院就诊。由于急性心肌梗死导致的死亡多发生在症状出现后的1～2小时，常见死因是心室颤动，所以最好选择救护车转送患者，方便进行心肺复苏，并有利于尽早进行再灌注治疗。</div>
                </div>
                <div><div class="mt20"><img src="http://static.mingyizhudao.com/147013624378393"><span class="title-xs">3、生活保健不能少</span></div>
                    <div class="main-text">冠心病患者除需注意观察、坚持治疗外，还要在日常生活中注意保健。根据气温变化调整着装，保暖御寒;尽量避免室内外温差刺激，不要骤然从温暖的房间进入寒冷的露天空间;增强御寒能力的锻炼，当天气晴朗、气温不太低时，可有意识地增加室外活动，但不宜过早进行晨练。</div>
                </div>
                <div><div class="mt20"><img src="http://static.mingyizhudao.com/147013624378393"><span class="title-xs">4、不放过蛛丝马迹</span></div>
                    <div class="main-text">很多急性心肌梗死的患者在发病前会有不稳定阶段，表现为心绞痛症状发作从无到有，心绞痛症状比以前频繁，持续时间延长，活动能力下降(步行距离缩短，不能胜任体力活动等)，或安静情况下也有心绞痛症状发作。这也就是急性非st段抬高的心肌梗死和不稳定性心绞痛阶段，这个阶段的早期干预有可能避免急性心肌梗死的发生。如出现上述症状，一定要及早就诊。</div>
                </div>
                <div class="mt20 doc-header">名医主刀推荐专家：</div>

            </div>
        </div>
        <div class="row mb40 doc-list">
            <div class="col-sm-6">
                <a class="bookingBtn" href="javascript:;" data-url="<?php echo $urlBooking; ?>" data-toggle="modal" data-target="#booking" data-docid="88" data-docname="许建屏" data-dochospital="阜外心血管病医院" data-docdept="心外科">
                    <div class="doc-content">
                        <div>
                            <span class="strong">许建屏 </span><span class="doc-title">&nbsp;&nbsp;&nbsp;主任医师</span>
                        </div>
                        <div>阜外心血管病医院</div>
                        <div class="doc-desc"><span class="long">擅长: </span>成人心脏病,先天性心脏病,冠心病</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="bookingBtn" href="javascript:;" data-url="<?php echo $urlBooking; ?>" data-toggle="modal" data-target="#booking" data-docid="46" data-docname="王良旭" data-dochospital="上海同济大学附属第十人民医院" data-docdept="胸外科">
                    <div class="doc-content">
                        <div>
                            <span class="strong">王良旭 </span><span class="doc-title">&nbsp;&nbsp;&nbsp;主任医师</span>
                        </div>
                        <div>上海同济大学附属第十人民医院</div>
                        <div class="doc-desc"><span class="long">擅长: </span>先天性心脏病,冠心病,成人心脏病</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="bookingBtn" href="javascript:;" data-url="<?php echo $urlBooking; ?>" data-toggle="modal" data-target="#booking" data-docid="48" data-docname="梅举" data-dochospital="上海交通大学医学院附属新华医院" data-docdept="胸外科">
                    <div class="doc-content">
                        <div>
                            <span class="strong">梅举 </span><span class="doc-title">&nbsp;&nbsp;&nbsp;主任医师</span>
                        </div>
                        <div>上海交通大学医学院附属新华医院</div>
                        <div class="doc-desc"><span class="long">擅长: </span>主动脉夹层,腹主动脉瘤,冠心病,心律失常</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="bookingBtn" href="javascript:;" data-url="<?php echo $urlBooking; ?>" data-toggle="modal" data-target="#booking" data-docid="135" data-docname="刘永民" data-dochospital="首都医科大学附属北京安贞医院" data-docdept="心外科">
                    <div class="doc-content">
                        <div>
                            <span class="strong">刘永民 </span><span class="doc-title">&nbsp;&nbsp;&nbsp;主任医师</span>
                        </div>
                        <div>首都医科大学附属北京安贞医院</div>
                        <div class="doc-desc"><span class="long">擅长: </span>先天性心脏病,冠心病,胸腺瘤</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php $this->renderPartial("//booking/formModal"); ?>
</section>

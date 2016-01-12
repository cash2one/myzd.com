<?php
$menu = $this->getPageMenu();
?>
<style>
    #site-header{border-bottom:1px solid #ddd;}
    .page-content .heading-u{margin-bottom:0;}
    .page-content .panel{border-top:none;border-radius:0;}
    .page-content .panel-body{padding-top:30px;font-size: 16px;}    

</style>
<div class="row mb20">
    <div id="sidemenu" class="col-sm-3">
        <?php $this->renderPartial('pages/_menu'); ?>

    </div>
    <div class="col-sm-9 page-content">
        <div class="row">
            <section class="clearfix">
                <div class="heading-u">
                    <div class="text">简介</div>
                    <div class="divider"></div>
                </div>                
            </section>

            <div class="panel panel-default">

                <div class="panel-body passage">
                    <strong>名医主刀，国内首家手术O2O平台，旨在以创新模式为全国病患提供专业高效的手术医疗服务。</strong>
                    <p>
                        总部坐落于上海，现设北京、杭州、天津、广州、南京、成都等分部，业务范围覆盖全国。其平台汇聚国内外顶级名医资源和床位资源，秉承“仁爱、专业、责任、创新”的企业精神，利用互联网技术实现医患精准匹配，帮助广大患者得以在第一时间预约到名医专家进行主刀治疗，实现医疗资源优化配置，帮助患者解决“好看病，看好病”的切实需求。
                    </p >
                    <p>
                        上名医主刀平台，名医随时有，手术不再难。&nbsp;
                    </p >
                </div>
            </div>
        </div>
    </div>
</div>

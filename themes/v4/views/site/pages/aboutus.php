<?php
$menu = $this->getPageMenu();
$this->pageTitle = '关于我们_公司简介_名医主刀';
$this->htmlMetaKeywords = '关于我们,名医主刀';
$this->htmlMetaDescription = '关于我们。【名医主刀】总部坐落于上海，现设北京、杭州、天津、广州、南京、成都等分部，业务范围覆盖全国。做手术就找名医主刀';
?>
<style>
    #site-header{border-bottom:1px solid #ddd;}
    .page-content .heading-u{margin-bottom:0;}
    .page-content .panel{border-top:none;border-radius:0;}
    .page-content .panel-body{padding-top:30px;min-height: 400px;}    

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
                        <p>
                            名医主刀——国内最大的移动医疗手术平台，旨在为有手术需求的患者提供专业、高效、安全的手术医疗服务。帮助广大有手术需求的患者，在第一时间预约全国知名专家，安排入院手术。
                        </p >
                        <p>
                            总部坐落于上海，现设北京、杭州、天津、广州、南京、成都等分部，业务范围覆盖全国。平台汇聚了国内外顶级名医资源和闲置床位资源，并利用互联网技术实现医患精准匹配，医疗资源优化配置，帮助患者解决“好看病，看好病”的切实需求。
                        </p >
                        <p class="strong">
                            做手术就找名医主刀。&nbsp;
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

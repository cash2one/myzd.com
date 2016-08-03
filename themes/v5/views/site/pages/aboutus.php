<?php
$menu = $this->getPageMenu();
$this->pageTitle = '关于我们_名医主刀网';
$this->htmlMetaKeywords = '名医主刀简介,名医主刀网';
$this->htmlMetaDescription = '名医主刀作为国内最大的移动医疗手术预约平台,旨在为有手术需求的患者提供专业、高效、安全的手术医疗预约服务,帮助广大有手术需求的患者,在第一时间预约全国知名专家,安排入院手术。';
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/aboutus100.min.css");
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
?>
<style>
    #site-header{border-bottom:1px solid #ddd;}
    .page-content .heading-u{margin-bottom:0;}
    .page-content .panel{border-top:none;border-radius:0;}
    .page-content .panel-body{padding-top:30px;min-height: 400px;}    

</style>
<div class="container-fluid aboutus-header h400">
    <img src="http://static.mingyizhudao.com/14625020116117"/>
</div>
<section id="aboutus">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="mt-60">
                    <?php $this->renderPartial('pages/_menu'); ?> 
                </div>
            </div>

            <div class="container-fluid summary">
                <div class="row">
                    <div class="container">
                        <div class="content">
                            <div class="row">                           
                                <div class="col-sm-6">
                                    <span class="mingyi-title">名医主刀</span><span> ——国内最大的移动医疗手术预约平台，旨在为有手术需求的患者提供专业、高效、安全的手术医疗预约服务。帮助广大有手术需求的患者，在第一时间预约全国知名专家，安排入院手术。</span>
                                </div>
                                <div class="col-sm-6">
                                    <span class="title">总部</span><span class="ml10">坐落于上海，现设北京、杭州、天津、广州、南京、成都等分部，业务范围覆盖全国。平台汇聚了国内外顶级名医资源和闲置床位资源，并利用互联网技术实现医患精准匹配，医疗资源优化配置，帮助患者解决<span>“好看病，看好病”</span>的切实需求。</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid summary">
                <div class="row">
                    <div class="container">
                        <div class="content">                         
                            <div class="mode-title">汇聚国内外顶级名医资源</div>
                            <div>名医主刀不仅签约了两万余名三甲医院副主任级别及以上的医生，还与工程院院士级别的顶尖专家团队有合作。签约医生涵盖不同的科室，能让更多患者通过这一平台精准对接到擅长相关疾病的专家，从而节省了在不同医院门诊排队的时间，并减少患者乱投医而产生的额外费用。</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid summary">
                <div class="row">
                    <div class="container">
                        <div class="content">                                                       
                            <span class="mode-title pull-right">细致、专业的医疗服务</span>
                            <div class="clearfix"></div>
                            <div>患者只需要通过名医主刀的服务平台上传自己的病历资料，名医主刀将邀请三甲医院的专家，对患者的病历进行线下会诊，给出具体的治疗方案。患者可以根据专家给出的治疗方案，在名医助手的安排下，进行后期的手术治疗。</div>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid summary">
                <div class="row">
                    <div class="container">
                        <div class="content mb100">                                                      
                            <div class="mode-title">做手术就找名医主刀</div>
                            <div>通过名医主刀，患者不仅可以获得专家细致、专业的诊疗服务，还可以缩短治疗的等候时间。在三甲医院等待床位有时需要长达三个月，但在名医主刀，经过对医疗资源的优化配置，可以缩短为一个星期，能极大程度的避免因为手术延迟而耽误病情。<a href="<?php echo $this->createUrl('site/page', array('view' => 'zhitongche')); ?>"><span class="aboutus-link">【<span class="text">点击查看患者故事</span>】</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
//    $(document).ready(function () {
//        ajaxAboutus();
//    });
//    function ajaxAboutus() {
//        $.ajax({
//            url: '/mingyizhudao.com/bigevents',
//            dataType: 'html',
//            success: function (data) {
//                $('.test').html(data);
//            },
//            error: function () {
//                alert(222);
//            }
//        });
//    }
//    function sethtml() {
//        var innerHtml = '';
//        innerHtml += '<div>111</div>';
//        $('.test').html(innerHtml);
//    }
</script>
<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/pc/event-awards100.min.css");
?>
<section id="awards">
    <div class="awards-header">
        <div class="container">
            <img src="http://static.mingyizhudao.com/14701300619920"/>
        </div>
    </div>
    <div class="awards-content">
        <div class="awards-title"><span>荣获“2015年度互联网+医疗行业创新贡献奖”</span></div>
        <div class="clearfix"></div>
        <div class="container">
            <div class="row mt40">
                <div class="col-md-8">
                    <div class="imgbxslider">
                        <ul class="bxslider">
                            <li><img src="http://static.mingyizhudao.com/14702925325620"/></li>
                            <li><img src="http://static.mingyizhudao.com/14702924200853"/></li>
                            <li><img src="http://static.mingyizhudao.com/147029254252860"/></li>
                            <li><img src="http://static.mingyizhudao.com/147029254940175"/></li>
                            <li><img src="http://static.mingyizhudao.com/147029256007646"/></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="news-content">
                        <h4>获奖新闻摘要</h4>
                        <p class="textIndent2">“医疗跟淘宝买东西不一样，一定要一步一个脚印，坚持安全与质量。”在2015年11月28日举行的第八届“健康中国”大会上，原卫生部部长高强拉着苏舒的手叮嘱道。</p>
                        <p>在此次大会上，名医主刀作为移动互联网创业项目大放异彩，不仅斩获了“2015年度互联网+医疗行业创新贡献奖”，其主推的“滴滴医生”项目也经过投票，与“青蒿素获诺贝尔奖”等新闻一道，获评2015年度十大健康新闻。</p>
                        <p class="mt20">“健康中国”论坛由人民日报《健康时报》主办，是中国医疗健康领域内一年一度的盛会。</p>
                    </div>
                </div>
            </div>
            <div class="hope">
                <div><span class="strong">名医主刀创始人苏舒</span>在随后的演讲中重申了名医主刀的愿景：</div>
                世界上最大的酒店集团是Airbnb，没有一间房间是自己的;世界上最大的出租车公司是Uber和滴滴，没有一辆车是自己的;名医主刀打造的是世界上最大的Hospital group，没有一个医生是自己的，但是世界上最好的医生都可以来这里自由行医，更多的患者可以在这里获得更好更及时的手术治疗。
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        var slider = $('.awards-content .bxslider').bxSlider({
            slideMargin: 0,
            controls: true,
            auto: true,
            pause: 3000,
            hideControlOnEnd: true
        });
        $(".awards-content .bx-wrapper").mouseover(function () {
            slider.stopAuto();
        });
        $(".awards-content .bx-wrapper").mouseout(function () {
            slider.startAuto();
        });
    });
</script>

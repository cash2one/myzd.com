<?php $baseUrlImage = Yii::app()->theme->baseUrl . "/images/"; 
$this->htmlMetaKeywords = '创业邦,中国创业,实现创业梦想,名医主刀,行医体验,医疗体系,健康高效,值得关注【名医主刀】';
$this->htmlMetaDescription = '"创业邦”是具有全球视野的创业信息和专业服务平台，致力于成为中国创业类的等一媒体集团，帮助中国新一代的创业者实现创业梦想';
?>
<style>
    .news-content{border: 1px solid #e4e4e4;font-size: 16px;padding-left: 30px;padding-right: 30px;}
    .newslist{padding: 20px 10px;}
    .newslist .news-title{font-size: 24px;color: #19aea5;}
    .newslist .news-title .new-slogan{font-size: 12px; color: #9f9fa0;margin-left: 10px;padding-left: 10px;border-left: 1px solid #9f9fa0;}
    .newslist .news-item{margin-bottom: 10px;}
    .newslist ol li{overflow: hidden;height: 1.5em;}
    .newslist ol li .fa-star{color: #EFA429;font-size: 12px;}
</style>
<div class="container">
    <div class="mt10">
        <div class="">
            <div class="col-sm-9 news-content pt30">
                <p style="text-indent: 2em; line-height: 2em; margin-top: 20px;">
                    <span style="font-size: 14px;">&quot;创业邦”是具有全球视野的创业信息和专业服务平台，致力于成为中国创业类的等一媒体集团，帮助中国新一代的创业者实现创业梦想。&quot;名医主刀”创始人苏舒的&quot;为了还中国患者更好的手术经历，为了还中国医生更好的行医体验，为了还中国医疗体系更加健康高效&quot;的理念和实践，得到&quot;创业邦&quot;的充分认同，&quot;名医主刀&quot;荣幸地被&quot;创业邦&quot;推荐为9月值得关注的10家新创公司之一。</span>
                </p>
                <p style="margin-top: 20px; line-height: 2em; text-indent: 2em; text-align: center;">
                    <img alt="demo.jpg" src="<?php echo $baseUrlImage; ?>news/chuangyebang.jpg" title=""/>
                </p>
                <p style="margin-top: 20px; line-height: 2em; text-indent: 2em;">
                    <br/>
                </p>
                <p style="margin-top: 20px; line-height: 2em; text-indent: 2em;">
                    <span style="font-size: 14px;"></span>
                </p>
                <p style="margin-top: 20px; line-height: 2em; text-indent: 2em;">
                    <span style="font-size: 14px;"></span><br/>
                </p>

            </div>
            <?php $this->renderPartial('//news/pages/_newsmenu', $data = 'chuangyebang'); ?>
        </div>
    </div>
</div>

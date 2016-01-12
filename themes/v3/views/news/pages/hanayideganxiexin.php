<?php $baseUrlImage = Yii::app()->theme->baseUrl . "/images/"; ?>
<style>
    .news-content{border: 1px solid #e4e4e4;font-size: 16px;padding-left: 30px;padding-right: 30px;}
    .newslist{padding: 20px 10px;}
    .newslist .news-title{font-size: 24px;color: #19aea5;}
    .newslist .news-title .new-slogan{font-size: 12px; color: #9f9fa0;margin-left: 10px;padding-left: 10px;border-left: 1px solid #9f9fa0;}
    .newslist .news-item{margin-bottom: 10px;}
    .newslist ol li{overflow: hidden;height: 1.5em;}
    .newslist ol li .fa-star{color: #EFA429;font-size: 12px;}
</style>
<div class="mt10">
    <div class="row">
        <div class="col-sm-9 news-content pt30">
            <h1 label="标题居中" style="font-size: 32px; font-weight: bold; border-bottom-color: rgb(204, 204, 204); border-bottom-width: 2px; border-bottom-style: solid; padding: 0px 4px 0px 0px; text-align: center; margin: 0px 0px 20px;">
                <span style="font-size: 18px;"><strong><span style="font-family: 宋体;">韩阿姨的一封感谢信照亮千万患者就医路</span></strong></span>
            </h1>
            <p dir="ltr" style="line-height: 1.5em; text-indent: 2em; margin-bottom: 15px;">
                <span style="font-family:宋体">韩阿姨家住河南，今年</span>6<span style="font-family:宋体">月份和家人来北京看病。韩阿姨开始觉得看病自己到医院挂号最让人放心，自己来到医院找到医生才是最真实的，但是到北京看病没有认识的医生，又不知如何选择医院，病情又急需手术，这让韩阿姨和她的家人陷入了困境。韩阿姨尝试了许多方法去医院挂号，每天很早去医院排队，当韩阿姨挂上专家号之后被专家告知需要手术却没有床位的时候，韩阿姨和她家人又一次陷入失望。</span>
            </p>
            <p dir="ltr" style="line-height: 1.5em; text-indent: 2em; margin-bottom: 15px;">
                <span style="font-family:宋体">但是患者排队挂号的时间是非常宝贵的，多等一秒病情就加重一分，危险就多一分。中国一年有很多的患者因等排队等床位延误病情，甚至还有的在等待的过程中病情加重远离人世。</span>
            </p>
            <p dir="ltr" style="line-height: 1.5em; text-indent: 2em; margin-bottom: 15px;">
                7<span style="font-family:宋体">月</span>6<span style="font-family:宋体">号韩阿姨的儿子找到了我们。在客服的帮助下，韩阿姨家人在网站提交了病例，我们医疗客服在专家库中为其精准匹配相关专家，当天就为其对接到北京安贞医院胸外科专家。医疗客服将韩阿姨病例资料传送到专家手中。专家当天了解其详细病情及身体状况之后第二天为其安排手术，并且手术非常成功。互联网手术直通车居然这样便捷，这让韩阿姨深深记住“名医主刀”这几个字。</span>
            </p>
            <p dir="ltr" style="line-height: 150%; text-indent: 2em; text-align: center;margin-top: 35px;">
                <span style="font-family:宋体"><img src="<?php echo $baseUrlImage; ?>news/ganxiexin-hanayi.jpg" title="" alt="demo.jpg" width="517" height="659" style="width: 517px; height: 659px;"/></span>
            </p>
            <p dir="ltr" style="line-height: 150%; text-indent: 2em; text-align: center;">
                <span style="font-family:宋体"><img src="<?php echo $baseUrlImage; ?>news/hanayi.jpg" title="" alt="demo.jpg" width="479" height="307" style="width: 479px; height: 307px;"/></span>
            </p>
            <p>
                <br/>
            </p>
        </div>
        <div class="col-sm-3">
            <div class="newslist" style="border: 1px solid #e4e4e4;margin-right: -15px;">
                <div>
                    <div class="news-title">最新新闻<span class="new-slogan">关注健康,享受生活!</span></div>
                    <div class="divider mb5"></div>
                </div>
                <div>
                    <ol class="mt10" style="padding-left:10px;">
                        <li class="news-item"><i class="fa fa-star"></i>&nbsp;<a href="<?php echo $this->createUrl('news/page', array('view' => 'mingyizhudao')) ?>">名医主刀：移动医疗手术O2O</a></li>
                        <li class="news-item"><i class="fa fa-star"></i>&nbsp;<a href="<?php echo $this->createUrl('news/page', array('view' => 'fly-cutter')) ?>">名医主刀：互联网式“飞刀”</a></li>
                        <li class="news-item"><i class="fa fa-star"></i>&nbsp;<a href="<?php echo $this->createUrl('news/page', array('view' => 'kangai')) ?>">父亲两次抗癌，只为给女儿更久远的爱</a></li>
                        <li class="news-item"><i class="fa fa-star"></i>&nbsp;<a href="<?php echo $this->createUrl('news/page', array('view' => 'qianyuedejiyiyuan')) ?>">名医主刀成功签约德济医院 互联网医疗又一里程碑</a></li>
                        <li class="news-item"><i class="fa fa-star"></i>&nbsp;<a href="<?php echo $this->createUrl('news/page', array('view' => 'chuangyeyingxionghui')) ?>">男儿英雄泪，志在“好看病，看好病”——“名医主刀”登陆央视《创业英雄汇》</a></li>
                        <li class="news-item"><i class="fa fa-star"></i>&nbsp;<a href="<?php echo $this->createUrl('news/page', array('view' => 'zhenfund')) ?>">“名医主刀”获真格基金500万天使投资，打造国内最大的手术O2O平台</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
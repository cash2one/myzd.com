<?php
$menu = $this->getPageMenu();
$this->pageTitle = '大事记_名医主刀';
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/big-event.css?v=" . time());
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
?>
<style>.pb50{padding-bottom:50px;}</style>
<div class="container-fluid aboutus-header h400">
    <img src="<?php echo $urlResImage; ?>aboutus/our-header.png"/>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="mt-60">
                <?php $this->renderPartial('pages/_menu'); ?> 
            </div>
        </div>
        <div class="container-fluid big-event-bg">
            <div class="row">
                <div class="container mt100" id="big-event">
                    <div class="row">
                        <div class="col-md-5 ml65 mr-65">
                            <div class="row event-1602-3">
                                <div class="col-md-6">
                                    <img src="<?php echo $urlResImage ?>aboutus/picture160203.png">
                                </div>
                                <div class="col-md-6 text-right pt142 font-20p color-blue">
                                    2016年2月
                                </div>
                            </div>
                            <div class="div-left mt4 pt10 pr10 pl10 pb40">
                                <div>动脉网发布<strong class="text18">2014-2015全球互联网医疗投融百强榜单</strong>，名医主刀榜上有名，也是唯一一个<strong class="text18">专精于手术</strong>领域的互联网医疗公司。</div>
                                <div class="tooltip-arrow tooltip-arrow-left top-1 right-15"></div>
                            </div>
                            <div class="row event-1602-1">
                                <div class="col-md-6">
                                    <img src="<?php echo $urlResImage ?>aboutus/picture160201.png">
                                </div>
                                <div class="col-md-6 text-right pt142 font-20p color-blue">
                                    2016年2月
                                </div>
                            </div>
                            <div class="div-left mt4 pt10 pr10 pl10 pb40">
                                <div>名医主刀创始人、CEO苏舒入选福布斯<strong class="text18">“30位30岁以下亚洲年轻领袖榜（30 under 30）”</strong>。</div>
                                <div class="tooltip-arrow tooltip-arrow-left top-1 right-15"></div>
                            </div>
                            <div class="row event-151202">
                                <div class="col-md-6">
                                    <img src="<?php echo $urlResImage ?>aboutus/picture1-01.png">
                                </div>
                                <div class="col-md-6 text-right pt142 font-20p color-blue">
                                    2015年12月
                                </div>
                            </div>
                            <div class="div-left mt4 pt10 pr10 pl10 pb40">
                                <div>名医主刀入选<strong class="text18">“第十届中国最具投资价值企业50强”</strong>榜单。该榜单由清科集团发起，是投资界首个专注高成长企业的年度评选活动，被誉为”投资界的风向标“。</div>
                                <div class="tooltip-arrow tooltip-arrow-left top-1 right-15"></div>
                            </div>
                            <div class="row pt50 event-151016">
                                <div class="col-md-6 mt5">
                                    <img src="<?php echo $urlResImage ?>aboutus/picture3-01.png">
                                </div>
                                <div class="col-md-6 text-right pt142 font-20p color-red mt5">
                                    2015年10月
                                </div>
                            </div>
                            <div class="div-left1 mt4 pt30 pr40 pl40 pb40 line-height2-5em">
                                <div>名医主刀完成<strong class="text18">A轮6000万</strong>元人民币融资。复星医药领投，高榕资本/真格基金跟投。</div>
                                <div class="tooltip-arrow tooltip-arrow-left1 top-1 right-15"></div>
                            </div>
                            <div class="row pt50 event-1508-1">
                                <div class="col-md-6">
                                    <img src="<?php echo $urlResImage ?>aboutus/picture5-01.png">
                                </div>
                                <div class="col-md-6 text-right pt142 font-20p color-blue">
                                    2015年8月
                                </div>
                            </div>
                            <div class="div-left mt4 pt10 pl10 pr10 pb40">
                                <div>名医主刀已实现北京、上海、天津、杭州、南京所有三甲医院，所有科室全覆盖。每个城市随时可以调用的公立医院及私立医院的床位超过<strong class="text18">1000张</strong>，满足医保患者和商业保险患者的多重需求。</div>
                                <div class="tooltip-arrow tooltip-arrow-left top-1 right-15"></div>
                            </div>
                            <div class="row pt50 event-1507-1">
                                <div class="col-md-6">
                                    <img src="<?php echo $urlResImage ?>aboutus/picture7-01.png">
                                </div>
                                <div class="col-md-6 text-right pt142 font-20p color-blue">
                                    2015年7月
                                </div>
                            </div>
                            <div class="div-left mt4 pt10 pl10 pr10 pb20">
                                <div>名医主刀独特的理念吸引<strong class="text18">央视《创业英雄汇》</strong>节目组，随之名医主刀受邀在央视平台进入全国人民视野。“名医主刀”平台创始人兼CEO苏舒路演随即播出，名医主刀将为中国医疗格局开启新的篇章。</div>
                                <div class="tooltip-arrow tooltip-arrow-left top-1 right-15"></div>
                            </div>
                            <div class="row pt50 event-1505">
                                <div class="col-md-6">
                                    <img src="<?php echo $urlResImage ?>aboutus/picture9-01.png">
                                </div>
                                <div class="col-md-6 text-right pt142 font-20p color-red">
                                    2015年5月
                                </div>
                            </div>
                            <div class="div-left1 mt4 pt10 pl10 pr10 pb30">
                                <div>“名医主刀”全新的医疗模式理念获得到了<strong>真格基金创始人徐小平</strong>老师的高度认可，仅在一次电话交流之后就果断决定对名医主刀项目进行了<strong class="text18">500万</strong>的天使投资。</div>
                                <div class="tooltip-arrow tooltip-arrow-left1 top-1 right-15"></div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="circle h110p">
                                <img src="<?php echo $urlResImage ?>aboutus/now.png">
                            </div>
                            <div class="h100p" >
                                <div ></div>
                                <div class="h100p bg-yellow yellow-line"></div>
                            </div>
                            <div class="text-center">
                                <img src="<?php echo $urlResImage ?>aboutus/point-01.png">
                            </div>
                            <div class="h170p" >
                                <div ></div>
                                <div class="h170p bg-yellow yellow-line"></div>
                            </div>
                            <div class="text-center">
                                <img src="<?php echo $urlResImage ?>aboutus/point-01.png">
                            </div>
                            <div class="h170p" >
                                <div ></div>
                                <div class="h170p bg-yellow yellow-line"></div>
                            </div>
                            <div class="text-center">
                                <img src="<?php echo $urlResImage ?>aboutus/point-01.png">
                            </div>
                            <div class="h170p" >
                                <div ></div>
                                <div class="h170p bg-yellow yellow-line"></div>
                            </div>
                             <div class="text-center">
                                <img src="<?php echo $urlResImage ?>aboutus/point-01.png">
                            </div>
                            <div class="h170p" >
                                <div ></div>
                                <div class="h170p bg-yellow yellow-line"></div>
                            </div>
                            <div class="circle h110p mt-7">
                                <img src="<?php echo $urlResImage ?>aboutus/2016.png">
                            </div>
                            <div class="h170p" >
                                <div ></div>
                                <div class="h170p bg-yellow yellow-line"></div>
                            </div>
                            <div class="text-center">
                                <img src="<?php echo $urlResImage ?>aboutus/point-01.png">
                            </div>
                            <div class="h170p">
                                <div class="h170p bg-yellow yellow-line"></div>
                            </div>
                            <div class="text-center">
                                <img src="<?php echo $urlResImage ?>aboutus/point-01.png">
                            </div>
                            <div class="h170p">
                                <div class="h170p bg-yellow yellow-line"></div>
                            </div>
                            <div class="text-center">
                                <img src="<?php echo $urlResImage ?>aboutus/point-01.png">
                            </div>
                            <div class="h170p">
                                <div class="h170p bg-yellow yellow-line"></div>
                            </div>
                            <div class="text-center">
                                <img src="<?php echo $urlResImage ?>aboutus/point-01.png">
                            </div>
                            <div class="h170p">
                                <div class="h170p bg-yellow yellow-line"></div>
                            </div>
                            <div class="text-center">
                                <img src="<?php echo $urlResImage ?>aboutus/point-01.png">
                            </div>
                            <div class="h170p">
                                <div class="h170p bg-yellow yellow-line"></div>
                            </div>
                            <div class="text-center">
                                <img src="<?php echo $urlResImage ?>aboutus/point-01.png">
                            </div>
                            <div class="h170p">
                                <div class="h170p bg-yellow yellow-line"></div>
                            </div>
                            <div class="text-center">
                                <img src="<?php echo $urlResImage ?>aboutus/point-01.png">
                            </div>
                            <div class="h170p">
                                <div class="h170p bg-yellow yellow-line"></div>
                            </div>
                            <div class="text-center">
                                <img src="<?php echo $urlResImage ?>aboutus/point-01.png">
                            </div>
                            <div class="h170p">
                                <div class="h170p bg-yellow yellow-line"></div>
                            </div>
                            <div class="text-center">
                                <img src="<?php echo $urlResImage ?>aboutus/point-01.png">
                            </div>
                            <div class="h100p">
                                <div class="h100p bg-yellow yellow-line"></div>
                            </div>
                            <div class="circle text-center mt-7">
                                <img src="<?php echo $urlResImage ?>aboutus/2015.png">
                            </div>
                        </div>
                        <div class="col-md-5 ml-65">
                            <div class="row event-1602-2">
                                <div class="col-md-6 pt142 font-20p color-blue mt5">
                                    2016年2月
                                </div>
                                <div class="col-md-6 pl10 mt5">
                                    <img src="<?php echo $urlResImage ?>aboutus/picture160202.png">
                                </div>
                            </div>
                            <div class="div-right mt4 pt10 pb20 pl10 pr10">
                                <div>国家信息中心信息化研究部、中国互联网协会分享经济工作委员会联合发布《中国分享经济发展报告2016》。名医主刀作为<strong class="text18">唯一一家移动医疗</strong>创业公司入选。名医主刀在配置闲置床位和医生碎片时间的过程中，践行着分享经济理念。</div>
                                <div class="tooltip-arrow tooltip-arrow-right left-15 top-1"></div>
                            </div>
                             <div class="row event-160108">
                                <div class="col-md-6 pt142 font-20p color-blue mt5">
                                    2016年1月
                                </div>
                                <div class="col-md-6 pl10 mt5">
                                    <img src="<?php echo $urlResImage ?>aboutus/picture10-01.png">
                                </div>
                            </div>
                            <div class="div-right mt4 pt10 pb10 pl10 pr10">
                                <div>名医主刀荣获亿欧网举办的<strong class="text18">“2015年度中国互联网+最具创新力”</strong>奖。入围项目的创新不仅是模式创新、服务业务创新，还包括技术创新、体制机制创新和管理创新等，且主要根据全社会公开项目征集、亿欧网评测和参考第三方数据（艾瑞、Testin云测、TakingData）得出。</div>
                                <div class="tooltip-arrow tooltip-arrow-right left-15 top-1"></div>
                            </div>
                            <div class="row event-151128">
                                <div class="col-md-6 pt142 font-20p color-blue mt5">
                                    2015年11月
                                </div>
                                <div class="col-md-6 pl10 mt5">
                                    <img src="<?php echo $urlResImage ?>aboutus/picture2-01.png">
                                </div>
                            </div>
                            <div class="div-right mt4 pt10 pb10 pl10 pr10">
                                <div>在人民日报《健康时报》主办的第八届“健康中国”论坛上，名医主刀荣获<strong class="text18">“2015年度互联网+医疗行业创新贡献奖”</strong>；名医主刀与滴滴出行、阿里健康共同打造的“滴滴医生”项目获评2015年度十大健康新闻。名医主刀CEO苏舒受到全国人大常委会副委员长陈至立、原卫生部部长高强等领导同志接见。</div>
                                <div class="tooltip-arrow tooltip-arrow-right left-15 top-1"></div>
                            </div>
                            <div class="row event-1508-2">
                                <div class="col-md-6 pt142 font-20p color-blue">
                                    2015年9月
                                </div>
                                <div class="col-md-6 pl10">
                                    <img src="<?php echo $urlResImage ?>aboutus/picture4-01.png">
                                </div>
                            </div>
                            <div class="div-right mt4 pt10 pl10 pr10 pb40">
                                <div>名医主刀应邀参加《创新中国》总决赛，并获得创新中国9月份最受关注的<strong class="text18">10家新创公司之一。</strong></div>
                                <div class="tooltip-arrow tooltip-arrow-right left-15 top-1"></div>
                            </div>
                            <div class="row event-1507-2">
                                <div class="col-md-6 pt142 font-20p color-blue">
                                    2015年7月
                                </div>
                                <div class="col-md-6 pl10">
                                    <img src="<?php echo $urlResImage ?>aboutus/picture6-01.png">
                                </div>
                            </div>
                            <div class="div-right mt4 pt10 pl10 pr10 pb10">
                                <div>名医主刀受<strong class="text18">央视《华商论见》</strong>邀约，名医主刀CEO苏舒与央视一哥水均益进行一个深度的交流。水均益老师以其独特的视角深度剖析国内医疗资源配比，对名医主刀精准匹配专家，优化国内医疗资源给予充分肯定。与此同时，名医主刀与央视《华商论见》签订战略协议，继续深化合作。</div>
                                <div class="tooltip-arrow tooltip-arrow-right left-15 top-1"></div>
                            </div>
                            <div class="row event-1507-3">
                                <div class="col-md-6 pt142 font-20p color-blue">
                                    2015年7月
                                </div>
                                <div class="col-md-6 pl10">
                                    <img src="<?php echo $urlResImage ?>aboutus/picture8-01.png">
                                </div>
                            </div>
                            <div class="div-right mt4 pb20 pt10 pl10 pr10">
                                <div>名医主刀已经与心血管外科国内顶级专家<strong>许建屏教授</strong>、甲状腺外科国内顶级专家<strong>刘跃武教授</strong>、白内障国内顶级专家<strong>朱思泉教授</strong>、国内肝胆领域泰斗<strong>王学浩院士</strong>等百余位<strong class="text18">国内顶尖知名专家</strong>签订专家战略合作协议。</div>
                                <div class="tooltip-arrow tooltip-arrow-right left-15 top-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center color-red font-20p">
                        2014年10月，名医主刀项目启动。
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

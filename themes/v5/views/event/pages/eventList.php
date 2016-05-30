<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/event-list.css?v=" . time());
?>
<section id="eventList">
    <div class="container-fluid crumbs-event">
        <div class="container">
            <div>
                <ul>
                    <li><a href="<?php echo Yii::app()->homeUrl; ?>">首页</a></li>
                    <li>></li>
                    <li>专题列表</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="special-topic">
                    <div class="header-img">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146459511049131">
                    </div>
                    <div class="content">
                        <div class="text-content">
                            <div>共享名医资源、共铸健康中国：</div>
                            <div>4月20日，名医公益手术捐赠暨名医公益宣言发布会 ”在人民大会堂如期举行。此次大型公益活动由名医主刀、国内多家公益基金等单位共同发起......</div>
                        </div>
                        <div class="learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'shapinghealth')); ?>" target="_blank">查看详情></a></div>
                        <div class="mark-activity"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="special-topic">
                    <div class="header-img">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146459508443619">
                    </div>
                    <div class="content">
                        <div class="text-content">
                            <div>白酒女孩的故事：</div>
                            <div>家住江西省修水县的13岁女孩程欣是一名早产儿，出生6个月后被查出患有先天性脑瘫，疼痛难忍时程欣只能让家人用白酒麻痹自己。经媒体报道后......</div>
                        </div>
                        <div class="learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'winegirl')); ?>" target="_blank">查看详情></a></div>
                        <div class="mark-activity"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="special-topic">
                    <div class="header-img">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146314974635016">
                    </div>
                    <div class="content">
                        <div class="text-content">
                            <div>白内障是老年人中最常见的眼科疾病之一，全国每年有数以百万计的老年人需要进行白内障手术。虽然白内障手术并非大型手术，可是仍然存在因为经济状况而耽误治疗的现象存在......</div>
                        </div>
                        <div class="learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'cataract')); ?>" target="_blank">查看详情></a></div>
                        <div class="mark-activity"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="special-topic">
                    <div class="header-img">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146314989894757">
                    </div>
                    <div class="content">
                        <div class="text-content">
                            <div>名医君提示您:</div>
                            <div>是不是身上经常莫名其妙的出现一些小肿块，当时满不在意。有时，正是这些小肿块，恶化成了癌症。今天，名医君就给大家介绍出现在身上的小肿块可......</div>
                        </div>
                        <div class="learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'cancer')); ?>" target="_blank">查看详情></a></div>
                        <div class="mark-disease"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="special-topic">
                    <div class="header-img">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146314962973560">
                    </div>
                    <div class="content">
                        <div class="text-content">
                            <div>故事是这样的：</div>
                            <div>Althani王子不幸患有扭转痉挛症，临床症状是双下肢肌张力高，双侧肢体运动障碍，肢体僵硬22年，头颅MRI检查示脑萎缩，但智力基本正常......</div>
                        </div>
                        <div class="learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'prince')); ?>" target="_blank">查看详情></a></div>
                        <div class="mark-disease"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="special-topic">
                    <div class="header-img">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146314962969155">
                    </div>
                    <div class="content">
                        <div class="text-content">
                            <div>【医生专访 陆劲松】</div>
                            <div>名医主刀编者按：乳腺癌是中国女性发病率最高的癌症，癌症死亡概率位居第六。截至2008年，中国总计169452 例新发侵润性乳腺癌......</div>
                        </div>
                        <div class="learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'lujinsong')); ?>" target="_blank">查看详情></a></div>
                        <div class="mark-visit"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="special-topic">
                    <div class="header-img">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146314962964354">
                    </div>
                    <div class="content">
                        <div class="text-content">
                            <div>医师在手，肠癌无忧！</div>
                            <div>现代社会，由于老龄化及环境的改变，加上久坐不动的生活方式和不均衡的饮食习惯，导致癌症高发，患结直肠癌的比例也越来越高......</div>
                        </div>
                        <div class="learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'rectalcancer')); ?>" target="_blank">查看详情></a></div>
                        <div class="mark-disease"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="special-topic">
                    <div class="header-img">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/14631496296013">
                    </div>
                    <div class="content">
                        <div class="text-content">
                            <div>国庆节到了，小伙伴们纷纷结盟走起，激动之心难以言表。去哪玩、怎么玩一时成为朋友圈的热门话题。</div>
                            <div>出门旅游免不了要走路，腿脚不好可是个大问题，如果原本就膝关节不好......</div>
                        </div>
                        <div class="learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'nationalday')); ?>" target="_blank">查看详情></a></div>
                        <div class="mark-disease"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="special-topic">
                    <div class="header-img">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146314962947593">
                    </div>
                    <div class="content">
                        <div class="text-content">
                            <div>【医生专访 任善成】</div>
                            <div>“达芬奇手术机器人”为泌尿疾病患者带来福音。名医主刀编者按：提到“达芬奇手术机器人”，也许很多医疗界外的人会感觉是科幻片的主角......</div>
                        </div>
                        <div class="learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'doctorInterview')); ?>" target="_blank">查看详情></a></div>
                        <div class="mark-visit"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="special-topic">
                    <div class="header-img">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146314951573032">
                    </div>
                    <div class="content">
                        <div class="text-content">
                            <div>新政出炉：</div>
                            <div>随着国家对二胎政策的放开，肯定有不少年龄稍微大些的女性要考虑再生一个孩子的问题，相对于年轻的女性，大龄女青年可能会面临着不同的问题......</div>
                        </div>
                        <div class="learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'ertai')); ?>" target="_blank">查看详情></a></div>
                        <div class="mark-disease"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="special-topic">
                    <div class="header-img">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146314951569145">
                    </div>
                    <div class="content">
                        <div class="text-content">
                            <div>专家提醒冠心病患者在冬季应需要做好日常防护：</div>
                            <div>临床资料表明，冠心病患者对寒冷刺激特别敏感，主要是由于寒冷刺激可使体表小血管收缩痉挛......</div>
                        </div>
                        <div class="learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'guanxinbing')); ?>" target="_blank">查看详情></a></div>
                        <div class="mark-disease"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="special-topic">
                    <div class="header-img">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146314951564529">
                    </div>
                    <div class="content">
                        <div class="text-content">
                            <div>双11熬夜秒杀警惕心血管病突发：</div>
                            <div>双十一是个特殊的日子，不仅仅是光棍节，更是网购狂欢节。很多人已经在心里暗暗倒数双十一的到来，准备一过午夜0点就加入“抢杀大军”......</div>
                        </div>
                        <div class="learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'xinxueguan')); ?>" target="_blank">查看详情></a></div>
                        <div class="mark-disease"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="special-topic">
                    <div class="header-img">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146314951559287">
                    </div>
                    <div class="content">
                        <div class="text-content">
                            <div>您关注健康了么 ?</div>
                            <div>健康是人类永远追求的话题，也是我们每一个人生命品质的基本保障。然而，随着生活水平的提高，现代人的亚健康现象却越来越严重......</div>
                        </div>
                        <div class="learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'ruxianai')); ?>" target="_blank">查看详情></a></div>
                        <div class="mark-activity"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="special-topic">
                    <div class="header-img">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146314951554440">
                    </div>
                    <div class="content">
                        <div class="text-content">
                            <div>明星专家权威建议:</div>
                            <div>发现甲状腺疾病及早手术治疗常见饮食可预防甲状腺疾病！疾病常见症状及检查。1．甲状腺功能亢进：肿大的甲状腺质地柔软，触诊时可有震颤......</div>
                        </div>
                        <div class="learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'thyroid')); ?>" target="_blank">查看详情></a></div>
                        <div class="mark-disease"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="special-topic">
                    <div class="header-img">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/14631495154059">
                    </div>
                    <div class="content">
                        <div class="text-content">
                            <div>立秋之后怎么预防和治疗肝病?</div>
                            <div>肝胆胰专家团队让你焕然新春,告别秋黄!</div>
                            <div>“立秋之日凉风至”，虽然今年全国大部分地区在立秋后暑气难消，“秋老虎”的余威依旧......</div>
                        </div>
                        <div class="learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'preliverdisease')); ?>" target="_blank">查看详情></a></div>
                        <div class="mark-disease"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="special-topic">
                    <div class="header-img">
                        <img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146314951524745">
                    </div>
                    <div class="content">
                        <div class="text-content">
                            <div>这是一组触目惊心的数字：</div>
                            <div>世界癌症报告估计，2012年中国癌症发病人数为306.5万，约占全球发病的五分之一；癌症死亡人数为220.5万......</div>
                        </div>
                        <div class="learn-more"><a href="<?php echo $this->createUrl('event/view', array('page' => 'tumor')); ?>" target="_blank">查看详情></a></div>
                        <div class="mark-disease"></div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</section>
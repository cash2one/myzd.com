<?php
$menu = $this->getPageMenu();
$this->pageTitle = '加入我们_名医主刀';
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/joinus.css");
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
?>
<style>.ml44{margin-left:44px;}</style>
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
        <div class="container-fluid bg-gray-f7">
            <div class="row">
                <div class="container">
                    <div class="text-right" >
                        <img src="<?php echo $urlResImage ?>aboutus/header.png">
                    </div>
                    <div class="row " >
                        <div class="col-sm-5 ml44">
                            <div class="php-high-level mt55">
                                <div class="text-center"><img src="<?php echo $urlResImage ?>aboutus/php.png"><img class="pull-right count-img" src="<?php echo $urlResImage ?>aboutus/01.png">
                                    <div class="clearfix"></div>
                                    <div class="office-name mt10">PHP工程师（高级）</div>
                                </div>
                                <div class="mt10 office-divide"></div>
                                <div class="mt20 job-centent">
                                    <strong>薪资待遇：</strong>15-20K<br/>
                                    <strong>福利待遇：</strong>美国硅谷回国创业团队+五险一金+年终奖金+绩效奖金+弹性工作+餐饮补贴<br/>
                                    <strong>职位要求：</strong>全职+两年经验+本科+责任心+沟通力+合作精神<br/>
                                    <strong>职位描述：</strong>精通MVC架构+熟悉一种常用的PHP开发框架（yii框架最佳）+熟悉mySql、Apache、PHP配置+数据库优化<br/>
                                    <strong>岗位职责：</strong><br/>
                                    负责项目后台编码、设计<br/>
                                    参与数据库设计，并根据开发规范独立完成编码和测试<br/>
                                    按照项目进度、功能需求完成工作<br/>
                                    能够对于项目需求提出合理性建议<br/>
                                    编写技术文档<br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="php-high-level mt55 ml-15 mr15">
                                <div class="text-center"><img src="<?php echo $urlResImage ?>aboutus/php-x.png"><img class="pull-right count-img" src="<?php echo $urlResImage ?>aboutus/02.png">
                                    <div class="clearfix"></div>
                                    <div class="office-name mt10">PHP工程师（初级）</div>
                                </div>
                                <div class="mt10 office-divide"></div>
                                <div class="mt20 job-centent">
                                    <strong>薪资待遇：</strong>6-8K<br/>
                                    <strong>福利待遇：</strong>美国硅谷回国创业团队+五险一金+年终奖金+绩效奖金+弹性工作+餐饮补贴
                                    <br/>
                                    <strong>职位要求：</strong>全职+一年经验+本科+责任心+沟通力+合作精神
                                    <br/>
                                    <strong>职位描述：</strong>精通MVC架构+熟悉一种常用的PHP开发框架（yii框架最佳）+熟悉mySql、Apache、PHP配置<br/>
                                    <strong>岗位职责：</strong><br/>
                                    负责项目后台编码、设计<br/>
                                    参与数据库设计，并根据开发规范完成编码和测试<br/>
                                    按照项目进度、功能需求完成工作<br/>
                                    能够对于项目需求提出合理性建议<br/>
                                    编写技术文档<br/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb290">
                        <div class="col-sm-5 ml44">
                            <div class="other-level mt60">
                                <div class="text-center"><img src="<?php echo $urlResImage ?>aboutus/android.png"><img class="pull-right count-img" src="<?php echo $urlResImage ?>aboutus/02.png">
                                    <div class="clearfix"></div>
                                    <div class="office-name mt10">安卓开发工程师</div>
                                </div>
                                <div class="mt10 office-divide"></div>
                                <div class="mt20 job-centent">
                                    <strong>薪资待遇：</strong>15K<br/>
                                    <strong>福利待遇：</strong>美国硅谷回国创业团队+五险一金+年终奖金+绩效奖金+弹性工作+餐饮补贴
                                    <br/>
                                    <strong>职位要求：</strong>全职+本科及以上+责任心+沟通力+合作精神+上海
                                    <br/>
                                    <strong>职位描述：</strong></div>1.负责手机端软件产品研发；<br/>2.与产品和运营人员沟通保证产品的质量和开发进度；<br/>3.持续的优化相关的产品的质量、性能、用户体验。<br/>
                                <div class="mt10 mb10"><strong>岗位职责：</strong></div>
                                编程技术过硬，具备独立开发能力；<br/>
                                2年以上Android产品开发经验；<br/>
                                熟悉常用数据结构；<br/>
                                熟悉Android开发技术，能熟练使用相关开发及测试工具；<br/>
                                有上线APP产品者优先。<br/>
                            </div>
                        </div>
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="other-level mt60 ml-15 mr15">
                                <div class="text-center"><img src="<?php echo $urlResImage ?>aboutus/keFu.png"><img class="pull-right count-img" src="<?php echo $urlResImage ?>aboutus/02.png">
                                    <div class="clearfix"></div>
                                    <div class="office-name mt10">客服专员</div>
                                </div>
                                <div class="mt10 office-divide"></div>
                                <div class="mt20 job-centent">
                                    <strong>薪资待遇：</strong>4.5K<br/>
                                    <strong>福利待遇：</strong>美国硅谷回国创业团队+五险一金+年终奖金+绩效奖金+弹性工作+餐饮补贴<br/>
                                    <strong>职位要求：</strong>全职+大专及以上+医学及相关专业毕业者优先
                                    <br/>
                                    <strong>职位描述：</strong><br/>接听客户电话；<br/>根据客户问题提供相应的专业解答；<br/>维护客户关系，及时更新客户资料。<br/>
                                    <strong>岗位职责：</strong><br/>
                                    普通话标准，声音柔美；<br/>
                                    善于与人沟通，性格开朗，反应快。<br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
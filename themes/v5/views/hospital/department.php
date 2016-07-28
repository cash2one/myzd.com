<?php
$this->pageTitle = '国内医院排行榜,医院大全,哪家医院好,床位预约_名医主刀网';
$this->htmlMetaKeywords = '找医院,医院大全,医院排行榜';
$this->htmlMetaDescription = '名医主刀网为您提供国内医院预约手术,医院排行榜,医院大全,医院哪家好等权威信息;助您在第一时间找到好医院,以最快的时间预约医院并安排手术,网上预约手术就看名医主刀网。';
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/hospital-home.css?v=" . time());
$urlHospital = Yii::app()->params['baseUrl'];
?>
<div class="container-fluid">
    <div class="row"><img class="w100" src="http://static.mingyizhudao.com/146253255850584"></div>
</div>
<div class="container" id="hospital-home">
    <div class="row">
        <div class="col-md-6">
            <div class="department-group department-waike">
                <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 1)); ?>"><h2><div class="waike pull-left"></div></h2></a>
                <div class="recommend-content">
                    <div class="heading">精选推荐</div>
                    <div class="content mt5">
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-63-deptId-657.html"><div><h3 class="ml10">北京安贞医院</h3><h4 class="faculty-waike">心脏外科中心</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-33-deptId-699.html"><div><h3 class="ml10">上海华山医院</h3><h4 class="faculty-waike">神经外科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-20-deptId-1671.html"><div><h3 class="ml10">广东省人民医院</h3><h4 class="faculty-waike">心外科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-192-deptId-1690.html"><div><h3 class="ml10">华西医院</h3><h4 class="faculty-waike">肝胆胰外科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-4-deptId-1051.html"><div><h3 class="ml10">上海长海医院</h3><h4 class="faculty-waike">泌尿外科</h4><span class="arrow ml10">→</span></div></a></div>
                    </div>

                    <div class="look-more text-right"><a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 1)); ?>">查看更多></a></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="department-group department-guke">
                <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 13)); ?>"><h2><div class="guke pull-left"></div></h2></a>
                <div class="recommend-content">
                    <div class="heading">精选推荐</div>
                    <div class="content mt5">
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-175-deptId-1826.html"><div><h3 class="ml10">北京积水潭医院</h3><h4 class="faculty-guke">运动损伤科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-33-deptId-701.html"><div><h3 class="ml10">上海华山医院</h3><h4 class="faculty-guke">手外科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-13-deptId-943.html"><div><h3 class="ml10">北京大学第三医院</h3><h4 class="faculty-guke">骨科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-1-deptId-729.html"><div><h3 class="ml10">上海瑞金医院</h3><h4 class="faculty-guke">骨科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-159-deptId-1823.html"><div><h3 class="ml10">广州南方医院</h3><h4 class="faculty-guke">关节外科中心</h4><span class="arrow ml10">→</span></div></a></div>
                    </div>
                    <div class="look-more text-right"><a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 13)); ?>">查看更多></a></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="department-group department-fuchanke">
                <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 18)); ?>"><h2><div class="fuchanke pull-left"></div></h2></a>
                <div class="recommend-content">
                    <div class="heading">精选推荐</div>
                    <div class="content mt5">
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-11-deptId-690.html"><div ><h3 class="ml10">北京协和医院</h3><h4 class="faculty-fuchanke">妇科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-3-deptId-1035.html"><div><h3 class="ml10">上海红房子医院</h3><h4 class="faculty-fuchanke">妇科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-209-deptId-1827.html"><div><h3 class="ml10">山东大学齐鲁医院</h3><h4 class="faculty-fuchanke">妇科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-37-deptId-711.html"><div><h3 class="ml10">上海仁济医院</h3><h4 class="faculty-fuchanke">妇产科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-13-deptId-956.html"><div><h3 class="ml10">北京大学第三医院</h3><h4 class="faculty-fuchanke">生殖医学中心</h4><span class="arrow ml10">→</span></div></a></div>
                    </div>
                    <div class="look-more text-right"><a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 18)); ?>">查看更多></a></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="department-group department-xiaoerke">
                <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 21)); ?>"><h2><div class="xiaoerke pull-left"></div></h2></a>
                <div class="recommend-content">
                    <div class="heading">精选推荐</div>
                    <div class="content mt5">
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-84-deptId-680.html"><div><h3 class="ml10">北京儿童医院</h3><h4 class="faculty-xiaoerke">普通外科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-38-deptId-796.html"><div><h3 class="ml10">上海新华医院</h3><h4 class="faculty-xiaoerke">小儿外科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-60-deptId-1809.html"><div><h3 class="ml10">北京天坛医院</h3><h4 class="faculty-xiaoerke">小儿神经外科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-179-deptId-1803.html"><div><h3 class="ml10">广州市妇女儿童医疗中心</h3><h4 class="faculty-xiaoerke">小儿普通外科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-37-deptId-1619.html"><div><h3 class="ml10">上海仁济医院</h3><h4 class="faculty-xiaoerke">小儿泌尿科</h4><span class="arrow ml10">→</span></div></a></div>
                    </div>
                    <div class="look-more text-right"><a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 21)); ?>">查看更多></a></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="department-group department-wuguanke">
                <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 28)); ?>"><h2><div class="wuguanke pull-left"></div></h2></a>
                <div class="recommend-content">
                    <div class="heading">精选推荐</div>
                    <div class="content mt5">
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-14-deptId-1672.html"><div><h3 class="ml10">北京同仁医院</h3><h4 class="faculty-wuguanke">眼科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-189-deptId-1674.html"><div><h3 class="ml10">上海五官科医院</h3><h4 class="faculty-wuguanke">耳鼻喉科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-92-deptId-890.html"><div><h3 class="ml10">浙江大学附属第二医院</h3><h4 class="faculty-wuguanke">眼科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-202-deptId-1707.html"><div><h3 class="ml10">华西口腔医院</h3><h4 class="faculty-wuguanke">口腔颌面外科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-12-deptId-1771.html"><div><h3 class="ml10">解放军总医院</h3><h4 class="faculty-wuguanke">耳鼻咽喉科</h4><span class="arrow ml10">→</span></div></a></div>
                    </div>
                    <div class="look-more text-right"><a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 28)); ?>">查看更多></a></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="department-group department-neike">
                <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 31)); ?>"><h2><div class="neike pull-left"></div></h2></a>
                <div class="recommend-content">
                    <div class="heading">精选推荐</div>
                    <div class="content mt5">
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-62-deptId-693.html"><div><h3 class="ml10">北京阜外医院</h3><h4 class="faculty-neike">心血管内科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-32-deptId-1677.html"><div><h3 class="ml10">上海中山医院</h3><h4 class="faculty-neike">心内科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-63-deptId-699.html"><div><h3 class="ml10">北京安贞医院</h3><h4 class="faculty-neike">心脏内科中心</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-20-deptId-1758.html"><div><h3 class="ml10">广东省人民医院</h3><h4 class="faculty-neike">心内科</h4><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-192-deptId-1763.html"><div><h3 class="ml10">华西医院</h3><h4 class="faculty-neike">心脏内科</h4><span class="arrow ml10">→</span></div></a></div>
                    </div>
                    <div class="look-more text-right"><a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 31)); ?>">查看更多></a></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
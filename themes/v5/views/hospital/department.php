<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/hospital-home.css?v=" . time());
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
?>
<div class="container-fluid">
    <div class="row"><img class="w100" src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146253255850584"></div>
</div>
<div class="container" id="hospital-home">
    <div class="row">
        <div class="col-md-6">
            <div class="department-group department-waike">
                <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 1)); ?>"><div class="waike pull-left"></div></a>
                <div class="recommend-content">
                    <div class="heading">精选推荐</div>
                    <div class="content mt5">
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '63', 'deptId' => '657')); ?>"><div><span class="ml10">北京安贞医院</span><span class="faculty-waike">心脏外科中心</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '33', 'deptId' => '699')); ?>"><div><span class="ml10">上海华山医院</span><span class="faculty-waike">神经外科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '20', 'deptId' => '1671')); ?>"><div><span class="ml10">广东省人民医院</span><span class="faculty-waike">心外科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '192', 'deptId' => '1690')); ?>"><div><span class="ml10">华西医院</span><span class="faculty-waike">肝胆胰外科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '4', 'deptId' => '1051')); ?>"><div><span class="ml10">上海长海医院</span><span class="faculty-waike">泌尿外科</span><span class="arrow ml10">→</span></div></a></div>
                    </div>

                    <div class="look-more text-right"><a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 1)); ?>">查看更多></a></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="department-group department-guke">
                <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 13)); ?>"><div class="guke pull-left"></div></a>
                <div class="recommend-content">
                    <div class="heading">精选推荐</div>
                    <div class="content mt5">
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '175', 'deptId' => '1826')); ?>"><div><span class="ml10">北京积水潭医院</span><span class="faculty-guke">运动损伤科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '33', 'deptId' => '701')); ?>"><div><span class="ml10">上海华山医院</span><span class="faculty-guke">手外科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '13', 'deptId' => '943')); ?>"><div><span class="ml10">北京大学第三医院</span><span class="faculty-guke">骨科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '1', 'deptId' => '729')); ?>"><div><span class="ml10">上海瑞金医院</span><span class="faculty-guke">骨科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '159', 'deptId' => '1823')); ?>"><div><span class="ml10">广州南方医院</span><span class="faculty-guke">关节外科中心</span><span class="arrow ml10">→</span></div></a></div>
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
                <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 18)); ?>"><div class="fuchanke pull-left"></div></a>
                <div class="recommend-content">
                    <div class="heading">精选推荐</div>
                    <div class="content mt5">
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '11', 'deptId' => '690')); ?>"><div><span class="ml10">北京协和医院</span><span class="faculty-fuchanke">妇科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '3', 'deptId' => '1035')); ?>"><div><span class="ml10">上海红房子医院</span><span class="faculty-fuchanke">妇科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '209', 'deptId' => '1827')); ?>"><div><span class="ml10">山东大学齐鲁医院</span><span class="faculty-fuchanke">妇科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '37', 'deptId' => '711')); ?>"><div><span class="ml10">上海仁济医院</span><span class="faculty-fuchanke">妇产科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '13', 'deptId' => '956')); ?>"><div><span class="ml10">北京大学第三医院</span><span class="faculty-fuchanke">生殖医学中心</span><span class="arrow ml10">→</span></div></a></div>
                    </div>
                    <div class="look-more text-right"><a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 18)); ?>">查看更多></a></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="department-group department-xiaoerke">
                <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 21)); ?>"><div class="xiaoerke pull-left"></div></a>
                <div class="recommend-content">
                    <div class="heading">精选推荐</div>
                    <div class="content mt5">
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '84', 'deptId' => '680')); ?>"><div><span class="ml10">北京儿童医院</span><span class="faculty-xiaoerke">普通外科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '38', 'deptId' => '796')); ?>"><div><span class="ml10">上海新华医院</span><span class="faculty-xiaoerke">小儿外科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '60', 'deptId' => '1809')); ?>"><div><span class="ml10">北京天坛医院</span><span class="faculty-xiaoerke">小儿神经外科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '179', 'deptId' => '1803')); ?>"><div><span class="ml10">广州市妇女儿童医疗中心</span><span class="faculty-xiaoerke">小儿普通外科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '37', 'deptId' => '1619')); ?>"><div><span class="ml10">上海仁济医院</span><span class="faculty-xiaoerke">小儿泌尿科</span><span class="arrow ml10">→</span></div></a></div>
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
                <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 28)); ?>"><div class="wuguanke pull-left"></div></a>
                <div class="recommend-content">
                    <div class="heading">精选推荐</div>
                    <div class="content mt5">
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '14', 'deptId' => '1672')); ?>"><div><span class="ml10">北京同仁医院</span><span class="faculty-wuguanke">眼科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '189', 'deptId' => '1674')); ?>"><div><span class="ml10">上海五官科医院</span><span class="faculty-wuguanke">耳鼻喉科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '92', 'deptId' => '890')); ?>"><div><span class="ml10">浙江大学附属第二医院</span><span class="faculty-wuguanke">眼科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '202', 'deptId' => '1707')); ?>"><div><span class="ml10">华西口腔医院</span><span class="faculty-wuguanke">口腔颌面外科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '12', 'deptId' => '1771')); ?>"><div><span class="ml10">解放军总医院</span><span class="faculty-wuguanke">耳鼻咽喉科</span><span class="arrow ml10">→</span></div></a></div>
                    </div>
                    <div class="look-more text-right"><a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 28)); ?>">查看更多></a></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="department-group department-neike">
                <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 31)); ?>"><div class="neike pull-left"></div></a>
                <div class="recommend-content">
                    <div class="heading">精选推荐</div>
                    <div class="content mt5">
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '62', 'deptId' => '693')); ?>"><div><span class="ml10">北京阜外医院</span><span class="faculty-neike">心血管内科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '32', 'deptId' => '1677')); ?>"><div><span class="ml10">上海中山医院</span><span class="faculty-neike">心内科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '63', 'deptId' => '669')); ?>"><div><span class="ml10">北京安贞医院</span><span class="faculty-neike">心脏内科中心</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '20', 'deptId' => '1758')); ?>"><div><span class="ml10">广东省人民医院</span><span class="faculty-neike">心内科</span><span class="arrow ml10">→</span></div></a></div>
                        <div class="hospital-dept"><a target="_blank" href="<?php echo $this->createUrl('hospital/view', array('id' => '192', 'deptId' => '1763')); ?>"><div><span class="ml10">华西医院</span><span class="faculty-neike">心脏内科</span><span class="arrow ml10">→</span></div></a></div>
                    </div>
                    <div class="look-more text-right"><a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 31)); ?>">查看更多></a></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
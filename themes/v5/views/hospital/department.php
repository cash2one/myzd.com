<?php
$this->pageTitle = '国内医院排行榜,医院大全,哪家医院好,床位预约_名医主刀网';
$this->htmlMetaKeywords = '找医院,医院大全,医院排行榜';
$this->htmlMetaDescription = '名医主刀网为您提供国内医院预约手术,医院排行榜,医院大全,医院哪家好等权威信息;助您在第一时间找到好医院,以最快的时间预约医院并安排手术,网上预约手术就看名医主刀网。';
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/pc/hospital-home102.min.css");
$urlHospital = Yii::app()->params['baseUrl'];
?>
<div class="container-fluid">
    <div class="row"><img class="w100" src="http://static.mingyizhudao.com/146253255850584"></div>
</div>
<div class="container" id="hospital-home">
    <div class="row mt30">
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department-left mb15">
                <div class="bg-puwaike"></div>
                <div class="text-21-right">普外科</div>
            </div> 
            <div class="text-18 text-center mb10">精选推荐</div>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-11-deptId-688.html"><div class="hospital-text-14 mt5 pl10">北京协和医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-32-deptId-809.html"><div class="hospital-text-14 mt10 pl10">上海复旦大学附属中山医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-1-deptId-731.html"><div class="hospital-text-14 mt10 pl10">上海交通大学医学院附属瑞金医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-12-deptId-1769.html"><div class="hospital-text-14 mt10 pl10">中国人民解放军总医院301医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-192-deptId-1679.html"><div class="hospital-text-14 mt10 pl10">四川大学附属华西医院</div></a>
            <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 101)); ?>"><div class="learn-more">查看更多</div></a>
        </div>

        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department-left mb15">
                <div class="bg-guke"></div>
                <div class="text-21-right">骨科</div>
            </div> 
            <div class="text-18 text-center mb10">精选推荐</div>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-33-deptId-1816.html"><div class="hospital-text-14 mt5 pl10">复旦大学附属华山医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-1-deptId-729.html"><div class="hospital-text-14 mt10 pl10">上海交通大学医学院附属瑞金医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-13-deptId-943.html"><div class="hospital-text-14 mt10 pl10">北京大学第三医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-4-deptId-1048.html"><div class="hospital-text-14 mt10 pl10">第二军医大学长海医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-175-deptId-1817.html"><div class="hospital-text-14 mt10 pl10">北京积水潭医院</div></a>
            <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' =>102)); ?>"><div class="learn-more">查看更多</div></a>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department-left mb15">
                <div class="bg-shenwai"></div>
                <div class="text-21-right">神经外科</div>
            </div> 
            <div class="text-18 text-center mb10">精选推荐</div>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-60-deptId-757.html"><div class="hospital-text-14 mt5 pl10">首都医科大学附属北京天坛医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-33-deptId-699.html"><div class="hospital-text-14 mt10 pl10">复旦大学附属华山医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-192-deptId-1681.html"><div class="hospital-text-14 mt10 pl10">四川大学附属华西医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-12-deptId-1664.html"><div class="hospital-text-14 mt10 pl10">中国人民解放军总医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-173-deptId-1647.html"><div class="hospital-text-14 mt10 pl10">首都医科大学宣武医院</div></a>
            <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 103)); ?>"><div class="learn-more">查看更多</div></a>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department-left mb15">
                <div class="bg-miniaoke"></div>
                <div class="text-21-right">泌尿外科</div>
            </div> 
            <div class="text-18 text-center mb10">精选推荐</div>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-37-deptId-712.html"><div class="hospital-text-14 mt5 pl10">上海交通大学医学院附属仁济医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-99-deptId-968.html"><div class="hospital-text-14 mt10 pl10">北京大学第一医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-4-deptId-1051.html"><div class="hospital-text-14 mt10 pl10">第二军医大学长海医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-12-deptId-1726.html"><div class="hospital-text-14 mt10 pl10">中国人民解放军总医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-192-deptId-1689.html"><div class="hospital-text-14 mt10 pl10">四川大学附属华西医院</div></a>
            <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 104)); ?>"><div class="learn-more">查看更多</div></a>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department-left mb15">
                <div class="bg-xiongwaike"></div>
                <div class="text-21-right">胸外科</div>
            </div> 
            <div class="text-18 text-center mb10">精选推荐</div>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-62-deptId-696.html"><div class="hospital-text-14 mt5 pl10">中国医学科学院阜外医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-63-deptId-657.html"><div class="hospital-text-14 mt10 pl10">首都医科大学附属北京安贞医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-176-deptId-1640.html"><div class="hospital-text-14 mt10 pl10">上海儿童医学中心</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-205-deptId-1746.html"><div class="hospital-text-14 mt10 pl10">第三军医大学附属新桥医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-4-deptId-1061.html"><div class="hospital-text-14 mt10 pl10">第二军医大学长海医院</div></a>
            <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 105)); ?>"><div class="learn-more">查看更多</div></a>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department-left mb15">
                <div class="bg-yanke"></div>
                <div class="text-21-right">眼科</div>
            </div> 
            <div class="text-18 text-center mb10">精选推荐</div>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-14-deptId-1672.html"><div class="hospital-text-14 mt5 pl10">首都医科大学附属北京同仁医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-189-deptId-1675.html"><div class="hospital-text-14 mt10 pl10">复旦大学附属眼耳鼻喉科医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-100-deptId-1783.html"><div class="hospital-text-14 mt10 pl10">北京大学人民医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-11-deptId-691.html"><div class="hospital-text-14 mt10 pl10">北京协和医院医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-92-deptId-890.html"><div class="hospital-text-14 mt10 pl10">浙江大学医学院附属第二医院</div></a>
            <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' =>108)); ?>"><div class="learn-more">查看更多</div></a>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department-left mb15">
                <div class="bg-xinxueguan"></div>
                <div class="text-21-right">心血管科</div>
            </div> 
            <div class="text-18 text-center mb10">精选推荐</div>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-11-deptId-1754.html"><div class="hospital-text-14 mt5 pl10">北京协和医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-32-deptId-815.html"><div class="hospital-text-14 mt10 pl10">上海复旦大学附属中山医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-1-deptId-731.html"><div class="hospital-text-14 mt10 pl10">上海交通大学医学院附属瑞金医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-12-deptId-1756.html"><div class="hospital-text-14 mt10 pl10">中国人民解放军总医院301医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-192-deptId-1757.html"><div class="hospital-text-14 mt10 pl10">四川大学附属华西医院</div></a>
            <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 106)); ?>"><div class="learn-more">查看更多</div></a>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department-left mb15">
                <div class="bg-erbihouke"></div>
                <div class="text-21-right">耳鼻喉科</div>
            </div> 
            <div class="text-18 text-center mb10">精选推荐</div>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-189-deptId-1674.html"><div class="hospital-text-14 mt5 pl10">复旦大学附属眼耳鼻喉科医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-14-deptId-771.html"><div class="hospital-text-14 mt10 pl10">首都医科大学附属北京同仁医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-12-deptId-1771.html"><div class="hospital-text-14 mt10 pl10">中国人民解放军总医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-11-deptId-1772.html"><div class="hospital-text-14 mt10 pl10">北京协和医院医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-163-deptId-1196.html"><div class="hospital-text-14 mt10 pl10">中山大学附属第一医院</div></a>
            <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 109)); ?>"><div class="learn-more">查看更多</div></a>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department-left mb15">
                <div class="bg-zhengxingwaike"></div>
                <div class="text-21-right">整形外科</div>
            </div> 
            <div class="text-18 text-center mb10">精选推荐</div>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-45-deptId-1618.html"><div class="hospital-text-14 mt5 pl10">上海交通大学附属第九人民医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-33-deptId-1800.html"><div class="hospital-text-14 mt10 pl10">复旦大学附属华山医院</div></a>
            <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 107)); ?>"><div class="learn-more">查看更多</div></a>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department-left mb15">
                <div class="bg-hemianwaike"></div>
                <div class="text-21-right">颌面外科</div>
            </div> 
            <div class="text-18 text-center mb10">精选推荐</div>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-82-deptId-1633.html"><div class="hospital-text-14 mt5 pl10">北京大学口腔医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-202-deptId-1707.html"><div class="hospital-text-14 mt10 pl10">四川大学附属华西口腔医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-45-deptId-1778.html"><div class="hospital-text-14 mt10 pl10">上海交通大学附属第九人民医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-165-deptId-1243.html"><div class="hospital-text-14 mt10 pl10">中山大学光华口腔医学院附属口腔医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-61-deptId-1002.html"><div class="hospital-text-14 mt10 pl10">首都医科大学附属北京口腔医院</div></a>
            <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 110)); ?>"><div class="learn-more">查看更多</div></a>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department-left mb15">
                <div class="bg-fuke"></div>
                <div class="text-21-right">妇科</div>
            </div> 
            <div class="text-18 text-center mb10">精选推荐</div>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-11-deptId-690.html"><div class="hospital-text-14 mt5 pl10">北京协和医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-3-deptId-1035.html"><div class="hospital-text-14 mt10 pl10">复旦大学附属妇产科医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-94-deptId-896.html"><div class="hospital-text-14 mt10 pl10">浙江大学医学院附属妇产科医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-100-deptId-986.html"><div class="hospital-text-14 mt10 pl10">北京大学人民医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-209-deptId-1827.html"><div class="hospital-text-14 mt10 pl10">山东大学齐鲁医院</div></a>
            <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 111)); ?>"><div class="learn-more">查看更多</div></a>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department-left mb15">
                <div class="bg-xiaoerwaike"></div>
                <div class="text-21-right">小儿外科</div>
            </div> 
            <div class="text-18 text-center mb10">精选推荐</div>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-84-deptId-680.html"><div class="hospital-text-14 mt5 pl10">首都医科大学附属北京儿童医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-177-deptId-1801.html"><div class="hospital-text-14 mt10 pl10">复旦大学附属儿科医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-38-deptId-796.html"><div class="hospital-text-14 mt10 pl10">上海交通大学医学院附属新华医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-208-deptId-1802.html"><div class="hospital-text-14 mt10 pl10">重庆医科大学附属儿童医院</div></a>
            <a target="_blank" href="<?php echo $urlHospital; ?>/hospital-view-id-179-deptId-1803.html"><div class="hospital-text-14 mt10 pl10">广州市妇女儿童医疗中心</div></a>
            <a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 112)); ?>"><div class="learn-more">查看更多</div></a>
        </div>
    </div>
</div>

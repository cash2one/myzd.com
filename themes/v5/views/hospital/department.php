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
    <div class="row mt30">
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department mb15">
                <div class="bg-puwaike"></div>
                <div class="text-21-right">外科</div>
            </div> 
            <div class="text-18 text-center">精选推荐</div>
            <div class="hospital-text-14 mt5 pl10">北京协和</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海复旦大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学医学院附属瑞金医院</div>
            <div class="hospital-text-14 mt10 pl10">中国人民解放军总医院301医院</div>
            <div class="learn-more"><a target="_blank" href="<?php echo $this->createUrl('hospital/top', array('disease_sub_category' => 1)); ?>">查看更多</a></div>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department mb15">
                <div class="bg-guke"></div>
                <div class="text-21-right">骨科</div>
            </div> 
            <div class="text-18 text-center">精选推荐</div>
            <div class="hospital-text-14 mt5 pl10">北京协和</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海复旦大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学医学院附属瑞金医院</div>
            <div class="hospital-text-14 mt10 pl10">中国人民解放军总医院301医院</div>
            <div class="learn-more">查看更多</div>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department mb15">
                <div class="bg-shenwai"></div>
                <div class="text-21-right">神经外科</div>
            </div> 
            <div class="text-18 text-center">精选推荐</div>
            <div class="hospital-text-14 mt5 pl10">北京协和</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海复旦大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学医学院附属瑞金医院</div>
            <div class="hospital-text-14 mt10 pl10">中国人民解放军总医院301医院</div>
            <div class="learn-more">查看更多</div>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department mb15">
                <div class="bg-miniaoke"></div>
                <div class="text-21-right">泌尿外科</div>
            </div> 
            <div class="text-18 text-center">精选推荐</div>
            <div class="hospital-text-14 mt5 pl10">北京协和</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海复旦大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学医学院附属瑞金医院</div>
            <div class="hospital-text-14 mt10 pl10">中国人民解放军总医院301医院</div>
            <div class="learn-more">查看更多</div>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department mb15">
                <div class="bg-xiongwaike"></div>
                <div class="text-21-right">胸外科</div>
            </div> 
            <div class="text-18 text-center">精选推荐</div>
            <div class="hospital-text-14 mt5 pl10">北京协和</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海复旦大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学医学院附属瑞金医院</div>
            <div class="hospital-text-14 mt10 pl10">中国人民解放军总医院301医院</div>
            <div class="learn-more">查看更多</div>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department mb15">
                <div class="bg-yanke"></div>
                <div class="text-21-right">眼科</div>
            </div> 
            <div class="text-18 text-center">精选推荐</div>
            <div class="hospital-text-14 mt5 pl10">北京协和</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海复旦大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学医学院附属瑞金医院</div>
            <div class="hospital-text-14 mt10 pl10">中国人民解放军总医院301医院</div>
            <div class="learn-more">查看更多</div>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department mb15">
                <div class="bg-xinxueguan"></div>
                <div class="text-21-right">心血管科</div>
            </div> 
            <div class="text-18 text-center">精选推荐</div>
            <div class="hospital-text-14 mt5 pl10">北京协和</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海复旦大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学医学院附属瑞金医院</div>
            <div class="hospital-text-14 mt10 pl10">中国人民解放军总医院301医院</div>
            <div class="learn-more">查看更多</div>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department mb15">
                <div class="bg-erbihouke"></div>
                <div class="text-21-right">耳鼻喉科</div>
            </div> 
            <div class="text-18 text-center">精选推荐</div>
            <div class="hospital-text-14 mt5 pl10">北京协和</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海复旦大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学医学院附属瑞金医院</div>
            <div class="hospital-text-14 mt10 pl10">中国人民解放军总医院301医院</div>
            <div class="learn-more">查看更多</div>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department mb15">
                <div class="bg-zhengxingwaike"></div>
                <div class="text-21-right">整形外科</div>
            </div> 
            <div class="text-18 text-center">精选推荐</div>
            <div class="hospital-text-14 mt5 pl10">北京协和</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海复旦大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学医学院附属瑞金医院</div>
            <div class="hospital-text-14 mt10 pl10">中国人民解放军总医院301医院</div>
            <div class="learn-more">查看更多</div>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department mb15">
                <div class="bg-hemianwaike"></div>
                <div class="text-21-right">颌面外科</div>
            </div> 
            <div class="text-18 text-center">精选推荐</div>
            <div class="hospital-text-14 mt5 pl10">北京协和</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海复旦大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学医学院附属瑞金医院</div>
            <div class="hospital-text-14 mt10 pl10">中国人民解放军总医院301医院</div>
            <div class="learn-more">查看更多</div>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department mb15">
                <div class="bg-fuke"></div>
                <div class="text-21-right">妇科</div>
            </div> 
            <div class="text-18 text-center">精选推荐</div>
            <div class="hospital-text-14 mt5 pl10">北京协和</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海复旦大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学医学院附属瑞金医院</div>
            <div class="hospital-text-14 mt10 pl10">中国人民解放军总医院301医院</div>
            <div class="learn-more">查看更多</div>
        </div>
        <div class="col-sm-3 department-border mr20 mt20">
            <div class="bg-department mb15">
                <div class="bg-xiaoerwaike"></div>
                <div class="text-21-right">小儿外科</div>
            </div> 
            <div class="text-18 text-center">精选推荐</div>
            <div class="hospital-text-14 mt5 pl10">北京协和</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海复旦大学附属中山医院</div>
            <div class="hospital-text-14 mt10 pl10">上海交通大学医学院附属瑞金医院</div>
            <div class="hospital-text-14 mt10 pl10">中国人民解放军总医院301医院</div>
            <div class="learn-more">查看更多</div>
        </div>
    </div>
</div>
<style>
    .department-border{border:2px solid #f7f7f7;height:135px;padding:0px;height:380px;width:280px;}
    .text-18{font-size: 18px;color:#333;}
    .bg-department{background-color: #f7f7f7;height:135px;width:100%; padding-top:35px;padding-left: 30px;float: left}
    .text-21-right{font-size: 21px;color:#555;margin-top: -60px;margin-left: 120px;}
    .bg-puwaike{height:100px;width:100px;background: url(http://static.mingyizhudao.com/147193282490942) no-repeat;background-position:0 0;margin-top: -20px;}
    .bg-guke{height:100px;width:100px;background: url(http://static.mingyizhudao.com/147193282490942) no-repeat;background-position:-100px 0;margin-top: -20px;}
    .bg-shenwai{height:100px;width:100px;background: url(http://static.mingyizhudao.com/147193282490942) no-repeat;background-position:-200px 0;margin-top: -20px;}
    .bg-miniaoke{height:100px;width:100px;background: url(http://static.mingyizhudao.com/147193282490942) no-repeat;background-position:-300px 0;margin-top: -20px;}
    .bg-xiongwaike{height:100px;width:100px;background: url(http://static.mingyizhudao.com/147193282490942) no-repeat;background-position:-400px 0;margin-top: -20px;}
    .bg-yanke{height:100px;width:100px;background: url(http://static.mingyizhudao.com/147193282490942) no-repeat;background-position:-500px 0;margin-top: -20px;}
    .bg-xinxueguan{height:100px;width:100px;background: url(http://static.mingyizhudao.com/147193282490942) no-repeat;background-position:-600px 0;margin-top: -20px;}
    .bg-erbihouke{height:100px;width:100px;background: url(http://static.mingyizhudao.com/147193282490942) no-repeat;background-position:-700px 0;margin-top: -20px;}
    .bg-zhengxingwaike{height:100px;width:100px;background: url(http://static.mingyizhudao.com/147193282490942) no-repeat;background-position:-800px 0;margin-top: -20px;}
    .bg-hemianwaike{height:100px;width:100px;background: url(http://static.mingyizhudao.com/147193282490942) no-repeat;background-position:-900px 0;margin-top: -20px;}
    .bg-fuke{height:100px;width:100px;background: url(http://static.mingyizhudao.com/147193282490942) no-repeat;background-position:-1000px 0;margin-top: -20px;}
    .bg-xiaoerwaike{height:100px;width:100px;background: url(http://static.mingyizhudao.com/147193282490942) no-repeat;background-position:-1100px 0;margin-top: -20px;}
    
    .learn-more{ font-size: 14px;position:absolute;right:20px;bottom:15px;color:#036eb8}
    .learn-more:hover{text-decoration:underline;cursor:pointer}
    .hospital-text-14:hover{color:#5ebfb8;cursor:pointer}
</style>
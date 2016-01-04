<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/doctor.css">
<style>
    .nav-pageheader>li{width:14%;}
   /* .nav-pageheader>li{width:16.5%;}*/
</style>
<div class="row">
    <?php $menu = $this->loadDiseaseMenu(); ?>
    <div class="bg-green clearfix hidden-xs">
        <div class="container page-container">
            <ul class="nav nav-tabs nav-pageheader noborder">
                <?php
                foreach ($menu as $menuItem) {
                    if ($menuItem['active']) {
                        echo '<li class="' . $menuItem['key'] . ' active"><a href="' . $menuItem['link'] . '">' . $menuItem['label'] . '</a></li>';
                    } else {
                        echo '<li class="' . $menuItem['key'] . '"><a href="' . $menuItem['link'] . '">' . $menuItem['label'] . '</a></li>';
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="row visible-xs">

        <div class="btn-group block">
            <button type="button" class="btn btn-default btn-success btn-lg btn-block dropdown-toggle" data-toggle="dropdown">
                <?php echo $this->getCurrentDiseaseLabel(); ?> <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-mobile" role="menu" style="width:100%;">
                <?php
                foreach ($menu as $menuItem) {
                    if ($menuItem['active']) {
                        echo '<li class="' . $menuItem['key'] . ' selected active"><a href="' . $menuItem['link'] . '">' . $menuItem['label'] . '</a></li>';
                    } else {
                        echo '<li class="' . $menuItem['key'] . '"><a href="' . $menuItem['link'] . '">' . $menuItem['label'] . '</a></li>';
                    }
                }
                ?>
            </ul>
        </div>
    </div>

    <?php $this->renderPartial('disease/' . $this->disease); ?>
</div>


<!-- Hospital -->
<div id="hospital-search-result" class="container page-container border clearfix">
    <h3 class="heading">医院</h3>
    <div class="divider"></div>
    <div class="row hospital">	
        <div class="col-sm-3 cell cell-l">		
            <div class="cell-inner">
                <div class="name text-primary">上海长海医院</div>
                <div class="h4">三级甲等&nbsp;综合医院</div> 
            </div>
        </div>
        <div class="col-sm-9 cell cell-r">
            <div class="cell-inner noborder passage">
                创建于1949年,是一所集医疗教学科研为一体的现代化大型综合性医院。
                1993年首批评为三级甲等医院，1998年荣膺全国百佳医院称号，连续13届获上海市“文明单位”称号。
                <br>重点科室: 神经外科, 消化内科, 血液内科, 泌尿外科,整形外科, 风湿免疫科等。
            </div>
        </div>
    </div>

    <div class="row hospital">	
        <div class="col-sm-3 cell cell-l">		
            <div class="cell-inner">
                <div class="name text-primary">复旦大学附属肿瘤医院</div>
                <div class="h4">三级甲等&nbsp;肿瘤医院</div> 
            </div>
        </div>
        <div class="col-sm-9 cell cell-r">
            <div class="cell-inner noborder passage">
                复旦大学附属肿瘤医院是国家卫生和计划生育委员会预算管理单位，是复旦大学附属医院和上海市红十字医院，是一所集医疗、教学、科研、预防为一体的三级甲等肿瘤专科医院，
                其前身是中比镭锭治疗院，于1931年3月1日正式成立，是中国成立最早的肿瘤专科医院。
                <br>复旦大学附属肿瘤医院是国家卫生和计划生育委员会预算管理单位重点科室: 头颈外科、乳腺外科、胸外科、胃及软组织外科、大肠外科、泌尿外科、妇科、肿瘤内科、放射治疗中心、中西医结合科、胰腺肝胆外科、综合治疗科、介入治疗科。
            </div>
        </div>
    </div>
</div>



<!-- first result -->
<section id="doctor-search-result" class="container page-container clearfix border">
    <?php //$this->renderPartial('searchResult', array('dataProvider' => $dataProvider)); ?>
    <?php
    $this->renderPartial('searchResult', array('models' => $listDoctor));
    ?>
</section>
<script>
    $(document).ready(function(){
        /*
        var urlSearchDoctor ="<?php echo $this->createUrl('doctor/search'); ?>";
        var queryParams=<?php echo json_encode($queryParams); ?>;
        queryParams.ajax=1;
        
        $("#search-filter .filter-option .nav>li>a").click(function(e){
            e.preventDefault();
            var parent = $(this).parents('.filter-option');
            
            parent.find('li.active').removeClass('active');
            $(this).parent('li').addClass('active');
            
            var dataField = parent.attr('data-field');
            if(dataField=='city'){
                queryParams.city=$(this).attr('data-value');
            }else if(dataField=='title'){
                queryParams.title=$(this).attr('data-value');
            }else if(dataField=='category'){
                queryParams.category=$(this).attr('data-value');
            }
            
            url = urlSearchDoctor+'?'+$.param(queryParams);
            updateSearchResult(url);
            
        });

        
        function updateSearchResult(actionUrl){  
            $("#doctor-search-result").html('<div class="spinner"></div>');
            //    console.log(actionUrl);
            $.ajax({
                type: 'GET',
                url: actionUrl,
                success: function(data) {
                    //update content.
                    $("#doctor-search-result").html(data);
                },
                error: function(data) { // if error occured
                    showModalAlert("错误",data);
                },
                dataType: 'html'
            });
        }
        
         */
    });
</script>
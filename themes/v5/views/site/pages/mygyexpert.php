<?php
Yii::app()->clientScript->registerScriptFile('http://static.mingyizhudao.com/pc/mygy100.min.js', CClientScript::POS_END);
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlCommonwealDoctors = $this->createUrl('api/commonwealdoctors');
$urlDoctorView = $this->createUrl('doctor/view');
Yii::app()->clientScript->registerCssFile('http://static.mingyizhudao.com/mygy100.min.css');
$this->checkVendor(AppLog::SITE_MYGY);
?>
<section id="mygyexpert">
    <div class="container-fluid bg-green">
        <div class="row">
            <div class="container">
                <div class="crumbs-mygy">
                    <div><a href="<?php echo $this->createUrl('site/page', array('view' => 'mygy')); ?>" target="_blank">公益手术</a>&gt;名医手术</div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-mygyexpert">
        <div class="container">
            <div class="mt30"><span class="depttitle">科室：</span><span class="ml10 dept active" data-dept="group0">骨科</span><span class="ml10 dept" data-dept="group1">外科</span><span class="ml10 dept" data-dept="group2">五官科</span><span class="ml10 dept" data-dept="group3">小儿外科</span></div>
            <div class="mygyexpert"></div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        var urlLoadCommonwealDoctors = '<?php echo $urlCommonwealDoctors; ?>';
        var urlDoctorView = '<?php echo $urlDoctorView; ?>';
        ajaxExpLoadCommonwealDoctors(urlLoadCommonwealDoctors, urlDoctorView);
    });   
</script>

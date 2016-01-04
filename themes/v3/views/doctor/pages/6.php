
<style>
.col-left .list-group-item{border-radius:0;}
.col-left .heading{background-color:#eee;}
.col-left .l,.col-left .r{padding:4px;vertical-align:top;}
.col-left .l{display:inline-block;width:90px;font-weight:bold;}
.col-left .r{display:inline-block;width:170px;}

#cover{position:relative;height:262px;padding-top:131px;background-image:url("../themes/v1/images/demo/doctor/banner.jpg");background-repeat:no-repeat;background-size:cover;}
#cover .title{position:absolute;top:20px;padding-left:40px;}
#cover .avatar{xposition:absolute;bottom:0;width:100%;height:136px;padding-top:10px;padding-left:30px;background-color:#eee;}
#cover .avatar .media-list{}
#cover .avatar .media{}
#cover .avatar .media .media-object{position:absolute; top:85px;width:140px;border:1px solid #fff;}
#cover .avatar .media-body{margin-left:20px;padding-left:140px;}
#cover .verify{float:right;margin-top:-32px;padding:6px 10px;color:#fff;background-color:rgba(0,0,0,0.4);}
</style>		
<?php
$urlDP = $this->createUrl('doctor/loadAvatar', array('uid' => $model->getDoctorAvatar()->getUID()));
?>
<!-- Content -->

    <div id="cover">
		
		<span class="verify pull-right"> 本站已经通过实名认证，所有内容由朱慧芬医生本人发表</span>
		<div class="avatar">
			<ul class="media-list">
				<li class="media">
					<img class="media-object pull-left" src="<?php echo $urlDP;?>" alt="">
					<div class="media-body">
						<h3 class="media-heading"><span>朱慧芬&nbsp;&nbsp;正主任&nbsp;&nbsp;</span>
						<span class="pull-right" style="width:200px;"><a class="btn btn-success btn-createcase btn-lg btn-block" href="">上传病历</a></span>
						</h3>
						<div class="mt5"><a>安徽省安庆市立医院</a>&nbsp;&nbsp;<a>妇科</a></div>
					</div>
					
				</li>				
			</ul>
			
    	</div>
		
    </div>
    
    <div class="row" >
    	<div class="col-sm-4 col-left mt20">
			<div>
				<ul class="list-group">
					<li class="list-group-item heading">
						<div class="h4">专家信息：</div>
					</li>
					<li class="list-group-item">
						<span class="l">职称：</span>
						<span class="r">正主任</span>
					</li>
					<li class="list-group-item">
						<span class="l">科室：</span>
						<span class="r">安徽省安庆市立医院 妇科</span>
					</li>
					<li class="list-group-item">
						<span class="l">工作年限：</span>
						<span class="r">31年</span>
					</li>
					
					
				</ul>
			</div>
    	</div>
		
    	<div class="col-sm-8 passage" >
    	
    	<div class="linex">
    		<h3 class="inline-block" style="background: white; padding-right:10px;">
    		专长领域
    		</h3>
    	</div>
  				<p class="mt10" style="border-left: 1px solid #d3d3d3;padding-left: 15px;padding-bottom: 10px;border-bottom: 1px solid #d3d3d3;">
  					擅长妇科肿瘤的手术和化疗、妇科微创手术：阴式子宫切除术、阴式卵巢良性肿瘤切除术、宫腔镜手术、腹腔镜手术及阴道成形术、尿瘘修补术。1996年率先开展妇癌的手术和化疗及更年期妇女激素替代治疗；1999年参加安徽省卫生厅援外专家医疗队，赴也门工作两年并受该国省卫生厅的表彰；
						2006年率先开展晚期卵巢癌卷地毯式子宫切除+卵巢肿瘤切除+盆腹腔淋巴结清扫术；2007年成功治疗一例五胞胎孕妇。
  				</p>
  				<div class="mt20 row">
  				
  				<div class="col-sm-10">
  					<div class="row">
  					<div class="col-sm-4 mt10">
  						<button class="btn btn-success btn-createcase btn-block btn-lg">上传病历</button>
  					</div>
  					<div class="col-sm-4 mt10">
  						<button class="btn btn-info disabled btn-block btn-lg">电话咨询</button>
  					</div>
  					<div class="col-sm-4 mt10">
  						<button class="btn btn-primary disabled btn-block btn-lg">网上咨询</button>
  					</div>
  					</div>
  				</div>
  				</div>
    	</div>
    	<div class="clearfix">
    	</div>
    </div>


	
<script>
$(document).ready(function(){	
	var urlDoctor = "<?php echo $this->createAbsoluteUrl('medicalRecord/create',array('did'=>$id));?>";
	$(".btn-createcase").click(function(e){
		e.preventDefault();
		window.location=urlDoctor;
	});
	
});
</script>

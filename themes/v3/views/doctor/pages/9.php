

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
		
		<span class="verify pull-right"> 本站已经通过实名认证，所有内容由柳昔敖医生本人发表</span>
		<div class="avatar">
			<ul class="media-list">
				<li class="media">
					<img class="media-object pull-left" src="<?php echo $urlDP;?>" alt="">
					<div class="media-body">
						<h3 class="media-heading"><span>柳昔敖&nbsp;&nbsp;正高主任&nbsp;&nbsp;</span>
						<span class="pull-right" style="width:200px;"><a class="btn btn-success btn-createcase btn-lg btn-block" href="">上传病历</a></span>
						</h3>
						<div class="mt5"><a>安徽省安庆市立医院</a>&nbsp;&nbsp;<a>内科 肿瘤</a></div>
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
						<span class="r">正高主任</span>
					</li>
					<li class="list-group-item">
						<span class="l">科室：</span>
						<span class="r">安徽省安庆市立医院 内科 肿瘤科</span>
					</li>
					<li class="list-group-item">
						<span class="l">工作年限：</span>
						<span class="r">32年</span>
					</li>
					<li class="list-group-item">
						<span class="l">工作经历：</span>
						<span class="r">肾内科主任医师、科副主任、安医大兼职教授， 长期从事内科临床工作30余年，有着丰富的临床理论知识与实践经验。</span>
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
  					擅长肾脏内科疾病的诊治，尤其对急慢性肾小球肾炎、肾病综合征、急慢性肾功能衰竭、狼疮性肾炎、紫癜性肾炎、ZgA肾病、痛风性肾病、
  					糖尿病肾病和缺血性肾病、风湿性疾病相关性肾损害、尿路感染等疾病有系统的诊治经验。
  					对尿彩中西结合的治疗方法有独特的疗效。对血液透析、血液灌流、 血液灌流滤过腹膜透析等治疗技术有较深的研究。熟练掌握，肾内科各科穿刺性操作技术。
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



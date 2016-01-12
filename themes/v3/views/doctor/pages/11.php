

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
	
		<span class="verify pull-right"> 本站已经通过实名认证，所有内容由何涛医生本人发表</span>
		<div class="avatar">
			<ul class="media-list">
				<li class="media">
					<img class="media-object pull-left" src="<?php echo $urlDP;?>" alt="">
					<div class="media-body">
						<h3 class="media-heading"><span>何涛&nbsp;&nbsp;主任医师&nbsp;&nbsp;副教授</span>
						<span class="pull-right" style="width:200px;"><a class="btn btn-success btn-createcase btn-lg btn-block" href="">上传病历</a></span>
						</h3>
						<div class="mt5"><a>广西医科大学</a>&nbsp;&nbsp;<a>心电诊断科</a></div>
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
						<span class="r">主任医师</span>
					</li>
					<li class="list-group-item">
						<span class="l">科室：</span>
						<span class="r">广西医科大学 心电诊断科</span>
					</li>
					<li class="list-group-item">
						<span class="l">擅长：</span>
						<span class="r">心电诊断</span>
					</li>
					
				</ul>
			</div>
    	</div>
		
    	<div class="col-sm-8 passage" >
    	
    	<div class="linex">
    		<h3 class="inline-block" style="background: white; padding-right:10px;">
    		获奖情况
    		</h3>
    	</div>
  				<p class="mt10" style="border-left: 1px solid #d3d3d3;padding-left: 15px;padding-bottom: 10px;border-bottom: 1px solid #d3d3d3;">
  					何涛，副教授，硕士生导师。广西医科大学第一附属医院心电诊断科科主任，广西医学会心电学专科分会副主任委员。
  					1986年9月至1992年7月在华西医科大学攻读六年制本科临床医学专业，获医学学士学位；2004年9月至2007年7月在广西医科大学就读全日制硕士研究生内科学专业，
  					获医学硕士学位。1992年8月大学本科毕业至今一直在广西医科大学第一附属医院心电诊断科从事临床、教学及科研工作。
  					作为课题负责人承担广西自然科学基金课题及广西卫生厅自筹课题；曾获广西科技进步三等奖1项；
  					曾被评为“2011-2012学年度广西医科大学最受欢迎的老师”。
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

 

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
		
		<span class="verify pull-right"> 本站已经通过实名认证，所有内容由何宏勋医生本人发表</span>
		<div class="avatar">
			<ul class="media-list">
				<li class="media">
					<img class="media-object pull-left" src="<?php echo $urlDP;?>" alt="">
					<div class="media-body">
						<h3 class="media-heading"><span>何宏勋&nbsp;&nbsp;正高主任&nbsp;&nbsp;</span>
						<span class="pull-right" style="width:200px;"><a class="btn btn-success btn-createcase btn-lg btn-block" href="">上传病历</a></span>
						</h3>
						<div class="mt5"><a>安徽省安庆市立医院</a>&nbsp;&nbsp;<a>儿科</a></div>
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
						<span class="r">安徽省安庆市立医院 儿科</span>
					</li>
					<li class="list-group-item">
						<span class="l">工作年限：</span>
						<span class="r">23年</span>
					</li>
					<li class="list-group-item">
						<span class="l">擅长：</span>
						<span class="r">毕业后长期从事儿科临床工作，有着深厚的理论基础和丰富的临床经验，尤其擅长儿科呼吸、哮喘、长期咳嗽、肺炎、支气管炎、呼吸道感染和消化系统、营养代谢、先天性甲状腺机能低下、矮小症、癫痫等疾病的诊治；对儿童危重症、疑难杂症的诊治也有着独特的见解。</span>
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
  					发表论文30余篇，先后获得安徽省优秀科技论文一等奖1篇、安庆市优秀科技论文一等奖1篇，二等奖2篇，三等奖1篇。获得安庆市科学技术二等奖2项，三等奖1项，领衔中华预防医学会安庆片区科研项目1项。先后入编安庆市高级人才库，安庆市医疗事故鉴定专家库等。
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


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
		
		<span class="verify pull-right"> 本站已经通过实名认证，所有内容由韩久怀医生本人发表</span>
		<div class="avatar">
			<ul class="media-list">
				<li class="media">
					<img class="media-object pull-left" src="<?php echo $urlDP;?>" alt="">
					<div class="media-body">
						<h3 class="media-heading"><span>韩久怀&nbsp;&nbsp;正主任医师&nbsp;&nbsp;</span>
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
						<span class="r">主任医师</span>
					</li>
					<li class="list-group-item">
						<span class="l">科室：</span>
						<span class="r">安徽省安庆市立医院 内科</span>
					</li>
					<li class="list-group-item">
						<span class="l">工作年限：</span>
						<span class="r">26年</span>
					</li>
					<li class="list-group-item">
						<span class="l">擅长：</span>
						<span class="r">肾脏内科疾病诊治，血液净化技术：包括血液 透析、腹膜透析、CRRT、血液灌流等，血管通路建立，包括长期导管置入。</span>
					</li>
					
				</ul>
			</div>
    	</div>
		
    	<div class="col-sm-8 passage" >
    	
    	<div class="linex">
    		<h3 class="inline-block" style="background: white; padding-right:10px;">
    		工作经历
    		</h3>
    	</div>
  				<p class="mt10" style="border-left: 1px solid #d3d3d3;padding-left: 15px;padding-bottom: 10px;border-bottom: 1px solid #d3d3d3;">
  					从事内科、肾内科临床工作20年，具有丰富的临床理论与实践知识，主治各种原发性和继发性肾小球疾病、肾间质及肾血管疾病，
  					在本地区率先开展腹膜透析、肾穿刺、颈内静脉永久性置管技术，获安庆市科技进步奖一项（B超定位下单人操作肾活检技术），
  					擅长各种血液净化技术及临时性和永久性血管通路的建立及制作，其中钛轮钉制作动静脉内瘘技术处省内领先地位；
  					先后荣获医院2009年度、2012年度优秀科主任称号。
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

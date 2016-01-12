

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
		
		<span class="verify pull-right"> 本站已经通过实名认证，所有内容由梁季鸿医生本人发表</span>
		<div class="avatar">
			<ul class="media-list">
				<li class="media">
					<img class="media-object pull-left" src="<?php echo $urlDP;?>" alt="">
					<div class="media-body">
						<h3 class="media-heading"><span>梁季鸿&nbsp;&nbsp;主任医师&nbsp;&nbsp;博士生</span>
						<span class="pull-right" style="width:200px;"><a class="btn btn-success btn-createcase btn-lg btn-block" href="">上传病历</a></span>
						</h3>
						<div class="mt5"><a>广西医科大学第一附院</a>&nbsp;&nbsp;<a>妇科 不孕不育</a></div>
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
						<span class="r">广西医科大学第一附院 妇科</span>
					</li>
					<li class="list-group-item">
						<span class="l">工作年限：</span>
						<span class="r">14年</span>
					</li>
					<li class="list-group-item">
						<span class="l">擅长：</span>
						<span class="r">妇科 不孕不育</span>
					</li>
					<li class="list-group-item">
						<span class="l">教育经历：</span>
						<span class="r">
							<ul style="padding-left:15px;">
							<li>1979~1984 广州中山医科大学医学系 本科</li>
							<li>1995~1998 日本国立感染症研究所 研究员</li>
							<li>1998~2001 日本国立东京大学农学和生命科学研究生院 博士</li>
							</ul>
						</span>
					</li>
					<li class="list-group-item">
						<span class="l">工作经历：</span>
						<span class="r">
							<ul style="padding-left:15px;">
							<li>2001~2008 广西医科大学第一附院</li>
							</ul>
						</span>
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
  					广西医科大学一附院男性学科（男科和性学科）主任，教授，主任医师，广西医科大学内科学教授、硕士生导师。
  					中华医学会男科学分会全国委员，广西男科学会主任委员，中华医学会广西分会理事，广西性学会副会长，
  					大学生性健康教育中心首席顾问。广西青年科技奖获得者，广西“新世纪十百千人才工程”入选人物。
  					科研获广西科技进步二等奖和广西医药科技进步二等奖。是广西男性学科的带头人和广西男科学会主要创始人，
  					在国内外男性学科领域有一定学术影响。84年广州中山医科大学毕业后分配到广西医科大学工作，
  					88年开始从事男性学工作，95起获日本HS财团奖学金赴日本国立感染症研究所，任协力研究员，
  					01年获日本东京大学博士学位后回国，主持建立广西医科大学一附院男性学科，专业人员从1发展到目前10人，
  					学科背景和素质结构合理。目前男性学科建设、设备、门诊量以及开展的项目等处于国内先进行列。
  					临床科研工作之余，特别热衷于公益事业，积极开展性和健康教育工作，编写各种教案，
  					先后向大学生以及社会各界开展公益讲座130多场次，直接受益者达五万人以上，受到社会各界的欢迎.
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

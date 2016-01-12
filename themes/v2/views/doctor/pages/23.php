
<style>
.col-left .list-group-item{border-radius:0;}
.col-left .heading{background-color:#eee;}
.col-left .l,.col-left .r{padding:4px;vertical-align:top;}
.col-left .l{display:inline-block;min-width:90px;font-weight:bold;}
.col-left .r{display:inline-block;min-width:170px;}

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
    <div id="cover">
		
		<span class="verify pull-right"> 本站已经通过实名认证，所有内容由陈进宏医生本人发表</span>
		<div class="avatar">
			<ul class="media-list">
				<li class="media">
					<img class="media-object pull-left" src="<?php echo $urlDP;?>" alt="">
					<div class="media-body">
						<h3 class="media-heading"><span>陈进宏&nbsp;&nbsp;主任医师&nbsp;&nbsp;博士生</span>
						<span class="pull-right" style="width:200px;"><a class="btn btn-success btn-createcase btn-lg btn-block" href="">上传病历</a></span>
						</h3>
						<div class="mt5"><a>复旦大学附属华山医院</a>&nbsp;&nbsp;<a>肝胆胰外科</a></div>
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
						<span class="r">复旦大学附属华山医院 肝胆胰外科</span>
					</li>
					<li class="list-group-item">
						<span class="l">擅长：</span>
						<span class="r">肝胆外科疾病的诊治、擅长腹腔镜手术、对原发性肝癌、转移性肝癌、肝脏良性肿瘤、
						胆囊及胆管肿瘤、胆囊结石及肝内外胆管结石、门静脉高压脾功能亢进等疾病、胃肠道肿瘤，甲状腺等外科疾病</span>
					</li>
					
				</ul>
			</div>
    	</div>
		
    	<div class="col-sm-8 passage" >
    	
    	<div class="linex">
    		<h3 class="inline-block" style="background: white; padding-right:10px;">
    		个人简介
    		</h3>
    	</div>
  				<p class="mt10" style="border-left: 1px solid #d3d3d3;padding-left: 15px;padding-bottom: 10px;border-bottom: 1px solid #d3d3d3;">
  					复旦大学附属华山医院外科教授，主任医师，博士生导师，医学博士。分别于2011年在美国Cleveland Clinic，2012年在美国Duke University Hospital从事访问学者工作。
  					主要从事肝胆外科疾病的诊治，擅长腹腔镜手术。对原发性肝癌、转移性肝癌、肝脏良性肿瘤、胆囊及胆管肿瘤、胆囊结石及肝内外胆管结石、
  					门静脉高压脾功能亢进等疾病具有丰富的诊治经验，其中腹腔镜肝切除术每年约100例，位列全国前茅。对胃肠道肿瘤，甲状腺等外科疾病有相当的诊治经验。
  					<br>担任国家自然科学基金评审专家，上海市医学会外科青年学组委员，中西医结合学会上海市外科委员，
						Saudi Journal of Gastroenterology和Organic Chemistry杂志的审稿人，《世界华人消化杂志》、
						《上海医药》等杂志编委。
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


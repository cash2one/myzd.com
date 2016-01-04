
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
		
		<span class="verify pull-right"> 本站已经通过实名认证，所有内容由冯波医生本人发表</span>
		<div class="avatar">
			<ul class="media-list">
				<li class="media">
					<img class="media-object pull-left" src="<?php echo $urlDP;?>" alt="">
					<div class="media-body">
						<h3 class="media-heading"><span>冯波&nbsp;&nbsp;副主任医师&nbsp;&nbsp;博士生</span>
						<span class="pull-right" style="width:200px;"><a class="btn btn-success btn-createcase btn-lg btn-block" href="">上传病历</a></span>
						</h3>
						<div class="mt5"><a>上海交通大学附属瑞金医院</a>&nbsp;&nbsp;<a>普外科</a></div>
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
						<span class="r">副主任医师</span>
					</li>
					<li class="list-group-item">
						<span class="l">科室：</span>
						<span class="r">上海交通大学附属瑞金医院 普外科</span>
					</li>
					<li class="list-group-item">
						<span class="l">擅长：</span>
						<span class="r">胃肠肿瘤腹腔镜手术，胆囊、疝、甲状腺手术，纤维结肠镜治疗，纤维结肠镜治疗。</span>
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
  					毕业于上海交通大学医学院，任瑞金医院普外科、上海市微创外科临床医学中心副主任医师，硕士研究生导师。任中国医师协会外科医师分会结直肠外科医师委员会委员，
  					中国抗癌协会大肠癌专业委员会腹腔镜学组委员兼秘书，中国抗癌协会大肠癌专业委员会青年委员，海峡两岸医药卫生交流协会肿瘤防治专家委员会胃肿瘤专业学组委员，
  					上海市医学会外科分会微创外科学组秘书，《中华结直肠疾病电子杂志》通讯编委。
  					<br>个人发明专利2项。2009赴美国Cornell大学医学院附属 New York Presbyterian 医院结直肠外科任访问学者。
						任国家863项目联系人。独立承担国家自然科学基金项目、上海市卫生局重点项目与上海市科委重点项目。
						获教育部科技进步一等奖，上海市科技进步一等奖，上海市医学科技奖一等奖以及中华医学奖二等奖（第三完成人），
						上海交通大学九龙奖。
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


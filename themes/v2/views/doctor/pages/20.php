
<style>
.col-left .list-group-item{border-radius:0;}
.col-left .heading{background-color:#eee;}
.col-left .l,.col-left .r{padding:4px;vertical-align:top;}
.col-left .l{display:inline-block;width:90px;font-weight:bold;}
.col-left .r{display:inline-block;width:170px;}

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
		
		<span class="verify pull-right"> 本站已经通过实名认证，所有内容由袁振刚医生本人发表</span>
		<div class="avatar">
			<ul class="media-list">
				<li class="media">
					<img class="media-object pull-left" src="<?php echo $urlDP; ?>" alt="">
					<div class="media-body">
						<h3 class="media-heading"><span>袁振刚&nbsp;&nbsp;副主任医师&nbsp;&nbsp;博士生</span>
						<span class="pull-right" style="width:200px;"><a class="btn btn-success btn-createcase btn-lg btn-block" href="">上传病历</a></span>
						</h3>
						<div class="mt5"><a>东方肝胆外科医院</a>&nbsp;&nbsp;<a>生物治疗科</a></div>
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
						<span class="r">东方肝胆外科医院 生物治疗科</span>
					</li>
					<li class="list-group-item">
						<span class="l">工作年限：</span>
						<span class="r">20年</span>
					</li>
					<li class="list-group-item">
						<span class="l">擅长：</span>
						<span class="r">实体肿瘤的细胞免疫治疗</span>
					</li>
					<li class="list-group-item">
						<span class="l">教育经历：</span>
						<span class="r">
							<ul style="padding-left:15px;">
							<li>1990~1995 第二军医大学 本科</li>
							<li>1998~2001 第二军医大学 硕士</li>
							<li>2003年 德国弗莱格 实体肿瘤的细胞免疫治疗</li>
							<li>2004~2007 第二军医大学 博士</li>
							</ul>
						</span>
					</li>
					<li class="list-group-item">
						<span class="l">工作经历：</span>
						<span class="r">
							<ul style="padding-left:15px;">
							<li>1995~2012年 上海长征医院 内科</li>
							<li>2013~至今 上海东方肝胆外科医院 生物治疗科</li>
							
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
  			成功开展多项新技术、新疗法。负责多项国际多中心新药临床验证。
  			任上海市全科医师及上海市住院医师规范化培训考核出题专家和考官，曾被评为第二军医大学校A级教员及住院医师规范化培训优秀教师，发表教改论文5篇。
  			承担和参与国家自然科学基金、上海市卫生局和长征医院“三重三优”人才建设计划青年技术骨干基金7项。
  			共发表学术论文60多篇，其中第1作者发表SCI论文4篇，参与13部专著编写。
  			以第1完成人获军队医疗成果奖三等奖1项，第2完成人获上海市科技进步二等奖和军队医疗成果奖二等奖各1项，
  			其他还获得海市科技进步一等奖、中华医学科技奖二等奖、上海医学科技二等奖各1项。
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


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
	
		<span class="verify pull-right"> 本站已经通过实名认证，所有内容由龚坚医生本人发表</span>
		<div class="avatar">
			<ul class="media-list">
				<li class="media">
					<img class="media-object pull-left" src="<?php echo $urlDP; ?>" alt="">
					<div class="media-body">
						<h3 class="media-heading"><span>龚坚&nbsp;&nbsp;副主任医师&nbsp;&nbsp;</span>
						<span class="pull-right" style="width:200px;"><a class="btn btn-success btn-createcase btn-lg btn-block" href="">上传病历</a></span>
						</h3>
						<div class="mt5"><a>广西医科大学第一附属医院</a>&nbsp;&nbsp;<a>急诊科</a></div>
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
						<span class="r">急诊科</span>
					</li>
					<li class="list-group-item">
						<span class="l">擅长：</span>
						<span class="r">对外科急危重症尤其是多发伤病人的救治有丰富的临床经验。</span>
					</li>
					
				</ul>
			</div>
    	</div>
		
    	<div class="col-sm-8 passage" >
    	
    	<div class="linex">
    		<h3 class="inline-block" style="background: white; padding-right:10px;">
    		工作体会
    		</h3>
    	</div>
  				<p class="mt10" style="border-left: 1px solid #d3d3d3;padding-left: 15px;padding-bottom: 10px;border-bottom: 1px solid #d3d3d3;">
  					病人作为社会的特殊群体,他们的身体正承受着病痛的折磨,他们的心里也许正充斥着孤独和绝望,所以他们需要安静舒适的环境去静养,需要精湛的护理医疗技术解除生理上的痛苦,更需要我们以及亲人朋友给予心理上的关心和鼓励。多年的工作使我接触到很多的人和事，深深理解患者的痛苦和家人的无助，我会用细致的护理工作和体贴的言语关怀帮助他们，帮助他们减轻痛苦。
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
        var urlDoctor = "<?php echo $this->createAbsoluteUrl('medicalRecord/create', array('did' => $id)); ?>";
        $(".btn-createcase").click(function(e){
            e.preventDefault();
            window.location=urlDoctor;
        });
	
    });
</script>

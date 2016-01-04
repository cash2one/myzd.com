

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
<!-- Content -->

<div id="cover">

    <div class="avatar">
        <ul class="media-list">
            <li class="media">
                <img class="media-object pull-left" src="<?php echo $urlDP; ?>" alt="">
                <div class="media-body">
                    <h3 class="media-heading"><span>Chew Tec Hock, Jeffrey&nbsp;&nbsp;主任医师&nbsp;&nbsp;教授</span>
                        <span class="pull-right" style="width:200px;"><a class="btn btn-success btn-createcase btn-lg btn-block" href="">上传病历</a></span>
                    </h3>
                    <div class="mt5"><a>伊丽莎白医院</a>&nbsp;&nbsp;<a>骨科 整形</a></div>
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
                    <span class="l">科室:</span>
                    <span class="r">新加坡伊丽莎白医院 骨科</span>
                </li>
                <li class="list-group-item">
                    <span class="l">擅长:</span>
                    <span class="r">骨科手术 整形外科手术等</span>
                </li>
                <li class="list-group-item">
                    <span class="l">专业学历:</span>
                    <span class="r">MBBS FRCS(Glasgow) 
                        <br>FRCS(Edinburgh) 
                        <br>M Med(Surgery) 
                        <br>FAMS(Orthopaedic Surgery) 
                        <br>FICS(USA)
                    </span>
                </li>
                <li class="list-group-item">
                    <span class="l">使用语言:</span>
                    <span class="r">英文中文、印度尼西亚语、马来语、福建话
                    </span>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-sm-8" >

        <div class="linex">
            <h3 class="inline-block" style="background: white; padding-right:10px;">
                工作经验
            </h3>
        </div>

        <form class="form-horizontal" role="form" >		
            <p class="mt10" style="border-left: 1px solid #d3d3d3;padding-left: 15px;padding-bottom: 10px;border-bottom: 1px solid #d3d3d3;">
                Jeffrey医生在骨科和整形外科领域积累了超过20年的工作经验，尤其在使用Makoplasty技术做高难度膝盖骨替换，以及其他运动损伤治疗方面在业内享有盛名。他现在在新加坡伊丽莎白医院和百汇东海岸医院出诊。
                <br><br>Jeffrey医生与1989年在新加坡国立大学获得他的医学学位。1995年Jeffrey医生奖学金前往美国梅奥医院从事膝盖骨手术研究，并且获得了由新加坡国家卫生部及其他国际医疗组织颁发的多个奖项，其中包括由著名的Scoliosis Research Society颁发的Russell Hibbs Award。
            </p>
            <div class="mt20">
                <button class="btn btn-success btn-createcase">上传病历</button>
                <button class="btn btn-info disabled">电话咨询</button>
                <button class="btn btn-primary disabled">网上咨询</button>
            </div>

            <h4 class="inline-block mt20">最新的MAKOplasty膝盖骨替换手术</h4>
            <p>
                What is MAKOplasty®?
            <li>
                Do you suffer knee pain while walking or climbing up and down stairs? 
            </li>
            <li>
                Does your knee feel stiff or painful when you get up from a long period of inactivity?  
            </li>
            <li>
                If knee pain is interfering with your life, consider MAKOplasty®.  
            </li>
            <br>This robot-assisted surgery fixes the specific knee compartment that is causing pain, and is suited for those ineligible for a total knee replacement. The partial knee resurfacing procedure is done using a robotic arm which allows surgeons to treat only the damaged part of the knee. Its precise nature means healthy bone and ligaments surrounding the damaged area are spared. 
            </p>

            <h4 class="inline-block mt10">Who is it suited for?</h4>
            <p>
                MAKOplasty® can help those who are suffering from osteoarthritis, a condition where the joint cartilage wears away. Adults in their 50s to 60s tend to have early to mid-stage osteoarthritis, which means only part of the knee is affected. In osteoarthritis, joint cartilage, a cushion between the joint bones, breaks down from wear and tear. When cartilage wears away, the bones rub against each other. Movements that add stress to the knee would then cause pain.
                <br>Those suffering from osteoarthritis may experience the following:
            <li>
                Pain while standing, walking short distances, and climbing up or down stairs 
            </li>
            <li>
                Pain or stiffness when getting up from a sitting position or a long period of inactivity  
            </li>
            <li>
                Swelling in one or more areas of the knee  
            </li>
            <li>
                A grating sensation or crunching feeling in the knee when the joint is being used 
            </li>

            <img src="../themes/v1/images/demo/doctor/jeffrey2.jpg" class="img-responsive center-block mt10" alt="Responsive image">
            </p>

            <h4 class="inline-block mt10">How does it benefit patient?</h4>
            <p>
                The procedure involves resurfacing the diseased portion of the knee in a targeted and precise manner (within 0.5mm of accuracy), so that the healthy bone and surrounding tissue are untouched. An implant is then secured in the joint to allow the knee to move smoothly again. The surgery allows for good outcomes and a short recovery time. MAKOplasty patients can expect to be up and about the next day after the surgery.  
            </p>
            <h4 class="inline-block mt10">Diagram of how MAKOplasty® works</h4>
            <img src="../themes/v1/images/demo/doctor/jeffrey3.jpg" class="img-responsive center-block mt10" alt="Responsive image">
            <br>
        </form>
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



<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlCommonwealDoctors = $this->createUrl('api/commonwealdoctors');
$urlDoctorView = $this->createUrl('doctor/view');
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/mygy.min.css" . "?v=" . time());
$this->checkVendor(AppLog::SITE_MYGY);
?>
<section id="mygyexpert">
    <div class="container-fluid bg-green">
        <div class="row">
            <div class="container">
                <div class="crumbs-mygy">
                    <div><a href="<?php echo $this->createUrl('site/page', array('view' => 'mygy')); ?>" target="_blank">公益手术</a>&gt;名医手术</div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-mygyexpert">
        <div class="container">
            <div class="mt30"><span class="depttitle">科室：</span><span class="ml10 dept active" data-dept="group0">骨科</span><span class="ml10 dept" data-dept="group1">外科</span><span class="ml10 dept" data-dept="group2">五官科</span><span class="ml10 dept" data-dept="group3">小儿外科</span></div>
            <div class="mygyexpert"></div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        var urlLoadCommonwealDoctors = '<?php echo $urlCommonwealDoctors; ?>';
        var urlDoctorView = '<?php echo $urlDoctorView; ?>';
        ajaxLoadCommonwealDoctors(urlLoadCommonwealDoctors, urlDoctorView);
        $('.dept').click(function () {
            $('.dept').removeClass('active');
            $(this).addClass('active');
            $('.deptgroup').removeClass('active');
            var groupId = '#' + $(this).attr('data-dept');
            $(groupId).addClass('active');
        });
        $('.dept.all').click(function () {
            $('.dept').removeClass('active');
            $(this).addClass('active');
            $('.deptgroup').addClass('active');
        });
    });
    function ajaxLoadCommonwealDoctors(urlLoadCommonwealDoctors, urlDoctorView) {
        $.ajax({
            url: urlLoadCommonwealDoctors,
            success: function (data) {
                setCommonwealDoctors(data, urlDoctorView);
            },
            error: function (XmlHttpRequest, textStatus, errorThrown) {
                console.log(XmlHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    }
    function setCommonwealDoctors(data, urlDoctorView) {
        if (data.results) {
            var innerHtml = "";
            innerHtml += "";
            var page = data.results.page;
            var x = 0;
            for (x in page) {
                var doctors = page[x];
//                $('.mygyexpert-number').html(doctors.length);
                var active = '';
                if (x == 0) {
                    active = 'active';
                }
                innerHtml += '<div class="deptgroup ' + active + '" id="group' + x + '">';
                for (var i = 0; i < doctors.length; i++) {
                    var last = '';
                    if ((i + 1) % 5 == 0) {
                        last = 'last';
                    }
                    var doctor = doctors[i];
                    var docdesc = '';
                    if (doctor.desc) {
                        docdesc = doctor.desc.length > 40 ? doctor.desc.substr(0, 40) + '...' : doctor.desc;
                    } else {
                        docdesc = '暂无信息';
                    }
                    var hpDeptName = doctor.hpDeptName == null ? "&nbsp;" : doctor.hpDeptName;
                    var hpName = doctor.hpName == null ? "&nbsp;" : doctor.hpName;
                    var aTitle = doctor.aTitle == '无' ? '' : doctor.aTitle;
                    innerHtml += '<a href="' + urlDoctorView + "?id=" + doctor.id + "&is_commonweal=1" + '" target="_blank"><div class="mt20 expertList pull-left ' + last + '">' +
                            '<div class="text-right"><img src="http://7xsq2z.com2.z0.glb.qiniucdn.com/146718708459637" /></div>' +
                            '<div class="pb20 expert-info">' +
                            '<div><img class="img100" src="' + doctor.imageUrl + '" /></div>' +
                            '<div class="text-center"><strong>' + doctor.name + '</strong><span class="ml10">' + doctor.mTitle + ' ' + aTitle + '</span></div>' +
                            '<div class="text-center color-green mt5">' + hpDeptName + '</div>' +
                            '<div class="text-center mt5 text12">' + hpName + '</div>' +
                            '</div><div class="text12 mygyexpert-desc"><strong>擅长手术：</strong>' + docdesc + '</div>' +
                            '</div></a>';
                }
                innerHtml += '</div>';
            }
        }
        $(".mygyexpert").html(innerHtml);
    }

</script>

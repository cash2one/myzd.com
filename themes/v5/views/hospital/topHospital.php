<?php 
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/searchhospital100.min.css");
?>
<div class="tophospitalbgImg">
    <div class="text-center"><img class="tophospital-header-img" src='http://static.mingyizhudao.com/146959029895232'></div>
</div>
<div class="container ">
    <div class="background-one">
        <div class="padding-150">
            <div class="text-one pt20">“复旦版中国最佳医院排行榜”是由复旦大学医院管理研究所连续六年发布的中国医院排名权威榜单。</div>
            <div class="text-one mt20">榜单综合考虑了学科建设、临床技术、医疗质量、科研水平等因素，汇集了中国医院的顶尖专科，反映了中国医院在该专科领域的临床实力和学术声誉。</div>
            <div class="text-one mt20 pb20">自该榜单发布六年以来，全国各大医院对排行榜越来越认可，并将其作为医院专科比较评价的依据。同时，榜单也向病人提供了准确的信息，并产生了权威的社会效益。</div>
        </div>
    </div>
</div>
<div class="container" id="tophospital">
    <table class="table table-hover text-center tophospitallist">
        <?php
        if (isset($list) && arrayNotEmpty($list)) {
            foreach ($list as $key => $hospital) {
                if ($key < 3) {
                    $numberImgUrl = '';
                    if ($key == 0) {
                        $numberImgUrl = 'http://static.mingyizhudao.com/146941651915560';
                    }
                    if ($key == 1) {
                        $numberImgUrl = 'http://static.mingyizhudao.com/146942656118716';
                    }
                    if ($key == 2) {
                        $numberImgUrl = 'http://static.mingyizhudao.com/146942656380493';
                    }
                    echo '<tr><td><img class="number-icons-header" src="' . $numberImgUrl . '"></td>';
                } else {
                    echo '<td class="number-icons"><div class="circular-border"><div class="circular-number">' . ($key + 1) . '</div></div></td>';
                }
                echo '<td><div class="padding60">' . $hospital->hospital_name . '</div></td>';
                if (isset($hospital->hospital_id) && !is_null($hospital->hospital_id)) {
                    echo '<td ><a class="td-color" target="_blank" href="' . $this->createUrl('hospital/view', array('id' => '')) . $hospital->hospital_id . '">查看医院详情></a></td>';
                } else {
                    echo '<td ><div class="td-color-grey" href="">敬请期待</div></td>';
                }
                echo '</tr>';
            }
        }
        ?>
    </table>
    <div class="bottom-color text-center test" >
        <a class="tophospital-learn-more" href="<?php echo $this->createUrl('hospital/topHospital?page=') . $page; ?>">查看更多</a>
    </div>
    <img src="http://static.mingyizhudao.com/146943365870342">
</div>

<script>
    $(document).ready(function () {
//        var topPage = '<?php //echo $page;         ?>';
//        alert(topPage);
        $('.tophospital-learn-more').click(function (e) {
            e.preventDefault();
            var requestUrl = $(this).attr('href');
            ajaxTophospital(requestUrl);
        });
    });

    function ajaxTophospital(requestUrl) {
        $.ajax({
            url: requestUrl,
            success: function (data) {

                var dataPage = data.page;
                if (dataPage <= 5) {
                    var html = '<?php echo $this->createUrl('hospital/topHospital?page='); ?>' + dataPage;
                } else {
                    $('.tophospital-learn-more').remove();
                }
                $('.tophospital-learn-more').attr("href", html);
                setTophospitalHtml(data);
            },
            error: function (XmlHttpRequest, textStatus, errorThrown) {
                console.log(XmlHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    }
    function setTophospitalHtml(data) {
        if (data) {
            var innerHtml = '';
            innerHtml += '';
            for (var i = 0; i < 20; i++) {
                var hospital = data[i];
                var hospitalView = '<?php echo $this->createUrl('hospital/view', array('id' => '')); ?>';
                var hospitalId = hospital.hospital_id;
                innerHtml += '<tr><td class="number-icons"><div class="circular-border"><div class="circular-number">' + hospital.id + '</div></div></td>';
                innerHtml += '<td><div class="padding60">' + hospital.hospital_name + '</div></td>';
                if (hospitalId == null) {
                    innerHtml += '<td ><div class="td-color-grey">敬请期待</div></td>';
                } else {
                    innerHtml += '<td ><a class="td-color" target="_blank" href="' + hospitalView + hospital.hospital_id + '">查看医院详情></a></td></tr>';
                }
            }
            innerHtml += '</tr>';
            $('.tophospitallist').append(innerHtml);
        }
    }
</script>
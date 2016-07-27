<style>
    .background-one{background-color:#eef4fb;}
    .padding-150{padding-left: 150px;padding-right: 150px;text-indent:2em}
    .text-one{font-size: 16px;color:#555;}
    #tophospital .table.tophospitallist>tbody>tr>td{line-height: 4;background-color: #f7f7f7;border-top:1px solid #fff;}
    #tophospital .table-hover.tophospitallist>tbody>tr:hover>td, #tophospital .table-hover.tophospitallist>tbody>tr:hover>th{background-color:#eeefef}
    #tophospital .tophospitallist tr{font-size: 15px;}
    #tophospital .tophospitallist .number-icons-header{padding-left:85px;}
    #tophospital .tophospitallist .number-icons{padding-left:93px;}
    .padding60{padding-left:60px;}
    .td-color{color:#21a59c;padding-right: 65px;}
    .td-color:hover{text-decoration: underline}
    .td-color-grey{color:#9f9fa0;padding-right: 65px;}
    #tophospital .tophospitallist .circular-border{margin:10px auto;border:solid 1px #b4b5b5;max-height: 40px;max-width: 40px; border-radius:50% ;font-size: 18px;color:#888}
    #tophospital .tophospitallist .circular-number{margin-top: -16px;}
    #tophospital .bottom-color{background-color: #f7f7f7;margin-top: -19px;height:80px;font-size: 21px;color:#85ccce;line-height: 4}#tophospital .bottom-color>a{color:#85ccce}#tophospital .bottom-color>a:hover{color:#72c1c1}
    .tophospital-header-img{margin-top:35px;}
</style>
<div style="background:url('http://static.mingyizhudao.com/146959011794337') no-repeat;">
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
        <div class='test'></div>
    </table>
<!--    <table class="table table-hover text-center tophospitallist">
    <tr>
        <td><img class="number-icons-header" src="http://static.mingyizhudao.com/146941651915560"></td>
        <td><div class="padding60">北京协和医院</div></td>
        <td ><a class="td-color" href="">查看医院详情></a></td>
    </tr>
    <tr>
        <td><img class="number-icons-header" src="http://static.mingyizhudao.com/146942656118716"></td>
        <td><div class="padding60">四川大学华西医院</div></td>
        <td><div class="td-color-grey">敬请期待</div></td>
    </tr>
    <tr>
        <td><img class="number-icons-header" src="http://static.mingyizhudao.com/146942656380493"></td>
        <td><div class="padding60">中国人民解放军总医院</div></td>
        <td ><a class="td-color" href="">查看医院详情></a></td>
    </tr>
    <tr>
        <td class="number-icons"><div class="circular-border"><div class="circular-number">4</div></div></td>
        <td><div class="padding60">上海交通大学医学院附属瑞金医院</div></td>
        <td ><a class="td-color" href="">查看医院详情></a></td>
    </tr>
    <tr>
        <td class="number-icons"><div class="circular-border"><div class="circular-number">5</div></div></td>
        <td><div class="padding60">第四军医大学西京医院</div></td>
        <td ><div class="td-color-grey" href="">敬请期待</div></td>
    </tr>
</table>-->
    <div class="bottom-color text-center"><a class="tophospital-learn-more" href="<?php echo $this->createUrl('hospital/topHospital?page=') . $page; ?>">查看更多</a></div>
    <img src="http://static.mingyizhudao.com/146943365870342">
</div>
<script>
    $(document).ready(function () {
        var topPage = '<?php echo $page; ?>';
        $('.tophospital-learn-more').click(function (e) {
            e.preventDefault();
            ajaxTophospital(topPage);
        });
    });
    function ajaxTophospital(topPage) {
        var requestUrl = '<?php echo $this->createUrl('hospital/topHospital?page='); ?>' + topPage;
        $.ajax({
            url: requestUrl,
            success: function (data) {
                console.log(data);
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
            var innerHtml = "";
            console.log(data.page);
            var hospitalView = '<?php echo $this->createUrl('hospital/view', array('id' => '')); ?>';
            innerHtml += '<td class="number-icons"><div class="circular-border"><div class="circular-number">' + data.page + '</div></div></td>';
            innerHtml += '<td><div class="padding60">' + data.hospital_name + '</div></td>';
            innerHtml += '<td ><a class="td-color" target="_blank" href="' + hospitalView + data.hospital_id + '">查看医院详情></a></td>';
            $('.test').html(innerHtml);
        }
    }
</script>
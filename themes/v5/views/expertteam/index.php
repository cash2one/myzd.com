<?php
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/expertteam.css");
$urlLoadallEteamsByCity = $this->createUrl('api/expertteam'); // append city.id behind.
$urlLoadEteamsByCity = $this->createUrl('api/expertteam', array('city' => '')); // append city.id behind.
$this->pageTitle = '国内顶尖外科专家领衔的专业手术治疗团队_名医主刀';
$this->htmlMetaKeywords = '明星专家团队';
$this->htmlMetaDescription = '明星专家团队，国内顶尖外科专家领衔的专业手术治疗团队，北京,上海,南京明星专家团队。名医主刀';
?>
<style>

</style>
<div class="container-fluid bg-green">
    <div class="row">
        <img src="<?php echo $urlResImage; ?>general/doc-team.png" alt=""/>
    </div>
</div>
<div class="container">
    <div id="eteamlist"  class="pt40">
        <div class="area mb5">
            <span class="container-title pl0">专家团队</span>
            <span class="active"><a class="city" data-city="" href="javascript:void(0);">全部</a></span><span class="border-left"><a class="city" data-city="1" href="javascript:void(0);">北京</a></span><span class="border-left"><a class="city" data-city="73" href="javascript:void(0);">上海</a></span><span class="border-left"><a class="city" data-city="200" href="javascript:void(0);">广州</a></span><span class="border-left"><a class="city" data-city="74" href="javascript:void(0);">南京</a></span><span class="border-left"><a class="city" data-city="87" href="javascript:void(0);">杭州</a></span><span class="border-left"><a class="city" data-city="others" href="javascript:void(0);">其他</a></span>
        </div>
        <div class="loading loading02"></div>
        <div class="expert-list">

            <div class="row elist">

            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        //初始加载ajax
        ajaxGetExperttteamByCity(getCityId());
        setActiveCity(getCityId());
        $(".city").click(function () {
            $cityid = $(this).attr("data-city");
            ajaxGetExperttteamByCity($cityid);
            setActiveCity($cityid);
            var stateObject = {};
            var title = "";
            $city = $cityid ? "?city=" + $cityid : "";
            var newUrl = "<?php echo $this->createUrl("expertteam/index"); ?>" + $city;
            history.pushState(stateObject, title, newUrl);
        });
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    });
    //异步加载hospital List
    //var $eteams;
    function ajaxGetExperttteamByCity(cityid) {
        //url: 'http://mingyizhudao.com/api/hospital?city=' + hCode,
        var urlLoadEteam;
        if (cityid) {
            urlLoadEteam = "<?php echo $urlLoadEteamsByCity; ?>" + cityid;
        } else {
            urlLoadEteam = "<?php echo $urlLoadallEteamsByCity; ?>";
        }

        // show loading gif.
        $("#eteamlist .loading").show();
        $.ajax({
            url: urlLoadEteam,
            async: false,
            success: function (data) {
                var $eteams = data.expertTeams;
                setE_list($eteams);
            },
            complete: function () {
                // hide loading gif.
                $("#eteamlist .loading").hide();
            }
        });

    }
    function setE_list($eteams) {
        var innerHtml = '';
        if ($eteams && $eteams.length>0) {
            for (var i = 0; i < $eteams.length; i++) {
                var eteam = $eteams[i];
                var aTitle = eteam.teamLeader.aTitle == '无' ? '' : eteam.teamLeader.aTitle;
                if (eteam.id != 13) {
                    innerHtml = innerHtml +
                            '<div class="col-sm-4 rec-expert"><div class="expert"><a href="' +
                            eteam.teamPageUrl + '"><div><img class="img100" src="' +
                            eteam.teamLeader.imageUrl + '" alt=""/></div><div class="clearfix"><div class="expert-name inline-block pull-left">' +
                            eteam.teamLeader.name + '</div><div class="expert-title inline-block pull-right">' +
                            eteam.teamLeader.mTitle + '&nbsp;&nbsp;' +
                            aTitle + '</div></div>' +
                            //'<div  class="expert-slogan"><span>' +eteam.slogan + '</span></div>'+
                            '<div class="expert-hospital">' +
                            eteam.teamLeader.hospital + '</div>' +
                            '<div class="bg-line"><div class="honor-header inline-block"></div></div>' +
                            '<div class="honor">' +
                            setDisTags(eteam.disTags) + '</div></div></a></div>';
                }
            }
        } else {
            innerHtml = "<div class='col-sm-12 rec-expert mt20'><h4>此城市暂无专家团队</h4></div>";
        }
        $('.elist').html(innerHtml);
    }
    //setDisTags
    function setDisTags(disTags) {
        var disHtml = "";
        if (disTags !== null && disTags.length > 0) {
            var dislimit = disTags.length;//> 3 ? 3 : disTags.length;
            for (var i = 0; i < dislimit; i++) {
                var punctuation = i == dislimit - 1 ? '。' : '、';
                disHtml += disTags[i] + punctuation;
            }
        } else {
            disHtml += "暂无信息";
        }
        if (disHtml.length > 80) {
            disHtml = disHtml.substr(0, 80) + '...';
        }
        return disHtml;
    }
    //setHonor
    function setHonor($honors) {
        var $honorUl = "<ul>";
        if ($honors !== null && $honors.length > 0) {
            var $honorlimit = $honors.length > 3 ? 3 : $honors.length;
            for (var i = 0; i < $honorlimit; i++) {
                $honorUl += '<li data-toggle="tooltip" data-placement="bottom" title="' + $honors[i] + '">' + $honors[i] + '</li>';
            }
        } else {
            $honorUl += "<li>暂无荣誉介绍</li>";
        }
        $honorUl += "</ul>";
        return $honorUl;
    }
    //cityActive
    function setActiveCity($cityId) {
        $(".city").parent("span").removeClass("active");
        $(".city").each(function () {
            var $data_city = $(this).attr("data-city");
            if ($data_city == $cityId) {
                $(this).parent("span").addClass("active");
            }
        });
    }
    //get location id
    function getCityId() {
        var cityId = '';
        var url = window.location.search;
        if (url.indexOf("?") != -1) {
            var str = url.substr(1);
            strs = str.split("&");
            for (i = 0; i < strs.length; i++) {
                if ([strs[i].split("=")[0]] == 'city')
                    cityId = unescape(strs[i].split("=")[1]);
            }
        }
        return cityId;
    }
</script>


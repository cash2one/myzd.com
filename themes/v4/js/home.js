$(document).ready(function () {
    //疾病导航分页
    $(".pagenav a").click(function () {
        $id = $(this).attr("data-id");
        $disclass = $(this).parents(".dis-class");
        $disclass.find(".pagenav li").removeClass("active");
        $(this).parent().addClass("active");
        $disclass.find(".page").removeClass("active");
        $disclass.find(".page" + $id).addClass("active");
    });
});
//获取所有的医院
function ajaxGetHospitals(cityid, urlLoadSelectHospitals) {
    var urlLoadHospital = urlLoadSelectHospitals;
    urlLoadHospital += cityid;
    // show loading gif.
    $.ajax({
        url: urlLoadHospital,
        async: false,
        success: function (data) {
            var $hospitals = data.hospitals;
            setHospitalSelect($hospitals);
        },
        complete: function () {
            // hide loading gif.
        }
    });
}
//异步加载hospital List
function ajaxGetHospitalByCity(cityid, cityname, urlLoadHospitalsByCity, urlHospitalView, urlHospital) {
    var urlLoadHospital = urlLoadHospitalsByCity;
    urlLoadHospital += cityid;
    // show loading gif.
    $.ajax({
        url: urlLoadHospital,
        async: false,
        success: function (data) {
            var $hospitals = data.hospitals;
            setH_list($hospitals, cityid, cityname, urlHospitalView, urlHospital);
        },
        complete: function () {
            // hide loading gif.
        }
    });
}
function setHospitalSelect($hospitals) {
    var innerHtml = "<select class='sel form-control' name='id'>";
    for (var i = 0; i < $hospitals.length; i++) {
        $hospital = $hospitals[i];
        innerHtml += '<option value=' + $hospital.id + '>' + $hospital.name + '</option>';
    }
    innerHtml += "</select>";
    $(".hospitallist").html(innerHtml);
}
function setH_list($hospitals, $cityid, $cityname, urlHospitalView, urlHospital) {
    var innerHtml = '';
    var $hlimit = 5;
    if ($hospitals) {
        var $length = $hospitals.length > $hlimit ? $hlimit : $hospitals.length;
        for (var i = 0; i < $length; i++) {
            $hospital = $hospitals[i];
            var $hname = $hospital.name.length > 13 ? $hospital.name.substring(0, 12) + "..." : $hospital.name;
            innerHtml = innerHtml +
                    '<div class="col-lg-4 col-sm-6 mt10"><a href="' + urlHospitalView +
                    $hospital.id + '" target="_blank" title="' +
                    $hospital.name + '"><div class="media border-gray"><div class="pull-left"><img class="media-object img130" src="' +
                    $hospital.imageUrl + '" alt="..."></div>' +
                    '<div class="media-body"><div class="mt10"><div >' +
                    $hname + '</div></div><div class="mt10">' +
                    $hospital.hpClass + '</div><div class="mt10">电话：' +
                    $hospital.phone + '</div></div></div></a></div>';
        }
        innerHtml += '<div class="col-lg-4 col-sm-6 mt10 morehp-btn"><a href="' + urlHospital + $cityid + '" target="_blank"><div class="media border-gray pt20 pl20"><div class="btn-text">更多' + $cityname + '医院 ></div></div></a></div>';
    } else {
        innerHtml = "<h4>暂无此城市的医院信息</h4>";
    }
    $('.hlist').html(innerHtml);
}
function loadAllEteams(urlLoadallEteamsByCity, urlResImage) {
    var urlLoadAllEteams = urlLoadallEteamsByCity;
    // show loading gif.
    $(".expertteam .loading").show();
    $.ajax({
        url: urlLoadAllEteams,
        async: false,
        success: function (data) {
            $allteams = data.expertTeams;
            setEteamsBxSlider($allteams, urlResImage);
        },
        complete: function () {
            // hide loading gif.
            $(".expertteam .loading").hide();
        }
    });
}
function setEteamsBxSlider($allteams, urlResImage) {
    $pagelimit = 4;
    var innerHtml = '', totalCount = 15, count = 1;
    for (var i = 0; i < $allteams.length; i++) {
        if (count > totalCount) {
            break;
        }
        $team = $allteams[i];
        if ($team.introImageUrl == null) {
            continue;
        }
        if (i % $pagelimit === 0) {
            innerHtml += '<li><div class="row">';
        }
        if ($team.id == 13) {
            // continue;
        }
        innerHtml += '<div class="col-sm-6"><div class="expert"><a href="' +
                $team.teamPageUrl + '" target="_blank">' + '<img src="' + urlResImage + 'team-img/' +
                //'<img src="' + $team.introImageUrl + '"' +
                $team.code + '.png"/></a></div></div>';

        if (i % $pagelimit === $pagelimit - 1) {
            innerHtml += '</div></li>';
        }
        count++;
    }
    $("#expertteam").html(innerHtml);
}
//cityActive
function setActiveCity($cityId) {
    $(".city").removeClass("active");
    $(".city").each(function () {
        var $data_city = $(this).attr("data-city");
        if ($data_city == $cityId) {
            $(this).addClass("active");
        }
    });
}
 
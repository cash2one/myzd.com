$(document).ready(function () {
    //搜索功能
    var t;
    $('#home-search-form .disease-name').keyup(function (event) {
        var keyword = $(this).val();
        keyword = $.trim(keyword);
        if (!keyword) {
            $('#search-display').hide();
        }
        clearTimeout(t);
        t = setTimeout(function () {
            if (keyword) {
                ajaxSearchByKeyWord(keyword);
            }
        }, 300);

    }).focus(function () {
        var keyword = $(this).val();
        keyword = $.trim(keyword);
        if (!keyword) {
            $('#search-display').hide();
        } else {
            $('#search-display').show();
            //ajaxSearchByKeyWord(keyword);
        }
    }).click(function (e) {
        if ($('#search-display').is(':visible')) {
            $('#search-display').show();
        } else {
            $('#search-display').hide();
        }
        e.stopPropagation();
    });
    //清除记录
    $('#search-display .clearhistory').click(function () {
        $('#seach-result').html('');
        $('#home-search-form .disease-name').val('');
    });
    //search-display隐藏/显示
    $('.home-search #search-display').click(function (e) {
        $('#search-display').show();
        e.stopPropagation();
    });
    $(document).click(function () {
        $('#search-display').hide();
    });

    /**** 推荐医生切换 ****/
    $('.expert .nav-tabs .category').mouseover(function () {
        $('.expert .nav-tabs .category').removeClass('active');
        $(this).addClass('active');
        var pageId = '#' + $(this).find('a').attr('data-page');
        $('.expert .expList .tab-pane').removeClass('active');
        $(pageId).addClass('active');
    });
});
function ajaxLoadDoctor(urlLoadDoctor, urlDoctorView) {
    $.ajax({
        url: urlLoadDoctor,
        success: function (data) {
            setDoctorHtml(data, urlDoctorView);
        },
        error: function (XmlHttpRequest, textStatus, errorThrown) {
            console.log(XmlHttpRequest);
            console.log(textStatus);
            console.log(errorThrown);
        }
    });
}
function setDoctorHtml(data, urlDoctorView) {
    if (data.results) {
        var disease_category = data.results.disease_category;
        var innerHtml = '';
        var active = '';
        for (var x in disease_category) {
            if (x == 1) {
                active = 'active';
            } else {
                active = '';
            }
            innerHtml += '<div role="tabpanel" class="tab-pane ' + active + '" id="dept' + x + '"><div class="row expList mt15" >';
            var doctors = disease_category[x];
            for (var i = 0; i < doctors.length; i++) {
                var doctor = doctors[i];
                var contractedImg = doctor.isContracted == 1 ? '<div class="contracted-img"></div>' : '';
                var isMingyiyizhenImg=doctor.ServiceId==2? '<div class="mingyiyizhen-img pull-right"></div>':'';
                innerHtml += '<div class="col-md-3 " ><a target="_blank" href="' + urlDoctorView + doctor.id + '">' +
                        '<div class="expInfo text-center bg-white explist-border">' +
                        contractedImg +isMingyiyizhenImg+
                        '<div><img class="img100" src="' + doctor.imageUrl + '"/></div>' +
                        '<div class="expName color-black">' + doctor.name + '</div>' +
                        '<div class="expTitle">' + doctor.mTitle + ' ' + doctor.aTitle + '</div>' +
                        '<div class="expHospital mt30">' + doctor.hpName + '</div>' +
                        '<div class="mt10 color-green mb50">' + doctor.hpDeptName + '</div>' +
                        '</div>' +
                        '</a>' +
                        '</div>';
            }
            innerHtml += '</div></div>';
        }

        $('.expList').html(innerHtml);
    }
}
function setResultsNameActive(name, keyword) {
    return name.replace(keyword, '<span class="active">' + keyword + '</span>');
}
function setResultShow(results) {
    var header_tab = '', result_tab = '';
    if (results.hospitals) {
        header_tab = '.hospital';
        result_tab = '#hospital';
    }
    if (results.diseaseCategorys) {
        header_tab = '.diseaseCategory';
        result_tab = '#diseaseCategory';
    }
    if (results.diseases) {
        header_tab = '.disease';
        result_tab = '#disease';
    }
    if (results.doctors) {
        header_tab = '.doctor';
        result_tab = '#doctor';
    }
    $('.search-display-header .nav').find(header_tab).addClass('active');
    $('#seach-result').find(result_tab).addClass('active');
}
function initSearchResultTab() {
    $('.search-display-header .nav>li>a').mousemove(function () {
        $('.search-display-header .nav>li>a').removeClass('active');
        $(this).addClass('active');
        var result_tab = '#' + $(this).attr('data-page');
        $('#seach-result .result-tab').removeClass('active');
        $('#seach-result').find(result_tab).addClass('active');
    });
}
/*
 function ajaxLoadDoctor(urlLoadDoctor, urlDoctorView) {
 $.ajax({
 url: urlLoadDoctor,
 success: function (data) {
 setDoctorHtml(data, urlDoctorView);
 }
 });
 }
 function setDoctorHtml(data, urlDoctorView) {
 if (data.results) {
 var doctors = data.results;
 var innerHtml = '';
 for (var i = 0; i < doctors.length; i++) {
 var doctor = doctors[i];
 innerHtml += '<div class="col-md-3 " ><a target="_blank" href="' + urlDoctorView + doctor.id + '">' +
 '<div class="expInfo text-center bg-white explist-border">' +
 '<div><img class="img100" src="' + doctor.imageUrl + '"/></div>' +
 '<div class="expName color-black strong">' + doctor.name + '</div>' +
 '<div class="expTitle">' + doctor.mTitle + ' ' + doctor.aTitle + '</div>' +
 '<div class="expHospital mt30">' + doctor.hpName + '</div>' +
 '<div class="mt10 color-black mb50">' + doctor.hpDeptName + '</div>' +
 '</div>' +
 '</a>' +
 '</div>';
 }
 $('.expList').html(innerHtml);
 }
 }
 */
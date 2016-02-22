$(document).ready(function () {  
    $('.searchdoctor-tab').click(function () {
        $('.search-top').removeClass('active');
        $(this).addClass('active');
        $('#searchdoctor-btn').show();
        $('#searchhospital-btn').hide();
    });
    $('.searchhospital-tab').click(function () {
        $('.search-top').removeClass('active');
        $(this).addClass('active');
        $('#searchdoctor-btn').hide();
        $('#searchhospital-btn').show();
    });
    /**** 推荐医生切换 ****/
    $('.expert .nav-tabs .category').mouseover(function(){
        $('.expert .nav-tabs .category').removeClass('active');
        $(this).addClass('active');
        var pageId = '#'+$(this).find('a').attr('data-page');
        $('.expert .expList .tab-pane').removeClass('active');
        $(pageId).addClass('active');
    });
});
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
                innerHtml += '<div class="col-md-3 " ><a target="_blank" href="' + urlDoctorView + doctor.id + '">' +
                        '<div class="expInfo text-center bg-white explist-border">' +
                        contractedImg +
                        '<div><img class="img100" src="' + doctor.imageUrl + '"/></div>' +
                        '<div class="expName color-black">' + doctor.name + '</div>' +
                        '<div class="expTitle">' + doctor.mTitle + ' ' + doctor.aTitle + '</div>' +
                        '<div class="expHospital mt30">' + doctor.hpName + '</div>' +
                        '<div class="mt10 color-black mb50">' + doctor.hpDeptName + '</div>' +
                        '</div>' +
                        '</a>' +
                        '</div>';
            }
            innerHtml += '</div></div>';
        }

        $('.expList').html(innerHtml);
    }
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
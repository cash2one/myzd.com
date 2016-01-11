$(document).ready(function () {

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
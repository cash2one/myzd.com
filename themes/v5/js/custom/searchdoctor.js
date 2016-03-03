/**** 设置doctor html ****/
function setDoctorHtml(data, urlDoctorView) {
    if (data.results) {
        var innerHtml = '';
        var doctors = data.results;
        for (var i = 0; i < doctors.length; i++) {
            var doctor = doctors[i];
            var aTitle = doctor.aTitle == '无' ? '' : doctor.aTitle;
            var docdesc = '';
            if (doctor.desc) {
                docdesc = doctor.desc.length > 100 ? doctor.desc.substr(0, 100) + '...' : doctor.desc;
            } else {
                docdesc = '暂无信息';
            }
            var hpDeptName = doctor.hpDeptName == null ? '&nbsp;' : doctor.hpDeptName;
            var isContractedImg = doctor.isContracted == 0 ? '' : '<div class="pull-right contracted-img"></div><div class="clearfix"></div>';
            var academicianImg = doctor.id == 117 ? '<div class="pull-right academician-img"></div>' : '';
            var robotImg = '';
            if (doctor.id == 3209 || doctor.id == 3208 || doctor.id == 3207) {
                robotImg = '<div class="pull-right roboticon-img"></div>';
            }
            innerHtml += '<div class="col-md-4 col-sm-6 mt30">' +
                    '<a target="_blank" href="' + urlDoctorView + doctor.id + '">' +
                    '<div class="border-gray expert-list">' +
                    '<div><img class="img100" src="' + doctor.imageUrl + '" alt="' + doctor.name + '"></div>' +
                    isContractedImg + academicianImg + robotImg +
                    '<div class="text-center"><span class="strong">' + doctor.name + '</span>&nbsp;' +
                    '<span class="text-center mt5">' + doctor.mTitle + '&nbsp;' + aTitle + '</span></div>' +
                    '<div class="text-center mt5 hpDeptName">' + hpDeptName + '</div>' +
                    '<div class="text-center mt5">' + doctor.hpName + '</div>' +
                    '<div class="mt10 docdesc"><span class="strong">擅长：</span>' + docdesc + '</div>' +
                    '<div class="text-center mt10"></div>' +
                    '</div>' +
                    '</a>' +
                    '</div>';
        }
        $('.doclist').html(innerHtml);
    } else {
        $('.doclist').html('<div class="mt150 text-center color-gray">没有相关医生，请重新查找！</div>');
    }
}
/**** 设置分页 ****/
function setPages(doctorCount, page) {
    if (doctorCount > 9) {
        var totalPages = Math.ceil(doctorCount / 9);
        var pageActive = page;
        setPageHtml(pageActive, totalPages);
    } else {
        $(".pagination").html("");
    }
}
/**** 设置分页html ****/
function setPageHtml(pageActive, totalPages) {
    var pageHtml = '';
    pageHtml += '<li><a class="pagePre" href="javascript:;" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
    var active = '', pageText,
            maxPages = totalPages > 8 ? 8 : totalPages,
            starPage = pageActive > 5 ? pageActive : 5,
            activePage = pageActive > 5 ? 5 : pageActive;
    for (var i = 0; i < maxPages; i++) {
        if (i === activePage - 1) {
            active = 'active';
        } else {
            active = '';
        }
        pageText = starPage - 4 + i;
        if (pageText > totalPages) {
            break;
        }
        pageHtml += '<li class="page-item ' + active + '"><a data-page="' + (starPage - 4 + i) + '" href="javascript:;">' + (starPage - 4 + i) + '</a></li>';
    }
    if (totalPages > 8 & starPage < totalPages - 4) {
        pageHtml += '<li class=""><a href="javascript:;">...</a></li>' +
                '<li class="page-item"><a data-page="' + totalPages + '" href="javascript:;">' + totalPages + '</a></li>';
    }
    pageHtml += '<li><a class="pageNext" href="javascript:;" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
    $(".pagination").html(pageHtml);
    initPageFunction(pageActive, totalPages);
}
/*** 初始化分页点击方法 *****/
function initPageFunction(pageActive, totalPages) {
    //分页点击加载医生
    $(".page-item a").click(function () {
        var page = $(this).attr("data-page");
        condition["page"] = page;
        ajaxLoadDoctor('&getcount=1');
        //setPageHtml(pageActive, $totalPages);
    });
    //上一页
    $(".pagePre").click(function () {
        if (condition["page"] <= 1) {
            return;
        } else {
            condition["page"]--;
            ajaxLoadDoctor('&getcount=1');
            //setPageHtml(pageActive, $totalPages);
        }
    });
    //下一页
    $(".pageNext").click(function () {
        if (pageActive >= totalPages) {
            return;
        } else {
            condition["page"]++;
            ajaxLoadDoctor('&getcount=1');
            //setPageHtml(pageActive, $totalPages);
        }
    });
}
/**** 初始化方法 ****/
function initDeptFunction() {
    $(".department .dept-header").click(function () {
        $(".department").removeClass("active");
        $(this).parent().addClass("active");
    });
    $('.department ul>li>a.subCat').click(function (e) {
        e.preventDefault();
        var subCat = $(this).attr('data-id');
        var url = $(this).attr('href');
        var subCatName = $(this).text();
        condition["page"] = 1;
        condition["city"] = '';
        condition["disease"] = '';
        condition["disease_name"] = '';
        condition["disease_category"] = '';
        condition["disease_sub_category"] = subCat;
        urlLoadDoctor = url;
        $('.department-name>span').html(subCatName);
        $('.department ul>li>a.subCat').removeClass('active');
        $(this).addClass('active');
        ajaxLoadDoctor('&getcount=1');
        ajaxLoadDiseaseByCategory(subCat);
        setCityActive();
    });
    $('.department ul>li>a.diseaseCategory').click(function (e) {
        e.preventDefault();
        var diseaseCategory = $(this).attr('data-id');
        var url = $(this).attr('href');
        condition["page"] = 1;
        condition["city"] = '';
        condition["disease"] = '';
        condition["disease_name"] = '';
        condition["disease_category"] = diseaseCategory;
        condition["disease_sub_category"] = '';
        urlLoadDoctor = url;
        ajaxLoadDoctor('&getcount=1');
        setCityActive();
    });
}
function initDiseaseFunction() {
    $('.disease-list a.all').click(function (e) {
        e.preventDefault();
        var subCat = $(this).attr('data-id');
        var url = $(this).attr('href');
        condition["page"] = 1;
        condition["city"] = '';
        condition["disease"] = '';
        condition["disease_name"] = '';
        condition["disease_category"] = '';
        condition["disease_sub_category"] = subCat;
        urlLoadDoctor = url;
        $('.department-name>span').html('全部');
        $('.disease-list a.disease').removeClass('active');
        $(this).addClass('active');
        ajaxLoadDoctor('&getcount=1');
        setCityActive();
    });
    $('.disease-list a.disease').click(function (e) {
        e.preventDefault();
        var disease_name = $(this).text();
        var disease = $(this).attr('data-id');
        var url = $(this).attr('href');
        condition["page"] = 1;
        condition["city"] = '';
        condition["disease"] = disease;
        condition["disease_name"] = '';
        condition["disease_category"] = '';
        condition["disease_sub_category"] = '';
        urlLoadDoctor = url;
        $('.department-name>span').html(disease_name);
        $('.disease-list a.all').removeClass('active');
        $('.disease-list a.disease').removeClass('active');
        $(this).addClass('active');
        ajaxLoadDoctor('&getcount=1');
        setCityActive();
    });
}
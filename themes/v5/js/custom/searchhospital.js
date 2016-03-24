//设置hospital html
function setHospitalHtml(data, urlHospitalView) {
    if (data.results && data.results.length > 0) {
        var innerHtml = '';
        var hospitals = data.results;
        for (var i = 0; i < hospitals.length; i++) {
            var hospital = hospitals[i];
            var hp_dept_desc = hospital.hp_dept_desc == '' ? '暂无信息' : hospital.hp_dept_desc;
            hp_dept_desc = hp_dept_desc.length > 105 ? hp_dept_desc.substr(0, 105) + '<span class="ellipsis">...</span><span class="dese-last">' + hp_dept_desc.substr(105) + '</span>' : hp_dept_desc;
            innerHtml += '<div class="row mt30">' +
                    '<div class="col-sm-3 col-lg-2"><a target="_blank" href="' + urlHospitalView + hospital.hospital_id + '"><img class="img-responsive" src="' + hospital.imageUrl + '"></a></div>' +
                    '<div class="col-sm-9 col-lg-10 ml-30">' +
                    '<div><strong><a class="hpName" target="_blank" href="' + urlHospitalView + hospital.hospital_id + '">' + hospital.name + '</a></strong>' +
                    '<span class="pull-right"><a target="_blank" href="' + urlHospitalView + hospital.hospital_id + '"><button class="btn btn-yes pr30 pl30">查 看 详 情</button></a></span></div>' +
                    '<div class="mt20"><span>医院科室名称：</span><span class="color-green ml10">' + hospital.hp_dept_name + '</span></div>' +
                    '<div class="clearfix"></div>' +
                    '<div class="ml-15 hospital-desc mt20">' + hp_dept_desc + '</div>' +
                    '</div>' +
                    '</div>';
        }
        $('.hospital-list').html(innerHtml);
    } else {
        $('.hospital-list').html('<div class="mt150 text-center color-gray">没有相关科室，请重新查找！</div>');
    }
    setLocationUrl();
    initBookingBtn();
    $('.dese-operate').click(function () {
        $(this).parents('.hospital-desc').find('.ellipsis').toggle();
        $(this).parents('.hospital-desc').find('.dese-last').toggle();
        $(this).parents('.hospital-desc').find('.desc-more').toggle();
        $(this).parents('.hospital-desc').find('.desc-retract').toggle();
    });
}
/**** 设置分页 ****/
function setPages(doctorCount, page) {
    if (doctorCount > 5) {
        var totalPages = Math.ceil(doctorCount / 5);
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
        ajaxLoadHopital('&getcount=1');
        //setPageHtml(pageActive, $totalPages);
    });
    //上一页
    $(".pagePre").click(function () {
        if (condition["page"] <= 1) {
            return;
        } else {
            condition["page"]--;
            ajaxLoadHopital('&getcount=1');
            //setPageHtml(pageActive, $totalPages);
        }
    });
    //下一页
    $(".pageNext").click(function () {
        if (pageActive >= totalPages) {
            return;
        } else {
            condition["page"]++;
            ajaxLoadHopital('&getcount=1');
            //setPageHtml(pageActive, $totalPages);
        }
    });
}
//设置条件
function setUrlCondition() {
    var urlCondition = "";
    for ($key in condition) {
        if (condition[$key] && condition[$key] !== "") {
            urlCondition += "&" + $key + "=" + condition[$key];
        }
    }
    return urlCondition;
}

function initDeptFunction() {
    $(".department .dept-header").click(function () {
        if ($(this).parent().hasClass("active")) {
            $(".department").removeClass("active");
        } else {
            $(".department").removeClass("active");
            $(this).parent().addClass("active");
        }
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
        urlLoadHospital = url;
        $('.department-name>span').html(subCatName);
        $('.department ul>li>a.subCat').removeClass('active');
        $(this).addClass('active');
        ajaxLoadHopital('&getcount=1');
        setCityActive();
    });
}
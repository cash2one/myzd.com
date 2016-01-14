$(document).ready(function (e) {
    if (isDeviceMobile()) {
        $browserModeMenu = $("#browsermode-menu");
        $browserModeMenu.show();
        $("#site-header").css("margin-top", "20px");
    }
    initBookingBtn();
    $('#logout').click(function(){
        delCookie('user');
    });
});

function isDeviceMobile() {
    return  /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

function initHeadFixed(navH) {
    var scroH = $(this).scrollTop();
    //滚动条的滑动距离大于等于定位元素距离浏览器顶部的距离，就固定，反之就不固定
    if (scroH >= navH) {
        $(".fixed-container").slideDown(0);

    }
    else if (scroH < navH) {
        $(".fixed-container").slideUp(0);
    }
}


function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1)
                c_end = document.cookie.length;
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}

function setCookie(c_name, value, expiredays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + expiredays);
    document.cookie = c_name + "=" + escape(value) +
            ((expiredays == null) ? "" : "; expires=" + exdate.toGMTString()) + "; path=/";
}

function delCookie(c_name) {//为了删除指定名称的cookie，可以将其过期时间设定为一个过去的时间
    var date = new Date();
    date.setTime(date.getTime() - 10000);
    document.cookie = c_name + "=a; expires=" + date.toGMTString();
}

// Read a page's GET URL variables and return them as an associative array.
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for (var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
function buttonTimerStart(domBtn, timer) {
    timer = timer / 1000 //convert to second.
    var interval = 1000;
    var timerTitle = '秒后重发';
    domBtn.attr("disabled", true);
    domBtn.html(timer + timerTitle);

    timerId = setInterval(function () {
        timer--;
        if (timer > 0) {
            domBtn.html(timer + timerTitle);
        } else {
            clearInterval(timerId);
            timerId = null;
            domBtn.html("重新发送");
            domBtn.attr("disabled", false);
        }
    }, interval);
}
function confirmbtnTimerStart(domBtn, timer) {
    timer = timer / 1000 //convert to second.
    var interval = 1000;
    var timerTitle = '确 认';
    domBtn.attr("disabled", false);
    domBtn.html(timerTitle + "(" + timer + ")");

    timerId = setInterval(function () {
        timer--;
        if (timer > 0) {
            domBtn.html(timerTitle + "(" + timer + ")");
        } else {
            clearInterval(timerId);
            timerId = null;
            location.reload();
        }
    }, interval);
}

//判断是否是微信打开
function isUserAgentWeixin() {
    var ua = navigator.userAgent.toLowerCase();
    if (ua.match(/MicroMessenger/i) == "micromessenger") {
        return true;
    } else {
        return false;
    }
}
//disabledBtn
function disabledBtn(btnSubmit) {
    btnSubmit.attr("disabled", true);
}
//enableBtn
function enableBtn(btnSubmit) {
    btnSubmit.attr("disabled", false);
}

//因预约按钮可能是js生成，这里初始化预约未登录就填出登录框
function initBookingBtn() {
    $('.bookingBtn').click(function (e) {
        e.preventDefault();
        var c_name = getCookie('user');
        var bookingBtn = $(this);
        if (c_name) {
            openBookingModal(bookingBtn);
        } else {
            $('#loginModal').modal();
        }
    });
}
function openBookingModal(bookingBtn) {
    $('#bookingModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var hospital = bookingBtn.data('hospital');
        var dept = bookingBtn.data('dept');
        var hospitalId = bookingBtn.data('hospitalid');
        var deptId = bookingBtn.data('deptid');
        var modal = $(this);
        modal.find('.modal-content input[name="booking[hospital_id]"]').val(hospitalId);
        modal.find('.modal-content input[name="booking[hp_dept_id]"]').val(deptId);
        modal.find('.modal-content input[name="booking[hp_dept_name]"]').val(dept);
        modal.find('.modal-content .hospital-name').text(hospital);
        modal.find('.modal-content .dept-name').text(dept);

        var docid = bookingBtn.data('docid');
        var docname = bookingBtn.data('docname');
        var dochospital = bookingBtn.data('dochospital');
        var docdept = bookingBtn.data('docdept');
        modal.find('.modal-content input[name="booking[doctor_id]"]').val(docid);
        modal.find('.modal-content .docname').text(docname);
        modal.find('.modal-content .dochospital').text(dochospital);
        modal.find('.modal-content .docdept').text(docdept);
    });
    $('#bookingModal').modal();
}
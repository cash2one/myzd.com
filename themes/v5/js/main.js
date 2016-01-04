$(document).ready(function (e) {
    if (isDeviceMobile()) {
        $browserModeMenu = $("#browsermode-menu");
        $browserModeMenu.show();
        $("#site-header").css("margin-top", "20px");
    }

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
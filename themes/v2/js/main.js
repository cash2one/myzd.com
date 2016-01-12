
jQuery(document).ready(function () {

    if (isDeviceMobile()) {
    } else {
        // toggle partner list in footer.        
        //  window.setInterval(togglePartnerList2, 2000);
        /*    
        $(".dropdown-hover").hover(function(){
            $(this).find(".dropdown-menu").stop(true, true).slideToggle();
        });
        */
        
        /** Widget site contactus **/
        
        $(".site-enquiry").click(function(e){            
            e.preventDefault();
            showModalSiteEnquiry();
            return false;
        });
        
        //   var showSiteContactUs=false;
        //var domSiteContactUs = $(".site-contactus");
        /* $(".site-contactus").click(function(e){
            e.preventDefault();
            showModalContactus();
            return false;
        });
        */
        /** Widget go to top **/
        var showTotop=false;
        var domTotop = $(".totop");
          
        /** to top **/
        domTotop.click(function(e){
            e.preventDefault();             
            $('html,body').animate({
                scrollTop: '0px'
            }, 500);
            return false;
        });
        
    /** Scroll event **/
    /*
        var heightOffset = $(window).height()/2;
        //     jQuery.noConflict();
        
        $(window).scroll(function(e) {
            if($(this).scrollTop()<heightOffset){
                if(showSiteContactUs){
                    domSiteContactUs.fadeOut();
                    showSiteContactUs=false;
                }
                if(showTotop){
                    domTotop.fadeOut();
                    showTotop=false;
                }
                
            }else{
                if(showSiteContactUs===false){
                    domSiteContactUs.fadeIn();
                    showSiteContactUs=true;
                }
                if(showTotop===false){
                    domTotop.fadeIn();
                    showTotop=true;
                }
            }
        });
        */
    }
	
	
});

/** Show enquiry modal **/
function showModalSiteEnquiry(){
    var domModal = $("#modal-site-enquiry");
    var domForm = domModal.find("form");
    domForm.unbind();    
    // clear previous input
    domForm.find(".errorMessage").hide();
    domForm.find("input[name=mobiile]").val("");

    domModal.modal({
        'show':true,
        'backdrop':'static'
    });
    
    domModal.on('hidden.bs.modal', function (e) {
        // if form is successfully submitted, restore to initial status.
        if(domForm.hasClass("success")){
            domForm.removeClass("success");            
        }
        // resume modal size.
        if(domModal.find(".modal-dialog").hasClass("modal-sm")){
            domModal.find(".modal-dialog").removeClass("modal-sm");
        }
    })

}

/** Show contact us modal **/
function showModalContactus(){
    var form = $("#modal-contactus").find("form");
    form.unbind();
    //  ajaxSubmit(form);
    // clear previous input
    form.find(".errorMessage").hide();
    form.find("input[name=mobiile]").val("");

    $("#modal-contactus").modal({
        'show':true,
        'backdrop':'static'
    });

}
/** not complete **/
function ajaxSubmit(form){
    var url = form.attr("action");
    var data = form.serialize();
    data+="&ajax=1";
    form.submit(function(e){
        e.preventDefault();
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            dataType: "json",
            processData: false,
            contentType: false,
            success: function (response) {
                if(response.errors){
                    for(error in response.errors){
                    
                        }
                
                }else{
                    console.log(response);
                }

            },
            error: function (errorStatus, errorText) {
                alert(errorText);
            }
        })
    });  
    
}


/** Extending jQuery slide effect **/
jQuery.fn.extend({
    slideRightShow: function() {
        return this.each(function() {
            $(this).show('slide', {
                direction: 'right'
            }, 1000);
        });
    },
    slideLeftHide: function() {
        return this.each(function() {
            $(this).hide('slide', {
                direction: 'left'
            }, 1000);
        });
    },
    slideRightHide: function() {
        return this.each(function() {
            $(this).hide('slide', {
                direction: 'right'
            }, 1000);
        });
    },
    slideLeftShow: function() {
        return this.each(function() {
            $(this).show('slide', {
                direction: 'left'
            }, 1000);
        });
    }
});




function isUserLogin() {
    return  gs_current_user != '';
}
function isDeviceMobile() {
    return  /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}
function bindVisibleOnHover() {
    $(".visible-on-hover").css("visibility", 'hidden');
    $('.visible-on-hover-container').hover(function () {
        $(this).find(".visible-on-hover").css("visibility", 'visible');
    }, function () {
        $(this).find(".visible-on-hover").css("visibility", 'hidden');
    });
}
function resizeContent() {
    if ($(window).height() > $("body").height()) {
        var h = $(window).height() - $("#header").height() - 140;
        $("#content").height(h);
    }
}

function showModalLogin() {
    $("#modal-login").find("form").unbind();
    $("#modal-login").find("form").submit(modalAjaxLogin);
    // clear previous input
    $("#LoginForm_username_error").hide();
    $("#LoginForm_password_error").hide();
    $("#LoginForm_general_error").hide();
    $("#LoginForm_verify_code_error").hide();
    $("#LoginForm_username").val("");
    $("#LoginForm_password").val("");

    $("#modal-login").modal('show');
}

if (typeof String.prototype.trim !== 'function') {
    String.prototype.trim = function () {
        return this.replace(/^\s+|\s+$/gm, '');
    }
}
function refresh() {
    window.location.reload(true);
}
function sleep(millis, callback) {
    setTimeout(function ()
    {
        callback();
    }
    , millis);
}
function sleep2(ms){
    setTimeout(function(){
        var start = new Date().getTime(); 
        while ((new Date().getTime() - start) < ms){
    // Do nothing
    }
    },0);

}

/*** Bootstrap Alerts ****/
/**** message is added via jquery.after() ****/
function showBootstrapAlert(css, selector, msg) {
    var html = '<div class="alert ' + css + ' alert-dismissible" role="alert">'
    + '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>'
    + msg
    + '</div>';
    $(selector).after(html);
}
function showAlert(selector, msg, cssClass) {
    showBootstrapAlert('alert-danger ' + cssClass, selector, msg);
}
function showWarning(selector, msg, cssClass) {
    showBootstrapAlert('alert-warning ' + cssClass, selector, msg);
}
function showSuccess(selector, msg, cssClass) {
    showBootstrapAlert('alert-success ' + cssClass, selector, msg);
}
function showInfo(selector, msg, cssClass) {
    showBootstrapAlert('alert-info ' + cssClass, selector, msg);
}

function myhzShowModalAlert(title, bodyDom, footerDom, isBackdropStatic) {
    title = title || "&nbsp;";
    bodyDom = bodyDom || "";
    footerDom = footerDom || "<div class='text-center'><button class='btn btn-warning' data-dismiss='modal'>关闭</button></div>";

    var backdrop = "";
    if (isBackdropStatic) {
        backdrop = 'data-backdrop="static"';
    }
    var template = '<div class="modal fade" ' + backdrop + ' role="dialog" show="true" aria-hidden="true"> ' +
    '<div class="modal-dialog modal-sm">' +
    '<div class="modal-content">' +
    '<div class="modal-header" style="padding-bottom:5px;">' +
    '<button type="button" class="close" data-dismiss="modal" style="position:absolute;right:15px;"><span aria-hidden="true" class="glyphicon glyphicon-remove-sign"></span></button>' +
    '<h3 class="modal-title color-green">' + title + '</h3>' +
    '</div>' +
    '<div class="modal-body">' +
    '<div class="h4 text-success" style="min-height:80px;text-align:center;">' + bodyDom + '</div>' +
    '<div class="modal-footer" style="padding-bottom:0;">' + footerDom + '</div>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>';
    var modal = $.parseHTML(template);
    $(document.body).append(modal);
    $(modal).modal("show");
}

// id should be passed without # tag
// title is normal string
// bodyDom, footerDom needs to be HTML string
function myhzShowModal(id, title, bodyDom, footerDom, isBackdropStatic) {
    title = title || "";
    bodyDom = bodyDom || "";
    footerDom = footerDom || "";

    if ($("#" + id).length !== 0) {
        // modal already exists
        // remove previous one
        $("#" + id).remove();
    }
    var backdrop = "";
    if (isBackdropStatic) {
        backdrop = 'data-backdrop="static"';
    }
    var template = '<div id="' + id + '" class="modal fade" ' + backdrop + ' role="dialog" show="true" aria-hidden="true"> ' +
    '<div class="modal-dialog">' +
    '<div class="modal-content">' +
    '<div class="modal-header noborder" style="padding-left:30px;padding-right:30px;">' +
    '<button type="button" class="close" data-dismiss="modal" style="position:absolute;right:15px;"><span aria-hidden="true" class="glyphicon glyphicon-remove-sign"></span></button>' +
    '<h3 class="modal-title">' + title + '</h3>' +
    '</div>' +
    '<div class="modal-body">' +
    bodyDom +
    '<div class="modal-footer noborder">' +
    footerDom +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>';
    var modal = $.parseHTML(template);
    $(document.body).append(modal);
    $(modal).modal("show");
}

// load user modify related function
var previousCountResponse = {
    book: 0,
    order: 0,
    total: 0,
    orderNewCount: 0,
    orderCfmCount: 0,
    orderPaidCount: 0,
    orderDoneCount: 0,
    bookNewCount: 0,
    bookCfmCount: 0,
    bookPaidCount: 0,
    bookDoneCount: 0
};
function isUpdated(count) {
    if (previousCountResponse === null)
        return false;
    for (var detailCount in count) {
        if (count[detailCount] !== previousCountResponse[detailCount]) {
            return true;
        }
    }
    return false;
}
function updateNotificationAjax(callback) {
    $.get(urlUserNotify, function (response) {
        // user has logged in
        if (response !== "[]") {

            //response = JSON.parse(response);
            var count = {};
            count.book = parseInt(response.notify.count_book_all);
            count.order = parseInt(response.notify.count_order_all);
            count.total = count.book + count.order;

            count.orderNewCount = parseInt(response.notify.count_order_new);
            count.orderCfmCount = parseInt(response.notify.count_order_cfm);
            count.orderPaidCount = parseInt(response.notify.count_order_paid);
            count.orderDoneCount = parseInt(response.notify.count_order_done);
            count.bookNewCount = parseInt(response.notify.count_book_new);
            count.bookCfmCount = parseInt(response.notify.count_book_cfm);
            count.bookPaidCount = parseInt(response.notify.count_book_paid);
            count.bookDoneCount = parseInt(response.notify.count_book_done);

            if (isUpdated(count)) {
                if (callback)
                    callback(count);
            }
            previousCountResponse = count;
        }
    });
}

convertRatingToStars = function (rating) {
    var count, numOfStars, stars;
    numOfStars = Math.floor(rating);
    count = 0;
    stars = ["", "", "", "", ""];
    while (count < numOfStars) {
        stars[count] = "full";
        count++;
    }
    if (rating - numOfStars > 0) {
        stars[count] = "half";
    }
    return stars;
};

createRatingView = function (container) {
    $(container).each(function () {
        var rating = $(this).attr("data-gs-rating");
        if (rating) {
            var stars = convertRatingToStars(rating);
            $(this).addClass("ratings")
            $(this).html("");
            for (var i = 0; i < 5; i++) {
                span = $("<span class='star'>&#9733;</span>");
                span.addClass(stars[i])
                $(this).append(span)
            }
        } else {
            console.log("rating is absent");
        }
    });
};

var modalAjaxLogin = (function () {
    var loginAttempt = 0;
    function isLoginParamsValid(username, password) {
        return username !== "" && password !== "";
    }
    function isCaptchaValid() {
        var value = $("#LoginForm_verifyCode").val();
        return value !== "";
    }
    function showUsernameError(errorMessage) {
        $("#LoginForm_username_error").html(errorMessage);
        $("#LoginForm_username_error").show();
    }
    function showPasswordError(errorMessage) {
        $("#LoginForm_password_error").html(errorMessage);
        $("#LoginForm_password_error").show();
    }
    function showVerifyCodeError(errorMessage) {
        $("#LoginForm_verify_code_error").html(errorMessage);
        $("#LoginForm_verify_code_error").show();
    }
    function showGeneralError(errorMessage) {
        $("#LoginForm_general_error").html(errorMessage);
        $("#LoginForm_general_error").show();
    }
    function clearAllError() {
        $("#LoginForm_username_error").hide();
        $("#LoginForm_password_error").hide();
        $("#LoginForm_general_error").hide();
        $("#LoginForm_verify_code_error").hide();
    }
    return function (e) {

        e.preventDefault();
        e.stopPropagation();
        clearAllError();
        var usernameInput = $(this).find("#LoginForm_username");
        var username = usernameInput.val();
        var passwordInput = $(this).find("#LoginForm_password");
        var password = passwordInput.val();
        var captchaInput = $("#LoginForm_verifyCode");
        var captchaRequired = $("#loginCaptcha").attr("data-captcha-required") === "true"

        if (isLoginParamsValid(username, password) && (!captchaRequired || isCaptchaValid())) {
            var data = new FormData();
            data.append(usernameInput.attr("name"), username);
            data.append(passwordInput.attr("name"), password);
            var rememberMeInput = $(this).find("#LoginForm_rememberMe");
            data.append(rememberMeInput.attr("name"), rememberMeInput.val());
            data.append("ajax", 1);
            if (captchaRequired) {
                data.append(captchaInput.attr("name"), captchaInput.val());
            }
            var url = $(this).attr("action");
            $.ajax({
                url: url,
                type: "POST",
                data: data,
                dataType: "json",
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.id) {
                        setUserId(response.id); // the function in header.js
                        return location.reload(true);
                    }
                    if (response.error.password) {
                        // username or password is not correct
                        showGeneralError("用户名或密码不正确");
                    }
                    if (response.error.verifyCode) {
                        showVerifyCodeError("验证码不正确");
                    }
                    if (response.captcha) {
                        $("#loginCaptcha").attr("data-captcha-required", "true");
                        $("#loginCaptcha").removeClass("hide");
                    }

                },
                error: function (errorStatus, errorText) {
                    console.log(errorText);
                }

            })
        } else {
            if (username === "") {
                showUsernameError("用户名不能为空");
            }
            if (password === "") {
                showPasswordError("密码不能为空");
            }
            if (captchaInput.val() === "") {
                showVerifyCodeError("验证码不能为空")
            }
        }



    }
})();



function getParamsFromScriptTag () {
    //get queryingstring of current script tag.
    var scripts = document.getElementsByTagName('script');
    var curScript = scripts[ scripts.length - 1 ];
    var query = curScript.src.replace(/^[^\?]+\??/,'');
    // parse query string.    
    var Params = new Object ();
    if ( ! query ) return Params; // return empty object
    var Pairs = query.split(/[;&]/);
    for ( var i = 0; i < Pairs.length; i++ ) {
        var KeyVal = Pairs[i].split('=');
        if ( ! KeyVal || KeyVal.length != 2 ) continue;
        var key = unescape( KeyVal[0] );
        var val = unescape( KeyVal[1] );
        val = val.replace(/\+/g, ' ');
        Params[key] = val;
    }
    return Params;
}

function getByClass(oParent,tagName,newClass){
    //获取oParent里的所有tagName标签
    var aElements = oParent.getElementsByTagName(tagName);
    //创建newArray数组,用于存储oParent里含有newClass的tagName标签
    var newArray = [];
    //根据条件筛选满足条件的aElements标签
    for(var i = 0;i<aElements.length;i++){
        //通过split()将每个aElements元素的class进行分割，并创建生成数组
        var cutClass = aElements[i].className.split(' ');
        //将含有newClass字符的aElements存入newArray数组对象里面
        for(var j = 0;j<cutClass.length;j++){
            if(cutClass[j] == newClass){
                newArray.push(aElements[i]);
                //满足条件后break,避免同一个标签含多个同样的class
                break;
            }
        }
             
    }
    //返回筛选的结果
    return newArray;
}

function buttonTimerStart(domBtn, timer){
    timer = timer/1000 //convert to second.
    var interval=1000;
    var timerTitle = '秒后重发';	
    domBtn.attr("disabled",true);
    domBtn.html(timer+timerTitle);

    timerId = setInterval(function(){
        timer--;
        if(timer>0){			
            domBtn.html(timer+timerTitle);
        }else{
            clearInterval(timerId);
            timerId=null;
            domBtn.html("重新发送");
            domBtn.attr("disabled",false);
        }
    },interval);
}
/* Validate China identity number */
function myhzValidateIdentity($value){
    var $now = new Date();
    var regex = /^[1-9]\d{16}(\d|x|X)$/;					
    if (!regex.exec($value)){
        return false;
    }
    var $subStr = $value.substring(6,14);
    var $year = $subStr.substring(0,4);
    if($year<1900){
        return false;
    }
    var $month = $subStr.substring(4,6);
    var $day = $subStr.substring(6,8);					
    var $birthday = $year+"-"+$month+"-"+$day;
    if(new Date().setFullYear($year,($month-1),$day)>$now){
        return false;		
    }
    
    return new Date($birthday).getDate()==$birthday.substring($birthday.length-2);
}
/* Validate China mobile number */
function myhzValidateMobile($value, allowEmpty){
    if(allowEmpty===false && $value.trim().length===0){
        return false;
    }
    else{
        var $regex = /^1\d{10}$/;
        return $regex.exec($value) !==null;
    }
}


function myhzBindFloatingSideMenu(){       
    var show=true;
    var domSideMenu=$("#sidemenu");
    var domFooter = $("#footer");
    var posTopFooter = domFooter.offset().top;
    var footerHeight=domFooter.height();
       
    $(window).scroll(function(e) {            
        var top=$(this).scrollTop();    
        if(top+footerHeight > posTopFooter){            
            domSideMenu.fadeOut();
            show=false;
        }else{
            if(show===false){
                domSideMenu.fadeIn(); 
                show=true;
            }
        }
    });
}
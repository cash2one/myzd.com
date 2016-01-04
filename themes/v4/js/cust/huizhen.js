jQuery(document).ready(function () {
    initBsTabs();
    if (isDeviceMobile()===false) {
        fixDoctorContentHeight();        
    }
});
    
function initBsTabs(){
    $(".bs-tabs>li:first-child").addClass("active");
    $(".bs-tab-content .tab-pane:first-child").addClass("active");
    $('.bs-tabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })
}
function fixDoctorContentHeight(){
    var padding=30*2+1;
    $(".doctor .content>.row").each(function(){
        var h = $(this).height()-padding;        
        $(this).find('.d-info').height(h);
    });
}
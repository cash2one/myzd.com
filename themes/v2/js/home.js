$(document).ready(function(){
    initHomeContentHeight();
    var pageSlider = $('#page-slider').bxSlider({
        mode: 'vertical',
        slideMargin: 0,
        slideSelector:'div.slide',
        infiniteLoop:false,
        controls:false  //next & prev.
    });
    bindMouseSrollEvent(pageSlider);
    $(window).resize(function () {        
        initHomeContentHeight();        
    });
    
    $("#page-slider>.slide .btn-app-dl").click(function(e){
        e.preventDefault();
        pageSlider.goToSlide(5);
    });
    //page-03 mouse over.
    $("#page-slider>.page-3 .workflow-controls>.control").hover(function(){
        var domWorkflow = $(this).parents(".workflow");
        domWorkflow.find(".workflow-description>.active").removeClass("active");
        //   console.log(domWorkflow);
        // $(this).parents(".workflow").find(".workflow-description>.active").removeClass("active");
        var selector = $(this).attr("data-toggle");
        //   console.log(selector);
        domWorkflow.find("."+selector).addClass("active");       
        
    });
    
    
});
    
function initHomeContentHeight(){
    var heightHeader= document.getElementById("site-header").offsetHeight;
    var heightWindow=$(window).height();
    var h = heightWindow-heightHeader;        
    $("#page-slider .slide").height(h);        
}
function bindMouseSrollEvent(slider){
    $(window).bind('mousewheel', function(event) {
        if (event.originalEvent.wheelDelta >= 0) {
            // console.log('Scroll up');
            slider.goToPrevSlide();
        }
        else {
            // console.log('Scroll down');
            slider.goToNextSlide();
        }
    });
}
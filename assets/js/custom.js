
$(window).scroll(function(){
    var scrollPos = $(document).scrollTop();
    //data = 1 - (scrollPos/400);
    if(scrollPos == 0){
    	$("nav").css("background","transparent");
    	$("nav").css("padding-top","2%");
    	$("nav ul a").css("color","#fff");
    	$(".brand-logo").css('display', 'none');
    	$("nav .brand-logo").css("padding","10px 0px!important");
    	$("nav").css("box-shadow", "none");
    	$(".menu").hide();
    }else{
    	$("nav").css("background","#fff");
    	$("nav").css("padding-top","0px");
    	$("nav ul a").css("color","#000");
        $(".brand-logo").css('display', 'block');
    	$(".brand-logo > img").css("max-width","15%");
    	$("nav .brand-logo").css("padding","5px 0px!important");
    	$("nav").css("box-shadow", "0px 10px 50px 0px rgba(84,110,122,0.15)");
    	$(".menu").show();
    }
}); 

$(document).ready(function(){
    $('.materialboxed').materialbox();
    $('.scrollspy').scrollSpy({
        getActiveElement :   function(id) {
        return $("a[href='#"+id+"']").parent("li").addClass("active");
      }
    });
    $('.sidenav').sidenav();

    $("#goaboutus").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#aboutus").offset().top
        }, 500);
    });

  });
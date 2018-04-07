/*-------------------------------------------------------------------------

	Theme Name: Cutting Edge
	
-------------------------------------------------------------------------*/

$(document).ready(function () {
	/*vars used throughout*/
	var wh,
		scrollSpeed = 750,
		parallaxSpeedFactor = 0.6,
		scrollEase = 'easeOutExpo',
		targetSection,
		sectionLink = 'a.navigateTo',
	 	section = $('.section');


//MENU --------------------------------------------------------------------------------/
	$(".menu a").click(function () {
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top + "px"
        }, {
            duration: 1000,
            easing: "swing"
        });
        return false;
    });

//DIRECTIONAL HOVER --------------------------------------------------------------------/  
 	$(function() {
    	$('.da-thumbs > article').hoverdir();
	});
   
 

});
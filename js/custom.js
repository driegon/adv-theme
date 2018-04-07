/*-------------------------------------------------------------------------

	Theme Name: Cutting Edge
	
-------------------------------------------------------------------------*/
var $m = jQuery;
$m(document).ready(function ($) {
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
	//DAGG: Da error ya que no reconoce hoverdir como una función de jQuery 
 	/*$(function() {
    	$m('.da-thumbs > article').hoverdir();
	});*/ 
   
 //SCROLL ------------------------------------------------------------------------------/
 	var headerTop = $('#header').offset().top;
    var headerBottom = headerTop + 95; // Sub-menu should appear after this distance from top.
    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop(); // Current vertical scroll position from the top
        if (scrollTop > headerBottom) { // Check to see if we have scrolled more than headerBottom
            if (($("#subMenu").is(":visible") === false)) {
                $('#subMenu').fadeIn('slow');
            }
        } else {
            if ($("#subMenu").is(":visible")) {
                $('#subMenu').hide();
            }
        }
    });

});
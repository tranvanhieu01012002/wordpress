function vw_pet_shop_menu_open_nav() {
	window.vw_pet_shop_responsiveMenu=true;
	jQuery(".responsive-menu .sidenav").addClass('show');
}
function vw_pet_shop_menu_close_nav() {
	window.vw_pet_shop_responsiveMenu=false;
 	jQuery(".responsive-menu .sidenav").removeClass('show');
}

jQuery(document).ready(function () {
	window.vw_pet_shop_currentfocus=null;
  	vw_pet_shop_checkfocusdElement();
	var vw_pet_shop_body = document.querySelector('body');
	vw_pet_shop_body.addEventListener('keyup', vw_pet_shop_check_tab_press);
	var vw_pet_shop_gotoHome = false;
	var vw_pet_shop_gotoClose = false;
	window.vw_pet_shop_responsiveMenu=false;
 	function vw_pet_shop_checkfocusdElement(){
	 	if(window.vw_pet_shop_currentfocus=document.activeElement.className){
		 	window.vw_pet_shop_currentfocus=document.activeElement.className;
	 	}
 	}
 	function vw_pet_shop_check_tab_press(e) {
		"use strict";
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.vw_pet_shop_responsiveMenu){
			if (!e.shiftKey) {
				if(vw_pet_shop_gotoHome) {
					jQuery( ".responsive-menu .main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				vw_pet_shop_gotoHome = true;
			} else {
				vw_pet_shop_gotoHome = false;
			}

		}else{

			if(window.vw_pet_shop_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.vw_pet_shop_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.vw_pet_shop_responsiveMenu){
				if(vw_pet_shop_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".responsive-menu .main-menu ul:first li:first a:first-child" ).is(":focus")) {
					vw_pet_shop_gotoClose = true;
				} else {
					vw_pet_shop_gotoClose = false;
				}
			
			}else{

			if(window.vw_pet_shop_responsiveMenu){
			}}}}
		}
	 	vw_pet_shop_checkfocusdElement();
	}
});

jQuery(function($){
 	"use strict";
   	jQuery('.main-menu > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
	});
});

(function( $ ) {
	jQuery('document').ready(function($){
	    setTimeout(function () {
    		jQuery("#preloader").fadeOut("slow");
	    },1000);
	});

	$(window).scroll(function(){
		var sticky = $('.header-sticky'),
  		scroll = $(window).scrollTop();
		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});

	$(document).ready(function () {
		$(window).scroll(function () {
		    if ($(this).scrollTop() > 100) {
		        $('.scrollup i').fadeIn();
		    } else {
		        $('.scrollup i').fadeOut();
		    }
		});

		$('.scrollup i').click(function () {
		    $("html, body").animate({
		        scrollTop: 0
		    }, 600);
		    return false;
		});
	});	
})( jQuery );

jQuery(document).ready(function () {
  	function vw_pet_shop_search_loop_focus(element) {
	  var vw_pet_shop_focus = element.find('select, input, textarea, button, a[href]');
	  var vw_pet_shop_firstFocus = vw_pet_shop_focus[0];  
	  var vw_pet_shop_lastFocus = vw_pet_shop_focus[vw_pet_shop_focus.length - 1];
	  var KEYCODE_TAB = 9;

	  element.on('keydown', function vw_pet_shop_search_loop_focus(e) {
	    var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

	    if (!isTabPressed) { 
	      return; 
	    }

	    if ( e.shiftKey ) /* shift + tab */ {
	      if (document.activeElement === vw_pet_shop_firstFocus) {
	        vw_pet_shop_lastFocus.focus();
	          e.preventDefault();
	        }
	      } else /* tab */ {
	      if (document.activeElement === vw_pet_shop_lastFocus) {
	        vw_pet_shop_firstFocus.focus();
	          e.preventDefault();
	        }
	      }
	  });
	}
	jQuery('.search-box span a').click(function(){
        jQuery(".serach_outer").slideDown(1000);
    	vw_pet_shop_search_loop_focus(jQuery('.serach_outer'));
    });

    jQuery('.closepop a').click(function(){
        jQuery(".serach_outer").slideUp(1000);
    });
});
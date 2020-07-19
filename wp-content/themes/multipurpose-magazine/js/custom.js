// NAVIGATION CALLBACK
jQuery(function($){
 	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
  	});
});

function multipurpose_magazine_resMenu_open() {
	window.mobileMenu=true;
	jQuery(".side-nav").addClass('show');
}
function multipurpose_magazine_resMenu_close() {
	window.mobileMenu=false;
	jQuery(".side-nav").removeClass('show');
}

jQuery(function($){
	$(window).scroll(function(){
	    if ($(window).scrollTop() >= 100) {
	        $('.toggle-menu').addClass('sticky');
	    }
	    else {
	        $('.toggle-menu').removeClass('sticky');
	    }
	});
	$(window).scroll(function(){
		var sticky = $('.sticky-header'),
			scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('fixed-header');
		else sticky.removeClass('fixed-header');
	});
	$(window).load(function() {
		$(".tg-loader").delay(2000).fadeOut("slow");
	    $("#overlayer").delay(2000).fadeOut("slow");
	});
	$(window).load(function() {
		$(".preloader").delay(2000).fadeOut("slow");
	    $(".preloader .preloader-container").delay(2000).fadeOut("slow");
	});

	// back to top.
	$( window ).scroll( function() {
		if ( $( this ).scrollTop() > 200 ) {
			$( '.back-to-top' ).addClass( 'show-back-to-top' );
		} else {
			$( '.back-to-top' ).removeClass( 'show-back-to-top' );
		}
	});
	$( '.back-to-top' ).click( function() {
		$( 'html, body' ).animate( { scrollTop : 0 }, 200 );
		return false;
	});
});

jQuery(window).load(function() {
	window.currentfocus=null;
	multipurpose_magazine_checkfocusdElement();
	var body = document.querySelector('body');
	body.addEventListener('keyup', multipurpose_magazine_check_tab_press);
	var gotoHome = false;
	var gotoClose = false;
	window.mobileMenu=false;
	function multipurpose_magazine_checkfocusdElement(){
	    if(window.currentfocus=document.activeElement.className){
	        window.currentfocus=document.activeElement.className;
	    }
	}
	function multipurpose_magazine_check_tab_press(e) {
	    "use strict";
	    e = e || event;
	    var activeElement;

	    if(window.innerWidth < 999){
		    if (e.keyCode == 9) {
		        if(window.mobileMenu){
				    if (!e.shiftKey) {
				        if(gotoHome) {
				            jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).focus();
				        }
				    }
				    if (jQuery("a.closebtn.responsive-menu").is(":focus")) {
				        gotoHome = true;
				    } else {
				        gotoHome = false;
				    }
		    	}
		    }
	    }
	    if (e.shiftKey && e.keyCode == 9) {
		    if(window.innerWidth < 999){
			    if(window.currentfocus=="header-search"){
			        jQuery("button.mobiletoggle").focus();
			    }else{
				    if(window.mobileMenu){
				        if(gotoClose){
				        	jQuery("a.closebtn.responsive-menu").focus();
				        }
				        if(jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).is(":focus")) {
				            gotoClose = true;
				        } else {
				            gotoClose = false;
				        }
				    }
			    }
		    }
	    }
	    multipurpose_magazine_checkfocusdElement();
	}
});

(function( $ ) {
	jQuery(document).ready(function() {
		var owl = jQuery('#categry .owl-carousel');
			owl.owlCarousel({
				nav: true,
				autoplay:true,
				autoplayTimeout:2000,
				autoplayHoverPause:true,
				loop: true,
				navText : ['<i class="fa fa-lg fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-lg fa-chevron-right" aria-hidden="true"></i>'],
				responsive: {
				  0: {
				    items: 1
				  },
				  600: {
				    items: 2
				  },
				  1000: {
				    items: 2
				}
			}
		})
	})
})( jQuery );
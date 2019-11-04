(function($) {
    'use strict'; // Start of use strict

    $(window).on("load scroll", function() {

        /*------------------------------------------------------------------
        Loader
        ------------------------------------------------------------------*/
        $("#loader").fadeOut("fast");
      
		 /*----------------------------------------------------
          Start Change Menu Bg
		 ----------------------------------------------------*/
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 200) {
                $('.header-top-area').addClass('menu-bg');
            } else {
                $('.header-top-area').removeClass('menu-bg');
            }
        });
       /*------------------------------------------------------------------
        Animation Numbers
        ------------------------------------------------------------------*/
        $('.animateNumber').each(function() {
            var num = $(this).attr('data-num');

            var top = $(document).scrollTop() + ($(window).height());
            var pos_top = $(this).offset().top;
            if (top > pos_top && !$(this).hasClass('active')) {
                $(this).addClass('active').animateNumber({
                    number: num
                }, 2000);
            }
        });
        $('.animateProcent').each(function() {
            var num = $(this).attr('data-num');
            var percent_number_step = jQuery.animateNumber.numberStepFactories.append('%');
            var top = $(document).scrollTop() + ($(window).height());
            var pos_top = $(this).offset().top;
            if (top > pos_top && !$(this).hasClass('active')) {
                $(this).addClass('active').animateNumber({
                    number: num,
                    numberStep: percent_number_step
                }, 2000);
                $(this).css('width', num + '%');
            }
        });
    });

    /*------------------------------------------------------------------
     Scroll Top
     ------------------------------------------------------------------*/
    $.scrollUp({
        scrollText: '<i class="fa fa-chevron-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
    /*----------------------------------------------------
                  Portfolio Isotope
   ----------------------------------------------------*/
    var body_s = $('body'),
        window_s = $(window);

    //======= ISOTOP FILTERING JS  ========//
    window_s.on('load', function() {
        var grid_container = $('.portfolio-container'),
            grid_item = $('.work');


        grid_container.imagesLoaded(function() {
            grid_container.isotope({
                itemSelector: '.work',
                layoutMode: 'masonry'
            });
        });

        $('.portfolio-filter').find('li').on('click', function(e) {
            $('.portfolio-filter li.active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            grid_container.isotope({
                filter: selector
            });
            return false;
            e.preventDefault();
        });
    });


	/*------------------------------------------------------------------
        Accordian Box
        ------------------------------------------------------------------*/
	
	//Accordion Box
	if($('.accordion-box').length){
		$(".accordion-box").on('click', '.acc-btn', function() {
			var targetParent = $(this).parents('.accordion-box');
			var target = $(this).parents('.accordion');
			if($(this).hasClass('active')!==true){
			$(targetParent).find('.accordion .acc-btn').removeClass('active');
			}
			if ($(this).next('.acc-content').is(':visible')){
				return false;
			}else{
				$(this).addClass('active');
				$(targetParent).find('.accordion').removeClass('active-block');
				$(targetParent).find('.accordion .acc-content').slideUp(300);
				target.addClass('active-block');
				$(this).next('.acc-content').slideDown(300);
			}
		});	
	}
            
		/*------------------------------------------------------------------
           Client slider
        ------------------------------------------------------------------*/
	  var owl = $("#client-slider");

    owl.owlCarousel({

        itemsCustom: [
            [0, 2],
            [450, 3],
            [600, 3],
            [700, 4],
            [1000, 5],
            [1200, 5],
            [1400, 5],
            [1600, 5]
        ],
        pagination: false,
       autoPlay: 3000, //Set AutoPlay to 3 seconds

    });
	 
	 /*------------------------------------------------------------------
        Mobile Nav
        ------------------------------------------------------------------*/
	 
	 $('.navbar-nav').slicknav({
			prependTo:".mobile-nav",
		});
	 
	 /*------------------------------------------------------------------
         Service Tab
        ------------------------------------------------------------------*/
	  
	  $(".services").on("click", "li", function(){

        var myID = $(this).attr("id");

        $(this).addClass("active").siblings().removeClass("active");

        $(".services .item").hide();

        $("#" + myID + "-content").fadeIn();

    });
	  
	  /*------------------------------------------------------------------
          About tab
        ------------------------------------------------------------------*/
	   
	   if($('.tabs-box').length){
		$('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));
			
			if ($(target).is(':visible')){
				return false;
			}else{
				target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
				target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
				$(target).fadeIn(300);
				$(target).addClass('active-tab');
			}
		});
	}
    //======= MAGNIFIC POPUP ========//
    $('.work a').magnificPopup({
        type: 'inline'
    });
    /*------------------------------------------------------------------
    Navigation Hover effect
    ------------------------------------------------------------------*/
    // jQuery for page scrolling feature - requires jQuery Easing plugin

    $('.smoth-scroll').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });
    // Highlight the top nav as scrolling occurs

    $('body').scrollspy({
        target: '.navbar-default',
        offset: 70
    });
    // Closes the Responsive Menu on Menu Item Click

    $('.navbar-collapse ul li a:not(.dropdown-toggle)').on('click', function() {
        $('.navbar-toggle:visible').click();
    });

    /*------------------------------------------------------------------
   	 Scrollup opacity downarrow 
	 ------------------------------------------------------------------*/
    var bottom_arrow = $('.bottom_row, .banner-content');
    $(window).on('scroll', function() {
        var st = $(this).scrollTop();
        bottom_arrow.css({
            'opacity': (1 - (st / 350))
        });
    });
    
	new WOW().init();
	

})(jQuery);
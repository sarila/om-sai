/*========================================================
    Written: 	   By Pawon Gurung
    Work Station:  Tech Coderz
    Website: 	   Moun Everest Sports and Events Private Limited 

================================================================*/

$(document).ready(function($) {
	/*==========================
		Functions Calling
	=============================*/
	BannerSlider();
	portfolioFilter();
    testimonialSlider();
    serviceSlider();
    portfolioSlider();
    // lazyLoad();

    /*==========================
        Banner Slider
    =============================*/
	function BannerSlider(){
		$('.slider-section .slider-holder').owlCarousel({
		    loop:true,
		    margin:0,
		    items: 1,
		    nav: true,
		    autoplay: true,
		    autoplayTimeout: 8000,
		    navText : ['<i class="fas fa-chevron-left"></i>',"<i class='fas fa-chevron-right'></i>"]
		});
	}

	/*==========================
        Portfolio Isotope
    =============================*/
    function portfolioFilter() {
        $("#porfolio").isotope({
            itemSelector: ".portfolio-item",
            // layoutMode: 'masonry',
            percentPosition: true,
            animationOptions: {
                duration: 750,
                easing: 'linear'
            }
        });

        // Add isotope click function
        $(".portfolio-filter li").on('click', function () {
            $(".portfolio-filter li").removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr("data-filter");
            $("#porfolio").isotope({
                filter: selector,
                animationOptions: {
                    animationDuration: 750,
                    easing: 'linear',
                    queue: false
                }
            })
            return false;
        })
    }

     /*==========================
        Clients Slider
    =============================*/
    function testimonialSlider(){
        $('.testimonial-section .testimonial-slider').owlCarousel({
            loop:false,
            margin:0,
            items: 1,
            autoplay: true,
            nav: false,
            autoplayTimeout: 3000,
            dots: true,
        });
    }

    /*==========================
        Service Slider
    =============================*/
    function serviceSlider(){
        $('.service-slider .slider-holder').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:2
                },
                1000:{
                    items:2
                },
                1200:{
                    items:3
                },
            }
        })
        
    };

     /*==========================
        portfolio Slider
    =============================*/
    function portfolioSlider(){
        $('.portfolio-slider .slider-holder').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay: true,
            autoplaySpeed: 3000,
            items: 1,
            dots: true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        });
    };

    
        $('img').unveil(200, function() {
            $(this).on(function() {
                this.style.opacity = 1;
            });
        });
    
});
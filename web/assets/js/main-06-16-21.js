/* Demo Scripts for Bootstrap Carousel and Animate.css article
  on SitePoint by Maria Antonietta Perna
 */
  (function ($) {


    
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();
        if (scroll < 400) {
            $("#sticky-header").removeClass("sticky");
            $("#back-top").fadeIn(500);
        } else {
            $("#sticky-header").addClass("sticky");
            $("#back-top").fadeIn(500);
        }
    });

    


    var blogSlider = function () {

		$('.owl-carousel.pb-feedback-slider').owlCarousel({
            dots: true,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            responsive: {
              0: {
                dotsEach: 5,
                items: 1
              },
              600: {
                dotsEach: 3,
                items: 2
              },
              1200: {
                dotsEach: 1,
                items: 2
              }
            }
          });
		};
       
          
    blogSlider();


        	// Owl Carousel
	// var owlCrouselFeatureSlide = function() {
	// 	var owl = $('.owl-carousel.pb-feedback-slider');
	// 	owl.owlCarousel({
	// 	   autoplay: true,
	// 	   loop: true,
	// 	   margin: 30,
	// 	   responsiveClass: true,
	// 	   nav: true,
	// 	   dots: true,
	// 	   smartSpeed: 500,
	// 	   responsive:{
	// 			0:{
	// 			items:1
	// 			},
	// 			600:{
	// 			   items:2
	// 			},
	// 			1000:{
	// 			   items:3
	// 			}
	// 	    },
	// 	   navText: [
	// 	      "<i class='fas fa-chevron-left'></i>",
	// 	      "<i class='fas fa-chevron-right'></i>"
	//      	]
	// 	});

    // }
    // 	owlCrouselFeatureSlide();


    var recentBlogSlider = function () {

		$(".recentBlogs.owl-carousel").owlCarousel({
				loop: true,
				margin: 20,
				arrows: true,
				dots: false,
				autoplay: false,
				autoplayTimeout: 2000,
				autoplayHoverPause: true,
				nav: true,
				navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
				responsive: {
					0: {
						items: 1,
					},
					600: {
						items: 2,
					},
            1200: {
						items: 3,
					},
				},
			});
		};

        recentBlogSlider();



    

    var blogSlider = function () {

		$(".La_clients_slider.owl-carousel").owlCarousel({
				loop: true,
				margin: 20,
				arrows: false,
				autoplay: true,
				autoplayTimeout: 2000,
				autoplayHoverPause: true,
				nav: false,
				navText:false,
                dots: true,
				responsive: {
					0: {
						items: 1,
					},
                    400: {
						items: 1,
					},
					600: {
						items: 1,
					},
					1000: {
						items: 1,
					},
				},
			});
		};

    blogSlider();


    // $(window).scroll(function(){
    //     if ($(window).scrollTop() >= 300) {
    //         $('#navbar_fixed_view').addClass('fixed-header');
    //         $('#navbar_fixed_view div').addClass('visible-title');
    //     }
    //     else {
    //         $('#navbar_fixed_view').removeClass('fixed-header');
    //         $('#navbar_fixed_view div').removeClass('visible-title');
    //     }
    // });

    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();
        if (scroll < 400) {
            $("#sticky-header").removeClass("sticky");
            $("#back-top").fadeIn(500);
        } else {
            $("#sticky-header").addClass("sticky");
            $("#back-top").fadeIn(500);
        }
    });

    
    var counter = function () {
        $('.counter-count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
              
              //chnage count up speed here
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });

        }
        counter();

})(jQuery);

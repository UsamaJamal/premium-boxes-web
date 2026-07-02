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

    var relatedProdSlider = function () {

      $('.owl-carousel.pb-relatedProd-slider').owlCarousel({
              dots: true,
              loop: true,
              margin: 20,
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
                  items: 4
                }
              }
            });
      };
         
            
      relatedProdSlider();



    $(".prod-sm-items").owlCarousel({
      loop: true,
      margin: 10,
      dots: true,
      smartSpeed: 1200,
      autoHeight: false,
      autoplay: true,
      responsive: {
          0: {
              items: 3,
          },
          600: {
              items: 3,
          },
          1000: {
              items: 4,
          },
      },
  });
  /*------------------
  Single Product
--------------------*/
  $(".prod-sm-items img").on("click", function () {
      var imgurl = $(this).data("imgbigurl");
      var bigImg = $(".prod-items-pic").attr("src");
      if (imgurl != bigImg) {
          $(".prod-items-pic").attr({
              src: imgurl,
          });
      }
  });





})(jQuery);

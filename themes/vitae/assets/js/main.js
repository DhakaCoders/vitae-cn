(function($) {
var windowWidth = $(window).width();
$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});
	
if($('.matchHeightCol').length){
    $('.matchHeightCol').matchHeight();
  };
if($('.mHc').length){
    $('.mHc').matchHeight();
  };
/**
Responsive on 767px
*/

// if (windowWidth <= 767) {

  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }


 /*
---------------------------
 Xs Menu js
---------------------------
*/
if (windowWidth <= 767) {

    $('.opener-inner').on('click', function(){
    $('nav.main-nav').fadeIn(500);
    $('nav.main-nav').addClass('add-cls-show');
  });

  $('.opener-inner').on('click', function(){
    $('nav.main-nav').fadeOut(500);
    $('nav.main-nav').removeClass('add-cls-show');
  });

  $('nav.main-nav > ul > li.menu-item-has-children > a').on('click', function(e){
    e.preventDefault();
    $(this).parent().find('ul.sub-menu').slideToggle(500);
    $(this).toggleClass('sub-menu-expend')
  });

}


// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


//$("[data-fancybox]").fancybox({});



/*Milon*/

$('[data-toggle="tooltip"]').tooltip(); 






/*Prashanto*/
// var windowWidth = $(window).width();
// if (windowWidth <= 767) {
//   if( $('.lmSocialSilder').length ){
//     $('.lmSocialSilder').slick({
//       pauseOnHover: false,
//       autoplay: false,
//       autoplaySpeed: 6000,
//       dots: true,
//       infinite: true,
//       arrows:true,
//       speed: 1000,
//       slidesToShow: 1,
//       slidesToScroll: 1,
//       fade: true,


//       prevArrow: $('.blogGrdSlider-arrows .leftArrow'),
//       nextArrow: $('.blogGrdSlider-arrows .rightArrow'),
//       responsive: [
//         {
//           breakpoint: 576,
//           settings: {
//             slidesToShow: 1,
//             dots: true,
//           }
//         }
//       ]

//     });
//   }


// }

// if (windowWidth <= 767) {}

  // if( $('.lmCommunitySlider').length ){
  //   $('.lmCommunitySlider').slick({
  //     pauseOnHover: false,
  //     autoplay: false,
  //     autoplaySpeed: 6000,
  //     dots: true,
  //     infinite: true,
  //     arrows:true,
  //     speed: 1000,
  //     slidesToShow: 2,
  //     slidesToScroll: 1,
  //     fade: true,


  //     prevArrow: $('.blogGrdSlider-arrows .leftArrow'),
  //     nextArrow: $('.blogGrdSlider-arrows .rightArrow'),
  //     responsive: [
  //       {
  //         breakpoint: 576,
  //         settings: {
  //           slidesToShow: 1,
  //           dots: true,
  //         }
  //       }
  //     ]

  //   });
  // }







/*Rannojit*/
/*if( $('.tooltip-btn').length ){
  $('[data-toggle="tooltip"]').tooltip();
}*/

if( $('.partnersSlider').length ){
    $('.partnersSlider').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      prevArrow: $('.partners-slider-ctlr .slide-prev-btn'),
      nextArrow: $('.partners-slider-ctlr .slide-next-btn'),
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 768,
          settings: {
            dots: true,
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            dots: true,
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}
if( $('.exchangeSolutionSlider').length ){
    $('.exchangeSolutionSlider').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: $('.exchange-solution-slider-ctlr .slide-prev-btn'),
      nextArrow: $('.exchange-solution-slider-ctlr .slide-next-btn'),
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}

if( $('.dfp-grd-slider-1').length ){
    $('.dfp-grd-slider-1').slick({
      dots: false,
      arrow:false,
      prevArrow: $('.dfp-grd-slider-ctlr .slide-prev-btn'),
      nextArrow: $('.dfp-grd-slider-ctlr .slide-next-btn'),
      infinite: false,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrow: true
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}


if( $('.dfp-grd-slider-2').length ){
    $('.dfp-grd-slider-2').slick({
      dots: false,
      arrow:false,
      infinite: false,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}
/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}

    new WOW().init();

})(jQuery);










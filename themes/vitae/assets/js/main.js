(function($) {
var windowWidth = $(window).width();
$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});
	
if($('.matchHeightCol').length){
    $('.matchHeightCol').matchHeight();
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
    $(this).toggleClass('menu-expend');
    $('header nav.main-nav').slideToggle(500);
  });

  $('nav.main-nav li.menu-item-has-children > a').on('click', function(e){
    e.preventDefault();
    $('.main-nav').toggleClass("color-changes-mobile");
    $(this).toggleClass('menu-expend-sub');
    $(this).parent().find('.sub-menu').slideToggle(500);
  });
}


// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


//$("[data-fancybox]").fancybox({});



/*Milon*/

$('[data-toggle="tooltip"]').tooltip(); 

if (windowWidth <= 767) {
  if( $('#AboutSerSlider').length ){
      $('#AboutSerSlider').slick({
        arrows:false,
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
      });
  }
}






/*Prashanto*/
if (windowWidth <= 767) {

  if( $('.lmSocialSilder').length ){
      $('.lmSocialSilder').slick({
      dots: true,
      autoplay: false,
      autoplaySpeed: 4000,
      infinite: true,
      speed: 1000,
      arrows:true,
      slidesToShow: 2,
      slidesToScroll: 1,
      prevArrow: $('.lmSocialSilder-arrows .slide-prev-btn'),
      nextArrow: $('.lmSocialSilder-arrows .slide-next-btn'),
      responsive: [
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
  }


  if( $('.lmCommunitySlider').length ){
    $('.lmCommunitySlider').slick({
      dots: true,
      autoplay: false,
      autoplaySpeed: 4000,
      infinite: true,
      speed: 1000,
      arrows:true,
      slidesToShow: 2,
      slidesToScroll: 1,
      prevArrow: $('.lmCommunitySlider-arrows .slide-prev-btn'),
      nextArrow: $('.lmCommunitySlider-arrows .slide-next-btn'),
      responsive: [
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
  }

}


//for tab active btn
$('.lm-social-platform-tab-trg li > a').on('click', function(e){
  e.preventDefault();
    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');

});




/*Rannojit*/
/*if( $('.tooltip-btn').length ){
  $('[data-toggle="tooltip"]').tooltip();
}*/
if($('.mHc').length){
    $('.mHc').matchHeight();
};
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
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 768,
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

if( $('.dfp-grd-slider').length ){
    $('.dfp-grd-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
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










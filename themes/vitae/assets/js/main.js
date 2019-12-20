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
  $('.nav-opener').on('click', function(){
    $('.xs-popup-main-menu-wrap').fadeIn(500);
    $('.xs-popup-main-menu-wrap').addClass('add-cls-show');
  });

  $('.xs-menu-popup-close-btn').on('click', function(){
    $('.xs-popup-main-menu-wrap').fadeOut(500);
    $('.xs-popup-main-menu-wrap').removeClass('add-cls-show');
  });

  $('nav.main-nav > ul > li.menu-item-has-children > a').on('click', function(){
    $(this).parent().find('ul.sub-menu').slideToggle(500);
    $(this).toggleClass('sub-menu-expend')
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

  if( $('.lmSocialSilder-1').length ){
      $('.lmSocialSilder-1').slick({
      dots: true,
      autoplay: false,
      autoplaySpeed: 4000,
      infinite: true,
      speed: 1000,
      arrows:true,
      slidesToShow: 2,
      slidesToScroll: 1,
      prevArrow: $('.lmSocialSilder-1-arrows .slide-prev-btn'),
      nextArrow: $('.lmSocialSilder-1-arrows .slide-next-btn'),
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

  if( $('.lmSocialSilder-2').length ){
      $('.lmSocialSilder-2').slick({
      dots: true,
      autoplay: false,
      autoplaySpeed: 4000,
      infinite: true,
      speed: 1000,
      arrows:true,
      slidesToShow: 2,
      slidesToScroll: 1,
      prevArrow: $('.lmSocialSilder-2-arrows .slide-prev-btn'),
      nextArrow: $('.lmSocialSilder-2-arrows .slide-next-btn'),
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

if( $('.dfp-grd-slider-1').length ){
    $('.dfp-grd-slider-1').slick({
      dots: true,
      infinite: false,
      arrows: false,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.dfp-grd-slider-ctlr-1 .slide-prev-btn'),
            nextArrow: $('.dfp-grd-slider-ctlr-1 .slide-next-btn'),
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

if( $('.dfp-grd-slider-2').length ){
    $('.dfp-grd-slider-2').slick({
      dots: true,
      infinite: false,
      arrows: false,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.dfp-grd-slider-ctlr-2 .slide-prev-btn'),
            nextArrow: $('.dfp-grd-slider-ctlr-2 .slide-next-btn'),
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

if( $('#hbbgparticales').length ){
    particlesJS("hbbgparticales", {
  "particles": {
    "number": {
      "value": 30,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#9E9E9E"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#9E9E9E"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.3,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 10,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#9E9E9E",
      "opacity": 0.5,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 100,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
}

if( $('#vtabout-gridiant').length ){
    particlesJS("vtabout-gridiant", {
  "particles": {
    "number": {
      "value": 10,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#9E9E9E"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#9E9E9E"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.3,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 10,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#9E9E9E",
      "opacity": 0.5,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 100,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
}

if( $('#faqParticles').length ){
    particlesJS("faqParticles", {
  "particles": {
    "number": {
      "value": 10,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#9E9E9E"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#9E9E9E"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.3,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 10,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#9E9E9E",
      "opacity": 0.5,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 100,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
}

if( $('#wdparticales').length ){
    particlesJS("wdparticales", {
  "particles": {
    "number": {
      "value": 30,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#D7DBE4"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#D7DBE4"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.3,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 10,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#9E9E9E",
      "opacity": 0.5,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 100,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
}

})(jQuery);










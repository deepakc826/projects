//Back to top
$(window).scroll(function () {
       var height = $(window).scrollTop();
       if (height > 100) {
       $('#back-to-top').fadeIn();
       } else {
       $('#back-to-top').fadeOut();
       }
});
$(document).ready(function () {
       $("#back-to-top").click(function (event) {
       event.preventDefault();
       $("html, body").animate({
       scrollTop: 0
       }, "slow");
       return false;
       });
});
// treatment
jQuery("#treatment-carousel").owlCarousel({
       autoplay: true,
       lazyLoad: true,
       loop: true,
       margin: 20,
       responsiveClass: true,
       autoHeight: true,
       autoplayTimeout: 7000,
       smartSpeed: 800,
       dots: true,
       nav: true,
       responsive: {
         0: {
           items: 1
         },
     
         600: {
           items: 1
         },
     
         1024: {
           items: 2
         },
     
         1366: {
           items: 2
         }
       }
     });

//  testimonials
jQuery("#review-carousel").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 20,
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  dots: true,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 1
    },

    1024: {
      items: 2
    },

    1366: {
      items: 2
    }
  }
});
//  why choose
jQuery("#why-carousel").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 20,
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  dots: true,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 1
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
});
// var video=document.getElementById("myVideo") ;   
// $(video).on("click", function(e){
//   video.muted = !video.muted;
// });
document.getElementById("myVideo").volume=1;
// For Firefox we have to handle it in JavaScript 
var vids = $("video"); 
$.each(vids, function(){
       this.controls = false; 
}); 
// Loop though all Video tags and set Controls as false
$("video").click(function() {
  if (this.pause) {
    this.play();
  } else {
    this.pause();
  }
});

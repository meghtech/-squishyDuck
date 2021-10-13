(function ($) {
  "use strict";

  jQuery(document).ready(function($){
     $(".hero-slider").owlCarousel({
        items:1,
        loop: true,
        dots: true,
        nav: true,
        autoplay: true,
        // autoplayTimeout: 5000,
        // autoplaySpeed: 2000,
        // animateOut: 'fadeOut',
        // margin: 15,
      });

  });
  // Menu Trigger
   

      $(".menu-trigger").on('click', function(){
        $(".site-menu").addClass("active");
        $(".overlay").addClass("active");

        });
      $(".overlay, .menu-close ").on('click', function(){
        $(".site-menu").removeClass("active");
        $(".overlay").removeClass("active");

        });

  // jQuery(window).load(function(){

  // });

}(jQuery));


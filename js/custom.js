

// OnLoad
jQuery(document).ready(function($) {

  jQuery(".wpcf7-select").click(function(){
      $(".wpcf7-select").addClass("active");
  })

  // mobile menu toggle
  $(".mobile-menu").click(function(){
      $(this).toggleClass("active");
      $("#menu-main-menu").toggleClass("active");
      $(".menu-header").toggle();
      $("body").toggleClass("overflow");
  });

  // close menu 
  $("#enquire-popup").click(function(){
      $("#menu-main-menu").removeClass("active");
      $("body").removeClass("overflow");
  });

  $(".dropdown-btn").click(function(){
      $(this).next("ul").toggle();
      $(this).toggleClass("active");
  });

  jQuery(".ex-vat").insertAfter(".home .woocommerce-Price-amount");
//   jQuery(".product-info .variations").insertAfter(".product-info .quantity");

  // Adding text on variation selection
  jQuery(".variations label").prepend('Please choose ');


  jQuery('#size').attr("placeholder", "Type placeholder");


  $(window).resize(function(){
      if(screen.width >= 700){
          $(".mobile-menu").removeClass("active");
          $("#menu-main-menu").removeClass("active");
          $("body").removeClass("overflow");
      }
  });

  // Homepage hero slider
  $('.homepage-hero-main-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      fade: true,
      autoplay: true,
      swipeToSlide: true
  });


    // Search Bar Header placeholder text
    headerSearchBar();

    function headerSearchBar(){
      var headerSearchBarField = document.getElementsByClassName("search-field")[0];

      if(headerSearchBarField){
          if(document.querySelector("[placeholder='Search …']")){
              document.querySelector("[placeholder='Search …']").placeholder = "Search for products";
          }
      }
  } 
});


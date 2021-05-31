$(window).scroll(function () {
  var scroll = $(window).scrollTop();

  if (scroll >= 1) {
    //clearHeader, not clearheader - caps H
    $("#ceiling").addClass("sticky");
  } else {
    $("#ceiling").removeClass("sticky");
  }
});
$(document).ready(function () {
  if (window.location.pathname == "/") {
    $("body").removeClass("innerPage");
  } else {
    $("body").addClass("innerPage");
  }
  $("#products-archive .archive-filter .filter-wrapper h3").on(
    "click",
    function () {
      $("#products-archive .archive-filter .filter-wrapper").toggleClass(
        "opened"
      );
      $("#products-archive .archive-filter .filter-wrapper ul").slideToggle();
      $("#products-archive .archive-filter .filter-wrapper ul").addClass(
        "text-center"
      );
    }
  );
  // Move elements on mobile
  if ($(window).width() < 769) {
    if ($(".product-gallery-thumbs").length) {
      $(".product-gallery-thumbs").insertAfter($(".product-gallery-viewport"));
    }
  }
  // Mobile toggler
  $(".mob-trigger").click(function (e) {
    e.preventDefault();
    $("#navbar-mobile-container").slideDown();
  });
  $("#navbar-mobile-container .close-menu a").on("click", function (e) {
    e.preventDefault();
    $("#navbar-mobile-container").slideUp();
  });
});
$(document).ready(function () {
  let headerHeight = $("#ceiling").outerHeight();
  $(".pushContent").css("margin-top", headerHeight + 35);

  // archive filter
  $(".archive-filter ul li a").on("click", function (e) {
    e.preventDefault();
    $(".archive-filter ul li a").removeClass("active");
    $(this).addClass("active");
  });
  // Product Gallery
  $(".slider-for").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    swipeToSlide: true,

    asNavFor: ".slider-nav",
  });
  $(".slider-nav").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: ".slider-for",
    dots: false,
    arrows: true,
    swipeToSlide: true,
    focusOnSelect: true,
    vertical: true,
    infinite: true,
    prevArrow:
      '<a href="javascript:void(0);" class="slick-prev"><i class="fa fa-chevron-up"></i></a>',
    nextArrow:
      '<a href="javascript:void(0);" class="slick-next"><i class="fa fa-chevron-down"></i></a>',
    responsive: [
      {
        breakpoint: 769,
        settings: {
          vertical: false,
          arrows: false,
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });
  $(".slider-for").slickLightbox({
    src: "src",
    itemSelector: ".single-slide img",
  });
  $('#loading-overlay').fadeOut('slow');

});

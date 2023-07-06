AOS.init();

const infoSlider = new Swiper(".info__slider.swiper", {
  loop: false,
  effect: "slide",
  speed: 1000,
  slidesPerView: 1.2,
  pagination: {
    el: ".info__slider-pagination",
    type: "bullets",
    clickable: true,
  },
  spaceBetween: 20,
  breakpoints: {
    720: {
      slidesPerView: 4,
      centeredSlides: false,
      spaceBetween: 24,
    },
  },
});

const modalSlider = new Swiper(".modal-slider", {
  loop: false,
  effect: "slide",
  speed: 1000,
  slidesPerView: 1.2,
  pagination: {
    el: ".modal_pag_block",
    type: "bullets",
    clickable: true,
  },
  spaceBetween: 20,
});

let dmNavLink = document.querySelectorAll(".sw_lnk");
dmNavLink.forEach((item, index) => {
  item.addEventListener("click", function (e) {
    e.preventDefault();
    let attribute = item.getAttribute("href");
    $(attribute).addClass("active");
    $(".pop_ovr").addClass("active");
    let thisTarget = document.querySelector(`${attribute} .l_menu_in`);
    console.log("clock");
    if ($(window).width() > 720) {
      var $closestRow = $(this).closest(".rows_cards_ovr");
      var $colsCards = $closestRow.find(".cols_cards");
      $(".modal-goods").empty().append($colsCards.clone());
    }
    if ($(window).width() <= 720) {
      var $closestRow = $(this).closest(".blo_mb");
      var $colsCards = $closestRow.find(".swiper-slide");
      $(".mobile-modal-slider .swiper-wrapper").empty().append($colsCards.clone());
      modalSlider.update()
    }
  });
});

$(".l_close").on("click", function (e) {
  e.stopPropagation();
  $(".l_menu, .ml_burger, .l_popup").removeClass("active");
  $(".pop_ovr").removeClass("active");
});

jQuery(document).ready(function ($) {
  if ($(".blo_slr").length && $(window).width() <= 720) {
    let bloSlr = document.querySelectorAll(".blo_slr");
    $(".blo_slr").each(function (index, element) {
      let swiperPfo = new Swiper(element, {
        loop: true,
        slidesPerView: "1.2",
        spaceBetween: 10,
        pagination: {
          el: $(element).find(".nav_blo")[0],
          type: "bullets",
        },
      });
    });
  }
});

$("input[type=tel]").inputmask({ mask: "+7 (999) 999-99-99" });

$(document).on("click", 'a[href^="#"]', function (event) {
  event.preventDefault();

  $(".open-article").on("click", function () {
    let article = $(this).data("article");
    $(".modals")
      .find('.modal-article[data-article="' + article + '"]')
      .toggleClass("active")
      .siblings()
      .removeClass("active");
    $("body").addClass("modal-opened");
  });
  $(".modal__close").on("click", function () {
    $(".modal.active").removeClass("active");
    $("body").removeClass("modal-opened");
  });

  $('.file-upload input[type="file"]').change(function (e) {
    $(".file-upload__info .uploaded-file").html(e.target.files[0].name);
  });

  document.addEventListener(
    "wpcf7mailsent",
    function (event) {
      $(".modal-thank").addClass("active");
      setTimeout(function () {
        $(".modal-thank").removeClass("active");
      }, 3000);
    },
    false
  );
});

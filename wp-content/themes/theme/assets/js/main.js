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
    console.log("click");

    e.preventDefault();
    let attribute = item.getAttribute("href");
    $(attribute).addClass("active");
    $(".pop_ovr").addClass("active");
    let thisTarget = document.querySelector(`${attribute} .l_menu_in`);
    let bodyScrollBarMenu = Scrollbar.init(thisTarget, {
      damping: 0.1,
      //delegateTo: document,
      alwaysShowTracks: false,
      continuousScrolling: true,
    });
  });
});

$(".l_close").on("click", function (e) {
  e.stopPropagation();
  $(".l_menu, .ml_burger, .l_popup").removeClass("active");
  $(".pop_ovr").removeClass("active");
});

jQuery(document).ready(function ($) {
  if ($(".blo_slr").length && $(window).width() < 720) {
    let bloSlr = document.querySelectorAll(".blo_slr");
    $(".blo_slr").each(function (el) {
      let swiperPfo = new Swiper(this, {
        loop: true,
        // centeredSlides: true,
        // autoplay: {
        // 	delay: 500000,
        // 	disableOnInteraction: false
        // },
        slidesPerView: "1.2",
        // observer: true,
        // observeParents: true,
        // speed: 1600,
        spaceBetween: 10,
        pagination: {
          el: $(this).find(".nav_blo")[0],
          type: "bullets",
        },
      });
    });
  }

  $("input[type=tel]").inputmask({ mask: "+7 (999) 999-99-99" });

  $(document).on("click", 'a[href^="#"]', function (event) {
    event.preventDefault();

    $("html, body").animate(
      {
        scrollTop: $($.attr(this, "href")).offset().top - 10,
      },
      800
    );
  });

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

AOS.init();

const infoSlider = new Swiper('.info__slider.swiper', {
	loop: false,
	effect: 'slide',
	speed: 1000,
	slidesPerView: 'auto',
	pagination: {
		el: '.info__slider-pagination',
		type: 'bullets',
		clickable: true,
	},
});

const ProdSlider = new Swiper('.product-holder .swiper', {
	centeredSlides: true,
	effect: 'slide',
	loop: true,
	speed: 1000,
	autoplay: {
		delay: 1500,
	},
	breakpoints: {
		1: {
		  slidesPerView: 'auto',
		  spaceBetween: 20,
		},
		460: {
			slidesPerView: 3,
			spaceBetween: 20,
		}
	  }
});

jQuery(document).ready(function($) {

	$('input[type=tel]').inputmask({"mask": "+7 (999) 999-99-99"}); 

	$(document).on('click', 'a[href^="#"]', function (event) {
		event.preventDefault();
	
		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top - 10
		}, 800);
	});

	$('.open-article').on('click', function(){
		let article = $(this).data('article');
		$('.modals').find('.modal-article[data-article="' + article + '"]').toggleClass('active').siblings().removeClass('active');
		$('body').addClass('modal-opened');
	});
	$('.modal__close').on('click', function() {
		$('.modal.active').removeClass('active');
		$('body').removeClass('modal-opened')
	});


	$('.file-upload input[type="file"]').change(function(e) {
		$('.file-upload__info .uploaded-file').html(e.target.files[0].name);
	});
	
	document.addEventListener( 'wpcf7mailsent', function( event ) {
	    $('.modal-thank').addClass('active');
		setTimeout(function(){
		  $('.modal-thank').removeClass('active');
		}, 3000);
	}, false );
});
$(document).ready(function() {

//--------menu button-----
	$('#menuButton').on('click', function(){
		if($(this).hasClass('btn__menu-open')){
			$(this).removeClass('btn__menu-open');
			$('#menu').removeClass('menu__open');
			$('.sidebar').removeClass('sidebar__show');
		} else {
			$(this).addClass('btn__menu-open');
			$('#menu').addClass('menu__open');
			$('.sidebar').addClass('sidebar__show');
		}
	});

//---------main slider------
	$('#mainSlider').slick({
		infinite: true,
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '#mainImgSlider'
	});
	$('.main__slider').on('wheel', (function(e) {
	  	e.preventDefault();
	  	if (e.originalEvent.deltaY < 0) {
	    	$(this).slick('slickNext');
	  	} else {
	    	$(this).slick('slickPrev');
	  	}
	  }));
	$('#mainImgSlider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		vertical: true,
		asNavFor: '#mainSlider',
		speed: 900
	});
	$('#mainSlider').on('VoloChange', function(event, slick, currentSlide, nextSlide){
		console.log(currentSlide + ' and ' + $('#mainImgSlider').slick('slickCurrentSlide'));
		if(currentSlide != $('#mainImgSlider').slick('slickCurrentSlide')){
			 $('#mainImgSlider').slick('slickGoTo', currentSlide, false);
		}

	});

	// $('#mainSlider').on('afterChange', function(event, slick, currentSlide, nextSlide){
	//   $('#mainImgSlider').slick('slickGoTo', currentSlide, true);
	// });
	// $('#mainImgSlider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
	//   $('#mainSlider').slick('slickGoTo', nextSlide, true);
	// });

});
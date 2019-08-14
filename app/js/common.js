$(document).ready(function() {

// Товар в корзине Message
	$('.basket_btn').click(function(){
		$('.basket_update_info').addClass('active');
		setTimeout(function () {
      $('.basket_update_info').removeClass('active');
    }, 5000)
	});

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
	$('.menu__overlay').click(function(){
		$('#menu').removeClass('menu__open');
		$('#menuButton').removeClass('btn__menu-open');
		$('.sidebar').removeClass('sidebar__show');
	})
	$('.menu__wrap').click(function(event){
		event.stopPropagation();
	})
	function menu(){
		if($('.max-767').css("display") === 'block'){
			// $('.menu__parent').on('click', function(){
			// 	if(!$(this).hasClass('menu__parent-open')){
			// 	    var el= $(this)
			// 	    var list = el.parents('.menu__list');
			// 	 	el.parents('.menu__list').slideUp('1000', function(){
			// 	 		el.addClass('menu__parent-open');
			// 	 		list.children('li:not(".menu__parent-open")').hide();
			// 	 		list.slideDown('1000');
			// 	 	})
			// 	 	$('.menu__back').click(function(event){
			// 	    	event.stopPropagation();
			// 	    	list.slideUp('1000', function(){
			// 	    		$('.menu__parent.menu__parent-open').removeClass('menu__parent-open');
			// 	    		list.children('li').show();
			// 	    		list.slideDown('1000')
			// 	    	});
			// 	    });
			// 	}
			// });

			$('.menu__parent').on('click', function(){
				el = $(this);
				if(!el.hasClass('menu__parent-open')){
					$('.menu__parent').removeClass('menu__parent-open');
			 		el.addClass('menu__parent-open');
			 		
			 		setTimeout(function(){
		 				el.parents('.menu__list').addClass('menu__list-open')
		 			} , 300);
				} else {
					el.removeClass('menu__parent-open');
					el.parents('.menu__list').removeClass('menu__list-open');
				}
			});
		}
	}
	menu();
	var window_width = $(window).width();
	$(window).resize(function(){
		if(window_width != $(window).width()){
			window_width = $(window).width();
			$('.menu__parent').off('click');
			$('#menu').removeClass('menu__open');
			$('.sidebar').removeClass('sidebar__show');
			$('#menuButton').removeClass('btn__menu-open');
			$('.menu__parent.menu__parent-open').removeClass('menu__parent-open');
			$('.menu__list').show();
			$('.menu__list>li').show();
			menu();
		}
	});
	
//==========search btn ===========
	$('#formSearch').on('click', function(event){
		event.stopPropagation();
		$('html').one('click', function() {
            $("#formSearch").removeClass("search__form-open");
        });
        $('#btnSearch').one('click', function(event) {
            $("#formSearch").removeClass("search__form-open");
            event.stopPropagation();
            return false; //here must be ajax function
        });
		$('#formSearch').addClass('search__form-open');
		
		event.preventDefault();
		return false;
	});

//---------main slider------
	$('#mainSlider').slick({
		infinite: true,
		//vertical: true,
		verticalSwiping: true,
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		speed: 900,
		asNavFor: '#mainImgSlider',
		responsive: [
			{
				breakpoint: 768,
				settings: {
					verticalSwiping: false,
		      	}
	    	},
	    ]
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
		verticalSwiping: true,
		asNavFor: '#mainSlider',
		speed: 900,
		responsive: [
		    {
				breakpoint: 768,
				settings: {
					vertical: false,
					verticalSwiping: false,
		      	}
		    },
	    ]
	});
	$('#mainSlider').on('VoloChange', function(event, slick, currentSlide, nextSlide){
		if(currentSlide != $('#mainImgSlider').slick('slickCurrentSlide')){
			$('#mainImgSlider').slick('slickGoTo', currentSlide, false);
		}

	});

//========tab=========
	$('.tabs .tab').on('click', function(){
		if(!$(this).hasClass('tab-active')){
			$('.tab-active').removeClass('tab-active');
			$(this).addClass('tab-active');
			 var tab_content = $(this).data('tab');
			$('.tab__content-active').slideUp();
			$('#'+tab_content).slideDown().addClass('tab__content-active');
		}
	});
	$('.tab-mobil').on('click', function(){
		$(this).toggleClass('tab-active');
		var tab_content = $(this).data('tab');
		$('#'+tab_content).slideToggle().toggleClass('tab__content-active');
	});

//=========quantity====== 
	$('<button class="quantity-button quantity-up">+</button>').insertAfter('.quantity-input');
	$('<button class="quantity-button quantity-down">&ndash;</button>').insertBefore('.quantity-input');
    $('.quantity').each(function() {
	var spinner = $(this), 
		input = spinner.find('input[type="number"]'),
		btnUp = spinner.find('.quantity-up'),
		btnDown = spinner.find('.quantity-down'),
		min = input.attr('min'),
		max = input.attr('max');
		btnUp.click(function() {
			var oldValue = parseFloat(input.val());
			if (oldValue >= max) {
				var newVal = oldValue;
			} else {
				var newVal = oldValue + 1;
			}
			spinner.find("input").val(newVal);
			spinner.find("input").trigger("change");
			return false;
		});
		btnDown.click(function() {
			var oldValue = parseFloat(input.val());
			if (oldValue <= min) {
			  var newVal = oldValue;
			} else {
			  var newVal = oldValue - 1;
			}
			spinner.find("input").val(newVal);
			spinner.find("input").trigger("change");
			return false;
		});
    });

//====custom select
    $(".select").each(function() {
        var classes = $(this).attr("class"),
            id      = $(this).attr("id"),
            name    = $(this).attr("name");
        var template =  '<div class="' + classes + '">';
        var selectTriggerText = $(this).attr("placeholder")?$(this).attr("placeholder"):'';
        //selectTriggerText = $(this).find('option:selected').length>0?$(this).find('option:selected').text():selectTriggerText;
        template += '<span class="select-trigger">' + selectTriggerText + '</span>';
        template += '<div class="custom-options">';
        $(this).find("option").each(function() {
            template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
        });
        template += '</div></div>';

        $(this).wrap('<div class="select-wrapper"></div>');
        $(this).hide();
        $(this).after(template);
    });
    $(".custom-option:first-of-type").hover(function() {
        $(this).parents(".custom-options").addClass("option-hover");
    }, function() {
        $(this).parents(".custom-options").removeClass("option-hover");
    });
    $(".select-trigger").on("click", function(event) {
        $('html').one('click',function() {
            $(".select").removeClass("opened");
        });
        $(".select-trigger").not($(this)).parents(".select").removeClass("opened");
        $(this).parents(".select").toggleClass("opened");
        event.stopPropagation();
    });
    $(".custom-option").on("click", function() {
        $(this).parents(".select-wrapper").find("select").val($(this).data("value"));
        $(this).parents(".select-wrapper").find("select").trigger('change');
        $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
        $(this).addClass("selection");
        $(this).parents(".select").removeClass("opened");
        $(this).parents(".select").find(".select-trigger").text($(this).text());
    });

//====input===
    $('.input').on('focusout', function(){
		if($(this).val().trim() != ''){
			$(this).addClass('input-focus');
		} else{
			$(this).removeClass('input-focus');
		}
	});

//=====hint=====
	$('.hint').on('click', function(){
		$(this).toggleClass('hint-active');
	});


// ===== zoom function
	var theImage, theImageImg, magnifier, zoomImage, magnifierHeight,  magnifierWidth, theImageWidth, theImageHeight, zoomImageWidth, zoomImageHeight,
    zoomW, zoomH;

	function startZoom(){
		theImage = $('.hoverzoom'),
		theImageImg = $('.hoverzoom__img'),
		magnifier = $('.magnifier'),
		zoomImage = $('.zoom__image'),
		magnifierHeight = 200,
		magnifierWidth = 200,
		theImageWidth = parseInt(theImage.width()),
		theImageHeight = parseInt(theImage.height()),
		zoomImageWidth = parseInt(zoomImage.width()),
		zoomImageHeight = parseInt(zoomImage.height()),
		zoomW = theImageWidth/magnifierWidth* parseInt(zoomImage.width()),
		zoomH = theImageHeight/magnifierHeight* parseInt(zoomImage.height());

		// set magnifier width and height 
		magnifier.height(magnifierHeight+"px").width(magnifierWidth+"px"); 

		//add img clone to zoom image
		var img = new Image(); 
		img.src = theImageImg.attr('src'); 
		zoomImage.html(img);
		zoomImage.find('img').width(zoomW +'px').height(zoomH + 'px');
	}

	function generateZoom(){
		theImage.on('mousemove', function(event){
	    var imgPosX = theImage.offset().left,
	        imgPosY = theImage.offset().top,
	        Xstart = event.clientX - imgPosX,
			    Ystart = event.clientY -imgPosY,
	        posX, 
	        zoomX,
			    zoomY;
	    
	    if(Xstart<magnifierWidth/2){
			posX=0;
			zoomX=0;
	    } else if(Xstart>(theImageWidth-magnifierWidth/2)){
	        
	        posX = 'unset';
	        //zoomX = (zoomImageWidth / zoomW * 100) - magnifierWidth/2;
	        zoomX = magnifierWidth/theImageWidth*100 - 100;
	    } else {
	        var x = Xstart-magnifierWidth/2;
	        posX = x +"px";
	        zoomX = - x/theImageWidth*100;
	    };
			var posY;
	    if(Ystart<magnifierHeight/2){
			posY=0;
			zoomY=0;
	    } else if(Ystart>(theImageHeight-magnifierHeight/2)){
	        posY = 'unset';
	        //zoomY =  (zoomImageHeight / zoomH * 100) - magnifierHeight;
	        zoomY = magnifierHeight/theImageHeight*100 - 100;
	    } else {
	        var y = Ystart-magnifierHeight/2;
	        posY = y+"px";
	        zoomY = - y/theImageHeight*100;
	    };
			
			magnifier.css({opacity: 1}); 
			magnifier.css({left: posX}); 
			magnifier.css({top: posY});
			zoomImage.addClass('zoom__image-active').find('img').css({transform: "translateX("+zoomX+"%) translateY("+zoomY+"%)"}); 
	  });
	}

	function removeZoom(){
		magnifier.css({opacity: 0});
		zoomImage.removeClass('zoom__image-active');
	}

	function destroyZoom(){
		theImage.off('mousemove');
		theImage.off('mouseenter'); 
		theImage.off('mouseleave');
		zoomImage.removeClass('zoom__image-active');
	}

//===== product slider =====

	var slider = $('.vertical__slider');
	slider.on('init', function(){
		$('.bg-img__item').removeClass('hoverzoom__img');
		$('.slick-current .bg-img__item').addClass('hoverzoom__img');
		startZoom();
	});
	slider.slick({
	    arrows: false,
	    dots: true,
	    vertical: true,
	    customPaging : function(slick, i) {
	       // var nav = $(slick.$slides[i]).children('div').html();
	        var img = new Image(); 
			img.src = $(slick.$slides[i]).find('.bg-img__item').attr('src'); 
			img.class = 'bg-img__item';
	        return img;
	    },
	    appendDots: $('.vertical__bg'),
	    responsive: [
		    {
				breakpoint: 992,
				settings: {
					customPaging :  function(slick, i) {
						return'<div class="slick-dot"></div>'
					},
					vertical: false,
		      	}
		    },
	    ]
	});
	slider.on('wheel', (function(e) {
	  	e.preventDefault();
	  	if (e.originalEvent.deltaY < 0) {
	    	$(this).slick('slickNext');
	  	} else {
	    	$(this).slick('slickPrev');
	  	}
	}));

	function initZoom(){
		slider.on('afterChange', function(){
			$('.bg-img__item').removeClass('hoverzoom__img');
			$('.hoverzoom.zooming').removeClass('zooming');
			$('.slick-current .bg-img__item').addClass('hoverzoom__img');
			startZoom();
		});

		theImage.on('mouseenter', generateZoom); 
		theImage.on('mouseleave', function(e){
			removeZoom(); 
			$(this).off('mousemove', generateZoom)
		})
		startZoom();
	};

	if($('.hoverzoom').length > 0 ){
		initZoom();
		if ($('.max-991').css("display") === 'block') {
			destroyZoom();
		}
	} 
	
	$( window ).resize(function(){
		if($('.hoverzoom').length > 0 ){
			initZoom();
			if ($('.max-991').css("display") === 'block') {
				destroyZoom();
			}
		} 

	});

	$('#zoom').on('click', function(){
		if($('.hoverzoom').hasClass('zooming')){
			$('.hoverzoom').removeClass('zooming');
		} else{
			$('.hoverzoom').addClass('zooming');
		}
	});

//=====variation=====
	$('.variation__item-checked').on('click', function(event){
		event.stopPropagation();
		$('html').one('click', function(){
			$('.variation.variation-open').removeClass('variation-open');
		});
		var wrap = $(this).parents('.variation');
		if(wrap.hasClass('variation-open')){
			wrap.removeClass('variation-open');
		} else {
			wrap.addClass('variation-open');
		}		
		$('.variation__item').on('click', function(){
			var checkValue = $(this).find('.variation__label').text();
			$('.variation__item-checked').html(checkValue);
			$('.variation.variation-open').removeClass('variation-open');
		});

	})

});
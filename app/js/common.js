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

//========tab=========
	$('.tab').on('click', function(){
		if(!$(this).hasClass('tab-active')){
			$('.tab-active').removeClass('tab-active');
			$(this).addClass('tab-active');
			 var tab_content = $(this).data('tab');
			$('.tab__content-active').slideUp();
			$('#'+tab_content).slideDown().addClass('tab__content-active');
		}
	});

//======product gallery slidery=========
	$('.vertical__item').on('click', function(){
		var imgId = $(this).data('id');
		$('.bg-img__item-active').removeClass('bg-img__item-active hoverzoom__img');
		$('#' + imgId).addClass('bg-img__item-active hoverzoom__img');
		startZoom();
	})
//=========quantity====== 
	$('<div class="quantity-button quantity-up">+</div>').insertAfter('.quantity-input');
	$('<div class="quantity-button quantity-down">&ndash;</div>').insertBefore('.quantity-input');
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


    // zoom 
	var theImage,
    theImageImg,
    magnifier,
    zoomImage,
    magnifierHeight,
    magnifierWidth,
    theImageWidth,
    theImageHeight,
    zoomImageWidth,
    zoomImageHeight,
    zoomW,
    zoomH;

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
		zoomW = theImageWidth / magnifierWidth * parseInt(zoomImage.width()),
		zoomH = theImageHeight / magnifierHeight * parseInt(zoomImage.height());

		// set magnifier width and height 
		magnifier.height(magnifierHeight+"px"); 
		magnifier.width(magnifierWidth+"px"); 

		//add img clone to zoom image
		var img = new Image(); 
		img.src = theImageImg.attr('src'); 
		zoomImage.html(img);
		zoomImage.find('img').width(zoomW +'px');

		theImage.on('mouseenter', generateZoom); 
		theImage.on('mouseleave', function(e){
			removeZoom(); 
			$(this).off('mousemove', generateZoom)
		})
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
	        zoomX = magnifierWidth/2 - (zoomImageWidth / zoomW * 100);
	    } else {
	        var x = Xstart-magnifierWidth/2;
	        posX = x +"px";
	        zoomX = x/theImageWidth*100;
	    };
			var posY;
	    if(Ystart<magnifierHeight/2){
	      posY=0;
	      zoomY=0;
	    } else if(Ystart>(theImageHeight-magnifierHeight/2)){
	        posY = 'unset';
	        zoomY = magnifierHeight/2 - (zoomImageHeight / zoomH * 100);
	    } else {
	        var y = Ystart-magnifierHeight/2;
	        posY = y+"px";
	        zoomY = y/theImageHeight*100;
	    };
			
		magnifier.css({opacity: 1}); 
		magnifier.css({left: posX}); 
		magnifier.css({top: posY});
	    zoomImage.addClass('zoom__image-active').find('img').css({transform: "translateX("+-zoomX+"%) translateY("+-zoomY+"%)"}); 
	  });
	}

	function removeZoom(){
		magnifier.css({opacity: 0});
		zoomImage.removeClass('zoom__image-active')
	}

	startZoom();
	



});
(function(){	
	'use strict';
	$("#back-top").hide();
	$(window).scroll(function(){
		if($(this).scrollTop()>100){
			$("#back-top").fadeIn();
		}else{
			$("#back-top").fadeOut();
		}
	});
	$("#back-top a").click(function(){
		$("body,html").animate({
			scrollTop:0},800);
		return false;
	});
	$('.headerCon').height($('.sticky-header-con').height());
	
	//Mobile Navigation
	$('.menu').mobileMenu({
		defaultText: 'Navigate to...',
		className: 'mnav',
		subMenuDash: '&emsp;'
	});


	//Drop-Down Menu
	$(".menu li.parent, .menu li.parent li").hover(function () {
		$('a', this).addClass('current');
		$(this).children('ul').css({visibility: "visible", display: "none"}).slideDown(300);
	}, function () {
		$('a', this).removeClass('current');
		$('ul', this).css({visibility: "hidden", display: "none"});
	});

	
	
	$('#options #filters a').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('#options .title').text($(this).text());
	});

	$('.popup-gallery').magnificPopup({
		delegate: '.lightbox',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title');
			}
		},
		retina: {
			ratio: 2, // Increase this number to enable retina image support.
			// Image in popup will be scaled down by this number.
			// Option can also be a function which should return a number (in case you support multiple ratios). For example:
			// ratio: function() { return window.devicePixelRatio === 1.5 ? 1.5 : 2 }
			
			
			replaceSrc: function(item) {
				return item.src.replace(/\.\w+$/, function(m) { return '@2x' + m; });
			} // function that changes image source
		}
	});

	/* Here is the slider using default settings */
	$('#slider-id').liquidSlider({
            autoSlide: true
        });

	$('.bxslider').bxSlider({
		minSlides: 1,
		maxSlides: 3,
		auto: true,
		moveSlides: 1,
		slideWidth: 373,
		slideMargin: 30,
		prevText: '',
		nextText: ''
	});

	$('.clients').bxSlider({
		minSlides: 1,
		maxSlides: 5,
		auto: true,
		moveSlides: 1,
		slideWidth: 220,
		slideMargin: 17,
		prevText: '',
		nextText: ''
	});

	// validate form on keyup and submit
	$("#contactform").validate({
		rules: {
			contactname: {
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},
			subject: {
				required: true,
				minlength: 2
			},
			message: {
				required: true,
				minlength: 10
			}
		},
		messages: {
			contactname: {
				required: "Please enter your name",
				minlength: jQuery.format("Your name needs to be at least {0} characters")
			},
			email: {
				required: "Please enter a valid email address",
				minlength: "Please enter a valid email address"
			},
			subject: {
				required: "You need to enter a subject!",
				minlength: jQuery.format("Enter at least {0} characters")
			},
			message: {
				required: "You need to enter a message!",
				minlength: jQuery.format("Enter at least {0} characters")
			}
		},
		// set this class to error-labels to indicate valid fields
		success: function(label) {
			label.addClass("checked");
		},
		submitHandler: function() {
			$('#contactform').prepend('<p class="loaderIcon"><img src="img/ajax-loader.gif" alt="Loading..."></p>');
			var name = $('input#contactname').val();
			var email = $('input#email').val();
			var subject = $('input#subject').val();
			var message = $('textarea#message').val();

			$.ajax({
				type: 'post',
				url: 'sendMail.php',
				data: 'contactname=' + name + '&email=' + email + '&subject=' + subject + '&message=' + message,
				success: function(results) {
					$('#contactform p.loaderIcon').fadeOut(1000);
					$('#contactform div.response').html(results);
				}
			});	

			$(':input','#contactform').not(':button, :submit, :reset, :hidden').val('');

		}
	});


	//console.log('Working!!!');
	var con 		= $('.themes_settings'),
		opener 		= $('.trigger a'),
		colorGroup 	= $('.color-set .tot-colors a'),
		bgGroup     = $('.bgTheme .groupBg a');
		
	con.animate({right: '-214px'},800);
	
	//Open & Close
	opener.on('click', function(e){
		e.preventDefault();
		//con = $(this).parents().find(con);
		var conPos = con.css('right');
		if(conPos != '0px'){
			con.animate({right: '0px'},700,'swing');
		}
		else{
			con.animate({right: '-214px'},900,'swing');
		}
	});
	
	//Color Settings
	colorGroup.on('click', function(e){
		var cssName;
		colorGroup.removeClass('active');
		var $this = $(this);
		$this.addClass('active');
		cssName = "css/colors-css/" + $this.data('css') + '.css';
		
		$('.colorCssStyles').prop('href', cssName);
		$('.selCssName span').html($this.data('css'));
		console.log(cssName);
		
		e.preventDefault();
		
	});
	
	//Background Settings
	bgGroup.on('click', function(e){
		bgGroup.removeClass('active');
		$(this).addClass('active');
		var className = $(this).data('bgtheme');
		$('body').removeClass('noise').addClass(className);
		e.preventDefault();
	});
	var $elem = $('.pix-animate-cre');

		$elem.each(function(){
		    var $singleElement = $(this);

		    // Get data-attr from element
		    var animateTrans = $singleElement.data('trans') ? $singleElement.data('trans') : 'fadeIn';
		    var animateDelay = $singleElement.data('delay') ? $singleElement.data('delay') : '';
		    var animateDuration = $singleElement.data('duration') ? $singleElement.data('duration') : '';

			if(animateDelay != ''){
				$singleElement.css('animation-delay', animateDelay);
			}

			if(animateDuration != ''){
				$singleElement.css('animation-duration', animateDuration);
			}

			$singleElement.waypoint(function() {
				if ($singleElement.hasClass('animated ' + animateTrans)) return;



				$singleElement.css('opacity','1').addClass('animated '+ animateTrans);

			},
			{
				offset: '70%',
				triggerOnce: true
			});
		});

})();
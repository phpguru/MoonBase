jQuery(document).ready(function ($) {

	// Smooth scroll to anchor - to use it, add .scroll to an <a> tag
	$(".scroll").click(function (event) {
		event.preventDefault();
		var full_url = this.href;
		var parts = full_url.split("#");
		var trgt = parts[1];
		var target_offset = $("#" + trgt).offset();
		var target_top = target_offset.top;
		$('html, body').animate({
			scrollTop: target_top
		}, 1000)
	});
		
	// Sticky left navigation
	$(window).resize(handle_nav);
	$(window).scroll(handle_nav);
	function handle_nav(e) {
		if(window.innerWidth >= 479) {
			$el = $('.nav');
			if ($(this).scrollTop() > 210 && $el.css('position') != 'fixed') {
				$('.nav').css({
					'position': 'fixed',
					'top': '0'
				});
			}

			if ($(this).scrollTop() < 210 && $el.css('position') != 'relative') {
				$('.nav').css({
					'position': 'relative'
				});
			}
		} else {
			$('.nav').css({
				'position': 'relative'
			});
		}
	}
		
    /* PLACEHOLDER FOR FORMS ------------- */
    /* Remove this and jquery.placeholder.min.js if you don't need */
    $('input, textarea').placeholder();
        
	// FitVids - Make all videos reponsive - Use a class/id of the parented column where videos are seen:
	// https://github.com/davatron5000/FitVids.js
	$(".vid_col").fitVids();
	
	// FitText - JS to make large titles reponsive - Use a class/id of the title you want to fit:
	// https://github.com/davatron5000/FitText.js
	$(".title").fitText();
	
});

// On iOS, this will scroll to the page content after 1 second:
// http://remysharp.com/2010/08/05/doing-it-right-skipping-the-iphone-url-bar
/mobile/i.test(navigator.userAgent) && !location.hash && setTimeout(function () {
	if (!pageYOffset) window.scrollTo(0, 1);
}, 1000);
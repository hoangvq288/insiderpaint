jQuery.noConflict();

(function($)
{
	jQuery(function($)
	{
		var app = {

			config : {},
			init : function()
			{
				app.plugins();
				app.events();
			},

			plugins : function()
			{

			},

			events : function()
			{
				app.banner_slider();	// Fire the function runGreeting
				// app.gallery();	// Fire the function runGreeting2
				app.nav_action();	// Fire the function runGreeting2
				app.scroll_action();	// Fire the function runGreeting2
			},

			// Example function
			banner_slider : function() {
				//console.log('hello world');
				$('.bxslider').bxSlider();
				$('.bxslider_client').bxSlider({
					minSlides: "5",
					maxSlides: "5",
					slideWidth:'210',
				});
				$('.bxslider-news').bxSlider({
					minSlides: "2",
					maxSlides: "2",
					slideWidth:'270',
					slideMargin: '30',
				});
				$('.bxslider_product_detail').bxSlider({
					minSlides: "2",
					maxSlides: "3",
					slideWidth:'auto',
					slideMargin: '10',
				});
			},

			nav_action : function() {
				$('.header__leftct').click(function(event) {
     			$('body').toggleClass('shownav__left');
     			$('body').removeClass('shownav__right');
				});
				$('.header__rightct').click(function(event) {
     			$('body').toggleClass('shownav__right');
     			$('body').removeClass('shownav__left');
				});
			},

			scroll_action : function() {
				$(window).scroll(function() {
			    var scroll = $(window).scrollTop();

			    if (scroll >= 200) {
			        $("header").addClass("scrolling");
			    } else {
			        $("header").removeClass("scrolling");
			    }
				});
			}

			// // Example function
			// gallery : function() {
			// 	// Gallery Setup
			//   document.getElementById('links').onclick = function (event) {
			//     event = event || window.event;
			//     var target = event.target || event.srcElement,
			//         link = target.src ? target.parentNode : target,
			//         options = {index: link, event: event},
			//         links = this.getElementsByTagName('a');
			//     blueimp.Gallery(links, options);
			//   };
			// },

		};

		// Document ready
		app.init();

	});
})(jQuery);

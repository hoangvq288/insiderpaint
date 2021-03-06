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

				$(window).load(function() {
				 // executes when complete page is fully loaded, including all frames, objects and images
					$('.bxslider').bxSlider();
				});
				$('.bxslider_client').bxSlider({
					minSlides: "1",
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
				$('.bxslider_isp_detail').bxSlider({
					slideWidth: "auto",
					slideMargin: '0',
				});
				$('.bxslider-project').bxSlider({
					minSlides: "1",
					maxSlides: "4",
					slideWidth:'265',
					autoControls: true,
				});
			},

			nav_action : function() {
				$('.header__leftct').click(function(event) {
					event.stopPropagation();
     			$('body').toggleClass('shownav__left');
     			$('body').removeClass('shownav__right');
     			$('.header__rightct i').removeClass('fa-close').addClass('fa-share-alt-square');
     			$('.header__leftct i').toggleClass('fa-navicon fa-close');
				});
				$('.header__rightct').click(function(event) {
					event.stopPropagation();
     			$('body').toggleClass('shownav__right');
     			$('body').removeClass('shownav__left');
     			$('.header__leftct i').removeClass('fa-close').addClass('fa-navicon');
     			$('.header__rightct i').toggleClass('fa-share-alt-square fa-close');
				});
				$('html').click(function() {
				  //Hide the menus if visible
				  if($('.shownav__left').is(':visible')){
				  	$('.shownav__left').removeClass('shownav__left');
				  	$('.header__leftct i').removeClass('fa-close').addClass('fa-navicon');
				  }
				  if($('.shownav__right').is(':visible')){
				  	$('.shownav__right').removeClass('shownav__right');
				  	$('.header__rightct i').removeClass('fa-close').addClass('fa-share-alt-square');
				  }
				});

				$('.nav').click(function(event){
				    event.stopPropagation();
				});

				$('.search__formct').hover(
						function(){},
		        function(){
		            $(".search__formct input[type='checkbox']").prop('checked', false);
		        }
				)

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

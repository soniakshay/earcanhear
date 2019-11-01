//fancybox
		$(function() {
		  //    fancybox
			jQuery(".fancybox").fancybox();
		});
	//preload
		$(document).ready(function() {
			$(window).on("load", function() {
				preloaderFadeOutTime = 500;
				function hidePreloader() {
					var preloader = $('.spinner-wrapper');
					preloader.fadeOut(preloaderFadeOutTime);
				}
				hidePreloader();
			});
		});
		$(function(){
			$("select.styled").customSelect();
		});

  	//wow js
	  	new WOW().init();
		wow = new WOW(
			{
				boxClass:     'wow',      // default
				animateClass: 'animated', // default
				offset:       0,          // default
				mobile:       true,       // default
				live:         true        // default
			}
		 )
		wow.init();
			

			$(function () {
			  $("#slider1").responsiveSlides({
				speed: 800,
	
				

				 });
			});
			$(function () {
			  $("#slider2").responsiveSlides({
				speed: 800,
				

				 });
			});

					$(document).ready(function(){
				$("#micon").click(function(){
					$("#rmenudiv").slideToggle("slow");
				});
			});
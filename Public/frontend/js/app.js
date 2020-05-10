$(function(){

		$('a[href="#service"]').click(function(){
				$('body').animate({scrollTop: $('.header-bottom').offset().top},1000)
					removeMenu();
					return false;
		});

		$('a[href="#contact"]').click(function(){
				$('body').animate({scrollTop: $('.gmap').offset().top},1000)
					removeMenu();
					return false;
		});

		$('a[href="#intro"]').click(function(){
				$('body').animate({scrollTop: $('.header-bottom').offset().top},1000)
					removeMenu();
					return false;
		});

		$('a[href="#portfolio"]').click(function(){
				$('body').animate({scrollTop: $('.middle').offset().top},1000)
				removeMenu();
				return false;
		});

		$('a[href="#home"]').click(function(){
				$('body').animate({scrollTop: 0},1000)
					removeMenu();
					return false;
		});


		$(window).resize(function(){
			var mheight = $(window).height();
			$('.header-top').css({"height": mheight});
			return false;
		});

		$('.button-menu').click(function() {
			$('.menu-area').addClass('open-menu');
			$('.button-menu').css({'display':"none","transition":"all 0.4s"});
			$('.btnClose').addClass('open-button-close');
			return false;
		});

		$('.btnClose').click(function() {
				removeMenu();
		});

		function removeMenu(){
			$('.menu-area').removeClass('open-menu');
			$('.btnClose').removeClass('open-button-close');
			$('.button-menu').css({'display':"block","transition":"all 0.4s"});
			return false;
		}
})
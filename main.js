$(function(){
	$(window).scroll(function (){
		$('.js-fadein').each(function(){
			var elemPos = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll > elemPos - windowHeight + 200){
				$(this).addClass('js-scrollin');
			}
		});
	});
});
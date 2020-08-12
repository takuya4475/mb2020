jQuery(document).ready(function($){
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
	$(document).on('click','.sp-nav-btn-backColor',function(){
    $('.sp-nav-btn-backColor').toggleClass('open');
    $('.sp-nav-btn-frontColor1').toggleClass('open');
    $('.sp-nav-btn-frontColor2').toggleClass('open');
    $('.sp-nav-btn-frontColor3').toggleClass('open');
    $('body').toggleClass('no_scroll');
    $('.sp-nav').toggleClass('open');
  });
});
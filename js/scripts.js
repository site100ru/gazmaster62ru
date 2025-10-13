/* Функция "Прилипало" */
onscroll = function prilipalo() {
	var prokrutka = window.pageYOffset;
	if ( window.screen.width >= 769 ) {
		if ( prokrutka > 60 ) {
			document.getElementById('top-menu-2').classList.add('fixed-top');
			document.getElementById('top-menu-2').classList.remove('py-md-4');
			document.getElementById('top-menu-2').style.position = 'fixed';
			document.getElementById('top-menu-2').style.top = 0;
			document.getElementById('top-menu-2').style.background = 'rgb(0,0,0,.9)';
			document.getElementById('top-menu-2').style.boxShadow = '5px 0px 5px 3px rgba(0,0,0,.25)';
			document.getElementById('navbar-brand-img').style.height = '52px';
		} else {
			document.getElementById('top-menu-2').classList.remove('fixed-top');
			document.getElementById('top-menu-2').classList.add('py-md-4');
			document.getElementById('top-menu-2').style.position = 'absolute';
			document.getElementById('top-menu-2').style.top = '60px';
			document.getElementById('top-menu-2').style.background = 'none';
			document.getElementById('top-menu-2').style.boxShadow = 'none';
			document.getElementById('navbar-brand-img').style.height = '62px';
		}
	} else {
		document.getElementById('top-menu-2').style.position = '';
		document.getElementById('top-menu-2').style.top = 0;
		document.getElementById('top-menu-2').classList.add('fixed-top');
	}
	
	/* Убираем меню при прокрутке */
	document.getElementById( 'navbarSupportedContent2' ).classList.remove('show');
}


/* Section with parallax */
$(window).scroll(function(e){
	parallaxScroll();
});


/* Section with parallax */
function parallaxScroll(){
	var scrolled = $(window).scrollTop();
	//var block = $('.header-parallax').offset().top; // Расстояние от начала экрана до блока, где будем начинать параллакс.
	/* Section with parallax */
	$('.parallax').css('top',(0-(scrolled*.5))+'px');
	//$('.parallax-2').css('top',(-300-(scrolled*.5))+'px');
}


/* Убираем сообщение об успешной отправки */
function modalClose () {
	document.getElementById('background-msg').style.display = 'none';
	document.getElementById('message').style.display = 'none';
	document.getElementById('btn-close').style.display = 'none';
}
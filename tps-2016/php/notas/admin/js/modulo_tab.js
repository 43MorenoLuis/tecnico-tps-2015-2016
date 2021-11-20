/******************************************************************************************************************
Ckm!
web; Apps Y Multimedia
www.ckm.co
2015
******************************************************************************************************************/
// JavaScript Document

// TABS

$(document).ready(function(){
	//SLIDER
	var mySwiper = new Swiper('.swiper-container',{
		//pagination: '.pagination',
		loop:true,
		grabCursor: true,
		// paginationClickable: true
		slidesPerView: 5
		//slidesPerView: 'auto'
	})
	$('.arrow-left').on('click', function(e){
		e.preventDefault()
		mySwiper.swipePrev()
	})
	$('.arrow-right').on('click', function(e){
		e.preventDefault()
		mySwiper.swipeNext()
	})

	/*ESTILO A PESTAÑAS
	$(".slidePest").click(function(){
		$(".slidePest").removeClass("active");
		$(this).addClass("active");

		alert( $(this) + " EJECUTAR AJAX ");
	});	*/

});

/******************************************************************************************************************
Ckm!
web; Apps Y Multimedia
www.ckm.co
2015
******************************************************************************************************************/
// JavaScript Document

$(document).ready(function(){
	// ------------------------------------------------------------------------
	// MENU
	// ------------------------------------------------------------------------
	$("#firstpane p.menu_head").click(function(){
		/*
		$(this).css({backgroundImage:"url(down.png)"}).next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
       	$(this).siblings().css({backgroundImage:"url(left.png)"});
		*/

		$(this).next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
		//$(this).parent.siblings();

		/*
		$(this).css({backgroundImage:"url(interfaz/men_expa.png)"}).next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
		$(this).siblings().css({backgroundImage:"url(interfaz/men_contra.png)"});


		$(this).css({"background-color": "#F9F9F9", "backgroundImage":"url(interfaz/men_expa.png)"}).next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
		$(this).siblings().css({backgroundImage:"url(interfaz/men_contra.png)"});
		*/
	});


	// ------------------------------------------------------------------------
	// MODAL
	// ------------------------------------------------------------------------
	$(".modal").click(function(){
		$("#modulos").slideDown("fast");
	});

	$("#modulos .conte .closeMo").click(function(){
		$("#modulos").slideUp("fast");
	});


	// ------------------------------------------------------------------------
	// SCROLL AREA
	// ------------------------------------------------------------------------
	altoArea();

	function altoArea(){
		//alert($( window ).height());
		//alert($(".scroll").attr("data"));
		//var menos = $(".scroll").attr("data"); <div class="scroll" data="175">
		//$(".scroll").animate({'height':($( window ).height()-menos)},50);
		//$(".scroll").animate({'max-height':($( window ).height()-menos)},10);
		$(".scroll").animate({'max-height':($( window ).height()-210)},10);
	}
});

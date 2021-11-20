// ejercicio 2 de jquery
/*
	Luis Eduardo Moreno Guevara
	09 de abril de 2016
	Archivo jquery, JavaScript
	

*/
function calcular(){
	
	var trabajador_uno=parseFloat($('#txt_trabajador1').val());      
	var trabajador_dos=parseFloat($('#txt_trabajador2').val());
	var trabajador_tres=parseFloat($('#txt_trabajador3').val());
	var trabajador_cuatro=parseFloat($('#txt_trabajador4').val());
	
//==================================================================
		if($('#txt_trabajador1').val()==''){
			
			$('#error_lote1').fadeIn();
			$('#txt_trabajador1').focus();
			return 0;
		}
		else{
			$('#error_lote1').fadeOut();
		}
//==================================================================
		if($('#txt_trabajador2').val()==''){
			
			$('#error_lote2').fadeIn();
			$('#txt_trabajador2').focus();
			return 0;
		}
		else{
			$('#error_lote2').fadeOut();
		}
//==================================================================
		if($('#txt_trabajador3').val()==''){
			
			$('#error_lote3').fadeIn();
			$('#txt_trabajador3').focus();
			return 0;
		}
		else{
			$('#error_lote3').fadeOut();
		}
//==================================================================
		if($('#txt_trabajador4').val()==''){
			
			//alert('Error');
			$('#error_lote4').fadeIn();
			$('#txt_trabajador4').focus();
			return 0;
		}
		else{
			$('#error_lote4').fadeOut();
		}
//===========================================================================
/*########### declaracion de las variables del valor por dia ##############*/
//===========================================================================
	var dia_uno=parseFloat($('#txt_day1').val());      
	var dia_dos=parseFloat($('#txt_day2').val());
	var dia_tres=parseFloat($('#txt_day3').val());
	var dia_cuatro=parseFloat($('#txt_day4').val());
	
/*##########################################################################*/

if($('#txt_day1').val()==''){
			
			//alert('Error');
			$('.error_area1').fadeIn();
			$('#txt_day1').focus();
			return 0;
		}
		else{
			$('.error_area1').fadeOut();
		}
/*##########################################################################*/
		if($('#txt_day2').val()==''){
			
			//alert('Error');
			$('.error_area2').fadeIn();
			$('#txt_day2').focus();
			return 0;
		}
		else{
			$('.error_area2').fadeOut();
		}
/*##########################################################################*/
		if($('#txt_day3').val()==''){
			
			//alert('Error');
			$('.error_area3').fadeIn();
			$('#txt_day3').focus();
			return 0;
		}
		else{
			$('.error_area3').fadeOut();
		}
/*##########################################################################*/
		if($('#txt_day4').val()==''){
			
			//alert('Error');
			$('.error_area4').fadeIn();
			$('#txt_day4').focus();
			return 0;
		}
		else{
			$('.error_area4').fadeOut();
		}
		
/*##########################################################################*/	
	sueldo_1=parseFloat(dia_uno) * parseFloat(trabajador_uno);
	sueldo_2=parseFloat(dia_dos) * parseFloat(trabajador_dos);
	sueldo_3=parseFloat(dia_tres) * parseFloat(trabajador_tres);
	sueldo_4=parseFloat(dia_cuatro) * parseFloat(trabajador_cuatro);
	//===========================================================
		//=====Descuentos: Salud, Pension, ARL=====
		
		var dessalud=0.14;
		salud_1=parseFloat(sueldo_1) * parseFloat(dessalud);
		salud_2=parseFloat(sueldo_2) * parseFloat(dessalud);
		salud_3=parseFloat(sueldo_3) * parseFloat(dessalud);
		salud_4=parseFloat(sueldo_4) * parseFloat(dessalud);

		var pension=0.12;
		pension_1=parseFloat(sueldo_1) * parseFloat(pension);
		pension_2=parseFloat(sueldo_2) * parseFloat(pension);
		pension_3=parseFloat(sueldo_3) * parseFloat(pension);
		pension_4=parseFloat(sueldo_4) * parseFloat(pension);
		
		var arl=0.03;
		arl_1=parseFloat(sueldo_1) * parseFloat(arl);
		arl_2=parseFloat(sueldo_2) * parseFloat(arl);
		arl_3=parseFloat(sueldo_3) * parseFloat(arl);
		arl_4=parseFloat(sueldo_4) * parseFloat(arl);
	//===========================================================
		var sm=690000;
		var descuento=0.06;
		var subsidio=65000;
		var nodescuento=0;
		var nosubsidio=0;
		
		if(sueldo_1>sm*4){

			des1=parseFloat(sueldo_1) * parseFloat(descuento); 
			$('#txt_seisporciento1').val('' + des1);
		}
		else{
			des1=parseFloat(nodescuento);
			$('#txt_seisporciento1').val('' + des1);
		}

		if(sueldo_2>sm*4){

			des2=parseFloat(sueldo_2) * parseFloat(descuento); 
			$('#txt_seisporciento2').val('' + des2);
		}
		else{
			des2=parseFloat(nodescuento);
			$('#txt_seisporciento2').val('' + des2);
		}

		if(sueldo_3>sm*4){

			des3=parseFloat(sueldo_3) * parseFloat(descuento); 
			$('#txt_seisporciento3').val('' + des3);
		}
		else{
			des3=parseFloat(nodescuento);
			$('#txt_seisporciento3').val('' + des3);
		}

		if(sueldo_4>sm*4){

			des4=parseFloat(sueldo_4) * parseFloat(descuento); 
			$('#txt_seisporciento4').val('' + des4);
		}
		else{
			des4=parseFloat(nodescuento);
			$('#txt_seisporciento4').val('' + des4);
		}
	//====================================================================================
		if(sueldo_1<sm*2){

			subs1=parseFloat(sueldo_1) + parseFloat(subsidio); 
			$('#txt_subsidio1').val('' + subs1);
		}
		else{
			subs1=parseFloat(nosubsidio);
			$('#txt_subsidio1').val('' + subs1);
		}

		if(sueldo_2<sm*2){

			subs2=parseFloat(sueldo_2) + parseFloat(subsidio); 
			$('#txt_subsidio2').val('' + subs2);
		}
		else{
			subs2=parseFloat(nosubsidio);
			$('#txt_subsidio2').val('' + subs2);
		}

		if(sueldo_3<sm*2){

			subs3=parseFloat(sueldo_3) + parseFloat(descuento); 
			$('#txt_subsidio3').val('' + subs3);
		}
		else{
			subs3=parseFloat(nosubsidio);
			$('#txt_subsidio3').val('' + subs3);
		}

		if(sueldo_4<sm*2){

			subs4=parseFloat(sueldo_4) + parseFloat(descuento); 
			$('#txt_subsidio4').val('' + subs4);
		}
		else{
			subs4=parseFloat(nosubsidio);
			$('#txt_subsidio4').val('' + subs4);
		}
	//=========================================================================
	     //===========================================================
total_1=parseFloat(sueldo_1) + parseFloat(salud_1) + parseFloat(pension_1) + parseFloat(arl_1) + parseFloat(des1) + parseFloat(subs1);
total_2=parseFloat(sueldo_2) + parseFloat(salud_2) + parseFloat(pension_2) + parseFloat(arl_2) + parseFloat(des2) + parseFloat(subs2);
total_3=parseFloat(sueldo_3) + parseFloat(salud_3) + parseFloat(pension_3) + parseFloat(arl_3) + parseFloat(des3) + parseFloat(subs3);
total_4=parseFloat(sueldo_4) + parseFloat(salud_4) + parseFloat(pension_4) + parseFloat(arl_4) + parseFloat(des4) + parseFloat(subs4);

		tot_sueldo=parseFloat(sueldo_1) + parseFloat(sueldo_2) + parseFloat(sueldo_3) + parseFloat(sueldo_4);
		tot_salud=parseFloat(salud_1) + parseFloat(salud_2) + parseFloat(salud_3) + parseFloat(salud_4);
		tot_pension=parseFloat(pension_1) + parseFloat(pension_2) + parseInt(pension_3) +parseFloat( pension_4);
		tot_arl=parseFloat(arl_1) + parseFloat(arl_2) + parseFloat(arl_3) + parseFloat(arl_4);
		tot_des=parseFloat(des1) + parseFloat(des2) + parseFloat(des3) + parseFloat(des4);
		tot_subs=parseFloat(subs1) + parseFloat(subs2) + parseFloat(subs3) + parseFloat(subs4);
		
	 	tot_total=parseFloat(total_1) + parseFloat(total_2) + parseFloat(total_3) + parseFloat(total_4);
	     //===========================================================
	//==========================================================================
/*##########################################################################*/	
	$('#txt_sueldo1').val('' + sueldo_1);
	$('#txt_sueldo2').val('' + sueldo_2);
	$('#txt_sueldo3').val('' + sueldo_3);
	$('#txt_sueldo4').val('' + sueldo_4);

	$('#txt_salud1').val('' + salud_1);
	$('#txt_salud2').val('' + salud_2);
	$('#txt_salud3').val('' + salud_3);
	$('#txt_salud4').val('' + salud_4);

	$('#txt_pension1').val('' + pension_1);
	$('#txt_pension2').val('' + pension_2);
	$('#txt_pension3').val('' + pension_3);
	$('#txt_pension4').val('' + pension_4);

	$('#txt_arl1').val('' + arl_1);
	$('#txt_arl2').val('' + arl_2);
	$('#txt_arl3').val('' + arl_3);
	$('#txt_arl4').val('' + arl_4);

	$('#txt_total1').val('Total es: ' + total_1);
	$('#txt_total2').val('Total es: ' + total_2);
	$('#txt_total3').val('Total es: ' + total_3);
	$('#txt_total4').val('Total es: ' + total_4);
	
	$('#txt_tottotal').val('Total es: ' + tot_total);

	$('#txt_totsueldo').val('' + tot_sueldo);
	$('#txt_totsalud').val('' + tot_salud);
	$('#txt_totpension').val('' + tot_pension);
	$('#txt_totseisporciento').val('' + tot_des);
	$('#txt_totarl').val('' + tot_arl);
	$('#txt_totsubsidio').val('' + tot_subs);
}
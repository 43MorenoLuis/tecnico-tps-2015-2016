//nomina 

/* 	Luis Eduardo Moreno Guevara
	21 de marzo del 2016
	archivo javascript
*/
/*
		d -> dia
		v -> valor por dia
		sm -> salario minimo
		sb -> subsisdio
		desc -> descuento
		dos -> dos salarios minimos
		cuatro -> cuatro salarios minimos
		to -> total
		pa -> pago
		subsidio -> subsidio#
		descuento -> decuento#
*/

function nomina(){
var d=0;
var v=0;
var sm=690000;
var sb=75000;
var des=0.06;

	d_1=document.getElementById('txt_day1').value;
	d_2=document.getElementById('txt_day2').value;
	d_3=document.getElementById('txt_day3').value;
	d_4=document.getElementById('txt_day4').value;
	d_5=document.getElementById('txt_day5').value;
	d_6=document.getElementById('txt_day6').value;
	d_7=document.getElementById('txt_day7').value;
	d_8=document.getElementById('txt_day8').value;
	d_9=document.getElementById('txt_day9').value;
	d_10=document.getElementById('txt_day10').value;
	
	v_1=document.getElementById('txt_valor1').value;
	v_2=document.getElementById('txt_valor2').value;
	v_3=document.getElementById('txt_valor3').value;
	v_4=document.getElementById('txt_valor4').value;
	v_5=document.getElementById('txt_valor5').value;
	v_6=document.getElementById('txt_valor6').value;
	v_7=document.getElementById('txt_valor7').value;
	v_8=document.getElementById('txt_valor8').value;
	v_9=document.getElementById('txt_valor9').value;
	v_10=document.getElementById('txt_valor10').value;
//================================================================================
//====================! Calculando el sueldo !====================================
//================================================================================
	to1=parseFloat(d_1) * parseFloat(v_1);
	to2=parseFloat(d_2) * parseFloat(v_2);
	to3=parseFloat(d_3) * parseFloat(v_3);
	to4=parseFloat(d_4) * parseFloat(v_4);
	to5=parseFloat(d_5) * parseFloat(v_5);
	to6=parseFloat(d_6) * parseFloat(v_6);
	to7=parseFloat(d_7) * parseFloat(v_7);
	to8=parseFloat(d_8) * parseFloat(v_8);
	to9=parseFloat(d_9) * parseFloat(v_9);
	to10=parseFloat(d_10) * parseFloat(v_10);
//================================================================================
//===================! Calculando el subsidio !===================================
//================================================================================	
	if (to1<sm*2){
		subs1=parseFloat(sb);
		pa1=parseFloat(to1)+parseFloat(subs1);	
	}
	else{
		subs1=parseFloat(0);
		pa1=parseFloat(to1)+parseFloat(subs1);
	}
	
	document.getElementById('txt_subsidio1').value='Subsidio:'+ subs1;
	document.getElementById('txt_total1').value='Total:'+ pa1;	
//===============================================================================			
	if (to2<sm*2){
		subsidio2=parseFloat(sb);
		pa2=parseFloat(to2)+parseFloat(subsidio2);	
	}
	else{
		subsidio2=parseFloat(0);
		pa2=parseFloat(to2)+parseFloat(subsidio2);
	}
	
	document.getElementById('txt_subsidio2').value='Subsidio:'+ subsidio2;
	document.getElementById('txt_total2').value='Total:'+ pa2;	
//===============================================================================	
	if (to3<sm*2){
		subsidio3=parseFloat(sb);
		pa3=parseFloat(to3)+parseFloat(subsidio3);	
	}
	else{
		subsidio3=parseFloat(0);
		pa3=parseFloat(to3)+parseFloat(subsidio3);
	}	
	document.getElementById('txt_subsidio3').value='Subsidio:'+ subsidio3;
	document.getElementById('txt_total3').value='Total:'+ pa3;	
//===============================================================================	
	if (to4<sm*2){
		subsidio4=parseFloat(sb);
		pa4=parseFloat(to4)+parseFloat(subsidio4);	
	}
	else{
		subsidio4=parseFloat(0);
		pa4=parseFloat(to4)+parseFloat(subsidio4);
	}
	
	document.getElementById('txt_subsidio4').value='Subsidio:'+ subsidio4;
	document.getElementById('txt_total4').value='Total:'+ pa4;	
//===============================================================================	
	if (to5<sm*2){
		subsidio5=parseFloat(sb);
		pa5=parseFloat(to5)+parseFloat(subsidio5);	
	}
	else{
		subsidio5=parseFloat(0);
		pa5=parseFloat(to5)+parseFloat(subsidio5);
	}	
	document.getElementById('txt_subsidio5').value='Subsidio:'+ subsidio5;
	document.getElementById('txt_total5').value='Total:'+ pa5;	
//===============================================================================	
	if (to6<sm*2){
		subsidio6=parseFloat(sb);
		pa6=parseFloat(to6)+parseFloat(subsidio6);	
	}
	else{
		subsidio6=parseFloat(0);
		pa6=parseFloat(to6)+parseFloat(subsidio6);
	}	
	document.getElementById('txt_subsidio6').value='Subsidio:'+ subsidio6;
	document.getElementById('txt_total6').value='Total:'+ pa6;	
//===============================================================================	
	if (to7<sm*2){
		subsidio7=parseFloat(sb);
		pa7=parseFloat(to7)+parseFloat(subsidio7);	
	}
	else{
		subsidio7=parseFloat(0);
		pa7=parseFloat(to7)+parseFloat(subsidio7);
	}	
	document.getElementById('txt_subsidio7').value='Subsidio:'+ subsidio7;
	document.getElementById('txt_total7').value='Total:'+ pa7;	
//===============================================================================	
	if (to8<sm*2){
		subsidio8=parseFloat(sb);
		pa8=parseFloat(to8)+parseFloat(subsidio8);	
	}
	else{
		subsidio8=parseFloat(0);
		pa8=parseFloat(to8)+parseFloat(subsidio8);
	}	
	document.getElementById('txt_subsidio8').value='Subsidio:'+ subsidio8;
	document.getElementById('txt_total8').value='Total:'+ pa8;	
//===============================================================================		
	if (to9<sm*2){
		subsidio9=parseFloat(sb);
		pa9=parseFloat(to9)+parseFloat(subsidio9);	
	}
	else{
		subsidio9=parseFloat(0);
		pa9=parseFloat(to9)+parseFloat(subsidio9);
	}	
	document.getElementById('txt_subsidio9').value='Subsidio:'+ subsidio9;
	document.getElementById('txt_total9').value='Total:'+ pa9;	
//===============================================================================	
	if (to10<sm*2){
		subsidio10=parseFloat(sb);
		pa10=parseFloat(to10)+parseFloat(subsidio10);	
	}
	else{
		subsidio10=parseFloat(0);
		pa10=parseFloat(to10)+parseFloat(subsidio10);
	}	
	document.getElementById('txt_subsidio10').value='Subsidio:'+ subsidio10;
	document.getElementById('txt_total10').value='Total:'+ pa10;	
//================================================================================
//===================! Calculando el Descuento !==================================
//================================================================================	
	if (to1>sm*4){
		  descuento1=parseFloat(des);	
		  pa1=parseFloat(to1) - parseFloat(descuento1);
		}
		else{
		  descuento1=parseFloat(0);	
		  pa1=parseFloat(to1)- parseFloat(descuento1);
		}
		 document.getElementById('txt_descuento1').value='Descuento:'+ descuento1;
		 document.getElementById('txt_total1').value='Total:'+ pa1;
	if (to2>sm*4){
		  descuento2=parseFloat(des);	
		  pa2=parseFloat(to2)- parseFloat(descuento2);
		}
		else{
		  descuento2=parseFloat(0);
		  pa2=parseFloat(to2)- parseFloat(descuento2);
		}
		 document.getElementById('txt_descuento2').value='Descuento:'+ descuento2;
		 document.getElementById('txt_total2').value='Total:'+ pa2;
//===============================================================================	
	if (to3>sm*4){
		  descuento3=parseFloat(des);	
		  pa3=parseFloat(to3)- parseFloat(descuento3);
		}
		else{
		  descuento3=parseFloat(0);	
		  pa3=parseFloat(to3)- parseFloat(descuento3);
		}
		 document.getElementById('txt_descuento3').value='Descuento:'+ descuento3;
		 document.getElementById('txt_total3').value='Total:'+ pa3;
//===============================================================================	
	if (to4>sm*4){
		  descuento4=parseFloat(des);	
		  pa4=parseFloat(to4)- parseFloat(descuento4);
		}
		else{
		  descuento4=parseFloat(0);	
		  pa4=parseFloat(to4)- parseFloat(descuento4);
		}
		 document.getElementById('txt_descuento4').value='Descuento:'+ descuento4;
		 document.getElementById('txt_total4').value='Total:'+ pa4;
//===============================================================================	
	if (to5>sm*4){
		  descuento5=parseFloat(des);	
		  pa5=parseFloat(to5)- parseFloat(descuento5);
		}
		else{
		  descuento5=parseFloat(0);	
		  pa5=parseFloat(to5)- parseFloat(descuento5);
		}
		 document.getElementById('txt_descuento5').value='Descuento:'+ descuento5;
		 document.getElementById('txt_total5').value='Total:'+ pa5;
//===============================================================================	
	if (to6>sm*4){
		  descuento6=parseFloat(des);	
		  pa6=parseFloat(to6)- parseFloat(descuento6);
		}
		else{
		  descuento6=parseFloat(0);	
		  pa6=parseFloat(to6)- parseFloat(descuento6);
		}
		 document.getElementById('txt_descuento6').value='Descuento:'+ descuento6;
		 document.getElementById('txt_total6').value='Total:'+ pa6;
//===============================================================================	
	if (to7>sm*4){
		  descuento7=parseFloat(des);	
		  pa7=parseFloat(to7)- parseFloat(descuento7);
		}
		else{
		  descuento7=parseFloat(0);	
		  pa7=parseFloat(to7)- parseFloat(descuento7);
		}
		 document.getElementById('txt_descuento7').value='Descuento:'+ descuento7;
		 document.getElementById('txt_total7').value='Total:'+ pa7;
//===============================================================================	
	if (to8>sm*4){
		  descuento8=parseFloat(des);	
		  pa8=parseFloat(to8)- parseFloat(descuento8);
		}
		else{
		  descuento8=parseFloat(0);	
		  pa8=parseFloat(to8)- parseFloat(descuento8);
		}
		 document.getElementById('txt_descuento8').value='Descuento:'+ descuento8;
		 document.getElementById('txt_total8').value='Total:'+ pa8;
//===============================================================================	
	if (to9>sm*4){
		  descuento9=parseFloat(des);	
		  pa9=parseFloat(to9)- parseFloat(descuento9);
		}
		else{
		  descuento9=parseFloat(0);	
		  pa9=parseFloat(to9)- parseFloat(descuento9);
		}
		 document.getElementById('txt_descuento9').value='Descuento:'+ descuento9;
		 document.getElementById('txt_total9').value='Total:'+ pa9;
//===============================================================================	
	if (to10>sm*4){
		  descuento10=parseFloat(des);	
		  pa10=parseFloat(to10)- parseFloat(descuento10);
		}
		else{
		  descuento10=parseFloat(0);	
		  pa10=parseFloat(to10)- parseFloat(descuento10);
		}
		 document.getElementById('txt_descuento10').value='Descuento:'+ descuento10;
		 document.getElementById('txt_total10').value='Total:'+ pa10;
//================================================================================
//===================! Calculando el Total !======================================
//================================================================================	
	total=parseFloat(pa1) + parseFloat(pa2) + parseFloat(pa3) + parseFloat(pa4) + parseFloat(pa5) + 
	parseFloat(pa6) + parseFloat(pa7) + parseFloat(pa8) + parseFloat(pa9) + parseFloat(pa10);

		document.getElementById('txt_total').value='Total Es:'+ total;
}
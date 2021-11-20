//factura 
/* 	Luis Eduardo Moreno Guevara
	21 de marzo del 2016
	archivo javascript
*/

var vt1=0;
var vt2=0;
var vt3=0;
var vt4=0;
var vt5=0;
var vt6=0;
var vt7=0;
var vt8=0;
var vt9=0;
var vt10=0;

var porcentaje=0.16;
var resultado=0;
var valortotal=0;
var totfact=0;
var desfact=0.3;
var rebate=0;

function factura(){

	producto_1=document.getElementById('txt_uno').value;

	resultado=parseFloat(producto_1) * parseFloat(porcentaje);
	
	vt1=parseInt(resultado) + parseInt(producto_1);	
	
	document.getElementById('txt_resultado1').value='porcentaje es: ' + resultado ;
	document.getElementById('txt_valorto1').value='valor total es: ' +vt1;

	producto_2=document.getElementById('txt_dos').value;

	resultado=parseFloat(producto_2) * parseFloat(porcentaje);
	
	vt2=parseInt(resultado) + parseInt(producto_2);	
	
	document.getElementById('txt_resultado2').value='porcentaje es: ' + resultado ;
	document.getElementById('txt_valorto2').value='valor total es: ' +vt2;

	producto_3=document.getElementById('txt_tres').value;

	resultado=parseFloat(producto_3) * parseFloat(porcentaje);
	
	vt3=parseInt(resultado) + parseInt(producto_3);	
	
	document.getElementById('txt_resultado3').value='porcentaje es: ' + resultado ;
	document.getElementById('txt_valorto3').value='valor total es: ' +vt3;

	producto_4=document.getElementById('txt_cuatro').value;

	resultado=parseFloat(producto_4) * parseFloat(porcentaje);
	
	vt4=parseInt(resultado) + parseInt(producto_4);	
	
	document.getElementById('txt_resultado4').value='porcentaje es: ' + resultado ;
	document.getElementById('txt_valorto4').value='valor total es: ' +vt4;

	producto_5=document.getElementById('txt_cinco').value;

	resultado=parseFloat(producto_5) * parseFloat(porcentaje);
	
	vt5=parseInt(resultado) + parseInt(producto_5);	
	
	document.getElementById('txt_resultado5').value='porcentaje es: ' + resultado ;
	document.getElementById('txt_valorto5').value='valor total es: ' +vt5;

	producto_6=document.getElementById('txt_seis').value;

	resultado=parseFloat(producto_6) * parseFloat(porcentaje);
	
	vt6=parseInt(resultado) + parseInt(producto_6);	
	
	document.getElementById('txt_resultado6').value='porcentaje es: ' + resultado ;
	document.getElementById('txt_valorto6').value='valor total es: ' +vt6;

	producto_7=document.getElementById('txt_siete').value;

	resultado=parseFloat(producto_7) * parseFloat(porcentaje);
	
	vt7=parseInt(resultado) + parseInt(producto_7);	
	
	document.getElementById('txt_resultado7').value='porcentaje es: ' + resultado ;
	document.getElementById('txt_valorto7').value='valor total es: ' +vt7;

	producto_8=document.getElementById('txt_ocho').value;

	resultado=parseFloat(producto_8) * parseFloat(porcentaje);
	
	vt8=parseInt(resultado) + parseInt(producto_8);	
	
	document.getElementById('txt_resultado8').value='porcentaje es: ' + resultado ;
	document.getElementById('txt_valorto8').value='valor total es: ' +vt8;

	producto_9=document.getElementById('txt_nueve').value;

	resultado=parseFloat(producto_9) * parseFloat(porcentaje);
	
	vt9=parseInt(resultado) + parseInt(producto_9);	
	
	document.getElementById('txt_resultado9').value='porcentaje es: ' + resultado ;
	document.getElementById('txt_valorto9').value='valor total es: ' +vt9;

	producto_10=document.getElementById('txt_diez').value;

	resultado=parseFloat(producto_10) * parseFloat(porcentaje);
	
	vt10=parseInt(resultado) + parseInt(producto_10);	
	
	document.getElementById('txt_resultado10').value='porcentaje es: ' + resultado ;
	document.getElementById('txt_valorto10').value='valor total es: ' +vt10;
	
	totfact=parseInt(vt1) + parseInt(vt2) + parseInt(vt3)
	 + parseInt(vt4) + parseInt(vt5) + parseInt(vt6)
	  + parseInt(vt7) + parseInt(vt8) + parseInt(vt9)
	   + parseInt(vt10);
	
		document.getElementById('txt_totfactura').value='Total Es: ' + totfact ;
}
function descuento(){
	
	/*rebate significa descuento*/
	if(totfact>=500000){
		rebate=parseFloat(desfact) * parseFloat(totfact);
	}
	else{
		rebate=parseFloat(totfact) * 0;
	}
		document.getElementById('txt_descuento').value='Descuento Es: ' + rebate;
}
function total(){
	
	pagar=parseFloat(rebate) +(parseFloat(rebate) * parseFloat(desfact));
	document.getElementById('txt_pagar').value='Total: ' + pagar;
	
		
}


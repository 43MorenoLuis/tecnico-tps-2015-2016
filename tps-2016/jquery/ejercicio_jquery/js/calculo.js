// ejercicio 1 de jquery

/*
	Luis Eduardo Moreno Guevara
	02 de abril de 2016

*/

function calcular(){
	
	var numero_uno=parseInt($('#txt_numero1').val());
	var numero_dos=parseInt($('#txt_numero2').val());
	var suma=0;


		if($('#txt_numero1').val()==''){
			
			//alert('Error');
			$('#error_campo1').fadeIn();
			$('#txt_numero1').focus();
			return 0;
		}
		else{
			$('#error_campo1').fadeOut();
		}

		if($('#txt_numero2').val()==''){
			
			//alert('Error');
			$('#error_campo2').fadeIn();
			$('#txt_numero2').focus();
			return 0;
		}
		else{
			$('#error_campo2').fadeOut();
		}
		
	suma = numero_uno + numero_dos;
	resta = numero_uno - numero_dos;
	multiplicacion = numero_uno * numero_dos;
	division = numero_uno / numero_dos;

	
	$('#resultado_calculo').html('Resultado Suma: ' + suma +
				'<br/> Resultado Resta: ' + resta +
				'<br/> Resultado Multiplicacion: ' + multiplicacion +
				'<br/> Resultado Division: ' + division );

	//alert(suma);	

}
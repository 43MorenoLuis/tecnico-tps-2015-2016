Proceso sin_titulo
	Escribir "DIGITE EL TIPO DE HAMBURGUESA: ";
	Leer TI;
	Escribir "DIGITE EL NUMERO DE HAMBURGUESAS: ";
	Leer N;
	Escribir "DIGITE EL TIPO DE PAGO: ";
	Leer TP;
	Si TI="SENCILLA" Entonces
		PA=5500
		TO<-N*PA;
	Sino
		Si TI="DOBLE" Entonces
			PA=10500
			TO<-N*PA;
		Sino
			PA=15000
			TO<-N*PA;
		FinSi
	FinSi
	Si TP="TARJETA" Entonces
		CA=TO+(TO*0.05)
	Sino
		Limpiar Pantalla
		Mostrar "!!!!!CALCULANDO PROCESO!!!!!"
		Esperar 3 Segundos
		MOSTRAR "EL TOTAL SIN CARGO ES : ",TO;
	
	FinSi
	Limpiar Pantalla
	Mostrar "!!!!!CALCULANDO PROCESO!!!!!"
	Esperar 3 Segundos
	MOSTRAR "EL TIPO DE HAMBURGUSA ES: ",TI;
	Mostrar "EL NUMERO DE HAMBURGUESA ES: ",N;
	Mostrar "EL PRECIO DE LA HAMBURGUESA ES: ",PA;
	Mostrar "EL CARGO POR EL USO DE TARJETA ES: ",CA;
	MOSTRAR "EL TOTAL SIN CARGO ES : ",TO;
	Esperar 10 segundos
	//Limpiar Pantalla
	Mostrar "ESTE PROGRAMA FUE REALIZADO POR: Luis Eduardo Moreno Guevara "
	
FinProceso

Proceso sin_titulo
	Escribir "DIGITE EL TOTAL DE LA COMPRA: " ;
	Leer TC;
	Escribir "DIGITE EL NUMERO AL AZAR: " ;
	Leer NA;
	Si NA>=69 Entonces
		D=TC*0.40
	Sino
		D=TC*0.25
	FinSi
	MOSTRAR "EL DINERO QUE SE LE DESCUENTA ES: ",D;
FinProceso

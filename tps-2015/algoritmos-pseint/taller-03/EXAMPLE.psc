Proceso sin_titulo
	Escribir "DIGITE EL PRIMER NUMERO: " ;
	Leer A;
	Escribir "DIGITE EL SEGUNDO NUMERO: " ;
	Leer B;
	Escribir " DIGITE EL TERCER NUMERO: " ;
	Leer C;
	Si A>B Entonces
		Si A>C Entonces
			M=A
		Sino
			M=C
		FinSi
	Sino
		Si B>C Entonces
			M=B
		Sino
			M=C
		FinSi
	FinSi
	Mostrar "EL NUMERO MAYOR ES: ",M;
FinProceso

Proceso sin_titulo
	Escribir "DIGITE EL PRIMER NUMERO: " ;
	Leer A;
	Escribir "DIGITE EL SEGUNDO NUMERO: " ;
	Leer B;
	Escribir "DIGITE EL TERCER NUMERO: " ;
	Leer C;
	Si A>B Entonces
		M=A
	Sino
		M=B
	FinSi	
		Si M>C Entonces
			M=M
		Sino
			
			M=C
		FinSi
	 
	Mostrar "EL NUMERO MAYOR ES: ",M; 
FinProceso

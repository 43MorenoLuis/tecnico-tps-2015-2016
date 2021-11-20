Proceso sin_titulo
	Escribir "DIGITE EL NUMERO DE ALUMNOS: " ;
	Leer NA;
	Si NA>=100 Entonces
		Si NA>50 Entonces
			M=65000
		Sino
			M=70000
		FinSi
	Sino
		Si NA<30 Entonces
			M=95000
		Sino
			M=400000
		FinSi
	FinSi
	Mostrar "EL TOTAL A PAGAR POR CADA ALUMNO: ",M
FinProceso

Proceso PRAC_N5
	Definir A,B,C Como Entero;
	Escribir "INGRESE EL PRIMER NUMERO: ";
	Leer A;
	Escribir "INGRESE EL SEGUNDO NUMERO: ";
	Leer B;
	Escribir "INGRESE EL TERCER NUMERO: ";
	Leer C;
	Si A>B Entonces
		Si A>C Entonces
			Si B>C Entonces
				Mostrar "LOS NUMEROS DESCENDENTES SON: ",A, "  ",B, "  ",C;
			Sino
				Mostrar "LOS NUMEROS DESCENDENTES SON: ",A, "  ",C, "  ",B;
			FinSi
		Sino
			Mostrar "LOS NUMEROS DESCENDENTES SON: ",C, "  ",A, "  ",B;
		FinSi
	Sino
		Si B>C Entonces
			Si A>C Entonces
				Mostrar "LOS NUMEROS DESCENDENTES SON: ",B,"  ",A, "  ",C;
			Sino
				Mostrar "LOS NUMEROS DESCENDENTES SON: ",B, "  ",C, "  ",A;
			FinSi
		Sino
			Mostrar "LOS NUMEROS DESCENDENTES SON: ",C, "  ",B, "  ",A;
		FinSi
	FinSi
FinProceso

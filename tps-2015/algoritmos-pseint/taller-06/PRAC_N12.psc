Proceso PRAC_N12
	Definir A,B,C Como Real
	Escribir "INGRESE EL PRIMER DATO: ";
	Leer A;
	Escribir "INGRESE EL SEGUNDO DATO: ";
	Leer B;
	Escribir "INGRESE EL TERCER DATO: ";
	Leer C;
	Si A>B Entonces
		Si A>C Entonces
			Mostrar "A es el mayor"
		Sino
			Si A=C Entonces
				Mostrar "A y C son los mayores"
			Sino
				Mostrar "C es el mayor"
			FinSi
		FinSi
	Sino
		Si A=B Entonces
			Si A>C Entonces
				Mostrar "A y B son los mayores"
			Sino
				Si A=C Entonces
					Mostrar "A, B y C son iguales"
				Sino
					Mostrar "C es el mayor"
				FinSi
			FinSi
		Sino
			Si B>C Entonces
				Mostrar "B es el mayor"
			Sino
				Si B=C Entonces
					Mostrar "B y C son los mayores"
				Sino
					Mostrar "C es el mayor"
				FinSi
			FinSi
		FinSi
	FinSi
	Mostrar "REALIZADO POR: Luis Eduardo Moreno Guevara"
FinProceso

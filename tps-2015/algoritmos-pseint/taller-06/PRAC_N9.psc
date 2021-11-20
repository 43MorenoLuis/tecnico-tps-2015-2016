Proceso sin_titulo
	Escribir "INGRESE EL NUMERO: ";
	Leer A;
	Si A=0 Entonces
		Mostrar "NULO"
	Sino
		Si A<>0 Entonces
			R<-A MOD 2;
			Si R=0 Entonces
				Mostrar "PAR"
			Sino
				Mostrar "IMPAR"
			FinSi
			
		FinSi
	FinSi
FinProceso
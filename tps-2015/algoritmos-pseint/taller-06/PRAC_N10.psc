Proceso sin_titulo
	Escribir "INGRESE EL VALOR DE LA COMPRA: ";
	Leer CO;
	Si CO<500 Entonces
		PAG<-CO;
	Sino
		Si CO<=1000 Entonces
			PAG<-CO-(CO*0.05);
		Sino
			Si CO<=7000 Entonces
				PAG<-CO-(CO*0.11);
			Sino
				Si CO<=15000 Entonces
					PAG<-CO-(CO*0.18);
				Sino
					PAG<-CO-(CO*0.25);
				FinSi
			FinSi
		FinSi
	FinSi
	Mostrar "EL TOTAL A PAGAR ES DE: ",PAG;
FinProceso


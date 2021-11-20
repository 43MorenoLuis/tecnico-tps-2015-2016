Proceso sin_titulo
	Escribir "DIGITE EL PRECIO DEL ARTICULO: " ;
	Leer PA;
	Escribir "DIGITE LAS UNIDADES VENDIDAS: " ;
	Leer U;
	PV<-PA*U;
	PB<-PV+0.15;
	Si PB>50.000 Entonces
		VC=PB*0.05
	Sino
		VC=PB*0.15+(PB)
	FinSi
FinProceso

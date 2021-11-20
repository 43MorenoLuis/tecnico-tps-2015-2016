Proceso sin_titulo
	Escribir "DIGTE LAS HORAS DIURNAS TRABAJADAS: " ;
	Leer HD;
	Escribir "DIGITE LAS HORAS NOCTURNAS TRABAJADAS: " ;
	Leer HN;
	D<-HD*8000;
	N<-HN*12000;
	GAN<-D+N;
	Si GAN>30000 Entonces
		P<-(GAN*0.01)+GAN;
	Sino
		P<-(GAN*0.01)+GAN;
	FinSi
	Mostrar "LA GANANCIA ES DE: ",P;
FinProceso

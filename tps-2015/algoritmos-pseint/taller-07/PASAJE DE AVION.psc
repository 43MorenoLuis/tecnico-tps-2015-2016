Proceso sin_titulo
	Escribir "DIGITE LA DISTANCIA RECORRIDA POR KM: " ;
	Leer DR;
	Si DR>1000 Entonces
		P<-DR*25;
	Sino
		P<-DR*47;
	FinSi
	Mostrar "EL PRECIO DETERMINADO ES DE: ",P;
FinProceso

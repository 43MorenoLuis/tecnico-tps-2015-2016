Proceso PRAC_N2
	Definir SUE,NSUE,AUM Como Real
	Escribir "DIGITE EL SUELDO DEL TRABAJADOR: ";
	Leer SUE;
	Si SUE<1000 Entonces
		AUM<-SUE*0.15;
		NSUE<-AUM+SUE;
	Sino
		AUM<-SUE*0.12;
		NSUE<-AUM+SUE;
	FinSi
	Mostrar "EL: ",NSUE," ES EL NUEVO SUEIDO ";
FinProceso

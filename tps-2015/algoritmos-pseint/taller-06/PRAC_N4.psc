Proceso PRAC_N4
Definir CATE Como Entero	
Definir SUE Como Real
Mostrar "INGRESE LA CATEGORIA CORRESPONDIENTE: ";
Mostrar "1 - 15%: ";
Mostrar "2 - 10%: ";
Mostrar "3 - 8%: ";
Mostrar "4 - 7%: ";
Escribir "DIGITE LA CATEGORIA DEL TRABAJADOR: ";
Leer CATE;
Escribir "DIGITE EL SUELDO DEL TRABAJADOR: ";
Leer SUE;
Segun CATE Hacer
	1:
		NSUE<-SUE*1.15;
	2:
		NSUE<-SUE*1.10;
	3:
		NSUE<-SUE*1.08;
	4:
		NSUE<-SUE*1.07;
FinSegun
Mostrar " EL NUEVO SUEIDO ES: ",NSUE;
Mostrar "LA CATEGORIA DEL TRABAJADOR ES DE: ",CATE;
Mostrar "REALIZADO POR: Luis Eduardo Moreno Guevara ";
FinProceso

Proceso PRAC_N14
	Definir CATE,HE Como Entero
	Definir SUE,PHE,NSUE Como Real
	Mostrar "INGRESE LA CATEGORIA CORRESPONDIENTE"
	Mostrar "1 - $30"
	Mostrar "2 - $38"
	Mostrar "3 - $50"
	Mostrar "4 - $70"
	Escribir "INGRESE LA CATEGORIA DEL TRABAJADOR: ";
	Leer CATE;
	Escribir "DIGITE EL SUELDO DEL TRABAJADOR: ";
	Leer SUE;
	Escribir "INGRESE LAS HORAS EXTRAS DEL TRABAJADOR: ";
	Leer HE;
	Si HE<30 Entonces
		Segun CATE Hacer
			1:
				PHE<-30;
				NSUE<-(PHE*HE)+SUE
			2:
				PHE<-38;
				NSUE<-(PHE*HE)+SUE
			3:
				PHE<-50;
				NSUE<-(PHE*HE)+SUE
			4:
				PHE<-70;
				NSUE<-(PHE*HE)+SUE
			de otro modo:
				PHE <- 0
				NSUE<-(PHE*HE)+SUE
				
		FinSegun
		
	Sino
		Segun CATE Hacer
			1:
				PHE<-30;
				NSUE<-(PHE*HE)+SUE
			2:
				PHE<-30;
				NSUE<-(PHE*HE)+SUE
			3:
				PHE<-30;
				NSUE<-(PHE*HE)+SUE
			4:
				PHE<-30;
				NSUE<-(PHE*HE)+SUE
			de otro modo:
				PHE <- 0
				NSUE<-(PHE*HE)+SUE
		FinSegun
	FinSi
	Mostrar "EL PRECIO DE LAS HORAS EXTRAS ES DE: ",PHE;
	Mostrar "EL NUEVO SUELDO DEL TRABAJADOR ES DE: ",NSUE;
	Mostrar "REALIZADO POR: Luis Eduardo Moreno Guevara"
FinProceso

Proceso PRAC_N13
	Mostrar "REALIZAR UN ALGORITMO QUE HALLE" 
	Mostrar "EL COSTO DE LAS LLAMADAS TELEFONICAS"
	Mostrar "DEPENDIENDO DE LA ZONA GEOGRAFICA"
	Definir CLAVE Como Entero
	Definir NUMIN Como Entero
	Mostrar "INGRESE LA CLAVE DE ACUERDO A LA ZONA"
	Mostrar "12 - AMERICA DEL NORTE"
	Mostrar "15 - AMERICA CENTRAL"
	Mostrar "18 - AMERICA DEL SUR"
	Mostrar "19 - EUROPA"
	Mostrar "23 - EUROPA"
	Mostrar "25 - AFRICA"
	Mostrar "29 - OCEANIA"
	Escribir "INGRESE LA CLAVE: ";
	Leer CLAVE;
	Escribir "INGRESE EL NUMERO DE MINUTOS: ";
	Leer NUMIN;
	Segun CLAVE Hacer
		12:
			COST<-NUMIN*2;
		15:
			COST<-NUMIN*2.2;
		18:
			COST<-NUMIN*4.5;
		19:
			COST<-NUMIN*3.5;
		23,25:
			COST<-NUMIN*6;
		29:
			COST<-NUMIN*5;
	FinSegun
	Mostrar "EL COSTO TOTAL DE LA LLAMADA ES DE: ",COST;
	Mostrar "REALIZADO POR: Luis Eduardo Moreno Guevara"
FinProceso

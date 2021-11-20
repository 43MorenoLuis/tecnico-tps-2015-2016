//OP 1->100*V
//OP 2->100^V
//OP 3->100/V
//CUALQUIER NUMERO->0
Proceso PRAC_N3
	Definir OP,V Como Entero
	Definir RES Como Real
	Escribir "SELECCIONE UNA OPCION: ";
	Escribir "1 - 100*V: ";
	Escribir "2 - 100^V: ";
	Escribir "3 - 100/V: ";
	Leer OP;
	Escribir "INGRESE VALOR A CALCULAR: ";
	Leer V;
	Segun OP Hacer
		1:
			RES<-100*V;
		2:
			RES<-100^V;
		3:
			RES<-100/V;
		De Otro Modo:
			RES=0
	FinSegun
	Mostrar "EL RESULTADO ES: ",RES;
FinProceso

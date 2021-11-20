Proceso PRUEBA
	Escribir "INGRESE EL VALOR DE LA POLIZA: ";
	Leer VAPOLI;
	Mostrar "ELIJA UNO DE LOS CARGOS";
	MOSTRAR "===============================";
	Mostrar "1 - ALCOHOLICO = 10%"
	MOSTRAR "===============================";
	Mostrar "2 - LENTES = 5%"
	MOSTRAR "===============================";
	Mostrar "3 - ENFERMEDAD = 5%"
	MOSTRAR "===============================";
	Mostrar "4 - EDAD > 40 AÑOS = 20%" 
	MOSTRAR "===============================";
	Escribir "INNGRESE EL TIPO DE CARGO: ";
	Leer TC;
	Segun TC Hacer
		1:
			CO<-VAPOLI*0.10;
			
		2,3:
			CO<-VAPOLI*0.05;
		4:
			CO<-VAPOLI*0.20;
		De Otro Modo:
			CO<-VAPOLI*0.10;
	FinSegun
	MOSTRAR "EL COSTO PARA CONTRATAR UNA POLIZA ES DE: ",CO;
	Mostrar "REALIZADO POR: Luis Eduardo Moreno Guevara"
FinProceso

Proceso sin_titulo
	Mostrar "ESTE PROGRAMA PERMITE HALLAR EL PRODUCTO DE DOS NUMEROS ENTEROSPOR EL METODO DE SUMAS SUCESIVAS"
	Definir PN,SN,P Como Entero
	P=0
	Escribir "DIGITE EL PRIMER NUMERO: ";
	Leer PN;
	Escribir "DIDITE EL SEGUNDO NUMERO: ";
	Leer SN;
	Para k<-1 Hasta SN Con Paso 1 Hacer
		P=P+PN
	FinPara
	Mostrar "PROCESANDO CALCULOS......"
	Esperar 5 segundos
	Limpiar Pantalla
	Mostrar "//////////INFORMACION DEL PROMEDIO DE LOS DOS NUMEROS//////////"
	Escribir "EL PRODUCTO DE LOS DOS NUMEROS ES: ",P;
	Mostrar "REALIZADO POR: Luis Eduardo Moreno Guevara"
	Esperar 6 segundos 
	Limpiar Pantalla
FinProceso

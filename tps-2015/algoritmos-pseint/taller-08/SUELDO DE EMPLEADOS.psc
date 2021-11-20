Proceso sin_titulo
	Mostrar "ESTE PROGRAMA PERMITE IMPRIMIR EL SUEIDO PROMEDIO DE UN GRUPO DE EMPLEADOS"
	Definir SE,NE,K,SS,SP Como Entero
	Escribir "INGRESE EL NUMERO DE EMPLEADOS:";
	leer NE;
	SS=0
	Para K<-1 Hasta NE Con Paso 1 Hacer
		Escribir "DIGITE EL SUELDO DEL EMPLEADO:","#", K;
		Leer SE
		Limpiar Pantalla
		SS=SS+SE
	FinPara
	SP=SS/NE
	Mostrar "PROCESANDO CALCULOS......"
	Esperar 3 segundos
	Limpiar Pantalla
	Mostrar "//////////INFORMACION DEL PROMEDIO DE EMPLEADOS//////////"
	Escribir "EL SUELDO PROMEDIO DE LOS EMPLEADOS ES: ",SP
	Mostrar "REALIZADO POR: Luis Eduardo Moreno Guevara"
	Esperar 10 segundos
	Limpiar Pantalla
FinProceso

Proceso sin_titulo
	Mostrar "ESTE PROGRAMA PERMITE HALLAR QUIENES SON MAYORES Y MENORES DE EDAD ENTRE 10 PERSONAS"
	Definir ED Como Entero
	MEN=0
	MAY=0
	Escribir "DIGITE EL NUMERO DE PERSONAS: ";
	Leer NP;
	Para K<-1 Hasta NP Con Paso 1 Hacer
		Escribir "DIGITE LA EDAD DE LAS PERSONAS: ","#",K;
		Leer EP
		Si EP<18 Entonces
			MEN=MEN+1
		Sino
			MAY=MAY+1
		FinSi
	FinPara
	Mostrar "Procesando Calculos......."
	Limpiar Pantalla
	Escribir "EL NUMERO DE PERSONAS MAYORES ES: ",MAY 
	Escribir "EL NUMERO DE PERSONAS MENORES ES: ",MEN
	Mostrar "REALIZADO POR: Luis Eduardo Moreno Guevara"
	Esperar 5 segundos
	Limpiar Pantalla
FinProceso

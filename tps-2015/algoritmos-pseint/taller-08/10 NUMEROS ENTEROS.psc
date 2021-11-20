Proceso sin_titulo
	Mostrar "ESTE PROGRAMA PERMITE MOSTRAR 10 NUMEROS ENTEROS A PARTIR DE 1 EXCEPTO LOS PARES"
	Definir Q,R Como Entero
	//DEFINIR K COMO VARIABLE CONTADORA
	Para K<-1 Hasta 10 Con Paso 2 Hacer
		Q=K/2
		R=K-(Q*2)
		Si R=0 Entonces
			Mostrar "ERROR"
		Sino
			Escribir "LOS NUMEROS SON: ",K;
		FinSi
	FinPara
	Esperar 5 Segundos
	Limpiar Pantalla
	Mostrar "REALIZADO POR: Luis Eduardo Moreno Guevara"
FinProceso

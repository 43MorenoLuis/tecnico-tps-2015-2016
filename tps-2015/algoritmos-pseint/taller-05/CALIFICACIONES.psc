Proceso sin_titulo
	Escribir "INGRESE LA PRIMERA CALIFICACION: ";
	Leer C1;
	Escribir "INGRESE LA SEGUNDA CALIFICACION: ";
	Leer C2;
	Escribir "INGRESE LA TERCERA CALIFICACION: ";
	Leer C3;
	Escribir "DIGITE LA NOTA DEL TRABAJO FINAL: ";
	Leer TF;
	Escribir "DIGITE LA NOTA DEL EXAMEN FINAL: ";
	Leer EF;
	Limpiar pantalla
	Mostrar "CALCULANDO PROCESO......"
	Esperar 3 segundos
	PROM<-(C1+C2+C3)/3;
	PPAR<-PROM*0.55;
	PEF<-EF*0.30;
	PTF<-TF*0.15;
	CF<-PPAR+PEF+PTF
	Mostrar "LA CALIFICACION FINAL ES DE: ",CF ; 
	Esperar 3 segundos
	Limpiar Pantalla
	Mostrar "ESTE PROGRAMA FUE REALIZADO POR: "
FinProceso

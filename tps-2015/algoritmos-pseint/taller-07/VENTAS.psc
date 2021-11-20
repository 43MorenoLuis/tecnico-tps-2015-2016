Proceso sin_titulo
	Escribir "INGRESE LA PRIMER VENTA: " ;
	Leer V1;
	Escribir "INGRESE LA SEGUNDA VENTA: " ;
	Leer V2;
	Escribir "INGRESE LA TERCERA VENTA: " ;
	Leer V3;
	Escribir "INGRESE EL SUELDO BASE: " ;
	Leer SB;
	TOT_VTA<-V1+V2+V3
	COM<-TOT_VTA*0.10
	TPAG<-SB+COM
	Mostrar "EL RESULTADO DE TOTAL DE PAGO ES: " ,TPAG;
FinProceso

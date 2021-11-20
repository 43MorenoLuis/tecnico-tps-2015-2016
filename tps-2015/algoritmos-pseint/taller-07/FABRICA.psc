Proceso sin_titulo
	Escribir "DIGITE EL COSTO DE LA MATERIA PRIMA: " ;
	Leer MP;
	Escribir "DIGITE LA CLAVE DE CADA ARTICULO: " ;
	Leer C;
	Si (C=3)O(C=4) Entonces
		MO=MP*0.75
	Sino
		Si (C=1)O(C=5) Entonces
			MO=MP*0.80
		Sino
			MO=MP*0.85
		FinSi
	FinSi
	Si (C=2)O(C=5) Entonces
		GF=MP*0.30
	Sino
		Si (C=3)O(C=6) Entonces
			GF=MP*0.35
		Sino
			GF=MP*0.28
		FinSi
	FinSi
	CP=MP+MO+GF
	PV=(CP+CP)*0.45
	Mostrar "EL COSTO DE LA PRODUCCION ES DE: ",CP;
	Mostrar "EL PRECIO DE LA VENTA ES DE: ",PV;
FinProceso

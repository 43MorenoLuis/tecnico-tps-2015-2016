Proceso sin_titulo
	Escribir "DIGITE SU EDAD: " ;
	Leer ED;
	Escribir "DIGITE SU GENERO: " ;
	Leer G;
	Si ED>=18 Y ED<=25 Y G="M" Entonces
		R="APTO"
	Sino
		R="NO APTO"
	FinSi
	MOSTRAR "EL REDULTADO ES: ",R;
FinProceso

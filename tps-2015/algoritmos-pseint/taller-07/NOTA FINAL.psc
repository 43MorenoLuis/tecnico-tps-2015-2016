Proceso sin_titulo
	Escribir "DIGITE PRIMERA NOTA: " ;
	Leer N1;
	Escribir "DIGITE SEGUNDA NOTA: " ;
	Leer N2;
	Escribir "DIGITE LA TERCERA NOTA: " 
	Leer N3;
	PRO<-(N1+N2+N3)/3;
	Si PRO>=4 Entonces
		R="APRUEBA"
	Sino
		R="NO APRUEBA"
	FinSi
	MOSTRAR "EL RESULTADO DEL PROMEDIO ES: ",PRO;
	MOSTRAR "EL RESULTADO ES: ",R;
FinProceso

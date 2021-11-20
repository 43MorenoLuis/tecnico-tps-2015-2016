Proceso BANCO
	Escribir "DIGITE EL TIPO DE TARJETA: ";
	Leer TT;
	Escribir "DIGITE EL LIMITE DEL CREDITO: ";
	Leer LC;
	Segun TT Hacer
		1:
			AC=LC*0.25
		2:
			AC=LC*0.35
		3:
			AC=LC*0.40
		De Otro Modo:
			AC=LC*0.50
		Fin Segun
		NC<-LC+AC
		Mostrar "EL: ",LC," ES EL NUEVO LIMITE DEL CREDITO"
		Mostrar "EL RESULTADO DEL AUMENTO DEL CREDITO ES DE: ",AC;
FinProceso

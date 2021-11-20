Proceso sin_titulo
	Escribir "DIGITE EL NUMERO DE LA ZONA: " ;
	Escribir "(1)AMERICA DEL NORTE,(2)AMERICA CENTRAL: ";
	Escribir "(3)AMERICA DEL SUR,(4)EUROPA,(5)ASIA: ";
	Leer NZ;
	Escribir "DIGITE EL PESO(gr) DE LA CARGA: " ;
	Leer PE;
	Si PE>5000 Entonces
		Mostrar "EL SERVICIO DE ENTREGA NO SE PERMITE: ";
	Sino
		Segun NZ Hacer
			1:
				CO=PE*11
			2:
				CO=PE*10
			3:
				CO=PE*12
			4:	
				CO=PE*24
			De Otro Modo:
				CO=PE*27
		FinSegun
		Mostrar "EL COSTO DEL SERVICIO ES DE: ",CO;
	FinSi
FinProceso

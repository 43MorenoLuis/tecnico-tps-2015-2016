Proceso sin_titulo
	Escribir "DIGITE EL NUMERO DE CONSULTAS: " ;
	Leer NC;
	Si NC<=3 Entonces
		C=200
		TOT=NC*C
	Sino
		Si NC<=5 Entonces
			C=150
			TOT=(NC-3)*150+600
		Sino
			Si NC<=8 Entonces
				C=100
				TOT=(NC-5)*100+900
			Sino
				C=50
				TOT=(NC-8)*50+1200
			FinSi
		FinSi
	FinSi
	Mostrar "EL VALOR DE LA CITA ES DE: ",C;
	Mostrar "EL VALOR DE LO QUE HA PAGADO EL PACIENTE ES DE: ",TOT;
FinProceso

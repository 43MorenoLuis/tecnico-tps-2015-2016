Proceso sin_titulo
	Escribir "DIGITE LA CANTIDAD DE DOCENAS COMPRADAS: " ;
	Leer ND;
	Escribir "DIGITE EL VALOR DE SU COMPRA: " ;
	Leer VCD;
	MC<-ND*VCD
	Si ND>=3 Entonces
		VR=MC*0.15
	Sino
		VR=MC*0.10
	FinSi
	TP<-MC-VR
	MOSTRAR "EL MONTO DE LA COMPRA ES DE: ",MC
	MOSTRAR "EL TOTAL DE DESCUENTO ES DE: ",VR
	MOSTRAR "VALOR A PAGAR ES DE: ",TP
FinProceso

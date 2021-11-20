Proceso PRAC_N11
	Definir PREBAS Como Real
	Definir IMP Como Real
	Definir PRETOT Como Real
	Escribir "INGRESE EL PRECIO BASICO DEL PRODUCTO: ";
	Leer PREBAS;
	Si PREBAS<=0 Entonces
		IMP=0
	Sino
		Si PREBAS<=40 Entonces
			IMP=PREBAS*0.30
		Sino
			Si PREBAS>=500 Entonces
				IMP=PREBAS*0.40
			Sino
				IMP=PREBAS*0.50
			FinSi
		FinSi
	FinSi
	PRETOT<-PREBAS+IMP;
	Mostrar "EL IMPUESTO ES DE: ",IMP;
	Mostrar "EL PRECIO TOTAL QUE DEBE PAGAR POR EL ARTICULO ES DE: ",PRETOT;
	Mostrar "REALIZADO POR: Luis Eduardo Moreno Guevara"
FinProceso

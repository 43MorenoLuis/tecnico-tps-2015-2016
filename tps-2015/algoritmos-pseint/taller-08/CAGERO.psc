Proceso sin_titulo
	nc="bva"
	cc=123
	nn="bc"
	cb=456
	bn="dv"
	cn=789
	Escribir "ingrese el cajero:"
	Leer ca;
	Escribir " ingrese la clave:"
	leer cl;
	Si ca=nc y cl=cc o ca=nn y cl=cb o ca=bn y cl=cn  Entonces
		Escribir "DIGITE EL nombre del cliente:";
		Leer c;
		Escribir "INGRESE LA identificacion:";
		Leer id;
		Escribir "INGRESE EL tipo de cliente:";
		leer tp;
		escribir "DIGITE EL numero de productos:";
		leer np;
		escribir "INGRESE EL valor del producto:";
		Leer vp;
		tc<-np*vp
		Segun tc Hacer
			"platino":
				des<-(tc*0.03)
			"visa":
				des<-(tc*0.05)
			"diamante":
				des<-(tc*0.10)
		FinSegun
	Sino
		Mostrar "error"
	FinSi
	tt<-tc-des
	Mostrar "nombre del cliente:" , c;
	Mostrar " identificacion;", id;
	Mostrar " tipo clientes :" , tp;
	Mostrar  "valor total de la venta antes de descuento:" ,tc;
	Mostrar "valor del descuento:", des;
	Mostrar "valor a pagar:", tt;
FinProceso

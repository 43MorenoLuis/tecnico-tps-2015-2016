Proceso sin_titulo
	nc="bva"
	cc=123
	nn="bc"
	cb=456
	bn="dv"
	cn=789
	Escribir "ingrese el cajero:"
	Leer mn;
	Escribir " ingrese la clave:"
	leer cm;
	Si mn=nc y cc=cm o nn=mn y cb=cm o mn=bn y cn=cm  Entonces
		Escribir "nombre del cliente:"
		Leer nc;
		Escribir "identificacion:"
		Leer id;
		Escribir " tipo de cliente (platino,visa,diamante):"
		leer tp;
		escribir "numero de productos:"
		leer np;
		escribir "valor del producto:"
		Leer vp;
		tc<-np*vp
		mostrar "----------------------------------"
		Segun tp Hacer
			"platino":
				des<-(tc*0.03)
			"visa":
				des<-(tc*0.05)
			"diamante":
				des<-(tc*0.10)
				
			Fin Segun
		
	Sino
		Mostrar "error:";
	Fin Si
	
	Mostrar "-----------------------------------------"
	
	tt<-tc-des
	Mostrar "nombre del cliente:" , nc;
	Mostrar " identificacion;", id;
	Mostrar " tipo clientes :" , tp;
	Mostrar  "valor total de la venta antes de descuento:" ,tc;
	Mostrar "valor del descuento:", des;
	Mostrar "valor a pagar:", tt;
	
FinProceso

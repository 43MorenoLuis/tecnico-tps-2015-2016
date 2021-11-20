
<?php
	$dia=10;
	$precio=15000;
	$sm=650890;
	$salud=0.12;
	$pension=0.11;
	$arl=0.05;

	echo "<h2>"."sueldo de un trabajador"."</h2>";
	$resultado=$dia*$precio;
	echo "<br>"."Dias trabajados($dia)"."*"."Precio del dia($precio)"."=".$resultado;
/*========================================================
	calculo de la salud
========================================================*/
	echo "<h2>"."salud"."</h2>";
	if($resultado>$sm){
			echo "<br>"."no tienes descuento de salud";

	}
	else{
		$health=$resultado*$salud;
			echo "<br>".$resultado."*".$salud."=".$health;

	}	
/*========================================================
	calculo de la pension
========================================================*/
	echo "<h2>"."pension"."</h2>";
	if($resultado>$sm){
		$pensionarse=$resultado*$pension;
		echo "<br>".$resultado."*".$pension."=".$pensionarse;
	}
	else{
		echo "<br>"."no tienes descuento de pension";
	}
/*========================================================
	calculo de la arl
========================================================*/
	echo "<h2>"."ARL"."</h2>";
	if($resultado>$sm){
			echo "<br>"."no tienes descuento de ARL";
	}
	else{
		$aseguradora=$resultado*$arl;
			echo "<br>".$resultado."*".$arl."=".$aseguradora;

	}


?>
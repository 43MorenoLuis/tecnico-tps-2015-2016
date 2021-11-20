<?php
	$numero=55;
	$acumulador=5;
	$consecutivo=1;
	
	if($numero<56){
		while($acumulador<$numero){
		echo "<br> 5 X ".$consecutivo." = ".$acumulador;
		$acumulador=$acumulador+5; 
		$consecutivo++;
		}
	}
	else{
		echo "numero es menor de 10";
	}
?>
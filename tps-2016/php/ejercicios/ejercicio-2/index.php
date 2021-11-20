<?php
	echo "<h1>"."Bienvenido"."</h1>";
	
	$numero1=2;
	$numero2=7;
	$numero3=3;
	$numero4=8;
	
	echo "<br>"."Suma";
	
		$resultado1=$numero1+$numero2;
		echo "<br>".$numero1."+".$numero2."=".$resultado1;
	
		$resultado2=$numero3+$numero4;
		echo "<br>".$numero3."+".$numero4."=".$resultado2;
	
	echo "<br>"."Multiplicacion";
	
		$resultado3=$numero1*$numero2;
		echo "<br>".$numero1."*".$numero2."=".$resultado3;
	
		$resultado4=$numero3*$numero4;
		echo "<br>".$numero3."*".$numero4."=".$resultado4;
		
		if($resultado1>$resultado2){
			echo "<br>"."resultado suma:".$resultado1."<br>"."es mayor";
		}
		else{
			echo "<br>"."resultado suma:" .$resultado2."<br>"."es mayor";
		}
		if($resultado3>$resultado4){
			echo "<br>"."resultado multiplicacion:".$resultado3."<br>"."es mayor";
		}
		else{
			echo "<br>"."resultado multiplicacion:" .$resultado4."<br>"."es mayor";
		}
?>

<html>

	<head>
		<title>Calcular Sueldo</title>
		<link href='css/style.css' rel='stylesheet' type='text/css' media='screen'/>		
	</head>
	<body>
		<?php
			$dias_trabajados=30;
			$sueldo=156137;
			$salud=0.15;
			$pension=0.9;
			$arl=0.5;
			
			$resultado=$dias_trabajados*$sueldo;
			$resultadosalud=$resultado*$salud;
			$resultadopension=$resultado*$pension;
			$resultadoarl=$resultado*$arl;
			
			$resultadospa=$resultadosalud+$resultadopension+$resultadoarl;
			$sueldototal=$resultado-$resultadospa;
			
			echo "<div id='capa1'>";
			echo "<h1>Sueldo Trabajador</h1>";
	
			echo $dias_trabajados."*".$sueldo."=".$resultado;
			echo "<br>"."resultado"."=".$resultado;
			echo "<br>";
			echo "<br>";
			
			echo $resultado."*".$salud."=".$resultadosalud;
			echo "<br>"."resultado salud"."=".$resultadosalud;
			
			echo "<br>";
			echo "<br>";
			
			echo $resultado."*".$pension."=".$resultadopension;
			echo "<br>"."resultado pension"."=".$resultadopension;
			
			echo "<br>";
			echo "<br>";
			
			echo $resultado."*".$arl."=".$resultadoarl;
			echo "<br>"."resultado arl"."=".$resultadoarl;
			
			
			
			echo "<br>";
			echo "<br>";
			
			echo $resultadosalud."+".$resultadopension."+".$resultadoarl."=".$resultadospa;
			echo "<br>"."resultados descontados"."=".$resultadospa;
			
			echo "<br>";
			echo "<br>";
			
			echo $resultado."-".$resultadospa."=".$sueldototal;
			echo "<br>"."sueldo total"."=".$sueldototal;
			
			echo "</div>"
		?>
	</body>
</html>
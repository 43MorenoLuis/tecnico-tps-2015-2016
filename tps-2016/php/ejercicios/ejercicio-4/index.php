<html>
	<head>
		<title>Segundo</title>
		<link href='css/style.css' rel='stylesheet' type='text/css' media='screen'/>

	</head>
	<body>
		<?php
			$numero1=10;
			$numero2=15;
			
			$resultado=$numero1+$numero2;
			echo "<div id='capa1'>";
			echo $numero1."+".$numero2."=".$resultado;
			echo "<br>";
			
			echo $numero1;
			echo "+";
			echo $numero2;
			echo "=";
			echo $resultado;
			echo "</div>";
		?>
	</body>
</html>
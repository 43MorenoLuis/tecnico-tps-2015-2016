<html>
	<head>
		<title>Notas</title>
		<link href='css/calcular.css'rel='stylesheet' type='text/css' media='screen'/> 
	</head>
	<body>
<?php
$nombre=$_REQUEST['txt_nombre'];
$apellido=$_REQUEST['txt_apellido'];
$grado=$_REQUEST['txt_grado'];
$identificacion=$_REQUEST['txt_identificacion'];

$notaunoc=$_REQUEST['txt_cienciasnotauno'];
$notadosc=$_REQUEST['txt_cienciasnotados'];
$notatresc=$_REQUEST['txt_cienciasnotatres'];

$notaunom=$_REQUEST['txt_matematicanotauno'];
$notadosm=$_REQUEST['txt_matematicanotados'];
$notatresm=$_REQUEST['txt_matematicanotatres'];

$notaunocl=$_REQUEST['txt_clnotauno'];
$notadoscl=$_REQUEST['txt_clnotados'];
$notatrescl=$_REQUEST['txt_clnotatres'];



	$notaciencias=($notaunoc+$notadosc+$notatresc)/3;
	$notamatematicas=($notaunom+$notadosm+$notatresm)/3;
	$notacompresionlectora=($notaunocl+$notadoscl+$notatrescl)/3;
	
	if($notaciencias>=3.0){
		$calificativo_ciencias="<span>Aprobado</span>";
	}else{
		$calificativo_ciencias= "<span>Reprobado</span>";
	}
	
	if($notamatematicas>=3.0){
		$calificativo_matematicas="<span>Aprobado</span>";
	}else{
		$calificativo_matematicas= "<span>Reprobado</span>";
	}
	
	if($notacompresionlectora>=3.0){
		$calificativo_compresionlectora= "<span>Aprobado</span>";
	}else{
		$calificativo_compresionlectora= "<span>Reprobado</span>";
	}
	
		echo "<div id='principal'>";
					echo "<h1>Notas</h1>";
	
					echo "<span>Nombre del Estudiante:</span> ".$nombre."<br>";
					echo "<span>Apellido del Estudiante:</span> ".$apellido."<br>";
					echo "<span>Identificacion:</span> ".$identificacion."<br>";
					echo "<span>Grado del Estudiante:</span> ".$grado."<br>";
						echo "<br>";
				
					echo "<table>";
					
					echo "<tr>";
					echo "<td>"."<span>Asignaturas</span>"."</td>";
					echo "<td>"."<span>Nota 1</span>"."</td> ";
					echo "<td>"."<span>Nota 2</span>"."</td>";
					echo "<td>"."<span>Nota 3</span>"."</td>";
					echo "<td>"."<span>Promedio</span>"."</td>";
					echo "<td>"."<span>Final</span>"."</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>"."<span>Ciencias Naturales</span>"."</td>";
					echo "<td>".$notaunoc."</td> ";
					echo "<td>".$notadosc."</td>";
					echo "<td>".$notatresc."</td>";
					echo "<td>".$notaciencias."</td>";
					echo "<td>".$calificativo_ciencias."</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>"."<span>Matematicas</span>"."</td>";
					echo "<td>".$notaunom."</td> ";
					echo "<td>".$notadosm."</td>";
					echo "<td>".$notatresm."</td>";
					echo "<td>".$notamatematicas."</td>";
					echo "<td>".$calificativo_matematicas."</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>"."<span>Compresion Lectora</span>"."</td>";
					echo "<td>".$notaunocl."</td> ";
					echo "<td>".$notadoscl."</td>";
					echo "<td>".$notatrescl."</td>";
					echo "<td>".$notacompresionlectora."</td>";
					echo "<td>".$calificativo_compresionlectora."</td>";
					echo "</tr>";
					
					echo "</table>";
					echo "<p>!Exitos!</p>";
					
		echo "</div>";
?>
	</body>
</html>
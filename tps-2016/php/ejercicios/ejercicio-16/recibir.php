<html>
	<head>
		<title>Nomina</title>
		<link href='css/style.css'rel='stylesheet' type='text/css' media='screen'/> 
	</head>
	<body>
<?php
$salud=0.12;
$pension=0.10;
$arl=0.05;

$nombre_apellido=$_REQUEST['txt_nombre'];
$dias_trabajados=$_REQUEST['txt_diastrabajados'];
$valor_trabajados=$_REQUEST['txt_valortrabajo'];

$sueldo=$dias_trabajados*$valor_trabajados;

$rs=$sueldo*$salud;
$resultadosalud=$sueldo-$rs;

$rp=$sueldo*$pension;
$resultadopension=$sueldo-$rp;

$ra=$sueldo*$arl;   
$resultadoarl=$sueldo-$ra;

if($sueldo<1150000){
	$subsidio=$sueldo+90000;
}
else{
	$subsidio=0;
}

if($sueldo>1350000){
	$resultado=$sueldo*0.02;
	$retencion=$sueldo-$resultado;
}
else{
	$retencion=0;
}
		$to=$resultadosalud+$resultadopension+$resultadoarl;
		$total=$to-$sueldo;
		echo "<h1>Sueldo De Una Persona</h1>";
				echo "<div id='general'>";
					echo "Nombre de Persona: ".$nombre_apellido."<br>";
					echo "Dias Trabajados: ".$dias_trabajados."<br>";
					echo "Valor Dias Trabajados: ".$valor_trabajados."<br>";

					echo "<div class='sueldo'>";
					echo "<span>sueldo</span>.<br>";
					echo $sueldo;
					echo "</div>";
					echo "<div class='Salud'>";
                    echo "<span>salud 12%</span>.<br>";
					echo $resultadosalud;
					echo "</div>";
					echo "<div class='Pension'>";
                    echo "<span>pension 10%</span>.<br>";
					echo $resultadopension;
					echo "</div>";
					echo "<div class='arl'>";
                    echo "<span>Arl 5%</span>.<br>";
					echo $resultadoarl;
					echo "</div>";
					echo "<div class='subsidio'>";
                    echo "<span>Subsidio De 90000</span>.<br>";
					echo $subsidio;
					echo "</div>";
					echo "<div class='retencion'>";
                    echo "<span>Retencion De 2%</span>.<br>";
					echo $retencion;
					echo "</div>";
					echo "<div class='total'>";
                    echo "<span>Total a Pagar</span>.<br>";
					echo $total;
					echo "</div>";
					
					echo "Fecha :31/05/2016<br>";

			echo "</div>";

?>
	</body>
</html>
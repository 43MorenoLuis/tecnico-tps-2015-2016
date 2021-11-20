<?php
$nombre_apellido=$_REQUEST['txt_nombre'];
$year_nacimiento=$_REQUEST['txt_fechanacimiento'];
$genero=$_REQUEST['rd_genero'];

echo "Nombre de Persona: ".$nombre_apellido."<br>";
$edad=2016-$year_nacimiento;

echo "Edad: ".$edad."<br>";

if($genero=='M'){
	$nombre_genero="Masculino";
}
else{
	$nombre_genero="Femenino";
}
	
		echo "Genero: ".$nombre_genero."<br>";
?>
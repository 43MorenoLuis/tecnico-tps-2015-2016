<?php
	include('db/conexion.php');
	
	$txt_codigo=$_REQUEST['txt_codigo'];
	
	$est_nombre=$_REQUEST['txt_nombre'];
	$est_apellido1=$_REQUEST['txt_apellido1'];
	$est_apellido2=$_REQUEST['txt_apellido2'];
	$est_genero=$_REQUEST['rad_genero'];
	$est_nacimiento=$_REQUEST['dat_fechanacimiento'];
	$est_direccion=$_REQUEST['txt_direccion'];
	$est_telefonomovil=$_REQUEST['txt_telefonomovil'];
	$est_telefonofijo=$_REQUEST['txt_telefonofijo'];
	$est_identificacion=$_REQUEST['txt_documento'];
	$tid_referencia=$_REQUEST['sel_referencia'];
	
	
	if(isset($_REQUEST['proceso'])){
		$sql_registrar="DELETE FROM estudiante
						WHERE est_codigo=$txt_codigo;";
	}
	else{
		
		if($txt_codigo!=""){
		$sql_registrar="UPDATE estudiante
						SET tid_codigo=$tid_referencia,
							est_nombre=$est_nombre,
							est_primerapellido=$est_apellido1,
							est_segundoapellido=$est_apellido2,
							est_genero=$est_genero,
							est_nacimiento=$est_nacimiento,
							est_identificacion=$est_identificacion,
							est_direccion=$est_direccion,
							est_telefonofijo=$est_telefonofijo,
							est_telefonomovil=$est_telefonomovil
						WHERE est_codigo=$txt_codigo;";
		}
		else{
			$sql_registrar="INSERT INTO estudiante(	
													tid_codigo, 
													est_nombre, 
													est_primerapellido, 
													est_segundoapellido, 
													est_genero, 
													est_fechanacimiento,
													est_identificacion, 
													est_direccion,							
													est_telefonofijo,
													est_telefonomovil													
													)
												VALUES (
														'$tid_referencia',
														'$est_nombre',
														'$est_apellido1',
														'$est_apellido2',
														'$est_genero',
														'$est_fechanacimiento',
														'$est_identificacion',
														'$est_direccion',
														$est_telefonofijo,
														$est_telefonomovil
														);";	
		}
	}
		echo "<br>";
		echo "<br>";
	echo $sql_registrar;
		echo "<br>";
		pg_query($conn,$sql_registrar);
		
		//header("location: estudiante.php");

?>
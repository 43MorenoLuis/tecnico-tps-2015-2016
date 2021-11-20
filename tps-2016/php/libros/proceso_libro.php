<?php
	include('db/conexion.php');
	
	$txt_codigo=$_REQUEST['txt_codigo'];
	
	$lib_nombre=$_REQUEST['txt_nombre'];
	$lib_fechaedicion=$_REQUEST['dat_fechaedicion'];
	
	
	if(isset($_REQUEST['proceso'])){
		$sql_registrar="DELETE FROM libro
				WHERE lib_codigo=$txt_codigo;";
	}
	else{
		
		if($txt_codigo!=""){
		$sql_registrar="UPDATE libro
						SET lib_nombre='$lib_nombre', 
							lib_fechaedicion='$lib_fechaedicion'
						WHERE lib_codigo=$txt_codigo;";
		}
		else{
			$sql_registrar="INSERT INTO libro(	
								lib_nombre, 
								lib_fechaedicion)
							VALUES (
								'$lib_nombre',
								'$lib_fechaedicion');";	
		}
	}
	//echo $sql_registrar;
	
		pg_query($conn,$sql_registrar);
		
		header("location:libro.php");

?>
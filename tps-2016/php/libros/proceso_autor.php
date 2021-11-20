<?php
	include('db/conexion.php');
	
	$txt_codigo=$_REQUEST['txt_codigo'];
	
	$aut_nombre=$_REQUEST['txt_nombre'];
	$aut_apellido=$_REQUEST['txt_apellido'];
	$aut_biografia=$_REQUEST['txt_biografia'];
	
	
	if(isset($_REQUEST['proceso'])){
		$sql_registrar="DELETE FROM autor
				WHERE aut_codigo=$txt_codigo;";
	}
	else{
		
		if($txt_codigo!=""){
		$sql_registrar="UPDATE autor
						SET	aut_nombre='$aut_nombre',
							aut_apellido='$aut_apellido', 
							aut_biografia='$aut_biografia'
						WHERE aut_codigo=$txt_codigo;";
		}
		else{
			$sql_registrar="INSERT INTO autor(	
									aut_nombre, 
									aut_apellido, 
									aut_biografia)
								VALUES (
									'$aut_nombre',
									'$aut_apellido',
									'$aut_biografia');";	
		}
	}
	//echo $sql_registrar;
	
		pg_query($conn,$sql_registrar);
		
		header("location:autor.php");
?>
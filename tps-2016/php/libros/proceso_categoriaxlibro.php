<?php
	include('db/conexion.php');
	
	$txt_codigo=$_REQUEST['txt_codigo'];
	
	$cli_libro=$_REQUEST['txt_libro'];
	$cli_categoria=$_REQUEST['txt_categoria'];
	
	
	if(isset($_REQUEST['proceso'])){
		$sql_registrar="DELETE FROM categoriaxlibro
				WHERE cli_codigo=$txt_codigo;";
	}
	else{
		
		if($txt_codigo!=""){
		$sql_registrar="UPDATE categoriaxlibro
						SET	
							cli_categoria=$cli_categoria, 
							cli_libro=$cli_libro
						WHERE cli_codigo=$txt_codigo;";
		}
		else{
			$sql_registrar="INSERT INTO categoriaxlibro(	
									cli_libro, 
									cli_categoria)
								VALUES (
									$cli_libro,
									$cli_categoria);";	
		}
	}
	echo $sql_registrar;
	
		pg_query($conn,$sql_registrar);
		
		//header("location:categoriaxlibro.php");
?>
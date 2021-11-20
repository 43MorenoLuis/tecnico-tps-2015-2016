<?php
	include('db/conexion.php');
	
	$txt_codigo=$_REQUEST['txt_codigo'];
	
	$cat_nombre=$_REQUEST['txt_nombre'];	
	
	if(isset($_REQUEST['proceso'])){
		$sql_registrar="DELETE FROM categoria
				WHERE cat_codigo=$txt_codigo;";
	}
	else{
		
		if($txt_codigo!=""){
		$sql_registrar="UPDATE categoria
						SET	cat_nombre='$cat_nombre'
						WHERE cat_codigo=$txt_codigo;";
		}
		else{
			$sql_registrar="INSERT INTO categoria(	
									cat_nombre)
								VALUES (
									'$cat_nombre');";	
		}
	}
	//echo $sql_registrar;
	
		pg_query($conn,$sql_registrar);
		
		header("location:categoria.php");
?>
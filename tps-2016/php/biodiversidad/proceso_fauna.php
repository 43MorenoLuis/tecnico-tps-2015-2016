<?php
	include('db/conexion.php');
	
	$txt_codigo=$_REQUEST["txt_codigo"];
	
	$fau_nombre=$_REQUEST["txt_nombre"];
	$fau_caracteristicas=$_REQUEST["txt_caracteristicas"];
	$fau_ubicacion=$_REQUEST["txt_ubicacion"];
	$fau_descubridor=$_REQUEST["txt_descubridor"];
	
	
	if(isset($_REQUEST['proceso'])){
		$sql_registrar="DELETE FROM fauna
						WHERE fau_codigo=$txt_codigo;";
	}
	else{
		
		if($txt_codigo=""){
		$sql_registrar="UPDATE fauna
						SET	
							fau_nombre=$fau_nombre, 
							fau_caracteristicas=$fau_caracteristicas, 
							fau_ubicacion=$fau_ubicacion, 
							fau_descubridor=$fau_descubridor
						WHERE fau_codigo=$txt_codigo;";
						
		}
		else{
			$sql_registrar="INSERT INTO fauna(
										fau_nombre, 
										fau_caracteristicas, 
										fau_ubicacion, 
										fau_descubridor											
										)
								VALUES (
										'$fau_nombre',
										$fau_caracteristicas,
										$fau_ubicacion,
										$fau_descubridor										
										);";	
		}
	}			
	//echo $sql_registrar;
	
	echo "<br>";
	echo "<br>";
	echo "<br>";

		pg_query($conn,$sql_registrar);
		
		header("location: fauna.php");

?>
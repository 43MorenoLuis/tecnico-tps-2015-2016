<?php
	include('db/conexion.php');
	
	$txt_codigo=$_REQUEST["txt_codigo"];
	
	$flo_nombre=$_REQUEST['txt_nombre'];
	$flo_caracteristicas=$_REQUEST['txt_caracteristicas'];
	$flo_nombre_cientifico=$_REQUEST['txt_nombre_cientifico'];
	$flo_descubridor=$_REQUEST['txt_descubridor'];
	
	if(isset($_REQUEST['proceso'])){
		$sql_registrar="DELETE FROM flora
						WHERE flo_codigo=$txt_codigo;";
	}
	else{
		
		if($txt_codigo!=""){
		$sql_registrar="UPDATE flora
						SET flo_nombre='$flo_nombre', 
							flo_caracteristicas='$flo_caracteristicas', 
							flo_nombre_cientifico='$flo_nombre_cientifico', 
							flo_descubridor='$flo_descubridor'
						WHERE flo_codigo=$txt_codigo;";
		}
		else{
			$sql_registrar="INSERT INTO flora( 
										flo_nombre, 
										flo_caracteristicas, 
										flo_nombre_cientifico,
										flo_descubridor
										)
										VALUES(
										'$flo_nombre',
										'$flo_caracteristicas',
										'$flo_nombre_cientifico',
										'$flo_descubridor'									
										);";
		}	
	}	
	//echo $sql_registrar;

		pg_query($conn,$sql_registrar);
		
		header("location: flora.php");

?>
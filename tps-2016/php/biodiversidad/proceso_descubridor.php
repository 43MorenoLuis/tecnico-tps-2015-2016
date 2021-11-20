<?php
	include('db/conexion.php');
	
	$txt_codigo=$_REQUEST["txt_codigo"];
	
	$des_nombre=$_REQUEST['txt_nombre'];
	$des_apellido1=$_REQUEST['txt_apellido1'];
	$des_apellido2=$_REQUEST['txt_apellido2'];
	$des_direccion=$_REQUEST['txt_direccion'];
	$des_telefono=$_REQUEST['txt_telefono'];
	
	if(isset($_REQUEST['proceso'])){
		$sql_registrar="DELETE FROM descubridor
						WHERE des_codigo=$txt_codigo;";
	}
	else{
		
		if($txt_codigo!=""){
		$sql_registrar="UPDATE descubridor
						SET des_nombre='$des_nombre', 
							des_apellido1='$des_apellido1', 
							des_apellido2='$des_apellido2', 
							des_direccion='$des_direccion',	
							des_telefono=$des_telefono													
						WHERE des_codigo=$txt_codigo;";
		}
		else{
			$sql_registrar="INSERT INTO descubridor( 
										des_nombre, 
										des_apellido1, 
										des_apellido2,
										des_direccion,
										des_telefono
										)
										VALUES(
										'$des_nombre',
										'$des_apellido1',
										'$des_apellido2',
										'$des_direccion',
										$des_telefono										
										);";
		}	
	}	
	//echo $sql_registrar;

		pg_query($conn,$sql_registrar);
		
		header("location: descubridor.php");

?>
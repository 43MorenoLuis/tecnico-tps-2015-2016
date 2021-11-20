<?php
	include('db/conexion.php');
	
	$txt_codigo=$_REQUEST['txt_codigo'];
	
	$doc_identificacion=$_REQUEST['txt_identificacion'];
	$doc_nombre=$_REQUEST['txt_nombre'];
	$doc_1rapellido=$_REQUEST['txt_apellido1'];
	$doc_2oapellido=$_REQUEST['txt_apellido2'];
	$doc_telefonofijo=$_REQUEST['txt_telefonofijo'];
	$doc_telefonomovil=$_REQUEST['txt_telefonomovil'];
	
	if(isset($_REQUEST['proceso'])){
		$sql_registrar="DELETE FROM docente
				WHERE doc_codigo=$txt_codigo;";
	}
	else{
		
		if($txt_codigo!=""){
		$sql_registrar="UPDATE docente
				SET        
					doc_nombre='$doc_nombre', 
					doc_primerapellido='$doc_1rapellido', 
					doc_segundoapellido='$doc_2oapellido', 
					doc_telefonofijo=$doc_telefonofijo, 
					doc_telefonomovil=$doc_telefonomovil
				WHERE doc_codigo=$txt_codigo;";
		}
		else{
			$sql_registrar="INSERT INTO docente( 
							doc_numeroidentificacion,  
							doc_nombre, 
							doc_primerapellido, 
							doc_segundoapellido, 
							doc_telefonofijo, 
							doc_telefonomovil)
						VALUES(
							$doc_identificacion,
							'$doc_nombre',
							'$doc_1rapellido',
							'$doc_2oapellido',
							$doc_telefonofijo,
							$doc_telefonomovil);";
		} 
	} 
	//echo $sql_registrar;

		pg_query($conn,$sql_registrar);
		
		header("location: docente.php");

?>
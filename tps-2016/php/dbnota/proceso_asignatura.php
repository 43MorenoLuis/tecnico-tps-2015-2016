<?php
	include('db/conexion.php');
	
	$txt_codigo=$_REQUEST["txt_codigo"];
	
	$nombre=$_REQUEST["txt_nombre"];
	$grupo_asignatura=$_REQUEST["txt_grasignatura"];
	
	
	if(isset($_REQUEST['proceso'])){
		$sql_registrar="DELETE FROM asignatura
						WHERE asi_codigo=$txt_codigo;";
	}
	else{
		
		if($txt_codigo!=""){
		$sql_registrar="UPDATE asignatura
						SET	asi_nombre='$nombre', 
							gas_codigo=$grupo_asignatura
						WHERE asi_codigo=$txt_codigo;";
						
		}
		else{
			$sql_registrar="INSERT INTO asignatura(	 
										asi_nombre, 
										gas_codigo											
										)
								VALUES (	
										'$nombre',
										$grupo_asignatura
										);";	
		}
	}			
	//echo $sql_registrar;

		pg_query($conn,$sql_registrar);
		
		header("location: asignatura.php");

?>
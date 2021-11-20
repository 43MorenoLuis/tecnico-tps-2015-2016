<?php
	include('db/conectar.php');
	$primercodigo=date('Ydis');
	$txt_codigo=$_REQUEST['txt_codigo'];
	
	$nombre=$_REQUEST['txt_nombre'];
	$apellido=$_REQUEST['txt_apellido'];
	$fechanacio=$_REQUEST['txt_datenacio'];
	$biografia=$_REQUEST['txt_biografia'];
	$paisnacio=$_REQUEST['txt_countrynacio'];
	
	
	if(isset($_REQUEST['proceso'])){
		$sql_registrar="DELETE FROM autores
				WHERE aut_codigo=$txt_codigo;";
	}
	else{
		
		if($txt_codigo!=""){
		$sql_registrar="UPDATE autores
						SET aut_nombre='$nombre', 
								aut_apellido='$apellido', 
								aut_fecha_nacio='$fechanacio', 
								aut_biografia='$biografia', 
       							aut_pais_nacio='$paisnacio'
						WHERE aut_codigo=$txt_codigo;";
		}
		else{
			$sql_registrar="INSERT INTO autores(	
								aut_codigo, 
								aut_nombre, 
								aut_apellido, 
								aut_fecha_nacio, 
								aut_biografia, 
       							aut_pais_nacio)
							VALUES (
								$primercodigo, 
								'$nombre', 
								'$apellido', 
								'$fechanacio', 
								'$biografia', 
       							'$paisnacio');";	
		}
	}
	//echo $sql_registrar;	
		pg_query($conn,$sql_registrar);		
		header("location:autor.php");
?>
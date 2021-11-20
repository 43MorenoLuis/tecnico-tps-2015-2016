<?php
	include('db/conectar.php');
	$primercodigo=date('mdis');
	$txt_codigo=$_REQUEST['txt_codigo'];
	
	$libro=$_REQUEST['sel_libro'];
	$autor=$_REQUEST['sel_autor'];
	
	if(isset($_REQUEST['proceso'])){
		$sql_registrar="DELETE FROM autor_libro
				WHERE ali_codigo=$txt_codigo;";
	}
	else{
		
		if($txt_codigo!=""){
		$sql_registrar="UPDATE autor_libro
						SET ali_libro=$libro, 
							ali_autor=$autor
						WHERE ali_codigo=$txt_codigo;";
		}
		else{
			$sql_registrar="INSERT INTO autor_libro(	
								ali_codigo,
								ali_libro, 
								ali_autor)
							VALUES (
								$primercodigo, 
								$libro, 
								$autor);";	
		}
	}
	//echo $sql_registrar;	
		pg_query($conn,$sql_registrar);		
		header("location:libro_autor.php");
?>
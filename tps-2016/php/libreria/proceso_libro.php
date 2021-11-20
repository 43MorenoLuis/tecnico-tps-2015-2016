<?php
	include('db/conectar.php');
	$primercodigo=date('Ydis');
	$txt_codigo=$_REQUEST['txt_codigo'];
	
	$titulo=$_REQUEST['txt_titulo'];
	$isbn=$_REQUEST['txt_isbn'];
	$codigobarras=$_REQUEST['txt_codebarras'];
	$descripcion=$_REQUEST['txt_descripcion'];
	$nropaginas=$_REQUEST['txt_nropaginas'];
	$fechaedicion=$_REQUEST['txt_datedicion'];
	
	
	if(isset($_REQUEST['proceso'])){
		$sql_registrar="DELETE FROM libros
				WHERE lib_codigo=$txt_codigo;";
	}
	else{
		
		if($txt_codigo!=""){
		$sql_registrar="UPDATE libros
						SET lib_isbn=$isbn, 
							lib_codigo_barra=$codigobarras, 
							lib_titulo='$titulo', 
							lib_descripcion='$descripcion', 
       						lib_year_edicion=$fechaedicion, 
							lib_numero_paginas=$nropaginas
						WHERE lib_codigo=$txt_codigo;";
		}
		else{
			$sql_registrar="INSERT INTO libros(	
								lib_codigo, 
								lib_isbn, 
								lib_codigo_barra, 
								lib_titulo, 
								lib_descripcion, 
								lib_year_edicion, 
								lib_numero_paginas)
							VALUES (
								$primercodigo, 
								$isbn, 
								$codigobarras, 
								'$titulo', 
								'$descripcion', 
								$fechaedicion, 
								$nropaginas);";	
		}
	}
	//echo $sql_registrar;	
		pg_query($conn,$sql_registrar);		
		header("location:libro.php");
?>
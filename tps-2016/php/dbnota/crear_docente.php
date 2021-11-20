<?php
	include('db/conexion.php');
	
	$doc_codigo_m="";
	$doc_identificacion="";
	$doc_nombre="";
	$doc_1rapellido="";
	$doc_2oapellido="";
	$doc_telefonofijo="";
	$doc_telefonomovil="";
	
		if(isset($_REQUEST['codigo_docente'])){
			$codigo_docente=$_REQUEST['codigo_docente'];
			
			$sql_docente="SELECT  
					doc_numeroidentificacion,
					doc_nombre, 
					doc_codigo,
					doc_primerapellido, 
					doc_segundoapellido, 
					doc_telefonofijo, 
					doc_telefonomovil
				FROM docente
				WHERE doc_codigo=$codigo_docente;";
			$query_docente=pg_query($conn,$sql_docente);
			
			$datos_docente=pg_fetch_array($query_docente);
				$doc_codigo_m=$datos_docente['doc_codigo'];
				$doc_identificacion=$datos_docente['doc_numeroidentificacion'];
				$doc_nombre=$datos_docente['doc_nombre'];
				$doc_1rapellido=$datos_docente['doc_primerapellido'];
				$doc_2oapellido=$datos_docente['doc_segundoapellido'];
				$doc_telefonofijo=$datos_docente['doc_telefonofijo'];
				$doc_telefonomovil=$datos_docente['doc_telefonomovil'];
		}
?>
<html>
	<head>
		<title>Formulario Docente</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/crear_docente.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.jpg'/>
	</head>
	
	<body>
		<div id='principal'>
			<h1>Formulario Docente</h1>
		
			<form name='frm_docente' action='proceso_docente.php' method='post'>
				
				<div id='documento'>
					<span>Numero De Documento:</span>
					<input type='text' name='txt_identificacion' id='txt_identificacion' value='<?php echo $doc_identificacion;?>' />
				</div>
				
				<div id='documento'>
					<span>Nombre:</span>
					<input type='text' name='txt_nombre' id='txt_nombre' value='<?php echo $doc_nombre;?>' />
				</div>
				
				<div id='documento'>
					<span>Primer Apellido:</span>
					<input type='text' name='txt_apellido1' id='txt_apellido1' value='<?php echo $doc_1rapellido;?>' />
				</div>
				
				<div id='documento'>
					<span>Segundo Apellido:</span>
					<input type='text' name='txt_apellido2' id='txt_apellido2' value='<?php echo $doc_2oapellido;?>' />
				</div>
				
				<div id='documento'>
					<span>Telefono Movil:</span>
					<input type='text' name='txt_telefonomovil' id='txt_telefonomovil' value='<?php echo $doc_telefonomovil;?>' />
				</div>
				
				<div id='documento'>
					<span>Telefono Fijo:</span>
					<input type='text' name='txt_telefonofijo' id='txt_telefonofijo' value='<?php echo $doc_telefonofijo;?>' />
				</div>
				
				<input type='hidden' name='txt_codigo' id='txt_codigo' value='<?php echo $doc_codigo_m;?>' />
				<input type='submit' name='btn_guardar' id='btn_guardar' value='Guardar' />
				
			</form>
		</div>		
 	</body>
</html>





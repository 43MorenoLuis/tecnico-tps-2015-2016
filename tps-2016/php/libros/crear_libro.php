<?php
include('db/conexion.php');

					$lib_codigo_m="";
					$lib_nombre="";
					$lib_fechaedicion="";
			
		if(isset($_REQUEST['codigo_libro'])){
			$codigo_libro=$_REQUEST['codigo_libro'];
			
			$sql_libro="SELECT lib_codigo, 
									lib_nombre, 
									lib_fechaedicion
							FROM libro
					WHERE lib_codigo=$codigo_libro;";
							
			$query_libro=pg_query($conn,$sql_libro);
			
			$datos_libro=pg_fetch_array($query_libro);
					$lib_codigo_m=$datos_libro['lib_codigo'];
					$lib_nombre=$datos_libro['lib_nombre'];
					$lib_fechaedicion=$datos_libro['lib_fechaedicion'];
		}	
?>
<html>
	<head>
		<title>Formulario Estudiante</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/crear_libro.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.jpg'/>
	</head>
	
	<body>
		<div id='principal'>
			<h1>Formulario Libros</h1>
		
			<form name='frm_libro' action='proceso_libro.php' method='post'>
								
				<div id='documento'>	
					<span>Nombre:</span>
					<input type='text' name='txt_nombre' id='txt_nombre' value='<?php echo $lib_nombre;?>'/>
				</div>
				
				<div id='documento'>
					<span>Fecha Edicion:</span>
					<input type='date' name='dat_fechaedicion' id='dat_fechaedicion' value='<?php echo $lib_fechaedicion;?>'/>
				</div>
								
				<input type='hidden' name='txt_codigo' id='txt_codigo' value='<?php echo $lib_codigo_m;?>'/>
				<input type='submit' name='btn_guardar' id='btn_guardar' value='Guardar' />
				
			</form>
		</div>		
 	</body>
</html>
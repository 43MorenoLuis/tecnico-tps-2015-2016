<?php
include('db/conexion.php');

					$aut_codigo_m="";
					$aut_nombre="";
					$aut_apellido="";
					$aut_biografia="";
			
		if(isset($_REQUEST['codigo_autor'])){
			$codigo_autor=$_REQUEST['codigo_autor'];
			
			$sql_autor="SELECT 	aut_codigo, 
								aut_nombre, 
								aut_apellido, 
								aut_biografia
							FROM autor
					WHERE aut_codigo=$codigo_autor;";
							
			$query_autor=pg_query($conn,$sql_autor);
			
			$datos_autor=pg_fetch_array($query_autor);
					$aut_codigo_m=$datos_autor['aut_codigo'];
					$aut_nombre=$datos_autor['aut_nombre'];
					$aut_apellido=$datos_autor['aut_apellido'];
					$aut_biografia=$datos_autor['aut_biografia'];
		}	
?>
<html>
	<head>
		<title>Formulario Autor</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/crear_autor.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.jpg'/>
	</head>
	
	<body>
		<div id='principal'>
			<h1>Formulario Autor</h1>
		
			<form name='frm_autor' action='proceso_autor.php' method='post'>
								
				<div id='documento'>	
					<span>Nombre:</span>
					<input type='text' name='txt_nombre' id='txt_nombre' value='<?php echo $aut_nombre;?>'/>
				</div>
				
				<div id='documento'>
					<span>Apellido:</span>
					<input type='text' name='txt_apellido' id='txt_apellido' value='<?php echo $aut_apellido;?>'/>
				</div>
				
				<div id='documento'>
					<span>Biografia:</span>
					<input type='text' name='txt_biografia' id='txt_biografia' value='<?php echo $aut_biografia;?>'/>
				</div>
								
				<input type='hidden' name='txt_codigo' id='txt_codigo' value='<?php echo $aut_codigo_m;?>'/>
				<input type='submit' name='btn_guardar' id='btn_guardar' value='Guardar' />
				
			</form>
		</div>		
 	</body>
</html>
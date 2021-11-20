<?php
	include('db/conexion.php');

	$fau_codigo_m="";
	$fau_nombre="";
	$fau_caracteristicas="";
	$fau_ubicacion="";
	$fau_descubridor="";
	
		if(isset($_REQUEST['codigo_fauna'])){
			$codigo_fauna=$_REQUEST['codigo_fauna'];
			
			$sql_fauna="SELECT	fau_codigo, 
								fau_nombre, 
								fau_caracteristicas, 
								fau_ubicacion, 
								fau_descubridor
							FROM fauna
							WHERE fau_codigo=$codigo_fauna;";
			$query_fauna=pg_query($conn,$sql_fauna);
			
			$datos_fauna=pg_fetch_array($query_fauna);
				$fau_codigo_m=$datos_fauna['fau_codigo'];
				$fau_nombre=$datos_fauna['fau_nombre'];
				$fau_caracteristicas=$datos_fauna['fau_caracteristicas'];
				$fau_ubicacion=$datos_fauna['fau_ubicacion'];
				$fau_descubridor=$datos_fauna['fau_descubridor'];
		}
?>
<html>
	<head>
		<title>Formulario Fauna</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/crear_asignatura.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.jpg'/>
	</head>
	
	<body>
		<div id='principal'>
			<h1>Formulario Fauna</h1>
		
			<form name='frm_docente' action='proceso_fauna.php' method='get'>
				<div id='documento'>
					<span>Nombre</span>
					<input type='text' name='txt_nombre' id='txt_nombre' value='<?php echo $fau_nombre;?>' />
				</div>
				
				<div id='documento'>
					<span>Caracteristicas</span>
					<input type='text' name='txt_caracteristicas' id='txt_caracteristicas' value='<?php echo $fau_caracteristicas;?>' />
				</div>
				
				<div id='documento'>
					<span>Ubicacion</span>
					<input type='text' name='txt_ubicacion' id='txt_ubicacion' value='<?php echo $fau_ubicacion;?>' />
				</div>
				
				<div id='documento'>
					<span>Descubridor</span>
					<input type='text' name='txt_descubridor' id='txt_descubridor' value='<?php echo $fau_descubridor;?>' />
				</div>

				<input type='hidden' name='txt_codigo' id='txt_codigo' value=' <?php echo $fau_codigo_m;?>' />				
				<input type='submit' name='btn_guardar' id='btn_guardar' value='Guardar' />
				
			</form>
		</div>		
 	</body>
</html>
<?php
	include('db/conexion.php');

	$asi_codigo="";	
	$asi_nombre="";
	$gas_codigo="";
	
		if(isset($_REQUEST['codigo_asignatura'])){
			$codigo_asignatura=$_REQUEST['codigo_asignatura'];
			
			$sql_asignatura="SELECT	asi_codigo,
						asi_nombre,
						gas_codigo
					FROM asignatura
					WHERE asi_codigo=$codigo_asignatura;";
			$query_asignatura=pg_query($conn,$sql_asignatura);
			
			$datos_asignatura=pg_fetch_array($query_asignatura);
				$asi_codigo=$datos_asignatura['asi_codigo'];
				$asi_nombre=$datos_asignatura['asi_nombre'];
				$gas_codigo=$datos_asignatura['gas_codigo'];
		}
?>
<html>
	<head>
		<title>Formulario Asignatura</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/crear_asignatura.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.jpg'/>
	</head>
	
	<body>
		<div id='principal'>
			<h1>Formulario Asignatura</h1>
		
			<form name='frm_docente' action='proceso_asignatura.php' method='post'>
				<div id='documento'>
					<span>Nombre De Materia</span>
					<input type='text' name='txt_nombre' id='txt_nombre' value='<?php echo $asi_nombre;?>'/>
				</div>
				
				<div id='documento'>
					<span>Grupo Asignatura</span>
					<input type='text' name='txt_grasignatura' id='txt_grasignatura' value='<?php echo $gas_codigo;?>'/>
				</div>

				<input type='hidden' name='txt_codigo' id='txt_codigo' value='<?php echo $asi_codigo;?>'/>				
				<input type='submit' name='btn_guardar' id='btn_guardar' value='Guardar' />
				
			</form>
		</div>		
 	</body>
</html>
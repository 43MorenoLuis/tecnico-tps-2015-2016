<?php
	include('db/conexion.php');
	
	$des_codigo_m="";
	$des_nombre="";
	$des_apellido1="";
	$des_apellido2="";
	$des_direccion="";
	$des_telefono="";
	
		if(isset($_REQUEST['codigo_descubridor'])){
			$codigo_descubridor=$_REQUEST['codigo_descubridor'];
			
			$sql_descubridor="SELECT  
							des_codigo, 
							des_nombre, 
							des_apellido1, 
							des_apellido2,
							des_direccion, 
							des_telefono
						FROM descubridor
						WHERE des_codigo=$codigo_descubridor;";
			$query_descubridor=pg_query($conn,$sql_descubridor);
			
			$datos_descubridor=pg_fetch_array($query_descubridor);
			
				$des_codigo_m=$datos_descubridor['des_codigo'];
				$des_nombre=$datos_descubridor['des_nombre'];
				$des_apellido1=$datos_descubridor['des_apellido1'];
				$des_apellido2=$datos_descubridor['des_apellido2'];
				$des_direccion=$datos_descubridor['des_direccion'];
				$des_telefono=$datos_descubridor['des_telefono'];
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
			<h1>Formulario Descubridor</h1>
		
			<form name='frm_descubridor' action='proceso_descubridor.php' method='post'>
								
				<div id='documento'>
					<span>Nombre:</span>
					<input type='text' name='txt_nombre' id='txt_nombre' value='<?php echo $des_nombre;?>' />
				</div>
				
				<div id='documento'>
					<span>Primer Apellido:</span>
					<input type='text' name='txt_apellido1' id='txt_apellido1' value='<?php echo $des_apellido1;?>' />
				</div>
				
				<div id='documento'>
					<span>Segundo Apellido:</span>
					<input type='text' name='txt_apellido2' id='txt_apellido2' value='<?php echo $des_apellido2;?>' />
				</div>
				
				<div id='documento'>
					<span>Telefono:</span>
					<input type='text' name='txt_telefono' id='txt_telefono' value='<?php echo $des_telefono;?>' />
				</div>
				
				<div id='documento'>
					<span>Direccion:</span>
					<input type='text' name='txt_direccion' id='txt_direccion' value='<?php echo $des_direccion;?>' />
				</div>
				
				<input type='hidden' name='txt_codigo' id='txt_codigo' value='<?php echo $des_codigo_m;?>' />
				<input type='submit' name='btn_guardar' id='btn_guardar' value='Guardar' />
				
			</form>
		</div>		
 	</body>
</html>





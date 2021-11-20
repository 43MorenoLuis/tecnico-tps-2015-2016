<?php
	include('db/conexion.php');
	
	$flo_codigo_m="";
	$flo_nombre="";
	$flo_caracteristicas="";
	$flo_nombre_cientifico="";
	$flo_descubridor="";

	 
						
	
		if(isset($_REQUEST['codigo_flora'])){
			$codigo_descubridor=$_REQUEST['codigo_flora'];
			
			$sql_descubridor="SELECT  
							flo_codigo, 
							flo_nombre, 
							flo_caracteristica, 
							flo_nombre_cientifico,
							flo_descubridor
						FROM flora
						WHERE flo_codigo=$codigo_flora;";
			$query_flora=pg_query($conn,$sql_flora);
			
			$datos_flora=pg_fetch_array($query_flora);
			
				
							$flo_codigo_m=$datos_flora['flo_codigo'];
							$flo_nombre=$datos_flora['flo_nombre'];
							$flo_nombre_cientifico=$datos_flora['flo_nombre_cientifico'];
							$flo_caracteristicas=$datos_flora['flo_caracteristicas'];
							$flo_descubridor=$datos_flora['flo_descubridor'];	
		}
		
?>
<html>
	<head>
		<title>Formulario flora</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/crear_docente.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.jpg'/>
	</head>
	
	<body>
		<div id='principal'>
			<h1>Formulario Descubridor</h1>
		
			<form name='frm_flora' action='proceso_flora.php' method='post'>
								
				<div id='documento'>
					<span>Nombre:</span>
					<input type='text' name='txt_nombre' id='txt_nombre' value='<?php echo $flo_nombre;?>' />
				</div>
				
				<div id='documento'>
					<span>Caracteristicas</span>
					<input type='text' name='txt_caracteristicas' id='txt_caracteristicas' value='<?php echo $flo_caracteristicas;?>' />
				</div>
				<div id='documento'>
					<span>Nombre cientifico</span>
					<input type='text' name='txt_nombre_cientifico' id='txt_nombre_cientifico' value='<?php echo $flo_nombre_cientifico;?>' />
					</div>
				<div id='documento'>
					<span>Descubridor</span>
					<input type='text' name='txt_descubridor' id='txt_descubridor' value='<?php echo $flo_descubridor;?>' />
				</div>
				
				
				<input type='hidden' name='txt_codigo' id='txt_codigo' value='<?php echo $flo_codigo_m;?>' />
				<input type='submit' name='btn_guardar' id='btn_guardar' value='Guardar' />
				
			</form>
		</div>		
 	</body>
</html>
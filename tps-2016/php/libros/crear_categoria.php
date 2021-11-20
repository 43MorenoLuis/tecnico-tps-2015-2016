<?php
include('db/conexion.php');

					$cat_codigo_m="";
					$cat_nombre="";
			
		if(isset($_REQUEST['codigo_categoria'])){
			$codigo_categoria=$_REQUEST['codigo_categoria'];
			
			$sql_categoria="SELECT 	
									cat_codigo, 
									cat_nombre 
								FROM categoria
						WHERE cat_codigo=$codigo_categoria;";
							
			$query_categoria=pg_query($conn,$sql_categoria);
			
			$datos_categoria=pg_fetch_array($query_categoria);
					$cat_codigo_m=$datos_categoria['cat_codigo'];
					$cat_nombre=$datos_categoria['cat_nombre'];
		}	
?>
<html>
	<head>
		<title>Formulario Categoria</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/crear_categoria.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.jpg'/>
	</head>
	
	<body>
		<div id='principal'>
			<h1>Formulario Categoria</h1>
		
			<form name='frm_Categoria' action='proceso_Categoria.php' method='post'>
								
				<div id='documento'>	
					<span>Nombre:</span>
					<input type='text' name='txt_nombre' id='txt_nombre' value='<?php echo $cat_nombre;?>'/>
				</div>
				
				<input type='hidden' name='txt_codigo' id='txt_codigo' value='<?php echo $cat_codigo_m;?>'/>
				<input type='submit' name='btn_guardar' id='btn_guardar' value='Guardar' />
				
			</form>
		</div>		
 	</body>
</html>
<?
include('db/conexion.php');

					$cli_codigo_m="";
					$cli_libro="";
					$cli_categoria="";
			
		if(isset($_REQUEST['codigo_categoriaxlibro'])){
			$codigo_categoriaxlibro=$_REQUEST['codigo_categoriaxlibro'];
			
			$sql_categoriaxlibro="SELECT cli_codigo, 
										cli_libro,
										cli_categoria
									FROM categoriaxlibro
								WHERE cli_codigo=$codigo_categoriaxlibro;";
							
			$query_categoriaxlibro=pg_query($conn,$sql_categoriaxlibro);
			
			$datos_categoriaxlibro=pg_fetch_array($query_categoriaxlibro);
					$cli_codigo_m=$datos_categoriaxlibro['cli_codigo'];
					$cli_libro=$datos_categoriaxlibro['cli_libro'];
					$cli_categoria=$datos_categoriaxlibro['cli_categoria'];
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
			<h1>Formulario Categoria Libro</h1>
		
			<form name='frm_categoriaxlibro' action='proceso_categoriaxlibro.php' method='post'>
				
				<div id='documento'>
					<span>Libro:</span>
					<input type='text' name='txt_libro' id='txt_libro' value='<?php echo $cli_libro;?>'/>
				</div>	
				
				<div id='documento'>
					<span>Categoria:</span>
					<input type='text' name='txt_categoria' id='txt_categoria' value='<?php echo $cli_categoria;?>'/>
				</div>
								
				<input type='hidden' name='txt_codigo' id='txt_codigo' value='<?php echo $cli_codigo_m;?>'/>
				<input type='submit' name='btn_guardar' id='btn_guardar' value='Guardar'/>
				
			</form>
		</div>		
 	</body>
</html>
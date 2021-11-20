<?php
include('db/conectar.php');

					$lib_codigo_m=''; 
					$lib_isbn=''; 
					$lib_codigo_barra='';  
					$lib_titulo='';  
					$lib_descripcion='';  
       				$lib_year_edicion=''; 
					$lib_numero_paginas=''; 
			
		if(isset($_REQUEST['codigo_libro'])){
			$codigo_libro=$_REQUEST['codigo_libro'];
			
			$sql_libro="SELECT lib_codigo, 
								lib_isbn, 
								lib_codigo_barra, 
								lib_titulo, 
								lib_descripcion, 
       							lib_year_edicion, 
								lib_numero_paginas
							FROM libros
					WHERE lib_codigo=$codigo_libro;";
							
			$query_libro=pg_query($conn,$sql_libro);
			
			$datos_libro=pg_fetch_array($query_libro);
					$lib_codigo_m=$datos_libro['lib_codigo']; 
					$lib_isbn=$datos_libro['lib_isbn']; 
					$lib_codigo_barra=$datos_libro['lib_codigo_barra']; 
					$lib_titulo=$datos_libro['lib_titulo'];  
					$lib_descripcion=$datos_libro['lib_descripcion'];  
       				$lib_year_edicion=$datos_libro['lib_year_edicion']; 
					$lib_numero_paginas=$datos_libro['lib_numero_paginas'];
		}	
?>
<html>
<head>
	<?php include('hdlibrary.php'); ?>
</head>

<body>
<header>
	<?php include('menu.php'); ?>
</header>
<hr/>
	
	<body>
			<h1>Agregar Libros</h1>
			<form name='frm_libro' id='frm_libro' action='proceso_libro.php' method='post'>			
				<label>Titulo:</label>
				<input type='text' name='txt_titulo' placeholder='Digite Titulo' id='txt_titulo' value='<?php echo $lib_titulo;?>'/>
				
				<label>ISBN:</label>
				<input type='text' name='txt_isbn' placeholder='Digite ISBN' id='txt_isbn' value='<?php echo $lib_isbn;?>'/>
				
				<label>Codigo De Barras:</label>
				<input type='text' name='txt_codebarras' placeholder='Digite Codigo' id='txt_codebarras' value='<?php echo $lib_codigo_barra;?>'/>
				
				<label>Descripcion:</label>
				<textarea name='txt_descripcion' placeholder='Digite Descripcion' id='txt_descripcion' value='<?php echo $lib_descripcion;?>'></textarea>
				
				<label>Fecha De Edicion:</label>
				<input type='text' name='txt_datedicion' placeholder='Digite Fecha' id='txt_datedicion' value='<?php echo $lib_year_edicion;?>'/>
				
				<label>Numero De Paginas:</label>
				<input type='text' name='txt_nropaginas'placeholder='Digite Numero' id='txt_nropaginas' value='<?php echo $lib_numero_paginas;?>'/>
				
				<input type='hidden' name='txt_codigo' id='txt_codigo' value='<?php echo $lib_codigo_m;?>'/>
				<input type='submit' name='btn_guardar' id='btn_guardar' value='Guardar' />
			</form>
 	</body>
</html>
<?php
	include('db/conectar.php');

	if(isset($_REQUEST['sea_buscar'])){
	$buscar=strtolower($_REQUEST['sea_buscar']);
	$condicion="WHERE CONCAT((lib_titulo) || Lower (lib_titulo)) LIKE ('%".$buscar."%')";
	}
	else {
		$buscar = "";
		$condicion= "";
	}

	$sql_libro="SELECT 	lib_codigo, 
						lib_titulo, 
						lib_descripcion, 
       					lib_year_edicion, 
						lib_numero_paginas
					FROM libros
					$condicion ORDER by lib_titulo ASC;";
	
	$query_libro=pg_query($conn,$sql_libro);
	$numero_registro=pg_num_rows($query_libro);
 ?>
<!doctype html>
<html>
<head>
	<?php include('hdlibrary.php'); ?>
</head>

<body>
<header>
	<?php include('menu.php'); ?>
</header>
<hr/>
    
				<h1><img src="interfaz/library.png" /> Libros </h1>
					<form name='frm_libro' id='frm_libro' action='libro.php' method='post'>
						<input type='search' placeholder="Buscar Libro" name='sea_buscar' id='sea_buscar' />
						<input type='submit' value='Buscar' name='btn_buscar' id='btn_buscar'/>
					</form>
<hr/>
				<form name='frm_libro' action='crear_libro.php' method='post'>
					<a href='crear_libro.php'><input type="button" value="Agregar" class="left mas"  /></a>
			
<br/>
					<table>
						<tr>
						<th>No</th>
						<th>Titulo</th>
						<th>Fecha Edicion</th>
						<th>Numero Paginas</th>
						<th>Descripcion</th>

					</tr>
						<?php
					$numero_libro=1;
										
					while($datos_libro=pg_fetch_array($query_libro)){
							$lib_titulo=$datos_libro['lib_titulo'];
							$lib_codigo=$datos_libro['lib_codigo'];
							$lib_yaeredicion=$datos_libro['lib_year_edicion'];
							$lib_nropag=$datos_libro['lib_numero_paginas'];
							$lib_descripcion=$datos_libro['lib_descripcion'];
							
							echo "<tr>";
							echo "<td>".$numero_libro."</td>";
							echo "<td>".$lib_titulo."</td>";
							echo "<td>".$lib_yaeredicion."</td>";
							echo "<td>".$lib_nropag."</td>";
							echo "<td>".$lib_descripcion."</td>";
							echo "<td><a href='crear_libro.php?codigo_libro=$lib_codigo' title='Modificar'>
										<input type='button'  class='left edit' /></a></td>";
							echo "<td><a href='proceso_libro.php?txt_codigo=$lib_codigo&proceso=borrar' title='Eliminar'>
										<input type='button'  class='left del' /></a></td>";								  
							echo "</tr>";
						
						
						$numero_libro++;
					}
				?>
					</table>
</form>
</body>
</html>

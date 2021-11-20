<?php
	include('db/conectar.php');
	$sql_autor="SELECT ali_codigo, 
					    ali_libro,
                        ali_autor,
                        aut_nombre,
                        aut_apellido,
                        lib_titulo,
                        autores.aut_codigo,
                        libros.lib_codigo
  					FROM autor_libro, libros, autores
                    WHERE autores.aut_codigo=autor_libro.ali_autor
                    AND libros.lib_codigo=autor_libro.ali_libro;";
	
	$query_autor=pg_query($conn,$sql_autor);
	$numero_registro=pg_num_rows($query_autor);
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
    
				<h1><img src="interfaz/autor.png" /> Libro Por Autor </h1>
<br/>			
			<form name='frm_libro_autor' action='crear_libro_autor.php' id='frm_libro_autor' method='post'>
					<a href='crear_libro_autor.php'><input type="button" value="Agregar" class="left mas"/></a>
					<table>
						<tr>
						<th>No</th>
						<th>Libro</th>
						<th>Nombre Autor</th>
                        <th>Apellido</th>
					</tr>
						<?php
					$numero=1;
										
					while($datos_autor=pg_fetch_array($query_autor)){
						$ali_codigo=$datos_autor['ali_codigo']; 
						$ali_libro=$datos_autor['lib_titulo'];
						$ali_nombre=$datos_autor['aut_nombre'];
                        $ali_apellido=$datos_autor['aut_apellido'];
							
							echo "<tr>";
							echo "<td>".$numero."</td>";
							echo "<td>".$ali_libro."</td>";
							echo "<td>".$ali_nombre."</td>";
                            echo "<td>".$ali_apellido."</td>";
							echo "<td><a href='crear_libro_autor.php?codigo_libro_autor=$ali_codigo' title='Modificar'>
										<input type='button'  class='left edit' /></a></td>";
							echo "<td><a href='proceso_libro_autor.php?txt_codigo=$ali_codigo&proceso=borrar' title='Eliminar'>
										<input type='button'  class='left del' /></a></td>";
							echo "</tr>";						
						
						$numero++;
					}
				?>
					</table>
		</form>
</body>
</html>
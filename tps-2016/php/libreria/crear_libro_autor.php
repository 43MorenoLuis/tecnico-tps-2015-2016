<?php
include('db/conectar.php');

					$ali_codigo=''; 
					$aut_codigo='';
					$lib_codigo_m='';  
			
		if(isset($_REQUEST['codigo_autor_libro'])){
			$codigo_autor_libro=$_REQUEST['codigo_autor_libro'];
			
			$sql_autor_libro="SELECT ali_codigo, 
									ali_libro,
									ali_autor,
								FROM autor_libro;";
							
			$query_autor_libro=pg_query($conn,$sql_autor_libro);
			
			$datos_autor_libro=pg_fetch_array($query_autor_libro);
					$ali_codigo=$datos_autor_libro['ali_codigo']; 
					$ali_libro=$datos_autor_libro['ali_titulo'];
					$ali_nombre=$datos_autor_libro['ali_nombre'];
		}
			$sql_libro="SELECT lib_codigo, 
								lib_isbn, 
								lib_titulo 
							FROM libros;";
							
			$query_libro=pg_query($conn,$sql_libro);
			
			$datos_libro=pg_fetch_array($query_libro);
					$lib_codigo_m=$datos_libro['lib_codigo']; 
					$lib_titulo=$datos_libro['lib_titulo'];
					
			$sql_autor="SELECT aut_codigo, 
								aut_nombre, 
								aut_apellido 
							FROM autores;";
							
			$query_autor=pg_query($conn,$sql_autor);
			
			$datos_autor=pg_fetch_array($query_autor);
				$aut_codigo=$datos_autor['aut_codigo']; 
				$aut_nombre=$datos_autor['aut_nombre'];
				$aut_apellido=$datos_autor['aut_apellido'];
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
			<h1>Agregar Autor Por Libro</h1>
			<h3>o Libro Por Autor</h3>
			
			<form name='frm_libroautor' id='frm_libroautor' action='proceso_libro_autor.php' method='post'>			
				<label>Libro:</label>
				<select name="sel_libro" id="sel_libro" required>
					<option value="">Seleccione Libro...</option>
					<?php
						while($datos_libro=pg_fetch_array($query_libro)){
							$lib_codigo_m=$datos_libro['lib_codigo']; 
							$lib_titulo=$datos_libro['lib_titulo'];

							if($lib_codigo_m==$lib_codigo){
								$selected="";
							}
							else{
								$selected="selected";
							}
							echo "<option value='$lib_codigo_m'>$lib_titulo</option>";
						}
					?>
				</select>
					
					<label>Autor:</label>
				<select name="sel_autor" id="sel_autor" required>
					<option value="">Seleccione Autor...</option>
					<?php
						while($datos_autor=pg_fetch_array($query_autor)){
							$aut_codigo_m=$datos_autor['aut_codigo']; 
							$aut_nombre=$datos_autor['aut_nombre'];
							$aut_apellido=$datos_autor['aut_apellido'];

							if($aut_codigo_m==$aut_codigo){
								$selected="";
							}
							else{
								$selected="selected";
							}
							echo "<option value='$aut_codigo_m'>$aut_nombre $aut_apellido</option>";
						}
					?>
				</select>
				
				<input type='hidden' name='txt_codigo' id='txt_codigo' value='<?php echo $ali_codigo;?>'/>
				<input type='submit' name='btn_guardar' id='btn_guardar' value='Guardar' />
			</form>
 	</body>
</html>
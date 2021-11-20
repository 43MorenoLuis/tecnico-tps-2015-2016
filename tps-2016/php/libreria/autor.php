<?php
	include('db/conectar.php');

	if(isset($_REQUEST['sea_buscar'])){
	$buscar=strtolower($_REQUEST['sea_buscar']);
	$condicion="WHERE CONCAT((aut_nombre) || Lower (aut_nombre)) LIKE ('%".$buscar."%')";
	}
	else {
		$buscar = "";
		$condicion= "";
	}

	$sql_autor="SELECT aut_codigo, 
					aut_nombre, 
					aut_apellido, 
					aut_fecha_nacio, 
					aut_biografia, 
       				aut_pais_nacio
  					FROM autores
					$condicion ORDER by aut_nombre ASC;";
	
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
    
				<h1><img src="interfaz/autor.png" /> Autores </h1>
					<form name='frm_autor' id='frm_autor' action='autor.php' method='post'>
						<input type='search' placeholder="Buscar Autor" name='sea_buscar' id='sea_buscar' />
						<input type='submit' value='Buscar' name='btn_buscar' id='btn_buscar'/>
					</form>
<hr/>
				<form name='frm_autor' action='crear_autor.php' method='post'>
					<a href='crear_autor.php'><input type="button" value="Agregar" class="left mas"/></a>
			
<br/>
					<table>
						<tr>
						<th>No</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Nacio</th>
						<th>Biografia</th>
						<th>Pais Nacio</th>
					</tr>
						<?php
					$numero_autor=1;
										
					while($datos_autor=pg_fetch_array($query_autor)){
						$aut_codigo=$datos_autor['aut_codigo']; 
						$aut_nombre=$datos_autor['aut_nombre'];
						$aut_apellido=$datos_autor['aut_apellido'];
						$aut_fecha_nacio=$datos_autor['aut_fecha_nacio']; 
						$aut_biografia=$datos_autor['aut_biografia']; 
       					$aut_pais_nacio=$datos_autor['aut_pais_nacio'];
							
							echo "<tr>";
							echo "<td>".$numero_autor."</td>";
							echo "<td>".$aut_nombre."</td>";
							echo "<td>".$aut_apellido."</td>";
							echo "<td>".$aut_fecha_nacio."</td>";
							echo "<td>".$aut_biografia."</td>";
							echo "<td>".$aut_pais_nacio."</td>";
							echo "<td><a href='crear_autor.php?codigo_autor=$aut_codigo' title='Modificar'>
										<input type='button'  class='left edit' /></a></td>";
							echo "<td><a href='proceso_autor.php?txt_codigo=$aut_codigo&proceso=borrar' title='Eliminar'>
										<input type='button'  class='left del' /></a></td>";								  
							echo "</tr>";						
						
						$numero_autor++;
					}
				?>
					</table>
</form>
</body>
</html>

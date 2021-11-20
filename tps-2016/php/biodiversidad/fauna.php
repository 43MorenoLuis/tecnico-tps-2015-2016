 <?php  
	include('db/conexion.php');

	if(isset($_REQUEST['txt_buscar'])){
		$buscar=strtolower($_REQUEST['txt_buscar']);
		$condicion="WHERE CONCAT((fau_nombre) || Lower(fau_nombre))LIKE ('%".$buscar."%')";
	}
	else {
		$buscar= "";
		$condicion= "";
	}
 
	$sql_fauna="SELECT fau_codigo, 
						fau_nombre, 
						fau_caracteristicas, 
						fau_ubicacion, 
						fau_descubridor
					FROM fauna
					$condicion ORDER by fau_nombre ASC;";
	
	$query_fauna=pg_query($conn,$sql_fauna);
	$numero_registro=pg_num_rows($query_fauna);
 ?>

 
 <!DOCTYPE html>
 
<html> <!--<![endif]-->
	<head>
		<title>Lista De Fauna</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/fauna.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.jpg'/>
	</head>
	
	<body>
		<div id='principal'>
			<?php  
				echo "<h3>"."N&uacute;mero de Registro: "."$numero_registro"."</h3>";
				echo "<h2>"."Lista De Fauna"."</h2>";
				echo "<div class='menu'>";
				include('menu.php');
				echo "</div>";
			?>
				
			<form name='frm_fauna' id='frm_fauna' action='fauna.php' method='post'>
				<input type='text' name='txt_buscar' id='txt_buscar' placeholder='Buscar Fauna'/>
				
				<div id='search'>
					<input  type='image' src='img/buscar.png' width='20' height='15'/>
					<label>Buscar</label> 
				</div>
			</form>
			<div id='crear'>
				<a href='crear_fauna.php'>Crear Fauna</a>
			</div>

			<table>
					<tr>
						<th>No</th>
						<th>Nombre</th>
						<th>Caracteristicas</th>
						<th>Ubicacion</th>
						<th>Descubridor</th>
					</tr>
					
				<?php
					$numero_fauna=1;
										
					while($datos_fauna=pg_fetch_array($query_fauna)){
							$fau_codigo=$datos_fauna['fau_codigo'];
							$fau_nombre=$datos_fauna['fau_nombre'];
							$fau_caracteristicas=$datos_fauna['fau_caracteristicas'];
							$fau_ubicacion=$datos_fauna['fau_ubicacion'];
							$fau_descubridor=$datos_fauna['fau_descubridor'];
							
							
							echo "<tr>";
							echo "<td>".$numero_fauna."</td>";
							echo "<td>".$fau_nombre."</td>";
							echo "<td>".$fau_caracteristicas."</td>";
							echo "<td>".$fau_ubicacion."</td>";
							echo "<td>".$fau_descubridor."</td>";
							echo "<td id='editar'><a href='crear_fauna.php?codigo_fauna=$fau_codigo' title='Editar'><img src='img/editar2.png' class='estiloico' alt='Editar' title='Editar'/></a></td>";
							echo "<td id='eliminar'><a href='proceso_fauna.php?txt_codigo=$fau_codigo&proceso=borrar' title='Eliminar'><img src='img/descarga.png' class='estiloico' alt='Eliminar' title='Eliminar'/></a></td>";
							echo "</tr>";
							
							$numero_fauna++;
					}
				?>
			</table>
		</div>
	</body>
</html>
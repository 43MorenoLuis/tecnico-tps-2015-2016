<?php
	include('db/conexion.php');
 
	if(isset($_REQUEST['txt_buscar'])){
		$buscar=strtolower($_REQUEST['txt_buscar']);
		$condicion=" WHERE  CONCAT((flo_nombre) || Lower(flo_nombre)) LIKE ('%".$buscar."%')";
	}
	else {
		$buscar="";
		$condicion="";
	}

		$sql_flora="SELECT flo_codigo, 
							flo_nombre, 
							flo_caracteristicas, 
							flo_nombre_cientifico, 
							flo_descubridor 
					FROM flora		
					$condicion ORDER by flo_nombre ASC;";
	
	$query_flora=pg_query($conn,$sql_flora);
	$numero_registro=pg_num_rows($query_flora);
 ?>
 
 <!DOCTYPE html>
 
<html> <!--<![endif]-->
	<head>
		<title>Lista De flora</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/docente.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.jpg'/>
	</head>
	
	<body>
		<div id='principal'>
		
			 <?php  
				echo "<h3>"."N&uacute;mero de Registro: "."$numero_registro"."</h3>";
				echo "<h2>"."Lista De flora"."</h2>";
				echo "<div class='menu'>";
				include('menu.php');
				echo "</div>";
				
			?>
			
			<form name='frm_flora' id='frm_flora' action='flora.php' method='post'>
				<input type='text' name='txt_buscar' id='txt_buscar' placeholder='Buscar flora'/>
			
				<div id='search'>
					<input  type='image' src='img/buscar.png' width='20' height='15'/>
					<label>Buscar</label> 
				</div>
			</form>
			
			<div id='crear'>
				<a href='crear_flora.php'>Crear flora</a>
			</div>
			
			<table>
					<tr>
						<th>No</th>
						<th>Nombre</th>
						<th>Caracteristicas</th>
						<th>Descubridor</th>
		
					</tr>
					
				<?php
					$numero_flora=1;
					
					while($datos_flora=pg_fetch_array($query_flora)){
							$flo_codigo=$datos_flora['flo_codigo'];
							$flo_nombre=$datos_flora['flo_nombre'];
							
							$flo_caracteristicas=$datos_flora['flo_caracteristicas'];
							$flo_descubridor=$datos_flora['flo_descubridor'];							
							
							echo "<tr>";
							echo "<td>".$numero_descubridor."</td>";
							echo "<td>".$flo_nombre."</td>";
							echo "<td>".$flo_caracteristicas."</td>";
							echo "<td>".$flo_descubridor."</td>";
						
							echo "<td><a href='crear_flora.php?codigo_flora=$flo_codigo' title='Editar'><img src='img/editar.png' class='estiloico' alt='Editar' title='Editar'/></a></td>";
							echo "<td><a href='proceso_flora.php?txt_codigo=$flo_codigo&proceso=borrar' title='Eliminar'><img src='img/eliminar.png' class='estiloico' alt='Eliminar' title='Eliminar'/></a></td>";
							echo "</tr>";
							
							$numero_descubridor++;
					}
				?>
			</table>
		</div>
	</body>
</html>
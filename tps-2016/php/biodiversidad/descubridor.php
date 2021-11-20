 <?php
	include('db/conexion.php');
 
	if(isset($_REQUEST['txt_buscar'])){
		$buscar=strtolower($_REQUEST['txt_buscar']);
		$condicion=" WHERE  CONCAT((des_nombre) || Lower(des_nombre)) LIKE ('%".$buscar."%')";
	}
	else {
		$buscar="";
		$condicion="";
	}

		$sql_descubridor="SELECT des_codigo, 
							des_nombre, 
							des_apellido1, 
							des_apellido2, 
							des_direccion, 
							des_telefono
					FROM descubridor			
					$condicion ORDER by des_nombre ASC;";
	
	$query_descubridor=pg_query($conn,$sql_descubridor);
	$numero_registro=pg_num_rows($query_descubridor);
 ?>
 
 <!DOCTYPE html>
 
<html> <!--<![endif]-->
	<head>
		<title>Lista de descubridores</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/docente.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.jpg'/>
	</head>
	
	<body>
		<div id='principal'>
		
			 <?php  
				//echo "<h3>"."N&uacute;mero de Registro: "."$numero_registro"."</h3>";
				echo "<h2>"."Lista De Descubridor"."</h2>";
				echo "<div class='menu'>";
				include('menu.php');
				echo "</div>";
				
			?>
			
			<form name='frm_descubridor' id='frm_descubridor' action='descubridor.php' method='post'>
				<input type='text' name='txt_buscar' id='txt_buscar' placeholder='Buscar Descubridor'/>
			
				<div id='search'>
					<input  type='image' src='img/buscar.png' width='20' height='15'/>
					<label>Buscar</label> 
				</div>
			</form>
			
			<div id='crear'>
				<a href='crear_descubridor.php'>Crear Descubridor</a>
			</div>
			
			<table>
					<tr>
						<th>No</th>
						<th>Nombre</th>
						<th>Primer Apellido</th>
						<th>Segundo Apellido</th>
						<th>Direccion</th>
						<th>Telefono</th>
					</tr>
					
				<?php
					$numero_descubridor=1;
					
					while($datos_descubridor=pg_fetch_array($query_descubridor)){
							$des_codigo=$datos_descubridor['des_codigo'];
							$des_nombre=$datos_descubridor['des_nombre'];
							$des_apellido1=$datos_descubridor['des_apellido1'];
							$des_apellido2=$datos_descubridor['des_apellido2'];
							$des_direccion=$datos_descubridor['des_direccion'];
							$des_telefono=$datos_descubridor['des_telefono'];							
							
							echo "<tr>";
							echo "<td>".$numero_descubridor."</td>";
							echo "<td>".$des_nombre."</td>";
							echo "<td>".$des_apellido1."</td>";
							echo "<td>".$des_apellido2."</td>";
							echo "<td>".$des_direccion."</td>";
							echo "<td>".$des_telefono."</td>";
							echo "<td><a href='crear_descubridor.php?codigo_descubridor=$des_codigo' title='Editar'><img src='img/editar.png' class='estiloico' alt='Editar' title='Editar'/></a></td>";
							echo "<td><a href='proceso_descubridor.php?txt_codigo=$des_codigo&proceso=borrar' title='Eliminar'><img src='img/eliminar.png' class='estiloico' alt='Eliminar' title='Eliminar'/></a></td>";
							echo "</tr>";
							
							$numero_descubridor++;
					}
				?>
			</table>
		</div>
	</body>
</html>
<?php
	include('db/conexion.php');
	
	$sql_asigest="SELECT 
						est_identificacion, 
						est_nombre, 
						est_primerapellido, 
						est_segundoapellido, 
						est_genero, 
						est_fechanacimiento, 
						est_direccion, 
						est_telefonofijo, 
						est_telefonomovil, 	
						est_codigo, 
						doc_codigo,
						doc_numeroidentificacion, 
						doc_nombre, 
						doc_primerapellido, 
						doc_segundoapellido, 
						doc_telefonofijo,
						doc_telefonomovil,						
						asi_codigo,
						asi_nombre,
						gas_codigo
					FROM docente, estudiante, asignatura
					WHERE est_codigo.estudiante=asi_codigo.asignatura=doc_codigo.docente
					$condicion ORDER by asi_nombre ASC;";
	
	$query_asigest=pg_query($conn,$sql_asigest);
	$numero_registro=pg_num_rows($query_asigest);
?>
<!DOCTYPE html>
 
<html> <!--<![endif]-->
	<head>
		<title>Lista De Estudiantes Por Asignatura</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/docente.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.jpg'/>
	</head>
	
	<body>
		<div id='principal'>
		
			 <?php  
				echo "<h3>"."N&uacute;mero de Registro: "."$numero_registro"."</h3>";
				echo "<h2>"."Lista De Estudiantes Por Asignatura"."</h2>";
				echo "<div class='menu'>";
				include('menu.php');
				echo "</div>";
				
			?>
			
			<form name='frm_docente' id='frm_docente' action='docente.php' method='post'>
				<input type='text' name='txt_buscar' id='txt_buscar' placeholder='Buscar Docente'/>
				
				<div id='search'>
					<input  type='image' src='img/buscar.png' width='20' height='15'/>
					<label>Buscar</label> 
				</div>
			</form>
			
			<div id='crear'>
				<a href='crear_docente.php'>Crear Docente</a>
			</div>
			
			<table>
					<tr>
						<th>No</th>
						<th>Estudiante</th>
						<th>Asignatura</th>
						<th>Docente</th>
					</tr>
					
				<?php
					$numero=1;
					
					while($datos_asigest=pg_fetch_array($query_asigest)){
							$doc_nroidentificacion=$datos_asigest['doc_numeroidentificacion'];
							$doc_nombre=$datos_asigest['doc_nombre'];
							$doc_primerapellido=$datos_asigest['doc_primerapellido'];
							$doc_segundoapellido=$datos_asigest['doc_segundoapellido'];
							$doc_telefonofijo=$datos_asigest['doc_telefonofijo'];
							$doc_telefonomovil=$datos_asigest['doc_telefonomovil'];
							$asi_codigo=$datos_asigest['asi_codigo'];
							$asi_nombre=$datos_asigest['asi_nombre'];
							$gas_codigo=$datos_asigest['gas_codigo'];
							$est_nombre=$datos_asigest['est_nombre'];
							$est_primerapellido=$datos_asigest['est_primerapellido'];
							$est_segundoapellido=$datos_asigest['est_segundoapellido'];
							$est_genero=$datos_asigest['est_genero'];
							$est_fechanacimiento=$datos_asigest['est_fechanacimiento'];
							$est_direccion=$datos_asigest['est_direccion'];
							$est_telefonomovil=$datos_asigest['est_telefonomovil'];
							$est_telefonofijo=$datos_asigest['est_telefonofijo'];
							$est_identificacion=$datos_asigest['est_identificacion'];
							$est_codigo=$datos_asigest['est_codigo'];
							
							echo "<tr>";
							echo "<td>".$numero."</td>";
							echo "<td>".$est_nombre."</td>";
							echo "<td>".$asi_nombre."</td>";
							echo "<td>".$doc_nombre."</td>";
							echo "</tr>";
							
							$numero++;
					}
				?>
			</table>
		</div>
	</body>
</html>
<?php
	include('db/conexion.php');

	if(isset($_REQUEST['txt_buscar'])){
		$buscar=strtolower($_REQUEST['txt_buscar']);
		$condicion="AND CONCAT(to_char(est_identificacion::bigint, '99999999999')|| Lower(est_nombre) || Lower(est_primerapellido) || Lower(est_segundoapellido)) LIKE ('%".$buscar."%')";
	}
	else {
		$buscar = "";
		$condicion= "";
	}
	
	$sql_estudiante="SELECT est_identificacion, 
							estudiante.tid_codigo,
							tipoidentificacion.tid_codigo,
							est_nombre, 
							est_primerapellido, 
							est_segundoapellido, 
							est_genero, 
							est_fechanacimiento, 
							est_direccion, 
							est_telefonofijo, 
							est_telefonomovil, 	
							est_codigo, 
							tid_referencia
					FROM estudiante, tipoidentificacion 
					WHERE estudiante.tid_codigo=tipoidentificacion.tid_codigo
					$condicion ORDER by est_nombre ASC;";
	
	$query_estudiante=pg_query($conn,$sql_estudiante);
	$numero_registro=pg_num_rows($query_estudiante);
 ?>
 
 <!DOCTYPE html>
 
<html> <!--<![endif]-->
	<head>
		<title>Lista De Estudiantes</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/estudiante.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.jpg'/>
	</head>
	
	<body>
		<div id='principal'>
		
			 <?php  
				echo "<h3>"."N&uacute;mero de Registro: "."$numero_registro"."</h3>";
				echo "<h2>"."Lista De Estudiantes"."</h2>";
				echo "<div class='menu'>";
				include('menu.php');
				echo "</div>";
			?>
			
			<form name='text' type='frm_estudiante' id='frm_estudiante' action='estudiante.php' method='post'>
				<input type='text' name='txt_buscar' id='txt_buscar' placeholder='Buscar Estudiante'/>
				
				<div id='search'>
					<input  id='lupa' type='image' src='img/search.png' width='20' height='15'/>
					<label type='buttom' value='Buscar' name='btn_buscar' id='btn_buscar'>Buscar</label> 
				</div>
			</form>
			
			<div id='crear'>
				<a href='crear_estudiante.php'>Crear Estudiante</a>
			</div>
			
			<table>
					<tr>
						<th>No</th>
						<th>Referencia</th>
						<th>Identificaci&oacute;n</th>
						<th>Nombre</th>
						<th>Primer Apellido</th>
						<th>Segundo Apellido</th>
						<th>Genero</th>
						<th>Fecha de Nacimiento</th>
						<th>Direccion</th>
					</tr>
				<?php
					$numero_estudiante=1;
										
					while($datos_estudiante=pg_fetch_array($query_estudiante)){
							$tid_codigo=$datos_estudiante['tid_codigo'];
							$tid_referencia=$datos_estudiante['tid_referencia'];
							$est_nombre=$datos_estudiante['est_nombre'];
							$est_primerapellido=$datos_estudiante['est_primerapellido'];
							$est_segundoapellido=$datos_estudiante['est_segundoapellido'];
							$est_genero=$datos_estudiante['est_genero'];
							$est_fechanacimiento=$datos_estudiante['est_fechanacimiento'];
							$est_direccion=$datos_estudiante['est_direccion'];
							$est_telefonomovil=$datos_estudiante['est_telefonomovil'];
							$est_telefonofijo=$datos_estudiante['est_telefonofijo'];
							$est_identificacion=$datos_estudiante['est_identificacion'];
							$est_codigo=$datos_estudiante['est_codigo'];
							
							echo "<tr>";
							echo "<td>".$numero_estudiante."</td>";
							echo "<td>".$tid_referencia."</td>";
							echo "<td>".$est_identificacion."</td>";
							echo "<td>".$est_nombre."</td>";
							echo "<td>".$est_primerapellido."</td>";
							echo "<td>".$est_segundoapellido."</td>";
							echo "<td>".$est_genero."</td>";
							echo "<td>".$est_fechanacimiento."</td>";
							echo "<td>".$est_direccion."</td>";
							echo "<td id='editar'><a href='crear_estudiante.php?codigo_estudiante=$est_codigo' title='Editar'><img src='img/editar2.png' class='estiloico' alt='Editar' title='Editar'/></a></td>";
							echo "<td id='eliminar'><a href='proceso_estudiante.php?txt_codigo=$est_codigo&proceso=borrar' title='Eliminar'><img src='img/descarga.png' class='estiloico' alt='Eliminar' title='Eliminar'/></a></td>";
							echo "</tr>";
						
						
						$numero_estudiante++;
					}
				?>
			</table>
		</div>
	</body>
</html>
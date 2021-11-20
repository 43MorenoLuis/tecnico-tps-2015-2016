 <?php  
	include('db/conexion.php');

	if(isset($_REQUEST['txt_buscar'])){
		$buscar=strtolower($_REQUEST['txt_buscar']);
		$condicion="WHERE CONCAT((asi_nombre) || Lower(asi_nombre))LIKE ('%".$buscar."%')";
	}
	else {
		$buscar= "";
		$condicion= "";
	}
 
	$sql_asignatura="SELECT	asi_codigo,
							asi_nombre,
							gas_codigo
					FROM asignatura
					$condicion ORDER by asi_nombre ASC;";
	
	$query_asignatura=pg_query($conn,$sql_asignatura);
	$numero_registro=pg_num_rows($query_asignatura);
 ?>

 
 <!DOCTYPE html>
 
<html> <!--<![endif]-->
	<head>
		<title>Lista De Asignaturas</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/asignatura.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.jpg'/>
	</head>
	
	<body>
		<div id='principal'>
			<?php  
				echo "<h3>"."N&uacute;mero de Registro: "."$numero_registro"."</h3>";
				echo "<h2>"."Lista De Asignaturas"."</h2>";
			?>
				
			<div class='izquierda'>
					<form name='text' type='frm_asignatura' id='frm_asignatura' action='asignatura.php' method='post'>
		
						<div class='buscar'>
							<input type='image' src='img/search.png' width='20' height='14'/>
							<label type='buttom' value='Buscar' name='btn_buscar' id='btn_buscar'><b>Buscar</b></label> 
						</div>
							<input type='text' name='txt_buscar' id='txt_buscar' placeholder='Escriba Aqui.'/>
						
					</form>
				
					<?php
						include('menu.php');
					?>
					<a id='crear' href='crear_asignatura.php'>Crear Asignatura</a>		
			</div>

			<table>
					<tr>
						<th>No</th>
						<th>Identificaci&oacute;n</th>
						<th>Nombre</th>
						<th>Grupo de la Asignatura</th>
					</tr>
					
				<?php
					$numero_asignatura=1;
										
					while($datos_asignatura=pg_fetch_array($query_asignatura)){
							$asi_codigo=$datos_asignatura['asi_codigo'];
							$asi_nombre=$datos_asignatura['asi_nombre'];
							$gas_codigo=$datos_asignatura['gas_codigo'];
							
							echo "<tr>";
							echo "<td>".$numero_asignatura."</td>";
							echo "<td>".$asi_codigo."</td>";
							echo "<td>".$asi_nombre."</td>";
							echo "<td>".$gas_codigo."</td>";
							echo "<td id='editar'><a href='crear_asignatura.php?codigo_asignatura=$asi_codigo' title='Editar'><img src='img/1.png' class='estiloico' alt='Editar' title='Editar'/></a></td>";
							echo "<td id='eliminar'><a href='proceso_asignatura.php?txt_codigo=$asi_codigo&proceso=borrar' title='Eliminar'><img src='img/eliminar.png' class='estiloico' alt='Eliminar' title='Eliminar'/></a></td>";
							echo "</tr>";
							
							$numero_asignatura++;
					}
				?>
			</table>
		</div>
	</body>
</html>
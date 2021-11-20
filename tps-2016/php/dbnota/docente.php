 <?php
	include('db/conexion.php');
 
	if(isset($_REQUEST['txt_buscar'])){
		$buscar=strtolower($_REQUEST['txt_buscar']);
		$condicion=" WHERE  CONCAT((doc_nombre) || Lower(doc_nombre)) LIKE ('%".$buscar."%')";
	}
	else {
		$buscar="";
		$condicion="";
	}

		$sql_docente="SELECT doc_numeroidentificacion, 
					doc_nombre, 
					doc_codigo,
					doc_primerapellido, 
					doc_segundoapellido, 
					doc_telefonofijo,
					doc_telefonomovil
				FROM docente					
				$condicion ORDER by doc_nombre ASC;";
	
	$query_docente=pg_query($conn,$sql_docente);
	$numero_registro=pg_num_rows($query_docente);
 ?>
 
 <!DOCTYPE html>
 
<html> <!--<![endif]-->
	<head>
		<title>Lista De Docentes</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/docente.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.jpg'/>
	</head>
	
	<body>
		<div id='principal'>
		
			 <?php  
				echo "<h3>"."N&uacute;mero de Registro: "."$numero_registro"."</h3>";
				echo "<h2>"."Lista De Docentes"."</h2>";				
			?>
			
			<div class='izquierda'>
					<form name='text' type='frm_docente' id='frm_docente' action='docente.php' method='post'>
		
						<div class='buscar'>
							<input type='image' src='img/search.png' width='20' height='14'/>
							<label type='buttom' value='Buscar' name='btn_buscar' id='btn_buscar'><b>Buscar</b></label> 
						</div>
							<input type='text' name='txt_buscar' id='txt_buscar' placeholder='Escriba Aqui.'/>
						
					</form>
				
					<?php
						include('menu.php');
					?>
					<a id='crear' href='crear_docente.php'>Crear Docente</a>		
			</div>
			
			<table>
					<tr>
						<th>No</th>
						<th>Identificaci&oacute;n</th>
						<th>Nombre</th>
						<th>Primer Apellido</th>
						<th>Segundo Apellido</th>
					</tr>
					
				<?php
					$numero_docente=1;
					
					while($datos_docente=pg_fetch_array($query_docente)){
							$doc_identificacion=$datos_docente['doc_numeroidentificacion'];
							$doc_nombre=$datos_docente['doc_nombre'];
							$doc_primerapellido=$datos_docente['doc_primerapellido'];
							$doc_segundoapellido=$datos_docente['doc_segundoapellido'];
							$doc_telefonofijo=$datos_docente['doc_telefonofijo'];
							$doc_telefonomovil=$datos_docente['doc_telefonomovil'];
							$doc_codigo=$datos_docente['doc_codigo'];
							
							echo "<tr>";
							echo "<td>".$numero_docente."</td>";
							echo "<td>".$doc_identificacion."</td>";
							echo "<td>".$doc_nombre."</td>";
							echo "<td>".$doc_primerapellido."</td>";
							echo "<td>".$doc_segundoapellido."</td>";
							echo "<td id='editar'><a href='crear_docente.php?codigo_docente=$doc_codigo' title='Editar'><img src='img/1.png' class='estiloico' alt='Editar' title='Editar'/></a></td>";
							echo "<td id='eliminar'><a href='proceso_docente.php?txt_codigo=$doc_codigo&proceso=borrar' title='Eliminar'><img src='img/eliminar.png' class='estiloico' alt='Eliminar' title='Eliminar'/></a></td>";
							echo "</tr>";
							
							$numero_docente++;
					}
				?>
			</table>
		</div>
	</body>
</html>
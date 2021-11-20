<?php
	include('db/conexion.php');

	if(isset($_REQUEST['txt_buscar'])){
		$buscar=strtolower($_REQUEST['txt_buscar']);
		$condicion=" WHERE  CONCAT((lib_nombre) || Lower(lib_nombre)) LIKE ('%".$buscar."%')";
	}
	else {
		$buscar = "";
		$condicion= "";
	}

	$sql_libro="SELECT 	lib_codigo, 
						lib_nombre, 
						lib_fechaedicion
					FROM libro
					$condicion ORDER by lib_nombre ASC;";
	
	$query_libro=pg_query($conn,$sql_libro);
	$numero_registro=pg_num_rows($query_libro);
 ?>
 
 <!DOCTYPE html>
 
<html> <!--<![endif]-->
	<head>
		<title>Lista De Libros</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/libro.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.png'/>
	</head>
	
	<body>
		<div id='principal'>
		
			 <?php  
				echo "<h3>"."N&uacute;mero de Registro: "."$numero_registro"."</h3>";
				echo "<h2>"."Lista De Libros"."</h2>";
			?>
			
			<div class='izquierda'>
					<form name='text' type='frm_libro' id='frm_libro' action='libro.php' method='post'>
		
						<div class='buscar'>
							<input type='image' src='img/search.png' width='20' height='14'/>
							<label type='buttom' value='Buscar' name='btn_buscar' id='btn_buscar'><b>Buscar</b></label> 
						</div>
							<input type='text' name='txt_buscar' id='txt_buscar' placeholder='Escriba Aqui.'/>
						
					</form>
				
					<?php
						include('menu.php');
					?>
					<a id='crear' href='crear_libro.php'>Crear Libro</a>
			</div>			
			<table>
					<tr>
						<th>No</th>
						<th>Codigo</th>
						<th>Nombre</th>
						<th>Fecha Edicion</th>

					</tr>
				<?php
					$numero_libro=1;
										
					while($datos_libro=pg_fetch_array($query_libro)){
							$lib_codigo=$datos_libro['lib_codigo'];
							$lib_nombre=$datos_libro['lib_nombre'];
							$lib_fechaedicion=$datos_libro['lib_fechaedicion'];
							
							echo "<tr>";
							echo "<td>".$numero_libro."</td>";
							echo "<td>".$lib_codigo."</td>";
							echo "<td>".$lib_nombre."</td>";
							echo "<td>".$lib_fechaedicion."</td>";
							echo "<td id='editar'><a href='crear_libro.php?codigo_libro=$lib_codigo' title='Editar'><img src='img/1.png' class='estiloico' alt='Editar' title='Editar'/></a></td>";
							echo "<td id='eliminar'><a href='proceso_libro.php?txt_codigo=$lib_codigo&proceso=borrar' title='Eliminar'><img src='img/eliminar.png' class='estiloico' alt='Eliminar' title='Eliminar'/></a></td>";
							echo "</tr>";
						
						
						$numero_libro++;
					}
				?>
			</table>
		</div>
	</body>
</html>
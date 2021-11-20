<?php
	include('db/conexion.php');

	if(isset($_REQUEST['txt_buscar'])){
		$buscar=strtolower($_REQUEST['txt_buscar']);
		$condicion=" WHERE  CONCAT((aut_nombre) || Lower(aut_nombre) || Lower(aut_apellido)) LIKE ('%".$buscar."%')";
	}
	else {
		$buscar = "";
		$condicion= "";
	}

	$sql_autor="SELECT 	aut_codigo, 
						aut_nombre, 
						aut_apellido, 
						aut_biografia
					FROM autor
					$condicion ORDER by aut_nombre ASC;";
	
	$query_autor=pg_query($conn,$sql_autor);
	$numero_registro=pg_num_rows($query_autor);
 ?>
 
 <!DOCTYPE html>
 
<html> <!--<![endif]-->
	<head>
		<title>Lista De Autores</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/autor.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.png'/>
	</head>
	
	<body>
		<div id='principal'>
		
			 <?php  
				echo "<h3>"."N&uacute;mero de Registro: "."$numero_registro"."</h3>";
				echo "<h2>"."Lista De Autores"."</h2>";
			?>
			
			<div class='izquierda'>
					<form name='text' type='frm_autor' id='frm_autor' action='autor.php' method='post'>
		
						<div class='buscar'>
							<input type='image' src='img/search.png' width='20' height='14'/>
							<label type='buttom' value='Buscar' name='btn_buscar' id='btn_buscar'><b>Buscar</b></label> 
						</div>
							<input type='text' name='txt_buscar' id='txt_buscar' placeholder='Escriba Aqui.'/>
						
					</form>
				
					<?php
						include('menu.php');
					?>
					<a id='crear' href='crear_autor.php'>Crear Autor</a>
			</div>
			
			<table>
					<tr>
						<th>No</th>
						<th>Codigo</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Biografia</th>

					</tr>
				<?php
					$numero_autor=1;
										
					while($datos_autor=pg_fetch_array($query_autor)){
							$aut_codigo=$datos_autor['aut_codigo'];
							$aut_nombre=$datos_autor['aut_nombre'];
							$aut_apellido=$datos_autor['aut_apellido'];
							$aut_biografia=$datos_autor['aut_biografia'];
							
							echo "<tr>";
							echo "<td>".$numero_autor."</td>";
							echo "<td>".$aut_codigo."</td>";
							echo "<td>".$aut_nombre."</td>";
							echo "<td>".$aut_apellido."</td>";
							echo "<td>".$aut_biografia."</td>";
							echo "<td id='editar'><a href='crear_autor.php?codigo_autor=$aut_codigo' title='Editar'><img src='img/1.png' class='estiloico' alt='Editar' title='Editar'/></a></td>";
							echo "<td id='eliminar'><a href='proceso_autor.php?txt_codigo=$aut_codigo&proceso=borrar' title='Eliminar'><img src='img/eliminar.png' class='estiloico' alt='Eliminar' title='Eliminar'/></a></td>";
							echo "</tr>";
						
						
						$numero_autor++;
					}
				?>
			</table>
		</div>
	</body>
</html>
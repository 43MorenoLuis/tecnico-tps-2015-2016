<?php
	include('db/conexion.php');

	if(isset($_REQUEST['txt_buscar'])){
		$buscar=strtolower($_REQUEST['txt_buscar']);
		$condicion=" WHERE  CONCAT((cat_nombre) || Lower(cat_nombre)) LIKE ('%".$buscar."%')";
	}
	else {
		$buscar = "";
		$condicion= "";
	}

	$sql_categoria="SELECT 	cat_codigo, 
							cat_nombre
						FROM categoria
					$condicion ORDER by cat_nombre ASC;";
	
	$query_categoria=pg_query($conn,$sql_categoria);
	$numero_registro=pg_num_rows($query_categoria);
 ?>
 
 <!DOCTYPE html>
 
<html> <!--<![endif]-->
	<head>
		<title>Lista De Categorias</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/categoria.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.png'/>
	</head>
	
	<body>
		<div id='principal'>
		
			 <?php  
				echo "<h3>"."N&uacute;mero de Registro: "."$numero_registro"."</h3>";
				echo "<h2>"."Lista De Categorias"."</h2>";
			?>
			
			<div class='izquierda'>
					<form name='text' type='frm_categoria' id='frm_categoria' action='categoria.php' method='post'>
		
						<div class='buscar'>
							<input type='image' src='img/search.png' width='20' height='14'/>
							<label type='buttom' value='Buscar' name='btn_buscar' id='btn_buscar'><b>Buscar</b></label> 
						</div>
							<input type='text' name='txt_buscar' id='txt_buscar' placeholder='Escriba Aqui.'/>
						
					</form>
				
					<?php
						include('menu.php');
					?>
					<a id='crear' href='crear_categoria.php'>Crear Categoria</a>
			</div>
			
			<table>
					<tr>
						<th>No</th>
						<th>Codigo</th>
						<th>Nombre</th>

					</tr>
				<?php
					$numero_categoria=1;
										
					while($datos_categoria=pg_fetch_array($query_categoria)){
							$cat_codigo=$datos_categoria['cat_codigo'];
							$cat_nombre=$datos_categoria['cat_nombre'];
							
							echo "<tr>";
							echo "<td>".$numero_categoria."</td>";
							echo "<td>".$cat_codigo."</td>";
							echo "<td>".$cat_nombre."</td>";
							echo "<td id='editar'><a href='crear_categoria.php?codigo_categoria=$cat_codigo' title='Editar'><img src='img/1.png' class='estiloico' alt='Editar' title='Editar'/></a></td>";
							echo "<td id='eliminar'><a href='proceso_categoria.php?txt_codigo=$cat_codigo&proceso=borrar' title='Eliminar'><img src='img/eliminar.png' class='estiloico' alt='Eliminar' title='Eliminar'/></a></td>";
							echo "</tr>";
						
						
						$numero_categoria++;
					}
				?>
			</table>
		</div>
	</body>
</html>
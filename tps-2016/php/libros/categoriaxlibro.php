<?php
	include('db/conexion.php');

	if(isset($_REQUEST['txt_buscar'])){
		$buscar=strtolower($_REQUEST['txt_buscar']);
		$condicion=" WHERE  CONCAT((cli_categoria) || Lower(cli_categoria) || Lower(cli_libro)) LIKE ('%".$buscar."%')";
	}
	else {
		$buscar = "";
		$condicion= "";
	}

	$sql_categoriaxlibro="SELECT cli_codigo, 
							cli_libro,
							cli_categoria
						FROM categoriaxlibro
					$condicion ORDER by cli_codigo ASC;";
	
	$query_categoriaxlibro=pg_query($conn,$sql_categoriaxlibro);
	$numero_registro=pg_num_rows($query_categoriaxlibro);
 ?>
 
 <!DOCTYPE html>
 
<html> <!--<![endif]-->
	<head>
		<title>Lista De Categoria por Libro</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/categoriaxlibro.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.jpg'/>
	</head>
	
	<body>
		<div id='principal'>
		
			 <?php  
				echo "<h3>"."N&uacute;mero de Registro: "."$numero_registro"."</h3>";
				echo "<h2>"."Lista De Categoria por Libro"."</h2>";
				echo "<div class='menu'>";
				include('menu.php');
				echo "</div>";
			?>
			
			<form name='text' type='frm_categoriaxlibro' id='frm_categoriaxlibro' action='categoriaxlibro.php' method='post'>
				<input type='text' name='txt_buscar' id='txt_buscar' placeholder='Buscar categoria por libro'/>
				
				<div id='search'>
					<input  id='lupa' type='image' src='img/search.png' width='20' height='15'/>
					<label type='buttom' value='Buscar' name='btn_buscar' id='btn_buscar'>Buscar</label> 
				</div>
			</form>
			
			<div id='crear'>
				<a href='crear_categoriaxlibro.php'>Crear Categoria Por Libro</a>
			</div>
			
			<table>
					<tr>
						<th>No</th>
						<th>Codigo</th>
						<th>Libro</th>
						<th>Categoria</th>

					</tr>
				<?php
					$numero_categoriaxlibro=1;
										
					while($datos_categoriaxlibro=pg_fetch_array($query_categoriaxlibro)){
							$cli_codigo=$datos_categoriaxlibro['cli_codigo'];
							$cli_libro=$datos_categoriaxlibro['cli_libro'];
							$cli_categoria=$datos_categoriaxlibro['cli_categoria'];
							
							echo "<tr>";
							echo "<td>".$numero_categoriaxlibro."</td>";
							echo "<td>".$cli_codigo."</td>";
							echo "<td>".$cli_libro."</td>";
							echo "<td>".$cli_categoria."</td>";
							echo "<td id='editar'><a href='crear_categoriaxlibro.php?codigo_categoriaxlibro=$cli_codigo' title='Editar'><img src='img/1.png' class='estiloico' alt='Editar' title='Editar'/></a></td>";
							echo "<td id='eliminar'><a href='proceso_categoriaxlibro.php?txt_codigo=$cli_codigo&proceso=borrar' title='Eliminar'><img src='img/eliminar.png' class='estiloico' alt='Eliminar' title='Eliminar'/></a></td>";
							echo "</tr>";
						
						
						$numero_categoriaxlibro++;
					}
				?>
			</table>
		</div>
	</body>
</html>
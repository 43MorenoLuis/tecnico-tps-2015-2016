<?php
include('db/conectar.php');

					$aut_codigo=''; 
					$aut_nombre=''; 
					$aut_apellido='';  
					$aut_fecha_nacio='';  
					$aut_biografia='';  
       				$aut_pais_nacio=''; 
			
		if(isset($_REQUEST['codigo_autor'])){
			$codigo_autor=$_REQUEST['codigo_autor'];
			
			$sql_autor="SELECT aut_codigo, 
								aut_nombre, 
								aut_apellido, 
								aut_fecha_nacio, 
								aut_biografia, 
       							aut_pais_nacio
							FROM autores
					WHERE aut_codigo=$codigo_autor;";
							
			$query_autor=pg_query($conn,$sql_autor);
			
			$datos_autor=pg_fetch_array($query_autor);
				$aut_codigo=$datos_autor['aut_codigo']; 
				$aut_nombre=$datos_autor['aut_nombre'];
				$aut_apellido=$datos_autor['aut_apellido'];
				$aut_fecha_nacio=$datos_autor['aut_fecha_nacio']; 
				$aut_biografia=$datos_autor['aut_biografia']; 
   				$aut_pais_nacio=$datos_autor['aut_pais_nacio'];
		}	
?>
<html>
<head>
	<?php include('hdlibrary.php'); ?>
</head>

<body>
<header>
	<?php include('menu.php'); ?>
</header>
<hr/>
	
	<body>
			<h1>Agregar Autores</h1>
			<form name='frm_autor' id='frm_autor' action='proceso_autor.php' method='post'>			
				<label>Nombre:</label>
				<input type='text' name='txt_nombre' placeholder='Digite Nombre' id='txt_nombre' value='<?php echo $aut_nombre;?>'/>
				
				<label>Apellido:</label>
				<input type='text' name='txt_apellido' placeholder='Digite Apellido' id='txt_apellido' value='<?php echo $aut_apellido;?>'/>
				
				<label>Fecha De Nacimiento:</label>
				<input type='text' name='txt_datenacio' placeholder='Digite Fecha' id='txt_datenacio' value='<?php echo $aut_fecha_nacio;?>'/>
				
				<label>Biografia:</label>
				<textarea name='txt_biografia' placeholder='Digite Biografia' id='txt_biografia' value='<?php echo $aut_biografia;?>'></textarea>
				
				<label>Pais De Nacimiento:</label>
				<input type='text' name='txt_countrynacio' placeholder='Digite Pais' id='txt_countrynacio' value='<?php echo $aut_pais_nacio;?>'/>
				
				<input type='hidden' name='txt_codigo' id='txt_codigo' value='<?php echo $aut_codigo;?>'/>
				<input type='submit' class='save' name='btn_guardar' id='btn_guardar' value='Guardar' />
			</form>
 	</body>
</html>
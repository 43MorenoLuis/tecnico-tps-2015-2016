<?php
include('db/conexion.php');

					$tid_codigo_m="";
					$tid_referencia="";
					$est_nombre="";
					$est_primerapellido="";
					$est_segundoapellido="";
					$est_genero_m="";
					$est_fechanacimiento_m="";
					$est_direccion="";
					$est_telefonomovil="";
					$est_telefonofijo="";
					$est_identificacion="";
					$est_codigo="";
			
		if(isset($_REQUEST['codigo_estudiante'])){
			$codigo_estudiante=$_REQUEST['codigo_estudiante'];
			
			$sql_estudiante="SELECT est_identificacion, 
									est_nombre, 
									est_primerapellido, 
									est_segundoapellido, 
									est_genero, 
									est_fechanacimiento, 
									est_direccion, 
									est_telefonofijo, 
									est_telefonomovil, 	
									est_codigo 
							FROM estudiante 
							AND est_codigo=$codigo_estudiante;";
							
			$query_estudiante=pg_query($conn,$sql_estudiante);
			
			$datos_estudiante=pg_fetch_array($query_estudiante);
			
					$tid_codigo_m=$datos_estudiante['tid_codigo'];
					$tid_referencia=$datos_estudiante['tid_referencia'];
					$est_nombre=$datos_estudiante['est_nombre'];
					$est_primerapellido=$datos_estudiante['est_primerapellido'];
					$est_segundoapellido=$datos_estudiante['est_segundoapellido'];
					$est_genero_m=$datos_estudiante['est_genero'];
					$est_fechanacimiento_m=$datos_estudiante['est_fechanacimiento'];
					$est_direccion=$datos_estudiante['est_direccion'];
					$est_telefonomovil=$datos_estudiante['est_telefonomovil'];
					$est_telefonofijo=$datos_estudiante['est_telefonofijo'];
					$est_identificacion=$datos_estudiante['est_identificacion'];
					$est_codigo=$datos_estudiante['est_codigo'];
		}	
	
			$sql_tipoidentificacion="SELECT tid_codigo,
											tid_nombre,
											tid_referencia
									FROM tipoidentificacion;";
			$query_tipoidentificacion=pg_query($conn,$sql_tipoidentificacion);
?>
<html>
	<head>
		<title>Formulario Estudiante</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<link href='css/crear_estudiante.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='shortcut icon' href='img/logo.jpg'/>
	</head>
	
	<body>
		<div id='principal'>
			<h1>Formulario Estudiante</h1>
		
			<form name='frm_estudiante' action='proceso_estudiante.php' method='post'>
				<div id='documento'>
					<span>Tipo De Documento:</span>
					<select name='sel_referencia' id='sel_referencia'>
			
						<option value='0'>seleccione...</option>
					<?php
						while($data_tipoidentificacion=pg_fetch_array($query_tipoidentificacion)){
							$tid_codigo=$data_tipoidentificacion['tid_codigo'];
							$tid_nombre=$data_tipoidentificacion['tid_nombre'];
							$tid_referencia=$data_tipoidentificacion['tid_referencia'];
							
							if($tid_codigo_m==$tid_codigo){
								$selected="selected";
							}
							else{
								$selected="";
							}
						
							echo "<option value='$tid_codigo'>$tid_nombre</option>";
						}
					?>
					</select>
				</div>
			
				<div id='documento'>
					<span>Numero De Documento:</span>
					<input type='text' name='txt_documento' id='txt_documento' value='<?php echo $est_identificacion;?>' />
				</div>
				
				<div id='documento'>	
					<span>Nombre:</span>
					<input type='text' name='txt_nombre' id='txt_nombre' value='<?php echo $est_nombre;?>' />
				</div>
				
				<div id='documento'>	
					<span>Primer Apellido:</span>
					<input type='text' name='txt_apellido1' id='txt_apellido1' value='<?php echo $est_primerapellido;?>' />
				</div>
				
				<div id='documento'>	
					<span>Segundo Apellido:</span>
					<input type='text' name='txt_apellido2' id='txt_apellido2' value='<?php echo $est_segundoapellido;?>' />
				</div>
				
				<div id='documento'>
					<span>Genero:</span>
						<?php 
							if($est_genero_m=='M'){
								$checked_m="checked";
								$checked_f="";
							}
							else{
								$checked_m="";
								$checked_f="checked";
							}
						
						
						?>
					<input type='radio' name='rad_genero' id='rad_genero' value='M' <?php echo $checked_m;?> />Masculino
					<input type='radio' name='rad_genero' id='rad_genero' value='F' <?php echo $checked_f;?> />Femenino
				</div>
				
				<div id='documento'>
					<span>Fecha De Nacimiento:</span>
					<input type='date' name='dat_fechanacimiento' id='dat_fechanacimiento' value='<?php echo $est_fechanacimiento_m;?>' />
				</div>
				
				<div id='documento'>				
					<span>Direccion:</span>
					<input type='text' name='txt_direccion' id='txt_direccion' value='<?php echo $est_direccion;?>' />
				</div>
				
				<div id='documento'>	
					<span>Telefono Movil:</span>
					<input type='text' name='txt_telefonomovil' id='txt_telefonomovil' value='<?php echo $est_telefonomovil;?>' />
				</div>
				
				<div id='documento'>	
					<span>Telefono Fijo:</span>
					<input type='text' name='txt_telefonofijo' id='txt_telefonofijo' value='<?php echo $est_telefonofijo;?>' />
				</div>
				
				<input type='hidden' name='txt_codigo' id='txt_codigo' value='<?php echo $est_codigo;?>' />
				<input type='submit' name='btn_guardar' id='btn_guardar' value='Guardar' />
				
			</form>
		</div>		
 	</body>
</html>
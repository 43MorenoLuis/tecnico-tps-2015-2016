<?php
	session_start();
	include('db/conexion.php');
	$persona_nombreapellidos=$_SESSION['nombre_persona'];

					$tid_codigo="";
					$tid_referencia="";
					$est_nombre="";
					$est_1apellido="";
					$est_2apellido="";
					$est_genero_m="";
					$est_fechanacio_m="";
					$est_nroid="";
					$est_codigo="";
					$gra_codigo="";
					$gra_nombre="";

		if(isset($_REQUEST['codigo_estudiante'])){
			$codigo_estudiante=$_REQUEST['codigo_estudiante'];

			$sql_estudiante="SELECT est_identificacion,
						est_nombre,
						est_primerapellido,
						est_segundoapellido,
						est_genero,
						est_fechanacimiento,
						est_personacreo,
						est_personamodifico,
						est_fechacreo,
						est_fechamodifico,
						est_codigo
					FROM estudiante
					WHERE est_codigo=$codigo_estudiante;";

			$query_estudiante=pg_query($conn,$sql_estudiante);

			$datos_estudiante=pg_fetch_array($query_estudiante);
					$est_nombre=$datos_estudiante['est_nombre'];
					$est_1apellido=$datos_estudiante['est_primerapellido'];
					$est_2apellido=$datos_estudiante['est_segundoapellido'];
					$est_genero_m=$datos_estudiante['est_genero'];
					$est_fechanacio_m=$datos_estudiante['est_fechanacimiento'];
					$est_nroid=$datos_estudiante['est_identificacion'];
					$est_codigo=$datos_estudiante['est_codigo'];
		}

			$sql_tipoid="SELECT tid_codigo,
							tid_nombre,
							tid_referencia
						FROM tipo_identificacion;";
			$query_tipoid=pg_query($conn, $sql_tipoid);

			$datos_tipoide=pg_fetch_array($query_tipoid);
					$tid_codigo_m=$datos_tipoide['tid_codigo'];
					$tid_referencia=$datos_tipoide['tid_referencia'];
					$tid_nombre=$datos_tipoide['tid_nombre'];
					
			$sql_grado="SELECT gra_codigo,
							gra_nombre
						FROM grado;";
			$query_grado=pg_query($conn, $sql_grado);

			$datos_grado=pg_fetch_array($query_grado);
					$gra_codigo_m=$datos_grado['gra_codigo'];
					$gra_nombre=$datos_grado['gra_nombre'];
?>

<!doctype html>
<html>
<head>
	<?php include('hdnotas.php'); ?>
</head>
<body>

<!--  LATERAL ----------------------------------------------  -->
<header id="lateral">
	<?php include('ltralnotas.php'); ?>
</header>

<!--  MODULOS ----------------------------------------------  -->

<!--  CUERPO ----------------------------------------------  -->
<section id="cuerpo">
    <div class="inter">
        <div class="miga">
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp;  <a href='estudiante'>Estudiantes</a>&nbsp;/&nbsp; Adicionar Estudiantes</div>
            <a href="estudiante" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>
        </div>

        <h1><img src="iconos/estudiante.png" /> Adicionar Estudiantes</h1>

        <div class="bloque">
            <form name='frm_procsstudent' action='procsstudent.php' method='post'>
            <span class="botonera">
                <div>
                    <input type="submit" value="Guardar" class="left save" />
				</div>

            </span>					
						<span>
							<input type="hidden" name="txt_codigo"  id="txt_codigo" value="<?php echo $est_codigo;?>"/>
						</span>
						<span>
						<label>Tipo Identificacion</label>
					          <select name='sel_referencia' id='sel_referencia' required="required">
								<option value="0">Seleccione...</option>
						<?php
							while($datos_tipoid=pg_fetch_array($query_tipoid)){
								$tid_codigo_m=$datos_tipoid['tid_codigo'];
								$tid_nombre=$datos_tipoid['tid_nombre'];
								$tid_referencia=$datos_tipoid['tid_referencia'];

								if($tid_codigo==$tid_codigo_m){
									$selected="selected";
								}
								else{
									$selected="";
								}

								echo "<option value='$tid_codigo_m'>$tid_nombre</option>";
							}
						?>
					              </select>
					        </span>
									<span>
				              <label>Nro Identidad</label>
				              <input type="number" placeholder="Ingrese Nro Identidad" name="num_nroi" id="num_nroi"  value="<?php echo $est_nroid;?>" required />
				          </span>
					<span>
						<label>Nombre</label>
						<input type="text" name="txt_nombre" id="txt_nombre" placeholder="Ingrese Nombre" value="<?php echo $est_nombre;?>" required />
					</span>
					<span>
						<label>Primer Apellido</label>
						<input type="text" name="txt_1apellido" id="txt_1apellido" placeholder="Ingrese Apellido" value="<?php echo $est_1apellido;?>" required />
					</span>
          <span>
						<label>Segundo Apellido</label>
						<input type="text" name="txt_2apellido" id="txt_2apellido" placeholder="Ingrese Apellido" value="<?php echo $est_2apellido;?>" required />
					</span>
					<span>
	              <label>Genero</label>
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
	              <input type='radio' name='rad_genero' id='rad_genero' value='M'<?php echo $checked_m;?> /> <label>Masculino</label>
	              <input type='radio' name='rad_genero' id='rad_genero' value='F'<?php echo $checked_f;?> /> <label>Femenino</label>
	        </span>
					<span>
					    <label>Fecha Nacimiento</label>
					  <input type="date" name="dat_nacio" id="dat_nacio" placeholder="1996-12-19" value="<?php echo $est_fechanacio_m;?>" required />
					</span>
					
					<span>
						<label>Grado</label>
					    	<select name='sel_nombregra' id='sel_nombregra' required="required">
									<option value='0'>Seleccione...</option>
								<?php
									while($datos_grado=pg_fetch_array($query_grado)){
										$gra_codigo_m=$datos_grado['gra_codigo'];
										$gra_nombre=$datos_grado['gra_nombre'];

										if($gra_codigo_m==$gra_codigo){
											$selected="";
										}
										else{
											$selected="selected";
										}
										echo "<option value='$gra_codigo'>$gra_nombre</option>";
									}
								?>
					          </select>
					   </span>
				</article>
        	</div>
            </form>
        </div>

    </div>
</section>
</body>
</html>

<?php
	session_start();
	include('db/conexion.php');
	$persona_nombreapellidos=$_SESSION['nombre_persona'];

	$doc_codigo="";
	$doc_identificacion="";
	$doc_nombre="";
	$doc_1rapellido="";
	$doc_2oapellido="";
	$doc_genero_m="";
	$tid_codigo_m="";


		if(isset($_REQUEST['codigo_docente'])){
			$codigo_docente=$_REQUEST['codigo_docente'];

			$sql_docente="SELECT
										doc_codigo,
										doc_identificacion,
										doc_nombre,
										doc_primerapellido,
										doc_segundoapellido,
										doc_genero
				FROM docente
				WHERE doc_codigo=$codigo_docente;";
			$query_docente=pg_query($conn,$sql_docente);

			$datos_docente=pg_fetch_array($query_docente);
				$doc_codigo=$datos_docente['doc_codigo'];
				$doc_nroid=$datos_docente['doc_identificacion'];
				$doc_nombre=$datos_docente['doc_nombre'];
				$doc_1rapellido=$datos_docente['doc_primerapellido'];
				$doc_2oapellido=$datos_docente['doc_segundoapellido'];
				$doc_genero=$datos_docente['doc_genero'];
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
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp;  <a href='docente'> Docentes</a>&nbsp;/&nbsp; Adicionar Docentes</div>
            <a href="docente" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>
        </div>

        <h1><img src="iconos/docente.png" /> Adicionar Docentes</h1>

        <div class="bloque">
            <form name='frm_procsteacher' action='procsteacher.php' method='post' >
            <span class="botonera">
                <div>
                    <input type="submit" value="Guardar" class="left save" />
									</div>

            </span>

        	<div class="scroll">
                <article class="cont">
									<span>
											<input type="hidden" name="txt_codigo"  id="txt_codigo" value="<?php echo $doc_codigo;?>"/>
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
											<input type="number" placeholder="Ingrese Nro Identidad" name="num_nroi" id="num_nroi"  value="<?php echo $doc_nroid;?>" required />
									</span>
					<span>
						<label>Nombre</label>
						<input type="text" name="txt_nombre" id="txt_nombre" placeholder="Ingrese Nombre" value="<?php echo $doc_nombre;?>" required />
					</span>
					<span>
						<label>Primer Apellido</label>
						<input type="text" name="txt_1apellido" id="txt_1apellido" placeholder="Ingrese Apellido" value="<?php echo $doc_1rapellido;?>" required />
					</span>
					<span>
						<label>Segundo Apellido</label>
						<input type="text" name="txt_2apellido" id="txt_2apellido" placeholder="Ingrese Apellido" value="<?php echo $doc_2oapellido;?>" required />
					</span>
					<span>
								<label>Genero</label>
						<?php
							if($doc_genero_m=='M'){
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
                </article>
        	</div>
            </form>
        </div>

    </div>
</section>
</body>
</html>

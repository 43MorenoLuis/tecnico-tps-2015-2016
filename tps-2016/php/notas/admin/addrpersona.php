<?php
	session_start();
	include("db/conexion.php");
	$persona_nombreapellidos=$_SESSION['nombre_persona'];

						$per_codigo="";
						$per_nombre="";
						$per_apellido="";
						$log_foto="";

			if(isset($_REQUEST['codigo_persona'])){
				$codigo_persona=$_REQUEST['codigo_persona'];

				$sql_persona="SELECT
														per_nombre,
														per_apellido,
														per_codigo,
														log_foto,
														log_persona
													FROM persona, login
													WHERE per_codigo=$codigo_persona
													AND persona.per_codigo=login.log_persona;";

				$query_persona=pg_query($conn, $sql_persona);

				$datos_persona=pg_fetch_array($query_persona);
						$per_nombre=$datos_persona['per_nombre'];
						$per_apellido=$datos_persona['per_apellido'];
						$per_codigo=$datos_persona['per_codigo'];
						$log_foto=$datos_persona['log_foto'];
			}

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
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp;  <a href='persona'> Persona</a>&nbsp;/&nbsp; Agregar Persona</div>
            <a href="persona" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>
        </div>

        <h1><img src="iconos/persona.png" /> Agregar Persona</h1>

        <div class="bloque">
            <form name='frm_procsperson' action='procsperson.php' method='post' enctype='multipart/form-data'>
            <span class="botonera">
                <div>
                    <input type="submit" value="Guardar" class="left save" />
				</div>
						</span>

        	<div class="scroll">
                <article class="cont">
					<span>
							<input type="hidden" name="txt_codigo" id="txt_codigo" value="<?php echo $per_codigo;?>" required />
					</span>
					<span>
						<label>Nombre de la Persona</label>
						<input type="text" name="txt_nombre" id="txt_nombre" placeholder="Ingrese Nombres" value="<?php echo $per_nombre;?>" required />
					</span>
					<span>
						<label>Apellidos de la Persona</label>
						<input type="text" name="txt_apellido" id="txt_apellido" placeholder="Ingrese Apellidos" value="<?php echo $per_apellido;?>" required />
					</span>
					<span>
                            <label>Ubicacion de la Imagen De Usuario</label>
                            <input name='img_user' id='img_user' value='<?php echo $log_foto;?>' require/>
                    </span>
                </article>
        	</div>
            </form>
        </div>

    </div>
</section>
</body>
</html>

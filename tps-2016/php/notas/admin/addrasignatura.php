<?php
	session_start();
	include('db/conexion.php');
	$persona_nombreapellidos=$_SESSION['nombre_persona'];

	$asi_codigo="";
	$asi_nombre="";

		if(isset($_REQUEST['codigo_asignatura'])){
			$codigo_asignatura=$_REQUEST['codigo_asignatura'];

			$sql_asignatura="SELECT
										asi_codigo,
										asi_nombre,
				FROM asignatura
				WHERE asi_codigo=$codigo_asignatura;";
			$query_asignatura=pg_query($conn,$sql_asignatura);

			$datos_materia=pg_fetch_array($query_asignatura);
				$asi_codigo=$datos_materia['asi_codigo'];
				$asi_nombre=$datos_materia['asi_nombre'];
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
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp;  <a href='asignatura'> Asignaturas</a>&nbsp;/&nbsp; Adicionar Asignatura</div>
            <a href="asignatura" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>
        </div>

        <h1><img src="iconos/asignatura.png" /> Adicionar Asignatura</h1>

        <div class="bloque">
            <form name='frm_procsasignatura' action='procsasignatura.php' method='post' >
            <span class="botonera">
                <div>
                    <input type="submit" value="Guardar" class="left save" />
									</div>

            </span>
        	<div class="scroll">
                <article class="cont">
									<span>
											<input type="hidden" name="txt_codigo"  id="txt_codigo" value="<?php echo $asi_codigo;?>"/>
									</span>
					<span>
						<label>Nombre de Asignatura</label>
						<input type="text" name="txt_nombre" id="txt_nombre" placeholder="Ingrese Nombre" value="<?php echo $asi_nombre;?>" required />
					</span>
                </article>
        	</div>
            </form>
        </div>

    </div>
</section>
</body>
</html>

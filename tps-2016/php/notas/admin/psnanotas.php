<?php
	session_start();
	include('db/conexion.php');
	$persona_nombreapellidos=$_SESSION['nombre_persona'];

$sql_persona=" SELECT
											per_codigo,
											per_nombre,
											per_apellido
								FROM persona;";
$query_persona=pg_query($conn,$sql_persona);
?>
<!doctype html>
<html>
<head>
	<?php include('hdnotas.php'); ?>
</head>

<body>
<!--  LATERAL --------->
<header id="lateral">
	<?php include('ltralnotas.php'); ?>
</header>
<!--  MODULOS --------->
<!--  CUERPO ---------->
<section id="cuerpo">
    <div class="inter">
        <div class="miga">
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp;  Personas</div>
            <a href="inicio" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>
        </div>

        <h1><img src="iconos/persona.png" /> Persona </h1>

        <div class="bloque">
            <form name='frm_persona' action='procspersona.php' method='post'>
            <span class="botonera">
                <div>
					<input type="button" value="Agregar" class="left mas" onclick="location.href='adicionar_persona';" />
					<!--input type="button" value="Eliminar " class="left del" />
                    <nput type="button" value="Modificar" class="left edit"/>
                    <input type="button" value="Imprimir" class="left print"-->
								</div>

            </span>

        	<div class="scroll">
                <article class="cont">

					<table>
						<tr>
						  <td>No</td>
						  <td>NOMBRE</td>
						  <td>APELLIDOS</td>
						</tr>
						<?php
							$numero_registro=1;
							  while($data_persona=pg_fetch_array($query_persona)){
								  $per_codigo=$data_persona['per_codigo'];
								  $per_nombre=$data_persona['per_nombre'];
								  $per_apellido=$data_persona['per_apellido'];


								  echo "<tr>";
								  echo "<td>$numero_registro</td>";
								  echo "<td>$per_nombre</td>";
								  echo "<td>$per_apellido</td>";
									echo "<td id='updalete'><a href='addrpersona.php?codigo_persona=$per_codigo' title='Modificar'><input type='button'  class='left edit' /></a></td>";
									echo "<td id='updalete'><a href='procsperson.php?txt_codigo=$per_codigo&proceso=borrar' title='Eliminar'><input type='button'  class='left del' /></a></td>";
								  echo "</tr>";

								  $numero_registro++;

							  }
						?>
					</table>
                </article>
        	</div>
            </form>
        </div>
    </div>
</section>
</body>
</html>

<?php
	session_start();
	include('db/conexion.php');

$persona_nombreapellidos=$_SESSION['nombre_persona'];

$sql_contenido=" SELECT con_codigo,
												con_titulo,
												con_introduccion,
												con_text
                FROM contenido;";
$query_contenido=pg_query($conn,$sql_contenido);
?>

<!doctype html>
<html>
<head>
	<?php include('hdiquira.php'); ?>
</head>

<body>
<!--  LATERAL ----------------------------------------------  -->
<header id="lateral">
	<?php include('ltraliquira.php'); ?>
</header>
<!--  MODULOS ----------------------------------------------  -->
<!--  CUERPO ----------------------------------------------  -->
<section id="cuerpo">
    <div class="inter">
        <div class="miga">
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp; Contenido </div>
            <a href="#" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>
        </div>

        <h1><img src="iconos/contenido.png" /> Contenido </h1>

        <div class="bloque">
            <form>
            <span class="botonera">
                <div>
					<input type="button" value="Agregar" class="left mas" onclick="location.href='adicionar_contenido';" />
                    <!--input type="submit" value="Modificar" class="left edit" />
                    <input type="button" value="Eliminar" class="left del" />
                    <input type="button" value="Imprimir" class="left print"-->
								</div>

            </span>

        	<div class="scroll">
                <article class="cont">

					<table>
						<tr>
						<td>No</td>
						<td>Titulo</td>
						<td>Introduccion</td>
						<td>Texto</td>
						</tr>
						<?php
							$numero_registro=1;
							while($data_contenido=pg_fetch_array($query_contenido)){
								$con_codigo=$data_contenido['con_codigo'];
								$con_titulo=$data_contenido['con_titulo'];
								$con_introduccion=$data_contenido['con_introduccion'];
								$con_text=$data_contenido['con_text'];

								echo "<tr>";
								echo "<td>$numero_registro</td>";
								echo "<td>$con_titulo</td>";
								echo "<td>$con_introduccion</td>";
								echo "<td>$con_text</td>";
								echo "<td id='updalete'><a href='addrcontenido.php?codigo_contenido=$con_codigo' title='Modificar'>
										<input type='button'  class='left edit' /></a>
										<a href='procscontenido.php?txt_codigo=$con_codigo&proceso=borrar' title='Eliminar'>
										<input type='button' class='left del' /></a></td>";
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

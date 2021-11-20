<?php
	session_start();
	include('db/conexion.php');

	$persona_nombreapellidos=$_SESSION['nombre_persona'];
	$sql_aud=" SELECT aud_codigo,
									aud_titulo,
									aud_descripcion,
									aud_url
                FROM audio;";
$query_aud=pg_query($conn,$sql_aud);
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
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp; Audios
             </div>
            <a href="#" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>
        </div>

        <h1><img src="iconos/audio.png" /> Audios </h1>

        <div class="bloque">
            <form>
            <span class="botonera">
                <div>
					<input type="button" value="Agregar" class="left mas" onclick="location.href='adicionar_audio';" />
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
						<td>Descripcion</td>
						<td>Audio</td>
						</tr>
						<?php
							$numero_registro=1;
							while($data_audo=pg_fetch_array($query_aud)){
								$aud_codigo=$data_audo['aud_codigo'];
								$aud_titulo=$data_audo['aud_titulo'];
								$aud_descripcion=$data_audo['aud_descripcion'];
								$aud_url=$data_audo['aud_url'];

								echo "<tr>";
								echo "<td>$numero_registro</td>";
								echo "<td>$aud_titulo</td>";
								echo "<td>$aud_descripcion</td>";
								echo "<td><audio controls src='$aud_url'></audio></td>";
								echo "<td id='updalete'><a href='addraudio.php?codigo_audio=$aud_codigo' title='Modificar'>
										<input type='button' class='left edit' /></a>
										<a href='procsaudio.php?txt_codigo=$aud_codigo&proceso=borrar' title='Eliminar'>
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

<?php
	session_start();
	include('db/conexion.php');

	$persona_nombreapellidos=$_SESSION['nombre_persona'];

$sql_video=" SELECT vid_codigo,
										vid_titulo,
										vid_descripcion,
										vid_url
                FROM video;";
$query_video=pg_query($conn,$sql_video);
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
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp; Videos </div>
            <a href="#" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>
        </div>

        <h1><img src="iconos/video.png" /> Videos </h1>

        <div class="bloque">
            <form>
            <span class="botonera">
                <div>
					<input type="button" value="Agregar" class="left mas" onclick="location.href='adicionar_video';" />
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
						  <td>Video</td>
						</tr>
						<?php
							$numero_registro=1;
							  while($data_video=pg_fetch_array($query_video)){
									$vid_codigo=$data_video['vid_codigo'];
									$vid_titulo=$data_video['vid_titulo'];
									$vid_descripcion=$data_video['vid_descripcion'];
									$vid_url=$data_video['vid_url'];

								echo "<tr>";
								echo "<td>$numero_registro</td>";
								echo "<td>$vid_titulo</td>";
								echo "<td>$vid_descripcion</td>";
								echo "<td><video width='700' height='350' controls  loop poster='imgns/iquira.png'>
   										<source src='$vid_url' type='video/mp4'/></video></td>";
								echo "<td id='updalete'><a href='addrfilm.php?codigo_video=$vid_codigo' title='Modificar'>
											<input type='button' class='left edit' /></a>
											<a href='procsfilm.php?txt_codigo=$vid_codigo&proceso=borrar' title='Eliminar'>
											<input type='button'  class='left del' /></a></td>";
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

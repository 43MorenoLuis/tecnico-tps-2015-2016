<?php
	session_start();
	include('db/conexion.php');

	$persona_nombreapellidos=$_SESSION['nombre_persona'];

$sql_img=" SELECT img_codigo,
									img_titulo,
									img_descripcion,
									img_url
                FROM imagen;";
$query_img=pg_query($conn,$sql_img);
?>

<!doctype html>
<html>
<head>
	<?php include('hdiquira.php'); ?>
</head>

<body>

<!--  LATERAL ------------------------------------------------>
<header id="lateral">
	<?php include('ltraliquira.php'); ?>
</header>
<!--  MODULOS ------------------------------------------------>
<!--  CUERPO ------------------------------------------------>
<section id="cuerpo">
    <div class="inter">
        <div class="miga">
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp; Imagenes </div>
            <a href="#" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>
        </div>

        <h1><img src="iconos/imagen.png" /> Imagenes </h1>

        <div class="bloque">
            <form>
            <span class="botonera">
                <div>
					<input type="button" value="Agregar" class="left mas" onclick="location.href='adicionar_imagen';" />
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
						<td>Imagen</td>
						</tr>
						<?php
							$numero_registro=1;
							while($data_imgn=pg_fetch_array($query_img)){
								$img_codigo=$data_imgn['img_codigo'];
								$img_titulo=$data_imgn['img_titulo'];
								$img_descripcion=$data_imgn['img_descripcion'];
								$img_url=$data_imgn['img_url'];

								



















								echo "<tr>";
								echo "<td>$numero_registro</td>";
								echo "<td>$img_titulo</td>";
								echo "<td>$img_descripcion</td>";
								echo "<td><img src='$img_url' width='200' heigth='200'></td>";
								echo "<td id='updalete'><a href='addrimagn.php?codigo_imagen=$img_codigo' title='Modificar'>
										<input type='button' class='left edit' /></a>
										<a href='procsimagen.php?txt_codigo=$img_codigo&proceso=borrar' title='Eliminar'>
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

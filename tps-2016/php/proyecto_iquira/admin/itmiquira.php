<?php

	session_start();

	include('db/conexion.php');


	$persona_nombreapellidos=$_SESSION['nombre_persona'];

$sql_item=" SELECT ite_codigo,
												ite_referencia
                FROM item;";
$query_item=pg_query($conn,$sql_item);
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
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp; Item </div>
            <a href="#" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>
        </div>

        <h1><img src="iconos/item.png" /> Item </h1>

        <div class="bloque">
            <form>
            <span class="botonera">
                <div>
					<input type="button" value="Agregar" class="left mas" onclick="location.href='adicionar_item';" />
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
						<td>Referencia</td>
						<td></td>
						</tr>
						<?php
							$numero_registro=1;
							while($data_item=pg_fetch_array($query_item)){
								$ite_codigo=$data_item['ite_codigo'];
								$ite_referencia=$data_item['ite_referencia'];

								echo "<tr>";
								echo "<td>$numero_registro</td>";
								echo "<td>$ite_referencia</td>";
								echo "<td id='updalete'><a href='addritem.php?codigo_item=$ite_codigo' title='Modificar'>
										<input type='button' class='left edit' /></a>
										<a href='procsitem.php?txt_codigo=$ite_codigo&proceso=borrar' title='Eliminar'>
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

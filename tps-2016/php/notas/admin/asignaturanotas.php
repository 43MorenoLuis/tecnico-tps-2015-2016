<?php
	session_start();
	include('db/conexion.php');
	$persona_nombreapellidos=$_SESSION['nombre_persona'];
	if(isset($_REQUEST['sea_buscar'])){
	$buscar=strtolower($_REQUEST['sea_buscar']);
	$condicion="WHERE CONCAT(asi_nombre) LIKE ('%".$buscar."%')";
}
else {
	$buscar = "";
	$condicion= "";
}
$sql_asignatura=" SELECT asi_codigo,
                        asi_nombre
                FROM asignatura
											$condicion ORDER by asi_nombre ASC;";
$query_asignatura=pg_query($conn,$sql_asignatura);
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
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp;  Asignaturas</div>
            <a href="inicio" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>
        </div>

				<h1 style="margin:8px 0px 0px 0px;"><img src="iconos/asignatura.png" /> Asignaturas </h1>
				<div class="buscar">
				<form name='text' type='frm_asignatura' id='frm_asignatura' action='asignatura' method='post'>
					<input type='search' placeholder='Buscar Asignatura' name='sea_buscar' id='sea_buscar' />
					<input type='submit' value='Buscar' name='btn_buscar' id='btn_buscar'/>
				</form>
				</div>
        <div class="bloque">
            <form name='frm_procsasignatura' id='frm_procsasignatura' action='procsasignatura.php' method='post'>
            <span class="botonera">
                <div>
					<input type="button" value="Agregar" class="left mas" onclick="location.href='adicionar_asignatura';" />
                    <!--input type="submit" value="Modificar" class="left edit" />
                    <input type="button" value="Eliminar" class="left del" />
                    <input type="button" value="Imprimir" class="left print"-->
								</div>

            </span>

        	<div class="scroll">
                <article class="cont">

					<table>
						<tr>
						  <td><b>No</b></td>
						  <td><b>Nombre</b></td>
						</tr>
						<?php
							$numero_registro=1;
							  while($data_asignatura=pg_fetch_array($query_asignatura)){
								  $asi_nombre=$data_asignatura['asi_nombre'];
                  $asi_codigo=$data_asignatura['asi_codigo'];

								  echo "<tr>";
								  echo "<td>$numero_registro</td>";
                  echo "<td>$asi_nombre</td>";
									echo "<td id='updalete'><a href='addrasignatura.php?codigo_asignatura=$asi_codigo' title='Modificar'><input type='button'  class='left edit' /></a></td>";
									echo "<td id='updalete'><a href='procsasignatura.php?txt_codigo=$asi_codigo&proceso=borrar' title='Eliminar'><input type='button'  class='left del' /></a></td>";
								  echo "</tr>";

								  $numero_registro++;

							  }
						?>
					</table>
                </article>
        	</div>
            <form>
        </div>
    </div>
</section>
</body>
</html>

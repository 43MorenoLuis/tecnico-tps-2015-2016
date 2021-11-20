
<?php

	session_start();
	include('db/conexion.php');
	$persona_nombreapellidos=$_SESSION['nombre_persona'];
	if(isset($_REQUEST['sea_buscar'])){
	$buscar=strtolower($_REQUEST['sea_buscar']);
	$condicion="AND CONCAT(doc_identificacion || Lower(doc_nombre) || Lower(doc_primerapellido) || Lower(doc_segundoapellido)) LIKE ('%".$buscar."%')";
}
else {
	$buscar = "";
	$condicion= "";
}
$sql_docentegra=" SELECT 	docente.doc_codigo,
												doc_nombre,
												gra_nombre,
												grado.gra_codigo,
                        docente_grado.dgr_codigo
                FROM docente_grado, grado, docente
								WHERE docente_grado.doc_codigo=docente.doc_codigo
								AND docente_grado.gra_codigo=grado.gra_codigo
								$condicion ORDER by doc_nombre ASC;";
$query_docentegra=pg_query($conn,$sql_docentegra);
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
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp;  <a href="docente"> Docentes</a> &nbsp;/&nbsp; Docentes Por Grado</div>
            <a href="docente" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>        
        </div>

				<h1 style="margin:8px 0px 0px 0px;"><img src="iconos/docente_asignatura.png" /> Docentes Por Grado </h1>
				<div class="buscar">
				<form name='text' type='frm_docente' id='frm_docente' action='docente' method='post'>
					<input type='search' placeholder=" Buscar Docentes Por Grado" name='sea_buscar' id='sea_buscar' />
					<input type='submit' value='Buscar' name='btn_buscar' id='btn_buscar'/>
				</form>
				</div>
				
				
        <div class="bloque">
            <form name='frm_docente' action='procsteacher.php' method='post'>
        	<div class="scroll">
                <article class="cont">

					<table>
						<tr>
						  <td><b>No</b></td>
						  <td><b>Nombre Docente</b></td>
							<td></td>
              <td><b>Nombre Grado</b></td>
						</tr>
						<?php
							$numero_registro=1;
							  while($data_gradocente=pg_fetch_array($query_docentegra)){
									$doc_codigo=$data_gradocente['doc_codigo'];
								  $doc_nombre=$data_gradocente['doc_nombre'];
                  $dgr_codigo=$data_gradocente['dgr_codigo'];
								  $gra_nombre=$data_gradocente['gra_nombre'];
                  $gra_codigo=$data_gradocente['gra_codigo'];

								  echo "<tr>";
								  echo "<td>$numero_registro</td>";
                  echo "<td>$doc_nombre</td>";
									echo "<td><img src='iconos/corresponde.png' title='Dicta' class='imgcorres' /></td>";
                  echo "<td>$gra_nombre</td>";
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
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
$sql_docenteasig=" SELECT 	docente.doc_codigo,
												doc_nombre,
                        docente_asignatura.das_codigo,
                        asignatura.asi_codigo,
												asi_nombre,
                        das_year
                FROM docente_asignatura, asignatura, docente
								WHERE asignatura.asi_codigo=docente_asignatura.asi_codigo
								AND docente.doc_codigo=docente_asignatura.doc_codigo
								$condicion ORDER by doc_nombre ASC;";
$query_docenteasig=pg_query($conn,$sql_docenteasig);
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
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp;  <a href="docente"> Docentes</a> &nbsp;/&nbsp; Docentes Por Asignatura</div>
            <a href="docente" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>        
        </div>

				<h1 style="margin:8px 0px 0px 0px;"><img src="iconos/docente_asignatura.png" /> Docentes Por Asignatura </h1>
				<div class="buscar">
				<form name='text' type='frm_docente' id='frm_docente' action='docente' method='post'>
					<input type='search' placeholder="Buscar Docente o Asignatura" name='sea_buscar' id='sea_buscar' />
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
              <td><b>Nombre Asignatura</b></td>
							<td><b>Year</b></td>
						</tr>
						<?php
							$numero_registro=1;
							  while($data_docenteasig=pg_fetch_array($query_docenteasig)){
									$doc_codigo=$data_docenteasig['doc_codigo'];
								  $doc_nombre=$data_docenteasig['doc_nombre'];
                  $asi_codigo=$data_docenteasig['asi_codigo'];
								  $asi_nombre=$data_docenteasig['asi_nombre'];
                  $das_codigo=$data_docenteasig['das_codigo'];
                  $das_year=$data_docenteasig['das_year'];

								  echo "<tr>";
								  echo "<td>$numero_registro</td>";
                  echo "<td>$doc_nombre</td>";
									echo "<td><img src='iconos/corresponde.png' title='Dicta' class='imgcorres' /></td>";
                  echo "<td>$asi_nombre</td>";
                  echo "<td>$das_year</td>";
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

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
$sql_docente=" SELECT doc_codigo,
                        doc_identificacion,
                        doc_nombre,
                        doc_primerapellido,
                        doc_segundoapellido,
                        doc_genero,
                        docente.tid_codigo,
                        tipo_identificacion.tid_codigo,
                        tid_referencia
                FROM docente, tipo_identificacion
                WHERE docente.tid_codigo=tipo_identificacion.tid_codigo
								$condicion ORDER by doc_nombre ASC;";
$query_docente=pg_query($conn,$sql_docente);
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
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp;  Docentes</div>
            <a href="inicio" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>
        </div>

				<h1 style="margin:8px 0px 0px 0px;"><img src="iconos/docente.png" /> Docentes </h1>
				<div class="buscar">
				<form name='text' type='frm_docente' id='frm_docente' action='docente' method='post'>
					<input type='search' placeholder="Buscar Docente" name='sea_buscar' id='sea_buscar' />
					<input type='submit' value='Buscar' name='btn_buscar' id='btn_buscar'/>
				</form>
				</div>
				
				<div id='tabsteacher'>
						<div class='bloqsteacher'>
                             <span>
                            	<span><img src="interfaz/1001.png" /></span>
	                            <span><a href="Docente_Grado">Docentes Por Grado</a></span>
                            </span>
						</div>
						<div class='bloqsteacher'>
                             <span>
                            	<span><img src="interfaz/1002.png" /></span>
	                            <span><a href="Docente_Asignatura">Docentes Por Asignaturas</a></span>
                            </span>
						</div>
					</div>

        <div class="bloque">
            <form name='frm_docente' action='procsteacher.php' method='post'>
            <span class="botonera">
                <div>
									<input type="button" value="Agregar" class="left mas" onclick="location.href='adicionar_docente';" />
								</div>
            </span>
			
			

        	<div class="scroll">
                <article class="cont">

					<table>
						<tr>
						  <td><b>No</b></td>
              <td></td>
              <td><b>identificacion</b></td>
						  <td><b>Nombre</b></td>
						  <td><b>Primer Apellido</b></td>
              <td><b>Segundo Apellido</b></td>
							<td><b>Genero</b></td>
						</tr>
						<?php
							$numero_registro=1;
							  while($data_docente=pg_fetch_array($query_docente)){
									$doc_codigo=$data_docente['doc_codigo'];
								  $tid_referencia=$data_docente['tid_referencia'];
                  $doc_identificacion=$data_docente['doc_identificacion'];
								  $doc_nombre=$data_docente['doc_nombre'];
                  $tid_codigo=$data_docente['tid_codigo'];
                  $doc_1apellido=$data_docente['doc_primerapellido'];
								  $doc_2apellido=$data_docente['doc_segundoapellido'];
									$doc_genero=$data_docente['doc_genero'];

								  echo "<tr>";
								  echo "<td>$numero_registro</td>";
                  echo "<td>$tid_referencia</td>";
								  echo "<td>$doc_identificacion</td>";
                  echo "<td>$doc_nombre</td>";
                  echo "<td>$doc_1apellido</td>";
                  echo "<td>$doc_2apellido</td>";
									echo "<td>$doc_genero</td>";
									echo "<td id='updalete'><a href='addrdcnts.php?codigo_docente=$doc_codigo' title='Modificar'><input type='button'  class='left edit' /></a></td>";
									echo "<td id='updalete'><a href='procsteacher.php?txt_codigo=$doc_codigo&proceso=borrar' title='Eliminar'><input type='button'  class='left del' /></a></td>";
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

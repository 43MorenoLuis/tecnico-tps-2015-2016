<?php

	session_start();
	include('db/conexion.php');
	$persona_nombreapellidos=$_SESSION['nombre_persona'];
	if(isset($_REQUEST['sea_buscar'])){
	$buscar=strtolower($_REQUEST['sea_buscar']);
	$condicion="AND CONCAT(est_primerapellido) LIKE ('%".$buscar."%')";
}
else {
	$buscar = "";
	$condicion= "";
}
$sql_docente=" SELECT 	estudiante.est_codigo,
						est_nombre,
						est_primerapellido,
						est_segundoapellido,
                        grado.gra_codigo,
                        estudiante_grado.egr_codigo,
						gra_nombre
                FROM estudiante_grado, estudiante, grado
				WHERE estudiante_grado.est_codigo=estudiante.est_codigo
				AND estudiante_grado.gra_codigo=grado.gra_codigo
				AND grado.gra_codigo IN (2) 
				$condicion ORDER by est_primerapellido ASC;";
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
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp;  <a href="estudiante"> Estudiantes</a> &nbsp;/&nbsp; 10-02</div>
            <a href="estudiante" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>        
		</div>
				<!--  MODULOS --------->

				<h1 style="margin:8px 0px 0px 0px;"><img src="interfaz/1002.png" /> Estudiantes 10-02 </h1>
				<div class="buscar">
				<form name='frm_docente' id='frm_docente' action='1002' method='post'>
					<input type='search' placeholder="Buscar Estudiantes 10-02" name='sea_buscar' id='sea_buscar' />
					<input type='submit' value='Buscar' name='btn_buscar' id='btn_buscar'/>
				</form>
				</div>
        <div class="bloque">
        	<div class="scroll">
                <article class="cont">

					<table>
						<tr>
						  	<td><b>No</b></td>
						  	<td><b>1er Apellido</b></td>
						  	<td><b>2do Apellido</b></td>
              				<td><b>Nombre Estudiante</b></td>
						</tr>
						<?php
							$numero_registro=1;
							  while($data_docente=pg_fetch_array($query_docente)){
								$est_codigo=$data_docente['est_codigo'];
								$est_nombre=$data_docente['est_nombre'];
								$est_1apellido=$data_docente['est_primerapellido'];
								$est_2apellido=$data_docente['est_segundoapellido'];
                  				$gra_codigo=$data_docente['gra_codigo'];
								$gra_nombre=$data_docente['gra_nombre'];
                  				$egr_codigo=$data_docente['egr_codigo'];

								echo "<tr>";
								echo "<td>$numero_registro</td>";
                 				echo "<td>$est_1apellido</td>";
                 				echo "<td>$est_2apellido</td>";
                  				echo "<td>$est_nombre</td>";
								echo "<td id='updalete'>
											<a href='notas.php?codigo_estudiante=$est_codigo' title='Ver Notas'>
											<input type='button'  class='left info' /></a></td>";		  
								echo "</tr>";

								  $numero_registro++;

							  }
						?>
					</table>
                </article>
        	</div>
        </div>
    </div>
</section>
</body>
</html>

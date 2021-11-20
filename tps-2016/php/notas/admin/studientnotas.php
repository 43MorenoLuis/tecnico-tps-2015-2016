<?php

	session_start();

	include('db/conexion.php');

	$persona_nombreapellidos=$_SESSION['nombre_persona'];
	if(isset($_REQUEST['sea_buscar'])){
	$buscar=strtolower($_REQUEST['sea_buscar']);
	$condicion="AND CONCAT(est_identificacion || Lower(est_nombre) || Lower(est_primerapellido) || Lower(est_segundoapellido)) LIKE ('%".$buscar."%')";
}
else {
	$buscar = "";
	$condicion= "";
}
$sql_estudiante=" SELECT est_codigo,
                        est_identificacion,
                        est_nombre,
                        est_primerapellido,
                        est_segundoapellido,
                        est_genero,
                        estudiante.tid_codigo,
                      	tipo_identificacion.tid_codigo,
                        tid_referencia
                FROM estudiante, tipo_identificacion
                WHERE estudiante.tid_codigo=tipo_identificacion.tid_codigo
				$condicion ORDER by est_nombre ASC;";	
			$query_estudiante=pg_query($conn,$sql_estudiante);
?>

<!doctype html>
<html>
<head>
	<?php include('hdnotas.php'); ?>
</head>

<body>
<!--  LATERAL --------->
<header id="lateral">
	<?php include('ltralnotas.php'); ?>
</header>
<!--  CUERPO ---------->
<section id="cuerpo">
    <div class="inter">
        <div class="miga">
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp;  Estudiantes</div>
            <a href="inicio" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>
        </div>
<!--  CUERPO ----------------------------------------------  -->
				<h1 style="margin:8px 0px 0px 0px;"><img src="interfaz/estudiante.png" /> Estudiantes </h1>
				<div class="buscar">
				<form name='frm_estudiante' id='frm_estudiante' action='estudiante' method='post'>
					<input type='search' placeholder="Buscar Estudiantes" name='sea_buscar' id='sea_buscar' />
					<input type='submit' value='Buscar' name='btn_buscar' id='btn_buscar'/>
				</form>
			</div>
				
					<div id='tabstudent'>
						<div class='bloqstudent'>
                             <span>
                            	<span><img src="interfaz/1001.png" /></span>
	                            <span><a href="1001">Estudiantes 10-01</a></span>
                            </span>
						</div>
						<div class='bloqstudent'>
                             <span>
                            	<span><img src="interfaz/1002.png" /></span>
	                            <span><a href="1002">Estudiantes 10-02</a></span>
                            </span>
						</div>
						<div class='bloqstudent'>
                             <span>
                            	<span><img src="interfaz/1101.png" /></span>
	                            <span><a href="1101">Estudiantes 11-01</a></span>
                            </span>
						</div>
						<div class='bloqstudent'>
                             <span>
                            	<span><img src="interfaz/1102.png" /></span>
	                            <span><a href="1102">Estudiantes 11-02</a></span>
                            </span>
						</div>
					</div>
					
        <div class="bloque">
            <form name='frm_estudiante' action='procsstudent.php' method='post'>
            <span class="botonera">
                <div>
					<input type="button" value="Agregar" class="left mas" onclick="location.href='adicionar_estudiante';" />
				</div>

            </span>
			
        	<div class="scroll" >
                <article class="cont" id='cargar'>

					<table>
						<tr>
						  <td><b>No</b></td>
						  <td><b>Tipo Documento</b></td>
							<td><b>Nro Identificacion</b></td>
						  <td><b>Nombre</b></td>
							<td><b>Per Apellido</b></td>
							<td><b>Sdo Apellido</b></td>
							<td><b>Genero</b></td>
						</tr>
						<?php
							$numero_registro=1;
							  while($data_estudiante=pg_fetch_array($query_estudiante)){
									$est_codigo=$data_estudiante['est_codigo'];
									$tid_codigo=$data_estudiante['tid_referencia'];
									$est_nroid=$data_estudiante['est_identificacion'];
								  $est_nombre=$data_estudiante['est_nombre'];
								  $est_1apellido=$data_estudiante['est_primerapellido'];
									$est_2apellido=$data_estudiante['est_segundoapellido'];
									$est_genero=$data_estudiante['est_genero'];



								  echo "<tr>";
								  echo "<td>$numero_registro</td>";
								  echo "<td>$tid_codigo</td>";
								  echo "<td>$est_nroid</td>";
									echo "<td>$est_nombre</td>";
									echo "<td>$est_1apellido</td>";
									echo "<td>$est_2apellido</td>";
									echo "<td>$est_genero</td>";
									echo "<td id='updalete'><a href='addrestudiante.php?codigo_estudiante=$est_codigo' title='Modificar'><input type='button'  class='left edit' /></a></td>";
									echo "<td id='updalete'><a href='procsstudent.php?txt_codigo=$est_codigo&proceso=borrar' title='Eliminar'><input type='button'  class='left del' /></a></td>";
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

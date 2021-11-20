<?php
session_start();
include('db/conexion.php');

$primercodigo=date('YmdHis');
$est_codigo=$primercodigo;
$txt_codigo=$_REQUEST['txt_codigo'];
$referencia=$_REQUEST['sel_referencia'];
$nroid=$_REQUEST['num_nroi'];
$nombre=$_REQUEST['txt_nombre'];
$apellido1=$_REQUEST['txt_1apellido'];
$apellido2=$_REQUEST['txt_2apellido'];
$genero=$_REQUEST['rad_genero'];
$fechanacio=$_REQUEST['dat_nacio'];
$personaauditar=$_SESSION['codigo_persona'];

if(isset($_REQUEST['proceso'])){
				$sql_insert="DELETE FROM estudiante
				WHERE est_codigo=$txt_codigo;";
			}
	else{
	    if($txt_codigo!=""){
	    $sql_insert="UPDATE estudiante
	        SET est_codigo=$primercodigo,
							est_identificacion=$nroid,
							tid_codigo='$referencia',
							est_nombre='$nombre',
	            est_primerapellido='$apellido1',
							est_segundoapellido='$apellido2',
							est_genero='$genero',
							est_fechanacimiento='$fechanacio',
	            est_personamodifico=$personaauditar,
	            est_fechamodifico=NOW()
	        WHERE est_codigo=$txt_codigo;";
    }
    	else{
					$sql_insert="INSERT INTO estudiante(
																	tid_codigo,
																	est_codigo,
																	est_identificacion,
																	est_nombre,
																	est_primerapellido,
																	est_segundoapellido,
																	est_fechanacimiento,
																	est_genero,
																	est_personacreo,
																	est_personamodifico,
																	est_fechacreo,
																	est_fechamodifico)
							            VALUES ('$referencia',
																	$est_codigo,
							                    $nroid,
							                    '$nombre',
																	'$apellido1',
																	'$apellido2',
																	'$fechanacio',
																	'$genero',
							                    $personaauditar,
							                    $personaauditar,
							                    Now(),
							                    Now());";
		    }
}
//echo $sql_insert;

pg_query($conn,$sql_insert);

header('Location: estudiante');

 ?>

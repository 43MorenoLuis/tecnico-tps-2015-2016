<?php
session_start();
include('db/conexion.php');

$primercodigo=date('YmdHis');
$otrocodigo=date('YdsiHm');

$doc_codigo=$primercodigo;
$txt_codigo=$_REQUEST['txt_codigo'];
$referencia=$_REQUEST['sel_referencia'];
$nroid=$_REQUEST['num_nroi'];
$nombre=$_REQUEST['txt_nombre'];
$apellido1=$_REQUEST['txt_1apellido'];
$apellido2=$_REQUEST['txt_2apellido'];
$genero=$_REQUEST['rad_genero'];
$personaauditar=$_SESSION['codigo_persona'];

if(isset($_REQUEST['proceso'])){
				$sql_insert="DELETE FROM docente
				WHERE doc_codigo=$txt_codigo;";
			}
	else{
	    if($txt_codigo!=""){
  $sql_insert="UPDATE docente
	        SET doc_codigo=$primercodigo,
							doc_identificacion=$nroid,
							tid_codigo='$referencia',
							doc_nombre='$nombre',
	            doc_primerapellido='$apellido1',
							doc_segundoapellido='$apellido2',
							doc_genero='$genero',
	            doc_personamodifico=$personaauditar,
	            doc_fechamodifico=NOW()
	        WHERE doc_codigo=$txt_codigo;";

					$sql_insertar="UPDATE docente_asignatura
							SET das_codigo=$otrocodigo,
									das_personamodifico=$personaauditar,
									das_fechamodifico=NOW()
							WHERE doc_codigo=$primercodigo;";


    }
    	else{
					$sql_insert="INSERT INTO docente(
																	doc_codigo,
																	tid_codigo,
																	doc_identificacion,
																	doc_nombre,
																	doc_primerapellido,
																	doc_segundoapellido,
																	doc_personacreo,
																	doc_personamodifico,
																	doc_fechacreo,
																	doc_fechamodifico,
																	doc_genero)
							            VALUES ($doc_codigo,
																	'$referencia',
							                    $nroid,
							                    '$nombre',
																	'$apellido1',
																	'$apellido2',
							                    $personaauditar,
							                    $personaauditar,
							                    Now(),
							                    Now(),
																	'$genero');";
		    }
}
echo $sql_insert;
echo '<br>';
echo $sql_insertar;

pg_query($conn,$sql_insert);
echo '<br>';
pg_query($conn,$sql_insertar);


//header('Location: docente');

 ?>

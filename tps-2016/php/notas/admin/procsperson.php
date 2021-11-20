<?php
session_start();
include('db/conexion.php');

$primercodigo=date('YmdHis');
$per_codigo=$primercodigo;

$txt_codigo=$_REQUEST['txt_codigo'];
$per_nombre=$_REQUEST['txt_nombre'];
$per_apellido=$_REQUEST['txt_apellido'];

$personaauditar=$_SESSION['codigo_persona'];

if(isset($_REQUEST['proceso'])){
				$sql_insertar="DELETE FROM persona
				WHERE per_codigo=$txt_codigo;";

				$sql_insert="DELETE FROM login
				WHERE  log_persona=$txt_codigo;";
	}
	else{
	    if($txt_codigo!=""){
	    $sql_insert="UPDATE persona
	        SET per_nombre='$per_nombre',
	            per_apellido='$per_apellido',
	            per_personamodifico=$personaauditar,
	            per_fechamodifico=NOW()
	        WHERE per_codigo=$txt_codigo;";
    }
    else{
					$sql_insert="INSERT INTO persona(
					                        per_codigo,
					                        per_nombre,
					                        per_apellido,
					                        per_personacreo,
					                        per_personamodifico,
					                        per_fechacreo,
					                        per_fechamodifico)
					              VALUES ($per_codigo,
					                    '$per_nombre',
					                    '$per_apellido',
					                    $personaauditar,
					                    $personaauditar,
					                    Now(),
					                    Now());";
    }
}

//echo $sql_insertar;
//echo $sql_insert;

pg_query($conn,$sql_insertar);
pg_query($conn,$sql_insert);

header('Location: persona');

 ?>

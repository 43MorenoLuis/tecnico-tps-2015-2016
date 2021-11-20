<?php
session_start();
include('db/conexion.php');

$primercodigo=date('YmdHis');

$txt_codigo=$_REQUEST['txt_codigo'];
$vid_titulo=$_REQUEST['txt_title'];
$vid_descripcion=$_REQUEST['txt_descpcn'];
$vid_url=$_REQUEST['txt_direccion'];
$ite_referencia=$_REQUEST['sel_item'];
$vid_contenido=$_REQUEST['sel_contenido'];

$vid_codigo=$primercodigo;
$personaauditar=$_SESSION['codigo_persona'];

if(isset($_REQUEST['proceso'])){
		$sql_insert="DELETE FROM video
				WHERE vid_codigo=$txt_codigo;";
	}
	else{
	    if($txt_codigo!=""){
	    $sql_insert="UPDATE video
	        SET
                vid_titulo='$vid_titulo',
                vid_descripcion='$vid_descripcion',
                vid_url='$vid_url',
                vid_contenido='$vid_contenido',
                vid_item='$ite_referencia',
                vid_personamodifico=$personaauditar,
                vid_fechamodifico=NOW()
	        WHERE vid_codigo=$txt_codigo;";
    }
    else{
					$sql_insert="INSERT INTO video(
															vid_codigo,
															vid_titulo,
															vid_descripcion,
															vid_url,
															vid_contenido,
															vid_item,
															vid_personacreo,
															vid_personamodifico,
															vid_fechacreo,
															vid_fechamodifico)
					              VALUES ($vid_codigo,
					                    '$vid_titulo',
					                    '$vid_descripcion',
                              '$vid_url',
															'$vid_contenido',
															'$ite_referencia',
					                    $personaauditar,
					                    $personaauditar,
					                    Now(),
					                    Now());";
    }
}
//echo $sql_insert;

pg_query($conn,$sql_insert);

header('Location: video');

 ?>

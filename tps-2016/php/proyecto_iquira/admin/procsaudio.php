<?php
session_start();
include('db/conexion.php');

$primercodigo=date('YmdHis');

$txt_codigo=$_REQUEST['txt_codigo'];
$aud_titulo=$_REQUEST['txt_title'];
$aud_descripcion=$_REQUEST['txt_descpcn'];
$aud_url=$_REQUEST['txt_direccion'];
$ite_referencia=$_REQUEST['sel_item'];
$aud_contenido=$_REQUEST['sel_contenido'];

$aud_codigo=$primercodigo;
$personaauditar=$_SESSION['codigo_persona'];

if(isset($_REQUEST['proceso'])){
		$sql_insert="DELETE FROM audio
				WHERE aud_codigo=$txt_codigo;";
	}
	else{
	    if($txt_codigo!=""){
	    $sql_insert="UPDATE audio
	        SET
                aud_titulo='$aud_titulo',
                aud_descripcion='$aud_descripcion',
                aud_url='$aud_url',
                aud_contenido='$aud_contenido',
                aud_item='$ite_referencia',
                aud_personamodifico=$personaauditar,
                aud_fechamodifico=NOW()
	        WHERE aud_codigo=$txt_codigo;";
    }
    else{
					$sql_insert="INSERT INTO audio(
															aud_codigo,
															aud_titulo,
															aud_descripcion,
															aud_url,
															aud_contenido,
															aud_item,
															aud_personacreo,
															aud_personamodifico,
															aud_fechacreo,
															aud_fechamodifico)
					              VALUES ($aud_codigo,
					                    '$aud_titulo',
					                    '$aud_descripcion',
                              '$aud_url',
															'$aud_contenido',
															'$ite_referencia',
					                    $personaauditar,
					                    $personaauditar,
					                    Now(),
					                    Now());";
    }
}
//echo $sql_insert;

pg_query($conn,$sql_insert);

header('Location: audio');

 ?>

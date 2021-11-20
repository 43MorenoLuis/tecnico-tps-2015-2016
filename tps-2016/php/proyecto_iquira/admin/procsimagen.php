<?php
session_start();
include('db/conexion.php');

$primercodigo=date('YdmHis');

$txt_codigo=$_REQUEST['txt_codigo'];
$img_titulo=$_REQUEST['txt_title'];
$img_descripcion=$_REQUEST['txt_descpcn'];
$img_url=$_REQUEST['txt_direccion'];
$ite_referencia=$_REQUEST['sel_item'];
$img_contenido=$_REQUEST['sel_contenido'];

$img_codigo=$primercodigo;
$personaauditar=$_SESSION['codigo_persona'];

if(isset($_REQUEST['proceso'])){
		$sql_insert="DELETE FROM imagen
				WHERE img_codigo=$txt_codigo;";
	}
	else{
	    if($txt_codigo!=""){
	    $sql_insert="UPDATE imagen
	        SET
                img_titulo='$img_titulo',
                img_descripcion='$img_descripcion',
                img_url='$img_url',
                img_contenido='$img_contenido',
                img_item='$ite_referencia',
                img_personamodifico=$personaauditar,
                img_fechamodifico=NOW()
	        WHERE img_codigo=$txt_codigo;";
    }
    else{
					$sql_insert="INSERT INTO imagen(
															img_codigo,
															img_titulo,
															img_descripcion,
															img_url,
															img_contenido,
															img_item,
															img_personacreo,
															img_personamodifico,
															img_fechacreo,
															img_fechamodifico)
					              VALUES ($img_codigo,
					                    '$img_titulo',
					                    '$img_descripcion',
                              '$img_url',
															'$img_contenido',
															'$ite_referencia',
					                    $personaauditar,
					                    $personaauditar,
					                    Now(),
					                    Now());";
    }
}
//echo $sql_insert;

pg_query($conn,$sql_insert);

header('Location: imagen');

 ?>

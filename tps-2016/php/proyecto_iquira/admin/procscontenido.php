<?php
session_start();
include('db/conexion.php');

$primercodigo=date('YmdHis');

$txt_codigo=$_REQUEST['txt_codigo'];
$con_titulo=$_REQUEST['txt_title'];
$con_introduccion=$_REQUEST['txt_itro'];
$con_contenido=$_REQUEST['txt_contenido'];
$ite_referencia=$_REQUEST['sel_item'];
$con_imgprincipal=$_REQUEST['txt_contimg'];

$con_codigo=$primercodigo;
$personaauditar=$_SESSION['codigo_persona'];

if(isset($_REQUEST['proceso'])){
		$sql_insert="DELETE FROM contenido
				WHERE con_codigo=$txt_codigo;";
	}
	else{
	    if($txt_codigo!=""){
	    $sql_insert="UPDATE contenido
	        SET con_titulo='$con_titulo',
							con_introduccion='$con_introduccion',
							con_text='$con_contenido',
							con_imgprincipal='$con_imgprincipal',
       				ite_codigo='$ite_referencia',
							con_personamodifico=$personaauditar,
       				con_fechamodifico=NOW()
	        WHERE con_codigo=$txt_codigo;";
    }
    else{
					$sql_insert="INSERT INTO contenido(
															con_codigo,
															con_titulo,
															con_introduccion,
															con_text,
															con_imgprincipal,
															ite_codigo,
															con_personacreo,
															con_personamodifico,
															con_fechacreo,
															con_fechamodifico)
					              VALUES ($con_codigo,
					                    '$con_titulo',
					                    '$con_introduccion',
															'$con_contenido',
															'$con_imgprincipal',
															'$ite_referencia',
					                    $personaauditar,
					                    $personaauditar,
					                    Now(),
					                    Now());";

    }
}
//echo $sql_insert;

pg_query($conn,$sql_insert);

header('Location: contenido');

 ?>

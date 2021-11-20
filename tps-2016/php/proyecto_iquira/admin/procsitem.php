<?php
session_start();
include('db/conexion.php');
$primercodigo=date('YmdHis');
$txt_codigo=$_REQUEST['txt_codigo'];

$ite_referencia=$_REQUEST['txt_referncia'];
$ite_tipo=$_REQUEST['num_tipo'];
$ite_jerarquia=$_REQUEST['num_jerarquia'];
$ite_codigo=$primercodigo;
$personaauditar=$_SESSION['codigo_persona'];

if(isset($_REQUEST['proceso'])){
		$sql_insert="DELETE FROM item
				WHERE ite_codigo=$txt_codigo;";
	}
	else{
	    if($txt_codigo!=""){
	    $sql_insert="UPDATE item
	        SET	ite_referencia='$ite_referencia',
							ite_tipo=$ite_tipo,
							ite_jerarquia=$ite_jerarquia,
							ite_personamodifico=$personaauditar,
							ite_fechamodifico=NOW()
	        WHERE ite_codigo=$txt_codigo;";
    }
    else{
					$sql_insert="INSERT INTO item(
																	ite_codigo,
																	ite_referencia,
																	ite_tipo,
																	ite_jerarquia,
					                        ite_personacreo,
					                        ite_personamodifico,
					                        ite_fechacreo,
					                        ite_fechamodifico)
					              VALUES ($ite_codigo,
					                    '$ite_referencia',
					                    $ite_tipo,
															$ite_jerarquia,
					                    $personaauditar,
					                    $personaauditar,
					                    Now(),
					                    Now());";

    }
}
//echo $sql_insert;

pg_query($conn,$sql_insert);

header('Location: item');

 ?>

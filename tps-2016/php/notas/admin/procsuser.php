<?php
include('db/conexion.php');
$primercodigo=date('YmdHis');
$user=$_REQUEST['txt_user'];
$password=sha1(md5($_REQUEST['password']));

$per_nombre=$_REQUEST['txt_nombre'];
$per_apellido=$_REQUEST['txt_apellido'];

$log_codigo=$primercodigo;
$per_codigo=$primercodigo;
$log_persona=$log_codigo;
$personaauditar=$per_codigo;
$foto=$_REQUEST['img_user'];

	if($per_nombre='per_nombre'){
		header('Location: login');
	}else{
		$sql_insertar="INSERT INTO persona(
														per_codigo,
														per_nombre,
														per_apellido,
														per_personacreo,
														per_personamodifico,
														per_fechacreo,
														per_fechamodifico)
											VALUES (
														$per_codigo,
														'$per_nombre',
														'$per_apellido',
														$personaauditar,
														$personaauditar,
														Now(),
														Now());";

			$sql_insert="INSERT INTO login(
										log_codigo,
										log_persona,
										log_user,
										log_passward,
										log_personacreo,
										log_personamodifico,
										log_fechacreo,
										log_fechamodifico,
										log_foto)
									VALUES (
										$log_codigo,
										$log_persona,
										'$user',
										'$password',
										$personaauditar,
										$personaauditar,
										Now(),
										Now(),
										'$foto');";
//echo $sql_insertar;
//echo $sql_insert;
//echo "<br>";
pg_query($conn,$sql_insertar);
pg_query($conn,$sql_insert);

header('Location: login');
	}
 ?>

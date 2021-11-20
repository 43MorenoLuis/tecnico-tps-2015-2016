<?
session_start();
include('db/conexion.php');
session_destroy();
echo "Ha terminado la sesion";
header("Location: login");
?>

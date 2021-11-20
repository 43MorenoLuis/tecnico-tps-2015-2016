<?php

  session_start();

  include('db/conexion.php');

  $user=$_REQUEST['txt_usuario'];
  $passwrd=sha1(md5($_REQUEST['password']));


  $sql_acceso="SELECT log_persona, log_user, log_passward, per_nombre,
                      per_apellido
              FROM login, persona
              WHERE log_user ='$user'
              AND log_passward = '$passwrd'
              AND persona.per_codigo=login.log_persona; ";

  $query_acceso=pg_query($conn,$sql_acceso);
  $num_acceso=pg_num_rows($query_acceso);

  $data_persona=pg_fetch_array($query_acceso);
  $per_nombre=$data_persona['per_nombre'];
  $per_apellido=$data_persona['per_apellido'];
  $per_codigo=$data_persona['log_persona'];

  $_SESSION['nombre_persona']=$per_nombre." ".$per_apellido;
  $_SESSION['codigo_persona']=$per_codigo;

  if($num_acceso>0){
    header('Location:inicio');
  }
  else{
    header('Location: /notas/admin/error=-1');
  }

  //echo "Acceso Iquira";

?>

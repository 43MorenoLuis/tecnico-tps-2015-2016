<?php
$online=false;
$contenido=0;
$seccion_url='';
$varerror='';
include('mgble_url/urlRegla.php');
include('mgble_url/urlAmigable.php');


//echo $contenido;

//echo "<br>".$seccion_url;

//echo $url_pagina;

//echo $totalVariables;

//====== parametros Login ======//
if($seccion_url=='acceso'){
  include('ccsoiquira.php');
}
else if($seccion_url=='inicio'){
  include('homeiquira.php');
}

//====== Parametros usuario ======//
else if($seccion_url=='login'){
  include('login.php');
}
else if($seccion_url=='registrarse'){
  include('addrusuario.php');
}

//====== Parametros Salir ======//
else if($seccion_url=='login'){
  include('login.php');
}

//====== parametros inicio ======//
else if($seccion_url=='inicio'){
  include('homeiquira.php');
}
else if($seccion_url=='login'){
  include('login.php');
}

//====== parametros Persona ======//
else if($seccion_url=='persona'){
  include('psnaiquira.php');
}
else if($seccion_url=='adicionar_persona'){
  include('addrpersona.php');
}

//====== parametros Contenido ======//
else if($seccion_url=='contenido'){
  include('contdoiquira.php');
}
else if($seccion_url=='adicionar_contenido'){
  include('addrcontenido.php');
}

//====== parametros Video ======//
else if($seccion_url=='video'){
  include('filmiquira.php');
}
else if($seccion_url=='adicionar_video'){
  include('addrfilm.php');
}

//====== parametros Imagen ======//
else if($seccion_url=='imagen'){
  include('imgsiquira.php');
}
else if($seccion_url=='adicionar_imagen'){
  include('addrimagn.php');
}

//====== parametros Audio ======//
else if($seccion_url=='audio'){
  include('audoiquira.php');
}
else if($seccion_url=='adicionar_audio'){
  include('addraudio.php');
}

//====== parametros Item ======//
else if($seccion_url=='item'){
  include('itmiquira.php');
}
else if($seccion_url=='adicionar_item'){
  include('addritem.php');
}

//====== Fin Parametros ======//
else{
  if($seccion_url=='error=-1'){
    $varerror='falloacceso';
	}
  include('login.php');
}
?>

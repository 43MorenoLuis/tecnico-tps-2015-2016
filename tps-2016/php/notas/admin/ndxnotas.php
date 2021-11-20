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

// parametros login
if($seccion_url=='acceso'){
  include('ccsonotas.php');
}
else if($seccion_url=='inicio'){
  include('homenotas.php');
}

// parametros Persona
else if($seccion_url=='persona'){
  include('psnanotas.php');
}
else if($seccion_url=='adicionar_persona'){
  include('addrpersona.php');
}

// parametros estudiante
else if($seccion_url=='estudiante'){
  include('studientnotas.php');
}
else if($seccion_url=='adicionar_estudiante'){
  include('addrestudiante.php');
}

// parametros 1001
else if($seccion_url=='1001'){
  include('1001student.php');
}

// parametros 1002
else if($seccion_url=='1002'){
  include('1002student.php');
}

// parametros 1101
else if($seccion_url=='1101'){
  include('1101student.php');
}

// parametros 1102
else if($seccion_url=='1102'){
  include('1102student.php');
}

// parametros docentes
else if($seccion_url=='docente'){
  include('docntsnotas.php');
}
else if($seccion_url=='adicionar_docente'){
  include('addrdcnts.php');
}
else if($seccion_url=='Docente_Asignatura'){
  include('docenteasig.php');
}
else if($seccion_url=='Docente_Grado'){
  include('docentegra.php');
}

// parametros asignatura
else if($seccion_url=='asignatura'){
  include('asignaturanotas.php');
}
else if($seccion_url=='adicionar_asignatura'){
  include('addrasignatura.php');
}

// Parametros usuario
else if($seccion_url=='user'){
  include('login.php');
}
else if($seccion_url=='adicionar_user'){
  include('addruser.php');
}

// Parametros Salir 
else if($seccion_url=='Inicia_Sesion'){
  include('login.php');
}

//FIN PARAMETROS
else {
  if($seccion_url=='error=-1'){
    $varerror='falloacceso';
  }
  include('login.php');
}
?>

<?php

// ----------------------------------------------------------------------------------------------
// DATOS SERVIDOR
// ----------------------------------------------------------------------------------------------
/*$Server = $_SERVER['SERVER_NAME'] ;
$Ruta = $_SERVER['PHP_SELF'] ;
$Carpeta = dirname($_SERVER['SCRIPT_NAME']);
/*
echo 'SERVER: '.$Server.'<br>';
echo 'Ruta: '.$Ruta.'<br>';
echo 'Carpeta: '.$Carpeta.'<br><br><br>';
*/

// ----------------------------------------------------------------------------------------------
// TOMA URL
// ----------------------------------------------------------------------------------------------
//$url = $_SERVER['PATH_INFO'];
$codigo_elemento='';
$url = $_SERVER["REQUEST_URI"]; // toma carpeta

if($online == true){
	$url = $Server.$url;
}

$url_pagina=$url;

//echo $url_pagina;

//echo $url."<br>";
//$url = $_SERVER["PHP_SELF"];
// If for some reason $_SERVER["PATH_INFO"] does not work then
// you could use $_SERVER["REQUEST_URI"] or $_SERVER["PHP_SELF"]
// Remove the /index.php/ at the beginning REMOVER LA EXTENSION

$url = preg_replace('/^(\/)/','',$url);



// ----------------------------------------------------------------------------------------------
// EXPLOTA EL ARRAY URL
// ----------------------------------------------------------------------------------------------
$url = explode('/',$url);
//print_r($url); // Display array

//TOTAL DE VARIABLES EN EL ARRAY URL
$totalVariables = count($url);
//echo 'total: '.$totalVariables.'<br><br>';



// ----------------------------------------------------------------------------------------------
// REGLA PARA EL DESGLOCE
// ----------------------------------------------------------------------------------------------
//echo '<hr />';
$codigo_nota=0;
//NIVEL 1 - PAGINA INICIAL O  DE CONTENIDO
//echo $totalVariables;

if ($totalVariables == 3){

	$contenido = 1;
	//PAGINA INICIAL
	if (empty($url[1])) {
		//echo 'va al inicio';
		$contenido = 1;

		$seccion_pagurl='nada';

	}

	else {
		//SI ES BUSQUEDA
		//if (strpos($url[1], "buscar=") !== false) echo "Lo contiene";
		//$esBusqueda = substr($url[1] , 0, 7);

		//PAGINA DE CONTENIDO

		//	$seccion = $url[1];
		//	$contenido = 2;


			//paginado
			//echo $url[2];
			$seccion_url = $url[2];
			$seccion_pagurl=$seccion_url;
			$valores_url = explode('?',$seccion_url);

			$varia_array1=(int) count($valores_url);
			//echo  $varia_array1;
			//Una Variables
			$seccion = $valores_url[0]; //nombre de seccion
			if($varia_array1>1){
				$codigo_elemento = $valores_url[1]; //variable
			}
			//  n Variables
			$codigos_url = explode('-',$codigo_elemento);
			$varia_array2=(int) count($codigos_url);

			$codigo_elemento1 = $codigos_url[0]; //variable 1
			if($varia_array2>1){
				$codigo_elemento2 = $codigos_url[1]; //variable 2
				$codigo_elemento3 = $codigos_url[2]; //variable 2
		  }

			$contenido = 2;

			$seccion_pagurl=$seccion_url;

			$valores_url = explode('cdgint',$seccion_url);
			$varia_array3=(int) count($valores_url);
			if($varia_array3>1){
				$seccion_pagurl = $valores_url[0]; //nombre de seccion
				$codigo_elemento = $valores_url[1]; //variable
			}
			//$seccion_pagurl=str_replace("-", "", $seccion_pagurl);



	}

}
elseif ($totalVariables == 4){

	$contenido = 3;


	$seccion_url = $url[1];
	$titulo_url = $url[2];

	$seccion_pagurl=$seccion_url;
	$subseccionurl=$url[2];
			$valores_url = explode('cdgint',$titulo_url);


			//Una Variables
			$seccion = $valores_url[0]; //nombre de seccion
			$codigo_elemento = $valores_url[1]; //variable

			//  n Variables
			//$codigos_url = explode('-',$codigo_elemento);
			//$codigo_elemento1 = $codigos_url[0]; //variable 1
			//$codigo_elemento2 = $codigos_url[1]; //variable 2
			//$codigo_elemento3 = $codigos_url[2]; //variable 2

}






?>

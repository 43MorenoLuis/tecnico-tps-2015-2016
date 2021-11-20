<?php

$conn=pg_connect("host=localhost dbname=libros user=postgres password=123456") or die("No hay conexion a la base de datos".pg_last_error());

?> 
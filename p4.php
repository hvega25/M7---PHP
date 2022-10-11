<?php

$db_host = "localhost";
$db_nombre = "tabla";
$db_usuario = "localhost";
$db_host = "";

$connexio = mysqli_connect($db_host, $db_nombre,$db_usuario,$db_host);

$consulta = "SELECT * FROM tabla";


$tabla = mysqli_query($connexio, $consulta);



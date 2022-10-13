<?php
$db_host = "localhost";
$db_nombre = "products";
$db_usario = "root";
$db_passwd = "";

$connexio = mysqli_connect($db_host, $db_usario, $db_passwd, $db_nombre);

$name = $_GET["name"] ;
$description = $_GET["description"] ;
$price = $_GET["price"];

$instruccion_SQL = "INSERT INTO PRODUCTS (name,productos,price) VALUES ('$name','$description','$price')";
$resultado = mysqli_query($connexio,$instruccion_SQL);
mysqli_close($connexio);


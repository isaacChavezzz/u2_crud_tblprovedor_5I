<?php

$server = "localhost";
$user = "root";
$password = "";
$nombre_basedatos = "telcelprov";

$db = mysqli_connect($server, $user, $password, $nombre_basedatos);

if (!$db)
    die("No se pudo conectar a la base de datos: " . mysqli_connect_error());

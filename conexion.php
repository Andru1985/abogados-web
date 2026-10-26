<?php

// Configuración de conexión
$host = "localhost";
$usuario = "root";
$password = "";
$bd = "bufete";

$conexion = new mysqli($host, $usuario, $password, $bd);

if($conexion->connect_error){

    die("Error de conexión");

}

?>
<?php

$server = "localhost";
$db = "sg_barber";
$usuario = "root";
$contrasena = "";

try {
    $conexion = new PDO("mysql:host=$server;dbname=$db", $usuario, $contrasena);
    echo "conexión exitosa";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

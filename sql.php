<?php
$server = "localhost";
$user = "root";
$password = "Juan74334274";
$conexion = new mysqli($server, $user, $password);
if($conexion ->connect_error){
    die("Conexion fallida: " . $conexion->connect_error);
}
echo "Conexion exitosa";
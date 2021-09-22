<?php
// Archivo de configuración para conectarse3 a la Base de datos
//
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basededatos = "database";
// Realizar cadena de conección
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);

if (!$conexion){
    echo "Error: No se pudo conectar a Server MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}else {
echo "Conexión Exitosa";
}
?>
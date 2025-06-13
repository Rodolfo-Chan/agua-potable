<?php
// Datos de conexión a la base de datos
$host = "localhost"; // Nombre del servidor (generalmente "localhost" si está en el mismo servidor)
$usuario = "Dzonot"; // Nombre de usuario de la base de datos
$contrasena = "1234"; // Contraseña de la base de datos
$basededatos = "aguadzonot"; // Nombre de la base de datos

// Crear una conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $basededatos);

// Verificar si la conexión tiene errores
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// La conexión está lista para ser utilizada para consultas a la base de datos

// ... Tu código aquí ...

// Cerrar la conexión cuando hayas terminado

?>

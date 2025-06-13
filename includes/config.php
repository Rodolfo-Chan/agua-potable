<?php


/* Creando una nueva conexión a la base de datos. */
$conn = new mysqli("localhost", "Dzonot", "1234", "aguadzonot");

/* Comprobando si hay un error de conexión. */
if ($conn->connect_error) {
    die('Error de conexion ' . $conn->connect_error);
}
?>
<?php
//controlador_login.php
session_start();
if (!empty($_POST["btningresar"])){
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        
        $sql = $conn->query("SELECT * FROM usuario WHERE usuario='$usuario' AND clave='$password'");
        // Assuming successful login
if ($datos = $sql->fetch_object()) {
    $_SESSION["id"] = $datos->id;
    $_SESSION["nombre"] = $datos->nombre;
    $_SESSION["apellido"] = $datos->apellido;
    header("location: index.php");
} else {
    echo "<div class='p-3 mb-2 bg-danger text-white'>Acceso denegado</div>";
}


    } else {
        
        echo "<div class='p-3 mb-2 bg-warning text-dark'>Campos vacíos</div>";

    }
}
?>

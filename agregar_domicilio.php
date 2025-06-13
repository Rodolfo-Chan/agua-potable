<?php
// agregar_domicilio.php
include 'config.php';
// Verificamos si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibimos y sanitizamos los datos del formulario
    $id_contribuyente = filter_input(INPUT_POST, 'id_contribuyente_modal', FILTER_VALIDATE_INT);
    $direccion = filter_input(INPUT_POST, 'direccion', FILTER_SANITIZE_STRING);
    $descripcion_domicilio = filter_input(INPUT_POST, 'descripcion_domicilio', FILTER_SANITIZE_STRING);
    $tipo_servicio = filter_input(INPUT_POST, 'tipoServicio', FILTER_VALIDATE_INT);
    $total_tomas = filter_input(INPUT_POST, 'total_tomas', FILTER_VALIDATE_INT);
    $estatus = filter_input(INPUT_POST, 'estatus', FILTER_SANITIZE_STRING);

    $fecha_contrato_input = filter_input(INPUT_POST, 'fecha_contrato', FILTER_SANITIZE_STRING);

    // Convertir la fecha al formato "YYYY-MM-DD" con el día 01
    $fecha_contrato = date('Y-m-01', strtotime($fecha_contrato_input));

    // Añade la validación y procesamiento adicional según tus necesidades

    // Insertar datos en la tabla "domicilios"
    $sql_domicilio = "INSERT INTO domicilios (id_contribuyente, id_tipo_de_servicio, direccion, total_tomas, descripcion_domicilio, estatus, fecha_contrato) 
                      VALUES ('$id_contribuyente', '$tipo_servicio', '$direccion', '$total_tomas', '$descripcion_domicilio', '$estatus', '$fecha_contrato')";

    $response = array();

    if ($conn->query($sql_domicilio) === TRUE) {
        $response['message'] = "Registro del domicilio insertado correctamente.";
        $response['type'] = 'success';
    } else {
        $response['message'] = "Error al insertar el registro del domicilio: " . $conn->error;
        $response['type'] = 'error';
    }

    // Enviar la respuesta en formato JSON
    header('Content-Type: application/json');
    echo json_encode($response);

    // No cerramos la conexión a la base de datos aquí, ya que se utiliza desde config.php
}
?>

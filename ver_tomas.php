<?php
//ver_tomas.php
require 'config.php';

$id_contribuyente = $_POST['id_contribuyente'];

$sql = "SELECT c.nombre, c.apellido,d.direccion, d.fecha_contrato, d.descripcion_domicilio, d.total_tomas, d.estatus,d.id_tipo_de_servicio,id_domicilio, s.descripcion, s.precio
        FROM domicilios d
        INNER JOIN contribuyentes c ON d.id_contribuyente = c.id_contribuyente
        LEFT JOIN tipos_de_servicio s ON d.id_tipo_de_servicio = s.id_tipo_de_servicio
        WHERE d.id_contribuyente = $id_contribuyente";

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $output = '<tr>';
    $total_tomas = 0; // Variable para almacenar la suma

    while ($row = $resultado->fetch_assoc()) {
        $output .= '<td>' . $row['direccion'] . '</td>';
        $output .= '<td>' . $row['id_domicilio'] . '</td>';
        $output .= '<td>' . $row['id_tipo_de_servicio'] . '</td>';
        $output .= '<td>' . $row['fecha_contrato'] . '</td>';
        $output .= '<td>' . $row['descripcion'] . '</td>';
        $output .= '<td>' . $row['precio'] . '</td>';
        $output .= '<td style="color: ' . ($row['estatus'] == 'Activo' ? 'green' : 'red') . ';">' . $row['estatus'] . '</td>';
        $output .= '<td>' . (empty($row['descripcion_domicilio']) ? '___________' : $row['descripcion_domicilio']) . '</td>';
        $output .= '<td style="' . ($row['total_tomas'] > 1 ? 'color: red; font-weight: bold;' : '') . '">' . $row['total_tomas'] . '</td>';
        $output .= '<td>';
        $output .= '<button type="button" class="btn btn-primary btn-editar" data-toggle="modal" data-target="#editModal" data-id-domicilio="' . $row['id_domicilio'] . '" data-id-tipo-servicio="' . $row['id_tipo_de_servicio'] . '">Editar</button>';
        $output .= '</td>';
        
        // Nuevo botón para dar de baja
        $output .= '<td>';
        $output .= '<button type="button" class="btn btn-warning btn-editar-estatus" data-toggle="modal" data-target="#estatusModal" data-id-domicilio="' . $row['id_domicilio'] . '">Editar Estatus</button>';
        $output .= '</td>';
        $output .= '<td>';
        $output .= '</td>';
        
        $output .= '</tr>';

        $total_tomas += $row['total_tomas']; // Suma el valor de la columna
    }

    $output .= '<tr><td colspan="6" style="text-align: right;">Total de tomas: </td><td>' . $total_tomas . '</td><td colspan="3"></td></tr>'; // Muestra la suma

    echo $output;
} else {
    echo '<tr><td colspan="3">Sin tomas registradas</td></tr>';
}
?>

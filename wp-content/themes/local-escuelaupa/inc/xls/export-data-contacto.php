<?php
require_once '../../../../../wp-config.php';
global $wpdb;
global $db;
$fecha = date("Y-m-d");
$auth = true;
if ($auth) {
    $alert = '';
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=ESCUELUPA-contactos-".$fecha.".xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    $res = '<table>
    <tr>
        <th>Fecha</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo Electr&oacute;nico</th>
        <th>Teléfono</th>
        <th>Mensaje</th>
    </tr>';
    if ($result = $wpdb->get_results("SELECT * FROM contacto ORDER BY fecha DESC")) {
      foreach ( $result as $results )
      {
        $res .= '<tr>
        <td>' . $results->fecha . '</td>
        <td>' . $results->nombre . '</td>
        <td>' . $results->apellido . '</td>
        <td>' . $results->correo . '</td>
        <td>' . $results->telefono . '</td>
        <td>' . $results->mensaje . '</td>
    </tr>';
}
}
$res .= '</table>';
echo $res;
}
?>

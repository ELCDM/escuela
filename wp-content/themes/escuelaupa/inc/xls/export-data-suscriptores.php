<?php
require_once '../../../../../wp-config.php';
global $wpdb;
global $db;
$fecha = date("Y-m-d");
$auth = true;
if ($auth) {
    $alert = '';
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=ESCUELUPA-suscriptores-".$fecha.".xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    $res = '<table>
    <tr>
        <td>Fecha</td>
        <td>Correo</td>
    </tr>';
    if ($result = $wpdb->get_results("SELECT * FROM suscripciones ORDER BY fecha DESC")) {
      foreach ( $result as $results )
      {
        $res .= '<tr>
        <td>' . $results->fecha . '</td>
        <td>' . $results->correo . '</td>
    </tr>';
}
}
$res .= '</table>';
echo $res;
}
?>

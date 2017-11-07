<?php
require_once "../../../../wp-config.php";
global $wpdb, $post;
$fecha = date("Y-m-d H:i:s");

include_once 'mail/class.phpmailer.php';
include_once 'mail/class.pop3.php';
include_once 'mail/class.smtp.php';

function sendSendgridEmail($para1, $para2, $para3, $subject, $body_text, $body_html, $from, $fromName)
{
  $url = 'https://api.sendgrid.com/';
  $user = 'ElCentro';
  $pass = 'E1C3ntr0';
  $json_string = array(

    'to' => array(
      $para1, $para2, $para3
      ),
    'category' => 'test_category'
    );


  $params = array(
    'api_user'  => $user,
    'api_key'   => $pass,
    'x-smtpapi' => json_encode($json_string),
    'to'        => $para1,
    'subject'   => $subject,
    'html'      => $body_html,
    'text'      => $body_text,
    'from'      => $from,
    );


  $request =  $url.'api/mail.send.json';

// Generate curl request
  $session = curl_init($request);
// Tell curl to use HTTP POST
  curl_setopt ($session, CURLOPT_POST, true);
// Tell curl that this is the body of the POST
  curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
// Tell curl not to return headers, but do return the response
  curl_setopt($session, CURLOPT_HEADER, false);
// Tell PHP not to use SSLv3 (instead opting for TLS)
  curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// obtain response
  $response = curl_exec($session);
  curl_close($session);

// print everything out
  //print_r($response);
}


//************FORMULARIO CONTACTO**************
if($_REQUEST['contacto'] != ''){
  $wpdb->insert('contacto',
    array(
      'id' => 'NULL',
      'fecha' => $fecha,
      'nombre' => $_REQUEST['nombre'],
      'apellido' => $_REQUEST['apellido'],
      'telefono'=> $_REQUEST['telefono'],
      'correo' => $_REQUEST['correo'],
      'mensaje' => $_REQUEST['mensaje']
      ),
    array(
      '%d',
      '%s',
      '%s',
      '%s',
      '%s',
      '%s',
      '%s'
      )
    );

  //$toaddress = 'sergio.calderon@elcentrodemarketing.com, emachapin@gmail.com, info@cooperativaupa.com, cmunoz@cooperativaupa.com, analucia.juarez@elcentrodemarketing.com, mercadeoupamicoope@gmail.com';
  $toaddress1 = 'sergio.calderon@elcentrodemarketing.com';
  $toaddress2 = ' ';
  $toaddress3 = ' ';
  $subject = 'Escuela UPA Contácto';
  $message = '<table width="300" border="1" style="color: #000; ">
  <tr style="background: #3ea43a; "><td colspan="2">
    <h3 style="text-align: center; background: #3ea43a; color:#fff; ">CONTACTO</h3>
  </td></tr>
  <tr><td>Nombre:</td><td>' . $_REQUEST['nombre'] .'</td></tr>
  <tr><td>Apellido:</td><td>' . $_REQUEST['apellido'] .'</td></tr>
  <tr><td>Correo:</td><td>' . $_REQUEST['correo'] .'</td></tr>
  <tr><td>Teléfono:</td><td>' . $_REQUEST['telefono'] .'</td></tr>
  <tr><td>Mensaje:</td><td>' . $_REQUEST['mensaje'] .'</td></tr>
</table>';
    // sendEmail($toaddress, $subject, $message);
//sendSendgridEmail($toaddress1, $toaddress2, $toaddress3, $subject, $message, $message, "contactoescuela@escuelaupa.com", "Escuela UPA Contacto");
echo 10;
}

//************FORMULARIO CURSO**************
if($_REQUEST['curso'] != ''){
  $wpdb->insert('cursos',
    array(
      'id' => 'NULL',
      'fecha' => $fecha,
      'nombre' => $_REQUEST['nombre'],
      'correo' => $_REQUEST['correo'],
      'telefono'=> $_REQUEST['telefono'],
      'curso' => $_REQUEST['nombre-curso'],
      'comentario' => $_REQUEST['comentario']
      ),
    array(
      '%d',
      '%s',
      '%s',
      '%s',
      '%s',
      '%s',
      '%s'
      )
    );

  //$toaddress = 'sergio.calderon@elcentrodemarketing.com, emachapin@gmail.com, info@cooperativaupa.com, cmunoz@cooperativaupa.com, analucia.juarez@elcentrodemarketing.com, mercadeoupamicoope@gmail.com';
  $toaddress1 = 'sergio.calderon@elcentrodemarketing.com';
  $toaddress2 = ' ';
  $toaddress3 = ' ';
  $subject = 'Escuela UPA CURSO';
  $message = '<table width="300" border="1" style="color: #000; ">
  <tr style="background: #3ea43a; "><td colspan="2">
    <h3 style="text-align: center; background: #3ea43a; color:#fff; ">CURSO</h3>
  </td></tr>
  <tr><td>Nombre:</td><td>' . $_REQUEST['nombre'] .'</td></tr>
  <tr><td>Correo:</td><td>' . $_REQUEST['correo'] .'</td></tr>
  <tr><td>Teléfono:</td><td>' . $_REQUEST['telefono'] .'</td></tr>
  <tr><td>Curso:</td><td>' . $_REQUEST['nombre-curso'] .'</td></tr>
  <tr><td>Comentario:</td><td>' . $_REQUEST['comentario'] .'</td></tr>
</table>';
    // sendEmail($toaddress, $subject, $message);
//sendSendgridEmail($toaddress1, $toaddress2, $toaddress3, $subject, $message, $message, "contactoescuela@escuelaupa.com", "Escuela UPA Contacto");
echo 10;
}

//************FORMULARIO CURSO**************
if($_REQUEST['suscripcion'] != ''){
  $wpdb->insert('suscripciones',
    array(
      'id' => 'NULL',
      'fecha' => $fecha,
      'correo' => $_REQUEST['correo']
      ),
    array(
      '%d',
      '%s',
      '%s'
      )
    );

  //$toaddress = 'sergio.calderon@elcentrodemarketing.com, emachapin@gmail.com, info@cooperativaupa.com, cmunoz@cooperativaupa.com, analucia.juarez@elcentrodemarketing.com, mercadeoupamicoope@gmail.com';
  $toaddress1 = 'sergio.calderon@elcentrodemarketing.com';
  $toaddress2 = ' ';
  $toaddress3 = ' ';
  $subject = 'Escuela UPA CURSO';
  $message = '<table width="300" border="1" style="color: #000; ">
  <tr style="background: #3ea43a; "><td colspan="2">
    <h3 style="text-align: center; background: #3ea43a; color:#fff; ">CURSO</h3>
  </td></tr>
  <tr><td>Nombre:</td><td>' . $_REQUEST['nombre'] .'</td></tr>
  <tr><td>Correo:</td><td>' . $_REQUEST['correo'] .'</td></tr>
  <tr><td>Teléfono:</td><td>' . $_REQUEST['telefono'] .'</td></tr>
  <tr><td>Curso:</td><td>' . $_REQUEST['nombre-curso'] .'</td></tr>
  <tr><td>Comentario:</td><td>' . $_REQUEST['comentario'] .'</td></tr>
</table>';
    // sendEmail($toaddress, $subject, $message);
//sendSendgridEmail($toaddress1, $toaddress2, $toaddress3, $subject, $message, $message, "contactoescuela@escuelaupa.com", "Escuela UPA Contacto");
echo 100;
}
?>
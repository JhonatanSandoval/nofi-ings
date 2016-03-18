<?php

require_once 'PHPMailer/class.phpmailer.php';
require_once 'PHPMailer/class.smtp.php';

$mail = new PHPMailer();

$mensaje = "Se ha recibido un nuevo email de contacto desde la página web de Nofi-Ing's <br/><br/>";

$mensaje .= "<b>" . $_POST['name'] . " " . $_POST['surname'] . "</b> escribió: <br/>";
$mensaje .= "<b>Servicio: </b>" . $_POST['service'] . "<br/>";
$mensaje .= "<b>Mensaje: </b>" . $_POST['your-message'] . "<br/><br/>";

$mensaje .= " Puede responder a la dirección de correo que dejó: " . $_POST['email'];

$mail->From = 'noreply@nofi-ings.com';
$mail->FromName = $_POST['name'] . " " . $_POST['surname'];
$mail->Subject = "Nuevo contacto desde el sitio web Nofi-Ing's";
$mail->MsgHTML($mensaje);
$mail->AddAddress('nofi-ingenieros@hotmail.com', '');

$mail->IsHTML(true);
$mail->CharSet = 'UTF-8';

if ($mail->Send()) {
    echo 'ok';
} else {
    echo 'fallo';
}
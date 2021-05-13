<?php
$nombre = $_POST['nombre'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$colegio = $_POST['colegio'];
$provincia = $_POST['provincia'];
$localidad = $_POST['localidad'];
$mensaje = $_POST['mensaje'];
$email_from = 'noreply@crearte.com.ar';
$email_subject = 'Nuevo contacto desde la web';
$email_body = "Cliente: $nombre.\n".
    "Cliente: $tel.\n".
    "Cliente: $mail.\n".
    "Cliente: $colegio.\n".
    "Cliente: $provincia.\n".
    "Cliente: $localidad.\n".
    "Cliente: $mensaje.\n";

$to = "diazignaciojoaquin@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $mail \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
?>

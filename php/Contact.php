<?php
$para = 'dn.barrientossalas@gmail.com';
$asunto = "Mensaje de la pagina Daniel Barrientos";
$mailheader = "from: "._POST["email"]."\r\n";
$mailheader .= "Reply-To: "._POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=utf-8\r\n";
mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die('Error al enviar el correo');
$MESSAGE_BODY = "Nombre: "._POST["name"]."\n";
$MESSAGE_BODY .= "\n<br>Email: "._POST["email"]."\n";
$MESSAGE_BODY .= "\n<br>Mensaje: ".nl2br($_POST["message"])."\n";
?>
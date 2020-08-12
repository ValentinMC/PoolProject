<?php
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $dni = $_POST['dni'];
  $fecha_construccion = $_POST['fecha_construccion'];
  $email = $_POST['email'];
  $tlf = $_POST['tlf'];

  $email_from = "$email";

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $nombre.\n".
                            "Here is the message:\n $tlf".
  $to = "valentincalin.99@gmail.com";

   $headers = "From: $email_from \r\n";

   mail($to,$email_subject,$email_body,$headers);
?>

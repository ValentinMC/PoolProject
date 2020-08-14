<?php
//Hay que verificar primero que el puerto 25 del SMPT no esta ocupado
//u obstruido por el firewall
if(isset($_POST['submit'])){
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $dni = $_POST['dni'];
  $fecha_construccion = $_POST['fecha_construccion'];
  $email = $_POST['email'];
  $tlf = $_POST['tlf'];

  //$email_from = $email;

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $nombre.\n".
                            "Here is the message: $tlf".
  $to = "valentincalin.99@gmail.com";

   $headers = "From: $email \r\n";

   mail($to,$email_subject,$email_body,$headers);
}
?>

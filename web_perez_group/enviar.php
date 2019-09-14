<?php

$mail='daiana.campos04@gmail.com';


$nombre = $_POST['nombre'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$thank="enviado.html";

$message = "
nombre:".$nombre."
phone:".$phone."
email:".$email."
mensaje:".$mensaje."";

if (mail($mail,"Formulario de Consulta", $message))
Header ("Location:", $thank);
?>
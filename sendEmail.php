<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$message = $_POST['message'];

if(!empty($nome) &&
   !empty($email) &&
   !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)){

  $to      = 'cabichosecaprichos@gmail.com';
  $subject = "Mensagem de $nome a partir do Site";
  $message .= "\r\n\r\n De: $nome \r\n Email: $email";
  $headers = 'From: cabichosecaprichos@gmail.com' . "\r\n" .
             'Reply-To: cabichosecaprichos@gmail.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
}

header("Location: http://$_SERVER[HTTP_HOST]");
die();

<?php
session_start();
$email = ($_POST['email']);
$sujet = utf8_decode($_POST['sujet']);
$message = utf8_decode($_POST['message']);
$header= 'From: <'.$email.'>'."\r\n";
$header.= 'Reply-to: <'.$email.'>'."\r\n";
$to ='lorenzadamour@gmail.com';

if (mail($to, $sujet, $message, $header))
{
  echo "Votre message à été envoyé";
}
else {
" erreur";
}


?>

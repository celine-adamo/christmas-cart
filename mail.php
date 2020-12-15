<?php

require_once '../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 2525))
  ->setUsername('78312fd5dda912')
  ->setPassword('8666f1a023e4a7')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Vous avez reçu une carte !'))
  ->setFrom(['john@doe.com' => 'John Doe'])
  ->setTo([$_POST['email']])
  ->setBody("{$_POST['message']} http://localhost/noel/carte.html", 'text/html' )

  ;

// Send the message
$result = $mailer->send($message);
/* if($result){
    echo json_encode(["message"=>'Votre mail à bien été envoyé !']);
} */
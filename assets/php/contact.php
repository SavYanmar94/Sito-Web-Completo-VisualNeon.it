<?php
 $to = "info.visualneon@gmail.com";
 $subject = $_POST['subject'];
 $body = "From, ".$_POST['name']."\n\n"."Email, ".$_POST['email']."\n\n".$_POST['message'];
 if (mail($to, $subject, $body)) {
  $responseArray = array('class' => 'alert alert-success', 'message' => 'Messaggio inviato con successo. Grazie ti faremo sapere prima possibile!');
  } else {
$responseArray = array('class' => 'alert alert-danger', 'message' => 'Errore. Per favore riprova.');
     
  }

    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;

 ?>
<?php

//Who will receive the message?

$mailto = "contato@letecacom.live";

//where did it came from?

$from = "Message from your website";

//retrieve all data from the form

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

//retrieve the message

$text = $_POST['mssg'];

//now the message that will be sent to the email

$message = "<br><strong> Name: </strong>" .$name;
$message .= "<br><strong> Message: </strong>" .$text;
$message .= "<br><strong> Email: </strong>" .$email;
$message .= "<br><strong> Phone: </strong>" .$phone
.$_POST['message'];

//codification / headers

$headers = "Content-Type:text/html; charset=UTF-8\n";
$headers .= "from: yoursite.com.br\n";
$headers .= "X-Sender: <$email>\n";
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <$email>\n";
$headers .= "MIME-Version: 1.0\n";

//function that actually sends the email
mail($mailto, $from, $message, $headers);
header("Location: ".$_SERVER['HTTP_REFERER']."");
?>
<?php

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$topic = $_POST['topic'];
$body = $_POST['body'];
$body = str_replace("\n.", "\n..", $body)."\n\n"."Reply to: $email";

mail("dbdplayerstats@gmail.com", "$topic - $name", $body);

$_SESSION['emailSend'] = "Your email has been sended! Now wait for reply";

header('Location: /contact');
<?php

$name = $_POST["ime-priimek"];
$email = $_POST["email"];
$besedilo = $_POST["besedilo"];
$recieverMail = "kristjan.srdoc@gmail.com";
$header = "Pošiljatelj: " . $name . $email;

mail($recieverMail, "", $besedilo, $header);
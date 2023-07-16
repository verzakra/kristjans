<?php

$name = $_POST["ime-priimek"];
$email = $_POST["email"];
$checkBox = $_POST["fiz-oseba"];
$podjejte = $_POST["podjetje"];
$davcna = "SI".$_POST["davcna"];
$besedilo = $_POST["besedilo"];


$recieverMail = "kospendavitan@gmail.com";

if((isset($checkBox)) || empty($checkBox)){
    $zadeva = "Pošiljatelj: " . $name ." <". $email .">\r\n";
}
else{
    $zadeva = "Pošiljatelj: " . $name ." <". $email .">" . " Podjetje: " . $podjejte . " Davčna št.: " . $davcna;
}


mail($recieverMail, $zadeva, $besedilo);

echo "Sporočilo poslano!";
?>
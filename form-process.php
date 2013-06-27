<?php

$name1 = $_POST["name1"];
$name2 = $_POST["name2"];
$verb = $_POST["verb"];
$title = $_POST["title"];
$place = $_POST["place"];
$adverb = $_POST["adverb"];
$email = $_POST["email"];

var_dump($_POST);


$message = "This is a story about when ".$name1." met ".$name2."
They instantly fell in ".$verb.". 
It wasn't long until he made her his ".$title.".
Together they moved far away, to a quiet ".$place."
and lived ".$adverb." ever after. ";

$message = wordwrap($message,70,"\r\n");

$headers = "From: nobody@gmail.com";

echo($message);
echo mail("priscillachan__@hotmail.com", "A Mad Lib for You", $message, $headers); 

?> 
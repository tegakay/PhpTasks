<?php 

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];




$myfile = fopen("$firstName.txt", 'a') ;

$new = "First NAme: " .$firstName . PHP_EOL ."Last Name:". $lastName . PHP_EOL . "Email" . $email . PHP_EOL;


$write = fwrite($myfile, $new);

fclose($myfile);

echo "FIle created"

 ?>
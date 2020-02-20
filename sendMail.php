<?php
error_reporting(E_ALL);ini_set('display_errors', 1);
if (isset($_GET["submit"])){
     $firstname = $_GET["firstname"];
     $lastname = $_GET["lastname"];
	 $email = $_GET["email"];
	 $phone = $_GET["phone"];
	 $to = "augmentchinedu@gmail.com";
	         $subject = "Client Support";
	         $mail = $firstname." \n".$lastname." \n".$email." ".$phone." ".$message."\n";
	         $header = "From: contact@newohens.com";
         mail ($to,$subject,$mail,$header);
}
?>

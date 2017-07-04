<?php
$name = $_POST["name"];
$email = $_POST["email"];
$details = $_POST["details"];

//echo "<pre>";
$emailBody = "<pre>";
$emailBody .= "Name ". $name . "\n";
$emailBody .= "Email " . $email . "\n";
$emailBody .= "Details ". $details . "\n </pre>";
//echo $emailBody;
//echo "</pre>";

//To Do send email
//NOTE: Header will not work if you are echoing to the screen. So commented out the echos above.
header("location:thanks.php");
?>
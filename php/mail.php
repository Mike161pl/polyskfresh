<?php

$name = $_POST["name"];
$from = $_POST["email"];
$subject = $_POST["subject"];
$phone = $_POST["tel"];
$to = "michalplaszczak@o2.pl";
$message = $_POST["message"];
 
$txt = "Imię: " . $name . "\r\n\" . "Email: " . $from . "\r\n" . "Temat: " . $subject . \r\n" . "Treść: " . $message;

$headers = "From:" . $from . "\r\n";
$headers = "Reply-To:" . $from . "\r\n";

$mail_status= mail($to, $subject, $txt, $headers);
if($mail_status){
    header("Location:/index.html?mail_status=sent");
}else{
    header("Location:/index.html?mail_status=error");
}
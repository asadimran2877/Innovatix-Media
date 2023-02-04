<?php
$name =$_POST['name'];
$visitor_email=$_POST['email'];
$subject =$_POST['subject'];
$message=$_POST['message'];

$email_from = "From: $email";
$email_subject="Subject: $subject";
$email_body="User Name: $name.\n"."User Email: $visitor_email.\n"."User message: $message.\n";

$to="info@innovatix.media";
$headers="From: $email_from \r\n";
$headers="Reply-To: $visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);

header("Location: success.html");

?>

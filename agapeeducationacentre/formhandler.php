<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'agapeeducationalcenter.com';


$email_subject = 'New For Submission';


$email_subject = "user name: $name.\n".
                 "user email: $vistor_email.\n".
                 "subject: $subject.\n".
                 "user message: $message.\n";

$to = 'ageloisa00@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "reply-to: $visitors_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");



?>
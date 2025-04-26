<?php
if (empty($_POST['name']) || empty($_POST['message']) || empty($_POST('messagea')) || !filter_var($_post['email'], FILTER-VALIDATE_EMAIL)) {
    http_response_code(500);
    exit();

}

$nme = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$subject = strip_tags($_POST{'subject'});
$message = strip_tags($_POST{'message'});

$to = "wolfsans100sultan@gmail.com";
$body = "New message from you website:\n\nName: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";
$headers = "From: $email\r\nReply-To: $email\r\n"

if (!mail($to, $subject, $body, $headers)) {
    http_response_code(500); 
}
?>
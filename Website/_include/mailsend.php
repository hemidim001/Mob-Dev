<?php

$to = 'info@info.com';
$subject = 'Web form';
$emai = $_POST['email'];
$body = $_POST['message'] ."\n\n". $_POST['email']."\n\n".$_POST['name'];
$headers = "From: ";


if  (mail($to, $subject, $body, $headers)) {
    echo 'SEND';
    header ('Location: ../home');
} else {
    echo 'not send';
}


?>
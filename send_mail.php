<?php

require_once './Mailer.php';

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$tel = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
$privacyPolicyAccepted = isset($_POST['privacy-policy']) ? true : false;

$sendMail = new Mailer();

$sendMail->send($name, $email, $tel, $message, $privacyPolicyAccepted);
<?php

require_once './Mailer.php';

function sanitizeSendingFormInputs($form_data) {
    $sanitized_data = [];

    foreach ($form_data as $key => $value) {
        // Sanitacja adresu email
        if ($key === 'email') {
            $sanitized_data[$key] = filter_var($value, FILTER_SANITIZE_EMAIL);
        }
        // Sanitacja numeru telefonu (usunięcie niepożądanych znaków)
        else if ($key === 'phone') {
            $sanitized_data[$key] = filter_var($value, FILTER_SANITIZE_NUMBER_INT);
        }
        // Sanitacja tekstu (np. imię i nazwisko, wiadomość)
        else if (is_string($value)) {
            $sanitized_data[$key] = filter_var($value, FILTER_SANITIZE_STRING);
        }
        // Sprawdzenie statusu checkboxa
        else if ($key === 'privacy-policy') {
            $sanitized_data[$key] = !empty($value);
        }
    }

    return $sanitized_data;
}

console.log($sanitized_data);

// Użycie funkcji
$sanitized_post_data = sanitizeSendingFormInputs($_POST);


$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$tel = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
$privacyPolicyAccepted = isset($_POST['privacy-policy']) ? true : false;

$sendMail = new Mailer();

$sendMail->send($name, $email, $tel, $message, $privacyPolicyAccepted);
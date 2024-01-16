<?php

require_once './Mailer.php';

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$tel = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
$privacyPolicyAccepted = isset($_POST['privacy-policy']) ? true : false;

$sendEmail = new Mailer();

$formType = $_POST['formType'];

if ($formType == 'contactForm') {
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);    
    $sendEmail->sendContactForm($name, $email, $tel, $message, $privacyPolicyAccepted);

    } elseif ($formType == 'insuranceForm') {

        $plate = filter_var($_POST['plate'], FILTER_SANITIZE_STRING);
        $model = filter_var($_POST['model'], FILTER_SANITIZE_STRING);
        $year = filter_var($_POST['year'], FILTER_SANITIZE_NUMBER_INT);
        $capacity = filter_var($_POST['capacity'], FILTER_SANITIZE_NUMBER_INT);
        $fuel=filter_var($_POST['fuel'], FILTER_SANITIZE_STRING);
        $ownerName =filter_var($_POST['ownerName'], FILTER_SANITIZE_STRING);
        $drivingLicenseDate=filter_var($_POST['drivingLicenseDate'], FILTER_SANITIZE_STRING);
        $postalCode=filter_var($_POST['postalCode'], FILTER_SANITIZE_STRING);
        $beginInsuranceDate=filter_var($_POST['beginInsuranceDate'], FILTER_SANITIZE_STRING);
        $vehiclePurchase=filter_var($_POST['vehiclePurchase'], FILTER_SANITIZE_STRING);
        $youngestOwnerAge=filter_var($_POST['youngestOwnerAge'], FILTER_SANITIZE_STRING);

        $sendEmail->sendInsuranceForm($name, $email, $tel, $privacyPolicyAccepted, $plate, $model, $year, $capacity, $fuel, $ownerName, $drivingLicenseDate, $postalCode, $beginInsuranceDate, $vehiclePurchase, $youngestOwnerAge);
    }
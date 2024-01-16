<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'phpmailer/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once './ClassPHP/SMTPconfiguration.php';
require_once './ClassPHP/ContactFormValidator.php';
// require_once './ClassPHP/DBConnection.php';

class Mailer {
    private SMTPconfiguration $smptconfig; 
    private ContactFormValidator $validator;

    public function __construct() {
        $this->smptconfig = new SMTPconfiguration();
        $this->validator = new ContactFormValidator();
    }

    public function send($email, $subject, $body) {
        $mail = new PHPMailer(true);
        
        try {
            // Konfiguracja serwera SMTP
            $mail->isSMTP();
            $mail->Host = $this->smptconfig->host;
            $mail->SMTPAuth = true;
            $mail->Username = $this->smptconfig->user;
            $mail->Password = $this->smptconfig->pass;
            $mail->SMTPSecure = 'ssl';
            $mail->Port = $this->smptconfig->port;

            // Odbiorcy
            $mail->setFrom('k_adrian@wp.pl', 'Klient');
            $mail->addAddress('kaczmarbejbi@gmail.com');
            $mail->addReplyTo($email);

            // Treść
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $body;

            $mail->send();
            echo json_encode(["message" => '<h1 class="successHeader">Wiadomość wysłana!</h1>']);
        } catch (Exception $e) {
            echo json_encode(["error" => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
        }
    }

    public function sendContactForm($name, $email, $tel, $message, $privacyPolicyAccepted) {
        $this->validator->validate($name, $email, $tel, $message, $privacyPolicyAccepted);
        // Logika walidacji...
        $subject = 'Zapytanie od: ' . $name;
        $body = '<strong>Nr tel:</strong> '. $tel .'<br><br><strong>Treść wiadomości:</strong> '. $message;
        $this->send($email, $subject, $body);
    }

    public function sendInsuranceForm($name, $email, $tel,$privacyPolicyAccepted, $plate, $model, $year, $capacity, $fuel, $ownerName, $drivingLicenseDate, $postalCode, $beginInsuranceDate, $vehiclePurchase, $youngestOwnerAge) {
        $this->validator->validate($name, $email, $tel, $privacyPolicyAccepted);
        $subject = 'Formularz ubezpieczeniowy od: ' . $name;
        $body = "<strong>Imię i nazwisko:</strong> $name<br>"
        . "<strong>Email:</strong> $email<br>"
        . "<strong>Telefon:</strong> $tel<br>"
        // Tutaj dodaj pozostałe pola
        . "<strong>Numer rejestracyjny:</strong> $plate<br>"
        . "<strong>Marka i model:</strong> $model<br>"
        . "<strong>Rok produkcji:</strong> $year<br>"
        . "<strong>Pojemność silnika:</strong> $capacity<br>"
        . "<strong>Rodzaj paliwa:</strong> $fuel<br>"
        . "<strong>Imię i nazwisko właściciela:</strong> $ownerName<br>"
        . "<strong>Data uzyskania prawa jazdy:</strong> $drivingLicenseDate<br>"
        . "<strong>Kod pocztowy zameldowania:</strong> $postalCode<br>"
        . "<strong>Data rozpoczęcia ochrony:</strong> $beginInsuranceDate<br>"
        . "<strong>Miesiąc i rok nabycia pojazdu:</strong> $vehiclePurchase<br>"
        . "<strong>Wiek najmłodszego użytkownika
pojazdu:</strong> $youngestOwnerAge";
        $this->send($email, $subject, $body);
    }
}


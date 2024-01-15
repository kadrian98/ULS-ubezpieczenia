<?php

class ContactFormValidator {
    private $errors = [];
    
    public function validate($name, $email, $tel, $message, $privacyPolicyAccepted) {
        
        $this->errors = [];
        
        
       
        $this->validateName($name);
        $this->validateEmail($email);
        $this->validatePhoneNumber($tel);
        $this->validateMessage($message);
        $this->checkBoxStatus($privacyPolicyAccepted);
        
        $this->sendErrorToArray();
    
        return $this->errors;
    }
    
    
    private function validateName($name) {
        if (empty($name)) {
            $this->errors['name'] = 'Nie podałeś imienia i nazwiska!';
        }
    }
    
    private function validateEmail($email) {
        if (empty($email)) {
            $this->errors['email'] = "Nie podałeś maila, na który ma zostać wysłana odpowiedź!";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Podany adres e-mail jest nieprawidłowy!";
        }
    }

    private function validatePhoneNumber($tel) {
        if (empty($tel)) {
            $this->errors['phone'] = "Nie podałeś numeru telefonu do kontaktu!";
        } elseif (!filter_var($tel, FILTER_VALIDATE_INT)) {
            $this->errors['phone'] = "Podany numer telefonu jest nieprawidłowy!";
        }
    }
    
    private function validateMessage($message) {
        if (empty($message)) {
            $this->errors['message'] = "Nie wysłałeś zapytania!";
        }
    }

    private function checkBoxStatus($privacyPolicyAccepted){
        if (!$privacyPolicyAccepted) {
            // 'value' to wartość, którą oczekujesz, że checkbox będzie miał, jeśli jest zaznaczony
            $this->errors['privacy-policy'] = "Zaznacz zgodę na przetwarzanie danych!";
        }else{  
            return;
        }
    }
    
    private function sendErrorToArray() {
        if (!empty($this->errors)) {
            http_response_code(400); 
            echo json_encode(["errors" => $this->errors]);
            exit;
        }
    }
}

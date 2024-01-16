<?php

class ContactFormValidator {
    private $errors = [];
    
    public function validate($value) {
        
        $this->errors = [];

        $args = func_get_args();
        $num_args = func_num_args();
    
        for ($i = 0; $i < $num_args; $i++) {
            $value = $args[$i];
            switch ($i) {
                case 0:
                    $this->validateName($value);
                    break;
                case 1:
                    $this->validateEmail($value);
                    break;
                case 2:
                    $this->validatePhoneNumber($value);
                    break;
                case 3:
                    if ($num_args == 5) {
                        $this->validateMessage($value);
                    } else {
                        $this->checkBoxStatus($value);
                    }
                    break;
                case 4:
                    $this->checkBoxStatus($value);
                    break;
            }
        }

        // $this->validateName($name);
        // $this->validateEmail($email);
        // $this->validatePhoneNumber($tel);
        // $this->validateMessage($message);
        // $this->checkBoxStatus($privacyPolicyAccepted);
        
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

<?php 

    namespace Classes\Errors;

    use Classes\Account\ValidateCredentials;

    class Errors extends ValidateCredentials {
        
        public function incorrectLoginInputs () {
            
            if (isset($_POST['login'])) {
              
                if ($this->login() !== TRUE) {
                
                $errorMsg = "Incorrect email/password";
                return $errorMsg;
            }
                
            }
        }
        
        public function cannotSignUp () {
            
            if (isset ($_POST['submit'])) {
                
                if ($this->signup() == TRUE) {
                    
                    $errorMsg = "Username/email already exists";
                    return $errorMsg;
                }
            }
        }
        
        public function cannotRecoverPassword () {
            
            if (isset($_POST['reset'])) {
                
                if ($this->emailDoesNotExist() == FALSE) {
                    
                    $errorMsg = "Email does not exist";
                    return $errorMsg;
                }
            }
        }
    }
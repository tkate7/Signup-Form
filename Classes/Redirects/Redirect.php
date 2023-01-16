<?php 

    namespace Classes\Redirects;

    use Classes\Account\ValidateCredentials;

    class Redirect extends ValidateCredentials {
        
        public function redirectAfterLogin () {
            
            if (isset($_POST['login'])) {
                
                if ($this->login() == TRUE) {
                    
                    header('LOCATION: ../Display/Dashboard_page.php?success = Logged In Successfully');
                    
                } 
            }
        }
        
        public function redirectAfterSignup () {
            
            if (isset($_POST['submit'])) {
                
                if ($this->signup() == FALSE) {
                    
                    header('LOCATION:../../View/Index/Login.php?success = Signed up succesfully');
                }
            }
        }
    }
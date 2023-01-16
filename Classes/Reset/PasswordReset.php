<?php 

    namespace Classes\Reset;
    
    use Classes\Database\Database;

    class PasswordReset extends Database {
        
        public function resetPassword () {
           
            if (isset($_POST['reset'])) {
                
                $email = $_POST['pw-reset'];
                $sql = "SELECT email FROM users WHERE email='$email'";
                $result = $this->connect()->query($sql);
                $numRows = $result->num_rows;

                if ($numRows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        $data[] = $row;
                    }

                    return $data;
                
                }
            }  
        }
        
        public function sendResetCode () {
            
            if (isset($_POST['reset'])) {
             
                if ($this->resetPassword() == FALSE) {
                
                $errMsg = "Email does not exist";
                return $errMsg;
                
            } else {
                
                header ('Location: ../Display/Email_sent_page.php?success= Password recovery link sent');
            }
                
            }
        }
    }
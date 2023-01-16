<?php 

    namespace Classes\Account;

    use Classes\Database\Database;

    class ValidateCredentials extends Database {
        
        //validate if username and password exists
        
        public function login () {
            
            if (isset ($_POST['login'])) {
                
                $username = $_POST['user'];
                $password = $_POST['pw'];
                $sql = "SELECT username, password FROM users WHERE username='$username' AND password='$password'";
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
        
        public function signup () {
            
            //validate if there are no duplicate usernames before signing up
            
            if (isset($_POST['submit'])) {
                
                $user = $_POST['username'];
                $email = $_POST['email'];
                $sql = "SELECT username, email FROM users WHERE username ='$user' OR email ='$email'";
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
        
        public function signUpNewUser () {
            
            if (isset($_POST['submit'])) {
                
                if ($this->signup() == FALSE) {
      
                //if there are no duplicate usernames, sign the user up
                    
                $name = $_POST['name'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
            

                $sql = "INSERT INTO users (name, email, username, password) VALUES ('$name', '$email', '$username', '$password')";
                        
                $conn = $this->connect();
                mysqli_query($conn, $sql); 
                    
                header ('LOCATION: ../../View/Display/Login_after_signup_page.php');
                       
                }
            }
        }
    }
    
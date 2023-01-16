<!DOCTYPE html>

<?php 

    require_once "../../Autoload/Autoloader/Autoload.php";

    $conn = new Classes\Database\Database;
    $conn->connect();

    $login = new Classes\Account\ValidateCredentials;
    $login->login();

    $signup = new Classes\Account\ValidateCredentials;
    $signup->signup();

    $signupNewUser = new Classes\Account\ValidateCredentials;
    $signupNewUser->signUpNewUser();

    $cannotSignUp = new Classes\Errors\Errors;
    $invalid = $cannotSignUp->cannotSignUp();

    include_once "../Display/Signup_page.php";

?>


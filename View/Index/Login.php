<!DOCTYPE html>

<?php 

    include_once "../../Autoload/Autoloader/Autoload.php";

    $redirectAfterLogin = new Classes\Redirects\Redirect;
    $redirectAfterLogin->redirectAfterLogin(); 

    $wrongLogin = new Classes\Errors\Errors;
    $displayErrorLogin = $wrongLogin->incorrectLoginInputs();
        
    include_once "../../View/Display/Login_page.php";

?>
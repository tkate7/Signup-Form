<?php

    include_once "../../Autoload/Autoloader/Autoload.php";

    $resetPassword = new Classes\Reset\PasswordReset;
    $resetPassword->resetPassword();

    $sendResetCode = new Classes\Reset\PasswordReset;
    $invalidEmail = $sendResetCode->sendResetCode();

    include_once "../Display/Reset_password_page.php";